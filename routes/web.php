<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/articles', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/add', [ArticleController::class, 'add'])->name('articles.add');
Route::post('/articles/add', [ArticleController::class, 'saveArticle'])->name('articles.save');
