<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\MainController;

//Main
Route::get('/', [MainController::class, 'index']);
Route::post('/abastecer/{carro}', [MainController::class, 'abastecer']);

//Carros
Route::get('/list', [CarroController::class, 'list']);
Route::get('/carros/create', [CarroController::class, 'create']);
Route::post('/carros',[CarroController::class,'store']);
Route::delete('/carros/{id}',[CarroController::class,'destroy']);
Route::get('/carros/edit/{id}',[CarroController::class,'edit']);
Route::put('/carros/update/{id}',[CarroController::class,'update']);


//Redefinir senha
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('main');
    })->name('dashboard');
});
