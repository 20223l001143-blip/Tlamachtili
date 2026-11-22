@extends('landing.layout.principal')

@section('carrusel')
<section class="page-banner">
    <div class="container banner-content">
        <span class="page-pill">Panel del cliente</span>
        <h1 class="section-heading mt-3">Bienvenido a tu espacio en Tlamachtili</h1>
        <p class="lead-copy col-lg-8 mb-0">
            Consulta tus accesos, explora recursos y mantente al día con los avisos y materiales disponibles para tu formación.
        </p>
    </div>
</section>
@endsection

@section('contenido')
<section class="page-section">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-3">
                <div class="section-shell p-4 h-100">
                    <div class="text-center">
                        <div style="width: 110px; height: 110px; margin: 0 auto 18px; border-radius: 50%; overflow: hidden; border: 4px solid #E9C46A; box-shadow: 0 10px 20px rgba(74,44,42,0.12);">
                            <img
                                src="{{ Auth::user()->user_person && Auth::user()->user_person->imagen ? URL::asset('admin/uploads/users/' . Auth::user()->user_person->imagen) : asset('admin/assets/images/icono.png') }}"
                                alt="Avatar del usuario"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <h3 style="color: #4A2C2A; font-weight: 800;">{{ Auth::user()->name }}</h3>
                        <p class="section-copy mb-4">Cliente registrado</p>
                    </div>

                    <div class="table-like">
                        <div class="row-item">
                            <span>Cuenta</span>
                            <span>Activa</span>
                        </div>
                        <div class="row-item">
                            <span>Rol</span>
                            <span>Cliente</span>
                        </div>
                        <div class="row-item">
                            <span>Acceso</span>
                            <span>Verificado</span>
                        </div>
                    </div>

                    <div class="d-grid gap-3 mt-4">
                        <a href="{{ route('profile.edit') }}" class="tla-btn-secondary justify-content-center">Mi perfil</a>
                        <a href="{{ route('avisos') }}" class="tla-btn-secondary justify-content-center">Ver avisos</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="section-shell p-4 p-lg-5 mb-4">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                        <div>
                            <span class="section-subtitle">Panel del cliente</span>
                            <h2 class="section-heading mt-3 mb-2">Tu centro de acceso rápido</h2>
                            <p class="section-copy mb-0">
                                Desde aquí puedes continuar explorando cursos, materiales y apartados importantes de la plataforma.
                            </p>
                        </div>
                        <div class="hero-badge" style="min-width: 220px;">
                            Tu aprendizaje comienza con una navegación clara y cercana.
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6 col-xl-3">
                            <div class="tla-card">
                                <div class="tla-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                                <h3 style="font-size: 1.2rem;">Cursos</h3>
                                <p class="section-copy mb-3">Explora los contenidos y rutas de aprendizaje disponibles.</p>
                                <a href="{{ route('servicios') }}" class="tla-btn-secondary">Entrar</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="tla-card">
                                <div class="tla-icon green"><i class="bi bi-collection-fill"></i></div>
                                <h3 style="font-size: 1.2rem;">Recursos</h3>
                                <p class="section-copy mb-3">Consulta materiales y apoyos para reforzar tu aprendizaje.</p>
                                <a href="{{ route('productos') }}" class="tla-btn-secondary">Abrir</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="tla-card">
                                <div class="tla-icon gold"><i class="bi bi-megaphone-fill"></i></div>
                                <h3 style="font-size: 1.2rem;">Avisos</h3>
                                <p class="section-copy mb-3">Mantente al tanto de novedades, anuncios y publicaciones.</p>
                                <a href="{{ route('avisos') }}" class="tla-btn-secondary">Revisar</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="tla-card">
                                <div class="tla-icon" style="background: #8E2C1F;"><i class="bi bi-person-lines-fill"></i></div>
                                <h3 style="font-size: 1.2rem;">Perfil</h3>
                                <p class="section-copy mb-3">Actualiza tu información personal y tus datos de acceso.</p>
                                <a href="{{ route('profile.edit') }}" class="tla-btn-secondary">Editar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-7">
                        <div class="section-shell p-4 p-lg-5 h-100">
                            <span class="section-subtitle">Recomendaciones</span>
                            <h2 class="section-heading mt-3">Qué puedes hacer ahora</h2>
                            <ul class="list-check mt-4">
                                <li><i class="bi bi-check-circle-fill"></i><span>Explorar los recursos de aprendizaje y materiales publicados.</span></li>
                                <li><i class="bi bi-check-circle-fill"></i><span>Consultar avisos y novedades relevantes para la comunidad.</span></li>
                                <li><i class="bi bi-check-circle-fill"></i><span>Actualizar tu perfil para mantener tu información correcta.</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="cta-block h-100" style="background: #8E2C1F;">
                            <span class="section-subtitle" style="background: rgba(255, 248, 240, 0.18); color: #FFF8F0; border-color: rgba(255, 248, 240, 0.2);">Acceso rápido</span>
                            <h3 class="mt-3" style="font-size: 2rem; color: #FFF8F0;">Sigue con tu experiencia</h3>
                            <p class="mb-4">
                                Ingresa a los apartados principales y aprovecha mejor todo lo que Tlamachtili tiene disponible para ti.
                            </p>
                            <div class="d-grid gap-3">
                                <a href="{{ route('servicios') }}" class="tla-btn-secondary" style="background: #FFF8F0; color: #8E2C1F;">Ir a cursos</a>
                                <a href="{{ route('productos') }}" class="tla-btn-secondary" style="border-color: rgba(255,248,240,0.4); color: #FFF8F0; background: transparent;">Ver recursos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
