
@extends('layouts.app')

@section('contenido')

    <div class="br-pagebody mg-t-5 pd-30">
        <div id="cuerpo" class="container-fluid">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-auto mb-2">
                            <h1>
                                Garantía: {{$reclamo->codigoSucursal}}

                                    <span id="EstatusOportunidad" class="info-box-icon elevation-3 ml-0 ml-sm-2 ml-lg-5 p-1 text-uppercase text-bold " style="font-size: 25px;background: #fff ;border-radius: 6px;color: #000 !important;">
                                    {{$reclamo->estatusReclamo->first()->getEstatus->descripcion}}
                                    </span>
                                


                            </h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>





            <!-- Main content -->

            <section class="content">
                <div class="row mb-2 text-center text-sm-left ml-0 ml-sm-2">
<!--
                    @foreach($reclamo->ListEstadosReclamo as $estadoReclam)

                            <div class="col-12 col-sm-auto mb-2 mb-sm-0 p-0 p-sm-2">
                                <a href="#"   class="btn text-white w-auto text-bold bg-primary" >    {{$estadoReclam->getEstado->descripcion}} </a>
                            </div>  
                    @endforeach
-->
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1" id="ProAct">
                        <div class="card">

                                <div class="card-header bg-primary" >
                                    <div class="row mb-3">
                                        <div class="col-12 col-sm-8 align-self-center">

                                                <h3 class="text-white align-middle dato mb-0">
                                                    <i class="fas fa-briefcase"></i> Información de la garantía


                                                </h3>
                                        </div>
                                    </div>

                                </div>
            <div class="card-body">

            <div class="row">
                <div class="col-12">
                    <div id="accordion" class="accordion pb-4" role="tablist" aria-multiselectable="true">

                     <div class="card">
                       <div class="card-header" role="tab" id="headingTwo">
                         <h4 class="mg-b-0">
                           <a class="collapsed tx-gray-800 transition" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class=" tx-gray-800 transition">
                             Detalle de la garantía
                           </a>
                         </h4>
                       </div>
                       <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingTwo">
                         <div class="card-block p-2">
                           <section class="p-0">
                           <div class="p-0">
      
                               <div class="form-layout form-layout-1 p-1">
                                       <div class="d-flex-column align-items-center justify-content-around ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->

                                          <dic class="row pd-y-20 pd-md-y-0">
                                            <div class="col-md-6">
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
                                             <div class="col-md-6">
				                            	<div class="pull-right text-right">
				                            		<address>
                                                    <h4 class="tx-info">Distribuidor</h4>
				                            			<h5 class="font-bold">{{$reclamo->sucursal->descripcion}}</h5>
				                            			<p class="text-muted m-l-5">
                                                        {{$reclamo->sucursal->codigo}}
				                            				<br/>
                            
				                            			</p>
				                            			<p class="m-t-30"><b>Emision: </b> <i class="ti-calendar"></i> <?= date('d/m/Y',strtotime($reclamo->created_at)) ?></p>
				                            		</address>
				                            	</div>
				                            </div>
                                          </dic>
                                       </div>
                               </div><!-- form-layout -->
                           </div> <!--br-section-wrapper-->

  
                           </section>
                           <section class="p-0">
                           <div class="p-0">
      
                               <div class="form-layout form-layout-1 p-1">
                                       <div class="d-flex-column align-items-center justify-content-around ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->

                                          <dic class="row pd-y-20 pd-md-y-0">
                                            <div class="col-md-6">
                                            <h4 class="tx-info">Documento de venta</h4>
				                             	<div class="pull-left">
				                             		<address>

				                             			<h5 class="font-bold"> <span>{{$reclamo->factura}}</span></h5>
				                             			<p class="text-muted m-l-5">
				                             				<b class="font-bold">Fecha:</b> <?= date('d/m/Y',strtotime($reclamo->fechaFactura)) ?>

				                             			</p>
				                             		</address>
				                             	</div>
				                             </div>
                                             <div class="col-md-6">
				                            	<div class="pull-right text-right">
				                            		<address>
                                                    <h4 class="tx-info">Producto</h4>
                                                        <b class="font-weight-bold">Código del producto:</b> {{$reclamo->DocVenta->CodItem}}
					                                    <br/><b class="font-weight-bold">Descripción:</b> {{$reclamo->DocVenta->descripcion}}
					
                                                        <br/><b class="font-bold">Precio del producto:</b>
                                               {{$reclamo->precio}}

				                            		</address>
				                            	</div>
				                            </div>

                                          </dic>
                                       </div>
                               </div><!-- form-layout -->
                           </div> <!--br-section-wrapper-->

  
                           </section>
                           @if ($reclamo->CondicionVehiculo != null)
                           <section class="p-0">
                           <div class="p-0">
      
                               <div class="form-layout form-layout-1 p-1">
                                       <div class="d-flex-column align-items-center justify-content-around ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->

                                          <dic class="row pd-y-20 pd-md-y-0">
                                              <div class="col-12">
                                                <h4 class="tx-info">Información del vehículo</h4>
                                              </div>
                                          
                                            <div class="col-md-6">
                                            
				                             	<div class="pull-left">
				                             		<address>

				                             			<h5 class="font-bold"> <span>{{$reclamo->CondicionVehiculo->TipoVehiculo->descripcion}}</span></h5>
				                             			<p class="text-muted m-l-5">
				                             				<b class="font-bold">Marca:</b> {{$reclamo->CondicionVehiculo->MarcaVehiculo->descripcion}}

                                                             <br/><b class="font-bold">Modelo:</b> {{$reclamo->CondicionVehiculo->ModeloVehiculo->descripcion}}
                                                             <br/><b class="font-bold">Tipo de carga:</b> {{$reclamo->CondicionVehiculo->TipoCargaVehiculo->descripcion}}
                                                             <br/><b class="font-bold">Carga:</b> {{$reclamo->CondicionVehiculo->CargaVehiculo->descripcion}}


				                             			</p>
				                             		</address>
				                             	</div>
				                             </div>
                                             <div class="col-md-6">
                                            <h4 class="tx-info"></h4>
				                             	<div class="pull-left">
				                             		<address>

				                             			<h5 class="font-bold"> <span></span></h5>
				                             			<p class="text-muted m-l-5">
				                             				<b class="font-bold">Kilometraje:</b> {{$reclamo->CondicionVehiculo->kilometraje}}

                                                             <br/><b class="font-bold">Ancho de rin:</b> {{$reclamo->CondicionVehiculo->anchoRin}}
                                                             <br/><b class="font-bold">Psi:</b> {{$reclamo->CondicionVehiculo->psi}}
				                             			</p>
				                             		</address>
				                             	</div>
				                             </div>
                                          </dic>
                                       </div>
                               </div><!-- form-layout -->
                           </div> <!--br-section-wrapper-->

  
                           </section>

                           @endif


                         </div>
                       </div>
                     </div>
                     <div class="card">
                       <div class="card-header" role="tab" id="headingOne">
                         <h4 class="mg-b-0">
                           <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class=" tx-gray-800 transition">
                             Información de la garantía Por sucursal
                           </a>
                         </h4>
                       </div><!-- card-header -->

                       <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                         <div class="card-block p-2">
                           <section class="p-0">
                           <!--CUARTA VISTA: Información - Diagrama -->
                            <div class="p-0">

                                  <div class="form-layout form-layout-1 p-2">

                                          <div class="d-flex-column align-items-center justify-content-around ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->
                                              <h4 class="tx-info">Condicionales</h4>
                                              <div class="row pd-y-20 pd-md-y-0">

                                                  @foreach($cond_sucursal as $ReclamoCondicion)
                                                  <div class="col-md-12"><!---->
                                                      <div class="form-group mg-b-10-force">
                                                          <div class="row">
                                                              <div class="col-md-12"><!--DOT Serial-->
                                                                  <div class="form-group mg-b-10-force">
                                                                      <div class="row">

                                                                          <div class="col-sm-8">
                                                                              <label class="d-flex form-control-label">{{$ReclamoCondicion->condicion->descripcion}}<span class="tx-danger"></span></label>

                                                                          </div>
                                                                          <div class="col-sm-2">
                                                                              <label class="d-flex justify-content-center rdiobox rdiobox-primary">
                                                                                  <input type="radio" disabled name="condicion{{$ReclamoCondicion->id}}" id="yes_{{$ReclamoCondicion->id}}" value="yes" @if($ReclamoCondicion->activo) checked @endif><span>Si</span></label>  

                                                                              </div>
                                                                          <div class="col-sm-2"><label class="d-flex justify-content-center rdiobox rdiobox-primary">
                                                                                  <input type="radio" disabled name="condicion{{$ReclamoCondicion->id}}" id="no_{{$ReclamoCondicion->id}}" value="no" @if(!$ReclamoCondicion->activo) checked @endif><span>No</span></label>

                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div><!-- col-6 -->
                                                      </div>
                                                  </div><!-- col-6 -->
                                                  @endforeach 


                                              </div><!--row-->

                                          </div>
                                          <br>
                                          
                                          <div class="d-flex-column row justify-content-around ht-auto bd pd-x-20 pd-y-10">
				                            	<div class="pull-left text-left col-md-6">
				                            		<address>
                                                    <h4 class="tx-info">Imagen del Producto</h4>
 asdasd
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
                                        
                                          <div class="d-flex-column align-items-center justify-content-around ht-auto bd pd-x-20 pd-y-10">
				                            	<div class="pull-left text-left">
				                            		<address>
                                                    <h4 class="tx-info">Detalles del Producto</h4>
                                                    <h5 class="font-bold"> <span>{{$reclamo->InfoProductoSucursal->getProducto->descripcion}}</span></h5>
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
                                                            @if($reclamo->InfoProductoSucursal->getProducto->DatosCampos->marca & $reclamo->InfoProductoAnalisis->marcaCaucho != null)
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

				                            		</address>
				                            	</div>
				                            </div>
                                  </div><!-- form-layout -->
                              </div> <!--br-section-wrapper-->
  
                           </section>
                         </div>
                       </div>
                     </div>

                     @if (!empty($reclamo->getAnalisisReclamo))

                     <div class="card">
                       <div class="card-header" role="tab" id="headingOne">
                         <h4 class="mg-b-0">
                           <a data-toggle="collapse" data-parent="#accordion" href="#collapsetres" aria-expanded="false" aria-controls="collapsetres" class=" tx-gray-800 transition">
                             Información de la garantía por análisis técnico
                           </a>
                         </h4>
                       </div><!-- card-header -->

                       <div id="collapsetres" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                         <div class="card-block p-2">
                           <section class="p-0">
                           <!--CUARTA VISTA: Información - Diagrama -->
                            <div class="p-0">
                                  
                                  <div class="form-layout form-layout-1 p-2">

                                          <div class="d-flex-column align-items-center justify-content-around ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->
                                              <h4 class="tx-info">Condicionales</h4>
                                              <div class="row pd-y-20 pd-md-y-0">
                                                  @foreach($cond_analisis as $ReclamoCondicion)
                                                  <div class="col-md-12"><!---->
                                                      <div class="form-group mg-b-10-force">
                                                          <div class="row">
                                                              <div class="col-md-12"><!--DOT Serial-->
                                                                  <div class="form-group mg-b-10-force">
                                                                      <div class="row">
                            
                                                                          <div class="col-sm-8">
                                                                              <label class="d-flex form-control-label">{{$ReclamoCondicion->condicion->descripcion}}<span class="tx-danger"></span></label>
                            
                                                                          </div>
                                                                          <div class="col-sm-2">
                                                                              <label class="d-flex justify-content-center rdiobox rdiobox-primary">
                                                                                  <input type="radio" disabled name="condicion{{$ReclamoCondicion->id}}" id="yes_{{$ReclamoCondicion->id}}" value="yes" @if($ReclamoCondicion->activo) checked @endif><span>Si</span></label>  
                            
                                                                              </div>
                                                                          <div class="col-sm-2"><label class="d-flex justify-content-center rdiobox rdiobox-primary">
                                                                                  <input type="radio" disabled name="condicion{{$ReclamoCondicion->id}}" id="no_{{$ReclamoCondicion->id}}" value="no" @if(!$ReclamoCondicion->activo) checked @endif><span>No</span></label>
                            
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div><!-- col-6 -->
                                                      </div>
                                                  </div><!-- col-6 -->
                                                  @endforeach 
                            
                            
                                              </div><!--row-->
                            
                                          </div><!--row-->
                                  </div>
                                          <div class="form-layout form-layout-1 p-2">

                                          <div class="d-flex-column align-items-center justify-content-around ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->
                                              <h4 class="tx-info">Análisis</h4>
                                              <div class="row pd-y-20 pd-md-y-0">

                                                  
                                                  <div class="col-md-12"><!---->
                                                      <div class="form-group mg-b-10-force">
                                                          <div class="row">
                                                            <div class="pull-left text-left col-md-6">
				                            	            	<address>
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
				                            	            	</address>
				                            	            </div>
                                                            <div class="pull-left text-left col-md-6">
				                            	            	<address>
                                                                <b class="font-weight-bold">Vida útil (%): {{$reclamo->Analisis->porcentaje}}
					                                            <br>
					                                            <br><b class="font-weight-bold">Precaución: 
					                                            <ul>
					                                            @foreach($reclamo->Analisis->rechazo->ListRecomendacion as $recom)
					                                            <li>{{$recom['descripcion']}}</li>
                                                                @endforeach
					                                            </ul>
					                                             </b>


					                                            </b>
				                            	            	</address>
				                            	            </div>
                                                          </div><!-- col-6 -->
                                                      </div>
                                                  </div><!-- col-6 -->
                                                  


                                              </div><!--row-->

                                          </div>

                                          <br>
                                          <div class="form-layout form-layout-1 p-0">

                                            <div class="d-flex-column justify-content-around ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->
                                            
                                              <div class="row pd-y-20 pd-md-y-0">
				                            	<div class="pull-left text-left col-md-6">
				                            		<address>
                                                    <h4 class="tx-info">Imagen del Producto</h4>
 
                                                    @if ($reclamo->ImagenReclamo != null)
                                                    <?php echo '<img src="data:image/png;base64,'.base64_encode($reclamo->ImagenReclamo->imagen64).'"  alt="" width="200px">';?>
                                                    @endif

				                            		</address>
				                            	</div>
                                                <div class="pull-left text-left  col-md-6">
				                            		<address>
                                                    <h4 class="tx-info">Descripción de la falla</h4>
 
                                                    <p class="text-muted m-l-5">{{$reclamo->Analisis->descripcion}}</p>
				                            		</address>
				                            	</div>
				                               </div>
                                            </div>
                                          </div>
                                          <br>
                                          <div class="d-flex-column align-items-center justify-content-around ht-auto bd pd-x-20 pd-y-10">
				                            	<div class="pull-left text-left">
				                            		<address>
                                                    <h4 class="tx-info">Detalles del Producto</h4>
                                                    <h5 class="font-bold"> <span>{{$reclamo->InfoProductoAnalisis->getProducto->descripcion}}</span></h5>
				                            			<p class="text-muted m-l-5">

                                                            @if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->serial)
                                                            <b class="font-bold">Serial:</b> {{$reclamo->InfoProductoAnalisis->serial}}
				                            				<br/>
                                                            @endif
                                                            @if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->boleta)
                                                            <b class="font-bold">Boleta:</b> {{$reclamo->InfoProductoAnalisis->boleta}}
				                            				<br/>
                                                            @endif
                                                            @if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->tipo_renovado)
                                                                <b class="font-bold">Tipo de Renovado: </b>
                                                                @if($reclamo->InfoProductoAnalisis->tipoRenovado) Frio @endif
                                                                @if(!$reclamo->InfoProductoAnalisis->tipoRenovado) Caliente @endif
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
                                                            @if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->medida )
                                                            <b class="font-bold">Medida:</b> {{$reclamo->InfoProductoAnalisis->medidaCaucho->descripcion}}
				                            				<br/>
                                                            @endif
                                                            @if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->modelo )
                                                            <b class="font-bold">Modelo:</b> {{$reclamo->InfoProductoAnalisis->modelCaucho->descripcion}}
				                            				<br/>
                                                            @endif
                                                            @if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->marca & $reclamo->InfoProductoAnalisis->marcaCaucho != null)
                                                            <b class="font-bold">Marca:</b> {{$reclamo->InfoProductoAnalisis->marcaCaucho->descripcion}}
				                            				<br/>

                                                            @endif
                                                            @if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->dotSerial )
                                                            <b class="font-bold">Dot Serial:</b> {{$reclamo->InfoProductoAnalisis->dotSerial}}
				                            				<br/>
                                                            @endif
                                                            @if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->valvula )
                                                            <b class="font-bold">Valvula:</b> {{$reclamo->InfoProductoAnalisis->valvula}}
				                            				<br/>
                                                            @endif<!--
                                                            @if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->fecha_recepcion )
                                                            <b class="font-bold">Fecha de recepción:</b> <?= date('d/m/Y',strtotime($reclamo->InfoProductoAnalisis->fechaRecepcion)) ?>
				                            				<br/>
                                                            @endif

                                                            
                                                            @if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->lote_producto )
                                                            <b class="font-bold">Lote del producto:</b> {{$reclamo->InfoProductoAnalisis->loteProducto}}
				                            				<br/>
                                                            @endif
                                                            
                                                            @if($reclamo->InfoProductoAnalisis->getProducto->DatosCampos->pais )
                                                            <b class="font-bold">Pais:</b> {{$reclamo->InfoProductoAnalisis->idPais}}
				                            				<br/>
                                                            @endif
