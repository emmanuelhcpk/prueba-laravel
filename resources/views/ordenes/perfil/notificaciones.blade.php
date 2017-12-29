<div class="row">


	<div class="col-md-12">
		<div class="panel panel-filled">
			<div class="panel-heading">
				<div class="panel-tools " >
					<a class="panel-toggle"><i class="fa fa-chevron-up"></i></a> <a
						class="panel-close"><i class="fa fa-times"></i></a>
				</div>
				Notificaciones
			</div>
			<div class="panel-body " >
				<p></p>
				<div class="table-responsive">

					<div id="tableExample2_wrapper"
						class="dataTables_wrapper form-inline dt-bootstrap no-footer ">
						<div class="row">
							<div class="col-sm-4">
								<div class="dataTables_length" id="tableExample2_length">
									<label>Mostrar <select name="tableExample2_length"
										aria-controls="tableExample2" class="form-control input-sm"><option
												value="6">6</option>
											<option value="25">25</option>
											<option value="50">50</option>
											<option value="-1">All</option></select> 
									</label>
								</div>
							</div>
							<div class="col-sm-4">
								<div id="tableExample2_filter" class="dataTables_filter">
									<label>Buscar por:<input type="search" ng-model="filtroN"
										class="form-control input-sm" placeholder=""
										aria-controls="tableExample2"></label>
								</div>
							</div>
						</div>
						<table id="tableExample2"
							class="table table-striped table-hover dataTable no-footer"
							role="grid" aria-describedby="tableExample2_info">
							<thead>
								<tr role="row">
									<th class="sorting_asc" tabindex="0"
										aria-controls="tableExample2" rowspan="1" colspan="1"
										aria-sort="ascending"
										aria-label="Name: activate to sort column descending"
										style="width: 150px;">#Referencia</th>
									<th class="sorting" tabindex="0" aria-controls="tableExample2"
										rowspan="1" colspan="1"
										aria-label="Position: activate to sort column ascending"
										style="width: 150px;">Fecha</th>
									<th class="sorting" tabindex="0" aria-controls="tableExample2"
										rowspan="1" colspan="1"
										aria-label="Office: activate to sort column ascending"
										style="width: 150px;">Asunto</th>
									<th class="sorting" tabindex="0" aria-controls="tableExample2"
										rowspan="1" colspan="1"
										aria-label="Office: activate to sort column ascending"
										style="width: 150px;">Información</th>
										
								
								</tr>
							</thead>
							<tbody>
								<tr role="row" class="odd" ng-repeat="notificacion in notificaciones | filter:filtroN | startFrom:currentPageNotificaciones*pageSize | limitTo:pageSize">
									<td>#[[ notificacion.id ]]</td>
									<td>[[ notificacion.created_at]]</td>
									<td>[[ notificacion.asunto]]</td>
									<td>[[ notificacion.mensaje.substring(0,35)]]</td>
								</tr>
							</tbody>
						</table>
						<div class="row">
							<div class="col-sm-10">
								<div class="dataTables_info" id="tableExample2_info"
									role="status" aria-live="polite">Mostrando 1 entrada de </div>
							</div>
							<center>
							<div class="col-sm-12">
								<div class="dataTables_paginate paging_simple_numbers"
									id="tableExample2_paginate">
									<ul class="pagination">

										<button class="paginate_button previous" ng-disabled="currentPageNotificaciones == 0" ng-click="currentPageNotificaciones=currentPageNotificaciones-1">
											Anterior
										</button>
										[[currentPageNotificaciones+1]]/[[numberOfPages(notificaciones)]]
										<button class="paginate_button next" ng-disabled="currentPageNotificaciones >= notificaciones.length/pageSize - 1" ng-click="currentPageNotificaciones=currentPageNotificaciones+1">
											Siguiente
										</button>
									</ul>
								</div>
							</div>
							</center>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>