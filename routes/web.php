<?php

use App\Http\Controllers\{
    AktivitasController,
    ArsipController,
    DashboardController,
    KelasController,
    PertemuanController,
    PetaKerawananController,
    ProfileController,
    UserController,
    UserPetaKerawananController
};
use App\Http\Controllers\Auth\AuthController;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('landing_page');
})->name('landingpage');

Route::controller(DashboardController::class)->group(function(){
    Route::get('/dashboard', 'index')->name('dashboard')->middleware('auth');
});

Route::name('auth.')->group(function(){
    Route::middleware(['guest'])->group(function () {
        Route::get('/login', [AuthController::class, 'viewLogin'])->name('login');
        Route::post('/login', [AuthController::class, 'postLogin'])->name('post.login');
    });
    Route::post('/logout', [AuthController::class, 'logout'])->name('post.logout');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('kelas',KelasController::class);
    Route::resource('user',UserController::class);
    Route::resource('aktivitas',AktivitasController::class);
    Route::resource('petakerawanan',PetaKerawananController::class);
    Route::prefix('petakerawanan')->name('petakerawanan.')->group(function(){
        Route::post('/import', [PetaKerawananController::class, 'import'])->name('import');
    });

    Route::resource('userpetakerawanan', UserPetaKerawananController::class);
    
    Route::resource('arsip',ArsipController::class);
    Route::resource('pertemuan',PertemuanController::class);
    // route profile
    Route::resource('profile', ProfileController::class);
    Route::prefix('profile/user/')->name('profile.')->group(function(){
        Route::get('form', [ProfileController::class, 'formProfile'])->name('formedit');
    });

    Route::get('/generatepdf', function(){
        $pdf = Pdf::loadView('pdf.index');
        return $pdf->stream('download.pdf');
    });
});