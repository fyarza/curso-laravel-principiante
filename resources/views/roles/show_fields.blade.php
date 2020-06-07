<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $role->id !!}</p>
</div>

<!-- Customername Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $role->name !!}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $role->description !!}</p>
</div>

<!-- Accountnumber Field -->
<div class="form-group">
    {!! Form::label('special', 'Special Access:') !!}
    <p>{!! $role->special !!}</p>
</div>


<h3>permission list</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($role->permissions as $permission)
	    <li>
	        <label>
	        {{ $permission->name }}
	        <em>({{ $permission->description }})</em>
	        </label>
	    </li>
	    @endforeach
    </ul>
</div>