<?php

namespace App\Http\Controllers;

use DB;
use Validator;
use Input;
use Redirect;
use Session;
use Auth;
use Illuminate\Http\Request;

class AbsensiProsesController extends Controller
{
    
	public function uploadAbsensi()
	{
		$setup = \App\AbsensiSetup::find(1);
		$outlet = Auth::user()->outlet;
		
		return View('absensi.absen.upload', compact('setup', 'outlet'));
	}
    
	public function uploadFile()
	{
		ini_set('max_execution_time', 0);
		$now = Date('Y-m-d');
		$outlet = Input::get('outlet');
		
		$dir = base_path() . "/public/absen/BigData".$outlet." (".$now.").txt";
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $dir)) {
			$lines=[];
			$file = fopen($dir, "r");
			while (!feof($file))
			{
				$line = fgets($file);
				$line = trim($line);
				
				$isi = explode("\t", $line);
				if (count($isi)>1){
					$push = "";
					try { 
						$isix = explode(" ", $isi[1]);
						$push = $isi[0]." ".$isix[0]." ".$isix[1];
					} catch (Exception $e){
						return $e;
					}
					array_push($lines, $push);
				}
			}
			fclose($file);
			
			
			foreach ($lines as $linex){
				$xline = explode(" ", $linex);
				
				$fixdate	= $xline[1]."\t".$xline[2];
				$PIN		= $xline[0];
				$DateTime	= $fixdate;
				$tgl		= $xline[1];
				
				$x = \App\AbsensiTemp::where('outlet','=',$outlet)->where('idmesin','=',$PIN)->where('tgl','=',$tgl)->where('jamabsen','=',$DateTime)->first();
				
				if (count($x) == 0){
					$x			= new \App\AbsensiTemp;
					$x->outlet	= $outlet;
					$x->tgl		= $tgl;
					$x->idmesin	= $PIN;
					$x->jamabsen	= $DateTime;
					$x->save();				
				}
			}
			
			$xx = $this->prosesTemp();
			
			if ($xx == "ok"){
				$xxx = $this->prosesAbsensi();
				if ($xxx == "ok"){
					Session::flash('message','Data Absen Berhasil di Upload...!!');
					return Redirect::to("/absensi/upload-absensi");
				} else {
					return $xxx;
				}
			} else {
				return $xx;
			}
		} else {
			Session::flash('message','Data Gagal di Upload. Pastikan File ber-ekstensi ".txt" dan Upload Kembali!');
			return Redirect::back();
		}
	}


	public function prosesTemp()
	{
		ini_set('max_execution_time', 0);
		$setup		= \App\AbsensiSetup::find(1);
		$start		= $setup->absenperiod1;
		$end		= $setup->absenperiod2;
		
		$karyawan = \App\AbsensiKaryawan::all();

		foreach ($karyawan as $k=>$v){
			$PIN	= $v->idmesin;
			$tempx	= \App\AbsensiTemp::select('tgl')->where('idmesin','=',$PIN)
										->where('tgl','>=',$start)->where('tgl','<',$end)
										->orderBy('tgl')->groupBy('tgl')->get();
			
			foreach ($tempx as $aa=>$bb){
				$tglcek	= $bb->tgl;
				$temp	= \App\AbsensiTemp::select(DB::raw('outlet,tgl,jamabsen'))
										->where('idmesin','=',$PIN)
										->where('tgl','=',$tglcek)
										->orderBy('jamabsen')->get();
										
				foreach ($temp as $k=>$r) {
					$logabsen	= \App\AbsensiRekap::where('tglabsen','=',$tglcek)->where('idmesin','=',$PIN,'AND')->first();
					if (count($logabsen) == 0){
						$logabsen 			= New \App\AbsensiRekap;
						$logabsen->idmesin	= $PIN;
						$logabsen->tglabsen	= $tglcek;
						$logabsen->outlet	= $r->outlet;
						$logabsen->save();
					}
					
					$tglskrg		= date("Y-m-d", strtotime($tglcek));
					$jamabsentime	= strtotime($r->jamabsen);
					$jamistirahat1	= strtotime($tglcek."	12:00:00");
					$jamistirahat2	= strtotime($tglcek."	12:30:00");
					$jamistirahat3	= strtotime($tglcek."	13:00:00");
					
					
					if ($jamabsentime < $jamistirahat1){
						if ($jamabsentime < strtotime($logabsen->masuk)){
							$logabsen->masuk = $r->jamabsen;
						}
						
					}else if ($jamabsentime >= $jamistirahat1 && $jamabsentime <= $jamistirahat2){
						$logabsen->outistirahat	= $r->jamabsen;
						
					}else if ($jamabsentime >= $jamistirahat2 && $jamabsentime <= $jamistirahat3){
						$logabsen->inistirahat = $r->jamabsen;
						
					}else {
						if ($jamabsentime > strtotime($logabsen->pulang)){
							$logabsen->pulang = $r->jamabsen;
						}
					}

					$diff	= date_diff($logabsen->pulang, $logabsen->masuk);
					return $diff;
					$durasi	= $diff->format("%R%H hours");
					
					$logabsen->durasi = $durasi;
					$logabsen->save();
				}
			}
		}
		
		return "ok";
	}
	
	
	public function prosesAbsensi()
	{
		ini_set('max_execution_time', 0);
		$setup = \App\AbsensiSetup::find(1);
		$start = $setup->absenperiod1;
		$end = $setup->absenperiod2;
		//$hs=(($JAM_TELAT>=1 and $JAM_TELAT<=15) ? 9000 : ($JAM_TELAT>=16 and $JAM_TELAT<=30) ? 18000 : ($JAM_TELAT>=31 and $JAM_TELAT<=60) ? 36000 : 72000);          
		$karyawan = \App\AbsensiKaryawan::all();
		
		foreach ($karyawan as $v=>$k)
		{
			$karyawan_id = $k->id;
			$idmesin = $k->idmesin;
			$oRange = new DateRange(new DateTime($start), new DateTime($end), DateInterval::createFromDateString("1 day") );
			foreach ($oRange as $oDate)
			{
				$tgl = $oDate->format('Y-m-d');
				$tgloff = $tgl." 01:00:00";
				$jadwalmasuk = $tgl." 07:45:00";
				$jadwalpulang = $tgl." 17:00:00";
				$absenmasuk = "";
				$absenoutistirahat = "";
				$abseninistirahat = "";
				$absenpulang = "";
				$cek = 0;
				$masukawal = 0;
				$terlambat = 0;
				$lamaistirahat = 0;
				$pulangawal = 0;
				$jamefektif = 0;
				$overtime = 0;
				$status = "NoJdwl";
				
				$jadwal = Jadwal::where('karyawan_id','=',$karyawan_id)->where('tgl','=',$tgl,'AND')->get();                    
				foreach ($jadwal as $vj => $kj)
				{
					$jadwalmasuk = $kj->start;
					$jadwalpulang = $kj->end;
				}
				$logabsen = Logabsen::where('tglabsen','=',$tgl)->where('idmesin','=',$idmesin,'AND')->get();
				foreach ($logabsen as $vl => $kl)
				{
					$absenmasuk = $kl->masuk;
					$absenoutistirahat = $kl->outistirahat;
					$abseninistirahat = $kl->inistirahat;
					$absenpulang = $kl->pulang;
					
					$cekmasuk 	= strtotime($absenmasuk);
					$cekout 	= strtotime($absenoutistirahat);
					$cekin 		= strtotime($abseninistirahat);
					$cekpulang 	= strtotime($absenpulang);
					
					if ($cekmasuk > 0){ $cek = $cek+1; }
					if ($cekout > 0){ $cek = $cek+1; }
					if ($cekin > 0){ $cek = $cek+1; }
					if ($cekpulang > 0){ $cek = $cek+1; }
				}
				$selisihmasuk = 0;                   
				$selisihpulang = 0;
				
				if ($jadwalmasuk !== "0000-00-00 00:00:00" and $jadwalpulang !== "0000-00-00 00:00:00")
				{ 
					if($jadwalmasuk == $tgloff and $jadwalpulang == $tgloff)
					{
						$status = "L"; // Libur / Off
					}
					else if ($absenmasuk !== "0000-00-00 00:00:00" and $absenpulang !== "0000-00-00 00:00:00")
					{
						$status = "H";
						$selisihmasuk = round((strtotime($jadwalmasuk) - strtotime($absenmasuk)) / 60,2);
						
						if ($selisihmasuk < 0) {
							$terlambat = $selisihmasuk;
						} else {
							$masukawal = $selisihmasuk;
						}
						
						$selisihpulang = round((strtotime($absenpulang) - strtotime($jadwalpulang)) / 60,2);
						
						if ($selisihpulang < 0) {
							$pulangawal = $selisihpulang;
						}
						$jamefektif = round((strtotime($absenpulang) - strtotime($absenmasuk)) / 60,2);
						
						$out = strtotime($absenoutistirahat);
						$in = strtotime($abseninistirahat);
						if ($out != 0 and $in != 0){
							$lamaistirahat = abs($out - $in) / 60;
						}
					}
					else
					{
						$status = "A";
						
						$exception	= Exceptions::where("tgl","=",$tgl)
												->where("karyawan_id","=",$karyawan_id)
												->where("stat","=",1)->count();
						if ($exception >= 1){
							$status = "H";
						}
					}
				}
				
				//cek absensi
				$absen = Absen::where('tgl','=',$tgl)->where('karyawan_id','=',$karyawan_id,'AND')->first();
				//-----------
				if (count($absen) == 0) 
				{
					$absen 				= new Absen;
					$absen->karyawan_id	= $karyawan_id;
					$absen->tgl			= $tgl;
				}
				
				$absen->jadwalmasuk			=$jadwalmasuk;
				$absen->jadwalpulang		=$jadwalpulang;
				$absen->absenmasuk			=$absenmasuk;
				$absen->absenoutistirahat	=$absenoutistirahat;
				$absen->abseninistirahat	=$abseninistirahat;
				$absen->absenpulang			=$absenpulang;
				$absen->cek					=$cek;
				$absen->masukawal			=$masukawal;
				$absen->terlambat			=$terlambat;
				$absen->lamaistirahat		=$lamaistirahat;
				$absen->pulangawal			=$pulangawal;
				$absen->jamefektif			=$jamefektif;
				$absen->overtime			=$overtime;
				$absen->status				=$status;
				$absen->save();
			}
		}
		
		// $this->pengajuanSinkron();
		return "ok";
	}
	
}
