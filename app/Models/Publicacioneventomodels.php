<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacioneventomodels extends Model
{
    use HasFactory;

    protected $table = 'publicacionevento';
    protected $fillable = [
   
        'Nombre',
        'Descripcion',
        
       
        
    ];

    public  function archivo(){
        return $this->hasMany(Archivoevento::class,'id');
    }
}
