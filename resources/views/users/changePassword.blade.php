@extends('layouts.landing')

@section('contenido')
<x-guest-layout>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

            @csrf
          
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password1" value="contraseña actual" />

                <x-input id="password1" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required data-validate="parsley" autocomplete="new-password" />
            </div>
            

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required data-validate="parsley" autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation"  required data-validate="parsley" />
            </div>

            <div class="flex items-center justify-end mt-4">
                

                <button id="btn_save" onclick="save()" class="ml-4 btn btn-info">
                    Guardar
                </button>
            </div>
</x-guest-layout>
@endsection
<script>
    function ValidateArray(){
        campos1 =[$("#password_confirmation").parsley(),$("#password").parsley(),$("#password1").parsley()]
  var activoBool = true;
          for(let i = 0; i<campos1.length;i++){
            if(campos1[i] != null){
              console.log("is valid:" +campos1[i].isValid());
            
            if(!(campos1[i].isValid())){

              activoBool = false;
            }
            }
           
          }
          if(activoBool) {
            return true;
          } else {
            for(let i = 0; i<campos1.length;i++){
             
              campos1[i].validate();
            }
            return false;
          }
}
    function save(){
        if(!ValidateArray()) return;
        if($("#password").val()!=$("#password_confirmation").val()){
            alert('las contraseñas no coinciden');
            return;
        }
        if($("#password").val()==$("#password1").val()){
            alert('las contraseña nueva no puede ser igual a la anterior');
            return;
        }
        if($("#password").val().length<8){
            alert('la contraseña no puede tener una longitud menor a 8 caracteres');
            return;
        }
        $.ajax({
        url: '<?php echo route('changePasswordFunction')?>',
        type:"POST",
        data: {
        "_token": $("meta[name='csrf-token']").attr("content"),
        "old_password":$("#password1").val(),
        "new_password":$("#password").val(),
        "id": {!! $id !!},
        },
        success:function(response){
            if(response.status == 1){
                alert(response.msg);

            }
            else{
            }
              window.location.href = "<?php echo route('welcome')?>";

            },
       });


    }

</script>