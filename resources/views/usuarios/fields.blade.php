<div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
    <input type="text" class="form-control" name="name" value="{{ old('name',$user->name) }}" placeholder="Full Name">
    <span class="fa fa-user form-control-feedback"></span>
    @if ($errors->has('name'))
    <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif
</div>

<div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
    <input type="email" class="form-control" name="email" value="{{ old('email',$user->email) }}" placeholder="Email">
    <span class="fa fa-envelope form-control-feedback"></span>

    @if ($errors->has('email'))
    <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
</div>

<div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
    <input type="password" class="form-control" name="password" placeholder="Password">
    <span class="fa fa-key form-control-feedback"></span>

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
    <span class="fa fa-lock form-control-feedback"></span>

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
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12" >
    {!! Form::submit('Save', ['class' => 'btn btn-success','id' =>'btnGuardar']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-danger">Cancel</a>
</div>






