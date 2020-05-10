@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Home</div>

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

                            @if( empty($home))
                                <form action="{{ route('home.grabar') }}" method="POST" enctype="multipart/form-data">
                            @else
                                 <form action="{{ route('home.update') }}" method="POST" enctype="multipart/form-data">
                                 @foreach( $home as $h)
                                         <input type="hidden" id="id" name="id" value="{{$h->id}}"/>
                                     <div style="float:left; width: 100%; padding: 10px; border:1px solid black; margin-bottom: 20px" >
                                         <div class="embed-responsive embed-responsive-16by9" style="float:left; width: 100%;">
                                             <iframe class="embed-responsive-item" src="{{$h->ruta}}" allowfullscreen></iframe>
                                         </div>
                                     </div>
                                 @endforeach
                            @endif

                             {{ csrf_field() }}
                             <div class="form-group">
                                 <input type="file" name="file" id="file" class="form-control">
                             </div>

                             @if( empty($home))
                                 <button type="submit" class="btn btn-info">Grabar</button>
                             @else
                                 @foreach( $home as $h)
                                     <div style="float:left; width: 100%; padding: 10px;">
                                         <a class="btn btn-danger" href="/admin/borrar/formulario/{{$h->id}}">Borrar</a>
                                     </div>
                                 @endforeach
                                <button type="submit" class="btn btn-success" >Editar</button>
                             @endif
                                <!--
                            <div class="form-group">
                                <input type="checkbox" name="visualizar" id="visualizar" value="0"> Visualizar
                            </div>-->
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
