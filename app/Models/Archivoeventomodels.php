<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivoeventomodels extends Model
{
    use HasFactory;
   // public $timestamps = FALSE;
    protected $table='archivoevento';
    protected $fillable=[
        'ruta',
        'id_publicacion',
   ];
}
