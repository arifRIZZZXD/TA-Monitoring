<?php

use App\Http\Controllers\Chart;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\DashboardController;

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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Route::get('/dashboard', function () {
//     return view('admin/dashboard/index');
// });
// Route::get('dasboard/chart', [DashboardController::class, 'index']);
Route::resource('dashboard', DashboardController::class);
            

Route::get('/jadwalPakan', function () {
    return view('admin/jadwalPakan/index');
});

Route::get('/createJadwalPakan', function () {
    return view('admin/jadwalPakan/create');
});

Route::get('/editJadwalPakan', function () {
    return view('admin/jadwalPakan/edit');
});

Route::get('/laporan', function () {
    return view('admin/laporanHarian/index');
});

Route::get('/readSuhu', [SensorController::class, 'readSuhu']);
Route::get('/readPh', [SensorController::class, 'readPh']);
Route::get('/readPakan', [SensorController::class, 'readPakan']);

