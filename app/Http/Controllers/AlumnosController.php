<?php

namespace App\Http\Controllers;
use App\Models\Alumnos;
use Illuminate\Http\Request;


class AlumnosController extends Controller
{
    public function mostrar()
    {
        return view('AgregarAlumnos');
    }

    public function store(Request $request)
    {
        $alumno = new Alumnos(); 
        $alumno->AlumnoId = $request->AlumnoId;
        $alumno->Nombre = $request->Nombre;
        $alumno->email = $request->email;
        $alumno->Direccion = $request->Direccion;
        $alumno->Ciudad = $request->Ciudad;
        $alumno->Estado = $request->Estado;
        $alumno->CodPos = $request->CodPos;
        $alumno->save();

        return redirect('alumnos'); 
    }


    public function buscar (Request $request)
    {
        $texto=trim($request->get ('texto'));
        $alumnos = Alumnos::where('Nombre','like',"%$texto%")->get();
        return view('VistaAlumnos', ['alumnos'=> $alumnos]);
    }
}
