<!--PRIMERA VISTA: se buscan los datos del cliente y factura-->
<div class="br-section-wrapper pd-30-force">

    <form action="/warranty" method="POST" class="parsley-style-1" >
        <div class="form-layout form-layout-1">
            <div class="d-flex align-items-center justify-content-start bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Buscar-->
                <div class="row wd-100v pd-y-20 pd-md-y-0">
                    <div class="col-md-5"><!--Nro Factura-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Número de Factura<span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="invoice" value="" placeholder="Introduzca número de factura">
                        </div>
                    </div><!-- col-5 -->

                    <div class="col-md-5"><!--RIF/Cedula-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">RIF/Cédula<span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="rif" value="" placeholder="Introduzca el RIF o Cédula">
                        </div>
                    </div><!-- col-5 -->

                    <div class="col-md-2"><!--Btn Buscar-->
                        <div class="d-flex align-items-center justify-content-center" style="height: 100%">
                            <button class="btn btn-info p-2 bd-0 tx-spacing-2">
                                <a href="{{url('/warranty')}}" class="btn btn-info p-0" tabindex="5">
                                    <i class="icon ion-search"></i>
                                </a>
                            </button>
                        </div>
                    </div>
                </div><!--row-->
            </div><!-- d-flex -->
        
            <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Cliente-->
                <h4 class="tx-info">Cliente</h4>
                <div class="row pd-y-20 pd-md-y-0">
                    <div class="col-md-6"><!--Nombre o Razón Social-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Nombre/Razón Social: <span class="tx-danger"></span></label>
                            <input class="form-control" type="text" name="client_name" value="" placeholder="Introduzca el Nombre o Razón Social">
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-md-6"><!--Teléfono-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Teléfono: <span class="tx-danger"></span></label>
                            <input class="form-control" type="text" name="phone" value="" placeholder="Introduzca el Número de Teléfono">
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-md-6"><!--Estado-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">
                                Estado:
                                <span class="tx-danger"></span>
                            </label>
                            <select class="form-control" data-placeholder="Escoja Estado">
                                <option label="Escoja Estado"></option>
                                <option value="la">Lara</option>
                                <option value="mi">Miranda</option>
                                <option value="zu">Zulia</option>
                                <option value="dc">Distrito Capital</option>
                            </select>
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-md-6"><!--Ciudad-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Ciudad: <span class="tx-danger"></span></label>
                            <select class="form-control" data-placeholder="Escoja Ciudad">
                                <option label="Escoja Ciudad"></option>
                                <option value="la">Barquisimeto</option>
                                <option value="mi">Guarenas</option>
                                <option value="zu">Maracaibo</option>
                                <option value="dc">Caracas</option>
                            </select>
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-md-12"><!--Dirección-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Dirección: <span class="tx-danger"></span></label>
                            <input class="form-control" type="text" name="address" value="" placeholder="Introduzca la dirección">
                        </div>
                    </div><!-- col- 12 -->
                
                </div><!--row-->
            </div><!--d-flex-->

            <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Factura-->
                <h4 class="tx-info">Factura</h4>
                <div class="row pd-y-20 pd-md-y-0">

                    <div class="col-md-6"><!--Codigo-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Código:<span class="tx-danger"></span></label>
                            <input class="form-control" type="text" name="client_name" value="" placeholder="">
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-md-6"><!--Fecha-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Fecha:<span class="tx-danger"></span></label>
                            <input class="form-control" type="text" name="client_name" value="" placeholder="">
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-md-4"><!--Precio-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Precio:<span class="tx-danger"></span></label>
                            <input class="form-control" type="text" name="client_name" value="" placeholder="">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-md-4"><!--IVA-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">IVA:<span class="tx-danger"></span></label>
                            <input class="form-control" type="text" name="client_name" value="" placeholder="">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-md-4"><!--Monto con IVA-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Monto con IVA:<span class="tx-danger"></span></label>
                            <input class="form-control" type="text" name="amount_iva" value="" placeholder="">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-md-12"><!--Descripción-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Descripción:<span class="tx-danger"></span></label>
                            <input class="form-control" type="text" name="client_name" value="" placeholder="">
                        </div>
                    </div><!-- col-4 -->

                </div><!--row-->
            </div><!--d-flex factura-->
            
            <!--<div class="d-flex justify-content-end form-layout-footer mg-t-10">
                <a href="{{url('/warranty')}}" class="btn btn-secondary mg-r-10" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-info" tabindex="4">Siguiente</button>
            </div>--><!-- form-layout-footer -->

        </div><!-- form-layout -->
    </form>
</div> <!--br-section-wrapper-->