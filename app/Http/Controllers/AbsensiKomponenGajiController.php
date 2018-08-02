<?php

namespace App\Http\Controllers;

use Validator;
use Input;
use Redirect;
use Session;
use Auth;
use Illuminate\Http\Request;

class AbsensiKomponenGajiController extends Controller
{
    public function index()
    {
        $komponen = \App\AbsensiKomponengaji::all();
		return View('absensi.group-penghasilan.indexkomponen',
		compact('komponen'));
    }

    public function create()
    {
        return View('absensi.group-penghasilan.createkomponen');
    }

    public function store(Request $request)
    {
        $rules = array(
			'kode' => 'required|min:2',
			'keterangan' => 'required'
		);
		
		$validator = Validator::make(Input::all(),$rules);
		
		if ($validator->fails()) {
			return Redirect::to('/absensi/komponen-penghasilan/create')
					->withErrors($validator)
					->withInput(Input::except('password'));
		} else {
			$a 				= new \App\AbsensiKomponengaji;
			$a->kode 		= $request->kode;
			$a->keterangan 	= $request->keterangan;
			$a->jenis 		= $request->jenis;
			$a->save();
			
			Session::flash('message','Data Berhasil di simpan');
			return Redirect::to('komponen-penghasilan');
		}
    }

    public function edit($id)
    {
        $komponen = \App\AbsensiKomponengaji::find($id);
		return View('absensi.group-penghasilan.editkomponen',
		compact('komponen'));
    }

    public function update(Request $request, $id)
    {
        $rules = array(
			'kode' => 'required|min:2',
			'keterangan' => 'required'
		);

		$validator = Validator::make(Input::all(),$rules);

		if ($validator->fails()) {
			return Redirect::to('absensi/komponen-penghasilan/'.$id.'/edit')
					->withErrors($validator)
					->withInput(Input::except('password'));
		} else {
			$a = \App\AbsensiKomponengaji::find($id);
			$a->kode 		= $request->kode;
			$a->keterangan 	= $request->keterangan;
			$a->jenis 		= $request->jenis;
			$a->save();
			
			Session::flash('message','Data Berhasil di simpan');
			return Redirect::to('/absensi/komponen-penghasilan');
		}
    }

    public function destroy($id)
    {
        //
    }
}
