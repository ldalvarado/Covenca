@extends('layouts.app')

@section('contenido')
<div class="br-pagebody mg-t-5 pd-15">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12">
        <div class="card w-100">

          <div class="card-header pt-3 pb-3">
            <div class="row justify-content-center">
              <div class="col align-self-center">
                <h3 class="tx-uppercase tx-bold text-center mb-0">Recepción de Garantías</h3>
              </div>

              <div class="col-auto align-self-center">
                  <div class="btn-group">
                      <!--<a onclick="getSelected()" href="#">lista</a>-->
                      <a id="btnAddOrder" class="btn btn-primary btn-lg text-lg text-bold text-right">
                          
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
                                <th class="text-white" style="text-align: center;"><strong>SELECCIÓN</strong></th>
                                <th class="text-white" style="text-align: center;"><strong>CÓDIGO</strong></th>
                                <th class="text-white" style="text-align: center;"><strong>CLIENTE</strong></th>
                                <th class="text-white" style="text-align: center;"><strong>FACTURA</strong></th>
                                <th class="text-white" style="text-align: center;"><strong>ESTATUS</strong></th>
                            </tr>
                        </thead>

                        <tbody class="text-center">
                        @foreach($Guia->GuiaReclamo as $Gar)

<tr>
    <td> {{$Gar->reclamo->codigoSucursal}} </td>
    <td> {{$Gar->reclamo->nombre}} </td>
    <td> {{$Gar->reclamo->factura}} </td>
    <td> {{$Gar->reclamo->estadoReclamo->first()->getEstado->descripcion}}  </td>
    <td> <a name="" id="" class="btn btn-primary btn-sm" href="{{ route('warranty.show', $Gar->reclamo->id) }}" role="button">Ver</a> </td>
</tr>
@endforeach
                            <tr>
                            <td></td>
                                <td> A32-000002</td>
                                <td> Pedro </td>
                                <td> 000002 </td>
                                <td> Aprobado </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td> A32-000002</td>
                                <td> Polar </td>
                                <td> 000001 </td>
                                <td> Aprobado </td>
                            </tr>

                            <!--
                            @foreach($Garantia as $Guia)
                            <tr>
                                <td> {{$Guia->codigo}} </td>
                                <td> {{$Guia->cliente}} </td>
                                <td> {{$Guia->factura}} </td>
                                <td> {{$Guia->estatus}} </td>
                                <td>
                                    <a class="btn btn-info">Editar</a>
                                    <button class="btn btn-danger" >Borrar</button>
                                </td>
                            </tr>
                            @endforeach
                            -->
                        </tbody>
                    </table>
                </div>
            </div>
          </div>

        
        </div><!-- card w-100 -->
      </div><!-- col-12 -->
    </div><!--row-->
  </div>

</div><!--pagebody-->

<script>
 $(document).ready(function(){
        
        ActivateNavLink("nav-link_wr");

    });
    let garantia = {!!$Garantia!!};

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

            let info = table.row($(this).closest('tr')).data();
            info.checked = this.checked;
            cell.checkboxes.select(this.checked);
            garantia[row.index()].checked = this.checked;

        console.log(garantia);
        });

        function getSelected() {
                    var count = table.rows( { selected: true } ).count();
                    let checkeds = [];
                     for(let i = 0 ; i < garantia.length ; i++){
                      if(garantia[i].checked){
                        checkeds[checkeds.length]= garantia[i].id;
                      }
                    }
    
    //window.location =  '';
                    //events.prepend( '<div>'+count+' row(s) selected</div>' );
        }

</script>
@endsection