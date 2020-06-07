@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            @include('flash::message')
            <div class="card-header d-flex justify-content-between align-items-center">
                <h1>Categorias</h1>
                <a class="btn btn-outline-primary waves-effect pull-right"
                    style="margin-top: -10px;margin-bottom: 5px" href="{{ route('categoria.create') }}">Crear</a>
            </div>
            <div class="card-body">
                @include('categoria.table')
            </div>
        </div>
    </div>
       
    </div>  
</div>
@endsection