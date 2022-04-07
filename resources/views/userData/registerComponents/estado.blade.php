<div class="row barra_localidad Hidden">
    <div class="col-12">   <label class="form-control-label" for="">Localidad:</label><span class="tx-danger">*</span></div>

    <div class="col-12 col-md-4">  
        <label class="form-control-label" for="">Estado:</label>  
        <select class="form-control" onchange="ChangeCiudad()" id="input_estado">
        <option value ="Lara">Lara</option>
        <option value="Portuguesa">Portuguesa</option>
      
    </select></div>
    <div class="col-12 col-md-4">
        <label class="form-control-label" for="">Ciudad:</label>  

        <select  class="form-control" id="input_ciudad">
        <option value="Barquisimeto">Barquisimeto</option><option value="Cabudare">Cabudare</option>
    </select></div>
    <div class="col-12 col-md-4">
        <label class="form-control-label" for="">Sucursal de Covencaucho:</label>  

        <select class="form-control" id="input_sucursal">
        @foreach($sucursales as $Sucursal )
        <option value={{$Sucursal->id}}>{{$Sucursal->descripcion}}</option>
        @endforeach
    </select></div>
    
</div>
<script>
    $(document).ready(function(){
        let cliente = {!!$cliente!!};
 
     
        $("#input_estado").val(cliente.estado);
        $("#input_ciudad").val(cliente.ciudad);
        $("#input_sucursal").val(cliente.idSucursal);
     
    })
    function ChangeCiudad(){
        if($("#input_estado").val()=="Lara"){
            let elementos = '<option value="Barquisimeto">Barquisimeto</option><option value="Cabudare">Cabudare</option>'
            document.getElementById('input_ciudad').innerHTML = elementos;
        }else{
            let elementos = '<option value="Acarigua">Acarigua</option><option value="Araure">Araure</option>'
            document.getElementById('input_ciudad').innerHTML = elementos;
        }
    }
</script>