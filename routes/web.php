<?php

use App\Http\Controllers\ProgramController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/index', function(){
    return 'Hi! Selamat Datang Di Website Laaravel';
});

Route::get('/about', function(){
    return'NIM : 26001/2202.063 <br>
          Nama : Fachri Gemink <br>
          Kelas : 2RPLA';
});

Route::get('/articles/{id}', function($id){
    echo "Hi! Selamat Datang Di Website Laravel ". $id;
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);


Route::get('/', [ProgramController::class, 'index']);