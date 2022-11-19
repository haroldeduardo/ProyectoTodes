<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacioneventomodels extends Model
{
    use HasFactory;
    protected $table = 'publicacionevento';
    protected $fillable = [
         'fecha_y_hora',
         'nombre',
         'descripcion',
         'lugar',
         'estado',// <-- Aquí el enum
         'urlExterna',
         'responsable',
         'fecha_caducidad',
         'tipo'// <-- Aquí  enum
   
    ];

  /*  public  function archivo(){
        return $this->hasMany(Archivoevento::class,'id');
    }

    public  function categoria(){
        return $this->belongsTo(Categoria::class,'detallecategoria');
    }*/
}
