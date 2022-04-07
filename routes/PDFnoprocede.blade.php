@extends('layouts.PDFwaranty')

@section('contenido')
<table width="100%" class="table table-bordered table-striped">
    <tbody>
      <tr>
        <td width="40%"  class="text-uppercase">
					
		<?php
$imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents(asset('/img/image001.jpeg')));
?>
					<img src="<?php echo $imagenBase64 ?>" alt="" width="200px">
					<small>
					<br/>RIF: J-08503766-7
					<br/>Dirección: Carrera 1 con calle 4. Zona Industrial II Barquisismeto, Estado Lara. Venezuela. 
	</small>



				</td>
        <td width="60%"  class="text-right font-weight-bold" style="vertical-align: top; text-align: right;">
        <b class="font-weight-bold">Barquisimeto, <?= date('d/m/Y',strtotime($reclamo->Analisis->created_at)) ?>

        </td>
      </tr>
    </tbody>
  </table>
  <b class="text-center text-uppercase font-weight-bold" style="text-align: center !important; display:block">
  Solicitud de Analisis de Garantía
  </b>
  <table width="100%" class="small" cellpadding="3">
		<thead>
			<tr style="text-align: left !important;">
				<th class="font-weight-bold text-uppercase">Estimado Cliente:</th>
			</tr>
		</thead>
		<tbody >
			<tr>
				<td style="text-align: justify;"> 
					<small>
					Siempre es grato saludarle. En esta oportunidad nos dirigimos a usted para manifestarle que en Covencaucho Industias S.A, apegados a nuestra política de Calidad, basados en los estándares internacionales del proceso de renovación de cauchos y el control minucioso de sus procesos internos, nos permitimos dar respuesta a la solicitud del análisis técnico del producto en el período de garantía.
					</small>
					
				</td>
			</tr>
		</tbody>
	</table>

	<table width="100%" class="small" cellpadding="3">
		<thead>
			<tr style="text-align: left !important;">
				<th colspan="2" class="font-weight-bold text-uppercase">Datos del Cliente</th>
			</tr>
		</thead>
		<tbody style="border: 1px solid black">
			<tr>
				<td>
					<b class="font-weight-bold">Cliente: {{$reclamo->nombre}}</b>
				</td>
				<td>
					<b class="font-weight-bold">RIF: {{$reclamo->rif}}</b>

            		<br/><b class="font-bold">Telf: {{$reclamo->telefono}}</b>
            

				</td>
			</tr>
		</tbody>
	</table>
	<br>
	<table width="100%" class="small" cellpadding="3">
		<thead>
			<tr style="text-align: left !important;">
				<th colspan="2" class="font-weight-bold text-uppercase">Datos del Distribuidor</th>
			</tr>
		</thead>
		<tbody style="border: 1px solid black">
			<tr>
				<td>
					<b class="font-weight-bold">Nombre: {{$reclamo->sucursal->descripcion}}</b>
					<br><b class="font-weight-bold">RIF: {{$reclamo->sucursal->rif}}</b>

				</td>
				<td>
					<b class="font-weight-bold">Dirección: {{$reclamo->sucursal->direccion}}</b>

				</td>
			</tr>
		</tbody>
	</table>
	<br>
	
	<table width="100%" class="small" cellpadding="3">
		<thead>
			<tr>
				<th class="font-weight-bold text-uppercase">Datos del Producto</th>
				<th class="font-weight-bold text-uppercase text-right font-italic">***{{$reclamo->InfoProductoAnalisis->getProducto->descripcion}}***</th>
			</tr>
		</thead>
		<tbody style="border: 1px solid black">

				<tr>
					<td>
						<b class="font-weight-bold">COD Producto: {{$reclamo->DocVenta->CodItem}}</b>
						<br><b class="font-weight-bold">Marca: {{$reclamo->InfoProductoAnalisis->marcaCaucho->descripcion}}</b>
						<br><b class="font-weight-bold">Medida: {{$reclamo->InfoProductoAnalisis->medidaCaucho->descripcion}}</b>
						<br><b class="font-weight-bold">Nro Boleta: {{$reclamo->InfoProductoAnalisis->boleta}}</b>
					</td>
					<td>
						<b class="font-weight-bold">Descripcion: {{$reclamo->DocVenta->descripcion}}</b>
						<br><b class="font-weight-bold">Modelo: {{$reclamo->InfoProductoAnalisis->modelCaucho->descripcion}}</b>
						<br>
						<br><b class="font-weight-bold">DOT: {{$reclamo->InfoProductoAnalisis->dotSerial}}</b>
					</td>
				</tr>
		</tbody>
	</table>
	<br>

	<table width="100%" class="small" cellpadding="3">
		<thead>
			<tr style="text-align: left !important;">
				<th colspan="2" class="font-weight-bold text-uppercase">Resultados de Análisis técnico</th>
			</tr>
		</thead>
		<tbody style="border: 1px solid black">
			<tr>
				<td>
					<b class="font-weight-bold">Análisis de la Garantía Nro:</b> {{$reclamo->codigoSucursal}}
					<br><b class="font-weight-bold">Huella (mm): {{$reclamo->Analisis->profundidadActual}}</b>
					<br><b class="font-weight-bold">Defecto: {{$reclamo->Analisis->rechazo->descripcion}}</b>
					<br>
					<br><b class="font-weight-bold">Posibles causas:
					<ul>
					@foreach($reclamo->Analisis->rechazo->ListCausa as $causa)
					<li>{{$causa['descripcion']}}</li>
                    @endforeach   
					 </b>
					 </ul>
					 <br><b class="font-weight-bold">Precaución: 
					<ul>
					@foreach($reclamo->Analisis->rechazo->ListRecomendacion as $recom)
					<li>{{$recom['descripcion']}}</li>
                    @endforeach
					</ul>
					 </b>
				</td>
				<td >
				    <b class="font-weight-bold">Decisión: No procede
					<br><b class="font-weight-bold">Vida útil (%): {{$reclamo->Analisis->porcentaje}}
					<br>
					<br>
					<br>

					<img src="<?php echo $reclamo->ImagenReclamo->imagen64 ?>" alt="" width="100px">
				</td>
			</tr>
		</tbody>
	</table>
	<br>

	<table width="100%" class="small" cellpadding="">
		<thead>
			<tr style="text-align: left !important;">
				<th class="font-weight-bold text-uppercase">Reconocimiento de la falla</th>
			</tr>
		</thead>
		<tbody >
			<tr>
				<td>
				<small>
				En base a la inspección realizada se determina que el defecto No es imputable a la materia prima o al proceso de renovación de Covencaucho Industrias S.A, por lo tanto la solicitud de garantía No Procede
				</small>
					
				</td>
			</tr>
		</tbody>
	</table>	


	<table width="100%" class="small" cellpadding="3">
		<thead>
			<tr style="text-align: left !important;">
				<th class="font-weight-bold text-uppercase">Recomendaciones para el cliente</th>
			</tr>
		</thead>
		<tbody >
			<tr>
				<td>
				<small>
				Con la finalidad de garantizar el manejo correcto de nuestros productos, y así obtener el rendimiento óptimo de los mismos, le sugerimos solicitar al departamento de 
					Asistencia técnica al cliente (ATC) una visita, para asesorar de forma gratuita a su personal.
					</small>

				</td>
			</tr>
		</tbody>
	</table>

	<br> 
	<small>
	Se despide atentamente,
	</small>


	<br> 
	<table width="100%" class="small" style="margin: 5px;" cellpadding="3">


		<tr>
			<td width="30%"></td>	
			<td style="border-top: 1px solid black" class="text-center">
			<small>
			P/Dpto Análisis técnico
	</small></td>
			<td width="30%"></td>	

		</tr>


	</table>




@endsection

