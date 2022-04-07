<!--TERCERA VISTA: Condiciones de Vehículo-->
<div class="br-section-wrapper pd-35-force">
      
    <div class="form-layout form-layout-1">

            <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10"><!--Vehículo-->
                <h4 class="tx-info">Vehículo</h4>
                <div class="row pd-y-20 pd-md-y-0">

                    <div class="col-md-6"><!--Tipo Producto-->
                        <div class="form-group mg-b-10-force">
                        <label class="form-control-label">
                            Tipo de Vehículo:
                            <span class="tx-danger">*</span>
                        </label>
                        <select required data-validate="parsley" class="form-control" name="tipo_vehiculo" data-live-search="true" data-placeholder="Seleccione tipo" required id="selectTipoVehiculo">
                            <option label="Seleccione tipo"></option>
                            @foreach($tipoVehiculos as $tipoVehi)
                                <option value="{{$tipoVehi['id']}}" {{old('tipo_vehiculo')==$tipoVehi['id'] ? 'selected' : ''}}>{{$tipoVehi['descripcion']}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-md-6"><!--Kilometraje-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Kilometraje:<span class="tx-danger">*</span></label>
                            <input required data-validate="parsley" class="form-control" type="text" name="kilometraje" required value="{{old('kilometraje')}}" id="selectKilometraje">
                        </div>
                    </div><!-- col-6 -->

                    <!--Otra fila-->
                    <div class="col-md-6"><!--Marca-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Marca:<span class="tx-danger">*</span></label>
                            <select onchange="GetModelosVehiculo()" required data-validate="parsley" class="form-control" name="marca_vehiculo" data-placeholder="Seleccione la marca" required id="selectMarcaVehiculo">
                                <option label="Seleccione..."></option>
                                @foreach($marcaVehiculos as $marcaVehi)
                                    <option value="{{$marcaVehi['id']}}" {{old('marca_vehiculo')==$marcaVehi['id'] ? 'selected' : ''}}>{{$marcaVehi['descripcion']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><!-- col-6 -->

                    <div class="col-md-6"><!--Modelo-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Modelo:<span class="tx-danger">*</span></label>
                            <select required data-validate="parsley" class="form-control" name="modelo_vehiculo" data-placeholder="Seleccione la marca" required id="selectModeloVehiculo">
                                <option label="Seleccione..."></option>
                           
                            </select>
                        </div>
                    </div><!-- col-6 -->

                    <!--Otra fila-->
                    <div class="col-md-4"><!--Carga Máxima-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Carga Máxima:<span class="tx-danger">*</span></label>
                            <select required data-validate="parsley" class="form-control" name="carga_maxima" data-placeholder="Seleccione la carga" required id="selectCargaVehiculo">
                                <option label="Seleccione..."></option>
                                @foreach($cargaVehiculo as $carga)
                                    <option value="{{$carga['id']}}" {{old('carga_maxima')==$carga['id'] ? 'selected' : ''}}>{{$carga['descripcion']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-md-4"><!--Ancho del Rin-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Ancho del Rin(pulgadas):<span class="tx-danger">*</span></label>
                            <input required data-validate="parsley" class="form-control" type="text" name="ancho_rin" required value="{{ old('ancho_rin') }}" id="selectAnchoRin">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-md-4"><!--Presión de Inflado(PSI)-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Presión de Inflado(PSI):<span class="tx-danger">*</span></label>
                            <input required data-validate="parsley" class="form-control" type="text" name="psi" required value="{{ old('psi') }}" id="selectPsi">
                        </div>
                    </div><!-- col-4 -->

                    <!--Otra fila-->
                    <div class="col-md-6"><!--Tipo de Carga-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Tipo de Carga:<span class="tx-danger">*</span></label>
                            <select required data-validate="parsley" class="form-control" name="tipo_carga" data-placeholder="Seleccione..." required id="selectTipoCarga">
                                <option label="Seleccione..."></option>
                                @foreach($tipoCargaVehiculos as $tipoCarga)
                                    <option value="{{$tipoCarga['id']}}" {{old('tipo_carga')==$tipoCarga['id'] ? 'selected' : ''}}>{{$tipoCarga['descripcion']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-md-6"><!--Tipos de Terreno-->
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Tipos de Terreno:<span class="tx-danger">*</span></label>
                            <select required data-validate="parsley" class="form-control" name="tipo_terreno" data-placeholder="Seleccione..." required id="selectTipoTerreno">
                                <option label="Seleccione..."></option>
                                @foreach($tipoTerrenoVehiculos as $tipoTerreno)
                                    <option value="{{$tipoTerreno['id']}}" {{old('tipo_terreno')==$tipoTerreno['id'] ? 'selected' : ''}}>{{$tipoTerreno['descripcion']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><!-- col-4 -->

                </div><!--row-->
            </div><!--d-flex-->
<!--
            <div class="d-flex-column align-items-center justify-content-around mg-t-15 bg-gray-100 ht-auto bd pd-x-20 pd-y-10">
                <h4 class="tx-info">Notas de la Solicitud</h4>
                <div class="row pd-y-20 pd-md-y-0">
Tipo de Renovado /Checkbox
                    <div class="col-md-12">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Decisión:<span class="tx-danger"></span></label>
                            <div class="d-flex row justify-content-around">
                                <label class="d-flex rdiobox rdiobox-success">
                                    <input type="radio" name="decision" id="true" value="true" @if(old('decision')=="true") checked @endif><span>Aprobada</span>
                                </label>

                                <label class="d-flex rdiobox rdiobox-danger">
                                    <input type="radio" name="decision" id="false" value="false" @if(old('decision')=="false") checked @endif><span>Rechazada</span>
                                </label>
                            </div>
                        </div>
                    </div>
                

                    
                    <div class="col-md-12">
                        <div class="form-group mg-b-10-force">
                            <div class="row mg-t-20">
                                <div class="col-lg">
                                    <textarea id="text_observaciones" rows="3" class="form-control" name="descripcion_solicitud" placeholder="Observaciones" required>{{old('descripcion_solicitud')}}</textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                 

                </div>
            </div>
-->
    </div><!-- form-layout -->
</div> <!--br-section-wrapper-->
<script>

    function GetModelosVehiculo(){
        let modeloNeumaticos = document.getElementById('selectModeloVehiculo');
        modeloNeumaticos.innerHTML = '<option label="Seleccione modelo"></option>';
        $.ajax({
            url: '<?php echo route('GetModeloByMarcaVehiculo')?>',
            type:"POST",
            data: {
                "_token": $("meta[name='csrf-token']").attr("content"),
                "idMarca": document.getElementById('selectMarcaVehiculo').value,
            },
            success: function(data){
                let elementos = data.data;
                for(let i = 0 ; i < elementos.length ; i++){
                        let opt = document.createElement('option');
                        opt.value = elementos[i].id;
                        opt.innerHTML = elementos[i].descripcion;
                        modeloNeumaticos.appendChild(opt);
                    }
            }
        })
    }
</script>