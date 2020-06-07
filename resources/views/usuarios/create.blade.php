@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
    User Registration
    </h1>
</section>
<div class="content">
    <!-- @include('adminlte-templates::common.errors') -->
    <div class="box box-primary">

        <div class="box-body">
            <div class="row" style="display:flex; flex-direction:column; align-items: center;">
            <div class="col-sm-6">

            {{ Form::open(['route' => 'users.store','id'=>'formulario','name'=>'formulario']) }}
                 @include('usuarios.fields')
             {!! Form::close() !!}
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.min.css">
@endpush
@push('scriptsf')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>

@endpush
