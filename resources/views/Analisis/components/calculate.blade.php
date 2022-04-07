
<div class="p-0">
      
    <div class="form-layout form-layout-1 p-1">
            <input type="hidden" name="idReclamo" value="{{$reclamo->id}}">
            @if($info_product->getProducto->id == 1 || $info_product->getProducto->id == 2 || $info_product->getProducto->id == 4)
            <div class="d-flex-column align-items-center justify-content-around ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->
                <h4 class="tx-info">Reconocimiento</h4>
                <dic class="row pd-y-20 pd-md-y-0">
                    <div class="col-md-6"><!--Profundidad-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Profundidad del diseño (mm):<span class="tx-danger"></span></label>
                            <input class="form-control" type="text" id="profundidadDiseno" name="profundidadDiseno" placeholder="" readonly>
                        </div>
                    </div><!-- col-4 -->
                    
                      <div class="col-md-6"><!--Diseño de Molde-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Profundidad actual (mm):<span class="tx-danger"></span></label>
                            <input class="form-control" type="text"   onkeypress="return filterFloat(event,this);" name="profundidadActual" id="profundidadActual" value="{{$info_product->profundidad}}" onchange="calcularPorcentaje()" placeholder="" required data-validate="parsley">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-12 "><!--Diseño de Molde-->
                        <label class="form-control-label">Porcentaje de reconocimiento (%):<span class="tx-danger"></span></label>
                        <div class="progress mg-b-20 ">
                          <div class="progress-bar progress-bar-lg progress-bar-striped bg-info wd-0p"
                          role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                          <p style="font-size: 18px;font-weight: bold;margin-top: 3px;">0%</p>
                          </div>
                        </div>
                    </div><!-- col-4 -->


                </dic>
            </div>
            
            @else
                <span id="EstatusOportunidad" class=" bg-warning info-box-icon elevation-3 ml-0 ml-sm-2 ml-lg-5 p-2 text-uppercase text-bold float-right" style="font-size: 25px;border-radius: 6px;color: #000 !important;">
                    {{$reclamo->estatusReclamo->first()->getEstatus->descripcion}}
                </span>
             @endif
             <input type="hidden" name="reconocimiento" id="reconocimiento" value="100">
    </div><!-- form-layout -->
</div> <!--br-section-wrapper-->
<div class="p-0">
      
    <div class="form-layout form-layout-1 p-1">
            <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->
                <h4 class="tx-info">Descripcion de la falla</h4>
                <div class="row pd-y-20 pd-md-y-0">

                    <!--Descripción-->
                    <div class="col-md-12"><!---->
                        <div class="form-group mg-b-10-force">
                            <div class="row mg-t-20">
                                <div class="col-lg">
                                    <textarea id="input_descripcion" rows="3" class="form-control" name="descripcion_falla" placeholder="Descripción de la falla" required data-validate="parsley"></textarea>
                                </div><!-- col -->
                            </div>

                        </div>
                    </div><!-- col-12 -->

                    <!--Archivos-->
                    <div class="col-md-12"><!---->
                        <div class="form-group mg-b-10-force">
                            <div class="row">
                              
                                <div class="col-auto"><!--archivo-->
                                <label class="form-control-label">Fotografía de Falla:</label>
                                <div class="form-group mg-b-10-force"><!--form-group mg-b-10-force-->
                                    <label class="custom-file">
                                        <input type="file" id="file" class="custom-file-input" name="foto_falla" value="{{ old('foto_falla') }}"required data-validate="parsley">
                                        <span class="custom-file-control custom-file-control-inverse"></span>
                                    </label>
                                    <!--
                                    <input type="file" class="@error('file') is-invalid @enderror" name="foto_falla" value="{{ old('foto_falla') }}">
                                        <label class="custom-file">
                                            <input type="file" class="custom-file-input">
                                            <span class="custom-file-control"></span>
                                        </label>


                                        <label class="custom-file">
                                        <input type="file" class="custom-file-input" name="foto_falla">
                                        <span class="custom-file-control"></span>
                                        </label>

                                    -->
                                    </div>
                                </div>
                                <div class="col-auto">
                                <img id="imagenAnalisis" alt="" width="100px">
                                </div>
                                
                            </div><!--row-->
                        </div><!--col-md-12-->
                    </div><!-- col-12 -->

                    
                </div><!--row-->
            </div>
    </div>
    <div class="form-layout form-layout-1 p-1">
        
            <div class="d-flex-column align-items-center justify-content-around ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->
                <h4 class="tx-info">Fallas</h4>
                <dic class="row pd-y-20 pd-md-y-0">
                <div class="col-12"><!--Medida-->

                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Dictamen:<span class="tx-danger"></span></label>
                            <select class="form-control" data-placeholder="" name="veredicto" id="veredicto">
                                <option value="true" selected>Procede</option>
                                <option value="false">No procede</option>
                            </select>
                        </div>
                    </div><!-- col-4 -->
                    <div id="divZona" class="col-md-6"><!--Marca-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">
                                Zona afectada:
                                <span class="tx-danger"></span>
                            </label>
                            <select class="form-control" name="zona" data-placeholder="Seleccione Tipo" required data-validate="parsley" id="zona">
                                <option label="Seleccione la zona"></option>
                                @foreach($zonas as $zona)
                                    <option value="{{$zona['id']}}" {{old('zona')==$zona['id'] ? 'selected' : ''}}>{{$zona['descripcion']}}</option>
                                @endforeach   
                            </select>
                        </div>

                    </div><!-- col-4 -->

                    <div  id="divFalla" class="col-md-6"><!--Modelo-->
                        <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Tipo de falla:<span class="tx-danger"></span></label>
                            <select class="form-control" name="rechazo" data-placeholder="Seleccione Tipo" required data-validate="parsley" id="rechazo">

                            </select>
                        </div>

                    </div><!-- col-4 -->
                    <div id="divAjuste" class="col-md-4 hidden"><!--Modelo-->
                        <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Ajuste político:<span class="tx-danger"></span></label>
                        <label class=" mg-t-15">
                          <input type="checkbox" name="ajusteComercial"><span> SI</span>
                        </label>
                        </div>
                    </div>

                    <div class="col-md-6">
	                    <div class="alert alert-warning">
	                      <h4 class="alert-heading">Posibles Causas</h4>
                          <ul id="contenidoCausas">

                          </ul>

	                    </div>
					</div>
                    <div class="col-md-6">
	                    <div class="alert alert-success">
	                      <h4 class="alert-heading">Recomendaciones</h4>
                          <ul id="contenidoRecomendaciones">

                        </ul>
	                    </div>
					</div>

                </dic>
            </div>

        
    </div>
