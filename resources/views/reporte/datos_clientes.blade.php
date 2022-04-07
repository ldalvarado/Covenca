@extends('layouts.app')

@section('contenido')

<?php use App\Http\Controller\GuiaController;?>

    <div class="br-pagebody mg-t-5 pd-30">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="row justify-content-center" style="margin-bottom:10px">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="align-self-center options-new" style="margin-bottom:10px">
                            <select class="form-control selectNew" data-live-search="true" data-placeholder="SUCURSAL(ES)">
                                <option label="SUCURSAL(ES)"></option>
                                <option value="uno">Uno</option>
                            </select>
                        </div>
                        <div class="align-self-center options-new" style="margin-bottom:10px">
                            <select class="form-control selectNew" data-live-search="true" data-placeholder="CLIENTE(S)">
                                <option label="CLIENTE(S)"></option>
                                <option value="uno">Uno</option>
                            </select>
                        </div>
                        <div class="align-self-center options-new" style="margin-bottom:10px">
                            <select class="form-control selectNew" data-live-search="true" data-placeholder="CIUDAD(ES)">
                                <option label="CIUDAD(ES)"></option>
                                <option value="uno">Uno</option>
                            </select>
                        </div>
                        <div class="card w-100">
                            <div class="card-header pt-1 pb-1 bg-danger text-white">
                                <div class="row justify-content-center">
                                    <div class="col align-self-center">
                                        <h4 class=" text-bold text-center mb-0">Listado de guías</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-center" style="margin-bottom:10px">
                                    <div class="col-6 align-self-center text-center">
                                        <h6>CANTIDAD VEH.MOTRICES</h6>
                                        <h4>22</h4>
                                    </div>
                                    <div class="col-6 align-self-center text-center">
                                        <h6>CANTIDAD DE REMOLQUES</h6>
                                        <h4>22<h4>
                                    </div>
                                </div>
                                <div class="row justify-content-center" style="margin-bottom:10px">
                                    <div class="col-12 align-self-center text-center">
                                        <h6>% DE FLOTA USANDO ACTUALMENTE</h6>
                                        <h4>45%</h4>
                                    </div>
                                </div>
                                <div class="row justify-content-center" style="margin-bottom:10px">
                                    <div class="col-6 align-self-center text-center">
                                        <h6>CAUCHOS OPERATIVOS</h6>
                                        <h4>22</h4>
                                    </div>
                                    <div class="col-6 align-self-center text-center">
                                        <h6>CAUCHOS RENOVADOS</h6>
                                        <h4>7<h4>
                                    </div>
                                </div>
                                <div class="row justify-content-center" style="margin-bottom:10px">
                                    <div class="col-12 align-self-center text-center">
                                        <h6>ESTIMACIÓN DE CAMBIOS DE CAUCHOS (MES)</h6>
                                        <h4>27,00</h4>
                                    </div>
                                </div>
                                <div class="row justify-content-center" style="margin-bottom:10px">
                                    <div class="col-12 align-self-center text-center">
                                        <h6>CONSUMO DE CAUCHOS (% VIDA ÚTIL/MES)</h6>
                                        <h4>0,005</h4>
                                    </div>
                                </div>
                                <div class="row justify-content-center" style="margin-bottom:10px">
                                    <div class="col-12 align-self-center text-center">
                                        <h6>ESTIMACIÓN DE COMPRA DE CAUCHO AL AÑO</h6>
                                        <h4>104,62</h4>
                                    </div>
                                </div>
                                <div class="row justify-content-center" style="margin-bottom:10px">
                                    <div class="col-12 align-self-center text-center">
                                        <h6>PESO CARGA MÁXIMA Kg.</h6>
                                        <h4>30.000</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <div class="p-3 mb-2 bg-danger text-white rounded">
                            <h6 style="margin-bottom:0px;">DATOS DEL CLIENTE</h6>
                        </div>
                        <div class="d-flex align-items-centert mb-2">
                            <div class="flex-fill w-100">
                                <div class="p-1 mb-2 bg-secondary text-white rounded-left">
                                    CLIENTE(S)
                                </div>
                                <h5>TRANSPORTE BOSICA C.A.</h5>
                            </div>
                            <div class="flex-fill w-100">
                                <div class="p-1 mb-2 bg-secondary text-white rounded-right">
                                    PERSONA DE CONTACTO 1
                                </div>
                                <h5>CORRADINO BOSICA</h5>
                            </div>
                        </div>
                        <div class="d-flex align-items-centert mb-2">
                            <div class="flex-fill w-100">
                                <div class="p-1 mb-2 bg-secondary text-white rounded-left">
                                    MARCA DE CAUCHOS
                                </div>
                                <p>PRUEBA 1</p>
                            </div>
                            <div class="flex-fill w-100">
                                <div class="p-1 mb-2 bg-secondary text-white rounded-right">
                                    TIPO DE CARCASA PROMEDIO
                                </div>
                                <p>PRUEBA 2</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-centert mb-2">
                            <div class="flex-fill w-100">
                                <div class="p-1 mb-2 bg-secondary text-white rounded-left">
                                    BASES PARA TOMAR DECISIÓN DE COMPRA
                                </div>
                                <div class="w-100">
                                    PRECIO COMPRA PRUEBA 1
                                    <hr></hr>
                                    PRECIO COMPRA PRUEBA 2
                                    <hr></hr>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-centert mb-2">
                            <div class="flex-fill w-100">
                                <div class="p-1 mb-2 bg-secondary text-white rounded-left">
                                    TIPOS DE RUTA
                                </div>
                                <p>PRUEBA 1</p>
                            </div>
                            <div class="flex-fill w-100">
                                <div class="p-1 mb-2 bg-secondary text-white rounded-right">
                                    TIPOS DE CARGA
                                </div>
                                <p>PRUEBA 2</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-centert mb-2">
                            <div class="table-responsive w-100">
                                <table class="table table-bordered table-striped">
                                    <thead class="text-center bg-secondary text-white">
                                        <tr>
                                            <th class="text-white" style="text-align: center;"><strong>CLIENTE(S)</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>% UTILIDAD PROM.</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>VITA $ PROM.</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>VITA $ PROM.</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td>PRUEBA</td>
                                            <td>PRUEBA</td>
                                            <td>PRUEBA</td>
                                            <td>PRUEBA</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex align-items-centert mb-2">
                            <div style="width:31%">
                                <canvas id="myChart"  height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<style >
    select.selectNew{
        width: 100%;
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [
                'DAÑO POR IMPACTO, DAÑO POR PERFORACIÓN',
                'DAÑO POR IMPACTO, DAÑO POR PERFORACIÓN',
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [50, 50],
                backgroundColor: [
                    '#FEAA00',
                    '#5E35AB',
                ],
                hoverOffset: 4
            }],
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'Chart.js Pie Chart'
                }
            }
        },
    })
    $(document).ready(function(){
        ActivateNavLink("nav-link_rd");
        
    });
</script>
@endsection

