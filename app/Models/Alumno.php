<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable = [
        'actividad_id',
        'nombre',
        'apellidoP',
        'apellidoM',
        'semestre',
        'correo',
        'telefono',
        'carrera'
    ];
    public function actividad()
    {
    	return $this->belongsTo(Actividad::class);
    	//una o muchas actividades tienen a solo un docente
    }
}
