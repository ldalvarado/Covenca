@extends('layouts.app')

@section('contenido')
<div class="br-pagebody mg-t-5 pd-15">

<br />
<div class="text-left">
    <a class="btn boton_personalizado" href="{{url('/Garantia/Credito')}}"><i class="fas fa-undo-alt"></i> <span class="textoBoton">Regresar</span></a>
</div>

<div class="row mt-2">
    <div class="col-md-12">
        <form action="" id="form" method="POST" class="parsley-style-1" >
        <input type="hidden" name="idReclamo" value="{{$reclamo->id}}">
            <div class="card" style="">
                <div class="card-header">
                    <h3 class="text-bold">CREDITO</h3>
                </div>


                <div class="card-body">

                    <section class="content">
                        <div class="">




                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <!-- SEGUNDA VISTA: Información del Producto -->
                                      <div class="p-0">

                                        <div class="form-layout form-layout-1 p-2">

                                                <div class="row">
                                                  <div class="col-md-12">
                                                  <div class="pull-left text-left">
				                            		<address>
                                                    <h4 class="tx-info">Detalles del Producto</h4>
                                                    <h5 class="font-bold"> <span>{{$info_product->getProducto->descripcion}}</span></h5>
				                            			<p class="text-muted m-l-5">
                                                            <b class ="font-bold">Numero de Garantia:</b>{{$reclamo->codigoSucursal}}<br/>
                                                            @if($info_product->getProducto->DatosCampos->serial)
                                                            <b class="font-bold">Serial:</b> {{$info_product->serial}}
				                            				<br/>
                                                            @endif
                                                            @if($info_product->getProducto->DatosCampos->boleta)
                                                            <b class="font-bold">Boleta:</b> {{$info_product->boleta}}
				                            				<br/>
                                                            @endif
                                                            @if($info_product->getProducto->DatosCampos->tipo_renovado)
                                                            <b class="font-bold">Tipo de renovado:</b> {{$info_product->tipoRenovado}}
				                            				<br/>
                                                            @endif

                                                            @if($info_product->getProducto->DatosCampos->diseno )
                                                            <b class="font-bold">Diseño:</b> {{$info_product->Diseno->descripcion}}
				                            				<br/>
                                                            @endif
                                                            @if($info_product->getProducto->DatosCampos->profundidad)
                                                            <b class="font-bold">Profundidad:</b> {{$info_product->profundidad}}
				                            				<br/>
                                                            @endif
                                                            @if($info_product->getProducto->DatosCampos->medida )
                                                            <b class="font-bold">Medida:</b> {{$info_product->medidaCaucho->descripcion}}
				                            				<br/>
                                                            @endif
                                                            @if($info_product->getProducto->DatosCampos->modelo )
                                                            <b class="font-bold">Modelo:</b> {{$info_product->modelCaucho->descripcion}}
				                            				<br/>
                                                            @endif
                                                            @if($info_product->getProducto->DatosCampos->marca)
                                                            @if($info_product->getProducto->id == 5)
                                                                <b class="font-bold">Marca:</b> {{$info_product->marcaProtector->descripcion}}
                                                                <br/>
                                                            
                                                            @elseif($info_product->getProducto->id == 3)
                                                                <b class="font-bold">Marca:</b> {{$info_product->marcaCamara->descripcion}}
                                                                <br/>
                                                            @else 
                                                                <b class="font-bold">Marca:</b> {{$info_product->marcaCaucho->descripcion}}
                                                                <br/>
                                                            @endif
                                                            

                                                            @endif
                                                            @if($info_product->getProducto->DatosCampos->dotSerial )
                                                            <b class="font-bold">Dot Serial:</b> {{$info_product->dotSerial}}
				                            				<br/>
                                                            @endif
                                                            @if($info_product->getProducto->DatosCampos->valvula )
                                                            <b class="font-bold">Valvula:</b> {{$info_product->valvula}}
				                            				<br/>
                                                            @endif
                                                            @if($info_product->getProducto->DatosCampos->fecha_recepcion )
                                                            <b class="font-bold">Fecha de recepción:</b> <?= date('d/m/Y',strtotime($info_product->fechaRecepcion)) ?>
				                            				<br/>
                                                            @endif
                                                            
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
                                                            
                                                            @if($info_product->getProducto->DatosCampos->pais )
                                                            <b class="font-bold">Pais:</b> {{$info_product->idPais}}
				                            				<br/>
                                                            @endif

				                            			</p>

				                            		</address>
				                            	</div>
                                                  </div>
                                                  <div class="col-md-6 hidden">
                                                    <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Producto-->
                                                        <h4 class="tx-info">Datos de producción</h4>
                                                        <div class="row pd-y-20 pd-md-y-0">
    
                                                            <div class="col-md-6"><!--Tipo Producto-->
                                                                <div class="form-group mg-b-10-force">
                                                                    <label class="form-control-label">
                                                                        Renovadora:
                                                                        <span class="tx-danger"></span>
                                                                    </label>
                                                                    <input class="form-control" type="text" name="client_name" value="" placeholder="" disabled>
                                                                </div>
                                                            </div><!-- col-6 -->
    
                                                            <div class="col-md-6"><!--DOT-SERIAL-->
                                                                <div class="form-group mg-b-10-force">
                                                                    <label class="form-control-label">Boleta:<span class="tx-danger"></span></label>
                                                                    <input class="form-control" type="text" name="client_name" value="" placeholder="" disabled>
                                                                </div>
                                                            </div><!-- col-6 -->
    
    
                                                            <div class="col-md-6"><!--Marca-->
                                                                <div class="form-group mg-b-10-force">
                                                                    <label class="form-control-label">Tipo de renovado:<span class="tx-danger"></span></label>
                                                                    <input class="form-control" type="text" name="client_name" value="" placeholder="" disabled>
                                                                </div>
                                                            </div><!-- col-4 -->
    

    
                                                            <!--Otra fila-->
                                                            <div class="col-md-6"><!--Medida-->
                                                                <div class="form-group mg-b-10-force">
                                                                    <label class="form-control-label">Diseño de banda:<span class="tx-danger"></span></label>
                                                                    <input class="form-control" type="text" name="client_name" value="" placeholder="" disabled>
                                                                </div>
                                                            </div><!-- col-4 -->
                                                            <div class="col-12"><!--Modelo-->
                                                                <div class="form-group mg-b-10-force">
                                                                    <label class="form-control-label">Serial de producción:<span class="tx-danger"></span></label>
                                                                    <input class="form-control" type="text" name="client_name" value="" placeholder="" disabled>
                                                                </div>
                                                            </div><!-- col-4 -->

    
                                                        </div><!--row-->
                                                    </div><!--d-flex-->
                                                  </div>
                                                </div>
 


                                  
                                        </div><!-- form-layout -->
                                      </div> <!--br-section-wrapper-->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                    <section class="p-0">
                           <div class="p-0">
      
                               <div class="form-layout form-layout-1 p-1">
                                       <div class="d-flex-column align-items-center justify-content-around ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->

                                          <dic class="row pd-y-20 pd-md-y-0">
                                             <div class="col-12">
                                            <h4 class="tx-info">Documento de Compra</h4>
				                             	<div class="pull-left">
				                             		<address>

				                             			<h5 class="font-bold"> <span>{{$reclamo->ReclamoCompra->NumeroD}}</span></h5>
				                             			<p class="text-muted m-l-5">
				                             				<b class="font-bold">Fecha:</b> <?= date('d/m/Y',strtotime($reclamo->ReclamoCompra->Fecha)) ?>

				                             			</p>
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

                                              <div class="col-12">
				                            	<div class="text-left">
				                            		<address>
                                                    <h4 class="tx-info">Producto</h4>
                                                        <b class="font-weight-bold">Código del producto:</b> {{$reclamo->DocVenta->CodItem}}
					                                    <br/><b class="font-weight-bold">Descripción:</b> {{$reclamo->DocVenta->descripcion}}
					
                                                        <br/><b class="font-bold">Precio del producto:</b>
                                               {{$reclamo->DocVenta->Precio}}

				                            		</address>
				                            	</div>
				                            </div>

                                          </dic>
                                       </div>
                               </div><!-- form-layout -->
                           </div> <!--br-section-wrapper-->

                           
                    </section>
                    <section class="content">
                        <div class="container pb-2">
                          <div class="form-layout form-layout-1 p-2">
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-success text-center" id="Message">
  
                                    </div>

                                </div>
                            </div>

                                    <div class="row pb-2">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col align-self-center">
                                                            <h4 class=" text-bold text-left mb-0">Detalle del documento de venta</h4>
                                                        </div>
          
                                                    </div>

                                                </div>

                                                <!-- /.card-header -->
                                                <div class="card-body table-responsive p-0">
                                                    <table id="tableProductos" class="table table-hover overflow-auto">
                                                        <thead class="" style=" background-color: dodgerblue; color: white;">
                                                            <tr>
                                                                <th class="">PRODUCTO</th>
                                                                <th class="">DESCRIPCION</th>
                                                                <th class="">FACTURA DE VENTA</th>
                                                                <th class="text-center">FECHA</th>

                                                                <th class="text-center">IVA</th>
                                                                <th class="text-center">COSTO</th>
                                                                <th class="text-center">PRECIO VENTA</th>
                                                            </tr>                                                         
                                                        </thead>
                                                        <tbody>
                                                        @foreach($DocventaReclamo as $Doc)

                                                                    <tr>
                                                                        <td name="codItem" class="cart_one" style=" vertical-align: middle;">
                                                                            <div class="cart_text p-0">
                                                                                {{$Doc->CodItem}}
                                                                            </div>
                                                                        </td>
                                                                        <td name="descri" class="cart_two text-right" style="min-width: 150px;">
                                                                            <div class="btn-group">
                                                                            {{$Doc->descripcion}}

                                                                            </div>
                                                                        </td>
                                                                        <td name="Cantidad" class="cart_two text-right" style="min-width: 150px;">
                                                                            <div class="btn-group">
                                                                            {{$reclamo->factura}}

                                                                            </div>
                                                                        </td>
                                                                        <td name="ADESCTO" class="cart_two text-center">
                                                                        {{$reclamo->fechaFactura}}
                                                                        </td>
                                                                        <td name="iva" class="cart_two text-center">

                                                                        {{$Doc->MtoTax }}
                                                                        </td>
                                                                        <td class="cart_two text-center">

                                                                        {{$Doc->Costo }}
                                                                        </td>
                                                                        <td  class="cart_two text-center totalImporte">

                                                                        <input class="form-control form-control-sm" type="text" id="precioVenta" name="precioVenta"  onkeypress="return filterFloat(event,this);" readonly value="{{$Doc->Precio }}" placeholder="">

                                                                        </td>
                                                                    </tr>
             
                                                         @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                            </div>



                        </div>

                    </section>
                    <section>
                      <div class="container">
                        <div class="row">
                          <div class="col-12">
                                  
                            <div class="form-layout form-layout-1 p-2">
                                
                                    <div class="d-flex-column align-items-center justify-content-around ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->
                                        <h4 class="tx-info">CRÉDITO</h4>
                                        <div class="row pd-y-20 pd-md-y-0">
                                        @if($info_product->getProducto->id == 1 || $info_product->getProducto->id == 2 )
                                            <div class="col-6 col-md-4"><!--Profundidad-->
                                                <div class="form-group mg-b-10-force">
                                                    <label class="form-control-label">Profundidad del diseño (mm):<span class="tx-danger"></span></label>
                                                    <input class="form-control" type="text" id="profundidadDiseno" name="profundidadDiseno" value="{{$reclamo->InfoProductoAnalisis->Profundidad->descripcion}}" placeholder="" readonly>
                                                </div>
                                            </div><!-- col-4 -->
                                            
                                            <div class="col-6 col-md-4"><!--Diseño de Molde-->
                                                <div class="form-group mg-b-10-force">
                                                    <label class="form-control-label">Profundidad actual (mm):<span class="tx-danger"></span></label>
                                                    <input class="form-control" type="number" id="profundidadActual" name="client_name" value="{{$reclamo->Analisis->profundidadActual}}" readonly placeholder="">
                                                </div>
                                            </div><!-- col-4 -->
                                            <div class="col-md-4"><!--Diseño de Molde-->
                                                <label class="form-control-label">Vida util restante (%):<span class="tx-danger"></span></label>
                                         
                                                <div class="progress mg-b-20 ">
                                                  <div class="progress-bar progress-bar-lg progress-bar-striped bg-info wd-53p"
                                                  role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                  <p style="font-size: 18px;font-weight: bold;margin-top: 3px;"  style="width: <?php echo $reclamo->Analisis->porcentaje?>"><?php echo $reclamo->Analisis->porcentaje?></p>
                                                  </div>
                                                </div>
                                            </div><!-- col-4 -->
                                        @endif
                                            <div class="col-md-6"><!--Profundidad-->
                                                <div class="form-group mg-b-10-force">
                                                    <label class="form-control-label">Nro. Nota de Crédito:<span class="tx-danger"></span></label>
                                                    <input class="form-control" type="text" name="nroCredito" value="" placeholder="">
                                                </div>
                                            </div><!-- col-4 -->
                                            <!--Profundidad
                                            <div class="col-md-6">
                                                <div class="form-group mg-b-10-force">
                                                    <label class="form-control-label">Nro Control Fiscal:<span class="tx-danger"></span></label>
                                                    <input class="form-control" type="text"  name="nroControl" value="" placeholder="">
                                                </div>
                                            </div> -->
                                           
                                            <div class="col-md-6"><!--Profundidad-->
                                                <div class="form-group mg-b-10-force">
                                                    <label class="form-control-label">Porcentaje de reconocimiento (%):<span class="tx-danger"></span></label>
                                                    
                                                    <input class="form-control" type="text" id="reconocimiento" name="reconocimiento"  readonly onkeypress="return filterFloat(event,this);" value="{{$reclamo->Analisis->porcentaje}}"  placeholder="">
                                                </div>
                                            </div><!-- col-4 -->
                                            <div class="col-md-6"><!--Profundidad-->
                                                <div class="form-group mg-b-10-force">
                                                    <label class="form-control-label">Monto a pagar ($):<span class="tx-danger"></span></label>
                                                    <input class="form-control" type="text" id="credito" name="credito" onkeypress="return filterFloat(event,this);" value="" placeholder="" >
                                                </div>
                                            </div><!-- col-4 -->                                     
                              
                                                <div class="col-md-6"><!--archivo-->
                                                <label class="form-control-label">Nota de Crédito:</label>
                                                <div class="form-group mg-b-10-force"><!--form-group mg-b-10-force-->
                                                    <label class="custom-file">
                                                        <input type="file" id="file" class="custom-file-input" name="foto_falla" required data-validate="parsley" value="{{ old("foto_falla") }}">
                                                        <span class="custom-file-control custom-file-control-inverse"></span>
                                                    </label>

                                                    </div>
                                                </div>
                                               

                                        </div>
                                    </div>

  
                            </div><!-- form-layout -->
                          </div>
                        </div>
    
                        <div class="row text-right">
                                <div class="col-md-12 pl-4">
                                    <div class="text-left">
                                        <div class="btn-group  btn-flotante ">
                                            <button id="btnRegistrar" onclick="crearCredito()" class="btn btn-success  btn-lg text-lg text-bold text-center " name="buttonAction" value="Registrar">Registrar</button>
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
        
        ActivateNavLink("nav-link_wcr");

    });
    $fotoInput = $('#file');
      var image64 = "";
    $fotoInput.on('change',function(e){
      var formData = new FormData();
      var fileName = document.getElementById("file").files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
        
       

        

    });
  $(document).ready(function() {
    //calcularPorcentaje();
    calcularCredito();
  });
  $(document).on('keydown', 'input[pattern]', function(e){
  var input = $(this);
  var oldVal = input.val();
  var regex = new RegExp(input.attr('pattern'), 'g');
  
  setTimeout(function(){
    var newVal = input.val();
    console.log(regex.test(oldVal));
    console.log(regex.test(newVal));
    if(!regex.test(newVal)){

      input.val(oldVal); 
    }
  }, 0);
});

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