-->
				                            			</p>

				                            		</address>
				                            	</div>
				                            </div>
                                  </div><!-- form-layout -->
                              </div> <!--br-section-wrapper-->
  
                           </section>
                         </div>
                       </div>
                     </div> 
                         
                     @endif

                     @if (!empty($reclamo->getCreditoReclamo))

                     <div class="card">
                       <div class="card-header" role="tab" id="headingOne">
                         <h4 class="mg-b-0">
                           <a data-toggle="collapse" data-parent="#accordion" href="#collapsecuatro" aria-expanded="false" aria-controls="collapsecuatro" class=" tx-gray-800 transition">
                             Crédito de la garantía
                           </a>
                         </h4>
                       </div><!-- card-header -->

                       <div id="collapsecuatro" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                         <div class="card-block p-2">
                           <section class="p-0">
                           <!--CUARTA VISTA: Información - Diagrama -->
                           <div class="p-0">
                                  

                                  <div class="form-layout form-layout-1 p-2">
  
                                        <div class="d-flex-column align-items-center justify-content-around ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->
                                          <h4 class="tx-info">Crédito</h4>
                                            <div class="form-layout form-layout-1 p-0">


                                              <div class="row pd-y-20 pd-md-y-0">
				                            	<div class="pull-left text-left col-md-6">
                                                <address>
                                                                <b class="font-weight-bold">Código del distribuidor comercial:</b> {{$reclamo->sucursal->codigo}}
                                                                <br><b class="font-weight-bold">Rif del cliente:</b> {{$reclamo->sucursal->rif}}
                                                                <br><b class="font-weight-bold">Nro. de la garantía:</b> {{$reclamo->codigoSucursal}}
                                      
                                                                <br><b class="font-weight-bold">Nombre del Cliente:</b> {{$reclamo->nombre}}
  
  
                                                            </address>
				                            	</div>
                                                <div class="pull-left text-left  col-md-6">
                                                <address>
                                                            <b class="font-weight-bold">Doc. de compra:</b>
                                                                <br><b class="font-weight-bold">Código del producto:</b> {{$reclamo->DocVenta->CodItem}}
                                                                <br><b class="font-weight-bold">Descripción del producto:</b> {{$reclamo->DocVenta->descripcion}}
                                                                <br><b class="font-weight-bold">Precio de venta:</b> {{$reclamo->CreditoReclamo->precioVenta}}
                                                                <br><b class="font-weight-bold">% de ajuste:</b> {{$reclamo->CreditoReclamo->porcentaje}}
                                                                <br><b class="font-weight-bold">Total a pagar:</b> {{$reclamo->CreditoReclamo->montoPagar}}
                                                            </address>
				                            	</div>
				                              </div>
                                            
                                          </div>
    
  
                                        </div>
                                            
  
                                  </div><!-- form-layout -->
                              </div> <!--br-section-wrapper-->
  
                           </section>
                         </div>
                       </div>
                     </div> 
                         
                     @endif
                    </div><!-- accordion -->  
                </div>

                                    </div>
                                </div>
                            
                        </div>

                        <div class="card">
                            <div class="card-header">

                                <h3 class="text-primary">
                                     Proceso
                                     @if ($reclamo->estatusReclamo->first()->getEstatus->id == 1 || $reclamo->estatusReclamo->first()->getEstatus->id == 4)
                                        <span id="EstatusOportunidad" class=" bg-success info-box-icon elevation-3 ml-0 ml-sm-2 ml-lg-5 p-2 text-uppercase text-bold float-right" style="font-size: 25px;border-radius: 6px;color: #fff !important;">
                                            {{$reclamo->estatusReclamo->first()->getEstatus->descripcion}}
                                        </span>
                                     @elseif ($reclamo->estatusReclamo->first()->getEstatus->id == 2 || $reclamo->estatusReclamo->first()->getEstatus->id == 5)
                                        <span id="EstatusOportunidad" class=" bg-danger info-box-icon elevation-3 ml-0 ml-sm-2 ml-lg-5 p-2 text-uppercase text-bold float-right" style="font-size: 25px;border-radius: 6px;color: #fff !important;">
                                            {{$reclamo->estatusReclamo->first()->getEstatus->descripcion}}
                                        </span>
                                    @else
                                        <span id="EstatusOportunidad" class=" bg-warning info-box-icon elevation-3 ml-0 ml-sm-2 ml-lg-5 p-2 text-uppercase text-bold float-right" style="font-size: 25px;border-radius: 6px;color: #000 !important;">
                                            {{$reclamo->estatusReclamo->first()->getEstatus->descripcion}}
                                        </span>
                                     @endif


                                </h3>

                            </div>
                            <div class="card-body pb-0">
                                <div class="container-fluid overflow-auto">


                                    <div id="Planificacion" class="row flex-row flex-nowrap text-center text-lg">
                                            <div class="col-auto " data-toggle="tooltip" data-placement="top" title="@Plan.fecha_inicial.ToString("dd/MM/yyyy HH:mm") a @Plan.fecha_final.ToString("dd/MM/yyyy HH:mm")">
                                                <div class="columna mt-4 mb-4">
                                                    <span id="actividad" >
                                                        <p class="bg-success info-box-icon elevation-3  p-2 text-bold" style="border-radius: 6px; color: #fff !important;font-weight: bold;">
                                                        Creación
                                                
                                                            <small class="d-block">
                                                                    <span class="font-italic"><?= date('d/m/Y',strtotime($reclamo->created_at)) ?></span>
                                                            </small> 
                                                        </p>
