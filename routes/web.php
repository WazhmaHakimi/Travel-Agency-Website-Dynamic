<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontPagesController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontPagesController::class, 'index']);
Route::get('/booking', [FrontPagesController::class, 'booking']);
Route::post('/addRecord', [FrontPagesController::class, 'add']);
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', [PagesController::class, 'index']);
    Route::get('/deleteRecord/{id}', [PagesController::class, 'delete']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
