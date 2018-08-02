<?php

namespace App\Http\Controllers;

use Validator;
use Input;
use Redirect;
use Session;
use Auth;
use Illuminate\Http\Request;

class AbsensiPengaturanController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
	
	public function pengaturanJabatan()
	{
		$jabatan = \App\AbsensiJabatan::all();
		return View('absensi.pengaturan.jabatan', compact('jabatan'));
	}
	
	public function pengaturanDepartemen()
	{
		$departemen = \App\AbsensiDepartemen::all();
		$departemensub = \App\AbsensiDepartemensub::all();
		return View('absensi.pengaturan.departemen', compact('departemen', 'departemensub'));
	}
	
	public function setupIP(Request $request)
	{
		if($request->ajax()){
			try {
                $req = $request->data[0];
                
                $ip		= $req['ip'];
                $key	= $req['key'];
                
				$x	= \App\AbsensiSetup::find(1);
				if ($ip!=""){ 
					$x->ipmesin = $ip; 
				}
				if ($key!=""){ 
					$x->key = $key; 
				}
				$x->save();               
               
				return "ok";
            } catch (Exception $ex) {
				return $ex;
            }
        }
	}
	
	public function setupPeriode(Request $request)
	{
		if($request->ajax()){
			try {
                $req = $request->data[0];
				
                $tgl1	= $req['tgl1'];
                $tgl2	= $req['tgl2'];
                
				$x	= \App\AbsensiSetup::find(1);
				$x->absenperiod1	= $tgl1;
				$x->absenperiod2	= $tgl2;
				$x->save();               
               
				return "ok";
            } catch (Exception $ex) {
				return "gagal";
            }              
        }
	}
}
