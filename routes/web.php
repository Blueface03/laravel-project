<?php

use App\Http\Controllers\Back\DashboardController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\InfoRequestController;

Route::post('/send-info-request', [InfoRequestController::class, 'sendInfoRequest']);


use App\Http\Controllers\ContactController;

Route::post('/send-message', [ContactController::class, 'sendMessage']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [DashboardController::class, 'index']);
Route::get('/inovasi', [DashboardController::class, 'inovasi']);
Route::get('/galeri', [DashboardController::class, 'galeri']);
Route::get('/kontak', [DashboardController::class, 'kontak']);
Route::get('/kebijakan', [DashboardController::class, 'kebijakan']);

Route::get('/profil/{profileNumber}', [DashboardController::class, 'profile']);
Route::get('/aduan/{aduanNumber}', [DashboardController::class, 'aduan']);
Route::get('/infodisduk/{infodisdukNumber}', [DashboardController::class, 'infodisduk']);


/*  informasi  */
Route::get('/informasi/{informasiNumber}', [DashboardController::class, 'informasi']);
Route::get('/ppid/{ppidNumber}', [DashboardController::class, 'ppid']);
Route::get('/alurlayanan/{alurlayananNumber}', [DashboardController::class, 'alurlayanan']);
Route::get('/produkhukum/{produkhukumNumber}', [DashboardController::class, 'produkhukum']);


/*  program kegiatan */
Route::get('/renstra/{renstraNumber}', [DashboardController::class, 'renstra']);
Route::get('/renja/{renjaNumber}', [DashboardController::class, 'renja']);
Route::get('/anggaran2021/{anggaran2021_Number}', [DashboardController::class, 'anggaran2021']);
Route::get('/anggaran2022/{anggaran2022_Number}', [DashboardController::class, 'anggaran2022']);
Route::get('/anggaran2023/{anggaran2023_Number}', [DashboardController::class, 'anggaran2023']);
Route::get('/anggaran2024/{anggaran2024_Number}', [DashboardController::class, 'anggaran2024']);
Route::get('/anggaran2025/{anggaran2025_Number}', [DashboardController::class, 'anggaran2025']);


Route::get('/download-pdf/{filename}', [DashboardController::class, 'download'])->name('download.pdf');
