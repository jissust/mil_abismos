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

                    <h1>Contacto</h1>
                    <form action="{{ route('update.contacto') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div style="float:left; width: 100%; padding: 10px; border:1px solid black; height: 200px; margin-bottom: 20px" >
                            <img src="{{ $contacto->imagen }}" style="float:left; height: 100%">
                        </div>
                        <div class="form-group">
                            <input id="" name="id" value="{{$contacto->id}}" style="display: none;" />
                            <input type="file" name="file" id="file" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
