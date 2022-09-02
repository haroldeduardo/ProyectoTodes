<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento_model extends Model
{
    use HasFactory;
    protected $table='evento';
    protected $fillable=[
        'nombre_evento',
        'fecha_evento',
        'hora_evento',
        'lugar_evento',
         'descripcion_evento',
         'responsable_evento'
    ];
}
