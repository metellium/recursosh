<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resumen;
use Laracasts\Flash\Flash;

class ResumenController extends Controller
{
    public function show($nombre)
    {
        $resumen = Resumen::find($nombre);
        dd($resumen->all());
        //return view('admin.empleados.descripcion')->with('resumen',$resumen) ;        
        //mostrar un Resumen en especifico
    }
    public function index()
    {
        $resumens=Resumen::orderBy('nombre','ASC')->paginate(5);                
       return view('admin.empleados.descripcion')->with('resumens',$resumens);
        //encargado de mostrar la lista de Empleados
      
    }
}