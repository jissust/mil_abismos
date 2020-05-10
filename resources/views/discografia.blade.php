@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Discografía</div>

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
                        <form action="{{ route('discografia.grabar') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if( $discografia != '')
                                @foreach( $discografia as $dis)
                                    <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img src="{{ $dis->imagen }}" class="card-img" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $dis->titulo }}</h5>
                                                    <p class="card-text">{{ $dis->texto }}</p>
                                                    <a href="/admin/borrar/discografia/{{ $dis->id }}" class="btn btn-danger">Borrar</a>
                                                    <a href="/editar/discografia/{{ $dis->id }}" class="btn btn-success">Editar</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="form-group">
                                <input type="file" name="file" id="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="titulo" id="titulo" class="form-control"  placeholder="texto"/>
                            </div>
                            <button type="submit" class="btn btn-info">Grabar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@stop
