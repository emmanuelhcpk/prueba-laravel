<!-- Cotizante Email Field -->

<!-- Cotizante Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cotizante_name', 'Primer Nombre') !!}
    {!! Form::text('primer_nombre', null, ['class' => 'form-control','required'=>'true']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('cotizante_name', 'Segundo Nombre') !!}
    {!! Form::text('segundo_nombre', null, ['class' => 'form-control','required'=>'true']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('cotizante_name', 'Primer Apellido') !!}
    {!! Form::text('primer_apellido', null, ['class' => 'form-control','required'=>'true','required'=>'true']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('cotizante_name', 'Segundo Apellido') !!}
    {!! Form::text('segundo_apellido', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => 'form-control','required'=>'true']) !!}
</div>

<!-- Cotizante Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Password') !!}
    {!! Form::password('password',['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">

    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('gestion-admins.index') !!}" class="btn btn-default">Cancelar</a>
</div>
