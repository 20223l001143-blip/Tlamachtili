@extends('landing.layout.principal')

@section('carrusel')
<section class="page-banner">
    <div class="container banner-content">
        <span class="page-pill">Proyecto Tlamachtili</span>
        <h1 class="section-heading mt-3">Una propuesta educativa para fortalecer dialectos y práctica docente</h1>
        <p class="lead-copy col-lg-8 mb-0">
            Tlamachtili conecta tecnología, cultura y formación magisterial para crear experiencias de aprendizaje significativas, accesibles y profundamente humanas.
        </p>
    </div>
</section>
@endsection

@section('contenido')
<section class="page-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-up">
                <span class="section-subtitle">Quienes somos</span>
                <h2 class="section-heading">Un espacio digital para maestras y maestros comprometidos con la diversidad linguistica.</h2>
                <p class="section-copy">
                    Tlamachtili es una plataforma e-learning diseñada para acompañar a docentes en formación y servicio en el aprendizaje de dialectos y en la integración de prácticas interculturales dentro del aula.
                </p>
                <p class="section-copy">
                    Buscamos que la tecnología no desplace la cultura, sino que la haga visible, cercana y valiosa para nuevas generaciones de educadores. Nuestro enfoque parte de la idea de que enseñar una lengua también implica reconocer memoria, territorio, identidad y formas de convivir.
                </p>
            </div>
            <div class="col-lg-6" data-aos="zoom-in">
                <div class="media-card">
                    <img src="{{ asset('landing/img/quie.jpg') }}" alt="Comunidad educativa Tlamachtili">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section compact">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tla-card">
                    <div class="tla-icon"><i class="bi bi-bullseye"></i></div>
                    <h3>Mision</h3>
                    <p class="section-copy mb-0">
                        Brindar una experiencia formativa digital que fortalezca el aprendizaje de dialectos y promueva una práctica docente sensible a la diversidad cultural y lingüística, integrando contenidos útiles, accesibles y aplicables.
                    </p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tla-card">
                    <div class="tla-icon green"><i class="bi bi-eye-fill"></i></div>
                    <h3>Vision</h3>
                    <p class="section-copy mb-0">
                        Ser una referencia en educación intercultural digital, impulsando comunidades docentes que aprendan, compartan y preserven saberes originarios mediante una plataforma cercana, moderna y formativa.
                    </p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="tla-card">
                    <div class="tla-icon gold"><i class="bi bi-heart-fill"></i></div>
                    <h3>Valores</h3>
                    <p class="section-copy mb-0">
                        Respeto, inclusión, identidad, colaboración y compromiso con una educación que reconozca la riqueza de cada lengua y cada comunidad como parte viva del aprendizaje.
                    </p>
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
                    <span class="section-subtitle">Lo que nos distingue</span>
                    <h2 class="section-heading">Aprendizaje útil para la realidad educativa</h2>
                    <ul class="list-check">
                        <li><i class="bi bi-check-circle-fill"></i><span>Contenidos pensados para maestras y maestros que trabajan en contextos multiculturales.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i><span>Diseño accesible y amigable que facilita el uso desde distintos dispositivos.</span></li>
                        <li><i class="bi bi-check-circle-fill"></i><span>Materiales que articulan lenguaje, cultura, memoria y práctica pedagógica.</span></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="table-like">
                        <div class="row-item">
                            <span>Aprendizaje flexible</span>
                            <span>Avanza a tu ritmo</span>
                        </div>
                        <div class="row-item">
                            <span>Recursos contextualizados</span>
                            <span>Lengua y cultura</span>
                        </div>
                        <div class="row-item">
                            <span>Seguimiento visual</span>
                            <span>Logros e insignias</span>
                        </div>
                        <div class="row-item">
                            <span>Enfoque comunitario</span>
                            <span>Docencia con identidad</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section compact">
    <div class="container">
        <div class="feature-band" data-aos="fade-up">
            <div class="row g-4 align-items-center">
                <div class="col-lg-8">
                    <h2 class="mb-3" style="color: #FFF8F0;">Nuestro proposito</h2>
                    <p>
                        Tlamachtili busca contribuir a una educación más inclusiva y consciente, donde los futuros docentes y los maestros en servicio puedan acercarse a los dialectos desde el respeto, la utilidad pedagógica y el valor cultural.
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="info-strip">
                        <div class="info-chip">
                            <strong>Lengua</strong>
                            <span>Aprender</span>
                        </div>
                        <div class="info-chip">
                            <strong>Cultura</strong>
                            <span>Reconocer</span>
                        </div>
                        <div class="info-chip">
                            <strong>Docencia</strong>
                            <span>Aplicar</span>
                        </div>
                    </div>
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
                    <span class="section-subtitle">Objetivo general</span>
                    <h3 class="mt-3">Formar docentes con herramientas para enseñar desde la diversidad</h3>
                    <p class="section-copy mb-0">
                        El objetivo principal de Tlamachtili es ofrecer un espacio digital donde maestras y maestros puedan adquirir conocimientos lingüísticos y culturales que les permitan enriquecer su práctica docente con un enfoque intercultural.
                    </p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                <div class="tla-card h-100">
                    <span class="section-subtitle">Alcance del proyecto</span>
                    <h3 class="mt-3">Una propuesta educativa con valor social y cultural</h3>
                    <p class="section-copy mb-0">
                        Tlamachtili no solo busca enseñar palabras o expresiones. También pretende sensibilizar sobre la importancia de las lenguas originarias, fortalecer el respeto por la identidad comunitaria y acercar a los docentes a nuevas formas de enseñar.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
