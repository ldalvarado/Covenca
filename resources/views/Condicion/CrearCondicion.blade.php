<div class="modal fade" id="modal_crear">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h4 class="modal-title te" id="tituloModal">Crear Condicion</h4>
                <button type="button" class="close text-white" onclick="limpiarFormulario();" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width: min-content;">   
                <form role="form" class="parsley-style-1" id="formCrear">
                    <div class="container-fluid pt-2">
                        <div class = "row" style = "padding-bottom:20px">
                            <div class="col-12">
                                 <label>Producto: <span class="tx-danger"></span></label>

                                <select class="form-control" id="selectProducto" data-live-search="true" data-placeholder="Seleccione Producto">
                                    <option label="Seleccione Producto"></option>
                                
                                </select>
                            </div>
                            
                        </div>
                        <div class="row">
                        <input type="hidden" id="idusu" name="idUser" value="1" class="form-control wd-250" placeholder="Descripción">
                            <div class="col-4">
                                <div id="medidas" class="parsley-input">
                                    <label>Descripcion: <span class="tx-danger"></span></label>
                                    <textarea  id="iddescricion" name="descripcion" class="form-control wd-250" placeholder="Descripción" data-parsley-class-handler="#medidas" rows="3"></textarea>
                                </div>
                                
                            </div>

                            <div class="col-0">

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="idactivo" name="activo" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Activo</label>
                                </div>

                            </div>
                                
                            
                        </div>
</br>                   <div class = "row">
                            <div class = "col-12">
                            <label>Respuesta: <span class="tx-danger"></span></label> </div>
</div>
                        <div class = "row">
                            <div class="col-6">
                               
                                <label class="d-flex justify-content-center rdiobox ">
                                    <input name="resp_create" type="radio" id="yes_rb" value="yes" checked ><span>Si</span>
                                </label> 
                            </div>
                            <div class="col-6">
                                <label class="d-flex justify-content-center rdiobox ">
                                    <input name="resp_create" type="radio"  id="no_rb" value="no" ><span>No</span>
                                
                                </label>
                            </div>
                        </div><!-- d-flex -->
                      
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="limpiarFormulario();" aria-label="Close">Descartar</button>
                        <button type="button" onclick="crear()" class="btn btn-primary" id="nuevo">Guardar</button>
                    </div>
                </form>
                
            </div>

        </div>

    </div>

</div>
<script>
    let select = document.getElementById('selectProducto');
    $.ajax({
   
                url: '<?php echo route('ListadoTipoProducto') ?>',
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
    var validar_ancho = $('#formCrear').validate({
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
        var va = validar_ancho.form();
        var activos = $("#idactivo")[0].checked;
        var descripcion = $("#iddescricion").val();
        var idusuario = $("#idusu").val();
        var form = $("#formCrear");
        if(activos){
            activos = 1;
        }
        else{
            activos = 0;
        }
        if (va) {
            var resp_yes = 0;
            if(document.getElementById("yes_rb").checked){
                resp_yes = 1;
            }
            var settings = {
           
                "url": '<?php echo route('CreateCondicion')?>',
                "method": "POST",
                data: {
                    "_token": $("meta[name='csrf-token']").attr("content"),
                    "descripcion":descripcion,
                    "activos": activos, 
                    "idProducto": select.value, 
                    "respuesta" :  resp_yes,            
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


