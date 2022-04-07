@extends('layouts.app')

@section('contenido')

<div class="modal fade" id="modal_crear">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h4 class="modal-title" id="tituloModal">Crear Renovado</h4>
                <button type="button" class="close text-white" onclick="limpiarFormulario();" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form role="form" class="" id="formCrear">
                <div class="container-fluid pt-2">
                    <div class="row ">
                        <input type="hidden" name="idUser" value="1">
                        <div class="col-sm-6">
                            <div class="form-group w-100">
                                <label for="medida">Medida:</label>
                                <select class="form-control select2 select2-show-search" name="idMedida" id="idMedida" style="width: 100%;">
                                <option selected="selected" value="">seleccionar</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="ancho">Ancho:</label>
                                <select class="form-control select2 select2-show-search" name="idAncho" id="idAncho" style="width: 100%;">
                                <option selected="selected" value="">seleccionar</option>
                                </select>
                            </div>                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="diseno">Diseño:</label>
                                <select class="form-control select2 select2-show-search" name="idDiseno"  id="idDiseno" style="width: 100%;">
                                  <option selected="selected" value="">seleccionar</option>
                                  <option selected="selected" value="1">prueba</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="precio">Precio:</label>
                                <input class="form-control" type="text" name="precio">
                            </div>                                
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="imagen">Imagen:</label>
                        </div>
                        <div class="col-12">
                            <div class="form-group">

                                <label class="custom-file w-100">
                                    <input type="file" id="file2" class="form-control custom-file-input">
                                    <span class="custom-file-control custom-file-control-primary"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="imagen" value="/img/xxx.png">
                    <input type="hidden" name="activo" value="true">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="limpiarFormulario();" aria-label="Close">Descartar</button>
                    <button type="button" class="btn btn-primary" onclick="crear()" id="nuevo">Guardar</button>
                </div>

            </form>
        </div>

    </div>

</div>

<div>
    <div class="br-pagebody mg-t-5 pd-30">
      <div class="row">
         <div class="col-12 col-md-12">
              <div class="card w-100">
                  <div class="card-header pt-3 pb-3">
                      <div class="row justify-content-center">
                          <div class="col align-self-center">
                              <h4 class=" text-bold text-left mb-0">Listado de Renovados</h4>
                          </div>
                          <div class="col-auto align-self-center">
                              <div class="btn-group" style="">
                                  <a id="btnAddOrder" class="btn btn-primary btn-lg text-lg text-bold text-right" href="#" data-toggle="modal" data-target="#modal_crear" onclick="buscarCrear()"><i class="fa fa-plus"> <span class="textoBoton"> Crear Renovado</span></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="form-group">
                          <div class="p-2 table-responsive">
                              <table class="table table-bordered table-striped" id="tableRenovados">
                                  <thead class="text-center bg-dark text-white">
                                      <tr>
                                          <th class="text-white text-center"><strong>ITEM</strong></th>
                                          <th class="text-white text-center"><strong>MEDIDA</strong></th>
                                          <th class="text-white text-center"><strong>ANCHO</strong></th>
                                          <th class="text-white text-center"><strong>DISEÑO</strong></th>
                                          <th class="text-white text-center"><strong>PRECIO</strong></th>
                                          <th class="text-white text-center"><strong>ACCIONES</strong></th>
                                      </tr>	
                                  </thead>
                                  <tbody class="text-center" style="vertical-align: middle;"></tbody>

                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
    
    <script>

