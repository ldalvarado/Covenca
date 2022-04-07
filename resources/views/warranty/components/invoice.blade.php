<div class="br-section-wrapper pd-30-force">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <div class="form-layout form-layout-1">
            <div class="d-flex align-items-center justify-content-start bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Buscar-->

                <div class="row wd-100v pd-y-20 pd-md-y-0">

                        <!--Nro Factura-->
                        <div class="col-md-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Número de Factura<span class="tx-danger">*</span></label>
                                <div class="input-group">
                                    @csrf
                                    <input class="form-control" type="text" name="nro_factura" id="nro_factura" placeholder="Introduzca número de factura" required value="{{ old('nro_factura') }}">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
                                    <span class="input-group-btn">
                                        <button class="btn bd bg-white tx-gray-600" type="button" id="buscaFactura"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div><!-- col-5 -->

                        <!--Btn Buscar-->
                        <!--<div class="col-md-2">
                            <div class="d-flex align-items-center justify-content-center" style="height: 100%">
                                <button class="btn btn-info p-2 bd-0 tx-spacing-2">
                                    <a href="{{url('/buscarCedula')}}" class="btn btn-info p-0" tabindex="5">
                                        <i class="icon ion-search"></i>
                                    </a>
                                </button>
                            </div>
                        </div>-->


                    <!--RIF/Cedula-->
                        <div class="col-md-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">RIF/Cédula<span class="tx-danger">*</span></label>
                                <div class="input-group">
                                    @csrf                  
                                    <input class="form-control" type="text" id="input_Rif" name="input_Rif" placeholder="Introduzca el RIF o Cédula" required data-validate="parsley">
                                    <span class="input-group-btn">
                                        <button class="btn bd bg-white tx-gray-600" type="button" id="buscaRIF" ><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div><!-- col-6 -->
                        <!--<div class="col-md-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">RIF/Cédula<span class="tx-danger"></span></label>
                                <input class="form-control" type="text" name="rif" placeholder="Introduzca el RIF o Cédula" value="{{ old('rif') }}">
                            </div>
                        </div>--><!-- col-5 -->

                    <!--Btn Buscar-->
                    <!--<div class="col-md-2">
                        <div class="d-flex align-items-center justify-content-center" style="height: 100%">
                            <button class="btn btn-info p-2 bd-0 tx-spacing-2">
                                <a href="{{url('/warranty')}}" class="btn btn-info p-0" tabindex="5">
                                    <i class="icon ion-search"></i>
                                </a>
                            </button>
                        </div>
                    </div>-->
                </div><!--row-->
            </div><!-- d-flex -->

            <!--Compra-->
                 
            <div id="" style="" class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Cliente-->
                <h4 class="tx-info">Documento de Compra</h4>
                <div class="row pd-y-20 pd-md-y-0">
                    <div class="col-12 col-md-6"><!--Nombre o Razón Social-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Codigo Compra: <span class="tx-danger">*</span></label>
                            <input class="form-control" id="input_CodCompra" type="text" name="nombre_cliente" disabled required data-validate="parsleys">
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-12 col-md-6"><!--Nombre o Razón Social-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Fecha: <span class="tx-danger">*</span></label>
                            <input class="form-control" id="input_fecha" type="text" name="nombre_cliente" disabled required value="{{ old('nombre_cliente') }}">
                        </div>
                    </div><!-- col-6 -->
                   
                    
                </div><!--row-->
            </div><!--d-flex-->


            <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Cliente-->
                <h4 class="tx-info">Cliente</h4>
                <div class="row pd-y-20 pd-md-y-0">
                    <div class="col-md-12"><!--Nombre o Razón Social-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Nombre/Razón Social: <span class="tx-danger">*</span></label>
                            <input class="form-control" id="input_nombre" type="text" name="nombre_cliente" placeholder="Introduzca el Nombre o Razón Social" required value="{{ old('nombre_cliente') }}">
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-md-6"><!--Teléfono-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Teléfono: <span class="tx-danger">*</span></label>
                            <input class="form-control" id="input_tlf" type="text" name="nro_telefono" placeholder="Introduzca el Número de Teléfono" required value="{{ old('nro_telefono') }}">
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-md-6"><!--Teléfono-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                            <input class="form-control" id="input_email" type="text" name="input_email" placeholder="Introduzca su Email" required >
                        </div>
                    </div><!-- col-6 -->
                    
                    <!--Estado-->
                    <!--<div class="col-md-6">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">
                                Estado:
                                <span class="tx-danger"></span>
                            </label>
                            <select class="form-control" name="estado" data-placeholder="Seleccione Estado">
                                <option label="Seleccione Estado"></option>
                                <option value="la">Lara</option>
                                <option value="mi">Miranda</option>
                                <option value="zu">Zulia</option>
                                <option value="dc">Distrito Capital</option>
                            </select>
                        </div>
                    </div>--><!-- col-6 -->

                    <!--Ciudad-->
                    <!--<div class="col-md-6">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Ciudad: <span class="tx-danger"></span></label>
                            <select class="form-control" name="ciudad" data-placeholder="Seleccione Ciudad">
                                <option label="Seleccione Ciudad"></option>
                                <option value="la">Barquisimeto</option>
                                <option value="mi">Guarenas</option>
                                <option value="zu">Maracaibo</option>
                                <option value="dc">Caracas</option>
                            </select>
                        </div>
                    </div>--><!-- col-6 -->

                    <div class="col-md-12"><!--Dirección-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Dirección: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" id="input_address" name="input_address" placeholder="Introduzca la dirección" required >
                        </div>
                    </div><!-- col- 12 -->
                
                </div><!--row-->
            </div><!--d-flex-->
            <!--Producto-->
            <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Factura-->
                <h4 class="tx-info">Producto</h4>
                <div class="row pd-y-20 pd-md-y-0">

                    <div class="col-md-6"><!--Codigo-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Código:<span class="tx-danger">*</span></label>
                            <input disabled class="form-control" id="input_cod_prod" type="text" name="input_cod" required>
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-md-6"><!--Fecha-->
                        <!--<div class="form-group mg-b-10-force">
                            <label class="form-control-label">Fecha:<span class="tx-danger"></span></label>
                            <input class="form-control" type="text" name="fecha" value="" placeholder="">
                        </div>-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Cantidad:<span class="tx-danger">*</span></label>
                            <div class="input-group">
                               
                                <input disabled id="input_cantidad_prod" type="text" class="form-control fc-datepicker" name="cantidad" placeholder="" >
                            </div>
                        </div><!-- wd-200 -->
                    </div><!-- col-6 -->
                    

                    <div class="col-md-4"><!--Precio-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Precio:<span class="tx-danger">*</span></label>
                            <input disabled id="input_precio_prod" class="form-control" type="number" name="precio"  value="{{ old('precio') }}">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-md-4"><!--IVA-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">IVA:<span class="tx-danger">*</span></label>
                            <input disabled id="input_IVA_prod" class="form-control" type="number" name="iva"  value="{{ old('iva') }}">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-md-4"><!--Monto con IVA-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Monto con IVA:<span class="tx-danger">*</span></label>
                            <input disabled id="input_montoIVA_prod" class="form-control" type="number" name="monto_civa"  value="{{ old('monto_civa') }}">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-md-12"><!--Descripción-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Descripción:<span class="tx-danger">*</span></label>
                            <input disabled id="input_descripcion_prod" class="form-control" type="text" name="descripcion"  value="{{ old('descripcion') }}">
                        </div>
                    </div><!-- col-4 -->

                </div><!--row-->
            </div><!--d-flex Producto-->
             
            
            <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Factura-->
                <h4 class="tx-info">Documento de Venta</h4>
                <div class="row pd-y-20 pd-md-y-0">

                    <div class="col-md-6"><!--Codigo-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Código:<span class="tx-danger">*</span></label>
                            <input disabled class="form-control" id="input_cod" type="text" name="input_cod" required>
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-md-6"><!--Fecha-->
                        <!--<div class="form-group mg-b-10-force">
                            <label class="form-control-label">Fecha:<span class="tx-danger"></span></label>
                            <input class="form-control" type="text" name="fecha" value="" placeholder="">
                        </div>-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Fecha:<span class="tx-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
                                <input disabled id="input_date" type="text" class="form-control fc-datepicker" name="fecha" placeholder="DD/MM/YYYY" value="{{ old('fecha') }}">
                            </div>
                        </div><!-- wd-200 -->
                    </div><!-- col-6 -->


                    <div class="col-md-4"><!--Precio-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Precio:<span class="tx-danger">*</span></label>
                            <input disabled id="input_precio" class="form-control" type="number" name="precio"  value="{{ old('precio') }}">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-md-4"><!--IVA-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">IVA:<span class="tx-danger">*</span></label>
                            <input disabled id="input_IVA" class="form-control" type="number" name="iva"  value="{{ old('iva') }}">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-md-4"><!--Monto con IVA-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Monto con IVA:<span class="tx-danger">*</span></label>
                            <input disabled id="input_montoIVA" class="form-control" type="number" name="monto_civa"  value="{{ old('monto_civa') }}">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-md-12"><!--Descripción-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Descripción:<span class="tx-danger">*</span></label>
                            <input disabled id="input_descripcion" class="form-control" type="text" name="descripcion"  value="{{ old('descripcion') }}">
                        </div>
                    </div><!-- col-4 -->

                </div><!--row-->
            </div><!--d-flex factura-->
            
        </div><!-- form-layout -->