</span>   
                                                </div>
                                            </div>
                                            
                                            @if ( $reclamo->getEspecialReclamo == null)
                                            <div class="col-auto " style="margin-top: auto;margin-bottom: auto;">
                                                <div class="columna">
                                                <a  href="{{ route('PDFreclamo', [$reclamo->id]) }}" class="btn btn-info info-box-icon elevation-3">
                                                    <i class="far fa-file-pdf"></i>
                                                    <span class="textoBoton ">PDF</span> 
                                                </a> 
                                                </div>
                                            </div>
                                            @endif


                                    @foreach($reclamo->ListEstadosReclamo as $estadoReclam)
                                                    <div class="col-auto ">
                                                        <div class="columna mt-4 mb-4">
                                                            <p class="text-black-50 text-bold" style="position: relative">
                                                
                                                
                                                                <small class="d-block text-sm text-bold text-primary ">

                                                                </small>
                                                                <i class="fas fa-caret-right fa-4x fixedHeader-floating"></i>
                                                            </p>
                                                                
                                                        </div>
                                                    </div>
                           
                                                    @if ($estadoReclam->activo)
                                                        <div class="col-auto " data-toggle="tooltip" data-placement="top" title="@Plan.fecha_inicial.ToString("dd/MM/yyyy HH:mm") a @Plan.fecha_final.ToString("dd/MM/yyyy HH:mm")">




                                                            <div class="columna mt-4 mb-4">
                                                                <a id="actividad" href="#" onclick="return false;" estatus="@Plan.estatus" tipo="@Plan.id_tipoActividad" id_cronograma="@Plan.id_cronograma" idOportunidad="@Plan.id_oportunidad" data-toggle="modal" data-target="#modal_actividad">
                                                                    <p class="bg-warning info-box-icon elevation-3  p-2  text-white text-bold" style="border-radius: 6px;color: #000 !important;font-weight: bold;">
                                                                    {{$estadoReclam->getEstado->descripcion}}

                                                                        <small class="d-block">

                                                                                <span class="font-italic"><?= date('d/m/Y',strtotime($estadoReclam->created_at)) ?></span>



                                                                        </small>

                                                                    </p>
                                                                </a>    
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="col-auto " data-toggle="tooltip" data-placement="top" title="@Plan.fecha_inicial.ToString("dd/MM/yyyy HH:mm") a @Plan.fecha_final.ToString("dd/MM/yyyy HH:mm")">

                                                            <div class="columna mt-4 mb-4">
                                                                <a id="actividad" href="#" onclick="return false;" estatus="@Plan.estatus" tipo="@Plan.id_tipoActividad" id_cronograma="@Plan.id_cronograma" idOportunidad="@Plan.id_oportunidad" data-toggle="modal" data-target="#modal_actividad">
                                                                    <p class="bg-success info-box-icon elevation-3  p-2 text-bold" style="border-radius: 6px;color: #fff !important;font-weight: bold;">
                                                                    {{$estadoReclam->getEstado->descripcion}}

                                                                        <small class="d-block">

                                                                                <span class="font-italic"><?= date('d/m/Y',strtotime($estadoReclam->created_at)) ?></span>



                                                                        </small>

                                                                    </p>
                                                                </a> 
                                                            </div>
                                                        </div>
                                                        @if($estadoReclam->getEstado->id == 2 && $estadoReclam->getEstado->activo == "false")
                                                        <div class="col-auto " style="margin-top: auto;margin-bottom: auto;">
                                                            <div class="columna">
                                                            <a  href="{{ route('PDFreclamo', [$reclamo->id]) }}" class="btn btn-info info-box-icon elevation-3">
                                                                <i class="far fa-file-pdf"></i>
                                                                <span class="textoBoton ">PDF</span> 
                                                            </a> 
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if($estadoReclam->getEstado->id == 1 && $estadoReclam->getEstado->activo == "false")
                                                            <div class="col-auto " style="margin-top: auto;margin-bottom: auto;">
                                                                <div class="columna">
                                                                    <a  href="{{ route('PDFGuia', [$reclamo->GuiaReclamo->guia->codigo]) }}" class="btn btn-info info-box-icon elevation-3">
                                                                        <i class="far fa-file-pdf"></i>
                                                                        <span class="textoBoton ">PDF</span> 
                                                                    </a> 
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if($estadoReclam->getEstado->id == 4)
                                                            <div class="col-auto " style="margin-top: auto;margin-bottom: auto;">
                                                                <div class="columna">
                                                                    <a  href="{{ route('analisisPDF', [$reclamo->id]) }}" class="btn btn-info info-box-icon elevation-3">
                                                                        <i class="far fa-file-pdf"></i>
                                                                        <span class="textoBoton ">PDF</span> 
                                                                    </a> 
                                                                </div>
                                                            </div>
                                                        @endif

                                                    
                                                    @endif
                                                
                                            
                                                
                                            
                                        
                                    
                                     @endforeach
                                    </div>
                                </div>
                                    
                            </div>
                            <div class="card-footer bg-white border-top">

                                <div class="row">
         
                                    <div class="col">
                                        
                                        <div class="text-black-50 text-bold">
                                            Fecha Inicial:
                                            <b class="d-block">
                                            <?= date('d/m/Y',strtotime($reclamo->created_at)) ?>
                                            </b>
                                
                                        </div>
                                    </div>
                                

                                    <div class="col">
                                        <div id="finalTotal" class="text-black-50 text-bold">
                                            Fecha Actual:
                                            <b class="d-block">

                                            <?= date('d/m/Y') ?>
                                            </b>
                                
                                
                                        </div>
                                    </div>
                                            
                                
                                    
                                 
                                
                                    <div class="col text-center">

                                            <p class="text-black-50 text-bold">
                                                Duración:
                                                <b class="d-block totalAprox">
                              
                                                  @if(sizeof($reclamo->getUltimoEstado) > 0)
                                                    <?php
                                                    $prueba = "";  
                                                    $dateDifference = abs(strtotime(date('Y/m/d',strtotime($reclamo->getUltimoEstado->first()->created_at))) - strtotime(date('Y/m/d',strtotime($reclamo->created_at))));
                                                    $years  = floor($dateDifference / (365 * 60 * 60 * 24));
                                                    $months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));

                                                    $days   = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 *24) / (60 * 60 * 24));
                                                    echo $days." días";
                                                    
                                                    ?>  
                                                    @else
                                                    <?php
                                   $prueba = "";                            
