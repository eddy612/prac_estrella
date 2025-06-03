<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hola extends Controller
{
    public function saludo()
    {
    return ('Hola mundo desde un controlador');
    }
}
