<div class="adicionales">
    <div class="row">
    <div class="col-12">   <label class="form-control-label" for="">¿Cuál es la marca de cauchos que usualmente compra? </</label><span class="tx-danger">*</span>
    </div>
    </div>
<div class="row" id="cauchos_container">
</div>
<div class="row barra_localidad Hidden">
    <div class="col-12">   <label class="form-control-label" for="">Seleccione el Tipo de Carcasa Promedio :</label><span class="tx-danger">*</span></div>

    <div class="col-12 col-md-4">  
        <label class="form-control-label" for="">Carcasa:</label>  
        <select class="form-control" id="input_carcasa">
        <option value="AAA">AAA</option>
        <option value="AA">AA</option>
        <option value="A">A</option>
        <option value="Mix A-AA">Mix A-AA</option>
        <option value="Mix AAA-A">Mix AAA-A</option>
        <option value="Mix AAA-AA">Mix AAA-AA</option>
        <option value="Mix AAA-AA-A">Mix AAA-AA-A</option>

    </select></div>
   
    
</div>      
</div>
<script>
    let marcas = {!!$marcas!!};
    function storeMarca(idMarca,idElemento){
        if(document.getElementById('marca_'+idMarca).checked){
            storeData.marcas.push(idMarca);
        }
        else{
            for(let i = 0 ; i < storeData.marcas.length;i++ ){
                if( storeData.marcas[i] == idMarca ){
                    storeData.marcas.splice(i,1);
                }
            }
        }
        console.log(storeData);
    }
    $(document).ready(function(){
        let container = document.getElementById("cauchos_container");
        let innerHTML = "";
        for(let i = 0 ; i < marcas.length ; i++){
            innerHTML += '<div class="col-12 col-md-6 col-lg-4"><div class="form-check"><label class="d-flex justify-content-start  "><input onchange="storeMarca('+marcas[i].descripcion[0].id+','+'marca_'+marcas[i].descripcion[0].id+')"  type="checkbox" name="tipo_cliente" id="marca_'+marcas[i].descripcion[0].id+'"><span>'+marcas[i].descripcion[0].descripcion+'</span></label></div></div>';
        }
        container.innerHTML = innerHTML;
    })
</script>