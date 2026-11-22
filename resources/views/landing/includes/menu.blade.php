<header id="header" class="header sticky-top tla-header">
    <div class="container-fluid container-xl">
        <div class="tla-navbar-shell">
            <a href="{{ route('inicio') }}" class="tla-brand text-decoration-none">
                <span class="tla-brand-mark">
                    <img src="{{ asset('landing/img/logo.jpeg') }}" alt="Logo Tlamachtili">
                </span>
                <span class="tla-brand-copy">
                    <span class="sitename">Tlamachtili</span>
                    <small>Lengua y aprendizaje</small>
                </span>
            </a>

            <nav id="navmenu" class="navmenu tla-navmenu">
                <ul>
                    <li><a href="{{ route('inicio') }}" class="{{ request()->routeIs('inicio') ? 'active' : '' }}">Inicio</a></li>
                    <li><a href="{{ route('servicios') }}" class="{{ request()->routeIs('servicios') ? 'active' : '' }}">Cursos</a></li>
                    <li><a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">Comunidad</a></li>
                    <li><a href="{{ route('productos') }}" class="{{ request()->routeIs('productos') ? 'active' : '' }}">Recursos</a></li>
                    <li><a href="{{ route('avisos') }}" class="{{ request()->routeIs('avisos') ? 'active' : '' }}">Avisos</a></li>
                    <li><a href="{{ route('contacto') }}" class="{{ request()->routeIs('contacto') ? 'active' : '' }}">Contacto</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <div class="tla-header-actions">
                @auth
                    <a href="{{ route('dashboard') }}" class="tla-user-pill text-decoration-none">
                        <span class="tla-user-avatar">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                        <span class="tla-user-name">{{ Auth::user()->name }}</span>
                    </a>
                    <a href="{{ route('avisos') }}" class="tla-icon-btn" aria-label="Avisos">
                        <i class="bi bi-bell-fill"></i>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="tla-user-pill text-decoration-none">
                        <span class="tla-user-avatar"><i class="bi bi-person-fill"></i></span>
                        <span class="tla-user-name">Ingresar</span>
                    </a>
                @endauth
                <a href="{{ route('register') }}" class="tla-register-btn text-decoration-none">Registrarse</a>
            </div>
        </div>
    </div>
</header>
