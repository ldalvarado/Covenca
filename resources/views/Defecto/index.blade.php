@extends('layouts.app')

@section('contenido')
    <div class="br-pagebody mg-t-5 pd-30">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card w-100">
                    <div class="card-header pt-3 pb-3">
                        <div class="row justify-content-center">
                            <div class="col align-self-center">
                                <h4 class=" text-bold text-center mb-0">Garantías pendientes por crédito</h4>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="p-2 table-responsive">
                                <table class="table table-bordered table-striped" id="tablaGuias">
                                    <thead class="text-center bg-dark text-white">
                                        <tr>
                                        <th class="text-white" style="text-align: center;"><strong>CÓDIGO</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CLIENTE</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>FACTURA</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>ESTATUS</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>ACCIONES</strong></th>
                                        </tr>
                                    </thead>
                                
                                    <tbody class="text-center">
                                        <tr>
                                            <td> 001</td>
                                            <td> Pedro </td>
                                            <td> 000001 </td>
                                            <td> Procede </td>
                                            <td>
                                            <a class="btn btn-info text-white">$</a> 
                                            </td>
                                        </tr>
                                        <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>61</td>
                <td>$320,800</td>
                <td>
                <a class="btn btn-info text-white">$</a> 
                </td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>63</td>
                <td>$170,750</td>
                <td>
                <a class="btn btn-info text-white">$</a> 
                </td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>66</td>
                <td>$86,000</td>
                <td>
                <a class="btn btn-info text-white">$</a> 
                </td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>22</td>
                <td>$433,060</td>
                <td>
                <a class="btn btn-info text-white">$</a> 
                </td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>33</td>
                <td>$162,700</td>
                <td>
                <a class="btn btn-info text-white">$</a> 
                </td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>61</td>
                <td>$372,000</td>
                <td>
                <a class="btn btn-info text-white">$</a> 
                </td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>59</td>
                <td>$137,500</td>
                <td>
                <a class="btn btn-info text-white">$</a> 
                </td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>55</td>
                <td>$327,900</td>
                <td>
                <a class="btn btn-info text-white">$</a> 
                </td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>39</td>
                <td>$205,500</td>
                <td>
                    <a class="btn btn-info text-white">$</a> 
                </td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>23</td>
                <td>$103,600</td>
                <td>
                    <a class="btn btn-info text-white">$</a>                     
                </td>
            </tr>

                                        <!--
                                        @foreach($ListaDefecto as $Guia)
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
                </div>
            </div>
        </div>
    </div>
<script>

</script>
@endsection