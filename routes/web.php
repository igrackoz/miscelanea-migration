<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\dataController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/departamentos', function () {
    return view('departments');
})->name('departamentos');

Route::get('/resultados', function () {
    return view('search');
});

Route::get('/carrito', function () {
    return view('cart');
})->name('carrito');

Route::get('/perfil', function () {
    return view('profile');
})->name('perfil');

Route::get('/prueba', function () {

    $departamentos = DB::table('departments')->get();
    return view('test', ['departamentos' => $departamentos]);

})->name('prueba');
