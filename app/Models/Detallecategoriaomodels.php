<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detallecategoriaomodels extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $table = 'detallecategoria';
    protected $fillable = [
        'prioridad',
        'id_publicacion',
        'id_categoria',
        
        
    ];
    
}
