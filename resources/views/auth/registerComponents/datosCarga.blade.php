<div id="carga_1" class="not-particular Hidden">
    
    <div id="carga_2" class="Carga  Hidden">
        <div class="row">
            <div  class="col-12">   <label class="form-control-label" for="">Cuál es el tipo de carga que transporta?:</label><span class="tx-danger">*</span></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-check">
                    <label class="d-flex justify-content-start  ">
                        <input  type="checkbox" name="input_liquidos" id="input_liquidos"     >
                        <span>Líquidos y Gases</span></label>                
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                <div class="form-check">
                    <label class="d-flex justify-content-start  ">
                            <input  type="checkbox" name="tipo_cliente" id="input_pasajeros"   >
                            <span>Pasajeros / Colectivos</span></label>  
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-check">
                    <label class="d-flex justify-content-start  ">
                        <input  type="checkbox" name="tipo_cliente" id="input_agricola"     >
                        <span>Productos Agrícolas o Pecuarios a Granel</span></label>                
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                <div class="form-check">
                    <label class="d-flex justify-content-start  ">
                            <input  type="checkbox" name="tipo_cliente" id="input_alimento"   >
                            <span>Alimentos y Bebidas</span></label>  
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-check">
                    <label class="d-flex justify-content-start  ">
                        <input  type="checkbox" name="tipo_cliente" id="input_construccion"     >
                        <span>Construcción, Maquinas, Siderúrgica y Minería</span></label>                
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                <div class="form-check">
                    <label class="d-flex justify-content-start  ">
                            <input  type="checkbox" name="tipo_cliente" id="input_electronicos"   >
                            <span>Equipos Electrónico y Electrodomésticos</span></label>  
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-check">
                    <label class="d-flex justify-content-start  ">
                        <input  type="checkbox" name="tipo_cliente" id="input_farmacos"     >
                        <span>Farmacéutico, Cuidado Personal y del Hogar</span></label>                
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                <div class="form-check">
                    <label class="d-flex justify-content-start  ">
                            <input  type="checkbox" name="tipo_cliente" id="input_textiles"   >
                            <span>Textiles</span></label>  
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <span>Otro (especifique)</span></label> 
                    <input vehiculo onchange="activateTextInput('check_otro','input_otro')" type="checkbox" name="tipo_cliente" id="check_otro"   >
                
                    <input disabled id="input_otro" placeholder="cantidad">     
                </div>
            
        </div>
        <div class="Meses">
        <div class="row">
            <div  class="col-12">   <label class="form-control-label" for="">¿Cuáles son los meses de mayor actividad? :</label><span class="tx-danger">*</span></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-check">
                    <label class="d-flex justify-content-start  ">
                        <input onchange="selectAll()"  type="checkbox" name="tipo_cliente" id="input_todo_a"     >
                        <span>TODO EL AÑO</span></label>                
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                <div class="form-check">
                    <label class="d-flex justify-content-start  ">
                            <input  type="checkbox" name="tipo_cliente" id="input_enero"   >
                            <span>Enero</span></label>  
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-check">
                    <label class="d-flex justify-content-start  ">
                        <input  type="checkbox" name="tipo_cliente" id="input_febrero"     >
                        <span>Febrero</span></label>                
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                <div class="form-check">
                    <label class="d-flex justify-content-start  ">
                            <input  type="checkbox" name="tipo_cliente" id="input_marzo"   >
                            <span>Marzo</span></label>  
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-check">
                    <label class="d-flex justify-content-start  ">
                        <input  type="checkbox" name="tipo_cliente" id="input_abril"     >
                        <span>Abril</span></label>                
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                <div class="form-check">
                    <label class="d-flex justify-content-start  ">
                            <input  type="checkbox" name="tipo_cliente" id="input_mayo"   >
                            <span>Mayo</span></label>  
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-check">
                    <label class="d-flex justify-content-start  ">
                        <input  type="checkbox" name="tipo_cliente" id="input_junio"     >
                        <span>Junio</span></label>                
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                <div class="form-check">
                    <label class="d-flex justify-content-start  ">
                            <input  type="checkbox" name="tipo_cliente" id="input_julio"   >
                            <span>Julio</span></label>  
                    </div>
                </div>
               
                <div class="col-12 col-md-6 col-lg-4">
                <label class="d-flex justify-content-start  ">
                            <input  type="checkbox" name="tipo_cliente" id="input_agosto"   >
                            <span>Agosto</span></label>      
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                <label class="d-flex justify-content-start  ">
                            <input  type="checkbox" name="tipo_cliente" id="input_septiembre"   >
                            <span>Septiembre</span></label>      
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                <label class="d-flex justify-content-start  ">
                            <input  type="checkbox" name="tipo_cliente" id="input_octubre"   >
                            <span>Octubre</span></label>      
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                <label class="d-flex justify-content-start  ">
                            <input  type="checkbox" name="tipo_cliente" id="input_noviembre"   >
                            <span>Noviembre</span></label>      
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                <label class="d-flex justify-content-start  ">
                            <input  type="checkbox" name="tipo_cliente" id="input_diciembre"   >
                            <span>Diciembre</span></label>      
                </div>
            
        </div>
        </div>
        <div class = "row">

            <div class="col-12 ">
                <div class="form-group">
                    <label for="exampleInputEmail1">¿Cuál es el peso / carga máxima que transporta? (Exprese en kg. Solo Números)</label>
                    <input type="number" class="form-control" id="input_carga_data" aria-describedby="emailHelp" placeholder="Inserte Kg">
                </div>
            </div>
            <div class="col-12 ">
                <div class="form-group">
                    <label for="exampleInputEmail1">
                        ¿Cuántos Km estima recorre su flota al mes? (Exprese en km. Solo Números)</label>
                    <input type="number" class="form-control" id="input_kmFlota" aria-describedby="emailHelp" placeholder="Inserte Km">
                </div>
            </div>
            <div class="col-12 ">
                <div class="form-group">
                    <label for="exampleInputEmail1">¿Qué porcentaje (%) de la flota esta operativa actualmente? *</label>
                    <input type="number" class="form-control" id="input_perFlota" aria-describedby="emailHelp" placeholder="Inserte porcentaje">
                </div>
            </div>

            </div>
    </div>
</div>
<script>
    function selectAll(){
        let cambio =  document.getElementById("input_todo_a").checked;
        document.getElementById("input_enero").checked = cambio;
        document.getElementById("input_febrero").checked = cambio;
        document.getElementById("input_marzo").checked = cambio;
        document.getElementById("input_abril").checked = cambio;
        document.getElementById("input_mayo").checked = cambio;
        document.getElementById("input_junio").checked = cambio;
        document.getElementById("input_julio").checked = cambio;
        document.getElementById("input_agosto").checked = cambio;
        document.getElementById("input_septiembre").checked = cambio;
        document.getElementById("input_octubre").checked = cambio;
        document.getElementById("input_noviembre").checked = cambio;
        document.getElementById("input_diciembre").checked = cambio;

    }
</script>