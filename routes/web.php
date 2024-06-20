<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControllers;

Route::get('/', function () {
    return view('home');
});
Route::get('/education', function () {
    return view('education');
});
Route::get('/laporan', function () {
    return view('laporan');
});
// Route::get('auth/login', function () {
//     return view('auth/login');
// });
// Route::get('auth/register', function () {
//     return view('auth/register');
// });
// Route::get('/', [AuthControllers::class, 'CheckLogin']);


Route::group(['prefix' => '/auth', "as" => "auth."], function () {
    Route::get('/login', [AuthControllers::class, 'LoginPage'])->name("login");
    Route::post('/login', [AuthControllers::class, 'login'])->name("login.proses");
    Route::get('/register', [AuthControllers::class, 'RegisterPage'])->name('register');
    Route::post('/register', [AuthControllers::class, 'register'])->name("register.proses");
});
Route::get('/logout', [AuthControllers::class, 'logout'])->name('logout');