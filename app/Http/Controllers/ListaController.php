<?php

namespace App\Http\Controllers;
use App\Models\Alumnos; //Modelo
use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function lista()
    {
        $Alumnos = Alumnos::all();
        return view('VistaAlumnos', compact('Alumnos'));
    }


    public function edit($id)
    {
        $alumno = Alumnos::findOrFail($id);
        return view('EditarAlumno', compact('alumno'));
    }
    public function update(Request $request, $id)
    {
        $alumno = Alumnos::findOrFail($id);
    
        // Validación opcional
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'Direccion' => 'nullable|string|max:255',
            'Ciudad' => 'nullable|string|max:255',
            'Estado' => 'nullable|string|max:255',
            'CodPos' => 'nullable|string|max:10',
        ]);
    
        // Actualiza los datos
        $alumno->update([
            'Nombre' => $request->Nombre,
            'email' => $request->email,
            'Direccion' => $request->Direccion,
            'Ciudad' => $request->Ciudad,
            'Estado' => $request->Estado,
            'CodPos' => $request->CodPos,
        ]);
    
        return redirect()->route('lista')->with('success', 'Alumno actualizado correctamente');
    }
    
}
  



