@extends('layouts.app')

@section('contenido')
<div>
  
  <div class="card" style="margin:1rem">
    <div class="card-body">
    @include('userData.registerComponents.personalInfo')
      @include('userData.registerComponents.personal')
      @include('userData.registerComponents.corporativo')
      @include('userData.registerComponents.estado')
      @include('userData.registerComponents.datosVehiculo')
      @include('userData.registerComponents.datosAdicionales')
      @include('userData.registerComponents.datosCarga')
    </div>
  </div>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Abajo</button>
  <div class="stepper">
    
    
    
  </div>
  <div id="container_body" class="container-body">
    <div id="step_1">
      
    </div>
  
   
  </div>
  <div class="container-foot">
  
  
  <button id="finalizar"  onclick="Finalizar()">
    Actualizar
  </button>

  </div>
</div>


<script>
  function topFunction() {
  document.body.scrollTop = document.body.scrollHeight; // For Safari
  document.documentElement.scrollTop = document.body.scrollHeight; // For Chrome, Firefox, IE and Opera
}
   $(document).ready(function(){
        
        $('input').iCheck('destroy');
     
      });
  console.log(marcas);
  let current_step = 1;
  let storeData ={'marcas':[]};
  function Finalizar(){
    var url = window.location.pathname;
    var id = url.substring(url.lastIndexOf('/') + 1);
    storeData.id = id;
    if(storeData.subtipo <3){
      
      storeData.nombre = $("#input_nombre").val()+" "+$("#input_apellido").val();
      storeData.doc =   $("#input_cedula").val();
      storeData.telefono =$("#input_telefono").val();
      storeData.email = $("#input_email").val();
      storeData.password = $('#input_password').val();
    }else{
      storeData.nombre = $("#input_razon").val();
      storeData.doc = $("#input_rif").val();
      storeData.contacto = $("#input_contacto").val();
      storeData.telefono =$("#input_tlf_c").val();
      storeData.email = $("#input_email_c").val();
      storeData.direccion =  $("#input_direccion_c").val();
      storeData.password = $('#input_password_c').val();

    }
    let renovado = 0;
    if(document.getElementById("input_renovados").checked)
    renovado = 1;
    storeData.estado = $("#input_estado").val();
    storeData.ciudad =$("#input_ciudad").val();
    storeData.idSucursal =$("#input_sucursal").val();
    storeData.renovado = renovado;
    storeData.v4x2 = $("#input_4x2").val();
    storeData.v6x2 = $("#input_6x2").val();
    storeData.v6x2 = $("#input_6x4").val();
    storeData.v2x0 = $("#input_2x0").val();
    storeData.v4x0 = $("#input_4x0").val();
    storeData.v6x0 = $("#input_6x0").val();
    storeData.v8x0 = $("#input_8x0").val();
    let num = 0;
    if(document.getElementById("input_liquidos").checked)
    num = 1;

    storeData.liquido=num;

    num = 0;
    if(document.getElementById("input_pasajeros").checked)
    num = 1;  
    storeData.pasajeros=num;
    if(document.getElementById("input_agricola").checked)
    num = 1;  

    storeData.agricolas=num;
    num = 0;

    if(document.getElementById("input_alimento").checked)
    num = 1;  
    num = 0;

    storeData.alimentos=num;
    num = 0;

    if(document.getElementById("input_construccion").checked)
    num = 1;  
    storeData.construccion=num;
    num = 0;

    if(document.getElementById("input_electronicos").checked)
    num = 1;  
    storeData.electronicos=num;
    num = 0;

    if(document.getElementById("input_farmacos").checked)
    num = 1;  
    storeData.farmacos=num;
    num = 0;

    if(document.getElementById("input_textiles").checked)
    num = 1;  
    storeData.textiles=num;
    num = 0;
      
   


    storeData.otrosCarga=document.getElementById("input_otro").value;

    storeData.carga = $("#input_carga_data").val();
    storeData.kmFlota = $("#input_kmFlota").val();
    storeData.perFlota = $("#input_perFlota").val();
    storeData.enero=document.getElementById("input_enero").checked ;
    storeData.febrero=document.getElementById("input_febrero").checked ;
    storeData.marzo=document.getElementById("input_marzo").checked ;
    storeData.abril=document.getElementById("input_abril").checked ;
    storeData.mayo=document.getElementById("input_mayo").checked ;
    storeData.junio=document.getElementById("input_junio").checked ;
    storeData.julio=document.getElementById("input_julio").checked ;
    storeData.agosto=document.getElementById("input_agosto").checked ;
    storeData.septiembre=document.getElementById("input_septiembre").checked ;
    storeData.octubre=document.getElementById("input_octubre").checked ;
    storeData.noviembre=document.getElementById("input_noviembre").checked ;
    storeData.diciembre=document.getElementById("input_diciembre").checked ;
    storeData.carcasa = $("#input_carcasa").val();
    storeData['_token'] =  $("meta[name='csrf-token']").attr("content"),

    $.ajax({
        url: '<?php echo route('UpdateData'); ?>',
        type:"POST",
        data: storeData,
      
        success: function(data){
            //window.location.href =  "{{url('/clientes')}}";
        }
      });
  }
  function changeStep(cambio){
    let steps = [1]
    if(storeData.subtipo == null) return;
  
    if(cambio == "+1"& current_step<steps[steps.length-1]){
      current_step ++;
    }
    else
    if(cambio == "-1"& current_step>steps[0]){
      current_step --;
    }
    else{
      current_step = cambio;
    }
    if(current_step <= steps[0]){
      $("#previous").addClass("Hidden");
    }else{
      $("#previous").removeClass("Hidden");
    }
    if(current_step >=steps[steps.length-1] ){
      $("#next").addClass("Hidden");
      $("#finalizar").removeClass("Hidden")
    }else{
      $("#next").removeClass("Hidden");
      $("#finalizar").addClass("Hidden")

    }
    
    console.log("step");
  
  }
 $(document).ready(function(){

     $("#main_field").removeClass('wd-300');
     $("#main_field").removeClass('wd-xs-350');
     $("#main_field").addClass('w-75');
     $("#main_field").addClass('container-main');
     $("#main_field").removeClass('pd-25');
     $("#main_field").removeClass('pd-xs-40');
     $("#main_field").removeClass('bg-white');

 })
