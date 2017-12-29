
<div class="col-md-12">
	<div class="panel panel-filled">

		<div class="panel-body">

			<div class="row">
				<div class="col-md-4">

					<div class="media">
						<h2 class="m-t-xs m-b-none">{!! $orden->nombre_usuario !!}</h2>
						<small> {!! $orden->correo_electronico !!} | +57 {!! $orden->numero_celular!!} <br> <span

							class="label label-success pull-left">{{ $orden->id }}</span>
						</small>

					</div>

				</div>
				<div class="col-md-4">
					<table class="table small m-t-sm">
						<tbody>
							<tr>
								<td><strong class="c-white">{!! $orden->valor_total !!}</strong> Valor total </td>
								<td><strong class="c-white">{!! $orden->valor_comision !!}</strong> Valor Comisión </td>
								<td><strong class="c-white">{!! $orden->valor_asumido_usuario !!}</strong> Valor Asumido Usuario </td>
								<td><strong class="c-white">{!! $orden->valor_asumido_coins !!}</strong> Valor Asumido coins </td>

							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-3 m-t-sm">
					<span class="c-white"> Contacto directo </span> <br> <small> Enviar
						un email por el panel de administración </small>
					<div class="btn-group m-t-sm">
						<a href="mailto:{!! $orden->correo_electronico !!}" class="btn btn-default btn-sm"><i
							class="fa fa-envelope"></i> Enviar email ahora!</a> <a href="#"
							class="btn btn-default btn-sm"><i class="fa fa-check"></i> LLamar
							al +57 {!! $orden->numero_celular !!}</a>
					</div>
				</div>


			</div>
		</div>
	</div>
</div>

