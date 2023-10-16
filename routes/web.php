<?php

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

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function(){
    return 'NIM : 2131770006 <br> NAMA: MUHAMMAD NAAFIUL RAZZAQ WITJAKSONO';
});

Route::get('/articles/{id}', function ($id) {
    return "HALAMAN ARTIKEL DENGAN ID $id";
});

Route::get('/' [PageController::class]);
