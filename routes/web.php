<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RequestController;
use App\Http\Controllers\Admin\UpdateRequestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', [SessionsController::class, 'home'])->name('home.index');

Route::get('registro', [RegisterController::class, 'create'])->name('register.index');
Route::post('registro', [RegisterController::class, 'store'])->name('register.store');

Route::get('login', [SessionsController::class, 'create'])->name('login.index');
Route::post('submit-login', [SessionsController::class, 'postLogin'])->name('login.post');
Route::get('signout', [SessionsController::class, 'signOut'])->name('signout');
Route::get('estado-registro', [SessionsController::class, 'statusRegister'])->middleware('authStatus');

Route::prefix('admin')->group(function () {
    //-------- Rutas Login ---------
    Route::get('/', [LoginController::class, 'create'])->name('admin.login');
    Route::post('submit-admin', [LoginController::class, 'postLoginAdmin'])->name('admin.post');
    Route::get('signoutAdmin', [LoginController::class, 'signoutAdmin'])->name('signoutAdmin');
    //-------- Rutas admin ---------
    Route::middleware(['admin:1,2'])->group(function () {
        Route::view('admin', 'admin.home')->name('admin.index');
        Route::resource('request-status', RequestController::class)->only(['index','update']);
    });
    Route::resource('user', UserController::class)->middleware('admin:1,0',)->only('index','destroy');
});
