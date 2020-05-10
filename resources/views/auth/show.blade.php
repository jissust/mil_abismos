@extends('admin.master')
@section('content')
    <h1>Show</h1>
    <form action="{{ route("show.grabar") }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        @if( $show != '')
            @foreach( $show as $sh)
                <div style="float:left; width: 100%; padding: 10px; border:1px solid black; margin-bottom: 20px" >
                    <div class="col-sm-4">
                        <img src="{{ $sh->ruta_imagen }}" style="float:left; width: 100%">
                    </div>
                    <div class="col-sm-8">

                        <div style="padding:20px; float: left; width: 70%;">
                            {{ $sh->titulo }}
                        </div>
                        <div style="padding:20px; float: left;width: 70%;">
                            {{ $sh->texto }}
                        </div>
                    </div>

                </div>
            @endforeach
        @endif
        <div class="form-group">
            <input type="file" name="file" id="file" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="titulo" id="titulo" class="form-control" placeholder="titulo"/>
        </div>
        <div class="form-group">
            <textarea type="text" name="texto" id="texto" class="form-control" placeholder="texto" ></textarea>
        </div>
        <button type="submit" class="btn btn-info">Grabar</button>
    </form>
@stop
