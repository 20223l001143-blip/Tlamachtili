<style>
 
#sidebar {
    background-color: #174877ff; 
}

.sidebar .nav .nav-item.nav-category .nav-link {
    color: #ffffff;
    font-weight: 500;
    font-size: 14px;
    font-weight: 500;
    height: auto;
    padding-left: 0;
}

.navbar .navbar-menu-wrapper .navbar-toggler {
    border: 0;
    color: #ffffff;
    height: 70px;
    border-radius: 0px;
}

.navbar {
    background-color: #174877ff; 
}



.sidebar .sidebar-brand-wrapper {
    background-color: #174877ff; 
}

.content-wrapper {
    background: rgba(255, 255, 255, 1);
    padding: 1.875rem 1.75rem;
    width: 100%;
    -webkit-flex-grow: 1;
    flex-grow: 1;

 
}

.btn-primary:not(.btn-light):not(.btn-secondary), .wizard > .actions a:not(.btn-light):not(.btn-secondary) {
    color: #0a0909;
}

.btn-primary, .wizard > .actions a {
    color: #967272;
    background-color: #83B7ED;
    border-color: #83B7ED;
}
.footer {
  background: #83b7ed40;
}
.sidebar .nav .nav-item .nav-link .menu-title {
    color: #cccccc;
    display: inline-block;
    font-size: 0.9375rem;
    line-height: 1;
    vertical-align: middle;
}
</style>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
<div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
  <a class="sidebar-brand brand-logo">
    <h1 style="color: white; -webkit-text-stroke: 1px black; font-weight: bold;">Tlamachtili</h1>
  </a>
</div>


  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
          <img src="{{Auth::user()->user_person->imagen != null
                        ? URL ::asset('admin/uploads/users/'.
                        Auth::user()->user_person->imagen)
                        : URL::asset('admin/dist/img/avatar3.png')}}"
                          alt="User Avatar" style="width: 2rem;height: 2rem;" class="img-size-50 mr-3 img-circle">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal"> {{ Auth::user()->name }}</h5>
          </div>
        </div>
        
      </div>
    </li>
    @can('menu_admin')
          <li class="nav-item nav-category">
            <span class="nav-link">Administrador</span>
          </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{route('mensajes.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-chat"></i>
              </span>
                        <span class="menu-title">Mensajes</span>
                    </a>
                </li>


    <!--@can('C_usuarios')
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('usuario.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-account"></i>
        </span>
        <span class="menu-title">Usuarios</span>
      </a>
    </li>
    @ @endcan-->

    <!-- @can('C_clientes')
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('cliente.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-account-heart-outline"></i>
        </span>
        <span class="menu-title">Clientes</span>
      </a>
    </li>
    @endcan-->

     @can('C_productos')
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('aviso.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-bell"></i>
        </span>
        <span class="menu-title">Avisos</span>
      </a>
    </li>
    @endcan

    @can('C_marca')
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('marca.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-tag-outline"></i>
        </span>
        <span class="menu-title">Marca</span>
      </a>
    </li>
    @endcan

    @can('C_categoria')
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('categoria.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-shape"></i>
        </span>
        <span class="menu-title">Categoria</span>
      </a>
    </li>
    @endcan
    @endcan

    @can('menu_cliente')
    <li class="nav-item nav-category">
      <span class="nav-link">Cliente</span>
    </li>
    @endcan

    @can('C_vproductos')
    <li class="nav-item menu-items">
      <a class="nav-link" href="pages/icons/mdi.html">
        <span class="menu-icon">
          <i class="mdi mdi-basket"></i>
        </span>
        <span class="menu-title">Productos</span>
      </a>
    </li>
    @endcan

    
    @can('C_carrito')
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('carrito.index')}}">
        <span class="menu-icon">
          <i class="mdi mdi-shape"></i>
        </span>
        <span class="menu-title">Productos</span>
      </a>
    </li>
    @endcan

    @can('C_carrito')
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{route('carrito.list')}}">
        <span class="menu-icon">
          <i class="mdi mdi-shape"></i>
        </span>
        <span class="menu-title">Carrito</span>
      </a>
    </li>
    @endcan


    <!--@can('C_perfil')
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#profile" aria-expanded="false" aria-controls="profile">
        <span class="menu-icon">
          <i class="mdi mdi-account-circle"></i>
        </span>
        <span class="menu-title">Perfil</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="profile">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="#">UbicaciÃ³n</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tarjeta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Personal</a>
          </li>
        </ul>
      </div>
    </li>
    @endcan-->
  </ul>
</nav>