function stringFormat() {
	var args = arguments,
	string = args[0],
	i = 1;
	return string.replace(/%((%)|s|d)/g, function (m) {
		// m is the matched format, e.g. %s, %d
		var val = null;
		if (m[2]) {
			val = m[2];
		} else {
			val = args[i];
			// A switch statement so that the formatter can be extended. Default is %s
			switch (m) {
				case '%d':
					val = parseFloat(val);
					if (isNaN(val)) {
						val = 0;
					}
					break;
			}
			i++;
		}
		return val;
	});
}

        function buscarCrear(){
            $.ajax({
                type: "GET",
                url: url+'medidas',
                data: {},
                success: function (datos) {

                    if (datos.success) {
                        var data = datos.data;
                        var select = $("#idMedida")[0]; 
                        select.length = 0;   
                        console.log(data);
                        for (i = 0; i < data.length; i++) {
                            if(data[i].activo == 1 && data[i].descripcion != "" && data[i].id != ""){
                                select[i + 1] = new Option(data[i].descripcion, data[i].id, "", "");
                            }
                        }
                    } else {
                        Swal.fire({
                            title: "Alerta",
                            text: datos.error,
                            type: "error",
                            confirmButtonClass: "btn-danger",
                            confirmButtonText: "Aceptar",
                        });
                    }

                },
                error: function (datos) {

                },
            });
            $.ajax({
                type: "GET",
                url: url+'anchos',
                data: {},
                success: function (datos) {

                    if (datos.success == true) {
                        var data = datos.data;
                        var select = $("#idAncho")[0]; 
                        select.length = 0;   
                        for (i = 0; i < data.length; i++) {
                            if(data[i].activo == 1){
                                select[i + 1] = new Option(data[i].descripcion, data[i].id, "", "");
                            }
                        }
                    } else {
                        Swal.fire({
                            title: "Alerta",
                            text: datos.error,
                            type: "error",
                            confirmButtonClass: "btn-danger",
                            confirmButtonText: "Aceptar",
                        });
                    }

                },
                error: function (datos) {

                },
            });
            /*
            $.ajax({
                type: "GET",
                url: url+'diseno',
                data: {},
                success: function (datos) {
                    console.log(datos);
                    if (datos.isSuccess == true) {

                    } else {

                    }

                },
                error: function (datos) {

                },
            });
            */
        }

         var validar_renovado = $('#formCrear').validate({
                rules: {
                    idMedida: {
                        required: true,
                    },
                    idAncho: {
                        required: true,
                    },
                    idDiseno: {
                        required: true,
                    },
                    precio: {
                        required: true,
                    },
                },
                messages: {
                    idMedida: {
                        required: "la medida es requerido",

                    },
                    idAncho: {
                        required: "El ancho es requerido",
              

                    },
                    idDiseno: {
                        required: "El diseno es requerido",
                    },
                    precio: {
                        required: "El precio es requerido",
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
            var va = validar_renovado.form();

            var form = $('#formCrear');
            console.log(form);
            event.preventDefault();

            if (va) {
                $.post(url+'renovados/create', {"idUser": 1,"idMedida": 1,"idDiseno": 1,"idAncho": 1,"precio": 26.33,"imagen": "/img/xxx.png","activo": true}, function() {

                })
                .done(function(datos) {
                    console.log(datos);
                })
                .fail(function() {
                  alert( "error" );
                })
                .always(function() {
                  alert( "finished" );
                });
                /*
                $.ajax({
                type: "Post",
                url: url+'renovados/create',
                data: form.serialize(),
                success: function (datos) {
                    console.log(datos);
                    if (datos.success == true) {

                    } else {
                        Swal.fire({
                            title: "Alerta",
                            text: datos.error,
                            type: "error",
                            confirmButtonClass: "btn-danger",
                            confirmButtonText: "Aceptar",
                        });
                    }

                    },
                    error: function (datos) {

                    },
                });
            */
            }
        }
        var table = $('#tableRenovados').DataTable({
            ajax: {
                type: "GET",
                url: url+'renovados',
                dataSrc : function (datos) {
                    
    
    console.log("hola");

                    if (datos.success == true) {
                        return datos.data;
                    } else {
                        Swal.fire({
                            title: "Alerta",
                            text: datos.message,
                            type: "error",
                            confirmButtonClass: "btn-danger",
                            confirmButtonText: "Aceptar",
                        });
                        return {};
                    }
                },
            },
            columnDefs:
                [{
                    targets: [5],
                    orderable: false,
                    searchable: false
                }],
            columns: [
                { "data": "id", "defaultContent": "" },
                { "data": "medida", "defaultContent": "" },
                { "data": "ancho", "defaultContent": "" },
                { "data": "diseno", "defaultContent": "" },
                { "data": "precio", "defaultContent": "" },
                {
                    "render": function (data, type, row) {
                        return `  
                        <div class="text-center" style="display: inline-flex;">
                            <a class="btn btn-primary ml-2 mr-2  btn-md"  onclick="ver_renovado(\'` + row.id + `\')" ><i class="far fa-eye"style="color: #fafafa;"></i></a>
                            <a class="btn btn-info  ml-2 mr-2   btn-md"  onclick="editar_renovado(\'` + row.id + `\')" ><i class="far fa-edit"style="color: #fafafa;"></i></a>
                            <a class="btn btn-danger   ml-2 mr-2  btn-md"  onclick="eliminar_renovado(\'` + row.id + `\')" ><i class="fa fa-trash-alt"style="color: #fafafa;"></i></a>
                        </div>

                        `;
                    }
                }
            ],
            "order": [],
            "lengthChange": true,
            "info": true,
            "autoWidth": false,
            "language": lang
        });

        
        $(document).ready(function () {
            console.log("hola");
            BucarSocio();   


        })
    </script>
</div>
@endsection