@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @include('layouts.errors')
                    <h1>Crear Nueva Categoria</h1>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'categoria.store']) !!}
                        @include('categoria.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
