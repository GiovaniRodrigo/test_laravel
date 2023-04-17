<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;


Route::get('/', [CarroController::class, 'index']);
Route::get('/carros/create', [CarroController::class, 'create']);
Route::post('/carros',[CarroController::class,'store']);
Route::delete('/carros/{id}',[CarroController::class,'destroy']);
Route::get('/carros/edit/{id}',[CarroController::class,'edit']);
Route::put('/carros/update/{id}',[CarroController::class,'update']);
