<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resumen extends Model
{
    protected $table ="resumen";
    protected $fillable=['nombre','edad','direccion','estado','fecha_nacimiento','telefono','puesto','salario','lenguaje','porcentaje','curso'];
}
