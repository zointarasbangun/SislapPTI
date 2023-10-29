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
