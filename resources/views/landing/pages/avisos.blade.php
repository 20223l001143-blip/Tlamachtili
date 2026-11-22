@extends('landing.layout.principal')

@section('carrusel')
<section class="page-banner">
    <div class="container banner-content">
        <span class="page-pill">Comunidad Tlamachtili</span>
        <h1 class="section-heading mt-3">Avisos, novedades y actividades de la plataforma</h1>
        <p class="lead-copy col-lg-8 mb-0">
            Mantente al tanto de actualizaciones, convocatorias y noticias relevantes para la comunidad de aprendizaje intercultural.
        </p>
    </div>
</section>
@endsection

@section('contenido')
<section class="page-section">
    <div class="container">
        <div class="row g-4">
            @forelse($data as $aviso)
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <article class="tla-card notice-card h-100">
                        @if($aviso->imagen)
                            <img src="{{ URL::asset('admin/uploads/avisos').'/'.$aviso->imagen }}" alt="{{ $aviso->titulo }}">
                        @endif
                        <span class="section-subtitle mb-3">Aviso activo</span>
                        <h3>{{ $aviso->titulo }}</h3>
                        <p class="section-copy">{{ $aviso->descripcion }}</p>
                        <div class="table-like mt-4">
                            <div class="row-item">
                                <span>Publicado</span>
                                <span>{{ \Carbon\Carbon::parse($aviso->fecha_publicacion)->format('d/m/Y') }}</span>
                            </div>
                            <div class="row-item">
                                <span>Vigencia</span>
                                <span>{{ \Carbon\Carbon::parse($aviso->fecha_expiracion)->format('d/m/Y') }}</span>
                            </div>
                        </div>
                    </article>
                </div>
            @empty
                <div class="col-12" data-aos="fade-up">
                    <div class="section-shell p-5 text-center">
                        <span class="section-subtitle">Sin avisos</span>
                        <h2 class="section-heading mt-3">Por ahora no hay publicaciones nuevas</h2>
                        <p class="section-copy mb-0">
                            Cuando existan anuncios, actividades o recordatorios para la comunidad Tlamachtili aparecerán en esta sección.
                        </p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>

<section class="page-section compact">
    <div class="container">
        <div class="feature-band" data-aos="fade-up">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h2 class="mb-3" style="color: #FFF8F0;">Sigue las actividades de formación y comunidad</h2>
                    <p>
                        Aquí se compartirán convocatorias para nuevos cursos, actualizaciones de contenido, sesiones especiales y anuncios importantes para docentes registrados.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('register') }}" class="tla-btn-secondary" style="background: #FFF8F0; color: #386641;">Unirme a la plataforma</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section compact">
    <div class="container">
        <div class="section-shell p-4 p-lg-5" data-aos="fade-up">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h3>Tipos de avisos</h3>
                    <p class="section-copy mb-0">En esta sección se publicarán actualizaciones sobre cursos, sesiones especiales, nuevos materiales, convocatorias y recordatorios institucionales.</p>
                </div>
                <div class="col-lg-4">
                    <h3>Para quién es útil</h3>
                    <p class="section-copy mb-0">Docentes en servicio, estudiantes en formación y usuarios registrados podrán encontrar información relevante para su participación en la plataforma.</p>
                </div>
                <div class="col-lg-4">
                    <h3>Importancia</h3>
                    <p class="section-copy mb-0">Mantenerse informado permite aprovechar mejor los recursos, participar en actividades y seguir de cerca el crecimiento de Tlamachtili.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section compact">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up">
                <div class="tla-card h-100">
                    <h3>Qué encontrarás aquí</h3>
                    <p class="section-copy mb-0">
                        Esta vista mostrará los anuncios más importantes relacionados con Tlamachtili, como nuevas rutas de aprendizaje, actualizaciones de la plataforma, publicaciones de materiales y actividades de interés para la comunidad.
                    </p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                <div class="tla-card h-100">
                    <h3>Por qué revisar los avisos</h3>
                    <p class="section-copy mb-0">
                        Consultar esta sección de forma frecuente permite a docentes y usuarios mantenerse informados, aprovechar oportunidades formativas y conocer las novedades que fortalecen el uso de la plataforma.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
