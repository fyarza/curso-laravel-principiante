<div class="table-responsive">
    <table class="table table-responsive datatable" id="example1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th colspan="3">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td width="20%">{{ $user->getRoleName() }}</td>
                <td>
                    @can('users.show')
                    <a href="{{ route('users.show', $user)}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                    @endcan
                    @can('users.edit')
                    <a href="{{ route('users.edit', $user)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                    @endcan
                    @can('users.destroy')
                    <form method="POST" action="{{ route('users.destroy', $user) }}" style="display: inline">
                        {{ csrf_field() }} {{ method_field('DELETE') }}
                        <button class="btn btn-xs btn-danger" onclick="return confirm('You are sure to Remove this User?')">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                    @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}

</div>
@push('styles')
@include('layouts.datatables_css')

@endpush

@push('scriptsf')
@include('layouts.datatables_js')

<script>

</script>
@endpush
