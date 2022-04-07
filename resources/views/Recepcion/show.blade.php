@extends('layouts.app')

@section('contenido')
<div class="br-pagebody mg-t-5 pd-15">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12">
        <div class="card w-100">
        <form action="{{route('Guia.store')}}" method="POST" class="parsley-style-1" name="form" id="form" enctype="multipart/form-data">
        <input type="hidden" name="name" class="form-control" placeholder="Enter Name" required="">
        <div class="card-header pt-3 pb-3">
            <div class="row justify-content-center">
              <div class="col align-self-center">
                <h3 class="tx-uppercase tx-bold text-center mb-0">Repcionar Guía: {{$Guia->codigo}}</h3>
              </div>
              
              <div class="col-auto align-self-center">
                  <div class="btn-group">
                      <!--<a onclick="getSelected()" href="#">lista</a>-->
                      <a id="btnAddOrder" onclick="getSelected()" class="btn btn-primary btn-sm text-lg text-bold text-right"  href="#">
                          <i class="fa fa-plus"></i>
                          <span class="textoBoton">Recepcionar</span>
                      </a>
                  </div>
              </div>

            </div>
            
          </div>
          <div class="card-body">

             <div class="form-group">
                <div class="p-2 table-responsive">
                    <table class="table table-bordered table-striped" id="tablaGuias">
                        <thead class="text-center bg-dark text-white">
                            <tr>

                                <th class="text-white" style="text-align: center;"><strong>SELECCIONAR</strong></th>
                                <th class="text-white" style="text-align: center;"><strong>CÓDIGO</strong></th>
                                <th class="text-white" style="text-align: center;"><strong>CLIENTE</strong></th>
                                <th class="text-white" style="text-align: center;"><strong>FACTURA</strong></th>
                                <th class="text-white" style="text-align: center;"><strong>ESTADO</strong></th>
                                <th class="text-white" style="text-align: center;"><strong>ACCIONES</strong></th>
                            </tr>
                        </thead>

                        <tbody class="text-center">

@foreach($Guia->GuiaReclamo as $Gar)

<tr>
    <td width="10%"> {{$Gar}} </td>
    <td> {{$Gar->reclamo->codigoSucursal}} </td>
    <td> {{$Gar->reclamo->nombre}} </td>
    <td> {{$Gar->reclamo->factura}} </td>
    <td> {{$Gar->reclamo->estadoReclamo->first()->getEstado->descripcion}}  </td>
    <td> <a name="" id="" class="btn btn-primary btn-sm" href="{{ route('warranty.show', $Gar->reclamo->id) }}" role="button">Ver</a> </td>
</tr>
@endforeach

                        </tbody>
                    </table>
                </div>
            </div>


          </div>

          </form>
        </div><!-- card w-100 -->
      </div><!-- col-12 -->
    </div><!--row-->
  </div>

</div><!--pagebody-->


<script>

$(document).ready(function(){
        
        ActivateNavLink("nav-link_wr");

    });
    let garantia = {!!$Guia->GuiaReclamo!!};

        var table = $('#tablaGuias').DataTable({

            select: 'multi',
            'columnDefs': [
               {
                   'targets': 0,
                   'checkboxes': {
                       'selectRow': true,
                       'selectCallback': function (nodes, selected) {
                           $('input[type="checkbox"]', nodes).iCheck('update');
                       },
                       'selectAllCallback': function (nodes, selected, indeterminate) {
                           $('input[type="checkbox"]', nodes).iCheck('update');
                       }
                   }
               }
            ],

        select: {
            style:    'os',
            selector: 'td:first-child'
        },

        });

        // Handle iCheck change event for "select all" control
        $(table.table().container()).on('ifChanged', '.dt-checkboxes-select-all input[type="checkbox"]', function (event) {
            var col = table.column($(this).closest('th'));
            col.checkboxes.select(this.checked);
            for(let i = 0 ; i < garantia.length;i++){
                garantia[i].checked = this.checked;
            }
            console.log(garantia);
        });

        // Handle iCheck change event for checkboxes in table body
        $(table.table().container()).on('ifChanged', '.dt-checkboxes', function (event) {
            var cell = table.cell($(this).closest('td'));

            let row = table.row($(this).closest('tr'));
            let info = row.data();
            info.checked = this.checked;
            garantia[row.index()].checked = this.checked;

            cell.checkboxes.select(this.checked);
            console.log(garantia);
        });

        function getSelected() {
            event.preventDefault();
                    var count = table.rows( { selected: true } ).count();
                    let checkeds = [];
                    for(let i = 0 ; i < garantia.length ; i++){
                      if(garantia[i].checked){
                        checkeds[checkeds.length]= garantia[i].id;
                      }
                    }
    
    //window.location =  '';
                    //events.prepend( '<div>'+count+' row(s) selected</div>' );

      //event.preventDefault();
      //$('#form').submit();    



      let name = $("input[name=name]").val();
      let email = $("input[name=email]").val();
      let mobile_number = $("input[name=mobile_number]").val();
      let message = $("input[name=message]").val();
      let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: "{{route('Recepcion.store')}}",
        type:"POST",
        data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "datos": checkeds,
        "codigo":  "{{$Guia->codigo}}" 
    },
    success:function(response){
          console.log(response);
          if(response.isSuccess) {
            window.location.href = "{{route('Recepcion.index')}}";
          }else{
            Toast.fire({
                    type: 'error',
                    title: response.message
            })
          }
        },
       });

        }

</script>
@endsection