@extends('layouts.app')

@section('contenido')
<div class="br-pagebody mg-t-5 pd-15">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12">
        <div class="card w-100">

          <div class="card-header pt-3 pb-3">
            <div class="row justify-content-center">
              <div class="col align-self-center">
                <h3 class="tx-uppercase tx-bold text-center mb-0">Solicitud de Garantías</h3>
              </div>
            </div>
          </div>
<!--1 4 2 3, para que quede 1(Datos de la Factura) 2(Condición del Caucho) 3(Datos del Producto) 4(Datos del Vehículo)-->
          <div class="card-body">
            
            <form action="{{route('warranty.store')}}" method="POST" class="parsley-style-1" name="form" id="form" enctype="multipart/form-data">
            @csrf
            <div id="wizard" class="">
                <h3>Datos de la Factura</h3>
                <section>
                  @include('warranty.components.invoice')
                </section>
                
                <h3>Condición del Producto</h3>
                <section>
                  @include('warranty.components.questions')
                </section>

                <h3>Datos del Producto</h3>
                <section>
                  @include('warranty.components.product')
                </section>

                <h3>Datos del Vehículo</h3>
                <section>
                  @include('warranty.components.vehicle')
                </section>
              </div>
            </form>
          </div><!--cardbody-->
        
        </div><!-- card w-100 -->
      </div><!-- col-12 -->
    </div><!--row-->
  </div>

</div><!--pagebody-->

@include('layouts.alerts');
<script>
  $(document).ready(function(){
        
        ActivateNavLink("nav-link_wc");

    });
  let idEstado = 1;
  let idEstatus = 1;

  $('#wizard').steps({

    labels: {
      current: "Paso actual:",
      pagination: "Paginación",
      finish: "Finalizar",
      next: "Siguiente",
      previous: "Anterior",
      loading: "Cargando ..."
    },
    headerTag: 'h3',
    bodyTag: 'section',
    autoFocus: true,
    titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
    
    onFinished: function (event, currentIndex) {
      let campos1 = [$('#selectTipoVehiculo').parsley(),
                        $('#selectKilometraje').parsley(),
                        $('#selectMarcaVehiculo').parsley(),
                        $('#selectModeloVehiculo').parsley(),
                        $('#selectCargaVehiculo').parsley(),
                        $('#selectAnchoRin').parsley(),
                        $('#selectTipoCarga').parsley(),
                        $('#selectTipoTerreno').parsley(),
                        $('#selectPsi').parsley(),]
      if(!ValidateArray(campos1)){
        for(let i = 0; i<campos1.length;i++){
              campos1[i].validate();
              
            }
        return;
      }
      else
      {
        console.log('no deberias estar funcionando');
        var condiciones1 = JSON.parse(window.localStorage.getItem('condicionesActivo'));
        var condicionesRespuestas1 = JSON.parse(window.localStorage.getItem('condicionesRespuesta'));
        var allConditions = true;
        for(let i = 0 ; i< condiciones1.length ; i++){
          if(condiciones1[i] != condicionesRespuestas1[i]){
            allConditions = false;
          }
        }
        if(allConditions){
          writeInDB(1,1,'procesado','pendiente por guia');
        }
        else{
          $('#Modalcondicion').modal('toggle');
        }
        var Diagrama = document.getElementById('');
      }      
    },
    onStepChanging: function (event, currentIndex, newIndex) {
      
      if(currentIndex < newIndex) {
       
        switch(currentIndex){
          case 0:
            campos1 = [$('#nro_factura').parsley(),          
                          $('#input_Rif').parsley(), 
                          $('#input_nombre').parsley(),
                          $('#input_address').parsley(),
                          $('#input_cod').parsley(),
                          $('#input_date').parsley(),
                         
                          $('#input_address').parsley(),   
                          $('#input_descripcion').parsley(),    
                          $('#input_tlf').parsley(), 
                          $('#input_CodCompra').parsley()                                                 
                          ];
                          break;
          case 1:
            campos1 = [$('#select_tipo').parsley(),$('#text_observaciones').parsley() ];
            break;
          case 2:
            let arrayte = [         $("#input_valvula"),
                                    $("#input_dot"),
                                    $("#input_brand"),
                                    $("#input_model"),
                                    $("#input_medida"),
                                    $("#input_molde"),
                                    $("#input_molde"),
                                    $("#input_dept"),
                                    $("#input_boleta"),
                                    $("#input_serial"),
                                     ]
              let camposPrueba = [
                                  $("#selectValvula"),
                                  $("#dotserial"),
                                  $("#marcaCaucho"),
                                  $("#modeloNeumatico"),
                                  $("#medidaNeumatico"),
                                  $("#disenoNeumatico"),
                                  $("#idProfundidad"),
                                  $("#profundidadNeumatico"),
                                  $("#boletaNeumatico"),
                                  $("#serialNeumatico")];
                                  let count = 0;
                                  campos1 = [];
            for (let i = 0; i< camposPrueba.length;i++){
              if(!arrayte[i].hasClass("Hidden")){
                campos1[count] = camposPrueba[i].parsley();
                count++;
              }
            }
            
            break;
          
        }
        return ValidateArray(campos1);
   
      // Always allow step back to the previous step even if the current step is not valid.
      } else { return true; }
      return true;
    }
  
  });
