<div class="modal fade" id="modal_crear">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h4 class="modal-title te" id="tituloModal">Crear Modelo</h4>
                <button type="button" class="close text-white" onclick="limpiarFormulario();" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width: min-content;">   
                <form role="form" class="parsley-style-1" id="formCrear">
                    <div class="container-fluid pt-2">
                        <div class = "row" style = "padding-bottom:20px">
                            <div class="col-12">
                                 <label>Marca: <span class="tx-danger"></span></label>

                                <select class="form-control" id="selectMarca" data-live-search="true" data-placeholder="Seleccione Marca">
                                    <option label="Seleccione Marca"></option>
                                
                                </select>
                            </div>
                            
                        </div>
                        <div class="row">
                        <input type="hidden" id="idusu" name="idUser" value="1" class="form-control wd-250" placeholder="Descripción">
                            <div class="col-4">
                                <div id="medidas" class="parsley-input">
                                    <label>Modelo: <span class="tx-danger"></span></label>
                                    <input type="text" id="iddescricion" name="descripcion" class="form-control wd-250" placeholder="Descripción" data-parsley-class-handler="#medidas">
                                </div>
                                
                            </div>

                            <div class="col-0">

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="idactivo" name="activo" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Activo</label>
                                </div>

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
    let select = document.getElementById('selectMarca');
    $.ajax({
   
                url: '<?php echo route('ListadoMarca') ?>',
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
            var settings = {
           
                "url": '<?php echo route('CreateModelo')?>',
                "method": "POST",
                data: {
                    "_token": $("meta[name='csrf-token']").attr("content"),
                    "descripcion":descripcion,
                    "activos": activos, 
                    "idMarca": select.value,              
                    },
            };

            $.ajax(settings).done(function (response) {
                    console.log(response);
                    $('#modal_crear').modal("hide");
                    location.reload();
                })
                .fail(function(jqXHR, textStatus) {
                    toastr.error(jqXHR.responseText );

                  //alert( jqXHR.responseText );
                })
                .always(function() {
                 
                  
                  
                });
                
                
            

        };

    }

</script>


