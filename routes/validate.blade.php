<!--CUARTA VISTA: Información - Diagrama -->
<div class="p-0">
      
    <div class="form-layout form-layout-1 p-2">

            <div class="d-flex-column align-items-center justify-content-around ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->
                <h4 class="tx-info">Condicionales</h4>
                <div class="row pd-y-20 pd-md-y-0" id="requisitos_container">

                </div><!--
                <div class="row pd-y-20 pd-md-y-0">
                    @foreach($reclamo->Condiciones as $ReclamoCondicion)
                    <div class="col-md-12">
                        <div class="form-group mg-b-10-force">
                            <div class="row">
                                <div class="col-sm-8">
                                    <label class="d-flex form-control-label">{{$ReclamoCondicion->condicion->descripcion}}<span class="tx-danger"></span></label>
                                </div>
                                    <div class="col-sm-2"><label class="d-flex justify-content-center rdiobox "><input onchange="ChangeArray('+count+',1)" type="radio" name="condicion{{$ReclamoCondicion->id}}" id="yes_{{$ReclamoCondicion->id}}" value="yes" @if($ReclamoCondicion->activo) checked @endif><span>Si</span></label>'  
                                </div>
                                    <div class="col-sm-2"><label class="d-flex justify-content-center rdiobox "><input onchange="ChangeArray('+count+',0)" type="radio" name="condicion{{$ReclamoCondicion->id}}" id="no_{{$ReclamoCondicion->id}}" value="no"  @if(!$ReclamoCondicion->activo) checked @endif><span>No</span></label>'
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach 


                </div>-->
 
            </div><!--row-->


    </div><!-- form-layout -->
</div> <!--br-section-wrapper-->

