<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo_model extends Model
{
    use HasFactory;
    protected $table='archivo';
    protected $fillable=[
        'cantidad_file'
   ];
}
