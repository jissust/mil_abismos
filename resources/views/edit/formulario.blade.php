@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Home</h1>
                    <form action="{{ route('home.update') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @if( $home != '')
                            <div style="float:left; width: 100%; padding: 10px; border:1px solid black; margin-bottom: 20px" >
                                <div class="embed-responsive embed-responsive-16by9" style="float:left; width: 100%;">
                                    <iframe class="embed-responsive-item" src="{{$home->ruta}}" allowfullscreen></iframe>
                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            <input id="" name="id" value="{{$home->id}}" style="display: none;" />
                            <input type="file" name="file" id="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="visualizar" id="visualizar" value="0"> Visualizar
                        </div>
                        <button type="submit" class="btn btn-success" href="/update/formulario/">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