function ValidateArray(campos1){
  var activoBool = true;
          for(let i = 0; i<campos1.length;i++){
            if(!(campos1[i].isValid())){
              console.log(i);
              activoBool = false;
            }
          }
          if(activoBool) {
            return true;
          } else {
            for(let i = 0; i<campos1.length;i++){
              campos1[i].validate();
              
            }
            return false;
          }
}
function hideModalData(){
  document.getElementById("button1").style.display = "block";
  document.getElementById("button2").style.display = "none";
  document.getElementById("textHide").style.display = "none";
  document.getElementById("textLargeHide").style.display = "block";
  document.getElementById("hidebtn").style.display = "none";

      
}
function writeInDB(idEstado, idEstatus, descripcionEstatus, descripcionEstado){
  
  let input_nombre = document.getElementById('input_nombre');
      let input_tlf = document.getElementById('input_tlf');
      let input_address = document.getElementById('input_address');
      //factura
      let input_cod= document.getElementById('input_cod');
      let input_date= document.getElementById('input_date');
      let input_precio= document.getElementById('input_precio');
      let input_IVA= document.getElementById('input_IVA');
      let input_montoIVA= document.getElementById('input_montoIVA');
      let input_descripcion= document.getElementById('input_descripcion');
      let input_Rif = document.getElementById('input_Rif');
      let ComprarIndice = window.localStorage.getItem('CompraDataIndex');
      let CompraData = JSON.parse(  window.localStorage.getItem('CompraData'))[ComprarIndice];
      let ItemData = JSON.parse(  window.localStorage.getItem('ItemData'));
      let ItemIndex =  window.localStorage.getItem('ItemDataIndex');
      let ItemDataParsed = ItemData[ItemIndex];
   
          let cold = document.getElementById('cold').checked;
          if( cold){
            cold = 1;
          }else{
            cold=0;
          }
  let dataJson = {
        "_token": $("meta[name='csrf-token']").attr("content"),
        'idTipoDiagrama':window.localStorage.getItem('idTipoDiagrama'),
        'factura': document.getElementById('nro_factura').value,
        'fechaFactura': ParseDateToUSA(input_date.value),
        'precio':input_precio.value,
        'iva':input_IVA.value,
        'mtoTotal':input_montoIVA.value,
        'rif': input_Rif.value,
        'nombre' : input_nombre.value,
        'telefono':document.getElementById("input_tlf").value,
        'email':document.getElementById("input_email").value,
        'direccion': input_address.value,
        'observacion': document.getElementById("text_observaciones").value,
        'codigoSucursal': 'todo',
        'codigoWeb': '0',
        'codigoLocal': '1',
        'activo' : 0,
        'idUsuario' : 0,
        'condiciones': JSON.parse(  window.localStorage.getItem('condiciones')),
        'condiciones_activo':JSON.parse(window.localStorage.getItem('condicionesActivo')),
        'posicion': window.localStorage.getItem('posicion'),
        'id_diagrama':window.localStorage.getItem('idTipoDiagrama'),
        'seleccionado': 1,
        'contenidoDiagrama': window.localStorage.getItem('contenidoDiagrama'),
        'idEstado' : idEstado,
        'observacionEstado':descripcionEstado,
        'observacionEstatus':descripcionEstatus,
        'idEstatus':idEstatus,
        'diagramaContenido': window.localStorage.getItem('diagramaContenido'),
        'descripcionEspecial': document.getElementById('textareabig').value,
        'idProfundidad':1,
        //items  
        'CodItem':ItemDataParsed.CodItem,
        'ItemDescripcion':ItemDataParsed.Descrip1,
        'ItemCantidad':ItemDataParsed.Cantidad,
        'TotalItem':ItemDataParsed.TotalItem,
        'CostoItem':ItemDataParsed.Costo,
        'PrecioItem':ItemDataParsed.Precio,
        'MtoTaxItem':ItemDataParsed.MtoTax,
        'nombre_foto':"phtot",
        'descripcion_foto':"phptp",
        'idTipoVehiculo':document.getElementById('selectTipoVehiculo').value,
        'idMarca':document.getElementById('selectMarcaVehiculo').value,
        'idModelo':document.getElementById('selectModeloVehiculo').value,
        'idCargaVehiculo':document.getElementById('selectCargaVehiculo').value,
        'idTipoCargaVehiculo':document.getElementById('selectTipoCarga').value,
        'kilometraje':document.getElementById('selectKilometraje').value,
        'anchoRin':document.getElementById('selectAnchoRin').value,
        'psi':document.getElementById('selectPsi').value,
        'idEjeVehiculo':0,///agregar a vista de vehiculo
        ///informacion del producto
        'idProducto' : document.getElementById('select_tipo').value,
        //'idPais' = null, 
        'idMarcaCaucho': document.getElementById('marcaCaucho').value,
        'idModeloCaucho' : document.getElementById('modeloNeumatico').value,

        'idMedidaCaucho': document.getElementById('medidaNeumatico').value,
        'idDisenoBanda': document.getElementById('disenoNeumatico').value,
        'idProfundidad': document.getElementById('idProfundidad').value,
        'dotSerial': document.getElementById('dotserial').value,
        'profundidad': document.getElementById('profundidadNeumatico').value,
        'boleta': document.getElementById('boletaNeumatico').value,
        'tipoRenovado': cold,
        'serial': document.getElementById('serialNeumatico').value,
        //'loteBanda'= null,
        //'loteVulcanizacion'= document.getElementById('modeloNeumatico'),
        //'loteProducto'= document.getElementById('modeloNeumatico'),
        //'valvula'= document.getElementById('modeloNeumatico'),
        'fechaRecepcion': Date.now().toString(),
        'DCompra' :CompraData.NumeroD,
        'FechaCompra':CompraData.FechaI,
        'ProvCompra':CompraData.CodProv ,
        'DesCompra':CompraData.Descrip,
        'MonCompra':CompraData.Monto,
        'TaxDCompra':CompraData.MtoTax,
        'TexDCompra':CompraData.TExento,
        'Direc1': CompraData.Direc1,
        'posicionCamara':window.localStorage.getItem("PosicionCamara"),
        'allDiagrama': document.getElementById("allDiagrama").innerHTML ,
        }
  let formData =new FormData($('form')[1]);
  let formDataReal = new FormData();

  for (var key in dataJson){
    var value = dataJson[key];
    if(value == null){
      value = "";
    }
    
    formDataReal.append(key,value);
  }
  

  for (var pair of formDataReal.entries()) {
    console.log(pair[0]+" , "+pair[1]);
    if(pair[0] == "foto_falla"){
     
    }
  }
  if($('input[type=file]')[0].files[0] != null){
    formDataReal.append("image", $('input[type=file]')[0].files[0]);
   formDataReal.append("tipo", $('input[type=file]')[0].files[0]["type"]);
  }
  
 
console.log( $('input[type=file]')[0].files[0]);
  console.log(document.getElementById('idProfundidad').value);

   
      $.ajax({
        url: '<?php echo route('Warrantystore'); ?>',
        type:"POST",
        data: formDataReal,
        contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
        processData: false,
        success: function(data){
          if(data.isSuccess){
            window.location.href = "{{route('warranty.index')}}";
          }else{
            Toast.fire({
                    type: 'error',
                    title: data.message
            
          });
          }
         
             
          
        }
        });
}
</script>
<div class="modal fade " id="Modalcondicion" tabindex="-1" role="dialog" aria-labelledby="Modalcondicion" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" style="width:50rem;">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title text-bold" id="ModalcondicionTitle">¡Atención!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal_body">
        <div class="container">

          <div class= "row">
            <div class="col">
              <h5 id="textHide" class="text-bold">El objeto de garantía no cumple con los requisitos mínimos para generar una solicitud. ¿DESEA APELAR LA SOLICITUD?</h5>

              <div class="form-group mg-b-10-force" id="textLargeHide" style="display:none">
                <h5 id="textHide" class="text-bold">Justifique el motivo de apelación</h5>

                            <div class="row mg-t-20">
                                <div class="col-lg">
                                    <textarea id="textareabig" rows="3" class="form-control" name="descripcion_solicitud" placeholder="Observaciones">{{old('descripcion_solicitud')}}</textarea>
                                </div><!-- col -->
                            </div>

                        </div>
            </div>
            
          </div>
        </div>

   
      </div>
      <div class="modal-footer">
        <div class="container">
          <div class="row justify-content-around">
            <div class= col-auto>
              <button id="button1" type="button" class="btn btn-primary " style="display:none"  onclick="writeInDB(2,3,'especial','espera por aprobación')" >Apelar</button>
            </div>
          </div>
          <div class="row justify-content-around">
          <div class="col-auto">
              <button id="hidebtn" type="button" class="btn btn-primary" onclick="hideModalData()" >Apelar</button>
              
              </div>
          <div class="col-auto">
              <button id="button2" type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalConfirmarRechazo" >No apelar</button>
              </div>
              
            



          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!--modal de alerta-->
<div class="modal fade " id="ModalConfirmarRechazo" tabindex="-1" role="dialog" aria-labelledby="ModalConfirmarRechazo" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" style="width:50rem;">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title text-bold" id="ModalConfirmarRechazoTitle">¡Alerta!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="ModalConfirmarRechazo_body">
        <div class="container">
          <br/>
          <div class= "row">
            <div class="col">
              <h5 id="textHide" class="text-bold">¿Esta seguro de su eleccion?</h5>
    
              
            
          </div>
          
        </div> 
        <br/>  
      </div>
      <div class="modal-footer">
        <div class="container">
         
          <div class="row justify-content-around">
          <div class="col-auto">
              <button id="" type="button" class="btn btn-primary" data-dismiss="modal" >Volver</button>
              
              </div>
          <div class="col-auto">
              <button id="button2" type="button" class="btn btn-danger" onclick="writeInDB(6,2,'No Procesado','La garantía no cumple las condiciones')" >No apelar</button>
              </div>
              
            



          </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection
<script>
  function ConfirmarRechazo(){
    
  }
</script>