</div>

    <div class="col-auto p-1">
        <button style="display:none"  onclick="analisis()" class="btn btn-success"><i class="far fa-save"></i> Guardar</button>
        <button id="otro" name="otrorasd" onclick="analisis()" class="btn btn-success"><i class="far fa-save"></i> Guardar</button>

    </div>

<script>
    
function filterFloat(evt,input){
    // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
    var key = window.Event ? evt.which : evt.keyCode;    
    var chark = String.fromCharCode(key);
    var tempValue = input.value+chark;
    if(key >= 48 && key <= 57){
        if(filter(tempValue)=== false){
            return false;
        }else{       
            return true;
        }
    }else{
          if(key == 8 || key == 13 || key == 0) {     
              return true;              
          }else if(key == 46){
                if(filter(tempValue)=== false){
                    return false;
                }else{       
                    return true;
                }
          }else{
              return false;
          }
    }
}
function filter(__val__){
    var preg = /^([0-9]+\.?[0-9]{0,2})$/; 
    if(preg.test(__val__) === true){
        return true;
    }else{
       return false;
    }
    
}
    function calcularPorcentaje(){
    var profundidadOriginal = $("#profundidadDiseno").val();
    var valor = $('#profundidadActual')[0].value; 
    var porcentaje = (valor*100)/profundidadOriginal;
    porcentaje = porcentaje.toFixed(2);
    if(porcentaje>100){
        porcentaje = 100;
        $('#profundidadActual')[0].value = profundidadOriginal;
    }
    var mostrarProgress = `
                        <div class="progress-bar progress-bar-lg progress-bar-striped bg-info " style="width: ${porcentaje}%"
                          role="progressbar" aria-valuenow="${porcentaje}" aria-valuemin="0" aria-valuemax="100">
                          <p style="font-size: 18px;font-weight: bold;margin-top: 3px;">${porcentaje}%</p>
                        </div>
    `
    $('.progress').html(''+mostrarProgress+'');
    $('#reconocimiento')[0].value = porcentaje;
    console.log($('#reconocimiento').val());
    }
    $('#veredicto').on('change', function() {
        
        var select_veredicto = document.getElementById('veredicto');
        if(''+select_veredicto.value+'' == 'true'){
            $('#divZona').removeClass('col-md-4');
            $('#divZona').addClass('col-md-6');
            $('#divFalla').removeClass('col-md-4');
            $('#divFalla').addClass('col-md-6');
            $('#divAjuste').addClass('hidden');
        }else{
            $('#divZona').addClass('col-md-4');
            $('#divZona').removeClass('col-md-6');
            $('#divFalla').addClass('col-md-4');
            $('#divFalla').removeClass('col-md-6');
            $('#divAjuste').removeClass('hidden');
        }
        buscarRechazo();
    });
    function buscarRechazo() {
        var select_veredicto = document.getElementById('veredicto');
        var zona = document.getElementById('zona');

        var dataRechazos = {!! json_encode($Rechazo) !!}
        var rechazo = $("#rechazo")[0];
        rechazo.length = 0;
            var index = 1;
            var causas_container = document.getElementById('contenidoCausas');
            var recomendaciones_container = document.getElementById('contenidoRecomendaciones');
            causas_container.innerHTML = "";
            recomendaciones_container.innerHTML = "";
        for (i = 0; i < dataRechazos.length; i++) {

            if(''+select_veredicto.value+'' == ''+dataRechazos[i]['procede']+'' && ''+zona.value+'' == ''+dataRechazos[i]['idZona']+'')
            {
                rechazo[index] = new Option(dataRechazos[i].descripcion, dataRechazos[i].id, "", "");

                index++;
            }

        }

    }
    $(document).ready(function() {
    calcularPorcentaje();
    
  });
    $('#zona').on('change', function() {

        buscarRechazo();

    });

    $('#rechazo').on('change', function() {
        var rechazo = document.getElementById('rechazo');
        var causas_container = document.getElementById('contenidoCausas');
        var recomendaciones_container = document.getElementById('contenidoRecomendaciones');
        var innerhtml1 = ""
        var innerhtml2 = ""
        $.ajax({
        url: "{{route('buscarFallas')}}/"+rechazo.value,
        type:"POST",
        data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        },
        success:function(response){
            for (i = 0; i < response['causas'].length; i++) {
                innerhtml1 += '<li>'+response['causas'][i]['descripcion']+'</li>'
                
            }
            for (i = 0; i < response['recomendaciones'].length; i++) {
                innerhtml2 += '<li>'+response['recomendaciones'][i]['descripcion']+'</li>'
                
            }
            
            causas_container.innerHTML = innerhtml1;
            recomendaciones_container.innerHTML = innerhtml2;
        },
       });

    });
   

</script>

