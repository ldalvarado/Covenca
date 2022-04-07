@extends('layouts.app')

@section('contenido')

<div class="br-pagebody mg-t-5 pd-15">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12">
        <div class="card w-100">

          <div class="card-header pt-3 pb-3">
            <div class="row justify-content-center">
              <div class="col align-self-center">
                <h3 class="tx-uppercase tx-bold text-center mb-0">Solicitud de Garantías</h3>
              </div>
            </div>
          </div>

          <div class="card-body">
            <div id="wizard" class="">
              <h3>Datos de la Factura</h3>
              <section>
                @include('warranty.components.invoice')
              </section>

              <h3>Datos del Producto</h3>
              <section>
                @include('warranty.components.product')
              </section>

              <h3>Datos del Vehículo</h3>
              <section>
                @include('warranty.components.vehicle')
              </section>

              <h3>Condición del Caucho</h3>
              <section>
                @include('warranty.components.questions')
              </section>

            </div>
          </div><!--cardbody-->
              
        
        
        </div><!-- card w-100 -->
      </div><!-- col-12 -->
    </div><!--row-->
  </div>

</div><!--pagebody-->

<script>
   $(document).ready(function(){
        
        ActivateNavLink("nav-link_wa");

    });
  $('#wizard').steps({
    labels: {
              current: "Paso actual:",
              pagination: "Paginación",
              finish: "Finalizar",
              next: "Siquiente",
              previous: "Anterior",
              loading: "Cargando ..."
    },
    headerTag: 'h3',
    bodyTag: 'section',
    autoFocus: true,
    titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
  });

</script>
@endsection