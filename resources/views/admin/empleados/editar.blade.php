@extends('admin.template.main');

@section('title','Editar Empleado ')
@section('content')
<h3>Editar Datos de Empleado</h3>

    {!! Form::open(['route'=> ['empleado.update',$empleado],'method'=>'PUT']) !!}
    
    <div class="form-group">
    {!! Form::label('nombre','Nombre')!!}
    {!! Form::text('nombre',$empleado->nombre,['class'=>'form-control','placeholder'=>'Nombre completo','required'])!!}
    </div>
    <div class="form-group">
    {!! Form::label('edad','Edad')!!}
    {!! Form::text('edad',$empleado->edad,['class'=>'form-control','placeholder'=>'edad','required'])!!}
    </div>
    <div class="form-group">
    {!! Form::label('direccion','Dirección')!!}
    {!! Form::text('direccion',$empleado->direccion,['class'=>'form-control','placeholder'=>'México','required'])!!}
    </div>
    <div class="form-group">
    {!! Form::label('estado','Estado')!!}
    {!! Form::select('estado',['1'=>'Verdadero','0'=>'Falso'],null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
    {!! Form::label('fecha_nacimiento','Fecha_de_Nacimiento')!!}
    {!! Form::date('fecha_nacimiento',$empleado->fecha_nacimiento,['class'=>'form-control','required'])!!}
    </div>
    <div class="form-group">
    {!! Form::label('telefono','Telefono')!!}
    {!! Form::text('telefono',$empleado->telefono,['class'=>'form-control','placeholder'=>'(247)9999999','required'])!!}
    </div>
    <div class="form-group">
    {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}    
    </div>
    {!! Form::close()!!}
@endsection