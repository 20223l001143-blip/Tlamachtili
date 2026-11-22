<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venta extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'venta';
    protected $fillabe = ['cantidadTotal', 'formaPago'];
    protected $dates = ['created_at', 'update_at', 'deleted_at'];
}