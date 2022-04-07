@extends('layouts.PDFwaranty')

@section('contenido')
<table width="100%" class="table table-bordered table-striped">
    <tbody>
      <tr>
        <td width="50%" class="text-uppercase">
					<b class="font-weight-bold text-uppercase" style="text-transform: uppercase;font-size: 20px">{{$reclamo->sucursal->descripcion}}</b>
					<small style="font-size: 12px;">
					<br/><b>RIF:</b> {{$reclamo->sucursal->rif}}
					<br/><b>Dirección:</b> {{$reclamo->sucursal->direccion}}

	</small>


				</td>
        <td  width="50%" class="text-right font-weight-bold" style="vertical-align: top; text-align: right;">
		<small style="font-size: 12px;">
        	<b class="font-weight-bold">Solicitud de Garantía Nro:</b> {{$reclamo->codigoSucursal}}
          	<br><b>Fecha:</b> <?= date('d/m/Y',strtotime($reclamo->created_at)) ?>
		</small>
        </td>
      </tr>
    </tbody>
  </table>


	<p class="text-center text-uppercase font-weight-bold" style="text-align: center !important;text-transform: uppercase;font-size: 20px; font-weight:bold; margin:5;text-decoration: underline;">Solicitud de Garantía</p>

	<table width="100%" class="small" cellpadding="3">
		<thead>
			<tr style="text-align: left !important;">
				<th colspan="2" class="font-weight-bold text-uppercase" style="text-transform: uppercase;">Datos del Cliente</th>
			</tr>
		</thead>
		<tbody style="border: 1px solid black">
			<tr>
				<td width="50%">
				<small style="font-size: 12px;">
					<b class="font-weight-bold">Cliente:</b>  {{$reclamo->nombre}}
					<br><b class="font-weight-bold">RIF:</b> {{$reclamo->rif}}

				</small>

				</td>
				<td width="50%">
				<small style="font-size: 12px;">            
					<b class="font-bold">Telf: </b> {{$reclamo->telefono}}
					<br><b class="font-weight-bold">Dirección:</b> {{$reclamo->direccion}}
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
                                                            @if($reclamo->InfoProductoAnalisis->getProducto->id == 5)
                                                                @if($reclamo->InfoProductoAnalisis->marcaProtector)
                                                                <b class="font-bold">Marca:</b> {{$reclamo->InfoProductoAnalisis->marcaProtector->descripcion}}
                                                                <br/>
                                                                @endif
                                                            @elseif($reclamo->InfoProductoAnalisis->getProducto->id == 3)
                                                                @if($reclamo->InfoProductoAnalisis->marcaCamara)
                                                                <b class="font-bold">Marca:</b> {{$reclamo->InfoProductoAnalisis->marcaCamara->descripcion}}
                                                                <br/>
                                                                @endif
                                                            @else 
                                                                @if($reclamo->InfoProductoAnalisis->marcaCaucho)

                                                                <b class="font-bold">Marca:</b> {{$reclamo->InfoProductoAnalisis->marcaCaucho->descripcion}}
                                                                <br/>
                                                                @endif
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
			<tr>
				<th colspan="2" class="font-weight-bold text-uppercase" style="text-transform: uppercase; text-align: left;">Datos de Facturas</th>
			</tr>
		</thead>
		<tbody  style="border: 1px solid black">
			<tr>
				<td>
					<small style="font-size: 12px;">
					<b class="font-weight-bold">Documento de Venta:</b> {{$reclamo->factura}}
					<br><b class="font-weight-bold">Fecha: </b> <?= date('d/m/Y',strtotime($reclamo->fechaFactura)) ?>
					<br><b class="font-weight-bold">Precio de Venta:</b> {{$reclamo->DocVenta->Precio}}
					<br><b class="font-weight-bold">IVA:</b> {{$reclamo->DocVenta->MtoTax}}
					</small>

				</td>
				<td >
					<small style="font-size: 12px;">
					<b class="font-weight-bold">Documento de Compra:</b> {{$reclamo->ReclamoCompra->NumeroD}}
					<br><b class="font-weight-bold">Fecha: </b> <?= date('d/m/Y',strtotime($reclamo->ReclamoCompra->Fecha)) ?>

					</small>
				</td>
				<!--
				<td style="border: 1px solid black">
					<b class="font-weight-bold">Factura de Compra: 
					<br><b class="font-weight-bold">Fecha: 
				</td>
-->
			</tr>
		</tbody>
	</table>
	<br>

	<table width="100%" class="small" cellpadding="3">
		<thead>
			<tr>
				<th class="font-weight-bold text-uppercase" style="text-transform: uppercase; text-align: left;">Descripcion de la solicitud de garantía</th>
			</tr>
		</thead>
		<tbody style="border: 1px solid black;">
			<tr>
				<td>
					<small style="font-size: 12px;">
					<b class="font-weight-bold">{{$reclamo->observacion}}</b>
					</small>
				</td>
			</tr>
		</tbody>
	</table>
	<small style="font-size: 12px;">
	<p class="text-muted font-italic small mt-3 p-3" style="font-style: italic; font-weight:bolder; text-align: left;">
		El Cliente autoriza a Covencaucho Industrias, S.A. para disponer del producto
		a su conveniencia técnica con el objetivo de determinar la naturaleza de la garantía.
	</p>
	</small>

	<br>	<br>  
	<table width="100%" class="small" style="margin: 10px;" cellpadding="3">
		<tr>
			<td width="5%"></td>	
			<td style="border-top: 1px solid black; text-align: center;" class="text-center">Elaborado Por</td>
			<td width="10%"></td>	
			<td style="border-top: 1px solid black; text-align: center;" class="text-center">Firma del Cliente</td>
			<td width="5%"></td>	
		</tr>
	</table>


  <table width="100%" class="small" cellpadding="3">
    <tbody class="small">
      <tr>
        <td width="50%" style="border: 1px dashed black">
		<small style="font-size: 12px;">

				
					<b>Garantía Nro:{{$reclamo->codigoSucursal}}
					
					<br>
					Fecha: <?= date('d/m/Y',strtotime($reclamo->created_at)) ?>
						<br>Cliente:  {{$reclamo->nombre}}
				<br>Cod. Producto: {{$reclamo->DocVenta->CodItem}}
				<br>Producto: {{$reclamo->DocVenta->descripcion}}
				<br>
					
				</b>
          
		</small>

				</td>
        <td width="50%" style="border: 1px dashed black;text-align: center !important;" class="font-weight-bold">
        <small style="font-size: 12px;">
          <img src="data:image/png;base64,{{!! DNS1D::getBarcodePNG($reclamo->codigoSucursal, 'C39') !!}}" alt="barcode" style="width: 300px;"  />
          <br>{{$reclamo->codigoSucursal}}
		</small>

        </td>
      </tr>

    </tbody>
  </table>


@endsection