$dateDifference = abs(strtotime(date('Y/m/d')) - strtotime(date('Y/m/d',strtotime($reclamo->created_at))));
$prueba = ""; 
$years  = floor($dateDifference / (365 * 60 * 60 * 24));
$months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
$days   = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 *24) / (60 * 60 * 24));

echo $days." días";
                                                        ?>  
                                                    @endif


                                                
                                                </b>
                                                
                                            </p>
                                        
                                    
                                    </div>
                                </div>
                                    
                            </div>
                        </div>

                    </div>




                    <div class="col-12 col-md-12 col-lg-4 order-2 order-md-2" id="Hist">
                        <div class="card">
                            <div class="card-header">

                                <h3 class="text-primary"><i class="fas fa-history"></i> Historial de la Garantía</h3>
                            </div>
                            <div class="card-body historial-body">
                                <div class="row">
                                    <div id="historico" class="col-12">
                                            <div class="post">
                                                <div class="">

                                                    <span class="username ">
                                                        <a class="text-black-50 text-bold" href="#">{{$reclamo->usuario->name}}</a>

                                                         Creó la garantía


                                                    </span>

                                                    <p class="fecha"><?= date('d/m/Y',strtotime($reclamo->created_at)) ?></p>
                                                </div>

                                            </div>

                                    @foreach($reclamo->ListEstadosReclamo as $estadoReclam)
                                            <div class="post">
                                                <div class="">

                                                    <span class="username ">
                                                        <a class="text-black-50 text-bold" href="#">{{$estadoReclam->usuario->name}}</a>

                                                        {{$estadoReclam->observacion}}


                                                    </span>

                                                    <p class="fecha"><?= date('d/m/Y',strtotime($estadoReclam->created_at)) ?></p>
                                                </div>

                                            </div>
                                            
                                        
                                    
                                     @endforeach


                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>


                    </div>


                </div>
                <!-- Default box -->
                <!-- /.card -->

            </section>


        </div>

    </div>
    <script>
         $(document).ready(function(){
        
        ActivateNavLink("nav-link_we");

    });
    </script>
@include('layouts.alerts');

@endsection