<!--CUARTA VISTA: Información - Diagrama -->
<div class="br-section-wrapper pd-35-force">
      
    <div class="form-layout form-layout-1">
        <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->
            <h4 class="tx-info">Tipo</h4>
            <div class="form-group mg-b-10-force">
                            <label class="form-control-label">
                                Tipo:
                                <span class="tx-danger">*</span>
                            </label>
                            <select class="form-control" name="tipo_producto" data-placeholder="Seleccione Tipo" required id="select_tipo" data-validate="parsley">
                                <option label="Seleccione tipo de producto"></option>
                               
                            </select>
                        </div>
         </div>
            <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->
                <h4 class="tx-info">Requisitos</h4>
                <div class="row pd-y-20 pd-md-y-0" id="requisitos_container">

                </div><!--row-->
            </div>

            <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->
                <h4 class="tx-info">Descripcion de la falla</h4>
                <div class="row pd-y-20 pd-md-y-0">

                    <!--Descripción-->
                    <div class="col-md-12"><!---->
                        <div class="form-group mg-b-10-force">
                            <div class="row mg-t-20">
                                <div class="col-lg">
                               
                                    <textarea rows="3" class="form-control"  id="text_observaciones" required data-validate="parsley" rows="3" class="form-control" name="descripcion_solicitud" placeholder="Descripción de la falla" required>{{old('descripcion_solicitud')}}</textarea>
                                </div><!-- col -->
                            </div>

                        </div>
                    </div><!-- col-12 -->

                    <!--Archivos-->
                    <div class="col-md-12"><!---->
                        <div class="form-group mg-b-10-force">
                            <div class="row">
                              
                                <div class="col-12"><!--archivo-->
                                <label class="form-control-label">Fotografía de Falla:</label>
                                <div class="form-group mg-b-10-force"><!--form-group mg-b-10-force-->
                                    <label class="custom-file">
                                        <input type="file" id="file" class="custom-file-input" name="foto_falla" required data-validate="parsley" value="{{ old("foto_falla") }}">
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
<!--
                                <div class="col-md-4">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Nombre del archivo:<span class="tx-danger"></span></label>
                                        <input class="form-control" type="text" name="nombre_foto" value="{{ old('nombre_foto') }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Descripción:<span class="tx-danger"></span></label>
                                        <input class="form-control" type="text" name="descripcion_foto" value="{{old('descripcion_foto') }}">
                                    </div>
                                </div> 
                            
                            -->
                                
                            </div><!--row-->
                        </div><!--col-md-12-->
                    </div><!-- col-12 -->

                    
                </div><!--row-->
            </div>

            <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10" style="display:none;" id="diaContainer"><!--Vehículo-->
                <h4 class="tx-info">Diagrama y Posición</h4>
                <div id="allDiagrama">
                <div class="row" >
                    <style type="text/css">
                        .table th, .table td {
                            border: none;
                        }
                    </style>

                    <div class="col-6 pd-0" id="tiposDiagramasshow">
                        <fieldset class="alert alert-light border border-dark mg-10">

                            <div class="row" id="div_diagrama1"></div>
                            <!--

                            <div class="form-row mb-3">
                                <div class="col-md-4">
                                    <label class="d-flex justify-content-center btn btn-block btn-light font-weight-bold">
                                        <input type="radio" name="diagram" id="diagram" hidden value="42a">
                                        <img id="tire" src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
                                        <span class="text">
                                            <u> 4x2(A) </u>
                                            <i class="ti-check"></i>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label class="d-flex justify-content-center btn btn-block btn-light font-weight-bold">
                                        <input type="radio" name="diagram" id="diagram" hidden value="42b">
                                        <img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
                                        <span class="text">
                                            <u> 4x2(B) </u>
                                            <i class="ti-check"></i>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label class="d-flex justify-content-center btn btn-block btn-light font-weight-bold">
                                        <input type="radio" name="diagram" id="diagram" hidden value="62a">
                                        <img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
                                        <span class="text">
                                            <u> 6x2(A) </u>
                                            <i class="ti-check"></i>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col-md-4">
                                    <label class="d-flex justify-content-center btn btn-block btn-light font-weight-bold">
                                        <input type="radio" name="diagram" id="diagram" hidden value="62b">
                                        <img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
                                        <span class="text">
                                            <u> 6x2(B) </u>
                                            <i class="ti-check"></i>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label class="d-flex justify-content-center btn btn-block btn-light font-weight-bold">
                                        <input type="radio" name="diagram" id="diagram" hidden value="64">
                                        <img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
                                        <span class="text">
                                            <u> 6x4 </u>
                                            <i class="ti-check"></i>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label class="d-flex justify-content-center btn btn-block btn-light font-weight-bold">
                                        <input type="radio" name="diagram" id="diagram" hidden value="20">
                                        <img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
                                        <span class="text">
                                            <u> 2x0 </u>
                                            <i class="ti-check"></i>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col-md-4">
                                    <label class="d-flex justify-content-center btn btn-block btn-light font-weight-bold">
                                        <input type="radio" name="diagram" id="diagram" hidden value="40">
                                        <img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
                                        <span class="text">
                                            <u> 4x0 </u>
                                            <i class="ti-check"></i>
                                        </span> 
                                    </label>
                                </div> 
                                <div class="col-md-4">
                                    <label class="d-flex justify-content-center btn btn-block btn-light font-weight-bold">
                                        <input type="radio" name="diagram" id="diagram" hidden value="60">
                                        <img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
                                        <span class="text">
                                            <u> 6x0 </u>
                                            <i class="ti-check"></i>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label class="d-flex justify-content-center btn btn-block btn-light font-weight-bold">
                                        <input type="radio" name="diagram" id="diagram" hidden value="80">
                                        <img src="{{url('/ui/assets/images/icon/tire-success.png')}}" height="50">
                                        <span class="text">
                                            <u> 8x0 </u>
                                            <i class="ti-check"></i>
                                        </span>
                                    </label>
                                </div>
                            </div>

                            -->

                        </fieldset>
                    </div><!--col-6 diagram-->

                    <div class="col-6 pd-0">

                        <div class="alert alert-light border border-dark mg-10" id="tiposDiagramas">
                              
                        </div>
                    </div> <!--col-6 chasis-->
                </div><!--row-->
           
                </div>
                 </div>

    </div><!-- form-layout -->
