@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Redes</div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if( count($errors) > 0 )
                            <div class="alert alert-danger" role="alert">
                                @foreach( $errors->all() as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </div>
                        @endif
                        @if (session('ok'))
                            <div class="alert alert-success">
                                {{ session('ok') }}
                            </div>
                        @endif
                        @if( $redes != '')
                            @foreach( $redes as $esc)
                                    <div class="card mb-3">
                                        <div class="row no-gutters">
                                            <div class="col-md-4" style="background-color: darkgrey;">
                                                <img src="{{ $esc->ruta }}" class="card-img" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $esc->nombre }}</h5>
                                                    <p class="card-text"><strong>Url: </strong>{{ $esc->direccion }}</p>
                                                    <p class="card-text"><strong>Icono: </strong>{{ $esc->ruta }}</p>
                                                    <a class="btn btn-danger" href="/admin/borrar/redes/{{$esc->id}}">Borrar</a>
                                                    <a class="btn btn-success" href="/editar/redes/{{$esc->id}}">Editar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                        @endif

                        <form action="{{ route('redes.grabar') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="file" name="file" id="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingresar direccion de imagen...">
                            </div>
                            <!--<div class="form-group">
                                <input type="text" name="icono" id="icono" class="form-control" placeholder="Ingresar ruta de icono..."/>
                            </div>-->
                            <div class="form-group">
                                <select class="form-control" name="nombre">
                                    <option value="">Seleccionar un nombre</option>
                                    <option value="Spotify">Spotify</option>
                                    <option value="YouTube">YouTube</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Facebook">Facebook</option>
                                </select><!--
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresar nombre..."/>
                                -->
                            </div>
                            <!--<div class="form-group">
                                <input type="text" name="ruta" id="ruta" class="form-control" placeholder="Ingresar nombre..."/>
                            </div>-->
                            <button type="submit" class="btn btn-info">Grabar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@stop
