<div class="modal fade" id="modal_crear">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h4 class="modal-title te" id="tituloModal">Crear Causa</h4>
                <button type="button" class="close text-white" onclick="limpiarFormulario();" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width: min-content;">   
                <form role="form" class="parsley-style-1" id="formCrear">
                    <div class="container-fluid pt-2">
                        <div class="row">
                            <div class="col-12">
                                 <label>Anchos: <span class="tx-danger"></span></label>

                                <select class="form-control" id="selectAncho" data-live-search="true" data-placeholder="Seleccione aplicacion">
                                    <option label="Seleccione ancho"></option>
                                    @foreach ($anchos as $ancho)
                                        <option value="{{$ancho->id}}">{{ $ancho->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                 <label>Profundidades: <span class="tx-danger"></span></label>

                                <select class="form-control" id="selectProfundidad" data-live-search="true" data-placeholder="Seleccione aplicacion">
                                    <option label="Seleccione profundidad"></option>
                                    @foreach ($profundidades as $profundidad)
                                        <option value="{{$profundidad->id}}">{{ $profundidad->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                        <input type="hidden" id="idusu" name="idUser" value="1" class="form-control wd-250" placeholder="Descripción">
                            

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
        var url = window.location.href;
                var id = url.substring(url.lastIndexOf('?') + 1);
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
            var url = window.location.href;
                var id = url.substring(url.lastIndexOf('?') + 1);
            var settings = {
           
                "url": '<?php echo route('CreateDisenoAncho')?>',
                "method": "POST",
                data: {
                    "_token": $("meta[name='csrf-token']").attr("content"),
                    "idDiseno":id,
                    "idAncho":$("#selectAncho").val(),
                    "activos": activos,  
                    "idProfundidad": $("#selectProfundidad").val(),              
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


