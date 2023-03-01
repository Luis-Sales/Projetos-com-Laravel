<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;


//Login
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/login', [LoginController::class, 'login']);
Route::post('/auth', [LoginController::class, 'auth']);
Route::get('/register', [LoginController::class, 'formRegister']);
Route::post('/create', [LoginController::class, 'create']);

//Noticias
Route::get('/', [BlogController::class, 'index']);
Route::get('/createnoticia', [BlogController::class, 'createnoticia']);
Route::post('/criar', [BlogController::class, 'store'])->middleware('auth');
Route::get('/noticia/{id}', [BlogController::class, 'edit'])->middleware('auth');
Route::delete('/deletar/{id}', [BlogController::class, 'destroy'])->middleware('auth')->name('delete');

//Likes
Route::post('/noticia/join/{id}', [BlogController::class, 'joinBlog'])->middleware('auth');

//Comentarios
Route::post('/comentario', [BlogController::class, 'comentario'])->middleware('auth');
 



 