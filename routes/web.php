<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcountController;
use App\Http\Controllers\KendaraanController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/adminDashboard', function(){
            return view('dashboard.adminDashboard');
            })->name('adminDashboard');

        Route::get('/addAcount', [AcountController::class, 'create'])->name('createAcount');
        Route::post('/addAcount', [AcountController::class, 'store'])->name('addAcount');
        // Route::prefix('manageAcount')->as('acount.')->group(function () {
        //     Route::get('/', [AcountController::class, 'index'])->name('index');
        //     Route::get('/{user}/edit', [AcountController::class, 'edit'])->name('edit');
        //     Route::put('/{user}', [AcountController::class, 'update'])->name('update');
        //     Route::delete('/{user}', [AcountController::class, 'destroy'])->name('destroy');
        // });
        Route::get('/manageAcount', [AcountController::class, 'index'])->name('acount.index');
        Route::get('/manageAcount/{user}/edit', [AcountController::class, 'edit'])->name('acount.edit');
        Route::put('/manageAcount/{user}', [AcountController::class, 'update'])->name('acount.update');
        Route::delete('/manageAcount/{user}', [AcountController::class, 'destroy'])->name('acount.destroy');

        Route::get('/tipeKendaraan', [KendaraanController::class, 'index'])->name('kendaraan.index');
        Route::get('/tipeKendaraan/create', [KendaraanController::class, 'create'])->name('kendaraan.create');
        Route::post('/tipeKendaraan', [KendaraanController::class, 'store'])->name('kendaraan.store');
        Route::get('/tipeKendaraan/{vehicle}/edit', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
        Route::put('/tipeKendaraan/{vehicle}', [KendaraanController::class, 'update'])->name('kendaraan.update');
        Route::delete('/tipeKendaraan/{vehicle}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy');
        // Route::get('/tipeKendaraan/search', [KendaraanController::class, 'search'])->name('kendaraan.search');

        
    });


    Route::group(['middleware' => ['user']], function () {
        Route::get('/userDashboard', function(){
            return view('dashboard.userDashboard');
        })->name('userDashboard');
    });

});

