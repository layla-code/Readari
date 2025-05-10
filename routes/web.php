<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ReadariController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\FavoriteController;


Route::redirect('/', '/home');
Route::get('/home', [HomeController::class, 'index'])->name('index');
Route::get('/aboutus', [ReadariController::class, 'about'])->name('aboutus');
Route::get('/beginner', [ArticlesController::class, 'beginner'])->name('beginner');

Auth::routes(); 

Route::middleware('auth')->group(function () {
   
    Route::get('/beginner/add', [ArticlesController::class, 'showCreateForm'])->name('addarticle.form');
    Route::post('/beginner/add', [ArticlesController::class, 'Create'])->name('addarticle');
   
    Route::prefix('account')->group(function () {
        Route::get('/', [AccountController::class, 'index'])->name('account');
        Route::get('/beginner/fav', [ArticlesController::class, 'favBeginner'])->name('beginner.fav');
        Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites.index');
        Route::post('/favorites/{articleId}', [FavoriteController::class, 'store'])->name('favorites.store');
        Route::delete('/favorites/{articleId}', [FavoriteController::class, 'destroy'])->name('favorites.destroy');
    });

});