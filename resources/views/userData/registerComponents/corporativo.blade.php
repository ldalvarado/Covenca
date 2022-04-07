<div class="Hidden cliente_corporativo" > 
    
    <div>
    <div class= "row pd-t-15">
    </div>
    <div class = "row">

        <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Razon Social</label>
            <input type="email" class="form-control" id="input_razon" aria-describedby="emailHelp" placeholder="Inserte Nombre">
        </div>
        </div>
        <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">RIF </label>
            <input type="email" class="form-control" id="input_rif" aria-describedby="emailHelp" placeholder="Inserte Apellido">
        </div>
        </div>
        <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Persona Contacto </label>
            <input type="email" class="form-control" id="input_contacto" aria-describedby="emailHelp" placeholder="Inserte Cedula">
        </div>
        </div>
        <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Teléfono </label>
            <input type="email" class="form-control" id="input_tlf_c" aria-describedby="emailHelp" placeholder="Inserte Teléfono">
        </div>
        </div>
        <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Email </label>
            <input type="email" class="form-control" id="input_email_c" aria-describedby="emailHelp" placeholder="Inserte email">
        </div>
        </div>
        <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Direccion </label>
            <input type="email" class="form-control" id="input_direccion_c" aria-describedby="emailHelp" placeholder="Inserte email">
        </div>
        </div>
        <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Contraseña</label>
            <input type="password" class="form-control Hidden" id="input_password_c" aria-describedby="emailHelp" placeholder="Inserte contraseña">
        </div>
        </div>
    </div>    
</div>
</div>

<style scoped>
    .Hidden{
        display:none !important;
    }
    .cliente_personal{

  }
</style>
<script>
    $(document).ready(function(){
        let cliente = {!!$cliente!!};
        let nombres = cliente.nombre.split(" ");
     
     
        $("#input_razon").val(nombres[0]);
        $("#input_rif").val(cliente.doc);
        $("#input_contacto").val(cliente.contacto);
        $("#input_tlf_c").val(cliente.telefono);
        $("#input_email_c").val(cliente.email);
        $('#input_password_c').val(cliente.email);
        $("#input_direccion_c").val(cliente.direccion);
    })
</script>