<!-- SEGUNDA VISTA: Información del Producto -->
<div class="p-0">

    <div class="form-layout form-layout-1 p-2">


                    <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Producto-->
                      <h4 class="tx-info">Información del producto</h4>
                      <div class="row pd-y-20 pd-md-y-0">
                      <div class="col-md-6"><!--Tipo Producto-->
                           <div class="form-group mg-b-10-force">
                               <label class="form-control-label">
                                   Producto:
                                   <span class="tx-danger"></span>
                               </label>
                               <input class="form-control" type="hidden" name="idProducto" value="{{$info_product->getProducto->id}}" placeholder="" >
                               <input class="form-control" type="text" name="producto" value="{{$info_product->getProducto->descripcion}}" placeholder="" disabled>
                           </div>
                      </div><!-- col-6 -->
 


                      @if($info_product->getProducto->DatosCampos->dotSerial )
                      <div class="col-md-6"><!--DOT-SERIAL-->
                              <div class="form-group mg-b-10-force">
                                  <label class="form-control-label">DOT-SERIAL Completo:<span class="tx-danger"></span></label>
                                  <input class="form-control" type="text" name="dotSerial" value="{{$info_product->dotSerial}}" placeholder="">
                              </div>
                          </div><!-- col-6 -->
                      @endif
                      @if($info_product->getProducto->DatosCampos->medida )
                          <!--Otra fila-->
                          <div class="col-md-4"><!--Medida-->
                              <div class="form-group mg-b-10-force">
                                  <label class="form-control-label">Medida:<span class="tx-danger"></span></label>
                                  
                                  <select class="form-control" name="medida" data-placeholder="" required>
                                      
                                      @foreach($medidas as $medida)
                                          <option value="{{$medida['id']}}" {{$info_product->idMedidaCaucho==$medida['id'] ? 'selected' : ''}}>{{$medida['descripcion']}}</option>
                                      @endforeach
                                  </select>
                              </div>
                          </div><!-- col-4 -->
                
                      @endif
                      @if($info_product->getProducto->DatosCampos->modelo )


                        <div class="col-md-4"><!--Modelo-->
                              <div class="form-group mg-b-10-force">
                                  <label class="form-control-label">Modelo:<span class="tx-danger"></span></label>
                                  <select class="form-control" name="modelo" data-placeholder="Seleccione la marca" required>
                                  @foreach($modeloCauchos as $modeloCau)
                                      <option value="{{$modeloCau['id']}}" {{$info_product->idModeloCaucho==$modeloCau['id'] ? 'selected' : ''}}>{{$modeloCau['descripcion']}}</option>
                                  @endforeach
                                  </select>

                              </div>
                          </div><!-- col-4 -->
                      @endif
                      @if($info_product->getProducto->DatosCampos->marca)

                      <div class="col-md-4"><!--Marca-->
                              <div class="form-group mg-b-10-force">
                                  <label class="form-control-label">Marca:<span class="tx-danger"></span></label>
                                  <select class="form-control" name="marca" data-placeholder="Seleccione la marca" required>
                                      @foreach($marcaCauchos as $marcaCau)
                                          <option value="{{$marcaCau['id']}}" {{$info_product->idMarcaCaucho==$marcaCau['id'] ? 'selected' : ''}}>{{$marcaCau['descripcion']}}</option>
                                      @endforeach
                                  </select>
                              </div>
                          </div><!-- col-4 -->

                      @endif

                      @if($info_product->getProducto->DatosCampos->valvula )
                      <b class="font-bold">Valvula:</b> {{$info_product->valvula}}
				      <br/>
                      @endif
                      @if($info_product->getProducto->DatosCampos->fecha_recepcion )
     <!--
                    <div class="col-md-4">
                        
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Fecha:<span class="tx-danger"></span></label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                <input id="input_date" type="text" class="form-control fc-datepicker" name="fecha" placeholder="DD/MM/YYYY" value="<?= date('d/m/Y',strtotime($info_product->fechaRecepcion)) ?>">
                            </div>
                        </div>
                    </div>
                    -->
                      @endif
                      <!--
                      @if($info_product->getProducto->DatosCampos->lote_vulcanizacion )
                      <b class="font-bold">Lote vulcanización:</b> {{$info_product->loteVulcanizacion}}
				      <br/>
                      @endif

                      @if($info_product->getProducto->DatosCampos->lote_banda )
                      <b class="font-bold">Lote Banda:</b> {{$info_product->loteBanda}}
				      <br/>
                      @endif
                      
                      @if($info_product->getProducto->DatosCampos->lote_producto )
                      <b class="font-bold">Lote del producto:</b> {{$info_product->loteProducto}}
				      <br/>
                      @endif
                      -->
                      @if($info_product->getProducto->DatosCampos->pais )
                      <b class="font-bold">Pais:</b> {{$info_product->idPais}}
				      <br/>
                      @endif
                      @if($info_product->getProducto->DatosCampos->diseno )
                         <!--Otra fila-->
                         <div class="col-md-4"><!--Diseño de Molde-->
                              <div class="form-group mg-b-10-force">
                                  <label class="form-control-label">Diseño:<span class="tx-danger"></span></label>
                                  <select class="form-control" name="diseno" id="diseno" data-placeholder="Seleccione la marca" required>
                                      @foreach($disenios as $diseno)
                                          <option value="{{$diseno['id']}}" {{$info_product->idDisenoBanda==$diseno['id'] ? 'selected' : ''}}>{{$diseno['descripcion']}}</option>
                                      @endforeach
                                  </select>
                              </div>
                          </div><!-- col-4 -->
                          <div class="col-md-4">
                              <div class="form-group mg-b-10-force">
                                  <label class="form-control-label">Ancho del diseño:<span class="tx-danger"></span></label>
                                  <select class="form-control" name="idProfundidad" id="idProfundidad" data-placeholder="Seleccione el ancho" required>
                                  @foreach($info_product->Diseno->ListDisenoAncho as $profun)
                                          <option value="{{$profun->Profundidad->id}}" {{$info_product->idProfundidad==$profun->Profundidad->id ? 'selected' : ''}}>{{$profun->Ancho->descripcion}}</option>
                                  @endforeach
                                  </select>

                              </div>
                        </div>
                      @endif
                      @if($info_product->getProducto->DatosCampos->profundidad)

                      <!--
                      <div class="col-md-6">
                              <div class="form-group mg-b-10-force">
                                  <label class="form-control-label">Profundidad:<span class="tx-danger"></span></label>
                                  <select class="form-control" name="profundidad" id="profundidad" data-placeholder="Seleccione la profundidad" required>
                                  @foreach($info_product->Diseno->ListProfundidad as $profun)
                                          <option value="{{$profun->Profundidad->id}}" {{$info_product->idProfundidad==$profun->Profundidad->id ? 'selected' : ''}}>{{$profun->Profundidad->descripcion}}</option>
                                  @endforeach
                                  </select>

                              </div>
                          </div>
                          -->
                      @endif
                      @if($info_product->getProducto->DatosCampos->tipo_renovado)
                      <div class="col-md-4" id="input_tipoRenovado"><!--Tipo de Renovado /Checkbox-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Tipo de Renovado:<span class="tx-danger"></span></label>
                            <div class="d-flex row justify-content-around">
                                <label class="d-flex rdiobox rdiobox-primary">
                                    <input type="radio" name="tipo_renovado" id="cold" value="cold" @if($info_product->tipoRenovado) checked @endif ><span>Frío</span>
                                </label>

                                <label class="d-flex rdiobox rdiobox-primary">
                                    <input type="radio" name="tipo_renovado" id="warm" value="warm" @if(!$info_product->tipoRenovado) checked @endif><span>Caliente</span>
                                </label>
                            </div>
                        </div>
                    </div><!-- col-4 -->
                      @endif
                      @if($info_product->getProducto->DatosCampos->serial)
                      <div class="col-md-8" id="input_serial"><!--Serial de Producción-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Serial de Producción:<span class="tx-danger"></span></label>
                            <input class="form-control" type="text" name="serial_produccion" placeholder="" required value="{{$info_product->serial}}" id="serialNeumatico">
                        </div>
                      </div><!-- col-4 -->
                      @endif
                      @if($info_product->getProducto->DatosCampos->boleta)
                      <div class="col-md-4" id="input_boleta"><!--Boleta-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Boleta:<span class="tx-danger"></span></label>
                            <input class="form-control" type="text" name="boleta" required value="{{$info_product->boleta}}" id="boletaNeumatico">
                        </div>
                    </div><!-- col-4 -->
                      @endif






 


                      </div><!--row-->
                    </div><!--d-flex-->
 
                </div><!--row-->
            </div><!--d-flex-->



    </div><!-- form-layout -->
