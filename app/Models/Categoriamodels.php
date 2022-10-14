<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoriamodels extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $table = 'categoria';
    protected $fillable = [

        'nombre',
        'descripcion',
    ];

    public  function publicacion(){
        return $this->belongsTo(Publicacionevento::class,'detallecategoria');
    }
}
