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

Route::get('/', function () {
	return view('welcome');
});

Route::get('/registrasi', 'NativeAuth\RegisterController@index')->name('indexRegister');
Route::get('/registrasi/guru', 'NativeAuth\RegisterController@formRegisterGuru')->name('formRegisterGuru');
Route::get('/registrasi/siswa', 'NativeAuth\RegisterController@formRegisterSiswa')->name('formRegisterSiswa');
Route::post('/registrasi/guru', 'NativeAuth\RegisterController@createGuru')->name('createGuru');
Route::post('/registrasi/siswa', 'NativeAuth\RegisterController@createSiswa')->name('createSiswa');

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin',  'middleware' => ['admin']], function () {
	Route::get('/', 'Admin\AdminController@index')->name('admin');

	Route::get('/siswa', 'Admin\SiswaController@index')->name('siswa');
	Route::get('/siswa/tambah', 'Admin\SiswaController@create')->name('siswaTambah');
	Route::post('/siswa/tambah', 'Admin\SiswaController@store')->name('siswaStore');
	Route::get('/siswa/edit', 'Admin\SiswaController@edit')->name('siswaEdit');

	Route::get('/guru', 'Admin\GuruController@index')->name('guru');
	Route::get('/guru/tambah', 'Admin\GuruController@create')->name('guruTambah');
	Route::post('/guru/tambah', 'Admin\GuruController@store')->name('guruStore');
	Route::get('/guru/edit/{id}', 'Admin\GuruController@edit')->name('guruEdit');
	Route::put('/guru/edit/{id}', 'Admin\GuruController@update')->name('guruUpdate');
	Route::get('/guru/{id}', 'Admin\GuruController@destroy')->name('guruHapus');
});

Route::middleware('guest')->group(function () {
	Route::get('login/admin', 'NativeAuth\LoginAdminController@index')->name('loginAdmin');
	Route::post('login/admin', 'NativeAuth\LoginAdminController@store')->name('loginAdminStore');
	Route::get('login/siswa', 'NativeAuth\LoginSiswaController@index')->name('loginSiswa');
	Route::post('login/siswa', 'NativeAuth\LoginSiswaController@store')->name('loginSiswaStore');
	Route::get('login/guru', 'NativeAuth\LoginGuruController@index')->name('loginGuru');
	Route::post('login/guru', 'NativeAuth\LoginGuruController@store')->name('loginGuruStore');
});

Route::prefix('guru')->middleware('guru')->group(function () {
	Route::get('dashboard', 'Guru\GuruController@index')->name('homeGuru');
});

Route::prefix('siswa')->middleware('siswa')->group(function () {
	Route::get('dashboard', 'Siswa\SiswaController@index')->name('homeSiswa');
});

Route::get('logout', 'NativeAuth\LogoutController@index')->name('logout');
