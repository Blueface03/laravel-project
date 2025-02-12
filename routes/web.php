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
Route::get('/informasi/{informasiNumber}', [DashboardController::class, 'informasi']);
Route::get('/renstra/{renstraNumber}', [DashboardController::class, 'renstra']);


