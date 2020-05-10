@extends('admin.home')
@section('content')
    <h1>Redes</h1>
    {!! Form::open(['route' => 'redes.grabar', 'method' => 'POST' ]) !!}
    <div class="form-group">
        {{ Form::label('direccion') }}
        {{ Form::text('direccion', null, ['class' => 'form-control','placeholder' => 'Ingresar direccion de imagen...']) }}
    </div>
    <div class="form-group">
        {{ Form::label('icono') }}
        {{ Form::text('icono', null, ['class' => 'form-control','placeholder' => 'Ingresar ruta de icono...']) }}
    </div>
    <div class="form-group">
        {{ Form::label('nombre') }}
        {{ Form::text('nombre', null, ['class' => 'form-control','placeholder' => 'Ingresar nombre...']) }}
    </div>
    <div class="form-group">
        {{ Form::label('Ruta') }}
        {{ Form::text('ruta', null, ['class' => 'form-control','placeholder' => 'Ingresar nombre...']) }}
    </div>
    {{ Form::submit('Guardar',['class' => 'btn btn-primary'] ) }}
    {!! Form::close() !!}
@stop
