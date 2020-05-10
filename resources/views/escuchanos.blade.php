@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                    Escuchanos
                </div>

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
                    <form action="{{ route('escuchanos.grabar') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @if( $escuchanos != '')
                            @foreach( $escuchanos as $esc)
                                <div style="float:left; width: 100%; padding: 10px; border:1px solid black; height: 200px; margin-bottom: 20px" >
                                    <img src="{{ $esc->imagen }}" style="float:left; height: 100%">
                                    <div style="padding:20px; float: left">
                                        {{ $esc->texto }}
                                    </div>
                                    <div style="float:right; ">
                                        <a class="btn btn-danger" href="/admin/borrar/escuchanos/{{$esc->id}}">Borrar</a>
                                        <a class="btn btn-success" href="/editar/escuchanos/{{$esc->id}}">Editar</a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="form-group">
                            <input type="file" name="file" id="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="texto" id="texto" class="form-control" placeholder="texto"/>
                        </div>
                        <button type="submit" class="btn btn-info">Grabar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
