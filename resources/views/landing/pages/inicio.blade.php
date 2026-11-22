@extends('landing.layout.principal')

@section('custom_css')
<style>
    .inicio-carousel {
        position: relative;
    }

    .inicio-carousel .carousel-item {
        min-height: 78vh;
    }

    .inicio-carousel .hero-panel {
        min-height: 78vh;
        margin: 0;
    }

    .inicio-carousel .carousel-indicators {
        bottom: 26px;
        margin-bottom: 0;
        gap: 10px;
    }

    .inicio-carousel .carousel-indicators [data-bs-target] {
        width: 14px;
        height: 14px;
        border: 0;
        border-radius: 50%;
        background: rgba(255, 248, 240, 0.6);
        opacity: 1;
    }

    .inicio-carousel .carousel-indicators .active {
        background: #E9C46A;
    }

    .inicio-carousel .carousel-control-prev,
    .inicio-carousel .carousel-control-next {
        width: 72px;
        opacity: 1;
    }

    .inicio-carousel .carousel-control-prev-icon,
    .inicio-carousel .carousel-control-next-icon {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background-color: rgba(44, 27, 25, 0.55);
        background-size: 45%;
    }

    .inicio-carousel .hero-panel--1::after {
        background:
            linear-gradient(180deg, rgba(56, 102, 65, 0.92), rgba(106, 153, 78, 0.82)),
            url('{{ asset('landing/img/inicio.png') }}') center/cover no-repeat;
    }

    .inicio-carousel .hero-panel--2::after {
        background:
            linear-gradient(180deg, rgba(142, 44, 31, 0.9), rgba(230, 126, 34, 0.82)),
            url('{{ asset('landing/img/quie.jpg') }}') center/cover no-repeat;
    }

    .inicio-carousel .hero-panel--3::after {
        background:
            linear-gradient(180deg, rgba(74, 44, 42, 0.92), rgba(106, 153, 78, 0.78)),
            url('{{ asset('landing/img/about.jpg') }}') center/cover no-repeat;
    }

    .inicio-carousel .hero-copy-box {
        max-width: 780px;
    }

    @media (max-width: 991.98px) {
        .inicio-carousel .carousel-item,
        .inicio-carousel .hero-panel {
            min-height: auto;
        }

        .inicio-carousel .carousel-control-prev,
        .inicio-carousel .carousel-control-next {
            display: none;
        }

        .inicio-carousel .carousel-indicators {
            bottom: 18px;
        }
    }
</style>
@endsection

