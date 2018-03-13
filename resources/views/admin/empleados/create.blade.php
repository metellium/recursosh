@extends('admin.template.main');

@section('title','Registrar Empleado')

@section('content')
    {!! Form::open(['route'=> 'empleado.store','method'=>'POST']) !!}
    <div class="form-group">
    {!! Form::label('nombre','Nombre')!!}
    {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre completo','required'])!!}
    </div>
    <div class="form-group">
    {!! Form::label('edad','Edad')!!}
    {!! Form::text('edad',null,['class'=>'form-control','placeholder'=>'edad','required'])!!}
    </div>
    <div class="form-group">
    {!! Form::label('direccion','Dirección')!!}
    {!! Form::text('direccion',null,['class'=>'form-control','placeholder'=>'México','required'])!!}
    </div>
    <div class="form-group">
    {!! Form::label('estado','Estado')!!}
    {!! Form::select('estado',['1'=>'Verdadero','0'=>'Falso'],null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
    {!! Form::label('fecha_nacimiento','Fecha_de_Nacimiento')!!}
    {!! Form::date('fecha_nacimiento',"",['class'=>'form-control','required'])!!}
    </div>
    <div class="form-group">
    {!! Form::label('telefono','Telefono')!!}
    {!! Form::text('telefono',null,['class'=>'form-control','placeholder'=>'(247)9999999','required'])!!}
    </div>
    <br>
    <br>
    <br>    
    <p>Datos Económicos</p>
<!--                       aqui termina empleado                     -->
<!--                       aqui empieza datos económicos                     -->
    <div class="form-group">
    {!! Form::label('tbl_empleado_id','Id del empleado')!!}
    {!! Form::text('tbl_empleado_id',null,['class'=>'form-control','placeholder'=>'1,-9','required'])!!}
    </div>
    <div class="form-group">
    {!! Form::label('puesto','Puesto')!!}
    {!! Form::text('puesto',null,['class'=>'form-control','placeholder'=>'Puesto que desarrollas','required'])!!}
    </div>
    <div class="form-group">
    {!! Form::label('salario','Salario')!!}
    {!! Form::text('salario',null,['class'=>'form-control','placeholder'=>'$','required'])!!}
    </div>   
    <br>
    <br>
    <br>    
    <p>Lenguajes</p>
<!--                       aqui termina datos económicos                     -->
<!--                       aqui empieza lenguajes                     -->
    <div class="form-group">
    {!! Form::label('lenguaje','Lenguaje de Programación')!!}
    {!! Form::text('lenguaje',null,['class'=>'form-control','placeholder'=>'Lenguaje que desarrollas','required'])!!}
    </div>
    <br>
    <br>
    <br>    
    <p>Conocimientos</p>
<!--                       aqui termina lenguajes                     -->
<!--                       aqui empieza conocimientos                     -->
    <div class="form-group">
    {!! Form::label('porcentaje','Porcentaje que tienes')!!}
    {!! Form::text('porcentaje',null,['class'=>'form-control','placeholder'=>'Porcentaje en 3 digitos','required'])!!}
    </div>
    <div class="form-group">
    {!! Form::label('curso','Curso')!!}
    {!! Form::select('curso',['1'=>'Verdadero','0'=>'Falso'],null,['class'=>'form-control'])!!}
    </div>    
    <div class="form-group">
    {!! Form::label('tbl_empleado_id','Id del empleado')!!}
    {!! Form::text('tbl_empleado_id',null,['class'=>'form-control','placeholder'=>'1 - 9','required'])!!}
    </div>
    <div class="form-group">
    {!! Form::label('tbl_lenguajes_id','Id de lenguaje')!!}
    {!! Form::text('tbl_lenguajes_id',null,['class'=>'form-control','placeholder'=>'1 - 9','required'])!!}
    </div>
    <div class="form-group">
    {!! Form::submit('Crear',['class'=>'btn btn-primary']) !!}    
    </div>

    {!! Form::close()!!}
@endsection