</script>
<style>
  .hidsetep{
    display:none;
  }
  .container-foot{
    padding:20px;
    display: flex;
    justify-content:space-between;
  }
  button{
    outline:none;
    decoration:none;
    border:none;
    border-radius:3px;
    color:white;
    font-weight:bold;
    padding:5px 10px 5px 10px;
    background-color:#0866C6;
  }
  .circle{
    
    padding:0.5rem;
    margin-right:1rem;
    display:flex;
    align-items:center;
    justify-content:center;
    width:2.5rem;
    height: 2.5rem;
    text-align:center;
    vertical-align:center !important;
    background-color:#DDD !important;
    border-radius:10000000px;
    font-weight: bold;
  }
  .body{
    
  }
  .stepper{
    display: flex;
    justify-content:space-around;
    
    min-width:100%;
   
    border-radius:2.5px 2.5px 0px 0px;
  }
  .step span{
    vertical-align:center;
    
  }
  .step-selected{
    background-color:#0866C6 !important;
    color:white !important;
    

  }
  .selected{
    display:flex !important;
  }
  .step{
    display:flex;
    font-weight: bold;
    cursor:pointer;
    transition: 0.3s;
   
    flex-direction:column;
    margin:1rem;
    padding-left:0.75rem;
    justify-content:center;
    align-items:center;
    text-align:center;
    color:black;
    font-size:1rem;
    flex:1;
    width:auto;
    border-radius:20px;
    

  }
  .container-body{
    height:auto;
    max-height:30rem;
    color:black;
    background-color:#EEEEEE;
    overflow:hidden;
    overflow-y:auto;
    margin:10px 20px  0 20px;
    border-radius:5px;
    padding:40px;
  
  }
  @media (max-width:992px) {
    .step{
      display:none;

    }
  }
  .container-main{
    background-color:white;
    border-radius:15px !important;
    display:flex;
    flex-direction:column;
    transition: 0.3s
  }
  .second-stage{

  }
  #myBtn {
  display: block; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: blue; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
</style>
@endsection