@section('carrusel')
<div id="inicioHeroCarousel" class="carousel slide carousel-fade inicio-carousel" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#inicioHeroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Diapositiva 1"></button>
        <button type="button" data-bs-target="#inicioHeroCarousel" data-bs-slide-to="1" aria-label="Diapositiva 2"></button>
        <button type="button" data-bs-target="#inicioHeroCarousel" data-bs-slide-to="2" aria-label="Diapositiva 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
            <section class="hero-panel hero-panel--1">
                <div class="container hero-content">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-7" data-aos="fade-right">
                            <div class="hero-copy-box">
                                <span class="hero-kicker">Aprendizaje intercultural con identidad</span>
                                <h1 class="hero-title">
                                    Plataforma E-Learning
                                    <span>Tlamachtili</span>
                                </h1>
                                <p class="lead-copy" style="font-size: 1.12rem; color: #4A2C2A; font-weight: 700;">
                                    Dialectos para maestros en formación y servicio.
                                </p>
                                <p class="lead-copy" style="color: #6D4C41;">
                                    Tlamachtili fortalece el aprendizaje de dialectos, la práctica docente y el vínculo con la riqueza cultural de las comunidades originarias mediante recursos claros, accesibles y visualmente atractivos.
                                </p>
                                <div class="hero-badge-grid">
                                    <div class="hero-badge">Lengua, cultura y tecnología en una misma experiencia.</div>
                                    <div class="hero-badge">Contenido formativo para docentes y estudiantes normalistas.</div>
                                </div>
                                <div class="hero-actions">
                                    <a href="{{ route('register') }}" class="tla-btn-primary">Crear cuenta</a>
                                    <a href="{{ route('nosotros') }}" class="tla-btn-secondary">Conocer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="carousel-item" data-bs-interval="5000">
            <section class="hero-panel hero-panel--2">
                <div class="container hero-content">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-7" data-aos="fade-right">
                            <div class="hero-copy-box">
                                <span class="hero-kicker">Formación docente con sentido comunitario</span>
                                <h2 class="hero-title">
                                    Aprende para
                                    <span>enseñar mejor</span>
                                </h2>
                                <p class="lead-copy" style="font-size: 1.12rem; color: #4A2C2A; font-weight: 700;">
                                    Recursos diseñados para contextos multilingües e interculturales.
                                </p>
                                <p class="lead-copy" style="color: #6D4C41;">
                                    La plataforma integra vocabulario, expresiones, orientaciones didácticas y materiales de apoyo para que el aprendizaje pueda llevarse del entorno digital al aula y a la comunidad.
                                </p>
                                <div class="hero-badge-grid">
                                    <div class="hero-badge">Módulos claros y progresivos para aprender a tu ritmo.</div>
                                    <div class="hero-badge">Herramientas prácticas para maestras y maestros en servicio.</div>
                                </div>
                                <div class="hero-actions">
                                    <a href="{{ route('servicios') }}" class="tla-btn-primary">Ver servicios</a>
                                    <a href="{{ route('contacto') }}" class="tla-btn-secondary">Solicitar información</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="carousel-item" data-bs-interval="5000">
            <section class="hero-panel hero-panel--3">
                <div class="container hero-content">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-7" data-aos="fade-right">
                            <div class="hero-copy-box">
                                <span class="hero-kicker">Preservar saberes también es educar</span>
                                <h2 class="hero-title">
                                    Tecnología que
                                    <span>visibiliza culturas</span>
                                </h2>
                                <p class="lead-copy" style="font-size: 1.12rem; color: #4A2C2A; font-weight: 700;">
                                    Una experiencia visual y accesible para fortalecer la identidad lingüística.
                                </p>
                                <p class="lead-copy" style="color: #6D4C41;">
                                    Tlamachtili ayuda a reconocer el valor de las lenguas originarias y promueve una práctica educativa más inclusiva, cercana y respetuosa de la diversidad cultural.
                                </p>
                                <div class="hero-badge-grid">
                                    <div class="hero-badge">Aprendizaje con identidad, memoria y territorio.</div>
                                    <div class="hero-badge">Un espacio digital para conectar formación y patrimonio cultural.</div>
                                </div>
                                <div class="hero-actions">
                                    <a href="{{ route('productos') }}" class="tla-btn-primary">Explorar plataforma</a>
                                    <a href="{{ route('avisos') }}" class="tla-btn-secondary">Ver avisos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#inicioHeroCarousel" data-bs-slide="prev" aria-label="Anterior">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#inicioHeroCarousel" data-bs-slide="next" aria-label="Siguiente">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</div>
@endsection

