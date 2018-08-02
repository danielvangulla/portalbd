<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;

class ApiController extends Controller
{
	private function getNop($_nop)
	{
		$nop = str_split($_nop);
		$kd_propinsi	= $nop[0].$nop[1];
		$kd_dati2		= $nop[2].$nop[3];
		$kd_kecamatan	= $nop[4].$nop[5].$nop[6];
		$kd_kelurahan	= $nop[7].$nop[8].$nop[9];
		$kd_blok		= $nop[10].$nop[11].$nop[12];
		$no_urut		= $nop[13].$nop[14].$nop[15].$nop[16];
		$kd_jns_op		= $nop[17];
		
		$url .= $kd_propinsi. "/".$kd_dati2. "/".$kd_kecamatan. "/".$kd_kelurahan. "/".$kd_blok. "/".$no_urut. "/".$kd_jns_op;
		
		return $url;
	}
	
	public function pbb($_nop)
	{
		$url = "localhost:8081/pbb/datas/DAFNOM_PIUTANG/";
		$url .= $this->getNop($_nop);
		return $url;
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_TIMEOUT => 30000,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);

		if ($err) {
			echo "Web Service Error...";
		} else {
			return response()->json(json_decode($response));
		}
	}
	
	public function fiskal($_nop)
	{
		
	}
}
