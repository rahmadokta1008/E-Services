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
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});

// Route untuk user 
Route::group(['prefix' => 'home', 'middleware' => ['auth']], function(){
	/*Route::get('/', function(){
		$data['role'] = \App\UserRole::whereUserId(Auth::id())->get();
		return view('user.home', $data);
	});*/
		Route::get('/dashboard','DashboardController@indexuser');
		Route::get('/dj', function () {
			return view('user.dj');
		});
	
		//penduduk
		Route::get('/tampil ','UserPendudukController@penduduk');
		Route::get('/cetak','UserPendudukController@cetak');
		
		//ini tambah pmeninggal
		Route::get('/tampil/tambahPmeninggal/{id}','UserPendudukController@tambahPmeninggal');
		Route::put('/tambahPmeninggal/masuk_pmeninggal/{id}','UserPendudukController@masuk_pmeninggal');
		Route::get('/tampilPmeninggal ','UserPendudukController@pmeninggal');
		
		//ini tambah ppindah
		Route::get('/tampil/tambahPpindah/{id}','UserPendudukController@tambahPpindah');
		Route::put('/tambahPpindah/masuk_ppindah/{id}','UserPendudukController@masuk_ppindah');
		Route::get('/tampilPpindah ','UserPendudukController@ppindah');
		
		//kk
		Route::get('/kk','UserKKController@kk');
		Route::get('/lihat_kk/{nokk}{id}', 'UserKKController@lihat_kk');


	//pembuatan surat
	Route::get('/buatsurat', 'UserSuratController@buatsurat');
	Route::get('/buatsuratcovid', 'UserSuratController@buatsuratcovid');
	Route::get('/buatsuratIzinlingkungan', 'UserSuratController@buatsuratIzinlingkungan');
	Route::get('/buatSKbelumnikah', 'UserSuratController@buatSKbelumnikah');
	Route::get('/buatSKberdomisili', 'UserSuratController@buatSKberdomisili');
	Route::get('/buatSKkematian', 'UserSuratController@buatSKkematian');
	Route::get('/buatSKktpsementara', 'UserSuratController@buatSKktpsementara');
	Route::get('/buatSKmenikah', 'UserSuratController@buatSKmenikah');
	Route::get('/buatSKtidakmampu', 'UserSuratController@buatSKtidakmampu');
	Route::get('/buatSpengantarImunisasi', 'UserSuratController@buatSpengantarImunisasi');
	Route::get('/buatSPizinkeramaian', 'UserSuratController@buatSPizinkeramaian');
	Route::get('/buatSKusaha', 'UserSuratController@buatSKusaha');
	Route::get('/buatSKakte', 'UserSuratController@buatSKakte');
	
	//ajax
	Route::get('/pengguna/{id}', 'UserSuratController@namaAjax');
	Route::get('/p/{id}', 'UserSuratController@namaAjax2');
	//proses buat surat 
	Route::put('/buatsurat/proses/{nik}', 'UserSuratController@buatsuratproses');

		//lihat data surat
		Route::get('/datasurat','UserSuratController@datasurat');
		Route::get('/datasurat/lihat/{id},{nik},{judul_surat}','UserSuratController@lihatsurat');
		Route::get('/datasurat/hapussurat/{id}','UserSuratController@hapusdatasurat');
		


});

// Route untuk user yang admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function(){
	/*Route::get('/', function(){
		$data['users'] = \App\User::whereDoesntHave('roles')->get();
		return view('admin.admin', $data);
	});*/
	Route::get('/dashboard','DashboardController@index');
	Route::get('/dj', function () {
		return view('admin.dj');
	});
		//penduduk
		Route::get('/tampil ','PendudukController@penduduk');
		Route::get('/tampil/tambah ','PendudukController@tambah');
		Route::post('/tampil/keep','PendudukController@keep');
		Route::get('/tampil/edit/{id}','PendudukController@edit');
		Route::post('/tampil/update/{id}','PendudukController@update');
		
		//ini tambah pmeninggal
		Route::get('/tampil/tambahPmeninggal/{id}','PendudukController@tambahPmeninggal');
		Route::put('/tambahPmeninggal/masuk_pmeninggal/{id}','PendudukController@masuk_pmeninggal');
		Route::get('/tampilPmeninggal','PendudukController@pmeninggal');
		Route::get('/meninggal/hapus/{nik}','PendudukController@hapus_meninggal');
		
		//ini tambah ppindah
		Route::get('/tampil/tambahPpindah/{id}','PendudukController@tambahPpindah');
		Route::put('/tambahPpindah/masuk_ppindah/{id}','PendudukController@masuk_ppindah');
		Route::get('/tampilPpindah ','PendudukController@ppindah');
		
		//kk
		Route::get('/kk','KKController@kk');
		Route::get('/lihat_kk/{nokk}{id}', 'KKController@lihat_kk');
		
		//pembuatan surat
		Route::get('/buatsurat', 'SuratController@buatsurat');
		Route::get('/buatsuratcovid', 'SuratController@buatsuratcovid');
		Route::get('/buatsuratIzinlingkungan', 'SuratController@buatsuratIzinlingkungan');
		Route::get('/buatSKbelumnikah', 'SuratController@buatSKbelumnikah');
		Route::get('/buatSKberdomisili', 'SuratController@buatSKberdomisili');
		Route::get('/buatSKkematian', 'SuratController@buatSKkematian');
		Route::get('/buatSKktpsementara', 'SuratController@buatSKktpsementara');
		Route::get('/buatSKmenikah', 'SuratController@buatSKmenikah');
		Route::get('/buatSKtidakmampu', 'SuratController@buatSKtidakmampu');
		Route::get('/buatSpengantarImunisasi', 'SuratController@buatSpengantarImunisasi');
		Route::get('/buatSPizinkeramaian', 'SuratController@buatSPizinkeramaian');
		Route::get('/buatSKusaha', 'SuratController@buatSKusaha');
		Route::get('/buatSKakte', 'SuratController@buatSKakte');
		
		//ajax
		Route::get('/pengguna/{id}', 'SuratController@namaAjax');
		Route::get('/p/{id}', 'SuratController@namaAjax2');
		//proses buat surat 
		Route::put('/buatsurat/proses/{nik}', 'SuratController@buatsuratproses');
		
		//lihat data surat
		Route::get('/datasurat','SuratController@datasurat');
		Route::get('/datasurat/lihat/{id},{nik},{judul_surat}','SuratController@lihatsurat');
		Route::get('/datasurat/hapussurat/{id}','SuratController@hapusdatasurat');
		Route::get('/cetak','PendudukController@cetak');
		

});

Route::get('/pengguna','PenggunaController@pengguna');
Route::get('/pengguna/tambah','PenggunaController@penggunatambah');
Route::post('/penggunatambah/keep','PenggunaController@penggunatambahkeep');
Route::get('/pengguna/edit/{id}','PenggunaController@editpengguna');
Route::put('/pengguna/update/{id}','PenggunaController@penggunaupdate');
Route::get('/pengguna/hapus/{id}','PenggunaController@penggunadelete'); 

Route::get('/pengelola/{id}', 'PenggunaController@namaAjax');

Route::post('/pengelola/tambah','PengelolaController@pengelola');

Route::get('/pengelola/hapus/{user_id}','PengelolaController@pengelolahapus'); 





Route::get('/datasurat/cetaksurat/{id},{nik},{judul_surat}','HomeController@cetaksurat');

Auth::routes();
Auth::routes();



//Route::get('/home', 'HomeController@index')->name('home');




	

	


