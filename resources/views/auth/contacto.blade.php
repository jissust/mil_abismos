@extends('admin.master')
@section('content')
    <h1>Contacto</h1>
    <form action="{{ route('contacto.grabar') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        @if( $contacto != '')
            @foreach( $contacto as $con)
                <div style="float:left; width: 100%; padding: 10px; border:1px solid black; height: 200px; margin-bottom: 20px" >
                    <img src="{{ $con->imagen }}" style="float:left; height: 100%">
                </div>
            @endforeach
        @endif
        <div class="form-group">
            <input type="file" name="file" id="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-info">Grabar</button>
    </form>
@stop
