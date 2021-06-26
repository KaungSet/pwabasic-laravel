<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;


Route::get('/',[ArticleController::class, 'index']);

Route::get('/studentlist',[ArticleController::class, 'index']);


Route::get('/student/detail/{id}',[ArticleController::class, 'detail']);

Route::get('/student/add',[ArticleController::class, 'add']);
Route::post('/student/add',[ArticleController::class, 'create']);

Route::get('/student/edit/{id}',[ArticleController::class, 'edit']);
Route::post('/student/edit/{id}',[ArticleController::class, 'update']);

Route::get('/student/delete/{id}',[ArticleController::class, 'delete']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

\PWA::routes();
