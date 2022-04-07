<div class="" > 
    <div class = "row">
        <div   div class="col-12">   <label class="form-control-label" for="">Cliente:</label><span class="tx-danger">*</span>

    </div>
    </div>
    <div class = "row pd-b-15">

        <div class="col-6">
            <div class="form-check">
            <label class="d-flex justify-content-start rdiobox ">
                <input  type="radio" name="cliente" id="input_personal" oninput="ActivateOnChecked('input_personal','cliente_personal','cliente_corporativo')"  >
                <span>Personal</span></label>                
            </div>
        </div>
        <div class="col-6">
        <div class="form-check"></div>
            <label class="d-flex justify-content-start rdiobox ">
                    <input  type="radio" name="cliente" id="input_corporativo" oninput="ActivateOnChecked('input_corporativo','cliente_corporativo','cliente_personal')"  >
                    <span>Corporativo</span></label>  
            </div>
        </div>
       
    </div>
    <div class="Hidden cliente_personal">
        <div class = "row">
            <div   div class="col-12">   <label class="form-control-label" for="">Tipo de cliente:</label><span class="tx-danger">*</span>

        </div>
        </div>
        <div class = "row ">

            <div class="col-6">
                <div class="form-check">
                <label class="d-flex justify-content-start rdiobox ">
                    <input  type="radio" name="tipo_cliente" id="input_particular" oninput="StoreSubTipo('input_particular','a','not-particular',1)"     >
                    <span>Particular</span></label>                
                </div>
            </div>
            <div class="col-6">
            <div class="form-check">
                <label class="d-flex justify-content-start rdiobox ">
                        <input  type="radio" name="tipo_cliente" id="input_carga" oninput="StoreSubTipo('input_carga','not-particular','a',2)"  >
                        <span>Carga</span></label>  
                </div>
            </div>
        
        </div>
    </div>
    <div class="Hidden cliente_corporativo"> 
    <div class = "row">
        <div   div class="col-12">   <label class="form-control-label" for="">¿La empresa es nacional?</label><span class="tx-danger">*</span>

    </div>
    </div>
    <div class = "row ">
    
        <div class="col-6">
            <div class="form-check">
            <label class="d-flex justify-content-start rdiobox ">
                <input  type="radio" name="tipo_cliente" id="input_nacional" oninput="StoreSubTipo('input_nacional','not-particular','a',3)"  >
                <span>Si</span></label>                
            </div>
        </div>
        <div class="col-6">
        <div class="form-check">
            <label class="d-flex justify-content-start rdiobox ">
                    <input  type="radio" name="tipo_cliente" id="input_noNacional" oninput="StoreSubTipo('input_noNacional','not-particular','a',4)"  >
                    <span>No</span></label>  
            </div>
        </div>
       
    </div>
    </div>


<style scoped>
    .Hidden{
        display:none !important;
    }
    .header{
    border-bottom: 1px solid rgb(209, 209, 209);
    padding-left: 0px;
  }
</style>
<script>

    $(document).ready(function(){
        let cliente = {!!$cliente!!};
        console.log(cliente);
        if(cliente.subtipo<3){
            document.getElementById('input_personal').checked = true;
            ActivateOnChecked('input_personal','cliente_personal','cliente_corporativo')
            if(cliente.subtipo == 1){
                document.getElementById('input_particular').checked = true;
                StoreSubTipo('input_particular','a','not-particular',1)

            }else{
                document.getElementById('input_carga').checked = true;
                StoreSubTipo('input_carga','not-particular','a',2)
            }
        }else{
            document.getElementById('input_corporativo').checked = true;
            ActivateOnChecked('input_corporativo','cliente_corporativo','cliente_personal')
            if(cliente.subtipo == 3){
                document.getElementById('input_nacional').checked = true;
                StoreSubTipo('input_nacional','not-particular','a',3)

            }else{
                document.getElementById('input_noNacional').checked = true;
                StoreSubTipo('input_noNacional','not-particular','a',4)
            }
        }
    })
    function StoreSubTipo(idCheck,idToActive,opositeId,subtipo){
        storeData.subtipo = subtipo;
        console.log(storeData);
        ActivateOnChecked(idCheck,idToActive,opositeId);
    }
     function ActivateOnChecked(idCheck,idToActive,opositeId){
        $(".barra_localidad").removeClass('Hidden');

        
        if(document.getElementById(idCheck).checked){
            console.log($("."+idToActive));
            $("."+idToActive).removeClass('Hidden');
            $("."+opositeId).addClass('Hidden');
      
          
        }
        else{
            console.log(" not papira");
            $("."+idToActive).addClass('Hidden');

            $("."+opositeId).removeClass('Hidden');
         
        }
    }
</script>