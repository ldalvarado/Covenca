@extends('layouts.app')

@section('contenido')

    <div class="br-pagebody mg-t-5 pd-30">
      <div class="row">
         <div class="col-12 col-md-12">
              <div class="card w-100">
                  <div class="card-header pt-3 pb-3">
                      <div class="row justify-content-center">
                            <div div class="col-auto align-self-center">
                              <div class="btn-group" style="">
                                  <a id="" class="btn btn-primary btn-lg text-lg text-bold text-right" href="{{url('/Neumaticos/Disenos')}}"  > <span class="textoBoton">Regresar</span></i></a>
                              </div>
                          </div>
                          <div class="col align-self-center">
                              <h4 id="title" class=" text-bold text-center mb-0">Listado de Diseños</h4>
                          </div>
                          <div class="col-auto align-self-center">
                              <div class="btn-group" style="">
                                  <a id="btnAddOrder" class="btn btn-primary btn-lg text-lg text-bold text-right" href="#"  data-toggle="modal" data-target="#modal_crear"><i class="fa fa-plus"> <span class="textoBoton"> Diseños</span></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="form-group">
                          <div class="p-2 table-responsive">
                              <table class="table table-bordered table-striped" id="tableDiseno">
                                  <thead class="text-center bg-dark text-white">
                                      <tr>
                                          <th class="text-white" style="text-align: center;"><strong>CÓDIGO</strong></th>
                                          <th class="text-white" style="text-align: center;"><strong>ANCHO</strong></th>
                                          <th class="text-white" style="text-align: center;"><strong>PROFUNDIDAD</strong></th>
                                          <th class="text-white" style="text-align: center;"><strong>ACCIONES</strong></th>
                                      </tr>	
                                  </thead>
                                  <tbody class="text-center"></tbody>

                              </table>
                          </div>
                      </div>
                  </div>
                  
              </div>
          </div>
        </div>
      </div>

      @include('neumaticos.Diseno.DisenoAncho.CrearDisenoAncho')
      @include('neumaticos.Diseno.DisenoAncho.EditarDisenoAncho')
      <script>
           $(document).ready(function(){
            ActivateNavLink("nav-link_nd");
            });
                let anchos =[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
                let aplicaciones =[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
                title

                var url = window.location.href;
                var id = url.substring(url.lastIndexOf('?') + 1);
                var table = $('#tableDiseno').DataTable({
                ajax: {
                url: '<?php echo route('ListadoDisenoAncho') ?>',
                type: "POST",                
                data: {
                    "_token": $("meta[name='csrf-token']").attr("content"),
                    "id":id,
                    },
                dataSrc : function (datos) {
                    
                    if (datos.success == true) {
                        console.log(datos);
                        var data = datos.data;
                        var dataResponse = [];
                        for (i = 0; i < data.length; i++) {
                            if(data[i].activo == 1){
                                
                                dataResponse.push({"ancho": data[i].ancho.descripcion,"profundidad":data[i].profundidad.descripcion, "id": data[i].id, "activo": data[i].activo });
                            }
                            
                        }
                        return dataResponse;

                    } else {
                        var a = [datos]
                        return a;
                    }
                },
            },
            columnDefs:
            [{
                targets: [2],
                orderable: false,
                searchable: false
            }],
 
        columns: [
            { "data": "id", "defaultContent": "" },
            { "data": "ancho", "defaultContent": "" },
            { "data": "profundidad", "defaultContent": "" },
            <!--{ "data": "activo", "defaultContent": "" },-->
            
            {
                "render": function (data, type, row) {
                    return `  
                    <div class="text-center" style="display: inline-flex;">
                        <a class="btn btn-info  ver btn-md"  onclick="editar_ancho(\'` + row.id + `\')" data-toggle="modal" data-target="#modal_editar"><i class="far fa-edit"style="color: #fafafa;"></i></a>
                        <a class="btn btn-danger  ver btn-md"  onclick="eliminar_Diseno(\'` + row.id + `\')" data-toggle="modal" data-target="#"><i class="fa fa-trash-alt"style="color: #fafafa;"></i></a>
                        
                    </div>
                    `
                }
            }
        ],
        "order":[0,'asc'],
        "lengthChange": true,
        "info": true,
        "autoWidth": false,
        "language": lang
        
    });
    function eliminar_Diseno(id){

            var settings = {
                "url": '<?php echo route('DeleteDisenoAncho') ?>',
                "method": "DELETE",
              
               
                data: {
                    "_token": $("meta[name='csrf-token']").attr("content"),
                    "id":id,
                    },
            };

            $.ajax(settings).done(function (response) {
                    console.log(response);
                    toastr.success("Registro Eliminado");
                    table.ajax.reload();
            })
            .fail(function() {
                  alert( "error" );
            })
            
        
    }
   
    function limpiarFormulario() {

    }
    $.ajax({
   
   url: '<?php echo route('GetDiseno') ?>',
   type: "POST",                
   data: {
       "_token": $("meta[name='csrf-token']").attr("content"),
        "id":id,
       },
   success: function(data){
       document.getElementById("title").innerHTML = data.data.descripcion;
   }});

      </script>

@endsection