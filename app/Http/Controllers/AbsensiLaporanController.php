<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsensiLaporanController extends Controller
{
    
	public function laporanKehadiranFilter()
	{
		$outlet = \App\AbsensiKaryawan::outlet();
		return View('laporan.tanggalAbsen',
		compact("outlet"));
	}
	
	public function laporanKehadiranHasil($from,$to,$out)
	{
		ini_set('max_execution_time', 0);
		
		$karyawan = \App\AbsensiKaryawan::where('outlet','=',$out)
							->orderBy('jabatan_id')->orderBy('nama')->get();
							
		$timetgl1 = strtotime($from);
		$timetgl2 = strtotime($to);
		$periode = $from." s.d ".$to;

		$timeDiff = abs($timetgl2 - $timetgl1);
		$totalhari = $timeDiff/86400;  // 86400 seconds in one day	
		$absensi = [];
		
		foreach ($karyawan as $k=>$v)
		{
			if ($v->outlet == $out){
				$karyawan_id = $v->id;
				$outlet = \App\AbsensiKaryawan::outletCase($v->outlet);
				$idmesin = $v->idmesin;
				$tglInfo = date('d-m-Y',  $timetgl1);
				$tglQuery = date('Y-m-d', $timetgl1);
				$infoHarian = [];
				for ($i=0; $i<=$totalhari; $i++)
				{
					$absen = Absen::where('tgl','=',$tglQuery)->where('karyawan_id','=',$karyawan_id,'AND')->first();
					if ($absen) {
						$jmasuk = new DateTime($absen->jadwalmasuk);
						$jpulang = new DateTime($absen->jadwalpulang);
						$amasuk = new DateTime($absen->absenmasuk);
						$aikeluar = new DateTime($absen->absenoutistirahat);
						$aimasuk = new DateTime($absen->abseninistirahat);
						$apulang = new DateTime($absen->absenpulang);
						$telat	= $absen->terlambat;
						$late	= "";
						if ($telat <= -1 AND $telat >= -15 AND $absen->status == "H"){ 
							$late = "T1";
						} else if ($telat <= -16 AND $absen->status == "H"){
							$late = "TX";
						}
						
						$lamaist= $absen->lamaistirahat;
						$rest	= "";
						if ($lamaist >= 65){ 
							$rest = "";
						}
						
						$acek= $absen->cek;
						$cek	= "";
						if ($acek < 2 AND $absen->status == "H"){ 
							$cek = "Cek<2x";
						}
						
						$arrDay = ["jadwalin"=>$jmasuk->format("H:i:s"),"jadwalout"=>$jpulang->format("H:i:s"),
									"absenin"=>$amasuk->format("H:i:s"),
									"absenoutist"=>$aikeluar->format("H:i:s"),
									"abseninist"=>$aimasuk->format("H:i:s"),
									"absenout"=>$apulang->format("H:i:s"),
									"terlambat"=>$absen->terlambat,"pulangawal"=>$absen->pulangawal,
									"jamefektif"=>$absen->jamefektif,"lembur"=>$absen->lembur,
									"late"=>$late,
									"rest"=>$rest,
									"cek"=>$cek,
									"status"=>$absen->status];
						$infoH = ["tgl"=>$tglInfo,"detail"=>$arrDay];
					} else {
						$arrDay = ["jadwalin"=>NULL,"jadwalout"=>NULL,
									"absenin"=>NULL,
									"absenoutist"=>NULL,
									"abseninist"=>NULL,
									"absenout"=>NULL,
									"terlambat"=>NULL,"pulangawal"=>NULL,
									"jamefektif"=>NULL,"lembur"=>NULL,
									"late"=>NULL,
									"rest"=>NULL,
									"cek"=>NULL,
									"status"=>NULL];
						$infoH = ["tgl"=>$tglInfo,"detail"=>$arrDay];
					}
					
					array_push($infoHarian, $infoH);
					
					$tglInfo	= date('d-m-Y', strtotime($tglInfo . "+1 days"));
					$tglQuery = date('Y-m-d', strtotime($tglQuery . "+1 days"));
					
				}
				$detailAbsensi = ["karyawan_id"=>$karyawan_id,"outlet"=>$outlet,"idmesin"=>$idmesin,"nama"=>$v->nama,"detail"=>$infoHarian];    
				array_push($absensi, $detailAbsensi);
			}
		}
		// return $absensi;
		return View('laporan.laporan-absensi',
		compact ("absensi", "totalhari", "periode"));		
	}
	
}
