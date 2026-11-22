<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Direccion extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'direccion';
    protected $fillable = ['domicilio','numeroInt','numeroExt','colonia',
    'municipio','codigoPostal','estado','referencia'];
    protected $dates = ['created_at','updated_at','deleted_at'];
}
