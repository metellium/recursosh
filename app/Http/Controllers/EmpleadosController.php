<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Conocimiento;
use App\Dato_economico;
use App\Lenguaje;
use App\Empleado;
use App\Resumen;



use Laracasts\Flash\Flash;

class EmpleadosController extends Controller
{
    public function index()
    {
        $empleados=Empleado::orderBy('id','ASC')->paginate(5);
        return view('admin.empleados.index')->with('empleados',$empleados);
        //encargado de mostrar la lista de Empleados
      
    }
    public function create()
    {
        //encargado de registrar nuevo Empleado
        return view('admin.empleados.create');
    }
    public function store(Request $request)
    {   
        
        $empleado = new Empleado($request->all());        
        $dato_economico = new Dato_economico($request->all());
        $lenguaje = new Lenguaje($request->all());
        $conocimiento = new Conocimiento($request->all());

        $empleado->save();
        $dato_economico->save();
        $lenguaje->save();
        $conocimiento->save();
                
        Flash::success("Se ha registrado ".$empleado->nombre." de forma exitosa");        
        return redirect()->route('empleado.index');            
        
    }
    public function show($id)
    {        
        //mostrar un empleado en especifico
    }
    public function edit($id)
    {        
        $conocimiento = Conocimiento::find($id);
        $dato_economico = Dato_economico::find($id);
        $lenguaje = Lenguaje::find($id);
        $empleado = Empleado::find($id);
        $resumen= new Resumen;

        $resumen ->nombre=$empleado->nombre;
        $resumen ->edad=$empleado->edad;
        $resumen ->direccion=$empleado->direccion;
        $resumen ->estado=$empleado->estado;
        $resumen ->fecha_nacimiento=$empleado->fecha_nacimiento;
        $resumen ->telefono=$empleado->telefono;

        $resumen ->puesto=$dato_economico->puesto;
        $resumen ->salario=$dato_economico->salario;

        $resumen ->lenguaje=$lenguaje->lenguaje;

        $resumen ->porcentaje=$conocimiento->porcentaje;
        $resumen ->curso=$conocimiento->curso;
        
        return view('admin.empleados.editar')->with('empleado',$empleado) ;
    }
    
    public function update(Request $request , $id)
    {
        $empleado = Empleado::find($id);
        $resumen= new Resumen;

        $empleado-> nombre=$request->nombre;
        $empleado-> edad=$request->edad;
        $empleado-> direccion=$request->direccion;
        $empleado-> estado=$request->estado;
        $empleado-> fecha_nacimiento=$request->fecha_nacimiento;
        $empleado-> telefono=$request->telefono;
        $empleado->save();
       Flash::warning("El Empleado ".$empleado->nombre." se actualizado correctamente");
       return redirect()->route('empleado.index');
    }
    public function destroy($id)
    {        
        $conocimiento = Conocimiento::find($id);
        $dato_economico = Dato_economico::find($id);
        $lenguaje = Lenguaje::find($id);
        $empleado = Empleado::find($id);        
        
        Flash::error("El usuario ".$empleado->nombre." ha sido borrado de forma exitosa");
        $conocimiento->delete();
        $dato_economico->delete();
        $lenguaje->delete();        
        $empleado->delete();
        return redirect()->route('empleado.index');
        
        //eliminar un empleado en especifico
    }
}

