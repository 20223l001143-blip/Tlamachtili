@extends('landing.layout.principal')

@section('carrusel')
<section class="page-banner">
    <div class="container banner-content">
        <span class="page-pill">Recursos de aprendizaje</span>
        <h1 class="section-heading mt-3">Materiales que enriquecen la formación intercultural</h1>
        <p class="lead-copy col-lg-8 mb-0">
            Explora recursos pensados para apoyar el estudio de dialectos, la planeacion didactica y la preservacion de saberes culturales.
        </p>
    </div>
</section>
@endsection

@section('contenido')
<section class="page-section">
    <div class="container">
        <div class="row g-4">
            @forelse($data as $row)
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="tla-card resource-card h-100">
                        @if($row->imagen)
                            <img src="{{ URL::asset('admin/uploads/productos').'/'.$row->imagen }}" alt="{{ $row->nombre }}">
                        @endif
                        <span class="section-subtitle mb-3">Recurso destacado</span>
                        <h3>{{ $row->nombre }}</h3>
                        <p class="section-copy mb-2"><strong>Descripcion:</strong> {{ $row->descripcion }}</p>
                        <p class="section-copy mb-3"><strong>Presentacion:</strong> {{ $row->presentacion }}</p>
                        <div class="mt-auto">
                            <div class="tla-btn-secondary justify-content-center" style="width: 100%; border-color: rgba(230,126,34,0.25);">
                                <i class="bi bi-tag-fill"></i>
                                ${{ $row->precioPublico }}
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12" data-aos="fade-up">
                    <div class="section-shell p-5 text-center">
                        <span class="section-subtitle">Proximamente</span>
                        <h2 class="section-heading mt-3">Estamos preparando nuevos recursos</h2>
                        <p class="section-copy mb-0">
                            Muy pronto encontrarás aquí materiales descargables, guías y herramientas didácticas para enriquecer tu aprendizaje en Tlamachtili.
                        </p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>

<section class="page-section compact">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up">
                <div class="tla-card text-center">
                    <div class="tla-icon mx-auto"><i class="bi bi-file-earmark-text-fill"></i></div>
                    <h3>Guías didácticas</h3>
                    <p class="section-copy mb-0">Materiales de apoyo para planear actividades, secuencias y estrategias con enfoque intercultural.</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tla-card text-center">
                    <div class="tla-icon green mx-auto"><i class="bi bi-collection-play-fill"></i></div>
                    <h3>Recursos audiovisuales</h3>
                    <p class="section-copy mb-0">Audios, imágenes y ejercicios que facilitan el aprendizaje de pronunciación, escucha y asociación visual.</p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tla-card text-center">
                    <div class="tla-icon gold mx-auto"><i class="bi bi-journal-check"></i></div>
                    <h3>Material complementario</h3>
                    <p class="section-copy mb-0">Apoyos para fortalecer la implementación del proyecto en contextos de formación inicial y servicio.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section compact">
    <div class="container">
        <div class="section-shell p-4 p-lg-5" data-aos="fade-up">
            <div class="row g-4">
                <div class="col-lg-6">
                    <span class="section-subtitle">Sobre los recursos</span>
                    <h2 class="section-heading">Materiales para aprender y enseñar mejor</h2>
                    <p class="section-copy">
                        En esta vista se concentran los recursos de apoyo de Tlamachtili. Aqui se presentan materiales pensados para complementar el aprendizaje de los dialectos y reforzar su uso en actividades educativas.
                    </p>
                </div>
                <div class="col-lg-6">
                    <ul class="list-check">
                        <li><i class="bi bi-check-circle-fill"></i><span>Guías para docentes y estudiantes en formación.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i><span>Materiales visuales y auditivos para reforzar contenidos.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i><span>Apoyos didacticos para implementar el proyecto en el aula.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