<div class="modal fade " id="ModalRif" tabindex="-1" role="dialog" aria-labelledby="ModalRif" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" style="width:50rem;">
    <div class="modal-content " >
      <div class="modal-header">
        <h5 class="modal-title" id="ModalRifTitle">Listado de Facturas por Rif/Cedula</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal_body">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
     
      </div>
    </div>
  </div>
</div>
</div> <!--br-section-wrapper-->

<script>
    //inputs
        //cliente
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
    $(function(){
        'use strict'

        // Toggles
        $('.toggle').toggles({
          on: true,
          height: 26
        });

        // Input Masks
        $('#dateMask').mask('99/99/9999');
        $('#phoneMask').mask('(999) 999-9999');
        $('#ssnMask').mask('999-99-9999');

        // Datepicker
        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true
        });

        $('#datepickerNoOfMonths').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          numberOfMonths: 2
        });

        // Time Picker
        $('#tpBasic').timepicker();
        $('#tp2').timepicker({'scrollDefault': 'now'});
        $('#tp3').timepicker();

        $('#setTimeButton').on('click', function (){
          $('#tp3').timepicker('setTime', new Date());
        });

        // Color picker
        $('#colorpicker').spectrum({
          color: '#17A2B8'
        });

        $('#showAlpha').spectrum({
          color: 'rgba(23,162,184,0.5)',
          showAlpha: true
        });

        $('#showPaletteOnly').spectrum({
            showPaletteOnly: true,
            showPalette:true,
            color: '#DC3545',
            palette: [
                ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
            ]
        });
    });
    function fillform(dato){
    
        let ruta = '<?php echo route('buscarFactura'); ?>';
        let token = $("input[name='_token']").val();
        $.ajax({
        url: ruta,
        type:"POST",
        data: {
       "factura": dato,
        },
        headers: {
            "X-CSRF-Token": $("meta[name='csrf-token']").attr("content"),
        },
        success: function(data){
            console.log(data);
            var factura = data.factura;
            if(factura.length == 0){
                return;
            }
            else{
                document.getElementById('nro_factura').value = factura[0].NumeroD;
                input_nombre.value = factura[0].Descrip;
                input_address.value =factura[0].Direc1;
                input_cod.value = factura[0].NumeroD;
                input_date.value = ParseDate(factura[0].FechaE);
                input_precio.value = factura[0].Monto;
                input_IVA.value = factura[0].MtoTax;
                input_montoIVA.value = factura[0].MtoTotal;
                input_descripcion.value = factura[0].Descrip;
                input_Rif.value = factura[0].CodClie;
            console.log(factura);
            GetProducto(factura[0].NumeroD);
            }
           
        }
        });
    }
    function getDatosCompras(serial){
        
        let ruta = '<?php echo route('buscarDatosCompra'); ?>';

        $.ajax({
        url: ruta,
        type:"POST",
        data: {
            "id": serial,
            "CodItem": document.getElementById("input_cod_prod").value,
        },
        headers: {
            "X-CSRF-Token": $("meta[name='csrf-token']").attr("content"),
        },
        success: function(data){
            console.log(data);
            
            let compra = data.compra;
            if(compra == null){
                $('#ModalFallido').modal('toggle');
                return;
            }
            if(compra.length > 0){
                //Modal
                $('#ModalCompra').modal('toggle');
                var Modal = document.getElementById('modalC_body');
                Modal.innerHTML = "";
           
                ShowCompra(compra);


                window.localStorage.setItem('CompraData',JSON.stringify(compra));
            }
            else{
                $('#ModalFallido').modal('toggle');
            }
        }
        });
    }
    function SearchForCompra(){
        let CompraData = JSON.parse(  window.localStorage.getItem('CompraData'));
        let ArraySearched = [];
        let index = 0;
        for(let i = 0 ; i < CompraData.length;i++){
            if(CompraData[i].NumeroD.toUpperCase().includes($("#searchInput").val().toUpperCase())){
                ArraySearched[index] = CompraData[i];
                index++;
            }
            
        }
        ShowCompra(ArraySearched);
    }
    function SearchForProducto(){
        console.log("changed");
        let CompraData = JSON.parse(  window.localStorage.getItem('ItemData'));
        let ArraySearched = [];
        let index = 0;
        for(let i = 0 ; i < CompraData.length;i++){
            if(CompraData[i].CodItem.toUpperCase().includes($("#searchProduct").val().toUpperCase())){
                ArraySearched[index] = CompraData[i];
                index++;
            }
            
        }
        ShowProduct(ArraySearched);
    }
    function ShowCompra(compra){
        var elemento = "";
        var Modal = document.getElementById('modalC_body');
        let border = "border-bottom: 1px solid #0000001;";
        let NumerosD = [];
        for(var i = 0; i<compra.length;i++){
                let plsdo = true;
                for(let n = 0 ; n < NumerosD.length;n++ ){
                    if(NumerosD[n] == compra[i].NumeroD){
                        plsdo = false;
                    }
                }
                if(plsdo){
                    NumerosD[NumerosD.length] = compra[i].NumeroD;
                    var compra2 = "'"+compra[i].NumeroD+"'";
                    elemento +=' <div class="row border-bottom" style="padding-top:1rem; padding-bottom:1rem; '+border+' "><div class="col-3 text-center"><div style="color:black;font-weight:bold;">Código Compra</div>'+               
                        '<div>'+compra[i].NumeroD+'</div></div><div class="col-3 text-center" ><div style="color:black;font-weight:bold;">Descripcion</div>'+
                        '<div>'+compra[i].Descrip+'</div></div><div class="col-3 text-center"><div style="color:black;font-weight:bold;"> Fecha</div>'+
                        '<div>'+ParseDate(compra[i].FechaE)+'</div></div><div class="col-3 text-center">'+
                        '<button class="btn bd bg-white tx-gray-600 checkButton" type="button" id="Use" onclick="StoreCompra('+i+')" ><i class="fa fa-check"></i></button>'+
                        '</div> </div>';
                } 
                    
                    
                }
                Modal.innerHTML = elemento;
    }
    function StoreCompra(indice){

        let CompraData = JSON.parse(  window.localStorage.getItem('CompraData'));
        document.getElementById("input_CodCompra").value = CompraData[indice].NumeroD;
        document.getElementById("input_fecha").value = ParseDate(CompraData[indice].FechaE);

        window.localStorage.setItem('CompraDataIndex',indice);
        $('#ModalCompra').modal('toggle');
    }
    function GetProducto(id){
        
        let ruta = '<?php echo route('buscarProductos'); ?>';
        let token = $("input[name='_token']").val();
        
        $.ajax({
        url: ruta,
        type:"POST",
        data: {
            "id": id,
        },
        headers: {
            "X-CSRF-Token": $("meta[name='csrf-token']").attr("content"),
        },
        success: function(data){
            console.log(data);
            var factura = data.factura;
            if(factura.length == 0){
                return;
            }
            else{
                $('#ModalProduct').modal('toggle');

                
                var facturas = data.factura;
                window.localStorage.setItem('ItemData',JSON.stringify(factura));
                ShowProduct(facturas);
               
       
        
            
            }
           
        }
        });
  
    }
    function ShowProduct(facturas){
      
        var Modal = document.getElementById('modalP_body');
        Modal.innerHTML = "";
        let border = "border-bottom: 1px solid #0000001;";
        var elemento = "";
        for(var i = 0; i<facturas.length;i++){
            if(i == facturas.length-1){
              
            }
            var facturas2 = "'"+facturas[i].NumeroD+"'";
            elemento +=' <div class="row border-bottom" style="padding-top:1rem; padding-bottom:1rem; '+border+' "><div class="col-3 text-center"><div style="color:black;font-weight:bold;">Código producto</div>'+               
                '<div>'+facturas[i].CodItem+'</div></div><div class="col-3 text-center" ><div style="color:black;font-weight:bold;">Descripcion</div>'+
                '<div>'+facturas[i].Descrip1+'</div></div><div class="col-3 text-center"><div style="color:black;font-weight:bold;"> Precio</div>'+
                '<div>'+facturas[i].Precio+'</div></div><div class="col-3 text-center">'+
                '<button class="btn bd bg-white tx-gray-600 checkButton" type="button" id="Use" onclick="StoreItem('+i+')" ><i class="fa fa-check"></i></button>'+
                '</div> </div>';
            
        }
        Modal.innerHTML = elemento;
    }
    function StoreItem(ida){
        window.localStorage.setItem('ItemDataIndex',ida);
        $('#ModalProduct').modal('toggle');
        let ItemData = JSON.parse(window.localStorage.getItem('ItemData'));
    
        document.getElementById("input_cod_prod").value = ItemData[ida].CodItem;
        document.getElementById("input_cantidad_prod").value = ItemData[ida].Cantidad;
        //document.getElementById("input_costo_prod").value = ItemData[ida].Costo;
        document.getElementById("input_precio_prod").value = ItemData[ida].Precio;
        document.getElementById("input_IVA_prod").value = ItemData[ida].MtoTax;
        document.getElementById("input_montoIVA_prod").value = ItemData[ida].TotalItem;
        document.getElementById("input_descripcion_prod").value = ItemData[ida].Descrip1;


        GetSerial();
    }
    $("#buscaFactura").click(function(){
        fillform($("input[name='nro_factura']").val());

        
 
    });

    $("#buscaRIF").click(function(){
        
        let dato = input_Rif.value;
        let ruta = '<?php echo route('buscarRIF'); ?>';
        let token = $("input[name='_token']").val();
        $.ajax({
        url: ruta,
        type:"POST",
        data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "factura": dato,
        },
        headers: {
            "X-CSRF-Token": $("meta[name='csrf-token']").attr("content"),
        },
        success:function(data){
            InsertModal(data);
            
        }})
    });
    function InsertModal(data){
        var Modal = document.getElementById('modal_body');
        let border = "border-bottom: 1px solid #0000001;";
        Modal.innerHTML = "";
        var elemento = "";
        var facturas = data.factura;
        for(var i = 0; i<facturas.length;i++){
            if(i == facturas.length-1){
              
            }
            var facturas2 = "'"+facturas[i].NumeroD+"'";
            elemento +=' <div class="row border-bottom" style="padding-top:1rem; padding-bottom:1rem; '+border+' "><div class="col-3 text-center"><div style="color:black;font-weight:bold;"> Nro de Factura</div>'+               
                '<div>'+facturas[i].NumeroD+'</div></div><div class="col-3 text-center" ><div style="color:black;font-weight:bold;"> Monto Pagado</div>'+
                '<div>'+facturas[i].MtoTotal+'</div></div><div class="col-3 text-center"><div style="color:black;font-weight:bold;"> Fecha</div>'+
                '<div>'+ParseDate(facturas[i].FechaE)+'</div></div><div class="col-3 text-center">'+
                '<button class="btn bd bg-white tx-gray-600 checkButton" type="button" id="Use" onclick=ModalCheck('+facturas2+') ><i class="fa fa-check"></i></button>'+
                '</div> </div>';
            
        }
        Modal.innerHTML = elemento;
        $('#ModalRif').modal('toggle');
    }
    function ModalCheck(dato){
        fillform(dato);
        $('#ModalRif').modal('toggle');
    }
    function ParseDate(date){
        var year = date.toString().split(' ');
        var year2 = year[0].split('-');
        return year2[2]+"/"+year2[1]+"/"+year2[0]
    }
    function ParseDateToUSA(date){
        var year = date.toString().split('/');
        
        return year[1]+"/"+year[0]+"/"+year[2]
    }
