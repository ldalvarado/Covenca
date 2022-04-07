@extends('layouts.app')

@section('contenido')
<form action="{{route('Analisis.store')}}" method="POST" class="parsley-style-1" name="form" id="form" enctype="multipart/form-data" data-parsley-validate>
<div class="br-pagebody mg-t-5 pd-15">
  <div class="container p-2">
    <div class="row">
      <div col-12>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      </div>
      <div class="col-12 col-md-12">
        <div class="card w-100">

          <div class="card-header pt-3 pb-3">
            <div class="row justify-content-center">
              <div class="col align-self-center">
                <h3 class="tx-uppercase tx-bold text-center mb-0">Análisis Técnico</h3>
              </div>
            </div>
          </div>

          <div class="card-body p-2">
            <div id="accordion" class="accordion pb-4" role="tablist" aria-multiselectable="true">
              <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                  <h4 class="mg-b-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class=" tx-gray-800 transition">
                      Validar información de la garantía
                      <i class="float-right fas fa-chevron-down"></i>
                    </a>
                  </h4>
                </div><!-- card-header -->

                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                  <div class="card-block p-2">
                    <section class="p-0">
                      @include('Analisis.components.validate')
                    </section>
                  </div>
                </div>
              </div>
              
              <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                  <h4 class="mg-b-0">
                    <a class="collapsed tx-gray-800 transition" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Análisis de la garantía
                      <i class="float-right fas fa-chevron-down"></i>
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="card-block p-2">
                    <section class="p-0">
                      @include('Analisis.components.calculate')
                    </section>
                  </div>
                </div>
              </div>
            </div><!-- accordion -->
          </div>
        </div><!-- card w-100 -->
      </div><!-- col-12 -->
    </div><!--row-->
  </div>

</div><!--pagebody-->
</form>
<script>
   $(document).ready(function(){
        
        ActivateNavLink("nav-link_wa");

    });
    const form  = document.getElementById('form');
    form.addEventListener('submit', (event) => {
    // stop form submission
    event.preventDefault();
    });
    $('#profundidad').on('change', function() {

        $('#profundidadDiseno')[0].value = $(this).find('option:selected').text();
        calcularPorcentaje();
       });
  function getBase64(file) {
  return new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => resolve(reader.result);
    reader.onerror = error => reject(error);
  });
}
      $fotoInput = $('#file');
      var image64 = "";
    $fotoInput.on('change',function(e){
      var formData = new FormData();
      var fileName = document.getElementById("file").files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
        formData.append('photo', $fotoInput[0].files[0]);
        
        getBase64($fotoInput[0].files[0]).then(
          function(data) {
            image64 = data;
            $("#imagenAnalisis").attr('src', data);
          }

        );

    }
);
function ValidateArray(){
        campos1 =[$("#input_descripcion").parsley(),$("#profundidadActual").parsley(),$("#zona").parsley(),$("#rechazo").parsley()]
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
  function analisis() {
    console.log(ValidateArray());
  if(!ValidateArray()){
    return;
  }
            event.preventDefault();
  var data = $("#form").serialize(); 
 
  var formData = new FormData($('#form')[0]);
  formData.append('_token', $("meta[name='csrf-token']").attr("content"))
  formData.append('csrf', $("meta[name='csrf-token']").attr("content"))
    
  try{
    formData.append('photo', $fotoInput[0].files[0]);

    formData.append('tipo', $fotoInput[0].files[0]["type"]);
    formData.append('imagen', image64);
   

  }catch(Exepction){

  }

  formData.append('condiciones', JSON.parse(  window.localStorage.getItem('condiciones')));
  formData.append('condiciones_activo', JSON.parse(window.localStorage.getItem('condicionesActivo')));
  formData.append('Porcentaje', $('#reconocimiento').val());
    
  console.log(JSON.parse(window.localStorage.getItem('condicionesActivo')))
  
      $.ajax({
        url: "{{route('Analisis.store')}}",
        type:"POST",
        data: formData,
        processData: false,
        contentType: false,
    headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
    },
    success:function(response){
          console.log(response);
          if(response.isSuccess) {
            window.location.href = "{{ route('warranty.show', $reclamo->id)}}";
          }else{
            Toast.fire({
                    type: 'error',
                    title: response.message
            })
          }
        },
       });

        }
</script>
@endsection