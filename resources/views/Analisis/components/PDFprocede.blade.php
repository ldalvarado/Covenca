@extends('layouts.PDFwaranty')

@section('contenido')
<table width="100%" class="table table-bordered table-striped">
    <tbody>
      <tr>
        <td width="40%"  class="text-uppercase" >
					
		<?php
$imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents(asset('/img/image001.jpeg')));
?>
					<img src="<?php echo $imagenBase64 ?>" alt="" width="200px">
					<small style="font-size: 12px;">
					<br/>RIF: J-08503766-7
					<br/>Dirección: Carrera 1 con calle 4. Zona Industrial II Barquisismeto, Estado Lara. Venezuela. 


				</td>
        <td width="60%"  class="text-right font-weight-bold" style="vertical-align: top; text-align: right;">
        <b class="font-weight-bold">Barquisimeto, <?= date('d/m/Y',strtotime($reclamo->Analisis->created_at)) ?>

        </td>
      </tr>
    </tbody>
  </table>
  <p class="text-center text-uppercase font-weight-bold" style="text-align: center !important;text-transform: uppercase;font-size: 20px; font-weight:bold; margin:5;text-decoration: underline;">
  Respuesta a la solicitud de Analisis de Garantía
</p>
  <table width="100%" class="small" cellpadding="3">
		<thead>
			<tr style="text-align: left !important;">
				<th class="font-weight-bold text-uppercase"><b>Estimado Cliente:</b></th>
			</tr>
		</thead>
		<tbody >
			<tr>
				<td  style="text-align: justify;">
				<small style="font-size: 12px;">
						Siempre es grato saludarle. En esta oportunidad nos dirigimos a usted para manifestarle que en Covencaucho Industias S.A, apegados a nuestra política de Calidad, basados en los estándares internacionales del proceso de renovación de cauchos y el control minucioso de sus procesos internos, nos permitimos dar respuesta a la solicitud del análisis técnico del producto en el período de garantía.
				</small>
				
				</td>
			</tr>
		</tbody>
	</table>

	<table width="100%" class="small" cellpadding="3">
		<thead>
			<tr style="text-align: left !important;">
				<th colspan="2" class="font-weight-bold text-uppercase" style="text-transform: uppercase; text-align: left;">Datos del Cliente</th>
			</tr>
		</thead>
		<tbody style="border: 1px solid black">
			<tr>
				<td width="50%">
				<small style="font-size: 12px;">
					<b class="font-weight-bold">Cliente:</b> {{$reclamo->nombre}}
				</small>
				</td>
				<td width="50%">
				<small style="font-size: 12px;">
					<b class="font-weight-bold">RIF:</b> {{$reclamo->rif}}

            		<br/><b class="font-bold">Telf:</b> {{$reclamo->telefono}}
            
				</small>
				</td>
			</tr>
		</tbody>
	</table>
	<br>
	<table width="100%" class="small" cellpadding="3">
		<thead>
			<tr style="text-align: left !important;">
				<th colspan="2" class="font-weight-bold text-uppercase" style="text-transform: uppercase; text-align: left;">Datos del Distribuidor</th>
			</tr>
		</thead>
		<tbody style="border: 1px solid black">
			<tr>
				<td width="50%">
				<small style="font-size: 12px;">
					<b class="font-weight-bold">Nombre:</b> {{$reclamo->sucursal->descripcion}}
					<br><b class="font-weight-bold">RIF:</b> {{$reclamo->sucursal->rif}}
				</small>
				</td>
				<td width="50%">
				<small style="font-size: 12px;">
					<b class="font-weight-bold">Dirección:</b> {{$reclamo->sucursal->direccion}}
				</small>
				</td>
			</tr>
		</tbody>
	</table>
	<br>
	
	<table width="100%" class="small" cellpadding="3">
		<thead>
			<tr>
				<th class="font-weight-bold text-uppercase" style="text-transform: uppercase; text-align: left;">Datos del Producto</th>
				<th class="font-weight-bold text-uppercase text-right font-italic" style="text-transform: uppercase; text-align: right;">***{{$reclamo->InfoProductoAnalisis->getProducto->descripcion}}***</th>
			</tr>
		</thead>
		<tbody style="border: 1px solid black">

				<tr>
					
					<td width="50%" style="vertical-align: top;">
					<small style="font-size: 12px;">            
					<b class="font-weight-bold">Código del producto:</b> {{$reclamo->DocVenta->CodItem}}
					<br/><b class="font-weight-bold">Descripción:</b> {{$reclamo->DocVenta->descripcion}}
					
					<br/>
															@if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->dotSerial )
                                                            <b class="font-bold">Dot:</b> {{$reclamo->InfoProductoAnalisis->dotSerial}}
				                            				<br/>
                                                            @endif
															@if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->serial)
															
                                                            <b class="font-bold">Serial/Lote vulc:</b> {{$reclamo->InfoProductoAnalisis->serial}}
				                            				<br/>
                                                            @endif

                    					
					@if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->boleta)
                                                            <b class="font-bold">Boleta:</b> {{$reclamo->InfoProductoAnalisis->boleta}}
				                            				<br/>
                                                            @endif



					</small>


					</td>
					<td width="50%" style="vertical-align: top;">
					<small style="font-size: 12px;">
					@if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->medida )
					<b class="font-bold">Medida:</b> {{$reclamo->InfoProductoAnalisis->medidaCaucho->descripcion}}
				                            				<br/>
                                                            @endif
                                                            @if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->marca)
                                                            <b class="font-bold">Marca:</b> {{$reclamo->InfoProductoAnalisis->marcaCaucho->descripcion}}
				                            				<br/>

                                                            @endif
                                                            @if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->modelo )
                                                            <b class="font-bold">Modelo:</b> {{$reclamo->InfoProductoAnalisis->modelCaucho->descripcion}}
				                            				<br/>
                                                            @endif
															@if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->diseno )
                                                            <b class="font-bold">Diseño:</b> {{$reclamo->InfoProductoAnalisis->Diseno->descripcion}}
				                            				<br/>
                                                            @endif
                                                            @if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->profundidad)
                                                            <b class="font-bold">Profundidad:</b> {{$reclamo->InfoProductoAnalisis->profundidad}}
				                            				<br/>
                                                            @endif

                                                            @if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->valvula )
                                                            <b class="font-bold">Valvula:</b> {{$reclamo->InfoProductoAnalisis->valvula}}
				                            				<br/>
                                                            @endif

                                                            

                                                            
                                                            @if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->lote_producto )
                                                            <b class="font-bold">Lote del producto:</b> {{$reclamo->InfoProductoAnalisis->loteProducto}}
				                            				<br/>
                                                            @endif
                                                            
                                                            @if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->pais )
                                                            <b class="font-bold">País:</b> {{$reclamo->InfoProductoAnalisis->idPais}}
				                            				<br/>
                                                            @endif

					</small>

					</td>
				</tr>
		</tbody>
	</table>
	<br>

	<table width="100%" class="small" cellpadding="3">
		<thead>
			<tr style="text-align: left !important;">
				<th colspan="2" class="font-weight-bold text-uppercase" style="text-transform: uppercase; text-align: left;">Resultados de Análisis técnico</th>
			</tr>
		</thead>
		<tbody style="border: 1px solid black">
			<tr>
				<td width="50%" style="vertical-align: top;">
				<small style="font-size: 12px;">
					<b class="font-weight-bold">Garantía Nro:</b> {{$reclamo->codigoSucursal}}

					@if($reclamo->Analisis->profundidadActual != null) <br><b class="font-weight-bold">Huella (mm):</b> {{$reclamo->Analisis->profundidadActual}} @endif
					@if($reclamo->InfoProductoAnalisis->Diseno != null) <br><b class="font-bold">Diseño:</b> {{$reclamo->InfoProductoAnalisis->Diseno->descripcion}} @endif
					<br>
					<br><b class="font-weight-bold">Defecto:</b> {{$reclamo->Analisis->rechazo->descripcion}}
					<br>
					<br><b class="font-weight-bold">Posibles causas:</b>
					<ul>
					@foreach($reclamo->Analisis->rechazo->ListCausa as $causa)
					<li>{{$causa['descripcion']}}</li>
                    @endforeach   
					 
					 </ul>
				</small>
				</td>
				<td  width="50%" style="vertical-align: top;">
					<section style="position: relative; display:flex;">
					<small style="font-size: 12px;">
				@if ($reclamo->ImagenReclamo != null)
					<div  style="vertical-align: top; text-align: right; position: absotute">
						<?php  echo "<img src='data:image/png;base64,".base64_encode($reclamo->ImagenReclamo->imagen64)."'  style='text-align: center !important; margin:0px' alt='' width='100px'>"?>
					</div>
					
					@endif
					<div style="position: absotute;vertical-align: top; ">
								    <b class="font-weight-bold">Decisión:</b>  <small style="text-transform: uppercase;text-decoration: underline;">PROCEDE</small>
					<br><b class="font-weight-bold">Vida útil (%):</b> {{$reclamo->Analisis->porcentaje}}
					 
				</div>
					</small>
					</section>



					<small style="font-size: 12px;">

					<b class="font-weight-bold">Prevención: </b>
					<ul>
					@foreach($reclamo->Analisis->rechazo->ListRecomendacion as $recom)
					<li>{{$recom['descripcion']}}</li>
                    @endforeach
					</ul>

					</small>
   
				</td>
			</tr>
		</tbody>
	</table>
	<br>

	<table width="100%" class="small" cellpadding="3">
		<thead>
			<tr style="text-align: left !important;">
				<th class="font-weight-bold text-uppercase" style="text-transform: uppercase; text-align: left;">Reconocimiento de la falla</th>
			</tr>
		</thead>
		<tbody >
			<tr>
				<td>
					<small style="font-size: 12px;">
						En base a la inspección realizada se determina que el defecto es imputable a la materia prima o al proceso de renovación de Covencaucho Industrias S.A, por lo tanto la solicitud de garantía Procede
					</small>
				
				</td>
			</tr>
		</tbody>
	</table>

	<p>
		
	<small style="font-size: 12px;">
	Se despide atentamente,
	</small>
	</p> 

	</td>

	<table width="100%" class="small" style="margin: 40px;" cellpadding="3">


		<tr>
			<td width="30%"></td>	
			<td style="border-top: 1px solid black; text-align:center" class="text-center">
			<small style="font-size: 12px;">
			P/Dpto Análisis técnico
			</small>
			</td>


			<td width="30%"></td>	

		</tr>


	</table>




@endsection

