<div class="row">


	<div class="col-md-12">
		<div class="panel panel-filled">
			<div class="panel-heading">
				<div class="panel-tools " >
					<a class="panel-toggle"><i class="fa fa-chevron-up"></i></a> <a
						class="panel-close"><i class="fa fa-times"></i></a>
				</div>
				Estados asociados
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
									<label>Buscar por:<input type="search" ng-model="filtroC"
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
										style="width: 150px;">#Estado</th>
									<th class="sorting" tabindex="0" aria-controls="tableExample2"
										rowspan="1" colspan="1"
										aria-label="Position: activate to sort column ascending"
										style="width: 150px;">Fecha</th>
									<th class="sorting" tabindex="0" aria-controls="tableExample2"
										rowspan="1" colspan="1"
										aria-label="Office: activate to sort column ascending"
										style="width: 150px;">Estado</th>
										<th class="sorting" tabindex="0" aria-controls="tableExample2"
										rowspan="1" colspan="1"
										aria-label="Office: activate to sort column ascending"
										style="width: 150px;">Descripción</th>
								
								</tr>
							</thead>
							<tbody>
								<tr role="row" class="odd" ng-repeat="estado in estados | filter:filtroC | startFrom:currentPageEstados*pageSize | limitTo:pageSize">
									<td>#[[ estado.id ]]</td>
									<td>[[ estado.created_at ]]</td>
									<td>[[ estado.estado ]]</td>
									<td>[[ estado.definicion ]]</td>
								</tr>
							</tbody>
						</table>
						<div class="row">
							<div class="col-sm-10">
								<div class="dataTables_info" id="tableExample2_info"
									role="status" aria-live="polite">Mostrando 1 entrada de {{}}</div>
							</div>
							<center>
							<div class="col-sm-12">
								<div class="dataTables_paginate paging_simple_numbers"
									id="tableExample2_paginate">
									<ul class="pagination">
										<button class="paginate_button previous" ng-disabled="currentPageEstados == 0" ng-click="currentPageEstados=currentPageEstados-1">
											Anterior
										</button>
										[[currentPageEstados+1]]/[[numberOfPages(estados)]]
										<button class="paginate_button next" ng-disabled="currentPageEstados >= estados.length/pageSize - 1" ng-click="currentPageEstados=currentPageEstados+1">
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