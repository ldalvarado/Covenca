<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF de Guía</title>

    <link href="{{asset('/template/lib/datatables/dataTables.min.css')}}" rel="stylesheet">
</head>
<body>
  <table width="100%" class="table table-bordered table-striped">
    <tbody>
      <tr>
        <td class="text-uppercase" width="50%">
          <small style="font-size: 12px;">

					<b class="font-weight-bold" style="font-size: 20px;text-transform: uppercase;">{{$Guia->sucursalOrigen->descripcion}}</b>
          <br/>RIF: {{$Guia->sucursalOrigen->rif}}
          <br/><span style="text-transform: capitalize">{{$Guia->sucursalOrigen->direccion}}</span>
          <br/>
          <b class="font-weight-bold">Destino:</b>
          <br/><b class="font-weight-bold" style="">{{$Guia->sucursalDestino->descripcion}}</b>
          <br/>{{$Guia->sucursalDestino->rif}}
					<br/>{{$Guia->sucursalDestino->direccion}}
          <br/><b>Teléfono:</b> {{$Guia->sucursalOrigen->telefono}}
          </small>
				</td>
        <td width="50%" class="text-right font-weight-bold" style="vertical-align: top; text-align: right;">
        <b class="font-weight-bold">Guía de Garantías Nro:</b> {{$Guia->codigo}}
          <br><b>Fecha:</b>  <?= date('d/m/Y',strtotime($Guia->created_at)) ?> 
        </td>
      </tr>
    </tbody>
  </table>
<br>
	<table width="100%" class="table table-bordered table-striped" cellpadding="3">
		<thead>


			<tr>
      
      <th class="font-weight-bold text-uppercase" style="text-align: start;"><small style="font-size: 12px;">SOLICITUD</small></th>
				<th class="font-weight-bold text-uppercase" style="text-align: start;"><small style="font-size: 12px;"># DE GARANTÍA</small></th>


                <th class="font-weight-bold text-uppercase" style="text-align: start;"><small style="font-size: 12px;">FECHA DE SOLICITUD</small></th>
                <th class="font-weight-bold text-uppercase" style="text-align: start;"><small style="font-size: 12px;">CLIENTE</small></th>
                <th class="font-weight-bold text-uppercase" style="text-align: start;"><small style="font-size: 12px;">PRODUCTO</small></th>
			</tr>
		</thead>
		<tbody style="border: 1px solid black">
    @foreach($Guia->ListGuiaReclamo as $Gar)

<tr>
    <td><small style="font-size: 12px;"> {{$Gar->reclamo->InfoProductoSucursal->getProducto->descripcion}} </small></td>
    <td><small style="font-size: 12px;"> {{$Gar->reclamo->codigoSucursal}} </small></td>

    <td><small style="font-size: 12px;">  <?= date('d/m/Y',strtotime($Gar->reclamo->created_at)) ?> </small></td>
    <td><small style="font-size: 12px;"> {{$Gar->reclamo->nombre}} </small></td>
    <td><small style="font-size: 12px;"> @if($Gar->reclamo->DocVenta != null) {{$Gar->reclamo->DocVenta->descripcion}} @endif </small></td>

</tr>
@endforeach

		</tbody>
	</table>
	<br>
	
	<table width="100%" class="small" cellpadding="3">
		<tbody style="border: 1px solid black">
            <tr  style="text-align: right !important;">
                
                <td><small style="font-size: 12px;"> <b>Total de Garantías:</b> {{$Guia->ListGuiaReclamo->count()}}</small></td>
            </tr>
		</tbody>
	</table>
	<br>

</div>

</body>
</html>