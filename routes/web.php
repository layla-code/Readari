<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\readariController;

Route::get('/', [HomeController::class,'index'])->name('index');

Route::get('/about', [readariController::class,'about'])->name('aboutus');
Route::get('/account', [readariController::class,'account'])-> name('account'); 

Route::get('/beginner', [ArticlesController::class,'beginner'])-> name('beginner');

Route::get('/addarticle', [ArticlesController::class,'article'])-> name('addarticle');
Route::post('/adding', [ArticlesController::class,'Create'])-> name('adding');


Auth::routes();

