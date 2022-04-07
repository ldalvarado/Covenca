<div class="br-header">
    <div class="br-header-left">
        <div class="navicon-left hidden-md-down">
            <a id="btnLeftMenu" href="">
                <i class="icon ion-navicon-round"></i>
            </a>
        </div>
        <div class="navicon-left hidden-lg-up">
            <a id="btnLeftMenuMobile" href="">
                <i class="icon ion-navicon-round"></i>
            </a>
        </div>
        <div class="text-bold br-header-right">
          <h3 class="m-0 pl-4">
          {{Auth::user()->sucursal->descripcion}}
</h3>
        </div>
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">

          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down"> {{ Auth::user()->name }} </span>
              <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="{{ route('users.editUser', Auth::user()->id) }} "><i class="icon ion-ios-person"></i> Perfil</a></li>
                <li><a href=""><i class="icon ion-ios-gear"></i> Configuración</a></li>
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <x-responsive-nav-link :href="route('logout')"
                              onclick="event.preventDefault();
                                          this.closest('form').submit();">
                          <i class="icon ion-power"></i>
                          {{ __('auth.log_out') }}
                      </x-responsive-nav-link>
                  </form>

              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>

      </div><!-- br-header-right -->
    </div><!-- br-header -->