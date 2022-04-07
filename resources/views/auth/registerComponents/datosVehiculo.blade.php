<div class = "row ">
<div class="col-12">   <label class="form-control-label" for="">¿Has usado cauchos renovados alguna vez?</</label><span class="tx-danger">*</span>
</div>
   
    <div class="col-6">
        <div class="form-check">
        <label class="d-flex justify-content-start rdiobox ">
            <input  type="radio" name="renovado" id="input_renovados"   >
            <span>Si</span></label>                
        </div>
    </div>
    <div class="col-6">
    <div class="form-check">
        <label class="d-flex justify-content-start rdiobox ">
                <input  type="radio" name="renovado" id="asdasdas"  >
                <span>No</span></label>  
        </div>
    </div>
   
</div>
<div class="Hidden not-particular">
    <div class = "row ">
    <div class="col-12">   <label class="form-control-label" for="">¿Qué tipo de vehículos motrices operativos posee?</</label><span class="tx-danger">*</span>
    </div>
    
        <div class="col-12 col-md-6">
            <div class="form-check">
            <label class="d-flex justify-content-start ">
                <span>4x2 (2 Ejes)</span></label> 
                <input vehiculo onchange="activateTextInput('check4x2','input_4x2')" type="checkbox" name="tipo_cliente" id="check4x2"   >
               
                <input disabled id="input_4x2" type="number" placeholder="cantidad">               
            </div>
        </div>
        <div class="col-12 col-md-6">
        <div class="form-check">
            <label class="d-flex justify-content-start ">
                <span>6x2 (3 Ejes)</span></label>
              
                <input  onchange="activateTextInput('check6x2','input_6x2')" type="checkbox" name="tipo_cliente" id="check6x2"  >
                    
                    <input disabled id="input_6x2" type="number" placeholder="cantidad">  
             
                    
            </div>
        </div>
        <div class="col-12 col-md-6">
        <div class="form-check">
            <label  class="d-flex justify-content-start ">
            <span>6x4 (3 Ejes)</span></label> 
                    <input onchange="activateTextInput('check6x4','input_6x4')" type="checkbox" name="tipo_cliente" id="check6x4"  >
                    
                    <input disabled id="input_6x4" type="number" placeholder="cantidad">  
            </div>
        </div>
        
    </div>
    <div class="remolques Hidden">
    <div class = "row ">
    <div class="col-12">   <label class="form-control-label" for="">¿Qué tipo de Remolques operativos posee?</</label><span class="tx-danger">*</span>
    </div>
    
        <div class="col-12 col-md-6">
            <div class="form-check">
            <label class="d-flex justify-content-start ">
                <span>2x0 (1 Eje) </span></label> 
                <input onchange="activateTextInput('check2x0','input_2x0')" type="checkbox" name="tipo_cliente" id="check2x0"   >
               
                <input disabled id="input_2x0" type="number" placeholder="cantidad">               
            </div>
        </div>
        <div class="col-12 col-md-6">
        <div class="form-check">
            <label class="d-flex justify-content-start ">
                <span>4x0 (2 Ejes)</span></label>
              
                <input  onchange="activateTextInput('check4x0','input_4x0')" id="check4x0" type="checkbox" name="tipo_cliente"   >
                    
                    <input disabled id="input_4x0" type="number" placeholder="cantidad">  
             
                    
            </div>
        </div>
        <div class="col-12 col-md-6">
        <div class="form-check">
            <label class="d-flex justify-content-start ">
            <span>6x0 (3 Ejes) </span></label> 
                    <input onchange="activateTextInput('check6x0','input_6x0')" id="check6x0" type="checkbox" name="tipo_cliente"  >
                    
                    <input disabled id="input_6x0" type="number" placeholder="cantidad">  
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-check">
            <label class="d-flex justify-content-start ">
                <span>8x0 (4 Ejes) </span></label> 
                <input onchange="activateTextInput('check8x0','input_8x0')" id="check8x0" type="checkbox" name="tipo_cliente"   >
               
                <input disabled id="input_8x0" type="number" placeholder="cantidad">               
            </div>
        </div>
    </div>
    </div>
</div>
<script>
    function showRemolques(){
        let vehiculos = ['check4x2','check6x2','check6x4'];
        for(let i = 0 ; i < vehiculos.length ; i++ ){
            if(document.getElementById(vehiculos[i]).checked){
        
                $(".remolques").removeClass("Hidden");
                return;
            }
        }
        $(".remolques").addClass("Hidden");

    }
    function showCarga(){
        let vehiculos = ["check2x0","check4x0","check6x0","check8x0"];
        for(let i = 0 ; i < vehiculos.length ; i++ ){
            if(document.getElementById(vehiculos[i]).checked){
         
                $(".Carga").removeClass("Hidden");
                return;
            }
        }
        $(".Carga").addClass("Hidden");

    }
    function activateTextInput(idCheckbox,idInput){
        showRemolques();
        showCarga();
        document.getElementById(idInput).disabled = !document.getElementById(idCheckbox).checked;
        
    }
    
</script>