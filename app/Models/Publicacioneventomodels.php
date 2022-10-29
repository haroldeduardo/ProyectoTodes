<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacioneventomodels extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $table = 'publicacionevento';
    protected $fillable = [
   
        'nombre',
        'descripcion',
        'fecha_y_Hora',
        'lugar',
        'estado',
        'url',
        'reponsable',
        'fecha_caducidad',
        'tipo',
        
        

    ];

    public  function archivo(){
        return $this->hasMany(Archivoevento::class,'id');
    }

    public  function categoria(){
        return $this->belongsTo(Categoria::class,'detallecategoria');
    }
}
