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
                        <form action="{{ route('update.redes') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card mb-3" >
                                <div class="row no-gutters">
                                    <div class="col-md-4" style="background-color: darkgrey;">
                                        <img src="{{ $redes->ruta }}" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">YouTube</h5>
                                            <div class="form-group">
                                                <input type="file" name="file" id="file" class="form-control" value="asdasdsad" />
                                            </div>
                                            <div class="form-group">
                                                <input id="" name="id" value="{{$redes->id}}" style="display: none;" />
                                                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingresar direccion de imagen..." value="{{ $redes->direccion }}">
                                            </div>

                                            <div class="form-group">
                                                <select value="{{ $redes->nombre }}" class="form-control" name="nombre" >
                                                    <option value="">Seleccionar un nombre</option>
                                                    <option value="Spotify">Spotify</option>
                                                    <option value="YouTube">YouTube</option>
                                                    <option value="Instagram">Instagram</option>
                                                    <option value="Facebook">Facebook</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Editar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@stop
