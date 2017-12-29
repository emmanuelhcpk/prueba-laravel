<table class="table table-responsive" id="users-table">
    <thead>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Creado</th>
        <th>Actualizado</th>
        <th>Opciones</th>
        <th>Activacion</th>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr>
            <td>{!! $usuario->primer_nombre !!}</td>
            <td>{!! $usuario->email !!}</td>
            <td>{!! $usuario->numero_telefono !!}</td>
            <td>{!! $usuario->created_at !!}</td>
            <td>{!! $usuario->updated_at !!}</td>
            <td>
               {!! Form::open(['route' => ['gestion-admins.destroy', $usuario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('gestion-admins.show', [$usuario->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('gestion-admins.edit', [$usuario->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
{{--{ Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                </div>
                {!! Form::close() !!}
            </td>
            <td>
                {!! Form::open(['route' => ['gestion-admins.update', $usuario->id], 'method' => 'put']) !!}
                @if($usuario->activo)
                    <input type="hidden" name="activo" value="0">
                    <button class="btn btn-danger">Desactivar</button>
                @else
                    <input type="hidden" name="activo" value="1">
                    <button class="btn btn-success">Activar</button>
                @endif
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>