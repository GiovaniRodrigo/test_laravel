<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarroController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\AuthController;

Route::middleware(['auth'])->group(function () {
    //Main
    Route::get('/',  function () {return view ('main');});

    //Carros
    Route::post('/abastecer/{carro}', [MainController::class, 'abastecer']);
    Route::get('/list', [CarroController::class, 'list']);
    Route::get('/carros/create', [CarroController::class, 'create']);
    Route::post('/carros',[CarroController::class,'store']);
    Route::delete('/carros/{id}',[CarroController::class,'destroy']);
    Route::get('/carros/edit/{id}',[CarroController::class,'edit']);
    Route::put('/carros/update/{id}',[CarroController::class,'update']);
});

require __DIR__.'/auth.php';
