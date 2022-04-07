<div class="modal fade" id="modal_crear">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h4 class="modal-title te" id="tituloModal">Crear Diseno</h4>
                <button type="button" class="close text-white" onclick="limpiarFormulario();" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="" style= "color:white !important;" >   
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="container-fluid pt-2">
                                <div class="">
                                    <input type="hidden" id="idusu" name="idUser" value="1" class="form-control wd-250" placeholder="Descripción"/>
                                        <div class="" style ="padding-bottom=1.5rem">
                                            <div id="medidas" class="parsley-input">
                                                <label>Descripción: <span class="tx-danger"></span></label>
                                                <input type="text" id="iddescricion" name="descripcion" class="form-control" placeholder="Descripción" data-parsley-class-handler="#medidas">
                                            </div>
                                            
                                        </div>
                                        <div class="">

                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="idactivo" name="activo" checked>
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Activo</label>
                                            </div>

                                        </div>
                                        <div class = "row" style = "padding-bottom:20px">
                            <div class="col-12">
                                 <label>Aplicacion: <span class="tx-danger"></span></label>

                                <select class="form-control" id="selectAplicacion" data-live-search="true" data-placeholder="Seleccione Marca">
                                    <option label="Seleccione Aplicacion"></option>
                                
                                </select>
                            </div>
                            
                                     
                                        
                                </div><!-- d-flex -->
                                <div class = "" style = "padding-bottom:20px">
                                    <div class="">
                                        <label>Anchos: <span class="tx-danger"></span></label>

                                        <select class="form-control" id="selectMarca" data-live-search="true" data-placeholder="Seleccione Marca">
                                            <option label="Seleccione Ancho"></option>
                                        
                                        </select>
                                    </div>
                                    
                                </div> 
                                <button type="button" onclick="updateTableJson()" class="btn btn-primary" id="nuevo">Agregar Ancho</button>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8" >
                        <div class="p-2 table-responsive">
                              <table class="table table-bordered table-striped" id="tableAnchos">
                                  <thead class="text-center bg-dark text-white">
                                      <tr>
                                          <th class="text-white" style="text-align: center;"><strong>CÓDIGO</strong></th>
                                          <th class="text-white" style="text-align: center;"><strong>DESCRIPCIÓN</strong></th>
                                          <!--<th class="text-white" style="text-align: center;"><strong>ACTIVO</strong></th>-->
                                          <th class="text-white" style="text-align: center;"><strong>ACCIONES</strong></th>
                                      </tr>	
                                  </thead>
                                  <tbody class="text-center"></tbody>

                              </table>
                          </div>
                        </div>
                    </div>                    
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="limpiarFormulario();" aria-label="Close">Descartar</button>
                        <button type="button" onclick="crear()" class="btn btn-primary" id="nuevo">Guardar</button>
                    </div>
       
                
            </div>

        </div>

    </div>

</div>
<script>
    let jsonAnchos = [];
    let select = document.getElementById('selectMarca');
    function updateTableJson(){}
    function deleteRow(){}
    $(document).ready(function () {
        var user_json = jsonAnchos;
        console.log(user_json);
        var count = 0;
        var table = $('#tableAnchos').DataTable({
        
            data: user_json,

            columns: [
                { "data": "id", "defaultContent": "" },
                { "data": "descripcion", "defaultContent": "" },
                {
                    "render": function (data, type, row) {
                        count++;
                        var county = count - 1;
                        console.log(row);
                        return '<div class="btn btn-danger  eliminar btn-md" onclick="deleteRow('+row.index+')" ><i class="fas fa-user-times" style="color: #fafafa;"></i></div>';
                    }
                },

            ],
            "order": [],
            "lengthChange": true,
            "info": true,
            "autoWidth": false,
            "language": lang,

        });
        deleteRow = function(rowid){
            table.row(rowid).remove().draw();
            jsonAnchos.splice(rowid);
            console.log(jsonAnchos);
        }
        updateTableJson = function(){
            let index = jsonAnchos.length ;
             
            let elemento = {'id':select.value,'descripcion':select.options[select.selectedIndex].text,'index' : index};
            jsonAnchos[index] = elemento;
            table.rows.add([elemento]).draw();
            console.log(jsonAnchos);
        }
});

let selectApp = document.getElementById('selectAplicacion');
    $.ajax({
   
                url: '<?php echo route('NeumaticoListadoAplicacion') ?>',
                type: "POST",                
                data: {
                    "_token": $("meta[name='csrf-token']").attr("content"),
                   
                    },
                success: function(data){
                    let elementos = data.data;
                    for(let i = 0 ; i < elementos.length ; i++){
                        let opt = document.createElement('option');
                        opt.value = elementos[i].id;
                        opt.innerHTML = elementos[i].descripcion;
                        selectApp.appendChild(opt);
                    }
                }});

    $.ajax({
   
                url: '<?php echo route('NeumaticoListadoAncho') ?>',
                type: "POST",                
                data: {
                    "_token": $("meta[name='csrf-token']").attr("content"),
                   
                    },
                success: function(data){
                    let elementos = data.data;
                    for(let i = 0 ; i < elementos.length ; i++){
                        let opt = document.createElement('option');
                        opt.value = elementos[i].id;
                        opt.innerHTML = elementos[i].descripcion;
                        select.appendChild(opt);
                    }
                }});
    var validar_Diseno = $('#formCrear').validate({
                rules: {
                    descripcion: {
                        required: true,
                    },
                    activo: {
                        required: true,
                    },
                },
                messages: {
                    descripcion: {
                        required: "La descripción es requerida",

                    },
                    activo: {
                        required: "El activo es requerido",
              

                    },
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
        });
    function crear(){
        var va = validar_Diseno.form();
        var activos = $("#idactivo")[0].checked;
        var descripcion = $("#iddescricion").val();
        var idusuario = $("#idusu").val();
        var form = $("#formCrear");
        var idAnchos = [];
       
        for(let i = 0 ; i<jsonAnchos.length ; i++){
            idAnchos[i]=jsonAnchos[i].id; 
        }
        if(activos){
            activos = 1;
        }
        else{
            activos = 0;
        }
        if (va) {
            var settings = {
           
                "url": '<?php echo route('CreateDiseno')?>',
                "method": "POST",
                data: {
                    "_token": $("meta[name='csrf-token']").attr("content"),
                    "descripcion":descripcion,
                    "activos": activos, 
                    "idMarca": select.value, 
                    "idAnchos": idAnchos,  
                    "idAplicacion": $("#selectAplicacion").val()           
                    },
            };

            $.ajax(settings).done(function (response) {
                    console.log(response);
                    $('#modal_crear').modal("hide");
                    location.reload();
                })
                .fail(function() {
                  alert( "error" );
                })
                .always(function() {
                 
                  
                  
                });
                
                
            

        };

    }

</script>


