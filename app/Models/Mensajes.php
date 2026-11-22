<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mensajes extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'mensajes';
    protected $fillable = ['nombre','email','telefono','mensaje'];
    protected $dates = ['created_at','updated_at','deleted_at'];
}
