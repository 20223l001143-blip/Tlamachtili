<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estatus extends Model
{
    use HasFactory, SoftDeletes;


    protected $table = 'estatus';
    protected $fillabe = ['nombre', 'descripcion'];
    protected $dates = ['created_at', 'update_at', 'deleted_at'];
}
