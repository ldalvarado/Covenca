<!-- SEGUNDA VISTA: Información del Producto -->
<div class="br-section-wrapper pd-35-force">

    <div class="form-layout form-layout-1">

            <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Producto-->
                <h4 class="tx-info">Producto</h4>
                <div class="row pd-y-20 pd-md-y-0">

                    <div class="col-md-4"><!--Tipo Producto-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">
                                Tipo:
                                <span class="tx-danger"></span>
                            </label>
                            <input id="select_producto2" disabled class="form-control" name="tipo_producto" data-placeholder="Seleccione Tipo" required  data-validate="parsley">
                                
                            </input>
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-md-4" id="input_valvula"><!--Diseño de Molde-->
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Valvula:<span class="tx-danger"></span></label>
                                    <select class="form-control" name="Valvula" data-placeholder="" required  data-validate="parsley" id="selectValvula">
                                        <option label="Seleccione la medida"></option>
                                        @foreach($valvulas as $valvula)
                                            <option value="{{$valvula['id']}}" {{old('valvula')==$valvula['id'] ? 'selected' : ''}}>{{$valvula['descripcion']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                    <div class="col-md-8" id="input_dot"><!--DOT-SERIAL-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">DOT-SERIAL Completo:<span class="tx-danger"></span></label>
                            <input class="form-control" type="text" name="dot_serial" required  data-validate="parsley" value="{{ old('dot_serial') }}" id="dotserial">
                        </div>
                    </div><!-- col-6 -->

                    <!--País de Origen-->
                    <!--<div class="col-md-4">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">País de Origen:<span class="tx-danger"></span></label>
                            <select class="form-control" name="pais" data-placeholder="Seleccione el país">
                                <option label="Seleccione tipo de producto"></option>
                                @foreach ($countries as $country)
                                    <option value={{$country->id}}>{{$country->descripcion}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>--><!-- col-4 -->

                    <!--Otra fila-->
                    <div class="col-md-4" id="input_brand"><!--Marca-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Marca:<span class="tx-danger"></span></label>
                            <select onchange="GetModelos()" class="form-control" name="marca" data-placeholder="Seleccione la marca" required  data-validate="parsley" id="marcaCaucho">
                                <option label="Seleccione marca"></option>
                              
                            </select>
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-md-4" id="input_model"><!--Modelo-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Modelo:<span class="tx-danger"></span></label>
                            <select class="form-control" name="modelo" data-placeholder="Seleccione la modelo" required  data-validate="parsley" id="modeloNeumatico">
                                <option label="Seleccione modelo"></option>
                              
                            </select>
                        </div>
                    </div><!-- col-4 -->
                    <!--//de 'neumáticos': medidas, anchos, diseños-->
                    <div class="col-md-4" id="input_medida"><!--Medida-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Medida:<span class="tx-danger"></span></label>
                            <select class="form-control" name="medida" data-placeholder="" required  data-validate="parsley" id="medidaNeumatico">
                                <option label="Seleccione la medida"></option>
                           
                            </select>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-4" id="input_tipoRenovado"><!--Tipo de Renovado /Checkbox-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Tipo de Renovado:<span class="tx-danger"></span></label>
                            <div class="d-flex row justify-content-around">
                                <label class="d-flex rdiobox rdiobox-success">
                                    <input onchange="GetDisenoByFrio()" type="radio" name="tipo_renovado" id="cold" value="cold" @if(old('tipo_renovado')=="cold") checked @endif ><span>Frío</span>
                                </label>

                                <label class="d-flex rdiobox rdiobox-danger">
                                    <input onchange="GetDisenoByFrio()" type="radio" name="tipo_renovado" id="warm" value="warm" @if(old('tipo_renovado')=="warm")  @endif><span>Caliente</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--Otra fila-->
                    <div class="col-8" id="input_molde">
                        <div class="row">
                            <div class="col"><!--Diseño de Molde-->
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Diseño:<span class="tx-danger"></span></label>
                                    <select class="form-control" name="disenio" data-placeholder="" required  data-validate="parsley" id="disenoNeumatico">
                                        <option label="Seleccione el Diseño"></option>
                                        
                                    </select>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Ancho del diseño:<span class="tx-danger"></span></label>
                                    <select class="form-control" name="idProfundidad" id="idProfundidad" data-placeholder="Seleccione el ancho" required  data-validate="parsley">

                                            <option value="">Seleccione el ancho</option>
                     
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4" id="input_dept"><!--Profundidad-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Profundidad:<span class="tx-danger"></span></label>
                            <input class="form-control" name="profundidad"  required  data-validate="parsley" id="profundidadNeumatico">
                              
                              
                            </input>
                        </div>
                    </div><!-- col-4 -->

                    <!-- col-4 -->

                    <!--Otra fila-->
                    <div class="col-md-4" id="input_boleta">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Número de Boleta<span class="tx-danger">*</span></label>
                                <div class="input-group">
                                    @csrf
                                    <input disabled class="form-control" type="text" name="boleta" id="boletaNeumatico" placeholder="Introduzca número de boleta" required  data-validate="parsley">      <!--                           <span class="input-group-btn">
                                    <button class="btn bd bg-white tx-gray-600" type="button" id="buscarSerial" onclick="GetSerial()" ><i class="fa fa-search"></i></button>
                                    </span>-->   
                                </div>
                            </div>
                        </div>
                   <!-- col-4 -->
                    
                    <div class="col-md-8" id="input_serial"><!--Serial de Producción-->
                   
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Serial / Lote de vulcanización:<span class="tx-danger"></span></label>
                            <div class="input-group">
                             <input class="form-control" type="text" name="serial_produccion" placeholder="" required  data-validate="parsley" value="{{ old('serial_produccion') }}" id="serialNeumatico">

                                
                            </div>
                        </div>
                    </div><!-- col-4 -->
                    
                    <!--Otra fila-->
                    

                    <!--Lote Vulcanización-->
                    <!--<div class="col-md-4">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Lote Vulcanización:<span class="tx-danger"></span></label>
                            <input class="form-control" type="text" name="lote_vulcanizacion" placeholder="">
                        </div>
                    </div>--><!-- col-4 -->

                    <!--Lote de Banda-->
                    <!--<div class="col-md-4">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Lote de Banda:<span class="tx-danger"></span></label>
                            <input class="form-control" type="text" name="lote_banda" placeholder="">
                        </div>
                    </div>--><!-- col-4 -->

                </div><!--row-->
            </div><!--d-flex-->
        
    </div><!-- form-layout -->
</div> <!--br-section-wrapper--> 
<style scoped>
    .Hidden{ 
        display:none;
    }
</style>
<script>

    $('#disenoNeumatico').on('change', function() {
        var diseno = document.getElementById('disenoNeumatico');

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

    function GetModelos(){
        let modeloNeumaticos = document.getElementById('modeloNeumatico');
        modeloNeumaticos.innerHTML = '<option label="Seleccione modelo"></option>';
        $.ajax({
            url: '<?php echo route('GetModeloByMarca')?>',
            type:"POST",
            data: {
                "_token": $("meta[name='csrf-token']").attr("content"),
                "idMarca": document.getElementById('marcaCaucho').value,
            },
            success: function(data){
                let elementos = data.data;
                for(let i = 0 ; i < elementos.length ; i++){
                        let opt = document.createElement('option');
                        opt.value = elementos[i].id;
                        opt.innerHTML = elementos[i].descripcion;
                        modeloNeumaticos.appendChild(opt);
                    }
            }
        })
    }
    function UpdateCauchoProd(){
        GetMarcaByProd('<?php echo route('ListadoMarca')?>');
        GetMedidaByProd('<?php echo route('ListadoMedida')?>');

    }
    function UpdateCamaraAire(){
        GetMarcaByProd('<?php echo route('CamaraListadoMarca')?>');
        GetMedidaByProd('<?php echo route('CamaraListadoMedida')?>');

        
    }
    function UpdateProtector(){

        GetMarcaByProd('<?php echo route('protectorListadoMarca')?>');
        
    }
    function UpdateCauchoIndustrial(){

        GetMedidaByProd('<?php echo route('CauchoIndustrialListadoMedida')?>');
        
    }
    function GetMedidaByProd(urlAdd){
        let medidaprod = document.getElementById('medidaNeumatico');
        medidaprod.innerHTML = '<option label="Seleccione marca"></option>';
        $.ajax({
            url: urlAdd,
            type:"POST",
            data: {
                "_token": $("meta[name='csrf-token']").attr("content"),
            },
            success: function(data){
                let elementos = data.data;
                for(let i = 0 ; i < elementos.length ; i++){
                        let opt = document.createElement('option');
                        opt.value = elementos[i].id;
                        opt.innerHTML = elementos[i].descripcion;
                        medidaprod.appendChild(opt);
                    }
            }
        })
    }
    function GetMarcaByProd(urlAdd){
        let marcaproducto = document.getElementById('marcaCaucho');
        marcaproducto.innerHTML = '<option label="Seleccione marca"></option>';
        $.ajax({
            url: urlAdd,
            type:"POST",
            data: {
                "_token": $("meta[name='csrf-token']").attr("content"),
            },
            success: function(data){
                let elementos = data.data;
                for(let i = 0 ; i < elementos.length ; i++){
                        let opt = document.createElement('option');
                        opt.value = elementos[i].id;
                        opt.innerHTML = elementos[i].descripcion;
                        marcaproducto.appendChild(opt);
                    }
            }
        })
    }
    GetDisenoByFrio();
    function GetDisenoByFrio(){
        let cold = 1;
        if(document.getElementById('warm').checked){
            cold = 0;
        }
        let marcaproducto = document.getElementById('disenoNeumatico');
        marcaproducto.innerHTML = '<option label="Seleccione Diseno"></option>';
        $.ajax({
            url: "<?php echo route('GetDisenoByTemp')?>",
            type:"POST",
            data: {
                "_token": $("meta[name='csrf-token']").attr("content"),
                "esFrio":cold,
            },
            success: function(data){
                let elementos = data.data;
                for(let i = 0 ; i < elementos.length ; i++){
                        let opt = document.createElement('option');
                        opt.value = elementos[i].id;
                        opt.innerHTML = elementos[i].descripcion;
                        marcaproducto.appendChild(opt);
                    }
            }
        })
    }
    function GetProfByDiseno(){
        
        let marcaproducto = document.getElementById('profundidadNeumatico');
        marcaproducto.innerHTML = '<option label="Seleccione Profundidad"></option>';
        $.ajax({
            url: "<?php echo route('GetProfundidadByDisenoAncho')?>",
            type:"POST",
            data: {
                "_token": $("meta[name='csrf-token']").attr("content"),
                "idAncho":$("#idProfundidad").val(),
                "idDiseno":$("#disenoNeumatico").val()
            },
            success: function(data){
                let elementos = data.data;
                for(let i = 0 ; i < elementos.length ; i++){
                        let opt = document.createElement('option');
                        opt.value = elementos[i].id;
                        opt.innerHTML = elementos[i].descripcion;
                        marcaproducto.appendChild(opt);
                    }
            }
        })
    }
   function GetSerial(){
        let ItemData = JSON.parse(window.localStorage.getItem('ItemData'));
        let ItemDataIndex = window.localStorage.getItem('ItemDataIndex');
        console.log(ItemData[ItemDataIndex]);


        let ruta = '<?php echo route('buscarSerial'); ?>';
        let token = $("input[name='_token']").val();
        
        $.ajax({
        url: ruta,
        type:"POST",
        data: {
            "codItem": ItemData[ItemDataIndex].CodItem,
            "numeroD": ItemData[ItemDataIndex].NumeroD,
        },
        headers: {
            "X-CSRF-Token": $("meta[name='csrf-token']").attr("content"),
        },
        success: function(data){
            console.log(data);
            var facturas = data.seriales;
            if(facturas.length == 0){
                getDatosCompras("*");
                return;
            }
            else{
                $('#ModalSerial').modal('toggle');
                var Modal = document.getElementById('ModalS_body');
                let border = "border-bottom: 1px solid #0000001;";
                Modal.innerHTML = "";
                var elemento = "";
               
              

               
        for(var i = 0; i<facturas.length;i++){
            if(i == facturas.length-1){
              
            }
            let comilla = "'";
            var facturas2 = "'"+facturas[i].NumeroD+"'";
            elemento +=' <div class="row border-bottom" style="padding-top:1rem; padding-bottom:1rem; '+border+' "><div class="col-6 text-center"><div style="color:black;font-weight:bold;">Serial</div>'+               
                '<div>'+facturas[i].NroSerial+'</div></div><div class="col-6 text-center">'+
                '<button class="btn bd bg-white tx-gray-600 checkButton" type="button" id="Use" onclick="StoreSerial('+comilla+facturas[i].NroSerial+comilla+')" ><i class="fa fa-check"></i></button>'+
                '</div> </div>';
            
        }   
        Modal.innerHTML = elemento;
            
            }
           
        }
        });
  
    }
    function StoreSerial(ida){
        document.getElementById('boletaNeumatico').value = ida;
        $('#ModalSerial').modal('toggle');
        getDatosCompras(ida);
    }
    
    function ActualizarACamara(){

    }
</script>
