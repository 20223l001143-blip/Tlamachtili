<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'producto';
    protected $fillable = ['categoria_id','marca_id','nombre','presentacion','descripcion',
    'precioPublico','precioCompra','precioMayorista','cantidadMayorista','cantidadDisponible',
    'cantidadMinima','cantidadMaxima','codigoBarras','imagen'];
    protected $dates = ['created_at','updated_at','deleted_at'];
}