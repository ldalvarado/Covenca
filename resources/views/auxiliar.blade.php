@extends('layouts.app')

@section('contenido')

<p>{{ $medidas[0]['Descrip'] }}</p>

<style type="text/css">
	.table th, .table td {
		border: none;
	}
</style>

<!--en el codeigniter tiene una arreglo de "dia"grama por producto, de acuerdo a si es caucho industrial, 
u otro, por cada elemento pinta un caucho en un col-md-4 con un check que si es el primer elemento del arreglo
le aplica el stilo checked-->
<div class="form-layout form-layout-1">
	<div class="row">
		<div class="col-6">
			<fieldset class="alert alert-light border border-dark mg-10">
				<legend>Diagrama</legend>
				<div class="form-row mb-3">
					<div class="col-md-4">
						<label class="btn btn-block btn-light font-weight-bold">
							<input type="radio" name="diagram" id="diagram" value="42a" checked>
							<img id="tire" src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
							<span class="text">
								<u> 4x2(A) </u>
								<i class="ti-check"></i>
							</span>
						</label>
					</div>
					<div class="col-md-4">
						<label class="btn btn-block btn-light font-weight-bold">
							<input type="radio" name="diagram" id="diagram" value="42b">
							<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
							<span class="text">
								<u> 4x2(B) </u>
								<i class="ti-check"></i>
							</span>
						</label>
					</div>
					<div class="col-md-4">
						<label class="btn btn-block btn-light font-weight-bold">
							<input type="radio" name="diagram" id="diagram" value="62a">
							<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
							<span class="text">
								<u> 6x2(A) </u>
								<i class="ti-check"></i>
							</span>
						</label>
					</div>
				</div>
				<div class="form-row mb-3">
					<div class="col-md-4">
						<label class="btn btn-block btn-light font-weight-bold">
							<input type="radio" name="diagram" id="diagram" value="62b">
							<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
							<span class="text">
								<u> 6x2(B) </u>
								<i class="ti-check"></i>
							</span>
						</label>
					</div>
					<div class="col-md-4">
						<label class="btn btn-block btn-light font-weight-bold">
							<input type="radio" name="diagram" id="diagram" value="64">
							<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
							<span class="text">
								<u> 6x4 </u>
								<i class="ti-check"></i>
							</span>
						</label>
					</div>
					<div class="col-md-4">
						<label class="btn btn-block btn-light font-weight-bold">
							<input type="radio" name="diagram" id="diagram" value="20">
							<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
							<span class="text">
								<u> 2x0 </u>
								<i class="ti-check"></i>
							</span>
						</label>
					</div>
				</div>
				<div class="form-row mb-3">
					<div class="col-md-4">
						<label class="btn btn-block btn-light font-weight-bold">
							<input type="radio" name="diagram" id="diagram" value="40">
							<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
							<span class="text">
								<u> 4x0 </u>
								<i class="ti-check"></i>
							</span>
						</label>
					</div>
					<div class="col-md-4">
						<label class="btn btn-block btn-light font-weight-bold">
							<input type="radio" name="diagram" id="diagram" value="60">
							<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
							<span class="text">
								<u> 6x0 </u>
								<i class="ti-check"></i>
							</span>
						</label>
					</div>
					<div class="col-md-4">
						<label class="btn btn-block btn-light font-weight-bold">
							<input type="radio" name="diagram" id="diagram" value="80">
							<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
							<span class="text">
								<u> 8x0 </u>
								<i class="ti-check"></i>
							</span>
						</label>
					</div>
				</div>
			</fieldset>
		</div>
		@php( $diagram='62a' )

		<div class="col-6">
			<fieldset class="alert alert-light border border-dark mg-10">
				<legend>Diagrama {{$diagram}}</legend>
				@switch($diagram)
					@case('42a')
						<!--mostrar diagrama-->
						<div class="container" id="dia42a">
							<table id="42a" class="table table-sm">
								<thead>
									<tr>
										<th colspan="9">Diagrama 4x2 (A)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle"></td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="42b-01">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="42b-02">
											</label>
										</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle"></td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="6" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle"></td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="42b-03">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="42b-04">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle"></td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
								</tbody>
							</table>
						</div>
						@break

					@case('42b')
						<div class="container" id="dia42b">
							<table id="42b" class="table table-sm">
								<thead>
									<tr>
										<th colspan="9">Diagrama 4x2 (B)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle"></td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="42b-01">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="42b-02">
											</label>
										</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle"></td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="6" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="42b-03">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="42b-04">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="42b-05">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="42b-06">
											</label>
										</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
								</tbody>
							</table>
						</div>
						@break

					@case('62a')
						<!--mostrar diagrama-->
						<div class="container" id="dia62a">
							<table id="62a" class="table table-sm">
								<thead>
									<tr>
										<th colspan="9">Diagrama 6x2 (A)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle"></td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="62a-01">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="62a-02">
											</label>
										</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle"></td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="62a-03">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="62a-04">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="62a-05">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="62a-06">
											</label>
										</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="2" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="62a-07">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="62a-08">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="62a-09">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="62a-10">
											</label>
										</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
								</tbody>
							</table>
						</div>
						@break

					@case('62b')
						<!--mostrar diagrama-->
						<div class="container" id="62b">
							<table id="62b" class="table table-sm">
								<thead>
									<tr>
										<th colspan="9">Diagrama 6x2 (B)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle"></td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="62b-01">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="62b-02">
											</label>
										</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle"></td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="62b-03">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle"></td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle"></td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="62b-04">
											</label>
										</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="2" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="62b-05">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="62b-06">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="62b-07">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="62b-08">
											</label>
										</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
								</tbody>
							</table>
						</div>
						@break

					@case('64')
						<!--mostrar diagrama-->
						<div class="container" id="dia64">
							<table id="64" class="table table-sm">
								<thead>
									<tr>
										<th colspan="9">Diagrama 6x4</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle"></td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="64-01">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="64-02">
											</label>
										</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle"></td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="64-03">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="64-04">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="64-05">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="64-06">
											</label>
										</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="2" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="64-07">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="64-08">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="64-09">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="64-10">
											</label>
										</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
								</tbody>
							</table>
						</div>
						@break

					@case('20')
						<!--mostrar diagrama-->
						<div class="container" id="dia20">
							<table id="20" class="table table-sm">
								<thead>
									<tr>
										<th colspan="9">Diagrama 2x0</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="7" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="20-01">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="20-02">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="20-03">
											</label>
										</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="20-04">
											</label>
										</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
								</tbody>
							</table>
						</div>
						@break

					@case('40')
						<!--mostrar diagrama-->
						<div class="container" id="dia40">
							<table id="40" class="table table-sm">
								<thead>
									<tr>
										<th colspan="9">Diagrama 4x0</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="7" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="40-01">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="40-02">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="40-03">
											</label>
										</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="40-04">
											</label>
										</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="2" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="40-05">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="40-06">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="40-07">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="40-08">
											</label>
										</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
								</tbody>
							</table>
						</div>
						@break

					@case('60')
						<!--mostrar diagrama-->
						<div class="container" id="dia60">
							<table id="60" class="table table-sm">
								<thead>
									<tr>
										<th colspan="9">Diagrama 6x0</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="4" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="4" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="60-01">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="60-02">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="60-03">
											</label>
										</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="60-04">
											</label>
										</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="2" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="60-05">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="60-06">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="60-07">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="60-08">
											</label>
										</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="2" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="60-09">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="60-10">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="60-11">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="60-12">
											</label>
										</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
								</tbody>
							</table>
						</div>
						@break

					@case('80')
						<!--mostrar diagrama-->
						<div class="container" id="dia80">
							<table id="80" class="table table-sm">
								<thead>
									<tr>
										<th colspan="9">Diagrama 8x0</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="80-01">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="80-02">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="80-03">
											</label>
										</td>
										<td rowspan="3" width="15%" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="80-04">
											</label>
										</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="2" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="80-05">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="80-06">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="80-07">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="80-08">
											</label>
										</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="2" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="80-09">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="80-10">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="80-11">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="80-12">
											</label>
										</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="2" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
									<tr>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="80-13">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<input type="radio" name="position" autocomplete="off" value="80-14">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
											</label>
										</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td colspan="2" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="80-15">
											</label>
										</td>
										<td rowspan="3" class="p-0 bd-y-0 bd-x-0 bg-light align-middle">
											<label class="btn btn-link btn-light font-weight-bold p-0">
												<img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
												<input type="radio" name="position" autocomplete="off" value="80-16">
											</label>
										</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-secondary">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="5" class="bd-y-0 bd-x-0 bg-light">&nbsp;</td>
									</tr>
								</tbody>
							</table>
						</div>
						@break
				@endswitch
			</fieldset>
		</div>
	</div>
</div>

@endsection