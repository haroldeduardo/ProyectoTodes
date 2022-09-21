<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivoeventomodels extends Model
{
    use HasFactory;
    protected $table = 'archivoevento';
    protected $fillable = [
   
        'Nombre',
        'Descripcion',
        'id_publicacion',
       
        
    ];

    public  function publicacion(){
        return $this->belongsTo(Publicacionevento::class,'id_publicacion');
    }
}
