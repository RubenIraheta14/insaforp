<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'inicio',
        'fin',
        'ubicacion',
        'departamento',
        'municipio',
        'horas' ,
        'modalidad',
        'tipo_costo', 
        'costo',
        'n_participantes',
        'n_evaluaciones',
        'n_contrato',
        'orden',
        'orden_bolsa',
        'item',
        'programa',
        'facilitador',
    ];
}
