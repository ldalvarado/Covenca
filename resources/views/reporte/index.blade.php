@extends('layouts.app')

@section('contenido')

<?php use App\Http\Controller\GuiaController;?>

    <div class="br-pagebody mg-t-5 pd-30">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="row justify-content-center" style="margin-bottom:10px">
                    <div class="col-1 d-flex  align-self-center text-center">
                        <img src="{{asset('/img/logoDoberman.jpg')}}" class="img-fluid rounded float-left" alt="">
                    </div>
                    <div class="col-2 align-self-center text-center">
                        <h4>CLIENTE(S)</h4>
                        <h4>{{$Cantidad_cliente}}</h4>
                    </div>
                    <div class="col-4 align-self-center text-center">
                        <h4>ESTIMACIÓN DE CAMBIOS DE CAUCHOS(MES)</h4>
                        <h4>0<h4>
                    </div>
                    <div class="col-4 align-self-center text-center">
                        <h4>ESTIMACIÓN DE COMPRA CAUCHO AL AÑO</h4>
                        <h4>0</h4>
                    </div>
                </div>
                <div class="card w-100">
                    <div class="card-header pt-3 pb-3">
                        <div class="row justify-content-center">
                            <div class="col align-self-center">
                                <h6 style="margin-bottom:0px;">CANTIDAD VEH.MOTRICES: {{$CantidadVehRemolques}}</h6>
                            </div>
                            <div class="col align-self-center">
                                <h6 style="margin-bottom:0px;">CANTIDAD REMOLQUES: {{$CantidadRemolques}}</h6>
                            </div>
                            <div class="col align-self-center">
                                <h6 style="margin-bottom:0px;">CAUCHOS OPERATIVOS: {{$CauchosOperativos}}</h6>
                            </div>
                            <div class="col align-self-center options-new">
                                <select onchange="FiltroTable()" id="idSucursal" class="form-control selectNew" data-live-search="true" data-placeholder="SUCURSAL(ES)">
                                    <option label="SUCURSAL(ES)"></option>
                                    @foreach($Sucursales as $Sucursal )
                                    <option value={{$Sucursal->id}}>{{$Sucursal->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col align-self-center options-new">
                                <select onchange="FiltroTable()" id="idCliente" class="form-control selectNew" data-live-search="true" data-placeholder="CLIENTE(S)">
                                    <option label="CLIENTE(S)"></option>
                                    @foreach($Clientes as $Cliente )
                                    <option value={{$Cliente->id}}>{{$Cliente->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col align-self-center options-new">
                                <select onchange="FiltroTable()" id="idUsuario" class="form-control selectNew" data-live-search="true" data-placeholder="USUARIO(S)">
                                    <option label="USUARIO(S)"></option>
                                    @foreach($Usuarios as $Usuario )
                                    <option value={{$Usuario->id}}>{{$Usuario->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="p-2 table-responsive">
                                <table class="table table-bordered table-striped" id="tablaClientes">
                                    <thead class="text-center bg-dark text-white">
                                        <tr>
                                            <th class="text-white" style="text-align: center;"><strong>CLIENTES</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>MARCA TEMPORAL</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>Km RECORRIDOS TOTAL</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CANTIDAD VDI</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CANTIDAD REMODELADO</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CAUCHOS OPERATIVOS</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>ESTIMACIÓN DE CAMBIOS</strong></th>
                                        </tr>
                                    </thead>
                                
                                    <tbody class="text-center" id="bodyCliente">
                                        @foreach($Clientes_tabla as $Cliente_tabla)
                                        <tr class="elementos">
                                            <td> {{$Cliente_tabla->nombre}} </td>
                                            <td> 0 </td>
                                            <td> {{$Cliente_tabla->kmFlota}} </td>
                                            <td> 0 </td>
                                            <td> 0 </td>
                                            <td> {{$Cliente_tabla->totalCaucho}} </td>
                                            <td> {{$Cliente_tabla->renovado}} </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<style >
    select.selectNew{
        width: 200px;
        height: 40px;
        border-radius: 10px;
        border: none;
        text-transform: capitalize;
        color: #fff;
        background: #d32f2b;
        text-align: left;
        padding: 0 15px;
        font-size: 16px;
    }
    select.selectNew:hover{
        background: #F26262;
    }
    select.selectNew.active{
        background: #F26262;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }
    select.selectNew:not([size]):not([multiple]) {
        background: #d32f2b;
        color: #fff;
    }
</style>
<script>
    var table = $('#tablaClientes').DataTable({
            'columnDefs': [
            {
                'targets': 0,

            }
        ],
    });
     $(document).ready(function(){
        
        ActivateNavLink("nav-link_rc");

    });
    function FiltroTable(){
        var idSucursal = $("#idSucursal").val();
        var idCliente = $("#idCliente").val();
        var idUsuario = $("#idUsuario").val();
        
        $.ajax({
            type:'Post',
            url:'<?php echo route('getFiltroReporteCliente')?>',
            data:{
                "_token": $("meta[name='csrf-token']").attr("content"),
                "idSucursal": idSucursal,
                "idCliente": idCliente,
                "idUsuario": idUsuario,
            },
            success: function(data){
                console.log(data);
                var listCliente = data.Clientes;
                table.clear().draw();
                for (let index = 0; index < listCliente.length; index++) {
                    table.row.add([
                        listCliente[index].nombre,
                        0,
                        listCliente[index].kmFlota,
                        0,
                        0,
                        listCliente[index].totalCaucho,
                        listCliente[index].renovado
                    ]).draw( false );
                }
            }
        })
    }
    
</script>
@endsection

