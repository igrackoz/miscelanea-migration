<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function test()
    {
        // Definir los datos que se pasan a la vista
        $title = 'Acerca de Nosotros';
        $description = 'Esta es una página que explica más sobre nuestro sitio web y qué hacemos.';
        
        // Pasar las variables a la vista
        return view('test', compact('title', 'description'));
    }
}
