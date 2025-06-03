<?php

namespace App\Http\Controllers;
use App\Http\Requests\validaRequest;
use Illuminate\Http\Request;

class datoscontroller extends Controller
{
    public function mostrar()
{
    return view('datos');
}

public function store(validaRequest $request)
{
    return $request->all();
}

}