$(document).on('input', '#precioVenta', function(){
    calcularCredito();
});
$(document).on('input', '#reconocimiento', function(){
    calcularCredito();
});
function calcularPorcentaje(){
    var profundidadOriginal = $("#profundidadDiseno").val();
    var valor = $("#profundidadActual").val(); 
    var porcentaje = (valor*100)/profundidadOriginal;
    porcentaje = Math.round(porcentaje.toFixed(2));
    if(porcentaje>100){
        porcentaje = 100;
        elemento.value = profundidadOriginal;
    }
    var mostrarProgress = `
    <div class="progress-bar progress-bar-lg progress-bar-striped bg-info " style="width: ${porcentaje}%"
                          role="progressbar" aria-valuenow="${porcentaje}" aria-valuemin="0" aria-valuemax="100">
                          <p style="font-size: 18px;font-weight: bold;margin-top: 3px;">${porcentaje}%</p>
                        </div>
    `
    $('.progress').html(''+mostrarProgress+'');
    $('#reconocimiento').val(porcentaje);
}
function calcularCredito(){
    var porcentaje = $("#reconocimiento").val();
    var precioVenta = $("#precioVenta").val();

    var resultadoCredito = (precioVenta*porcentaje)/100;
    resultadoCredito = resultadoCredito.toFixed(2);

    $('#credito').val(resultadoCredito);

}

function crearCredito() {
            event.preventDefault();
  var data = $("#form").serialize();  
  var formData = new FormData($('#form')[0]);
  if($('input[type=file]')[0].files[0] != null){
    formData.append("pdf", $('input[type=file]')[0].files[0]);
    formData.append("tipo", $('input[type=file]')[0].files[0]["type"]);


    let image = document.getElementById('file').files[0];
      if (image.size > 50 * 1000000) {
        alert('Select a smaller image');
        return;
      }
      const reader = new FileReader();
      reader.readAsDataURL(image);
      reader.onload = (e) => {
        const result = e.target.result;
        const extension = result.split(';')[0].split('/')[1];
        if(extension != 'pdf'){
            Toast.fire({
                    type: 'error',
                    title: 'Seleccione un archivo de formato pdf'
            })
        }
      };




  }
      $.ajax({
        url: "{{route('Credito.store')}}",
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