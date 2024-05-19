<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('portofolio');
});

Route::get('/login', [UserController::class, 'create'])->name('login');
Route::post('/login', [UserController::class, 'store']);
Route::get('/dashboard', [UserController::class, 'show'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('back.index');
});
// Route::get('/', function () {
//     return view('index');
// });
Route::match(['get','post'],'/',[ContactController::class,'store']);
Route::get('/dashboard',[ContactController::class,'index']);
Route::get('/back/delete/{id}',[ContactController::class,'destroy']);
Route::match(['get','post'],'/back/update/{id}',[ContactController::class,'update']);
Route::match(['get','post'],'/',[ContactController::class,'store']);
Route::get('login', function () {
    return view('login');
});
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', UserController::class);
    });
});
Route::get('/cari',[ContactController::class,'cari']);