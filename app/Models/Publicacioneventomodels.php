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
   
        'Nombre',
        'Descripcion',
        
       
        
    ];

    public  function archivo(){
        return $this->hasMany(Archivoevento::class,'id');
    }

    public  function categoria(){
        return $this->belongsTo(Categoria::class,'detallecategoria');
    }
}
