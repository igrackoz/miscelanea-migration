<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\dataController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', [testController::class, 'test'])->name('prueba');
Route::get('/datos', [dataController::class, 'data'])->name('datos');