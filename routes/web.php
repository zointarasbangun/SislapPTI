<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcountController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\WhatsAppController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\PerjalananController;
use App\Models\Perjalanan;

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

Route::get('/profil', function () {
    return view('auth.profil');
});

Route::get('/editprofil', function () {
    return view('auth.editprofil');
});

Route::get('/dataperjalanan/search', [perjalananController::class, 'search'])->name('perjalanan.search');

Route::get('/kendaraan/search', [KendaraanController::class, 'search'])->name('kendaraan.search');

Route::get('/kondisikendaraan/search', [KendaraanController::class, 'kondisisearch'])->name('kendaraan.kondisisearch');

Route::get('/statusperjalanan/search', [perjalananController::class, 'searchstatus'])->name('perjalanan.searchstatus');

Route::get('/statusperjalananuser/search', [perjalananController::class, 'searchstatususer'])->name('perjalanan.searchstatususer');

Route::get('/riwayatperjalananuser/search', [perjalananController::class, 'searchriwayatuser'])->name('perjalanan.searchriwayatuser');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/adminDashboard', function () {
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
        // Route::get('/tipeKendaraan/create', [KendaraanController::class, 'create'])->name('kendaraan.create');
        Route::post('/tipeKendaraan', [KendaraanController::class, 'store'])->name('kendaraan.store');
        Route::get('/tipeKendaraan/{vehicle}/edit', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
        Route::put('/tipeKendaraan/{vehicle}', [KendaraanController::class, 'update'])->name('kendaraan.update');
        Route::delete('/tipeKendaraan/{vehicle}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy');
        // Route::get('/tipeKendaraan/search', [KendaraanController::class, 'search'])->name('kendaraan.search');

        Route::get('/kondisiKendaraan', [KendaraanController::class, 'kondisi'])->name('kendaraan.kondisi');

        Route::get('/dataPerjalanan', [PerjalananController::class, 'getData'])->name('dataPerjalanan');
        Route::get('/managePerjalanan/{perjalanan}/edit', [PerjalananController::class, 'editadmin'])->name('managePerjalanan.edit');
        Route::put('/managePerjalanan/{perjalanan}', [PerjalananController::class, 'updateadmin'])->name('managePerjalanan.update');
        Route::delete('/managePerjalanan/{perjalanan}', [PerjalananController::class, 'destroyadmin'])->name('managePerjalanan.destroy');


        // Route::get('/search', [PerjalananController::class, 'search'])->name('search');

        Route::get('/statusPerjalanan', [AcountController::class, 'getData'])->name('statusPerjalanan');
        Route::post('/approve-perjalanan/{perjalanan}', [PerjalananController::class, 'approvePerjalanan'])->name('approve.perjalanan');
        Route::post('/reject-perjalanan/{perjalanan}', [PerjalananController::class, 'rejectPerjalanan'])->name('reject.perjalanan');
        // Route::get('/dataperjalanan', function () {
        //     return view('perjalanan.dataPerjalanan');
        // });
        Route::get('/statusperjalananadmin', [PerjalananController::class, 'statusPerjalananAdmin'])->name('status.perjalanan.admin');

        // Route::get('/statusperjalanan', function () {
        //     return view('perjalanan.statusperjalanan');
        // });

        Route::get('/pelacakperjalanan', function () {
            return view('pelacak.pelacakperjalanan');
        });

        Route::get('admin/cetakpdf', [DownloadController::class, 'cetakpdf'])->name('admin.cetakpdf');

        // Route::get('/datakondisikendaraan', function () {
        //     return view('kendaraan.kondisikendaraan');
        // });


        Route::get('/notifikasi', function () {
            return view('notifikasi.notifikasi');
        });

        Route::get('/map', function () {
            return view('pelacak.map');
        });

        Route::get('/profileAdmin', [ProfileController::class, 'index'])->name('profileAdmin');
        Route::get('/ProfileAdmin/{userId}/edit', [ProfileController::class, 'edit'])->name('profileAdmin.edit');
        Route::put('/ProfileAdmin/{userId}', [ProfileController::class, 'updateAdmin'])->name('profileAdmin.update');

        // Route::get('/profile', function () {
        //     return view('auth.profile');
        // });

        // Route::get('/editProfile', function () {
        //     return view('auth.editProfile');
        // });
    });


    Route::group(['middleware' => ['user']], function () {
        // Route::get('/userDashboard', function () {
        //     return view('dashboard.userDashboard');
        // })->name('userDashboard');


        Route::get('cetakpdfuser', [DownloadController::class, 'cetakpdfuser'])->name('cetakpdfuser');

        Route::get('/userDashboard', [PerjalananController::class, 'indexuser'])->name('userDashboard');
        // Route::get('/tambahPerjalananUser', function(){
        //     return view('perjalanan.tambahDataPerjalananUser');
        // });
        Route::get('/tambahPerjalananUser', [PerjalananController::class, 'create'])->name('tambahPerjalananUser');
        Route::post('/tambahPerjalananUser', [PerjalananController::class, 'store'])->name('tambahPerjalananUser.store');
        // Route::get('/dataPerjalananUser', [PerjalananController::class, 'index'])->name('dataPerjalananUser.index');
        Route::get('/statusPerjalananUser/{perjalanan}/edit', [PerjalananController::class, 'edit'])->name('statusPerjalananUser.edit');
        Route::put('/statusPerjalananUser/{perjalanan}', [PerjalananController::class, 'update'])->name('statusPerjalananUser.update');
        Route::get('/statusPerjalananUser', [PerjalananController::class, 'index'])->name('statusPerjalananUser.index');
        Route::get('/dataPerjalananUser', [PerjalananController::class, 'getData'])->name('dataPerjalananUser');
        Route::get('/riwayatPerjalananUser', [PerjalananController::class, 'riwayat'])->name('riwayatPerjalananUser');

        // Route::get('/dataperjalananUser', function () {
        //     return view('perjalanan.dataPerjalanan');
        // });


        Route::get('/kendaraanUser', function () {
            return view('kendaraan.kendaraanUser');
        });

        Route::get('/kondisiKendaraanUser', [KendaraanController::class, 'kondisi'])->name('kendaraanUser.kondisi');
        Route::get('/kondisiKendaraanDriver', [KendaraanController::class, 'kendaraanUser'])->name('kendaraanUser.kendaraanUser');


        Route::post('/send-whatsapp', [WhatsAppController::class, 'sendMessage'])->name('send.whatsapp');

        // Route::get('/statusPerjalananUser', function(){
        //     return view('perjalanan.statusPerjalananUser');
        // });

        Route::get('/pelacakPerjalananUser', function () {
            return view('pelacak.pelacakPerjalananUser');
        });

        // Route::get('/riwayatPerjalananUser', function () {
        //     return view('perjalanan.riwayatPerjalananDriver');
        // });

        Route::get('/notifikasiUser', [WhatsAppController::class, 'index']);
        

        // Route::get('/notifikasiUser', function () {
        //     return view('notifikasi.notifikasiUser');
        // });

        // Route::get('/datakondisikendaraanUser', function () {
        //     return view('kendaraan.kondisikendaraan');
        // });

        Route::get('/tipeKendaraanUser', [KendaraanController::class, 'index'])->name('kendaraanUser.index');

        Route::get('/profileUser', [ProfileController::class, 'index'])->name('profile');
        Route::get('/ProfileUser/{userId}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('/ProfileUser/{userId}', [ProfileController::class, 'update'])->name('profile.update');

        // Route::get('/profile', function () {
        //     return view('auth.profile');
        // });

        // Route::get('/editProfile', function () {
        //     return view('auth.editProfile');
        // });
    });

});
