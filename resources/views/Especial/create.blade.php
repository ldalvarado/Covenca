@extends('layouts.app')

@section('contenido')
<div class="br-pagebody mg-t-5 pd-15">

<br />
<div class="text-left">
    <button class="btn boton_personalizado" onclick="return false;"><i class="fas fa-undo-alt"></i> <span class="textoBoton">Regresar</span></button>
</div>

<div class="row mt-2">
    <div class="col-md-12">
        <form action="" id="form" method="POST" class="parsley-style-1" >
        <input type="hidden" name="idReclamo" value="{{$reclamo->id}}">
            <div class="card" style="">
                <div class="card-header">
                    <h3 class="text-bold">CASO ESPECIAL</h3>
                </div>


                <div class="card-body">

                    <section class="content">
                        <div class="container">




                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <!-- SEGUNDA VISTA: Información del Producto -->
                                      <div class="p-0">

                                        <div class="form-layout form-layout-1 p-2">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                    <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Producto-->
                                                    <h4 class="tx-info">Cliente</h4>
				                             	<div class="pull-left">
				                             		<address>

				                             			<h5 class="font-bold">{{$reclamo->nombre}}</h5>
				                             			<p class="text-muted m-l-5">
				                             				<b class="font-bold">CI/RIF</b> {{$reclamo->rif}}

                                               <br/><b class="font-bold">Dirección:</b>
                                                {{$reclamo->direccion}}

				                             			</p>
				                             		</address>
                                                    </div>