</div> <!--br-section-wrapper-->
<script>
    function condiciones() {
        var requisitos_container = document.getElementById('requisitos_container');
        var condiciones = {!! json_encode($reclamo->Condiciones ) !!}
        var cond = [];
        var condActv = [];
        for(let i = 0 ; i < condiciones.length; i++){
            
        }
        console.log(condiciones);
        count = 0;
        var innerhtml = ""
        let condicionesRespuesta = [];
        for(var i = 0 ; i < condiciones.length; i++){

                condicionesRespuesta[count] = condiciones[i]['condicion'].respuesta;
                cond[count] = condiciones[i]['condicion'].id;
                condActv[count] = condiciones[i]['activo'] ? 1 : 0;
                if(condiciones[i]['activo']){
                    innerhtml +='<div class="col-md-12"><!--DOT Serial--><div class="form-group mg-b-10-force"><div class="row">'+
                                '<div class="col-sm-8"><label class="d-flex form-control-label">'+condiciones[i]['condicion']['descripcion']+'<span class="tx-danger"></span></label>'
                                +'</div><div class="col-sm-2"><label class="d-flex justify-content-center rdiobox "><input onchange="ChangeArray('+count+',1)" type="radio" name="req_dot_serial_'+i+'" id="yes_'+i+'" value="yes" checked><span>Si</span></label>'  
                                +'</div><div class="col-sm-2"><label class="d-flex justify-content-center rdiobox "><input onchange="ChangeArray('+count+',0)" type="radio" name="req_dot_serial_'+i+'" id="no'+i+'" value="no" ><span>No</span></label>'
                                +'</div></div></div></div><!-- col-6 -->';
                }else{
                    innerhtml +='<div class="col-md-12"><!--DOT Serial--><div class="form-group mg-b-10-force"><div class="row">'+
                                '<div class="col-sm-8"><label class="d-flex form-control-label">'+condiciones[i]['condicion']['descripcion']+'<span class="tx-danger"></span></label>'
                                +'</div><div class="col-sm-2"><label class="d-flex justify-content-center rdiobox "><input onchange="ChangeArray('+count+',1)" type="radio" name="req_dot_serial_'+i+'" id="yes_'+i+'" value="yes"><span>Si</span></label>'  
                                +'</div><div class="col-sm-2"><label class="d-flex justify-content-center rdiobox "><input onchange="ChangeArray('+count+',0)" type="radio" name="req_dot_serial_'+i+'" id="no'+i+'" value="no" checked><span>No</span></label>'
                                +'</div></div></div></div><!-- col-6 -->';
                }

                                count++;
            
           
        }

        window.localStorage.setItem('condicionesActivo', JSON.stringify(condActv));
        window.localStorage.setItem('condiciones', JSON.stringify(cond));
        console.log(condicionesRespuesta);
        window.localStorage.setItem('condicionesRespuesta', JSON.stringify(condicionesRespuesta));
        requisitos_container.innerHTML = innerhtml;
    }
    function ChangeArray(index , data){
        var activo = JSON.parse(window.localStorage.getItem('condicionesActivo'));
        activo[index] = data;
        window.localStorage.setItem('condicionesActivo', JSON.stringify(activo));
    }
    $('#diseno').on('change', function() {
        var diseno = document.getElementById('diseno');

        $.ajax({
        url: "{{route('buscarAnchoDiseno')}}/"+diseno.value,
        //url: "{{route('buscarProfundidad')}}/"+diseno.value,
        type:"POST",
        data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        },
        success:function(response){
            
        var profundidad = $("#idProfundidad")[0];
        profundidad.length = 0;
            var index = 1;
            
        for (i = 0; i < response.length; i++) {
            profundidad[index] = new Option(response[i].value, response[i].id, "", "");

            index++;
        }

        },
       });

    });
    $(document).ready(function() {
        condiciones();
    
  });
    $("#idProfundidad").on('change', function() {
        var diseno = document.getElementById('idProfundidad');

        $.ajax({
        url: "{{route('getProfundidad')}}/"+diseno.value,
        //url: "{{route('buscarProfundidad')}}/"+diseno.value,
        type:"POST",
        data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        },
        success:function(response){
            var profun = document.getElementById('profundidadDiseno');
            profun.value = response;
            calcularPorcentaje();
        },
       });

    });

</script>