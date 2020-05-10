@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Show</div>

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
                        <form action="{{ route('update.show') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card mb-3" >
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="{{ $show->ruta_imagen }}" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <input type="file" name="file" id="file" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input id="" name="id" value="{{$show->id}}" style="display: none;" />
                                                <input type="text" name="titulo" id="titulo" class="form-control" placeholder="titulo" value="{{ $show->titulo }}"/>
                                            </div>
                                            <div class="form-group">
                                                <textarea type="text" name="texto" id="texto" class="form-control" placeholder="texto" >{{ $show->texto }}</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-success">Editar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@stop