</div>
                                                  <div class="col-md-12 p-0">
                                                      
                                                    <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Producto-->
                                                        <h4 class="tx-info">INFORMACIÓN DEL PRODUCTO</h4>
                                                        <div class="row pd-y-20 pd-md-y-0">

                                                            <div class="col-md-6"><!--Tipo Producto-->

				                            			<p class="text-muted m-l-5">

                                                            @if($reclamo->InfoProductoSucursal->getProducto->DatosCampos->serial)
                                                            <b class="font-bold">Serial:</b> {{$reclamo->InfoProductoSucursal->serial}}
				                            				<br/>
                                                            @endif
                                                            @if($reclamo->InfoProductoSucursal->getProducto->DatosCampos->boleta)
                                                            <b class="font-bold">Boleta:</b> {{$reclamo->InfoProductoSucursal->boleta}}
				                            				<br/>
                                                            @endif
                                                            @if($reclamo->InfoProductoSucursal->getProducto->DatosCampos->tipo_renovado)
                                                                <b class="font-bold">Tipo de Renovado: </b>
                                                                @if($reclamo->InfoProductoSucursal->tipoRenovado) Frio @endif
                                                                @if(!$reclamo->InfoProductoSucursal->tipoRenovado) Caliente @endif
				                            				<br/>
                                                            @endif

                                                            @if($reclamo->InfoProductoSucursal->getProducto->DatosCampos->diseno )
                                                            <b class="font-bold">Diseño:</b> {{$reclamo->InfoProductoSucursal->Diseno->descripcion}}
				                            				<br/>
                                                            @endif
                                                            @if($reclamo->InfoProductoSucursal->getProducto->DatosCampos->profundidad)
                                                            <b class="font-bold">Profundidad:</b> {{$reclamo->InfoProductoSucursal->profundidad}}
				                            				<br/>
                                                            @endif
                                                            @if($reclamo->InfoProductoSucursal->getProducto->DatosCampos->medida )
                                                            <b class="font-bold">Medida:</b> {{$reclamo->InfoProductoSucursal->medidaCaucho->descripcion}}
				                            				<br/>
                                                            @endif
                                                            @if($reclamo->InfoProductoSucursal->getProducto->DatosCampos->modelo )
                                                            <b class="font-bold">Modelo:</b> {{$reclamo->InfoProductoSucursal->modelCaucho->descripcion}}
				                            				<br/>
                                                            @endif
                                                            @if($reclamo->InfoProductoSucursal->getProducto->DatosCampos->marca &$reclamo->InfoProductoSucursal->marcaCaucho != null )
                                                            <b class="font-bold">Marca:</b> {{$reclamo->InfoProductoSucursal->marcaCaucho->descripcion}}
				                            				<br/>

                                                            @endif
                                                            @if($reclamo->InfoProductoSucursal->getProducto->DatosCampos->dotSerial )
                                                            <b class="font-bold">Dot Serial:</b> {{$reclamo->InfoProductoSucursal->dotSerial}}
				                            				<br/>
                                                            @endif
                                                            @if($reclamo->InfoProductoSucursal->getProducto->DatosCampos->valvula )
                                                            <b class="font-bold">Valvula:</b> {{$reclamo->InfoProductoSucursal->valvula}}
				                            				<br/>
                                                            @endif
                                                            <!--
                                                            @if($reclamo->InfoProductoSucursal->getProducto->DatosCampos->fecha_recepcion )
                                                            <b class="font-bold">Fecha de recepción:</b> <?= date('d/m/Y',strtotime($reclamo->InfoProductoSucursal->fechaRecepcion)) ?>
				                            				<br/>
                                                            @endif
                                                            
                                                            @if($reclamo->InfoProductoSucursal->getProducto->DatosCampos->lote_vulcanizacion )
                                                            <b class="font-bold">Lote vulcanización:</b> {{$reclamo->InfoProductoSucursal->loteVulcanizacion}}
				                            				<br/>
                                                            @endif

                                                            @if($reclamo->InfoProductoSucursal->getProducto->DatosCampos->lote_banda )
                                                            <b class="font-bold">Lote Banda:</b> {{$reclamo->InfoProductoSucursal->loteBanda}}
				                            				<br/>
                                                            @endif
                                                            
                                                            @if($reclamo->InfoProductoSucursal->getProducto->DatosCampos->lote_producto )
                                                            <b class="font-bold">Lote del producto:</b> {{$reclamo->InfoProductoSucursal->loteProducto}}
				                            				<br/>
                                                            @endif
                                                            -->
                                                            @if($reclamo->InfoProductoSucursal->getProducto->DatosCampos->pais )
                                                            <b class="font-bold">Pais:</b> {{$reclamo->InfoProductoSucursal->idPais}}
				                            				<br/>
                                                            @endif
                                                        </p>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <address>
                                                            <h5 class="font-bold"> <span>{{$reclamo->InfoProductoSucursal->getProducto->descripcion}}</span></h5>
                                                        <b class="font-weight-bold">Código del producto:</b> {{$reclamo->DocVenta->CodItem}}
					                                    <br/><b class="font-weight-bold">Descripción:</b> {{$reclamo->DocVenta->descripcion}}
					
                                                        <br/><b class="font-bold">Precio del producto:</b>
                                               {{$reclamo->precio}}

				                            		</address>
                                                            </div>
                                                        </div><!--row-->
                                                    </div><!--d-flex-->
                                                    <br>
                                          
                                          <div class="d-flex-column row justify-content-around ht-auto bd pd-x-20 pd-y-10">
				                            	<div class="pull-left text-left col-md-6">
				                            		<address>
                                                    <h4 class="tx-info">Imagen del Producto</h4>
 
                                                    @if ($reclamo->ImagenReclamoSucursal != null)
                                                    <?php echo '<img src="data:image/png;base64,'.base64_encode($reclamo->ImagenReclamoSucursal->imagen64).'"  alt="" width="200px">';?>
                                                    @endif

				                            		</address>
				                            	</div>
                                                <div class="pull-left text-left col-md-6">
				                            		<address>
                                                    <h4 class="tx-info">Descripción de la falla</h4>
 
                                                    <p class="text-muted m-l-5">{{$reclamo->observacion}}</p>
				                            		</address>
				                            	</div>
				                            </div>

                                            <br>
                                            
                                                  </div>

                                                </div>
 


                                  
                                        </div><!-- form-layout -->
                                      </div> <!--br-section-wrapper-->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <section>
                      <div class="container">
                        <div class="row pb-4">
                          <div class="col-12">
                                  
                            <div class="form-layout form-layout-1 p-2">
                                
                                    <div class="d-flex-column align-items-center justify-content-around ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->
                                        <h4 class="tx-info">OBSERVACIÓN</h4>
                                        <div class="row pd-y-20 pd-md-y-0">
                                            <div class="col-lg">
                                                <textarea rows="3" class="form-control" name="descripcion_falla" placeholder="Observación de la solicitud de garantía" disabled >{{ $reclamo->Especial->observacion }}</textarea>
                                            </div><!-- col -->
                                            
                                        </div>
                                    </div>

  
                            </div><!-- form-layout -->
                          </div>
                        </div>
    
                        <div class="row text-right">
                                <div class="col-md-12 pl-4">
                                    <div class="text-left">
                                        <div class="btn-group  btn-flotante ">
                                            <button id="btnRegistrar" onclick="cerrarEspecial(true)" class="btn btn-info  btn-lg text-lg text-bold text-center " name="buttonAction" value="Registrar">Aprobar</button>
                                            
                                        </div>
                                        <div class="btn-group  btn-flotante ">
                                        <button id="btnRegistrar" onclick="cerrarEspecial(false)" class="btn btn-danger  btn-lg text-lg text-bold text-center " name="buttonAction" value="Registrar">Rechazar</button>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </section>

                </div>

            </div>
        </form>
    </div>
</div>
</div><!--pagebody-->
<script>
  $(document).ready(function(){
        
        ActivateNavLink("nav-link_we");

    });
function cerrarEspecial($seleccion) {
            event.preventDefault();
  var data = $("#form").serialize();  
  var formData = new FormData($('#form')[0]);

  formData.append('seleccion', $seleccion);


      $.ajax({
        url: "{{route('Especial.store')}}",
        type:"POST",
        data: formData,
        processData: false,
        contentType: false,

    headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
    },
    success:function(response){
          console.log(response);
          if(response.isSuccess) {
            window.location.href = "{{ route('warranty.show', $reclamo->id)}}";
          }else{
            Toast.fire({
                    type: 'error',
                    title: response.message
            })
          }
        },
       });

        }
    </script>
@endsection