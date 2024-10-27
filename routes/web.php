<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


//Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
//Route::redirect('/', '/blog');
//
//
//Route::get('/', [BlogController::class, 'index'])->name('blog.index');


Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/create', [BlogController::class, 'create'])->name('create');
    Route::post('/store', [BlogController::class, 'store'])->name('store');

});
