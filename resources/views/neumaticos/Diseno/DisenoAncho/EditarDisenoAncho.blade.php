<div class="modal fade" id="modal_editar">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h4 class="modal-title te" id="tituloModal">Editar Causa</h4>
                <button type="button" class="close text-white" onclick="limpiarFormulario();" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width: min-content;">   
                <form role="form" class="parsley-style-1" id="formeditar">
                    <div class="container-fluid pt-2">
                        <div class="row">
                        <div class="col-12">
                                 <label>Anchos: <span class="tx-danger"></span></label>

                                <select class="form-control" id="selectAnchoE" data-live-search="true" data-placeholder="Seleccione aplicacion">
                                    <option label="Seleccione ancho"></option>
                                    @foreach ($anchos as $ancho)
                                        <option value="{{$ancho->id}}">{{ $ancho->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                 <label>Profundidades: <span class="tx-danger"></span></label>

                                <select class="form-control" id="selectProfundidadE" data-live-search="true" data-placeholder="Seleccione aplicacion">
                                    <option label="Seleccione profundidad"></option>
                                    @foreach ($profundidades as $profundidad)
                                        <option value="{{$profundidad->id}}">{{ $profundidad->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" id="idEditausu" name="idUser" value="" class="form-control wd-250" placeholder="Descripción">
                        <input type="hidden" id="idEditacodigo" name="idcodigo" value="" class="form-control wd-250" placeholder="Descripción">

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
        let id1;
        function editar_ancho(id){
            id1 = id;
            var settings = {
                "url": '<?php echo route('GetDisenoAncho') ?>',
                "method": "POST",
                
                data: {
                    "_token": $("meta[name='csrf-token']").attr("content"),
                    "id":id,
                    },
                
            };

            $.ajax(settings).done(function (data) {
                let response = data.data;
                    
                    $("#selectAnchoE").val(response.idAncho);
                    $("#selectProfundidadE").val(response.idProfundidad);
                  
                    
                })

                .fail(function() {
                  alert( "error" );
                })
                
       
        }
    function actualizar(){
        var va = validar_formEditar.form();
        var id = id1;
        var activos = $("#idEditaActivo")[0].checked;
        var idusuario = "1";
        var form = $("#formeditar");
        
        if (va) {
            var settings = {
                "url": '<?php echo route('UpdateDisenoAncho') ?>' ,
                "method": "PUT",
                data: {
                    "_token": $("meta[name='csrf-token']").attr("content"),
                    "id":id,
                    'activo':activos,
                    "idAncho":$("#selectAnchoE").val(),
                    "idProfundidad":$("#selectProfundidadE").val(),
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


