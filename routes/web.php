<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route::get('tes', function () {
//     return view('layouts.admin');
// });

//rourte admin backend
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    // untuk route Backend lainnya
});
    // Tes Template Frontend
Route::get('/', [FrontController::class, 'index']);
Route::get('contact', [FrontController::class, 'contact']);
Route::get('shop', [FrontController::class, 'shop']);
Route::get('cart', [FrontController::class, 'cart']);
Route::get('track', [FrontController::class, 'track']);
Route::get('detail', [FrontController::class, 'detail']);
Route::get('about', [FrontController::class, 'about']);



