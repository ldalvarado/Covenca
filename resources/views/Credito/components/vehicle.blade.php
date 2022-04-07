<!--TERCERA VISTA: Condiciones de Vehículo-->
<div class="br-section-wrapper pd-35-force">
      
    <div class="form-layout form-layout-1">
        <form action="/warranty" method="POST" class="parsley-style-1" >
            <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->
                <h4 class="tx-info">Vehículo</h4>
                <div class="row pd-y-20 pd-md-y-0">

                    <div class="col-md-6"><!--Tipo Producto-->
                        <div class="form-group mg-b-10-force">
                        <label class="form-control-label">
                            Tipo de Vehículo:
                            <span class="tx-danger"></span>
                        </label>
                        <select class="form-control" data-live-search="true" data-placeholder="Escoja tipo">
                            <option label="Escoja tipo"></option>
                            <option value="uno">Bus - 2 ejes</option>
                            <option value="dos">Bus - 2 ejes</option>
                            <option value="tres">Chuto -2 ejes</option>
                            <option value="cuatro">Chuto -3 ejes</option>
                        </select>
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-md-6"><!--Kilometraje-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Kilometraje:<span class="tx-danger"></span></label>
                            <input class="form-control" type="text" name="kilometer" value="" placeholder="">
                        </div>
                    </div><!-- col-6 -->

                    <!--Otra fila-->
                    <div class="col-md-6"><!--Marca-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Marca:<span class="tx-danger"></span></label>
                            <select class="form-control" data-placeholder="Escoja la marca">
                                <option label="Escoja..."></option>
                                <option value="uno">Mitsubishi</option>
                                <option value="dos">Ford</option>
                                <option value="tres">Toyota</option>
                                <option value="cuatro">Blue Bird</option>
                                <option value="cinco">Chevrolet</option>
                            </select>
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-md-6"><!--Modelo-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Modelo:<span class="tx-danger"></span></label>
                            <select class="form-control" data-placeholder="Escoja la marca">
                                <option label="Escoja..."></option>
                                <option value="uno">F150</option>
                                <option value="dos">NPR</option>
                                <option value="tres">Kodiak</option>
                                <option value="tres">Dyna</option>
                            </select>
                        </div>
                    </div><!-- col-6 -->

                    <!--Otra fila-->
                    <div class="col-md-4"><!--Carga Máxima-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Carga Máxima:<span class="tx-danger"></span></label>
                            <input class="form-control" type="text" namer="" value="" placeholder="">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-md-4"><!--Ancho del Rin-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Ancho del Rin(pulgadas):<span class="tx-danger"></span></label>
                            <input class="form-control" type="text" namer="" value="" placeholder="">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-md-4"><!--Presión de Inflado(PSI)-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Presión de Inflado(PSI):<span class="tx-danger"></span></label>
                            <input class="form-control" type="text" name="client_name" value="" placeholder="">
                        </div>
                    </div><!-- col-4 -->

                    <!--Otra fila-->
                    <div class="col-md-6"><!--Tipo de Carga-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Tipo de Carga:<span class="tx-danger"></span></label>
                            <select class="form-control" data-placeholder="Escoja...">
                                <option label="Escoja..."></option>
                                <option value="uno">Construcción</option>
                                <option value="dos">Maquinaria</option>
                                <option value="tres">Alimento(Producto Terminado)</option>
                                <option value="tres">Alimento(Fruta y Hortaliza)</option>
                            </select>
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-md-6"><!--Tipos de Terreno-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Tipos de Terreno:<span class="tx-danger"></span></label>
                            <select class="form-control" data-placeholder="Escoja...">
                                <option label="Escoja..."></option>
                                <option value="uno">Larga Distancia(Autopista)</option>
                                <option value="dos">Media Distancia(Regional)</option>
                                <option value="tres">Urbano - Avenidas y Calles</option>
                                <option value="tres">Fuera de Carretera(Off-road)</option>
                            </select>
                        </div>
                    </div><!-- col-4 -->

                </div><!--row-->
            </div><!--d-flex-->

            <!--<div class="d-flex justify-content-end form-layout-footer mg-t-10">
                <a href="{{url('/warranty')}}" class="btn btn-secondary mg-r-10" tabindex="5">Cancelar</a>
                <button type="submit" class="btn btn-info" tabindex="4">Siguiente</button>
            </div>--><!-- form-layout-footer -->

        </form>
    </div><!-- form-layout -->
</div> <!--br-section-wrapper-->