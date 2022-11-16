<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivoeventomodels extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $table = 'archivoevento';
    protected $fillable = [
        'ruta',
        'id_publicacion',
       // 'nombre',
       // 'imagen'
    ];

   /* public  function publicacion(){
        return $this->belongsTo(Publicacionevento::class,'id_publicacion');
    }*/

}
