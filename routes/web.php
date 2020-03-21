<?php

use App\Events\FormSubmitted;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

	Route::get('/kepsek', 'Admin\KepsekController@index')->name('kepsek');
	Route::get('/kepsek/tambah', 'Admin\KepsekController@create')->name('kepsekTambah');
	Route::post('/kepsek/tambah', 'Admin\KepsekController@store')->name('kepsekStore');
	Route::get('/kepsek/edit/{id}', 'Admin\KepsekController@edit')->name('kepsekEdit');
	Route::put('/kepsek/edit/{id}', 'Admin\KepsekController@update')->name('kepsekUpdate');
	Route::get('/kepsek/{id}', 'Admin\KepsekController@destroy')->name('kepsekHapus');

	Route::get('/mapel', 'Admin\MapelController@index')->name('mapel');
	Route::get('/mapel/{id}/kuis', 'Admin\MapelController@showKuis')->name('detailKuis');
	Route::get('/mapel/detail/{id}', 'Admin\MapelController@show')->name('detailMateri');
	Route::get('/mapel/tambah', 'Admin\MapelController@create')->name('mapelTambah');
	Route::post('/mapel/tambah', 'Admin\MapelController@store')->name('mapelStore');
	Route::get('/mapel/edit/{id}', 'Admin\MapelController@edit')->name('mapelEdit');
	Route::put('/mapel/edit/{id}', 'Admin\MapelController@update')->name('mapelUpdate');
	Route::get('/mapel/{id}', 'Admin\MapelController@destroy')->name('mapelHapus');

	Route::get('/materi/tambah', 'Admin\MateriController@create')->name('materiTambah');
	Route::post('/materi/tambah', 'Admin\MateriController@store')->name('materiStore');
	Route::get('/materi/{id}/edit', 'Admin\MateriController@edit')->name('materiEdit');
	Route::put('/materi/{id}/edit', 'Admin\MateriController@update')->name('materiUpdate');
	Route::get('/mapel/detail/materi/{id}', 'Admin\MateriController@destroy')->name('materiHapus');

	Route::get('/pengajar', 'Admin\PengajarController@index')->name('pengajar');

	Route::get('/jurusan', 'Admin\JurusanController@index')->name('jurusan');

	Route::get('/kelas_jurusan', 'Admin\KelasJurusanController@index')->name('kelas_jurusan');
	Route::get('/kelas_jurusan/tambah', 'Admin\KelasJurusanController@create')->name('tambah_kelas_jurusan');
	Route::post('/kelas_jurusan/tambah', 'Admin\KelasJurusanController@store')->name('store_kelas_jurusan');
	Route::get('/kelas_jurusan/{id}/siswa', 'Admin\KelasJurusanController@detailSiswa')->name('detailSiswa');
	Route::get('/kelas_jurusan/{id}/mapel', 'Admin\KelasJurusanController@detailMapel')->name('detailMapel');

	// Route::get('/kelas', 'Admin\KelasController@index')->name('kelas');
	// Route::get('/kelas/detail/{id}/siswa', 'Admin\KelasController@detailSiswa')->name('detailSiswa');
	// Route::get('/kelas/detail/{id}/mapel', 'Admin\KelasController@detailMapel')->name('detailMapel');

	Route::get('/kuis', 'Admin\KuisController@index')->name('kuis');
	Route::get('/kuis/tambah', 'Admin\KuisController@create')->name('kuisTambah');
	Route::post('/kuis/tambah', 'Admin\KuisController@store')->name('kuisStore');
	Route::get('/kuis/{id}/detail', 'Admin\KuisController@show')->name('soalDetail');
	Route::get('/kuis/{id}', 'Admin\KuisController@destroy')->name('kuisHapus');

	// Route::get('/kuis/{id}/soal', 'Admin\SoalController@index')->name('soal');
	Route::get('/soal/tambah', 'Admin\SoalController@create')->name('soalTambah');
	Route::post('/soal/tambah', 'Admin\SoalController@store')->name('soalStore');
});

Route::middleware('guest')->group(function () {
	Route::get('login/admin', 'NativeAuth\LoginAdminController@index')->name('loginAdmin');
	Route::post('login/admin', 'NativeAuth\LoginAdminController@store')->name('loginAdminStore');
	Route::get('login/siswa', 'NativeAuth\LoginSiswaController@index')->name('loginSiswa');
	Route::post('login/siswa', 'NativeAuth\LoginSiswaController@store')->name('loginSiswaStore');
	Route::get('login/guru', 'NativeAuth\LoginGuruController@index')->name('loginGuru');
	Route::post('login/guru', 'NativeAuth\LoginGuruController@store')->name('loginGuruStore');
	Route::get('login/kepsek', 'NativeAuth\LoginKepsekController@index')->name('loginKepsek');
	Route::post('login/kepsek', 'NativeAuth\LoginKepsekController@store')->name('loginKepsekStore');

	Route::get('/registrasi/guru', 'NativeAuth\RegisterGuruController@index')->name('formRegisterGuru');
	Route::get('/registrasi/siswa', 'NativeAuth\RegisterSiswaController@index')->name('formRegisterSiswa');
	Route::post('/registrasi/guru', 'NativeAuth\RegisterGuruController@create')->name('createGuru');
	Route::post('/registrasi/siswa', 'NativeAuth\RegisterSiswaController@create')->name('createSiswa');
});

