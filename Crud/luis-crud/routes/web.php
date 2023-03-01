<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogosController;
 
Route::get('/', [JogosController::class, 'index']);

//Rota para novos registros
Route::get('/create', [JogosController::class, 'create']);

//Rota para salvar os registros
Route::post('/create/store', [JogosController::class, 'store']);

//Rota para pegar id dos registros
Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id','[0-9]+')->name('edit');

//Rota para editar registros
Route::PUT('/{id}', [JogosController::class, 'update'])->where('id','[0-9]+')->name('update');

//Rota para deletar registros
Route::DELETE('/delete/{id}', [JogosController::class, 'delete'])->where('id','[0-9]+')->name('delete');


    

 