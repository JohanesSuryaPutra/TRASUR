<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenController;
use App\Http\Controllers\RuteController;
use App\Http\Controllers\PemesanController;
use App\Http\Controllers\KendaraanController;

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

//Home
Route::get('/', function () {return view('admin');});
Route::get('/admin', function () {return view('admin');});

//Login-Logout
Route::get('/login', function () {return view('login');});
Route::get('/logout', function () {return view('main');});

//Agen
Route::get('/agen', [AgenController::class, 'tampil']);

Route::get('/agen/insert', [AgenController::class, 'insert']);
Route::post('/agen/upload', [AgenController::class, 'upload']);
Route::get('/agen/edit/{id_agen}', [AgenController::class, 'edit']);
Route::put('/agen/update/{id_agen}', [AgenController::class, 'update']);
Route::get('/agen/Delete/{id_agen}', [AgenController::class, 'Delete']);
Route::get('/agen/yesDelete/{id_agen}', [AgenController::class, 'yesDelete']);
Route::get('/agen/noDelete', [AgenController::class, 'noDelete']);

//Rute
Route::get('/rute', [RuteController::class, 'tampil']);

Route::get('/rute/insert', [RuteController::class, 'insert']);
Route::post('/rute/upload', [RuteController::class, 'upload']);
Route::get('/rute/edit/{id_rute}', [RuteController::class, 'edit']);
Route::put('/rute/update/{id_rute}', [RuteController::class, 'update']);
Route::get('/rute/Delete/{id_rute}', [RuteController::class, 'Delete']);
Route::get('/rute/yesDelete/{id_rute}', [RuteController::class, 'yesDelete']);
Route::get('/rute/noDelete', [RuteController::class, 'noDelete']);

//Pemesan
Route::get('/pemesan', [PemesanController::class, 'tampil']);

Route::get('/pemesan/insert', [PemesanController::class, 'insert']);
Route::post('/pemesan/upload', [PemesanController::class, 'upload']);
Route::get('/pemesan/edit/{id_pemesan}', [PemesanController::class, 'edit']);
Route::put('/pemesan/update/{id_pemesan}', [PemesanController::class, 'update']);
Route::get('/pemesan/Delete/{id_pemesan}', [PemesanController::class, 'Delete']);
Route::get('/pemesan/yesDelete/{id_pemesan}', [PemesanController::class, 'yesDelete']);
Route::get('/pemesan/noDelete', [PemesanController::class, 'noDelete']);

//Kendaraan
Route::get('/kendaraan', [KendaraanController::class, 'tampil']);

Route::get('/kendaraan/insert', [KendaraanController::class, 'insert']);
Route::post('/kendaraan/upload', [KendaraanController::class, 'upload']);
Route::get('/kendaraan/edit/{id_kendaraan}', [KendaraanController::class, 'edit']);
Route::put('/kendaraan/update/{id_kendaraan}', [KendaraanController::class, 'update']);
Route::get('/kendaraan/Delete/{id_kendaraan}', [KendaraanController::class, 'Delete']);
Route::get('/kendaraan/yesDelete/{id_kendaraan}', [KendaraanController::class, 'yesDelete']);
Route::get('/kendaraan/noDelete', [KendaraanController::class, 'noDelete']);

//Cetak
Route::get('/kendaraan/cetak_pdf', [KendaraanController::class, 'cetak_pdf']); 