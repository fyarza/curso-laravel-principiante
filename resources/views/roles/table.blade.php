<div class="table-responsive">
    <table class="table table-responsive datatable" id="example1">
        <thead>
            <tr>
                <th width="10px">ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Special Access</th>
                <th colspan="3">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>{{ $role->description }}</td>
                <td>{{ $role->special }}</td>
                <td>
                    @can('roles.show')
                    <a href="{{ route('roles.show', $role->id)}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                    @endcan
                    @can('roles.edit')
                    <a href="{{ route('roles.edit', $role->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                    @endcan
                    @can('roles.destroy')
                    <form method="POST" action="{{ route('roles.destroy', $role->id) }}" style="display: inline">
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
    {{ $roles->links() }}

</div>
@push('styles')
@include('layouts.datatables_css')

@endpush

@push('scriptsf')
@include('layouts.datatables_js')

<script>

</script>
@endpush
