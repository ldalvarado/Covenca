@extends('layouts.app')

@section('contenido')

<?php use App\Http\Controller\GuiaController;?>

    <div class="br-pagebody mg-t-5 pd-30">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card w-100">
                    <div class="card-header pt-3 pb-3">
                        <div class="row justify-content-center">
                            <div class="col align-self-center">
                                <h6 style="margin-bottom:0px;">SUCURSAL(ES): 1000</h6>
                            </div>
                            <div class="col align-self-center">
                                <h6 style="margin-bottom:0px;">CLIENTE(S): 1000</h6>
                            </div>
                            <div class="col align-self-center options-new">
                                <select class="form-control selectNew" data-live-search="true" data-placeholder="SUCURSAL(ES)">
                                    <option label="SUCURSAL(ES)"></option>
                                    <option value="uno">Uno</option>
                                </select>
                            </div>
                            <div class="col align-self-center options-new">
                                <select class="form-control selectNew" data-live-search="true" data-placeholder="USUARIO(S)">
                                    <option label="USUARIO(S)"></option>
                                    <option value="uno">Uno</option>
                                </select>
                            </div>
                            <div class="col align-self-center options-new">
                                <select class="form-control selectNew" data-live-search="true" data-placeholder="AÑO">
                                    <option label="AÑO"></option>
                                    <option value="uno">Uno</option>
                                </select>
                            </div>
                            <div class="col align-self-center options-new">
                                <select class="form-control selectNew" data-live-search="true" data-placeholder="SEMANA">
                                    <option label="SEMANA"></option>
                                    <option value="uno">Uno</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="p-2 table-responsive">
                                <table class="table table-bordered table-striped" id="tablaClientes">
                                    <thead class="text-center bg-danger text-white">
                                        <tr>
                                            <th class="text-white" style="text-align: center;"><strong>USUARIO(S)</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CLIENTE(S)</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CANTIDAD DE MOTRICES</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CANTIDAD DE REMOLQUES</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CAUCHOS OPERATIVOS</strong></th>
                                        </tr>
                                    </thead>
                                
                                    <tbody class="text-center">
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
        background: #000;
        text-align: left;
        padding: 0 15px;
        font-size: 16px;
    }
    select.selectNew:hover{
        background: #4B4949;
    }
    select.selectNew.active{
        background: #000;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }
    select.selectNew:not([size]):not([multiple]) {
        background: #000;
        color: #fff;
    }
</style>
<script>
     $(document).ready(function(){
        
        ActivateNavLink("nav-link_rg");

    });
    var table = $('#tablaClientes').DataTable({
            'columnDefs': [
            {
                'targets': 0,

            }
        ],
    });
</script>
@endsection

