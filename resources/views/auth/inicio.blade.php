@extends('admin.master')
@section('content')
    <h1>Home</h1>
    <!-- <form action="{{ route('home.grabar') }}" method="POST" enctype="multipart/form-data"> -->
    <form action="" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        @if( $home != '')
            @foreach( $home as $h)
                <div style="float:left; width: 100%; padding: 10px; border:1px solid black; margin-bottom: 20px" >
                    <div class="embed-responsive embed-responsive-16by9" style="float:left; width: 100%;">
                        <iframe class="embed-responsive-item" src="{{$h->ruta}}" allowfullscreen></iframe>
                    </div>
                </div>
            @endforeach
        @endif
        <div class="form-group">
            <input type="file" name="file" id="file" class="form-control">
        </div>
        <div class="form-group">
            <input type="checkbox" name="visualizar" id="visualizar" value="0"> Visualizar
        </div>
        <button type="submit" class="btn btn-info">Grabar</button>
    </form>
@stop
