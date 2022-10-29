<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;
    protected $table = 'comentarios';
    protected $fillable = [
        'contenido',
        'clasificacion',
        'fecha_comentario',
        'id_publicacion',
        'id_usuario',
    ];

    public  function publicacion(){
        return $this->belongsTo(Publicacionevento::class,'id_publicacion');
    }

    public  function usuario(){
        return $this->belongsTo(Publicacionevento::class,'id_usuario');
    }
}
