@extends('layouts.app')

@section('contenido')

    <div class="br-pagebody mg-t-5 pd-30">
      <div class="row">
         <div class="col-12 col-md-12">
              <div class="card w-100">
                  <div class="card-header pt-3 pb-3">
                      <div class="row justify-content-center">
                          <div class="col-auto align-self-center">
                              <div class="btn-group" style="">
                                  <a id="" class="btn btn-primary btn-lg text-lg text-bold text-right" href="{{url('/Neumatico/Profundidades')}}"  ><i class="fa fa-plus"> <span class="textoBoton">Profundidades</span></i></a>
                              </div>
                          </div>
                          <div class="col align-self-center">
                              <h4 class=" text-bold text-center mb-0">Listado de Diseños</h4>
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
                                          <th class="text-white" style="text-align: center;"><strong>APLICACIÓN</strong></th>
                                          <th class="text-white" style="text-align: center;"><strong>DESCRIPCIÓN</strong></th>
                                          <th class="text-white" style="text-align: center;"><strong>TIPO</strong></th>
                                          <th class="text-white" style="text-align: center;"><strong>REL</strong></th>

                                          <!--<th class="text-white" style="text-align: center;"><strong>ACTIVO</strong></th>-->
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

      @include('neumaticos.Diseno.Diseno.CrearDiseno')
      @include('neumaticos.Diseno.Diseno.EditarDiseno')
      <script>
          $(document).ready(function(){
            ActivateNavLink("nav-link_nd");
            });
          function GotoURL(url){
              console.log(url);
        window.location.href = url;
    }
                var table;
                var zonaDiseno=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
                $.ajax({
                    type: "POST",
                    url: '<?php echo route('NeumaticoListadoAplicacion')?>',
                    data: {
                        
                        "_token": $("meta[name='csrf-token']").attr("content"),
                   
                    },
                    success: function (data) {
                        let elementos = data.data;
                            for(let i = 0 ; i < elementos.length ; i++){
                                zonaDiseno[elementos[i].id]= elementos[i].descripcion;
                              
                            }
                            createTable();
                           
                

                        },
                

                }).done(function () { });
    function createTable(){
        table = $('#tableDiseno').DataTable({
        ajax: {
                url: '<?php echo route('ListadoDiseno')?>',
                type: "POST",                
                data: {
                    "_token": $("meta[name='csrf-token']").attr("content"),
                    "id":"1"
                    },
                dataSrc : function (datos) {
                    
                    if (datos.success == true) {
                        console.log(datos);
                        var data = datos.data;
                        var dataResponse = [];
                        for (i = 0; i < data.length; i++) {
                            let procede = "Caliente";
                            if(data[i].esFrio == 1){
                                procede = "Frio";
                                
                            }
                            if(data[i].procede){
                                    procede = "si";
                                }
                            dataResponse.push({"descripcion": data[i].descripcion,"esFrio":procede,"idZona":zonaDiseno[parseInt(data[i].idAplicacion)], "id": data[i].id, "activo": data[i].activo });

                            
                        }
                        console.log(dataResponse);
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
            { "data": "idZona", "defaultContent": "" },
            { "data": "descripcion", "defaultContent": "" },
            { "data": "esFrio", "defaultContent": "" },
            <!--{ "data": "activo", "defaultContent": "" },-->
            {
                "render": function (data, type, row) {
                    return `  
                    <div class="text-center" style="display: inline-flex;">
                        <button class="btn btn-primary  ver btn-md"  onclick="GotoURL('<?php echo url('/Neumaticos/DisenoAnchos')?>?`+row.id+`')" data-toggle="tooltip" data-placement="top" title="Diseño Ancho" ><i class="fas fa-book-open"style="color: #fafafa;"></i></button>
                        
                    </div>
                    `
                }
            },
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
    }
    
    function eliminar_Diseno(id){

            var settings = {
                "url": '<?php echo route('DeleteDiseno')?>',
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
      </script>

@endsection