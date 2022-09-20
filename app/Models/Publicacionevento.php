<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacionevento extends Model
{
    use HasFactory;

    public function archivos(){
        return $this->belongsTo(archivosevento::class,'id');
    }
}
