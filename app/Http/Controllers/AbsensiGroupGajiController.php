<?php

namespace App\Http\Controllers;

use Validator;
use Input;
use Redirect;
use Session;
use Auth;
use Illuminate\Http\Request;

class AbsensiGroupGajiController extends Controller
{
    public function index()
    {
        $group = \App\AbsensiGroupgaji::all();
        return View('absensi.group-penghasilan.indexgroup',
		compact('group'));
    }

    public function create()
    {
        return View('absensi.group-penghasilan.creategroup');
    }

    public function store(Request $request)
    {
        $rules = array(
			'keterangan' => 'required'
		);
		
		$validator = Validator::make(Input::all(),$rules);
		
		if ($validator->fails()) {
			return Redirect::to('/absensi/group-penghasilan/create')
					->withErrors($validator)
					->withInput(Input::except('password'));
		} else {
			$a 				= new \App\AbsensiGroupgaji;
			$a->keterangan 	= $request->keterangan;
			$a->save();
			
			Session::flash('message','Data Berhasil di simpan');
			return Redirect::to('/absensi/group-penghasilan');
		}
    }

	public function storeDetail(Request $request)
	{
		$rules = array(
			'formula' => 'required'
		);
		
		$validator = Validator::make(Input::all(),$rules);
		
		$id = $request->groupgaji_id;
		if ($validator->fails()) {
			return Redirect::to('absensi/group-penghasilan/'.$id)
					->withErrors($validator)
					->withInput(Input::except('password'));
		} else {
			$a = new \App\AbsensiGroupgajidetail;
			$a->groupgaji_id 	= $id;
			$a->komponengaji_id = $request->komponengaji_id;
			$a->formula 		= $request->formula;
			$a->save();
			
			Session::flash('message','Data Berhasil di simpan');
			return Redirect::to('/absensi/group-penghasilan/'.$id);
		}
	}

    public function show($id)
    {
        $group = \App\AbsensiGroupgaji::find($id);
		$groupd = \App\AbsensiGroupgajidetail::where('groupgaji_id','=',$id)->get();
		$komponen = \App\AbsensiKomponengaji::pluck('keterangan','id');
		
		return View('absensi.group-penghasilan.detailgroup',
		compact('komponen','group','groupd'));
    }

    public function edit($id)
    {
		$group = \App\AbsensiGroupgaji::find($id);
		return View('group-penghasilan.editgroup',
		compact('group'));
    }

    public function update(Request $request, $id)
    {
        $rules = array(
			'keterangan' => 'required'
		);
		
		$validator = Validator::make(Input::all(),$rules);
		
		if ($validator->fails()) {
			return Redirect::to('/absensi/group-penghasilan/'.$id.'create')
					->withErrors($validator)
					->withInput(Input::except('password'));
		} else {
			$a 				= \App\AbsensiGroupgaji::find($id);
			$a->keterangan 	= $request->keterangan;
			$a->save();
			
			Session::flash('message','Data Berhasil di simpan');
			return Redirect::to('/absensi/group-penghasilan');
		}
    }

    public function destroy($id)
    {
		$b	= \App\AbsensiGroupgajidetail::find($id);
		$b->delete();
		Session::flash('message','Data GAGAL di dihapus');
		return Redirect::back();
    }
}
