<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;


Route::get('/', [CarroController::class, 'index']);
Route::get('/carros/create', [CarroController::class, 'create']);
Route::post('/carros',[CarroController::class,'store']);
Route::delete('/carros/{carro_pk}',[CarroController::class,'destroy']);
Route::get('/carros/edit/{carro_pk}',[CarroController::class,'edit']);
Route::put('/carros/update/{carro_pk}',[CarroController::class,'update']);
