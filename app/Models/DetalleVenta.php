<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetalleVenta extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'detalleventa';
    protected $fillabe = ['venta_id', 'carrito_id'];
    protected $dates = ['created_at', 'update_at', 'deleted_at'];
}
