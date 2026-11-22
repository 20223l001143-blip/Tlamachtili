<style>
  .navbar {
    background-color: #174877ff;

  }
  
  </style>
<nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="{{Auth::user()->user_person->imagen != null? URL::asset('admin/uploads/users/'.Auth::user()->user_person->imagen): URL::asset('admin/assets/images/icono.png')}}" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth::user()->name }}</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">usuario</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                    </div>
                  </a>
                    <div class="preview-item-content">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">
                <!-- Message Start -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <div class="media">
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                            {{ Auth::user()->name }}
                        </h3>
                        <p class="text-sm">Cerrar sesiÃ³n</p>
                    </div>
                </div>
                <!-- Message End -->
            </a>
                    </div>
                  </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
