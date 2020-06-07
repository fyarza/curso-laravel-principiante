<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
        <tr>
            <td>{{$categoria->id}} </td>
            <td>{{$categoria->nombre}}</td>
            <td>{{$categoria->descripcion}}</td>
            <td class="btn-group">
            <a href="{{route('categoria.show',$categoria->id)}}" class="btn btn-outline-success waves-effect"><i class="fas fa-eye"></i></a>
            <a href="{{route('categoria.edit',$categoria->id)}}" class="btn btn-outline-info waves-effect"><i class="fas fa-pencil-alt"></i></a>
            <form method="POST" action="{{route('categoria.destroy', $categoria->id)}}" style="display: inline">
                    {{ csrf_field() }}{{ method_field('DELETE') }}
                    <button class="btn btn-outline-danger waves-effect" onclick="return confirm('Esta Seguro de Eliminar esta Configuración?')">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
               
            </td>
        </tr>      
        @endforeach
        
    </tbody>
</table>