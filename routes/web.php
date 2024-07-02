<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SessionController;

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

Route::get('login', [SessionController::class, 'index']);
Route::post('login', [SessionController::class, 'login']);
Route::get('logout', [SessionController::class, 'logout']);

Route::resource('dashboard', DashboardController::class);

Route::get('/jadwalPakan', function () {
    return view('admin/jadwalPakan/index');
});

Route::get('/laporan', function () {
    return view('admin/laporanHarian/index');
});

Route::get('/readSuhu', [SensorController::class, 'readSuhu']);
Route::get('/readPh', [SensorController::class, 'readPh']);
Route::get('/readPakan', [SensorController::class, 'readPakan']);

