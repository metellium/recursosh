<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table ="tbl_empleado";
    protected $fillable=['nombre','edad','direccion','estado','fecha_nacimiento','telefono'];
    public function conocimientos()
    {
        return $this->hasMany('App\Conocimiento');
    }
    public function dato_econoimco()
    {
        return $this->hasOne('App\Dato_economico');
    }
}
