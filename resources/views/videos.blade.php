@extends('layouts.app')
@section('content')
    <script>
        $( document ).ready(function() {
            var $checkbox = $('input[name="disabled"]');
            $checkbox.change(function(){
                if(this.checked){
                    $("#ruta").prop('disabled', false);
                    $("#file").prop('disabled', true);
                }else{
                    $("#ruta").prop('disabled', true);
                    $("#file").prop('disabled', false);
                }
            });
        });
    </script>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Videos</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('videos.grabar') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if( $videos != '')
                                @foreach( $videos as $video)
                                    <div style="float:left; width: 100%; padding: 10px; border:1px solid black; margin-bottom: 20px" >
                                        <div style="padding:20px; float: left">
                                            <video width="100%" style="float: left;" controls>
                                                <source src="{{ $video->ruta  }}"/>
                                            </video>
                                            <div style="float:left; width: 100%; padding: 10px;">
                                                <a class="btn btn-danger" href='/admin/borrar/videos/{{$video->id}}'>Borrar</a>
                                                <a href="/editar/videos/{{ $video->id }}" class="btn btn-success">Editar</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="form-group">
                                <input type="file" name="file" id="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="disabled" id="disabled"/>  Ingresar ruta de video
                            </div>
                            <div class="form-group">
                                <input type="text" name="ruta" id="ruta" class="form-control" placeholder="Ingresa ruta de video..." disabled/>
                            </div>
                            <button type="submit" class="btn btn-info">Grabar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@stop