</div> <!--br-section-wrapper-->
<script>
      $fotoInput = $('#file');
      var image64 = "";
      function getBase64(file) {
  return new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => resolve(reader.result);
    reader.onerror = error => reject(error);
  });
}
    document.querySelector('.custom-file-input').addEventListener('change',function(e){

        var fileName = document.getElementById("file").files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;

        getBase64($fotoInput[0].files[0]).then(
          function(data) {
            $("#imagenAnalisis").attr('src', data);
          }

        );

    })


    var diagramas = [
        { value:'42a', text: '4x2(A)'},
        { value:'42b', text: '4x2(B)'},
        { value:'62a', text: '6x2(A)'},
        { value:'62b', text: '6x2(B)'},
        { value:'64', text: '6x4'},
        { value:'20', text: '2x0'},
        { value:'40', text: '4x0'},
        { value:'60', text: '6x0'},
        { value:'80', text: '8x0'},
    ];
    var id_diagrama = '';

    if ($("#div_diagrama1")[0].innerHTML == "") {
        
    }

   

   
</script>
<script>
    
    let dataDiagram;
     function activa_caucho(id) {
        $(".img_diagrama").each(function (index) {
            $(this).attr('src',"{{url('/ui/assets/images/icon/tire-success.png')}}");
        });
 
        
        $("#img_"+id).attr('src',"{{url('/ui/assets/images/icon/tire-danger.png')}}");
        var url_img = "{{url('/ui/assets/images/icon/tire-success.png')}}";
        let eliminarHidden = dataDiagram[id].contenido.split("hidden");
        let elim = eliminarHidden[0]+eliminarHidden[1];
        elim = elim.replaceAll("url('/ui/assets/images/icon/tire-success.png')",url_img);
        elim = elim.replaceAll('{','');
        elim = elim.replaceAll('}','');
        
         
          
        
        document.getElementById("tiposDiagramas").innerHTML = elim;
    }
   
    function crearElemento(diagramas){
        dataDiagram = diagramas;
        $("#div_diagrama1")[0].innerHTML = "";
        let i = 0;
        diagramas.forEach(element => {
            let div = document.createElement("div");
            div.className = "col-sm-6 col-md-4 p-2";
            
            let img = document.createElement("img");
            img.src="{{url('/ui/assets/images/icon/tire-success.png')}}";
            img.height="50";
            img.title=element.codigo;
            img.id="img_"+i;
            img.className="img_diagrama";
            
            let b = document.createElement("b");
            b.innerHTML = " "+element.descripcion;
            
            let label = document.createElement("label");
            label.className = "w-100 btn btn-light label_diagrama";
            label.style.cursor = "pointer";
            label.id = "label_"+i;
            activa_caucho(0);
            label.appendChild(img);
            label.appendChild(b);
            div.appendChild(label);
            $("#div_diagrama1")[0].appendChild(div);
            i++
        });
        $(document).on('click', '#tiposDiagramas label', function(){
            $("#tiposDiagramas img").each(function (index) {
                
                $(this).attr('src',"{{url('/ui/assets/images/icon/tire-success.png')}}");
            });
    var calue =         $(this).find('input').val();
    window.localStorage.setItem('diagramaContenido',document.getElementById('tiposDiagramas').innerHTML);
    window.localStorage.setItem('posicion', calue);

        $(this).find('img').attr('src',"{{url('/ui/assets/images/icon/tire-danger.png')}}");
    });
        $(".label_diagrama").each(function (index) {
        let valor = $(this)[0].id;
        let i = valor.split("_");
        $(this)[0].addEventListener("click", function() { 
            window.localStorage.setItem('idDiagrama', i[1]);
            window.localStorage.setItem('contenidoDiagrama', valor);
            activa_caucho(i[1]); 
        
        } , false);
    });
    }
    function ChangeArray(index , data){
        var activo = JSON.parse(window.localStorage.getItem('condicionesActivo'));
        activo[index] = data;
        window.localStorage.setItem('condicionesActivo', JSON.stringify(activo));
    }
    $('#select_tipo').on('change', function() {
        SetProdInfo();
        var select_tipo = document.getElementById('select_tipo');
        setupProductPage();
        var requisitos_container = document.getElementById('requisitos_container');
        var condiciones = {!! json_encode($condiciones ) !!}
        var cond = [];
        var condActv = [];
        for(let i = 0 ; i < condiciones.length; i++){
            
        }
        console.log(condiciones);
        count = 0;
        var innerhtml = ""
        let condicionesRespuesta = [];
        for(var i = 0 ; i < condiciones.length; i++){
            if(select_tipo.value == condiciones[i]['idProducto'])
            {
                condicionesRespuesta[count] = condiciones[i].respuesta;
                cond[count] = condiciones[i].id;
                condActv[count] = 0;
              
                innerhtml +='<div class="col-md-12"><!--DOT Serial--><div class="form-group mg-b-10-force"><div class="row">'+
                                '<div class="col-sm-8"><label class="d-flex form-control-label">'+condiciones[i]['descripcion']+'<span class="tx-danger"></span></label>'
                                +'</div><div class="col-sm-2"><label class="d-flex justify-content-center rdiobox "><input onchange="ChangeArray('+count+',1)" type="radio" name="req_dot_serial_'+i+'" id="yes_'+i+'" value="yes" @if(old('req_dot_serial')=="yes") checked @endif><span>Si</span></label>'  
                                +'</div><div class="col-sm-2"><label class="d-flex justify-content-center rdiobox "><input onchange="ChangeArray('+count+',0)" type="radio" name="req_dot_serial_'+i+'" id="no'+i+'" value="no" @if(old('req_dot_serial')=="no") checked @endif><span>No</span></label>'
                                +'</div></div></div></div><!-- col-6 -->';
                                count++;
            }
           
        }
        window.localStorage.setItem('condicionesActivo', JSON.stringify(condActv));
        window.localStorage.setItem('condiciones', JSON.stringify(cond));
        console.log(condicionesRespuesta);
        window.localStorage.setItem('condicionesRespuesta', JSON.stringify(condicionesRespuesta));
        requisitos_container.innerHTML = innerhtml;

        $.ajax({
        url: '<?php echo route('DiagramaCaucho'); ?>',
        type:"POST",
        data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "id": select_tipo.value,
        },
        success: function(data){
            let diaContainer = document.getElementById('diaContainer');
            if(data.Data != null & data.Data != ""){
                diaContainer.style.display = "block";
                window.localStorage.setItem('idTipoDiagrama', data.Data[0].idTipoDiagrama);
                crearElemento(data.Data);
            }
            else{
                
                
            }
        
           
        }
        });
});

    function setupProductPage(){
        GetDisenoByFrio();
        var select_producto2 = document.getElementById('select_producto2');
        select_producto2.value = $( "#select_tipo option:selected" ).text();
        var elementosPantalla =[    document.getElementById("input_dot"),
                                    document.getElementById("input_brand"),
                                    document.getElementById("input_model"),
                                    document.getElementById("input_medida"),
                                    document.getElementById("input_molde"),
                                    document.getElementById("input_dept"),
                                    document.getElementById("input_boleta"),
                                    document.getElementById("input_tipoRenovado"),
                                    document.getElementById("input_serial"),
                                    document.getElementById("input_valvula"),                                    
                                    ];
                                  
        $.ajax({
        url: '<?php echo route('buscarDatosCampos'); ?>',
        type:"POST",
        data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "id": select_tipo.value,
        },
        success: function(data){
            if(data.Data != null){
                var parsedData = data.Data;
                var elementArray = ['dotSerial','marca','modelo','medida','diseno','profundidad', 'tipo_renovado','boleta','serial','valvula' ];
                for(let i = 0 ; i< elementosPantalla.length;i++ ){
                    
                if(parsedData[elementArray[i]]==1){
                    elementosPantalla[i].classList.remove("Hidden");
                }
                else{
                    elementosPantalla[i].classList.add("Hidden");
                    
                }
            }
            }
            
            
        }
        });


        
    }
      
    function getToken() {
        let name = "XSRF-TOKEN" + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
            c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
            }
        }
        return "";
}
function OpcionCamara(posicion){
    window.localStorage.setItem('PosicionCamara',posicion);

}
function SetProdInfo(){
    console.log("came here");
    let tipoProducto = document.getElementById('select_tipo').value;
    let diaContainer = document.getElementById('diaContainer');
    let tiposDiagramasshow = document.getElementById('div_diagrama1');
    switch(tipoProducto){
        case "1":
            UpdateCauchoProd();
            
            console.log("updated Caucho");
        break;
        case "2":
            UpdateCauchoProd();

            console.log("updated Caucho");
        break;
        case "3":
            UpdateCamaraAire();
            let opciones = ["A","B","C","D","E","F","G"];
            let radiobuttons ="";
            for(let i = 0 ; i < opciones.length ; i++){
                let opcion = "'"+opciones[i]+"'";
                radiobuttons += '<div class="col-12"><div class="col-12"><label class="d-flex justify-content-center rdiobox "><input type="radio" onchange="OpcionCamara('+opcion+')" name="OpcionesCamara" id="Opcion_'+opciones[i]+'" value="no" ><span>Opcion '+opciones[i]+'</span></label></div></div>';
            
            }
            $("#div_diagrama1")[0].innerHTML = radiobuttons;
            console.log(radiobuttons);
            $.ajax({
            url: '<?php echo route('DiagramaCamara')?>',
            type:"POST",
            data: {
                "_token": $("meta[name='csrf-token']").attr("content"),
            },
            success: function(data){
                diaContainer.style.display = "block";
        
                
                let datafromurl = "{{url('/ui/assets/images/camara_aire.jpg')}}";
                if(data.Data!= null){
                    let elim = data.Data.contenido;

                    elim = elim.replaceAll("url('/ui/assets/images/camara_aire.jpg')",datafromurl);
                    elim = elim.replaceAll('{','');
                    elim = elim.replaceAll('}','');
                    console.log(elim);
                    document.getElementById("tiposDiagramas").innerHTML = elim;
                }
        
            }
            });
            // = <img src={{url('/ui/assets/images/camara_aire.jpg')}} class=img-fluid alt=">
            console.log("updated Caucho");
        break;
        case "4":
            UpdateCauchoIndustrial();
           
            console.log("updated Caucho");
        break;
        case "5":
            UpdateProtector();
            diaContainer.style.display = "none";
            break;
    }
}
function GetTipos(){
        let selectTipo = document.getElementById('select_tipo');
        selectTipo.innerHTML = '<option label="Seleccione Tipo de Producto"></option>';
        $.ajax({
            url: '<?php echo route('ListadoTipoProducto')?>',
            type:"POST",
            data: {
                "_token": $("meta[name='csrf-token']").attr("content"),
            },
            success: function(data){
                let elementos = data.data;
                for(let i = 0 ; i < elementos.length ; i++){
                        let opt = document.createElement('option');
                        opt.value = elementos[i].id;
                        let texto = elementos[i].descripcion;
                        opt.innerHTML = texto[0].toUpperCase()+texto.slice(1).toLowerCase();
                        selectTipo.appendChild(opt);
                    }
            }
        })
    }
    GetTipos();
</script>
