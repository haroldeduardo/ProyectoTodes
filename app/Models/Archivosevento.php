<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivosevento extends Model
{
    use HasFactory;

    public function publicacion(){
        return $this->hasMany(Publicacionevento::class,'id');
    }
}
