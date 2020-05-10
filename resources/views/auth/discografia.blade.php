@extends('admin.master')
@section('content')
    <h1>Discografía</h1>
    <form action="{{ route("discografia.grabar") }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        @if( $discografia != '')
            @foreach( $discografia as $dis)
                <div style="float:left; width: 100%; padding: 10px; border:1px solid black; margin-bottom: 20px" >
                    <div class="col-sm-4">
                        <img src="{{ $dis->imagen }}" style="float:left; width: 100%">
                    </div>
                    <div class="col-sm-8">

                        <div style="padding:20px; float: left; width: 70%;">
                            {{ $dis->titulo }}
                        </div>
                        <div style="padding:20px; float: left;width: 70%;">
                            {{ $dis->texto }}
                        </div>
                    </div>

                </div>
            @endforeach
        @endif
        <div class="form-group">
            <input type="file" name="file" id="file" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="titulo" id="titulo" class="form-control" placeholder="texto"/>
        </div>
        <button type="submit" class="btn btn-info">Grabar</button>
    </form>
@stop
