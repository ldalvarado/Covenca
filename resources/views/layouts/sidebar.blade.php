<div class="br-logo">
    <a href="{{url('/dashboard')}}">
        <span><img src="{{asset('/img/logoDoberman.jpg')}}" style="max-width: 30px;" alt="">
        </span>
        Covenca
        <span></span>
    </a>
</div>

<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Menu principal</label>
    <div class="br-sideleft-menu">
        
        <a href= "{{url('/dashboard')}}" id="menu_link_home" class="br-menu-link active">
            <div class="br-menu-item">
                <i class="menu-item-icon fas fa-home tx-18"></i>
                <span class="menu-item-label">Inicio</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="#" id="menu_link_w" class="br-menu-link"><div class="br-menu-item">

        <i class="fas fa-shield-alt menu-item-icon tx-18"></i>

                <span class="menu-item-label">Garantía</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <ul class="br-menu-sub nav flex-column">


            @if(Auth::user()->idRole == 5 || Auth::user()->idRole == 2 || Auth::user()->idRole == 1)
                <li class="nav-item">  <!--href=" {{ url('/register')}}-->

                    <a href="{{url('/warranty')}}" id="nav-link_wc" class="nav-link">Creación</a>
                </li>
            @endif

            @if(Auth::user()->idRole == 5 || Auth::user()->idRole == 2 || Auth::user()->idRole == 1)
                <li class="nav-item">
                    <a href="{{url('/Garantia/Guia')}}" id="nav-link_wg" class="nav-link">Guías</a>
                </li>
            @endif          
            @if (Auth::user()->idSucursal == 1)  
                @if( Auth::user()->idRole == 2 || Auth::user()->idRole == 1)
                    <li class="nav-item">  <!--href=" {{ url('/register')}}-->

                        <a href="{{url('/Garantia/Especial')}}" id="nav-link_we" class="nav-link">Casos Especiales</a>
                    </li>
                @endif
                @if(Auth::user()->idRole == 1 || Auth::user()->idRole == 2 || Auth::user()->idRole == 6)
                    <li class="nav-item">
                        <a href="{{ url('/Garantia/Recepcion') }}" id="nav-link_wr" class="nav-link">Recepción</a>
                    </li>
                @endif
               
                @if(Auth::user()->idRole == 4 || Auth::user()->idRole == 2 || Auth::user()->idRole == 1)
                    <li class="nav-item">
                        <a href="{{ url('/Garantia/Analisis') }}" id="nav-link_wa" class="nav-link">Análisis Técnico</a>
                    </li>
                @endif
             
                @if(Auth::user()->idRole == 3 || Auth::user()->idRole == 2 || Auth::user()->idRole == 1)
                    <li class="nav-item">
                        <a href="{{ url('/Garantia/Credito') }}" id="nav-link_wcr" class="nav-link">Crédito</a>
                    </li>
                @endif
                @if(Auth::user()->idRole == 1)
                    <li class="nav-item">  <!--href=" {{ url('/register')}}-->
                        <a href="#" class="nav-link">Indicadores</a>
                    </li>
                @endif
            @endif
        </ul>

        <a href="#" id="menu_link_r" class="br-menu-link">
            <div class="br-menu-item">
                <i class="fas fa-file-signature menu-item-icon tx-18"></i>

                <span class="menu-item-label">Reportes</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a>

        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item">  <!--href=" {{ url('/register')}}-->
                <a href="{{url('/Reportes/Clientes')}}" id="nav-link_rc" class="nav-link">Clientes por distribuidor</a>
            </li>
            <li class="nav-item">  <!--href=" {{ url('/register')}}-->
                <a href="{{url('/Reportes/Usuarios')}}" id="nav-link_rg" class="nav-link">Detalles del vendedor</a>
            </li>
            <li class="nav-item">  <!--href=" {{ url('/register')}}-->
                <a href="{{url('/Reportes/DataCliente')}}" id="nav-link_rd" class="nav-link">Ficha del cliente</a>
            </li>
        </ul>
        
        @if (Auth::user()->idSucursal == 1)
            @if(Auth::user()->idRole == 1)

            <a href="#"  id="menu_link_n" class="br-menu-link"><div class="br-menu-item">
            <i class="far fa-circle menu-item-icon tx-18"></i>
                    <span class="menu-item-label">Neumáticos</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <ul class="br-menu-sub nav flex-column">
                <!--li class="nav-item">
                    <a href="{{ url('/Neumaticos/renovados') }}" class="nav-link">Renovados</a>
                </!--li-->
                <li class="nav-item">
                    <a href="{{ url('/Neumaticos/Medida') }}"  id="nav-link_nm" class="nav-link">Medida</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/Neumaticos/Anchos') }}"  id="nav-link_na" class="nav-link">Anchos</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/Neumaticos/Disenos') }}"  id="nav-link_nd" class="nav-link">Diseños</a>
                </li>
                <!--li class="nav-item">
                    <a href="{{ url('/Neumaticos/Lesiones') }}" id="nav-link_nl" class="nav-link">Lesiones</a>
                </!--li-->
                <li class="nav-item">
                    <a href="{{ url('/Neumaticos/Marcas') }}"  id="nav-link_nma" class="nav-link">Marcas</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/Neumaticos/Modelos') }}"  id="nav-link_nmo" class="nav-link">Modelos</a>
                </li>
            </ul>
            <a href="#"  id="menu_link_c" class="br-menu-link"><div class="br-menu-item">
            <i class="far fa-circle menu-item-icon tx-18"></i>
                    <span class="menu-item-label">Caucho industrial</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item">
                    <a href="{{ url('/CauchoIndustrial/Medida') }}" id="nav-link_cim" class="nav-link">Medida</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Anchos</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Diseños</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Lesiones</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/CauchoIndustrial/Marcas') }}" id="nav-link_cima" class="nav-link">Marca</a>
                </li>
            </ul>


            <a href="#"  class="br-menu-link"><div class="br-menu-item">
                    <i class="fab fa-phabricator menu-item-icon tx-18"></i>
                    <span class="menu-item-label">Envelope</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item">  <!--href=" {{ url('/register')}}-->
                    <a href="{{ url('/Camara/Marcas') }}" class="nav-link">Marca</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/Camara/Medida') }}" class="nav-link">Medida</a>
                </li>

            </ul>
            <!--a href="#" class="br-menu-link"><div class="br-menu-item">
            <i class="fas fa-shopping-bag menu-item-icon tx-18"></i>
                    <span class="menu-item-label">Bolsa de vulcanización</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div>
            </!--a>

            <ul-- class="br-menu-sub nav flex-column">
                <li class="nav-item"> 
                    <a href="#" class="nav-link">Marca</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Medida</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Valvula</a>
                </li>
            </ul-->
            <a href="#" id="menu_link_a" class="br-menu-link"><div class="br-menu-item">
            <i class="fab fa-bitbucket menu-item-icon tx-18"></i>
                    <span class="menu-item-label">Camara</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item">  <!--href=" {{ url('/register')}}-->
                    <a href="{{ url('/Camara/Marcas') }}" id="nav-link_ama" class="nav-link">Marca</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/Camara/Medida') }}" id="nav-link_ame" class="nav-link">Medida</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/Camara/Valvula') }}" id="nav-link_av" class="nav-link">Valvula</a>

                </li>
            </ul>
            <a href="#" id="menu_link_p" class="br-menu-link"><div class="br-menu-item">
            <i class="fab fa-bitbucket menu-item-icon tx-18"></i>
                    <span class="menu-item-label">Protectores</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item">  <!--href=" {{ url('/register')}}-->
                    <a href="{{ url('/Protector/Marcas') }}" id="nav-link_pm" class="nav-link">Marca</a>
                </li>
                
            </ul>
            <a href="#" id="menu_link_v" class="br-menu-link"><div class="br-menu-item">
            <i class="far fa-circle menu-item-icon tx-18"></i>
                    <span class="menu-item-label">Vehículos</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item">  <!--href=" {{ url('/register')}}-->
                    <a href="{{ url('/Vehiculos/TipoVehiculo') }}" class="nav-link">Tipo</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/Vehiculos/Marcas') }}" class="nav-link">Marca</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/Vehiculos/Modelos') }}" class="nav-link">Modelo</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/Vehiculos/Carga') }}" class="nav-link">Carga</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/Vehiculos/TipoCarga') }}" class="nav-link">Tipo de Carga</a>
                </li>
                <li class="nav-item">
                    <a  href="{{ url('/Vehiculos/TipoTerreno') }}" class="nav-link">Tipo de Terreno</a>
                </li>

            </ul>
            <!--        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon ion-ios-paper-outline tx-24"></i>
                <span class="menu-item-label">Lesiones</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
            <!--</a><!-- br-menu-link -->

            <!--<ul class="br-menu-sub nav flex-column">
            <li class="nav-item">
                <a href="{{ url('/dashboard') }}" class="nav-link">Lesiones NFU</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/dashboard') }}" class="nav-link">Lesiones de compra</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/dashboard') }}" class="nav-link">Lessiones de inspección</a>
            </li>
            </ul>-->
            <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20 tx-info op-9">Gestión</label>

            <a href="#" class="br-menu-link"><div class="br-menu-item">
                    <i class="fas fa-book menu-item-icon tx-18"></i>
                    <span class="menu-item-label">Definiciones</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item">
                    <a href="{{ url('/Condicion/Condicion') }}" class="nav-link">Condiciones</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/Rechazo/Rechazo') }}" class="nav-link">Defectos</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/gestion/defecto') }}" class="nav-link">Otro</a>
                </li>
            </ul>
            <a href="{{url('/users')}}" class="br-menu-link"><div class="br-menu-item">
                    <i class="fas fa-user menu-item-icon tx-18"></i>
                    <span class="menu-item-label">Usuarios</span>
                </div>
            </a>
            <a href="{{url('/clientes')}}" class="br-menu-link"><div class="br-menu-item">
                    <i class="fas fa-user menu-item-icon tx-18"></i>
                    <span class="menu-item-label">Clientes</span>
                </div>
            </a>
            
            @endif
        @else
            @if(Auth::user()->idRole == 1)
            <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20 tx-info op-9">Gestión</label>

                <a href="{{url('/users')}}" class="br-menu-link">
                    <div class="br-menu-item">
                    <i class="fas fa-user menu-item-icon tx-18"></i>
                    <span class="menu-item-label">Usuarios</span>
                    </div>
                </a>
                <a href="{{url('/clientes')}}" class="br-menu-link"><div class="br-menu-item">
                    <i class="fas fa-user menu-item-icon tx-18"></i>
                    <span class="menu-item-label">Clientes</span>
                </div>
            </a>
            @endif
        @endif
        <!--
        <a href="{{url('/wizard')}}" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon fa fa-snowflake-o tx-24"></i>
            <span class="menu-item-label">Prueba Wizard</span>
          </div>
        </a>
        -->


    </div>

    <Script>
        $(function() {
            $(".br-menu-link").click(function() {
            // quitar .active a todos (por si hay alguno)
            $(".br-menu-link").removeClass("active");
            // agregar active a "este" elemento.
            $(this).addClass("active");
            });

            $(".nav-link").click(function() {
            // quitar .active a todos (por si hay alguno)
            $(".nav-link").removeClass("active");
            // agregar active a "este" elemento.
            $(this).addClass("active");
            });
          
        });
        function ActivateNavLink(id){
            console.log(id);
                $(".nav-link").removeClass("active");
                // agregar active a "este" elemento.
                $("#"+id).addClass("active");
                
                $("#"+id).parent().parent().css("display","block");
                $("#menu_link_home").removeClass('active');
                $("#menu_link_"+id[9].toString()).addClass("active");
               
            }
    </Script>

</div>