<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumnos extends Model
{       use HasFactory;
    protected $fillable =[
        'AlumnoId',
        'Nombre',
        'email',
        'Direccion',
        'Ciudad',
        'Estado',
        'CodPos'
    ];  

}
