
<table class="table table-responsive" id="users-table">
    <thead>
    <th>Id</th>
    <th>Referencia</th>
    <th>Nombre</th>
    <th>Email</th>
    <th>Telefono</th>
    <th>Valor Total</th>
    <th>Valor Comisión</th>
    <th>Valor Asumido Usuario</th>
    <th>Valor Asumido Coins</th>
    <th>Estado</th>
    <th>Creado</th>
    <th>Actualizado</th>
    <th>Opciones</th>
    </thead>
    <tbody>
    @foreach($ordenes as $orden)
        <tr>
            <td>{!! $orden->id !!}</td>
            <td>{!! $orden->identificador !!}</td>
            <td>{!! $orden->nombre_usuario !!}</td>
            <td>{!! $orden->correo_electronico !!}</td>
            <td>{!! $orden->numero_celular !!}</td>
            <td>{!! $orden->valor_total !!}</td>
            <td>{!! $orden->valor_comision !!}</td>
            <td>{!! $orden->valor_asumido_usuario !!}</td>
            <td>{!! $orden->valor_asumido_coins !!}</td>
            <td>{!! $orden->estado !!}</td>
            <td>{!! $orden->created_at !!}</td>
            <td>{!! $orden->updated_at !!}</td>
            <td>
                <a href="{!! route('ordenes.show', [$orden->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
            </td>

        </tr>
    @endforeach
    </tbody>
</table>

{!! $ordenes->links() !!}