<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aviso extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'aviso';

    protected $fillable = [
        'titulo',
        'descripcion',
        'fecha_publicacion',
        'fecha_expiracion',
        'imagen',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'fecha_publicacion',
        'fecha_expiracion',
    ];

    // Eliminé la relación con categoría porque ya no existe
}
