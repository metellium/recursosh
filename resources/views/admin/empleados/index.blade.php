@extends('admin.template.main');

@section('title','Lista de Empleados')

@section('content')
<a href="{{route('empleado.create') }}"class="btn btn-info">Registrar nuevo Empelado</a>
<a href="{{route('admin.empleados.resumen') }}"class="btn btn-success">Descripción de usuarios</a>
<table class="table table-striped">
        <thead>        
            <th>Id</th>
            <th>Nombre</th>            
            <td>Acción</td>
        </thead>
        <tbody>                     
            @foreach($empleados as $empleado)
                <tr>                
                    <td>{{$empleado->id}}</td>
                    <td>{{$empleado->nombre}}</td>
                    
                    <td><a href="{{route('empleado.edit',$empleado->id) }}"class="btn btn-warning">Editar</a></td>
                    <td><a href="{{route('admin.empleados.destroy',$empleado->id) }}" onclick="return confirm('Seguro que deseas elimiarlo?')"class="btn btn-danger">Eliminar</a></td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>    
    @endsection