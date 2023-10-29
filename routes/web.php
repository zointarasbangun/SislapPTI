<?php
use App\Http\Controllers\AuthController;
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
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/loginproses', [AuthController::class, 'loginproses'])->name('loginproses');

Route::get('/', [AuthController::class, 'home'])->name('public.index');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/tambahakun', function () {
    return view('tambahakun');
});

Route::get('/dataakun', function () {
    return view('dataakun');
});

Route::get('/dataperjalanan', function () {
    return view('dataperjalanan');
});

Route::get('/statusperjalanan', function () {
    return view('statusperjalanan');
});

Route::get('/pelacakperjalanan', function () {
    return view('pelacakperjalanan');
});

Route::get('/datakondisikendaraan', function () {
    return view('datakondisikendaraan');
});

Route::get('/tipekendaraan', function () {
    return view('tipekendaraan');
});

Route::get('/notifikasi', function () {
    return view('notifikasi');
});
