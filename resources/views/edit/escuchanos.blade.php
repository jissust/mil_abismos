@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Escuchanos</div>

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
                        <form action="{{ route('escuchanos.update') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div style="float:left; width: 100%; padding: 10px; border:1px solid black; height: 200px; margin-bottom: 20px" >
                                <img src="{{ $escuchanos->imagen }}" style="float:left; height: 100%">
                            </div>

                            <div class="form-group">
                                <input type="file" name="file" id="file" class="form-control" >
                            </div>
                            <div class="form-group">
                                <input id="" name="id" value="{{$escuchanos->id}}" style="display: none;" />
                                <input type="text" name="texto" id="texto" class="form-control" placeholder="texto" value="{{ $escuchanos->texto }}" />
                            </div>
                            <button class="btn btn-success" >Editar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@stop
