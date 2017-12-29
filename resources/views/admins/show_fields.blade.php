<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $usuario->id !!}</p>
</div>

<!-- Usuario Field -->
<div class="form-group">
    {!! Form::label('Usuario', 'Nombre:') !!}
    <p>{!! $usuario->primer_nombre !!}</p>
</div>
<div class="form-group">
    {!! Form::label('name', 'Apellidos') !!}
    <p>{!! $usuario->primer_apellido !!}</p>
</div>

<div class="form-group">
    {!! Form::label('email', ' Email:') !!}
    <p>{!! $usuario->email !!}</p>
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Telefono:') !!}
    <p>{!! $usuario->telefono !!}</p>
</div>

<div class="form-group">
    {!! Form::label('created_at', 'Fecha creación:') !!}
    <p>{!! $usuario->created_at !!}</p>
</div>


