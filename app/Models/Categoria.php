<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'categoria';
    protected $fillable = ['nombre', 'descripcion']; // Corregido: 'fillable' en lugar de 'fillabe'
    protected $dates = ['created_at', 'updated_at', 'deleted_at']; // Corregido 'update_at' por 'updated_at'
}
