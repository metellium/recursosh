<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato_economico extends Model
{
    protected $table ="tbl_datos_economicos";
    protected $fillable=['tbl_empleado_id','puesto','salario'];
    public function empleado()
    {
        return $this-> belongsTo('App\Empleado');
    } 
}

