<div class="form-group has-feedback{{ $errors->has('nombre') ? ' has-error' : '' }}">
	{{ Form::label('nombre', 'Nombre') }}
	{{ Form::text('nombre', old('nombre'), ['class' => 'form-control']) }}
    @if ($errors->has('nombre'))
    <span class="help-block">
        <strong>{{ $errors->first('nombre') }}</strong>
    </span>
    @endif
</div>

<div class="form-group has-feedback{{ $errors->has('descripcion') ? ' has-error' : '' }}">
	{{ Form::label('descripcion', 'Descripcion') }}
	{{ Form::text('descripcion', old('descripcion'), ['class' => 'form-control']) }}
    @if ($errors->has('descripcion'))
    <span class="help-block">
        <strong>{{ $errors->first('descripcion') }}</strong>
    </span>
    @endif
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-raised btn-success']) }}
    <a href="{!! route('categoria.index') !!}" class="btn btn-raised btn-danger">Regresar</a>
</div>