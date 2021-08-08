<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

Route::get('/', function () {
    return view('app.home');
});

Route::get('registro', [RegisterController::class, 'create'])->name('register.index');
Route::post('registro', [RegisterController::class, 'store'])->name('register.store');

Route::get('login', [SessionsController::class, 'create'])->name('login.index');
Route::post('submit-login', [SessionsController::class, 'postLogin'])->name('login.post');
Route::get('signout', [SessionsController::class, 'signOut'])->name('signout');

Route::get('estado-registro', [SessionsController::class, 'statusRegister'])->middleware('authStatus');
