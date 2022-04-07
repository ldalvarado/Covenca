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
        
        <a href= "{{url('/dashboard')}}" class="br-menu-link active">
            <div class="br-menu-item">
                <i class="menu-item-icon fas fa-home tx-18"></i>
                <span class="menu-item-label">Inicio</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="fas fa-shield-alt menu-item-icon tx-18"></i>

                <span class="menu-item-label">Garantía</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <ul class="br-menu-sub nav flex-column">

            @if(Auth::user()->idRole == 1)
                <li class="nav-item">  <!--href=" {{ url('/register')}}-->
                    <a href="#" class="nav-link">Indicadores</a>
                </li>
            @endif
            @if(Auth::user()->idRole == 5 || Auth::user()->idRole == 2 || Auth::user()->idRole == 1)
                <li class="nav-item">  <!--href=" {{ url('/register')}}-->

                    <a href="{{url('/warranty')}}" class="nav-link">Creación</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/Garantia/Guia')}}" class="nav-link">Guías</a>
                </li>
            @endif
            @if(Auth::user()->idRole == 4 || Auth::user()->idRole == 2 || Auth::user()->idRole == 1)
                <li class="nav-item">  <!--href=" {{ url('/register')}}-->

                    <a href="{{url('/Garantia/Especial')}}" class="nav-link">Casos Especiales</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/Garantia/Analisis') }}" class="nav-link">Análisis Técnico</a>
                </li>
            @endif
            @if(Auth::user()->idRole == 1 || Auth::user()->idRole == 2)
                <li class="nav-item">
                    <a href="{{ url('/Garantia/Recepcion') }}" class="nav-link">Recepción</a>
                </li>
            @endif
            @if(Auth::user()->idRole == 3 || Auth::user()->idRole == 2 || Auth::user()->idRole == 1)
                <li class="nav-item">
                    <a href="{{ url('/Garantia/Credito') }}" class="nav-link">Crédito</a>
                </li>
            @endif
        </ul>
        <!--
        <a href="{{url('/wizard')}}" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon fa fa-snowflake-o tx-24"></i>
            <span class="menu-item-label">Prueba Wizard</span>
          </div>
        </a>
        -->

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="fas fa-file-chart-pie menu-item-icon tx-18"></i>

                <span class="menu-item-label">Reportes</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a>

        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item">  <!--href=" {{ url('/register')}}-->
                <a href="{{url('/Reportes/Clientes')}}" class="nav-link">Clientes</a>
            </li>
        </ul>

        @if(Auth::user()->idRole == 1)

            <a href="#" class="br-menu-link"><div class="br-menu-item">
            <i class="far fa-circle menu-item-icon tx-18"></i>
                    <span class="menu-item-label">Neumáticos</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item">  <!--href=" {{ url('/register')}}-->
                    <a href="{{ url('/Neumaticos/renovados') }}" class="nav-link">Renovados</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/Neumaticos/Medidas') }}" class="nav-link">Medida</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/Neumaticos/Anchos') }}" class="nav-link">Anchos</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/Neumaticos/Disenios') }}" class="nav-link">Diseños</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Lesiones</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Marca</a>
                </li>
            </ul>


            <a href="#" class="br-menu-link"><div class="br-menu-item">
                    <i class="fab fa-phabricator menu-item-icon tx-18"></i>
                    <span class="menu-item-label">Envelop</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item">  <!--href=" {{ url('/register')}}-->
                    <a href="#" class="nav-link">Marca</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Medida</a>
                </li>

            </ul>
            <a href="#" class="br-menu-link"><div class="br-menu-item">
            <i class="fas fa-shopping-bag menu-item-icon tx-18"></i>
                    <span class="menu-item-label">Bolsa de vulcanización</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item"> 
                    <a href="#" class="nav-link">Marca</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Medida</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Valvula</a>
                </li>
            </ul>
            <a href="#" class="br-menu-link"><div class="br-menu-item">
            <i class="fab fa-bitbucket menu-item-icon tx-18"></i>
                    <span class="menu-item-label">Camara</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->

            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item">  <!--href=" {{ url('/register')}}-->
                    <a href="#" class="nav-link">Marca</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Medida</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Valvula</a>

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
                    <a href="/gestion/defecto" class="nav-link">Defectos</a>
                </li>
                <li class="nav-item">
                    <a href="/gestion/defecto" class="nav-link">Otro</a>
                </li>
            </ul>
            <a href="/users" class="br-menu-link"><div class="br-menu-item">
                    <i class="fas fa-user menu-item-icon tx-18"></i>
                    <span class="menu-item-label">Usuarios</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
        @endif

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
    </Script>

</div>