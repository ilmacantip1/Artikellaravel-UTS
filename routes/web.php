<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/artikel', [ArticleController::class, 'index'])->name('artikel.index');
Route::post('/artikel', [ArticleController::class, 'store'])->name('artikel.store');