<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publicacioneventomodels extends Model
{
    use HasFactory;

    protected $table ='publicacionevento';
    protected $fillable=[
            'Nombre',
           'Descripcion',
            'FechaHora',
            'Lugar',
            'Estado',
            'UrlExterna',
            'Responsable',
            'Fecha_caducidad',
            'Tipo'
    ];
}
