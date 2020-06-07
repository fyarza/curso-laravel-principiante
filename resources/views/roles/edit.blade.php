@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Role Update
    </h1>
</section>
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="box box-primary">
        <div class="box-body">
            <div class="row" style="display:flex; flex-direction:column; align-items:center;">
                <div class="col-sm-8">
                    {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'patch']) !!}
                        @include('roles.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection