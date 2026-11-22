@extends('landing.layout.principal')

@section('carrusel')
<section class="page-banner">
    <div class="container banner-content">
        <span class="page-pill">Acceso a la plataforma</span>
        <h1 class="section-heading mt-3">Inicia sesión en Tlamachtili</h1>
        <p class="lead-copy col-lg-8 mb-0">
            Accede a tus rutas de aprendizaje, revisa tus avances y continúa fortaleciendo tu formación docente con enfoque intercultural.
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
                    <span class="section-subtitle">Bienvenida</span>
                    <h2 class="section-heading mt-3">Tu espacio para aprender con identidad</h2>
                    <p class="section-copy">
                        Al iniciar sesión podrás retomar tus cursos, consultar materiales de apoyo y dar seguimiento a tu progreso dentro de la plataforma.
                    </p>
                    <ul class="list-check mt-4">
                        <li><i class="bi bi-check-circle-fill"></i><span>Continua tus lecciones y actividades donde las dejaste.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i><span>Consulta recursos, contenidos y avances personales.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i><span>Participa en una experiencia de aprendizaje clara y ordenada.</span></li>
                    </ul>
                    <div class="table-like mt-4">
                        <div class="row-item">
                            <span>Acceso</span>
                            <span>Cuenta personal</span>
                        </div>
                        <div class="row-item">
                            <span>Objetivo</span>
                            <span>Formación continua</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                <div class="form-shell">
                    <span class="section-subtitle">Inicio de sesión</span>
                    <h2 class="section-heading mt-3">Ingresa con tus datos</h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

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
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" class="tla-btn-primary justify-content-center border-0">
                                <i class="bi bi-box-arrow-in-right"></i>
                                Iniciar sesión
                            </button>
                        </div>

                        <div class="mt-4 d-flex flex-wrap gap-3">
                            <a href="{{ route('register') }}" class="tla-btn-secondary">Crear cuenta</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