@section('contenido')
<section class="page-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-up">
                <span class="section-subtitle">Lo que impulsa Tlamachtili</span>
                <h2 class="section-heading">Una plataforma para aprender, enseñar y preservar.</h2>
                <p class="section-copy">
                    Nuestro proyecto nace para apoyar a maestras y maestros que desean integrar dialectos y contenidos interculturales en su práctica educativa con herramientas accesibles, visuales y motivadoras.
                </p>
                <p class="section-copy">
                    Tlamachtili facilita el estudio de expresiones básicas, vocabulario temático, contexto comunitario y estrategias didácticas para que el aprendizaje no se quede solo en la teoría, sino que pueda llevarse al aula, al trabajo de campo y a los espacios de diálogo con la comunidad.
                </p>
                <ul class="list-check mt-4">
                    <li><i class="bi bi-check-circle-fill"></i><span>Cursos guiados con vocabulario, expresiones, contexto cultural y actividades prácticas.</span></li>
                    <li><i class="bi bi-check-circle-fill"></i><span>Recursos para fortalecer la enseñanza en comunidades diversas y multilingües.</span></li>
                    <li><i class="bi bi-check-circle-fill"></i><span>Un entorno amable que combina tecnología, identidad y aprendizaje significativo.</span></li>
                </ul>
            </div>
            <div class="col-lg-6" data-aos="zoom-in">
                <div class="media-card">
                    <img src="{{ asset('landing/img/inicio.png') }}" alt="Plataforma Tlamachtili">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section compact">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-subtitle">Experiencia principal</span>
            <h2 class="section-heading">Como se vive el aprendizaje dentro de la plataforma</h2>
            <p class="section-copy col-lg-8 mx-auto">
                Tlamachtili está pensada para que la formación docente sea clara, cercana y motivadora desde el primer acceso.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tla-card">
                    <div class="tla-icon"><i class="bi bi-translate"></i></div>
                    <h3>Dialectos con contexto</h3>
                    <p class="section-copy mb-0">
                        Cada módulo integra palabras, frases y situaciones reales para que el aprendizaje tenga sentido en el aula y en la comunidad. Los contenidos se presentan de forma progresiva para facilitar comprensión, repetición y práctica.
                    </p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tla-card">
                    <div class="tla-icon green"><i class="bi bi-journal-richtext"></i></div>
                    <h3>Recursos para docentes</h3>
                    <p class="section-copy mb-0">
                        Planeaciones, materiales de apoyo, actividades y orientaciones para aplicar lo aprendido en procesos de enseñanza intercultural. Esto permite relacionar el conocimiento lingüístico con situaciones pedagógicas concretas.
                    </p>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="tla-card">
                    <div class="tla-icon gold"><i class="bi bi-award-fill"></i></div>
                    <h3>Motivacion y logros</h3>
                    <p class="section-copy mb-0">
                        Insignias, avance visual y metas alcanzables para mantener la participación activa durante la formación. El sistema reconoce el esfuerzo continuo y ayuda a organizar mejor el progreso de cada usuario.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section compact">
    <div class="container">
        <div class="section-shell p-4 p-lg-5" data-aos="fade-up">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <span class="section-subtitle">A quién va dirigido</span>
                    <h2 class="section-heading">Una plataforma pensada para distintos momentos de la formación docente</h2>
                    <p class="section-copy">
                        Tlamachtili está dirigida principalmente a estudiantes normalistas, docentes en servicio y personas interesadas en fortalecer una práctica educativa con enfoque intercultural y respeto por las lenguas originarias.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="table-like">
                        <div class="row-item">
                            <span>Maestros en formación</span>
                            <span>Base teórica y práctica</span>
                        </div>
                        <div class="row-item">
                            <span>Docentes en servicio</span>
                            <span>Actualizacion profesional</span>
                        </div>
                        <div class="row-item">
                            <span>Instituciones educativas</span>
                            <span>Apoyo para proyectos interculturales</span>
                        </div>
                        <div class="row-item">
                            <span>Comunidad interesada</span>
                            <span>Aprendizaje con identidad</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="page-section compact">
    <div class="container">
        <div class="cta-block text-center" data-aos="zoom-in">
            <span class="section-subtitle" style="background: rgba(255, 248, 240, 0.18); color: #FFF8F0; border-color: rgba(255, 248, 240, 0.2);">Comienza hoy</span>
            <h2 class="mt-3 mb-3" style="font-size: clamp(2.2rem, 5vw, 3.4rem); color: #FFF8F0;">Impulsa tu formación docente con Tlamachtili</h2>
            <p class="col-lg-8 mx-auto mb-0">
                Crea tu cuenta, explora los contenidos y construye una práctica educativa más inclusiva, intercultural y cercana a las lenguas originarias.
            </p>
            <div class="hero-actions justify-content-center">
                <a href="{{ route('register') }}" class="tla-btn-secondary" style="background: #FFF8F0; color: #8E2C1F;">Crear cuenta</a>
                <a href="{{ route('contacto') }}" class="tla-btn-secondary" style="border-color: rgba(255,248,240,0.4); color: #FFF8F0; background: transparent;">Solicitar información</a>
            </div>
        </div>
    </div>
</section>

<section class="page-section compact">
    <div class="container">
        <div class="section-shell p-4 p-lg-5" data-aos="fade-up">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h3>Qué es Tlamachtili</h3>
                    <p class="section-copy mb-0">
                        Tlamachtili es una plataforma e-learning creada para fortalecer el aprendizaje de dialectos en maestras y maestros en formación y servicio, promoviendo al mismo tiempo una educación más inclusiva e intercultural.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h3>Por qué es importante</h3>
                    <p class="section-copy mb-0">
                        El proyecto reconoce que las lenguas originarias forman parte del patrimonio cultural y educativo. Aprenderlas y valorarlas ayuda a construir aulas más cercanas a la realidad de muchas comunidades.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h3>Qué ofrece</h3>
                    <p class="section-copy mb-0">
                        La plataforma integra cursos, recursos de apoyo, actividades prácticas, seguimiento de progreso y materiales que facilitan la aplicación del aprendizaje en contextos escolares reales.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
