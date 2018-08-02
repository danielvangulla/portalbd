<?php

namespace App\Http\Controllers;

use Validator;
use Input;
use Redirect;
use Session;
use Auth;
use Illuminate\Http\Request;

class AbsensiKaryawanController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
	
    public function index()
    {
		$karyawan = \App\AbsensiKaryawan::all();
		$outlet = [1=>"Big Data"];
        return View('absensi.karyawan.index', 
		compact('karyawan','outlet'));
    }

    public function create()
    {
		$departemen = \App\AbsensiDepartemen::pluck('keterangan','id');
		$departemensub = \App\AbsensiDepartemensub::pluck('keterangan','id');
		$jabatan = \App\AbsensiJabatan::pluck('keterangan','id');
		$groupgaji = \App\AbsensiGroupgaji::pluck('keterangan','id');
		$outlet	= \App\AbsensiKaryawan::outlet();
        return View('absensi.karyawan.create', 
		compact('jabatan','outlet','departemen','departemensub','groupgaji'));
    }

    public function store(Request $request)
    {
		$rules = array(
			'idmesin' => 'required|unique:absensi_karyawans',
			'tgllahir' => 'required',
			'alamat' => 'required',
			'tlp' => 'required',
			'email' => 'required',
			'ktp' => 'required',
			'tglmasuk' => 'required',
			'nama' => 'required'
		);
		
		$validator = Validator::make(Input::all(),$rules);
		
		if ($validator->fails()) {
			return Redirect::to('/absensi/karyawan/create')
					->withErrors($validator)
					->withInput(Input::except('password'));
		} else {
			$x = new \App\AbsensiKaryawan;
			$x->idmesin 			= $request->idmesin;
			$x->outlet 				= $request->outlet;
			$x->nama 				= $request->nama;
			$x->lahir 				= $request->lahir;
			$x->tgllahir 			= $request->tgllahir;
			$x->alamat 				= $request->alamat;
			$x->tlp 				= $request->tlp;
			$x->email 				= $request->email;
			$x->ktp 				= $request->ktp;
			$x->agama 				= $request->agama;
			$x->kelamin 			= $request->kelamin;
			$x->stat_kawin 			= $request->stat_kawin;
			$x->tglmasuk 			= $request->tglmasuk;
			$x->departemen_id 		= $request->departemen_id;
			$x->departemensub_id	= $request->departemensub_id;
			$x->jabatan_id 			= $request->jabatan_id;
			$x->groupgaji_id 		= $request->groupgaji_id;
			$x->save();
			
			Session::flash('message','Data berhasil disimpan..');
			return Redirect::to('/absensi/karyawan');
		}
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
	
}
