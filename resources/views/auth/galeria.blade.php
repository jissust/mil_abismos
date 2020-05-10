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

                        <h1>Escuchanos</h1>

                        <form action="" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if( $escuchanos != '')
                                @foreach( $escuchanos as $esc)
                                    <div style="float:left; width: 100%; padding: 10px; border:1px solid black; height: 200px; margin-bottom: 20px" >
                                        <img src="{{ $esc->imagen }}" style="float:left; height: 100%">
                                        <div style="padding:20px; float: left">
                                            {{ $esc->texto }}
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="form-group">
                                <input type="file" name="file" id="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="texto" id="texto" class="form-control" placeholder="texto"/>
                            </div>
                            <button type="submit" class="btn btn-info">Grabar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@stop
