@extends('admin.template.main');

@section('title','Lista de Empleados')

@section('content')

<table class="table table-striped">
        <thead>            
            <th>Nombre</th>
            <th>Edad</th>
            <th>Dirección</th>
            <th>Estado</th>            
            <th>Fecha de nacimiento</th>
            <th>telefono</th>            
            <td>Puesto</td>
            <td>Salario</td>
            <td>lenguaje</td>
            <td>porcentaje</td>            
            <td>Curso</td>            
        </thead>
        <tbody>         
        @foreach($resumens as $resumen)                    
                <tr>               
                    <td>{{$resumen->nombre}}</td>
                    <td>{{$resumen->edad}}</td>
                    <td>{{$resumen->direccion}}</td>
                    
                    <td>
                        @if($resumen->estado == "1")
                            <span class="alert alert-primary">{{$resumen->estado}}</span>
                        @elseif($resumen->estado == "0")
                            <span class="alert alert-danger">{{$resumen->estado}}</span>
                        @endif
                    </td>
                    <td>{{$resumen->fecha_nacimiento}}</td>
                    <td>{{$resumen->telefono}}</td>
                    <td>{{$resumen->puesto}}</td>
                    <td>{{$resumen->salario}}</td>
                    <td>{{$resumen->lenguaje}}</td>
                    <td>{{$resumen->porcentaje}}</td>
                    <td>{{$resumen->curso}}</td>                                        
                    
                </tr>    
                @endforeach        
        </tbody>
    </table>
    <a href="{{route('empleado.index') }}"class="btn btn-success">Regresar</a>
  
    @endsection