<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

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
Route::controller(BukuController::class)
        ->prefix('/manajemenbuku')
        ->group(function(){
            Route::get('/','view')->name('Buku.index');
        });
Route::controller(MahasiswaController::class)
        ->prefix('/manajemenmahasiswa')
        ->group(function(){
            Route::get('/','view')->name('Mahasiswa.index');
        });

Route::controller(HomeController::class)
        ->prefix('/dashboard')
        ->group(function(){
            Route::get('/','halamanutama')->name('dashboard');
        });