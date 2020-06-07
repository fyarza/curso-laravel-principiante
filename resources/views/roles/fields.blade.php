{{--<div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
    <input type="text" class="form-control" name="name" value="{{ old('name',$user->name) }}" placeholder="Full Name">
    <span class="glyphicon glyphicon-user form-control-feedback"></span>
    @if ($errors->has('name'))
    <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif
</div> 

<div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
    <input type="email" class="form-control" name="email" value="{{ old('email',$user->email) }}" placeholder="Email">
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

    @if ($errors->has('email'))
    <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
</div>

<div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
    <input type="password" class="form-control" name="password" placeholder="Password">
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

    @if ($errors->has('password'))
    <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
    @elseif ($user->name != '')
    <span class="help-block">
        <small style="color:blue; margin-left: 1rem;">leave blank if you do not want to change the password</small>
    </span>
    @endif
</div>

<div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

    @if ($errors->has('password_confirmation'))
    <span class="help-block">
        <strong>{{ $errors->first('password_confirmation') }}</strong>
    </span>
    @endif
</div>


 <h3>Lista de Roles</h3>
<div class="form-group">
    <ul class="list-unstyled">
    @foreach ($roles as $role)
    <li>
    <label>
        {{Form::checkbox('roles[]',$role->id,null)}}
        {{$role->name}}
        <em>({{$role->description ?: 'N/A'}})</em>
    </label>
    </li>
    @endforeach
    </ul>
</div> --}}

<!-- Submit Field -->
{{--
<div class="form-group col-sm-12" >
    {!! Form::submit('Save', ['class' => 'btn btn-success','id' =>'btnGuardar']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-danger">Cancel</a>
</div>
--}}

<!-- Vista de Roles -->
<div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}" >
	{{ Form::label('name', 'Nombre de la etiqueta') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
    @if ($errors->has('name'))
    <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif
</div>
<div class="form-group has-feedback{{ $errors->has('slug') ? ' has-error' : '' }}">
	{{ Form::label('slug', 'URL Amigable') }}
	{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
    @if ($errors->has('slug'))
    <span class="help-block">
        <strong>{{ $errors->first('slug') }}</strong>
    </span>
    @endif
</div>
<div class="form-group has-feedback{{ $errors->has('description') ? ' has-error' : '' }}">
	{{ Form::label('description', 'Descripción') }}
	{{ Form::textarea('description', null, ['class' => 'form-control']) }}
    @if ($errors->has('description'))
    <span class="help-block">
        <strong>{{ $errors->first('description') }}</strong>
    </span>
    @endif
</div>
<hr>
<h3>Permiso especial</h3>
<div class="form-group">
 	<label>{{ Form::radio('special', 'all-access') }} Acceso total</label>
 	<label>{{ Form::radio('special', 'no-access') }} Ningún acceso</label>
</div>
<hr>
<h3>Lista de permisos</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($permissions as $permission)
	    <li>
	        <label>
	        {{ Form::checkbox('permissions[]', $permission->id, null) }}
	        {{ $permission->name }}
	        <em>({{ $permission->description }})</em>
	        </label>
	    </li>
	    @endforeach
    </ul>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm  btn-success']) }}
    <a href="{!! route('roles.index') !!}" class="btn btn-sm btn-danger">Cancel</a>
</div>






