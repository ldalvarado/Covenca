@extends('layouts.app')

@section('contenido')
    <div class="br-pagebody mg-t-5 pd-30">
        <div class="row">
        <div class="col-12 col-md-12">
                <div class="card w-100">
                    <div class="card-header pt-3 pb-3">
                        <div class="row justify-content-center">
                            <div class="col align-self-center">
                                <h4 class=" text-bold text-center mb-0">Filtros</h4>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card-body" >
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <label>Sucursal: </label>

                                <select onchange="FiltroSucursal()" class="form-control" id="selectSucursal" data-live-search="true" data-placeholder="Seleccione Sucursal">
                                    <option label="Todas las Sucursales"></option>
                                    @foreach($Sucursales as $Sucursal )
                                    <option value={{$Sucursal->id}}>{{$Sucursal->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            
                            
                            <div class="col-12 col-md-6">
                                <label>Estatus: </label>

                                <select onchange="FiltroSucursal()" class="form-control" id="selectEstatus" data-live-search="true" data-placeholder="Seleccione Estatus">
                                    <option label="Todos los Estatus"></option>
                                    @foreach($estatus as $Sucursal )
                                        @if($Sucursal -> id >= 4 )
                                            <option value={{$Sucursal->id}}>{{$Sucursal->descripcion}}</option>
                                        @endif
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label>Fecha inicial: </label>
    
                                    <input onclick="CheckFecha1()" class="" name="fechaincialCheck" type="checkbox" value="" id="fechaincialCheck"></input>
                       
                                <input disabled onchange="FiltroSucursal()" type="date" class="form-control fc-datepicker" id="selectFecha1" data-live-search="true" data-placeholder="Seleccione Fecha">
                                  
                            </div>
                            <div class="col-12 col-md-6">
                                <label>Fecha final: </label>
                                <input onclick="CheckFecha2()" class="" type="checkbox" value="" id="fechaFinalCheck" unchecked>

                                <input disabled onchange="FiltroSucursal()" type="date" class="form-control fc-datepicker" id="selectFecha2" data-live-search="true" data-placeholder="Seleccione Fecha">
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-12">
                <div class="card w-100">
                    <div class="card-header pt-3 pb-3">
                        <div class="row justify-content-center">
                            <div class="col align-self-center">
                                <h4 class=" text-bold text-center mb-0">Créditos en espera</h4>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="p-2 table-responsive">
                                <table class="table table-bordered table-striped" id="tablaCredito">
                                    <thead class="text-center bg-dark text-white">
                                        <tr>
                                        <th class="text-white" style="text-align: center;"><strong>FECHA</strong></th>
                                        <th class="text-white" style="text-align: center;"><strong># GARANTÍA</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>DISTRIDUIDOR</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CLIENTE</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>RIF</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>CÓDIGO DEL PRODUCTO</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>DESCRIPCIÓN</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>DOC. VENTA</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>DOC. COMPRA</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>% AJUSTE</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>ESTATUS</strong></th>
                                            <th class="text-white" style="text-align: center;"><strong>ACCIONES</strong></th>
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

            <div class="col-12 col-md-12 mt-4">
                <div class="card w-100">
                    <div class="card-header pt-3 pb-3">
                        <div class="row justify-content-center">
                            <div class="col align-self-center">
                                <h4 class=" text-bold text-center mb-0">Listado de garantías cerradas</h4>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="p-2 table-responsive">
                                <table class="table table-bordered table-striped" id="tablaCreditosRealizados">
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
       $(document).ready(function(){
        
        ActivateNavLink("nav-link_wcr");

    });
    $(document).ready(function(){
        
      $('input').iCheck('destroy');
   
    });

    
    function CheckFecha1(){
        console.log("aveces");
        $("#selectFecha1").prop('disabled', !document.getElementById("fechaincialCheck").checked);
        
    }
    function CheckFecha2(){
        console.log("aveces");
        $("#selectFecha2").prop('disabled', !document.getElementById("fechaFinalCheck").checked);
        
    }
    function ParseDate(date){
        var year = date.toString().split(' ');
        var year2 = year[0].split('-');
        return year2[2]+"/"+year2[1]+"/"+year2[0]
    }
    let dataJson ={!! $ListaCredito !!};
    console.log(dataJson);
            var table = $('#tablaCredito').DataTable({

            data:dataJson,
            responsive: "true",
            dom: "Bfrtilp",
            buttons:[
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i>',
                    titleAttr: 'Exportar a excel',
                    className: 'btn btn-success',
                    title: 'Crédito',
                    exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8,9 ]
                    }
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf"></i>',
                    titleAttr: 'Exportar a PDF',
                    className: 'btn btn-danger',
                    title: 'Crédito',
                    exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8,9 ]
                    }
                },
                {
                    extend: 'print',
                    text: '<i class="fa fa-print"></i>',
                    titleAttr: 'Imprimir',
                    className: 'btn btn-info',
                    title: 'Crédito',
                    exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8,9 ]
                    }
                }
            ],
            "columnDefs": [
            {
                "targets": [ 5,6,7,8 ],
                "visible": false,
                "searchable": false
            },
        ],
        columns: [
            
            { "data": "created_at_str", "defaultContent": "" },
            { "data": "codigoSucursal", "defaultContent": "" },
            { "render": function(data,type,row){
                console.log(row);
                return row.sucursal.descripcion;
            } },    
            { "data": "nombre", "defaultContent": "" },
            { "data": "rif", "defaultContent": "" },
            { "render":function(data,type,row){
                if(row.doc_venta != null){
                    return row.doc_venta.CodItem;
                }
                return "";
            }  },
            { "render":function(data,type,row){
                if(row.doc_venta != null){
                    return row.doc_venta.descripcion;
                }
                return "";
            }  },
            { "data": "factura", "defaultContent": "" },
            { "render": function(data,type,row){
                if(row.reclamo_compra!= null){
                    return row.reclamo_compra.NumeroD;

                }
                return "N/A";

                

            } },

            { "render": function(data,type,row){
                return row.proc_str +"%";
            } },
            {"render":function(data,type,row){
                let idest = row.estatus_id;
                console.log(idest);
                if (idest == 1 || idest == 4){
                    return `<span id="EstatusOportunidad" class=" bg-success info-box-icon elevation-3  p-2 text-uppercase text-bold float-right" style="border-radius: 6px;color: #fff !important;">
                    `+row.estatus_str+`
                                        </span>`
                }
                else if (idest == 2 || idest == 5){
                    return  ` <span id="EstatusOportunidad" class=" bg-danger info-box-icon elevation-3  p-2 text-uppercase text-bold float-right" style="border-radius: 6px;color: #fff !important;">
                    `+row.estatus_str+`
                                        </span>`  
                }
                else{
                    return ` <span id="EstatusOportunidad" class=" bg-warning info-box-icon elevation-3  p-2 text-uppercase text-bold float-right" style="border-radius: 6px;color: #000 !important;">
                    `+row.estatus_str+`
                                        </span>`
                }
                                     
                                    
                                 
            }},
            
            {
                "render": function (data, type, row) {
                    var url = '{{ route("Credito.show", ":id") }}';
                    url = url.replace(':id', row.id);
                    
                    return `  
                    <a id="btnAddOrder" class="btn btn-primary btn-sm text-lg text-bold text-right" href="`+url+`">
                                                        <i class="fas fa-donate"></i>
                                                            <span class="textoBoton">
                                                            Generar</span>
                                                        </a>
                    `
                }
            }
        ],
            /*
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
            ],*/


});
let dataJson2 ={!! $creditosListos !!};
console.log(dataJson2);
var table2 = $('#tablaCreditosRealizados').DataTable({
    data:dataJson2,
    responsive: "true",
            dom: "Bfrtilp",
            buttons:[
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i>',
                    titleAttr: 'Exportar a excel',
                    className: 'btn btn-success'
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf"></i>',
                    titleAttr: 'Exportar a PDF',
                    className: 'btn btn-danger'
                },
                {
                    extend: 'print',
                    text: '<i class="fa fa-print"></i>',
                    titleAttr: 'Imprimir',
                    className: 'btn btn-info'
                }
            ],
            columns: [
            
            { "data": "codigoSucursal", "defaultContent": "" },
            { "data": "nombre", "defaultContent": "" },
            { "data": "factura", "defaultContent": "" }
            ,
            {"render":function(data,type,row){
                let idest = row.estatus_id;
                console.log(idest);
                if (idest == 1 || idest == 4){
                    return `<span id="EstatusOportunidad" class=" bg-success info-box-icon elevation-3  p-2 text-uppercase text-bold float-right" style="border-radius: 6px;color: #fff !important;">
                    `+row.estatus_str+`
                                        </span>`
                }
                else if (idest == 2 || idest == 5){
                    return  ` <span id="EstatusOportunidad" class=" bg-danger info-box-icon elevation-3  p-2 text-uppercase text-bold float-right" style="border-radius: 6px;color: #fff !important;">
                    `+row.estatus_str+`
                                        </span>`  
                }
                else{
                    return ` <span id="EstatusOportunidad" class=" bg-warning info-box-icon elevation-3  p-2 text-uppercase text-bold float-right" style="border-radius: 6px;color: #000 !important;">
                    `+row.estatus_str+`
                                        </span>`
                }
                                     
                                    
                                 
            }},
            
            {
                "render": function (data, type, row) {
                    var url = '{{ route("warranty.show", ":id") }}';
                    url = url.replace(':id', row.id);
                    
                    return `  
                    <a id="btnAddOrder" class="btn btn-info btn-sm text-lg text-bold text-right"  href="`+url+`"><i class="fas fa-eye"></i> <span class="textoBoton">Ver</span></a>

                    `
                }
            }
        ],
});



function FiltroSucursal(){
    let data1 = {"_token": $("meta[name='csrf-token']").attr("content"),};
            if($("#selectSucursal").val() != ""){
                data1.id = $("#selectSucursal").val();
            }
            if($("#selectEstatus").val() != ""){
                data1.estatus = $("#selectEstatus").val();
            }
            if(document.getElementById("fechaincialCheck").checked){
                data1.fecha1 = $("#selectFecha1").val();
            }
            if(document.getElementById("fechaFinalCheck").checked){
                data1.fecha2 = $("#selectFecha2").val();
            }
            
            $.ajax({
           
                url: '<?php echo route('FiltroSucursal') ?>',
                type: "POST",                
                data:data1,
                success: function(data){
                    table.clear();
                    table.rows.add(data.ListaCredito);
                    table.draw();
                    table2.clear();
                    table2.rows.add(data.creditosListos);
                    table2.draw();
                }});
                
        }
</script>

@endsection