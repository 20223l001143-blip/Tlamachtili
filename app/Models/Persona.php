<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'persona';
    protected $fillable = ['user_id','estatus_id','nombre','primerApellido','segundoApellido','curp','fechaNacimiento','genero','email','telefono','movil','tipo_persona','imagen'];
    protected $dates = ['created_at','updated_at','deleted_at'];

    public function person_cliente() {
        return $this->hasOne('App\Models\Cliente','persona_id','id')->withTrashed();
    }
}