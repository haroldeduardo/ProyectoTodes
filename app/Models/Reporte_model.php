<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte_model extends Model
{
    use HasFactory;
    protected $table='reporte';
    protected $fillable=[
        'fecha_reporte',
        'hora_reporte',
        'lugar_reporte',
        'nombre_victima',
        'edad_aprox',
        'descripcion_reporte'
    ];
}
