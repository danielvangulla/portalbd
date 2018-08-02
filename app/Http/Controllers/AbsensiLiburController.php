<?php

namespace App\Http\Controllers;

use Validator;
use Input;
use Redirect;
use Session;
use Auth;
use Illuminate\Http\Request;

class AbsensiLiburController extends Controller
{
    public function index()
    {
        $rd	= \App\AbsensiLibur::orderBy('tgl')->get();
		return View('absensi.libur.display',
		compact ('rd'));
    }

    public function save(Request $request)
    {
        if($request->ajax()){
			
			$req 	= $request->data[0];
			$a				= New \App\AbsensiLibur;
			$a->tgl			= $req['tgl'];
			$a->keterangan	= $req['keterangan'];
			$a->save();
			
			return "ok";
		}
    }

    public function hapus($id)
    {
        \App\AbsensiLibur::find($id)->delete();
		return "ok";
    }
}