Route::prefix('guru')->middleware('guru')->group(function () {
	Route::get('/dashboard', 'Guru\GuruController@index')->name('homeGuru');

	Route::get('/dashboard/profil/{id}', 'Guru\ProfilController@index')->name('profilGuru');
	Route::put('/dashboard/profil/{id}', 'Guru\ProfilController@update')->name('updateProfilGuru');

	Route::get('/dashboard/{id}', 'Guru\MateriController@destroy')->name('hapusMateriGuru');
	Route::get('/dashboard/materi/{id}', 'Guru\MateriController@show')->name('detailMateriGuru');
	Route::get('/dashboard/materi/edit/{id}', 'Guru\MateriController@edit')->name('editMateriGuru');
	Route::put('/dashboard/materi/edit/{id}', 'Guru\MateriController@update')->name('updateMateriGuru');

	Route::get('/dashboard/kuis/tambah', 'Guru\KuisController@create')->name('tambahKuisGuru');
	Route::post('/dashboard/kuis/tambah', 'Guru\KuisController@store')->name('storeKuisGuru');

	Route::get('/dashboard/kuis/{id}/soal', 'Guru\SoalController@index')->name('indexSoalGuru');
	Route::get('/dashboard/soal/tambah/{id}', 'Guru\SoalController@create')->name('tambahSoalGuru');
	Route::post('/dashboard/soal/tambah', 'Guru\SoalController@store')->name('storeSoalGuru');
	Route::get('/dashboard/soal/edit/{id}', 'Guru\SoalController@edit')->name('editSoalGuru');
	Route::put('/dashboard/soal/edit/{id}', 'Guru\SoalController@update')->name('updateSoalGuru');
	Route::get('/dashboard/soal/{id}', 'Guru\SoalController@destroy')->name('hapusSoalGuru');
});

Route::prefix('siswa')->middleware('siswa')->group(function () {
	Route::get('/dashboard', 'Siswa\SiswaController@index')->name('homeSiswa');

	Route::get('/dashboard/profil/{id}', 'Siswa\ProfilController@index')->name('profilSiswa');
	Route::put('/dashboard/profil/{id}', 'Siswa\ProfilController@update')->name('updateProfilSiswa');

	Route::get('/dashboard/mapel/{id}', 'Siswa\MapelController@index')->name('mapelSiswa');

	Route::get('/dashboard/materi/{id}', 'Siswa\MateriController@index')->name('indexMateriSiswa');

	Route::get('/dashboard/belajar/{id}', 'Siswa\BelajarController@index')->name('mulaiBelajar');

	Route::get('/dashboard/mapel/kuis/{id}', 'Siswa\KuisController@index')->name('kuisSiswa');
	Route::post('/dashboard/mapel/kuis/{id}', 'Siswa\KuisController@store')->name('kuisSiswaStore');

	Route::get('/dashboard/nilai/{id}', 'Siswa\NilaiController@index')->name('nilai');

	Route::get('/dashboard/tugas/{id}', 'Siswa\TugasController@index')->name('tugasSiswa');
	Route::post('/dashboard/tugas/', 'Siswa\TugasController@store')->name('tugasSiswaStore');
});

Route::prefix('kepsek')->middleware('kepsek')->group(function () {
	Route::get('/dashboard', 'Kepsek\KepsekController@index')->name('homeKepsek');

	Route::get('/dashboard/profil/{id}', 'Kepsek\ProfilController@index')->name('profilKepsek');
});

Route::get('/firebase', 'FirebaseController@index')->name('firebase');
Route::post('/firebase', 'FirebaseController@store')->name('firebaseStore');
// Route::resource('chat', 'ChatController');

Route::get('/chat', function () {
	// event(new FormSubmitted('tes'));
	return view('chat.new.index');
});

Route::get('/sender', function () {
	return view('chat.sender');
});

Route::post('/sender', function (Request $request) {
	// $text = $request['pesan'];
	$message = request()->message;

	// event(new FormSubmitted($text));
	event(new FormSubmitted($message));
	return redirect()->view('chat.sender');
});

Route::get('logout', 'NativeAuth\LogoutController@index')->name('logout');
