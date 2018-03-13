<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lenguaje extends Model
{
    protected $table="tbl_lenguajes";
    protected $fillable=['lenguaje'];   
    public function conocimientos(){
        return $this->hasMany('App\Conocimiento');
    } 
}
