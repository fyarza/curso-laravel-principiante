



@can('users.index')
<li class="list-group-item {{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fas fa-users"></i><span> Users</span></a>
</li>
@endcan

@can('roles.index')
<li class="list-group-item {{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fas fa-user"></i><span> Roles</span></a>
</li>
@endcan













