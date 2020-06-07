@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Creacion de Roles
    </h1>
</section>
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="box box-primary">

        <div class="box-body">
            <div class="row" style="display:flex; flex-direction:column; align-items:center;">
                <div class="col-sm-6">
                    {!! Form::open(['route' => 'roles.store']) !!}

                    @include('roles.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
