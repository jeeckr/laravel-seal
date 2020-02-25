<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', 'HomeController@index')->name('home');

// Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin',  'middleware' => ['admin']], function () {
	Route::get('/', 'Admin\AdminController@index')->name('admin');

	Route::get('/siswa', 'Admin\SiswaController@index')->name('siswa');
	Route::get('/siswa/tambah', 'Admin\SiswaController@create')->name('siswaTambah');
	Route::post('/siswa/tambah', 'Admin\SiswaController@store')->name('siswaStore');
	Route::get('/siswa/edit/{id}', 'Admin\SiswaController@edit')->name('siswaEdit');
	Route::put('/siswa/edit/{id}', 'Admin\SiswaController@update')->name('siswaUpdate');
	Route::get('/siswa/{id}', 'Admin\SiswaController@destroy')->name('siswaHapus');

	Route::get('/guru', 'Admin\GuruController@index')->name('guru');
	Route::get('/guru/tambah', 'Admin\GuruController@create')->name('guruTambah');
	Route::post('/guru/tambah', 'Admin\GuruController@store')->name('guruStore');
	Route::get('/guru/edit/{id}', 'Admin\GuruController@edit')->name('guruEdit');
	Route::put('/guru/edit/{id}', 'Admin\GuruController@update')->name('guruUpdate');
	Route::get('/guru/{id}', 'Admin\GuruController@destroy')->name('guruHapus');

	Route::get('/mapel', 'Admin\MapelController@index')->name('mapel');
	Route::get('/mapel/detail/{id}', 'Admin\MapelController@show')->name('detailMateri');
	Route::get('/mapel/tambah', 'Admin\MapelController@create')->name('mapelTambah');
	Route::post('/mapel/tambah', 'Admin\MapelController@store')->name('mapelStore');
	Route::get('/mapel/{id}', 'Admin\MapelController@destroy')->name('mapelHapus');

	Route::get('/materi/tambah', 'Admin\MateriController@create')->name('materiTambah');
	Route::post('/materi/tambah', 'Admin\MateriController@store')->name('materiStore');
	Route::get('/mapel/detail/materi/{id}', 'Admin\MateriController@destroy')->name('materiHapus');

	Route::get('/pengajar', 'Admin\PengajarController@index')->name('pengajar');

	Route::get('/kelas', 'Admin\KelasController@index')->name('kelas');
	Route::get('/kelas/detail/{id}/siswa', 'Admin\KelasController@detailSiswa')->name('detailSiswa');
	Route::get('/kelas/detail/{id}/mapel', 'Admin\KelasController@detailMapel')->name('detailMapel');
});

Route::middleware('guest')->group(function () {
	Route::get('login/admin', 'NativeAuth\LoginAdminController@index')->name('loginAdmin');
	Route::post('login/admin', 'NativeAuth\LoginAdminController@store')->name('loginAdminStore');
	Route::get('login/siswa', 'NativeAuth\LoginSiswaController@index')->name('loginSiswa');
	Route::post('login/siswa', 'NativeAuth\LoginSiswaController@store')->name('loginSiswaStore');
	Route::get('login/guru', 'NativeAuth\LoginGuruController@index')->name('loginGuru');
	Route::post('login/guru', 'NativeAuth\LoginGuruController@store')->name('loginGuruStore');

	Route::get('/registrasi/guru', 'NativeAuth\RegisterGuruController@index')->name('formRegisterGuru');
	Route::get('/registrasi/siswa', 'NativeAuth\RegisterSiswaController@index')->name('formRegisterSiswa');
	Route::post('/registrasi/guru', 'NativeAuth\RegisterGuruController@create')->name('createGuru');
	Route::post('/registrasi/siswa', 'NativeAuth\RegisterSiswaController@create')->name('createSiswa');
});

Route::prefix('guru')->middleware('guru')->group(function () {
	Route::get('dashboard', 'Guru\GuruController@index')->name('homeGuru');
});

Route::prefix('siswa')->middleware('siswa')->group(function () {
	Route::get('/dashboard', 'Siswa\SiswaController@index')->name('homeSiswa');

	Route::get('/dashboard/profil', 'Siswa\ProfilController@index')->name('profilSiswa');

	Route::get('/dashboard/mapel/{id}', 'Siswa\MapelController@index')->name('mapelSiswa');
});

Route::get('logout', 'NativeAuth\LogoutController@index')->name('logout');
