@extends('layouts.app')

@section('contenido')
    <!-- ########## START: MAIN PANEL ########## -->
      <div class="br-pagebody pd-x-20 pd-sm-x-30 pd-y-20">
        <div class="br-section-wrapper pd-35-force">

          <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-t-20 mg-b-10-force">
            Basic Form Wizard with Validation
          </h6>
          <p class="mg-b-40 tx-gray-600">A basic form wizard with form validation using Parsley js form validation plugin.</p>

          <div id="wizard2">

            <h3>Personal Information</h3>
            <section>
              <p>Try the keyboard navigation by clicking arrow left or right!</p>
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                <input id="firstname" class="form-control" name="firstname" placeholder="Enter firstname" type="text" required>
              </div><!-- form-group -->
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                <input id="lastname" class="form-control" name="lastname" placeholder="Enter lastname" type="text" required>
              </div><!-- form-group -->
            </section>

            <h3>Billing Information</h3>
            <section>
              <p>Wonderful transition effects.</p>
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                <input id="email" class="form-control" name="email" placeholder="Enter email address" type="email" required>
              </div><!-- form-group -->
            </section>

            <h3>Payment Details</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
            </section>

          </div>
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script>
        $('#wizard2').steps({

          labels: {
              current: "Paso actual:",
              pagination: "Paginación",
              finish: "Finalizar",

              next: "Siguiente",
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