</script>
<style scoped>
    .checkButton{
        cursor:pointer;
    }
    .checkButton:Hover{
        background-color:#57cb87 !important;
        color: white !important;
    }
    
</style>


<div class="modal fade " id="ModalProduct" tabindex="-1" role="dialog" aria-labelledby="ModalProduct" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" style="width:50rem;">
    <div class="modal-content " >
      <div class="modal-header">
        <h5 class="modal-title" id="ModalProductTitle">Productos</h5>
            <input class="form-control w-50" id ="searchProduct" oninput="SearchForProducto()">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalP_body">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
     
      </div>
    </div>
  </div>
</div>

<div class="modal fade " id="ModalCompra" tabindex="-1" role="dialog" aria-labelledby="ModalCompra" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" style="width:50rem;">
    <div class="modal-content " >
      <div class="modal-header">
         
                <h5 class="modal-title" id="ModalCompraTitle">Compra</h5>
      
         
                <input class="form-control w-50" id ="searchInput" oninput="SearchForCompra()">
         
          
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            

        
       
      </div>
      <div class="modal-body" id="modalC_body">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
     
      </div>
    </div>
  </div>
</div>

<div class="modal fade " id="ModalFallido" tabindex="-1" role="dialog" aria-labelledby="ModalProduct" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" style="width:50rem;">
    <div class="modal-content " >
      <div class="modal-header">
        <h5 class="modal-title" >Garantía Fallida</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalP_body">
        <p>
            Debido a que el producto seleccionado no pertenece a Covencaucho Industrias, no aplica para una garantía.
        </p>
      </div>
      <div class="modal-footer">
        <a href="" class="btn btn-secondary" >Cerrar</a>
     
      </div>
    </div>
  </div>
</div>
<script>
    function CheckNonNull(elements){
        let ready = true;
        for(let i = 0 ; i< elements.length ; i++){
            if(elements[i].value == null){
                
            }
        }
    }
</script>
<div class="modal fade " id="ModalSerial" tabindex="-1" role="dialog" aria-labelledby="ModalSerial" aria-hidden="true" >
  <div class="modal-dialog modal-sm" role="document" style="width:50rem;">
    <div class="modal-content " >
      <div class="modal-header">
        <h5 class="modal-title" id="ModalSerialTitle">Serial del Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="ModalS_body">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
     
      </div>
    </div>
  </div>
</div>