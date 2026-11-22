@extends('landing.layout.principal')

@section('carrusel')
<section class="page-banner">
    <div class="container banner-content">
        <span class="page-pill">Registro</span>
        <h1 class="section-heading mt-3">Crea tu cuenta en Tlamachtili</h1>
        <p class="lead-copy col-lg-8 mb-0">
            Regístrate para comenzar tu experiencia de aprendizaje en dialectos y acceder a una plataforma pensada para maestros en formación y servicio.
        </p>
    </div>
</section>
@endsection

@section('contenido')
<section class="page-section">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="section-shell p-4 p-lg-5 h-100">
                    <span class="section-subtitle">Únete a la plataforma</span>
                    <h2 class="section-heading mt-3">Empieza tu proceso formativo</h2>
                    <p class="section-copy">
                        Crear tu cuenta te permitirá ingresar a las rutas de aprendizaje, consultar recursos y organizar tu progreso dentro de Tlamachtili.
                    </p>
                    <ul class="list-check mt-4">
                        <li><i class="bi bi-check-circle-fill"></i><span>Accede a contenidos digitales sobre dialectos y cultura.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i><span>Fortalece tu práctica docente con materiales de apoyo.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i><span>Da seguimiento a tus avances de manera ordenada.</span></li>
                    </ul>
                    <div class="feature-band mt-4">
                        <h3 class="mb-2" style="color: #FFF8F0;">Perfil ideal</h3>
                        <p>Dirigido a estudiantes normalistas, docentes en servicio y personas interesadas en educación intercultural.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                <div class="form-shell">
                    <span class="section-subtitle">Formulario de registro</span>
                    <h2 class="section-heading mt-3">Completa tus datos</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="form-label fw-bold" style="color: #4A2C2A;">Nombre completo</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label fw-bold" style="color: #4A2C2A;">Correo electrónico</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label fw-bold" style="color: #4A2C2A;">Contraseña</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label fw-bold" style="color: #4A2C2A;">Confirmar contraseña</label>
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" class="tla-btn-primary justify-content-center border-0">
                                <i class="bi bi-person-plus-fill"></i>
                                Registrarme
                            </button>
                        </div>

                        <div class="mt-4 d-flex flex-wrap gap-3">
                            <a href="{{ route('login') }}" class="tla-btn-secondary">Ya tengo cuenta</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
