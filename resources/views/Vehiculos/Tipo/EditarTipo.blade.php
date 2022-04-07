<div class="modal fade" id="modal_editar">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h4 class="modal-title te" id="tituloModal">Editar Tipo</h4>
                <button type="button" class="close text-white" onclick="limpiarFormulario();" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width: min-content;">   
                <form role="form" class="parsley-style-1" id="formeditar">
                    <div class="container-fluid pt-2">
                    <div class = "row" style = "padding-bottom:20px">
                            <div class="col-12">
                                 <label>Eje: <span class="tx-danger"></span></label>

                                <select class="form-control" id="selectEjeEdit" data-live-search="true" data-placeholder="Seleccione Eje">
                                    <option label="Seleccione Eje"></option>
                                
                                </select>
                            </div>
                            
                        </div>
                        <div class="row">
                        <input type="hidden" id="idEditausu" name="idUser" value="" class="form-control wd-250" placeholder="Descripción">
                        <input type="hidden" id="idEditacodigo" name="idcodigo" value="" class="form-control wd-250" placeholder="Descripción">
                            <div class="col-4">
                                <div id="medidas" class="parsley-input">
                                    <label>Descripcion: <span class="tx-danger"></span></label>
                                    <input type="text" id="idEditadescripcion" name="descripcion" class="form-control wd-250" placeholder="Descripción" data-parsley-class-handler="#medidas">
                                </div>
                            </div>

                            <div class="col-0">

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="idEditaActivo" name="activo" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Activo</label>
                                </div>

                            </div>
                                
                            
                        </div><!-- d-flex -->
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="limpiarFormulario();" aria-label="Close">Descartar</button>
                        <button type="button" onclick="actualizar();" class="btn btn-primary" id="editar">Actualizar</button>
                    </div>
                </form>
                
            </div>

        </div>

    </div>


</div>
<script>
    let selectedit = document.getElementById('selectEjeEdit');
    $.ajax({
   
                url: '<?php echo route('ListadoEje') ?>',
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
                        selectedit.appendChild(opt);
                    }
                }});
    var validar_formEditar = $('#formeditar').validate({
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
        function editar_ancho(id){
            var settings = {
                "url": '<?php echo route('GetTipoVehiculo')?>',
                "method": "POST",
                
                data: {
                    "_token": $("meta[name='csrf-token']").attr("content"),
                    "id":id,
                    },
                
            };

            $.ajax(settings).done(function (data) {
                let response = data.data;
                    console.log(response.descripcion);
                    var des = response.descripcion
                    var cod = response.id;
                    var act = response.activo;
                    $("#idEditacodigo").val(cod);
                    $("#idEditadescripcion").val(des);
                    $("#idEditaActivo").val(act);
                    selectedit.value = response.idEje;
                    console.log(cod+' '+des+' '+act);
                    
                })

                .fail(function() {
                  alert( "error" );
                })
                
       
        }
    function actualizar(){
        var va = validar_formEditar.form();
        var id = $("#idEditacodigo").val();
        var activos = $("#idEditaActivo")[0].checked;
        var descripcion = $("#idEditadescripcion").val();
        var idusuario = "1";
        var form = $("#formeditar");
        console.log(id+' '+descripcion+' '+idusuario);
        
        if (va) {
            var settings = {
                "url": '<?php echo route('UpdateTipoVehiculo')?>' ,
                "method": "PUT",
                data: {
                    "_token": $("meta[name='csrf-token']").attr("content"),
                    "id":id,
                    "descripcion":descripcion,
                    'activo':activos,
                    "idEje":selectedit.value
                    },
            };

            $.ajax(settings).done(function (response) {
                    console.log(response);
                    $('#modal_editar').modal('toggle');
                    
                    table.ajax.reload();
            })
            .fail(function() {
                  alert( "error" );
            })
            
        }
    }

    

</script>


