@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Categoria</div>
                <div class="card-body">
                    <div class="col-4">
                        <label for="">Id:</label>
                        {!! Form::label("id", $categorium->id) !!}
                    </div>
                    <div class="col-4">
                        <label for="">Nombre:</label>
                        {!! Form::label("nombre", $categorium->nombre) !!}
                    </div>
                    <div class="col-4">
                        <label for="">Descripcion:</label>
                        {!! Form::label("descripcion", $categorium->descripcion) !!}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group">
                        <a href="{!! route('categoria.index') !!}" class="btn btn-raised btn-danger">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
