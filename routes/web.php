<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RedirectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route untuk pengguna biasa
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// untuk Masteradmin dan user
Route::group(['middleware' => ['auth', 'checkrole:1,2']], function () {
    Route::get('/redirect', [RedirectController::class, 'cek']);

    Route::get('/changePassword', [App\Http\Controllers\ChangePasswordController::class, 'showChangePasswordGet'])->name('changePasswordGet');

    Route::post('/changePassword', [App\Http\Controllers\ChangePasswordController::class, 'changePasswordPost'])->name('changePasswordPost');
});

// untuk Masteradmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// untuk User
Route::group(['middleware' => ['auth', 'checkrole:2']], function () {
    Route::get('/user-dashboard', [UserController::class, 'index'])->name('user-dashboard');
});
