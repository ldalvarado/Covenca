@extends('layouts.app')

@section('contenido')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="">
      <div class="pd-30">
        
        <div class="d-flex flex-row ">
          <div class="">
            <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>

          </div>
          @if($show_filters)
          <div id="filter_button" class="filter" onclick="OpenFilterMenu()">
           <i class="fa fa-filter" aria-hidden="true"></i>

          </div>
          @endif
        </div>
        @if($show_filters)
        <div id="filter_menu" class="filter_menu">
        <div class="">
            <div class="bg-white rounded ">
              <div class="row pd-20 header ">
                <p class="tx-18 tx-black tx-lato tx-bold mg-b-2 lh-1">Filtros</p>

              </div>
              <div class="row pd-20">
                  <div class="col-12 col-md-6">
                                <label>Sucursal: </label>

                                <select onchange="FiltroSucursal()" class="form-control" id="selectSucursal" data-live-search="true" data-placeholder="Seleccione Sucursal">
                                    <option label="Todas las Sucursales"></option>
                                    @foreach($Sucursales as $Sucursal )
                                    <option value={{$Sucursal->id}}>{{$Sucursal->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>

              </div>

            </div>
          </div>
        </div>
        @endif
        
      </div><!-- d-flex -->

      <div class="br-pagebody mg-t-5 pd-x-30">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Garantias Cauchos</p>
                  <p id="garantias_cauchos" class="tx-18 tx-white tx-lato tx-bold mg-b-2 lh-1"></p>
                  <p id="garantias_cauchos_renovados" class="tx-18 tx-white tx-lato tx-bold mg-b-2 lh-1"></p>
                  <span class="tx-11 tx-roboto tx-white-6"></span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-danger rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Garantias Cauchos Industrials</p>
                  <p id="garantias_cauchos_industriales" class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"></p>
                  <span class="tx-11 tx-roboto tx-white-6"></span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Garantias Protectores</p>
                  <p id="garantias_protectores" class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"></p>
                  <span class="tx-11 tx-roboto tx-white-6"></span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-br-primary rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Garantias Camaras de Aire</p>
                  <p id="garantias_camaras" class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"></p>
                  <span class="tx-11 tx-roboto tx-white-6"></span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <!-- row -->

        <div class="row row-sm mg-t-20">
          <div class="col-8">
            <div class="card pd-0 bd-0 shadow-base">
              <div class="pd-x-30 pd-t-30 pd-b-15">
                <div class="d-flex align-items-center justify-content-between">
                  <div>
                    <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Estado de Garantías</h6>
                  </div>
                 
                </div><!-- d-flex -->
              </div>
 
              <div class="pd-x-30 pd-b-15">
                <div class="row">
                  <div class="col-6 ">
                    <div class="tx-13">
                      <p class="mg-b-0"><span class="square-8 rounded-circle mg-r-10" style="background-color:rgba(255, 99, 132 )"></span>Pendiente por Guiá: <span id="estado_num_0"></span></p>
                    </div>
                  </div>
                  <div class="col-6 ">
                    <div class="tx-13">
                      <p class="mg-b-0"><span class="square-8 rounded-circle  mg-r-10" style="background-color:rgba(54, 162, 235 )"></span>Espera Aprobación: <span id="estado_num_1"></span></p>
                    </div>
                  </div>
                  <div class="col-6 ">
                    <div class="tx-13">
                      <p class="mg-b-0"><span class="square-8 rounded-circle  mg-r-10" style="background-color:rgba(255, 206, 86 )"></span>En Transito: <span id="estado_num_2"></span></p>
                    </div>
                  </div>
                  <div class="col-6 ">
                    <div class="tx-13">
                      <p class="mg-b-0"><span class="square-8 rounded-circle  mg-r-10" style="background-color:rgba(75, 192, 192 )"></span>Espera Análisis: <span id="estado_num_3"></span></p>
                    </div>
                  </div>
                  <div class="col-6 ">
                    <div class="tx-13">
                      <p class="mg-b-0"><span class="square-8 rounded-circle e mg-r-10" style="background-color:rgba(153, 102, 255 )"></span>Espera Crédito: <span id="estado_num_4"></span></p>
                    </div>
                  </div>
                  <div class="col-6 ">
                    <div class="tx-13">
                      <p class="mg-b-0"><span class="square-8 rounded-circle  mg-r-10" style="background-color:#dc3545 "></span>Cerrado: <span id="estado_num_5"></span></p>
                    </div>
                  </div>
                </div>
                
              </div>
              
              <div class="pd-x-15 pd-b-15">
                <canvas id="myChart" style=""></canvas>
              </div>
            </div><!-- card -->

           



          </div><!-- col-9 -->
          <div class="col-4">

            <div class="card bd-0 shadow-base pd-30">
              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Estatus de Garantías</h6>
          

              <label class="tx-12 tx-gray-600 mg-b-10">Generado: <span  id="estatus_0_txt"></span> </label>
              <div class="progress ht-5 mg-b-10">
                <div style = "width:0" id="estatus_0" class="progress-bar " role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">No Procesado: <span  id="estatus_1_txt"></span></label>
              <div class="progress ht-5 mg-b-10">
                <div style = "width:0" id="estatus_1" class="progress-bar bg-teal " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Especial: <span  id="estatus_2_txt"></span></label>
              <div class="progress ht-5 mg-b-10">
                <div style = "width:0" id="estatus_2" class="progress-bar bg-danger " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Aprobado: <span  id="estatus_3_txt"></span></label>
              <div class="progress ht-5 mg-b-10">
                <div style = "width:0" id="estatus_3" class="progress-bar bg-warning " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">No Aprobado: <span  id="estatus_4_txt"></span></label>
              <div class="progress ht-5 mg-b-10">
                <div style = "width:0" id="estatus_4" class="progress-bar bg-info " role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <label class="tx-12 tx-gray-600 mg-b-10">Ajuste Comercial: <span  id="estatus_5_txt"></span></label>
              <div class="progress ht-5 mg-b-10">
                <div style = "width:0" id="estatus_5" class="progress-bar bg-purple " role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              
            </div><!-- card -->
            <div class="">
            <div class=" rounded overflow-hidden" style="margin-top:0.75rem !important; background-color:orange">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-accessibility tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Clientes</p>
                  <p id="clientes" class="tx-18 tx-white tx-lato tx-bold mg-b-2 lh-1"></p>
                  <p id="clientes" class="tx-18 tx-white tx-lato tx-bold mg-b-2 lh-1"></p>
                  <span class="tx-11 tx-roboto tx-white-6"></span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
        </div>
           
          
           

          </div><!-- col-3 -->
        </div><!-- row -->

      </div><!-- br-pagebody -->
    
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
<script>
    let data_estado =[0,0,0,0,0,0];
    let data_estatus =[0,0,0,0,0,0];
    function OpenFilterMenu(){
      console.log();
      elemento = document.getElementById("filter_menu");
      if($('#filter_menu').height() =='0'){
        elemento.style.height = "12rem";
      }
      else{
        elemento.style.height = "0";

      }
     

    }
    $(document).ready(function(){
      updateEstatus();
      FiltroSucursal();
   
    });
    function updateEstatus(){
      console.log("siva");
      let totalEstatus = 0 ;
      for(let i = 0 ; i<data_estatus.length;i++ ){
        totalEstatus+= data_estatus[i];
        

      }
      for(let i = 0 ; i<data_estatus.length;i++ ){
        
        let elemento = document.getElementById('estatus_'+i.toString());
        let elemento2 = document.getElementById('estatus_'+i.toString()+"_txt");
        elemento2.innerHTML =  data_estatus[i];
        elemento.ariaValueNow =data_estatus[i];
        elemento.ariaValueMax = totalEstatus;

        let percent = data_estatus[i]/totalEstatus*100;
        $('#estatus_'+i.toString()).width(percent+"%");
      }
    }


    var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
type: 'bar',
data: {
labels: ["Pendiente por Guia","Espera Aprobación", "En Transito", "Espera Análisis", "Espera Crédito", "Cerrado"],
datasets: [{
  labels: ["Pendiente por Guiá","Espera Aprobación", "En Transito", "Espera Análisis", "Espera Crédito", "Cerrado"],

data: data_estado,
backgroundColor: [
'rgba(255, 99, 132 )',
'rgba(54, 162, 235 )',
'rgba(255, 206, 86 )',
'rgba(75, 192, 192 )',
'rgba(153, 102, 255 )',
'#dc3545',
],
borderColor: [
'rgba(255,99,132,1)',
'rgba(54, 162, 235, 1)',
'rgba(255, 206, 86, 1)',
'rgba(75, 192, 192, 1)',
'rgba(153, 102, 255, 1)',

],
borderWidth: 1
}]
},
options: {
  legend: {
        display: false
    },
scales: {
yAxes: [{
ticks: {
beginAtZero: true
}
}]
}
}
});
function FiltroSucursal(){
  $.ajax({
    type:'Post',
    url:'<?php echo route('WelcomeGetChartData')?>',
    data:{
      "_token": $("meta[name='csrf-token']").attr("content"),
      "sucursal":$("#selectSucursal").val()
    },
    success: function(data){
      console.log(data);
       data_estatus =data.Graf_Estatus;
      updateEstatus();
      myChart.data.datasets[0].data =   data.Graf_Estado;
      for(let i = 0 ; i<=5;i++){
        let elemento = document.getElementById("estado_num_"+i.toString());
        elemento.innerHTML = data.Graf_Estado[i].toString();
      }
      let suma = data.garantias_tipo[0]+data.garantias_tipo[1];
      
      document.getElementById("garantias_cauchos").innerHTML = "Originales: "+data.garantias_tipo[1];
      document.getElementById("garantias_cauchos_renovados").innerHTML = "Renovados: "+data.garantias_tipo[0];
      
      document.getElementById("clientes").innerHTML = "Clientes: "+data.clientes;

      document.getElementById("garantias_cauchos_industriales").innerHTML = data.garantias_tipo[3];

      document.getElementById("garantias_protectores").innerHTML =  data.garantias_tipo[4];

      document.getElementById("garantias_camaras").innerHTML =  data.garantias_tipo[2];

      myChart.update();
    }
  })

}

</script>
<style scoped>
  .filter_menu{
    
    height:0;
    overflow: hidden;
    transition: 0.3s
  }
  .header{
    border-bottom: 1px solid rgb(209, 209, 209);
    padding-left: 40px;
  }
  .filter{
    cursor:pointer;
    transition: 0.3s;
    padding-left:0.5rem;
    color: #F49917;
  }
  .filter:hover{
    cursor:pointer;
    color:black;
  }
</style>
@endsection
