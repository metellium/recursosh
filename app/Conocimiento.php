<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conocimiento extends Model
{
    protected $table="tbl_conocimientos";
    protected $fillable=['porcentaje','curso','tbl_empleado_id','tbl_lenguajes_id'];
    public function empleado()
    {
        return $this-> belongsTo('App\Empleado');
    }
    public function lenguaje()
    {
        return $this-> belongsTo('App\Lenguaje');
    }
}
