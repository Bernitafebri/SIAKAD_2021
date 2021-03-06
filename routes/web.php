<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PresensiMhsController;
use App\Http\Controllers\PresensiDosenController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('test');
// });

Route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');
Route::get('/', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/forgot', [LoginController::class, 'forgot'])->name('forgot');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['auth','cekLevel:admin,dosen,mahasiswa']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});

Route::group(['middleware' => ['auth','cekLevel:admin']], function () {
    // Dosen
    Route::get('/data-dosen', [DosenController::class, 'index']);
    Route::get('/data-dosen/tambah', [DosenController::class, 'create']);
    Route::post('/data-dosen', [DosenController::class, 'store']);
    Route::get('/data-dosen/{dosen}/edit', [DosenController::class, 'edit']);
    Route::patch('/data-dosen/{dosen}', [DosenController::class, 'update']);
    Route::delete('/data-dosen/{id}', [DosenController::class, 'destroy']);

    // Mahasiswa
    Route::get('/data-mhs', [MahasiswaController::class, 'index']);
    Route::get('/data-mhs/tambah', [MahasiswaController::class, 'create']);
    Route::post('/data-mhs', [MahasiswaController::class, 'store']);
    Route::get('/data-mhs/{mhs}/edit', [MahasiswaController::class, 'edit']);
    Route::patch('/data-mhs/{mhs}', [MahasiswaController::class, 'update']);
    Route::delete('/data-mhs/{id}', [MahasiswaController::class, 'destroy']);

    // Matkul
    Route::get('/matkul', [MataKuliahController::class, 'index']);
    Route::get('/matkul/tambah', [MataKuliahController::class, 'create']);
    Route::post('/matkul', [MataKuliahController::class, 'store']);
    Route::get('/matkul/{matkul}/edit', [MataKuliahController::class, 'edit']);
    Route::patch('/matkul/{matkul}', [MataKuliahController::class, 'update']);
    Route::delete('/matkul/{id}', [MataKuliahController::class, 'destroy']);


    // Ruang
    Route::get('/ruangs', [RuangController::class, 'index']);

    // Jadwal
    Route::get('/jadwals', [JadwalController::class, 'index']);
    Route::post('/jadwals', [JadwalController::class, 'store']);
    Route::get('/jadwals/{jadwal}/edit', [JadwalController::class, 'edit']);
    Route::patch('/jadwals/{jadwal}', [JadwalController::class, 'update']);
    Route::delete('/jadwals/{id}', [JadwalController::class, 'destroy']);

    // Kelas
    Route::get('/kelas', [KelasController::class, 'index']);
    Route::post('/kelas', [KelasController::class, 'store']);
    Route::get('/kelas/{kelas}/edit', [KelasController::class, 'edit']);
    Route::patch('/kelas/{kelas}', [KelasController::class, 'update']);
    Route::delete('/kelas/{id}', [KelasController::class, 'destroy']);

    // Rekap Presensi
    Route::get('rekap-data-mhs', [PresensiMhsController::class, 'halamanrekapAdmin'])->name('admin-data-mhs');
    Route::get('rekap-data-mhs/{tglawal}/{tglakhir}', [PresensiMhsController::class, 'tampildataAdmin'])->name('admin-data-mhs-keseluruhan');
    Route::get('rekap-data-dosen', [PresensiDosenController::class, 'halamanrekapAdmin'])->name('admin-data-dosen');
    Route::get('rekap-data-dosen/{tglawal}/{tglakhir}', [PresensiDosenController::class, 'tampildataAdmin'])->name('admin-data-dosen-keseluruhan');

    // Users
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/users', [UserController::class, 'store'])->name('user.store');
    Route::delete('/users/{id}', [UserController::class, 'destroy']);

});


// Mahasiswa
Route::group(['middleware' => ['auth','cekLevel:mahasiswa']], function () {
    // Presensi
    Route::get('/presensi-mhs', [PresensiMhsController::class, 'index']);
    Route::post('/presensi-mhs', [PresensiMhsController::class, 'store']);
    Route::get('filter-data-mhs', [PresensiMhsController::class, 'halamanrekap'])->name('filter-data-mhs');
    Route::get('filter-data-mhs/{tglawal}/{tglakhir}', [PresensiMhsController::class, 'tampildatakeseluruhan'])->name('filter-data-mhs-keseluruhan');

    Route::get('/jadwals-mhs', [JadwalController::class, 'jadwalMhs']);
});


// Dosen
Route::group(['middleware' => ['auth','cekLevel:dosen']], function () {

    // Mahasiswa
    Route::get('/data-mhs', [MahasiswaController::class, 'index']);
    Route::get('/data-mhs/tambah', [MahasiswaController::class, 'create']);
    Route::post('/data-mhs', [MahasiswaController::class, 'store']);
    Route::get('/data-mhs/{mhs}/edit', [MahasiswaController::class, 'edit']);
    Route::patch('/data-mhs/{mhs}', [MahasiswaController::class, 'update']);
    Route::delete('/data-mhs/{id}', [MahasiswaController::class, 'destroy']);

    // Presensi
    Route::get('/presensi-masuk-dosen', [PresensiDosenController::class, 'index']);
    Route::post('/presensi-masuk-dosen', [PresensiDosenController::class, 'store']);
    Route::get('/presensi-keluar-dosen', [PresensiDosenController::class, 'keluar'])->name('presensi-keluar');
    Route::post('/presensi-keluar-dosen', [PresensiDosenController::class, 'presensipulang']);
    Route::get('filter-data-dosen', [PresensiDosenController::class, 'halamanrekap'])->name('filter-data-dosen');
    Route::get('filter-data-dosen/{tglawal}/{tglakhir}', [PresensiDosenController::class, 'tampildatakeseluruhan'])->name('filter-data-dosen-keseluruhan');

    Route::get('/jadwals-dosen', [JadwalController::class, 'jadwalDosen']);
});