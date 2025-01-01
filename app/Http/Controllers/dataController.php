<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataController extends Controller
{
    public function data()
    {
        // Definir los datos que se pasan a la vista
        $title = 'info de la página';
        $description = 'información.';
        
        // Pasar las variables a la vista
        return view('data', compact('title', 'description'));
    }
}
