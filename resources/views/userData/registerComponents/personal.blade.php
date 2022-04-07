<div class="Hidden cliente_personal" > 
    
    <div>
    <div class= "row pd-t-15">
    </div>
    <div class = "row">

        <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="email" class="form-control" id="input_nombre" aria-describedby="emailHelp" placeholder="Inserte Nombre">
        </div>
        </div>
        <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Apellido</label>
            <input type="email" class="form-control" id="input_apellido" aria-describedby="emailHelp" placeholder="Inserte Apellido">
        </div>
        </div>
        <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Cedula </label>
            <input type="email" class="form-control" id="input_cedula" aria-describedby="emailHelp" placeholder="Inserte Cedula">
        </div>
        </div>
        <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Teléfono </label>
            <input type="email" class="form-control" id="input_telefono" aria-describedby="emailHelp" placeholder="Inserte Teléfono">
        </div>
        </div>
        <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Email </label>
            <input type="email" class="form-control" id="input_email" aria-describedby="emailHelp" placeholder="Inserte email">
        </div>
        </div>
        <div class="col-12 col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Contraseña</label>
            <input type="password" class="form-control Hidden" id="input_password" aria-describedby="emailHelp" placeholder="Inserte contraseña">
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
        $("#input_nombre").val(nombres[0]);
        $("#input_apellido").val(nombres[1]);
         $("#input_cedula").val(cliente.doc);
        $("#input_telefono").val(cliente.telefono);
       $("#input_email").val(cliente.email);
        $('#input_password').val(cliente.email);
    })
</script>
