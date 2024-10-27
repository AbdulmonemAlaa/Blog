<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/blog');



Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/create', [BlogController::class, 'create'])->name('create');
    Route::post('/store', [BlogController::class, 'store'])->name('store');
    Route::get('/{id}',[BlogController::class, 'show'])->name('show');
    Route::get('/{id}/edit',[BlogController::class, 'edit'])->name('edit');
    Route::put('/{id}/update',[BlogController::class, 'update'])->name('update');
    Route::delete('/{id}',[BlogController::class, 'destroy'])->name('destroy');

});
