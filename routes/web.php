<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\dataController;

Route::get('/', function () {
    $departamentos = DB::table('departments')->get();
    return view('welcome', ['departments' => $departamentos]);
});

Route::get('/prueba', function () {

    $departamentos = DB::table('departments')->get();
    return view('test', ['departamentos' => $departamentos]);

})->name('prueba');


Route::get('/datos', [dataController::class, 'data'] )->name('datos');