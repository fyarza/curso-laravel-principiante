@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @include('layouts.errors')
                    <h1>Editar Categoria</h1>
                </div>
                <div class="card-body">
                    {!! Form::model($categorium, ['route' => ['categoria.update', $categorium], 'method' => 'patch']) !!}
                        @include('categoria.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
