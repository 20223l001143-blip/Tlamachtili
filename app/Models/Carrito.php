<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carrito extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'carrito';
    protected $fillable = ['cliente_id','producto_id','cantidad','precioUnitario','estatus'];
    protected $dates = ['created_at','updated_at','deleted_at'];

    public function carrito_producto() {
        return $this->hasOne('App\Models\Producto','id', 'producto_id')->withTrashed();
    }
}