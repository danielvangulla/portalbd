<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/', 'HomeController@home');
route::get('/new', 'HomeController@homeNew');
route::get('/map/{no}', 'HomeController@map');

route::get('/bencana/banjir', 'HomeController@banjir');
route::get('/bencana/longsor', 'HomeController@longsor');
route::get('/bencana/kemiskinan', 'HomeController@kemiskinan');
route::get('/penduduk/lingkungan', 'HomeController@lingkungan');
route::get('/profil-manado', 'HomeController@profilManado');
route::get('/sarpras', 'HomeController@sarpras');
route::get('/sfjalan', 'HomeController@sfjalan');
route::get('/penduduk', 'HomeController@penduduk');


route::get('/cctv/home', 'HomeController@cctvHome');
route::get('/geoportal', 'HomeController@geoportal');


Auth::routes();
Route::prefix('absensi')->group(function () {

	route::get('/', 'AbsensiController@index');

	route::get('/pengaturan-jabatan', 'AbsensiPengaturanController@pengaturanJabatan');
	route::get('/pengaturan-departemen', 'AbsensiPengaturanController@pengaturanDepartemen');
	route::post('/setupPeriode', 'AbsensiPengaturanController@setupPeriode');
	route::post('/setupIP', 'AbsensiPengaturanController@setupIP');

	route::resource('/karyawan', 'AbsensiKaryawanController');
	route::resource('/komponen-penghasilan', 'AbsensiKomponenGajiController');

	Route::resource('group-penghasilan','AbsensiGroupGajiController');
	Route::post('group-detail/store','AbsensiGroupGajiController@storeDetail');

	route::get('/libur', 'AbsensiLiburController@index');
	route::post('/libur-save', 'AbsensiLiburController@save');
	route::get('/libur-hapus/{id}', 'AbsensiLiburController@hapus');

	route::get('/upload-absensi', 'AbsensiProsesController@uploadAbsensi');
	route::post('/upload-absensi-file', 'AbsensiProsesController@uploadFile');

	route::get('/laporan-kehadiran-filter', 'AbsensiLaporanController@laporanKehadiranFilter');
	route::get('/laporan-kehadiran-hasil', 'AbsensiLaporanController@laporanKehadiranHasil');

});


Route::prefix('api')->group(function () {

	route::get('/pbb/{nop}', 'ApiController@pbb');
	
});
