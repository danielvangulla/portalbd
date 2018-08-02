<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	
    public function __construct()
    {
        // $this->middleware('auth');
    }

	
    public function home()
	{
		return View('dashboard-new');
	}
	
    public function homeNew()
	{
		return View('dashboard-new');
	}
	
    public function map($no)
	{
		return View('map'.$no);
	}
	
	public function banjir()
	{
		return View('bencana.banjir.index');
	}
	
	public function longsor()
	{
		return View('bencana.longsor.index');
	}
	
	public function kemiskinan()
	{
		return View('kemiskinan.index');
	}
	
	public function lingkungan()
	{
		return View('penduduk.lingkungan.rpk');
	}
	
	public function cctvHome()
	{
		return View('cctv.cctv-home');
	}
	
	public function geoportal()
	{
		return View('content.geoportal');
	}
	
	public function profilManado()
	{
		return View('content.profilmanado');
	}
	
	public function sarpras()
	{
		return View('content.sarpras');
	}
	
	public function sfjalan()
	{
		return View('content.sfjalan');
	}
	
	public function penduduk()
	{
		return View('content.penduduk');
	}
	
}
