@extends('landing.layout.principal')

@section('carrusel')
<section class="page-banner">
    <div class="container banner-content">

        <span class="page-pill">
            Servicios de la plataforma
        </span>

        <h1 class="section-heading mt-3">
            Herramientas que acompañan el aprendizaje y la enseñanza
        </h1>

        <p class="lead-copy col-lg-8 mb-0">
            Cada servicio de Tlamachtili está pensado para apoyar a docentes y
            estudiantes que desean aprender lenguas originarias e integrar un
            enfoque intercultural en su práctica diaria.
        </p>

    </div>
</section>
@endsection


@section('contenido')

{{-- =========================================================
    SERVICIOS
========================================================= --}}
<section class="page-section">

    <div class="container">

        <div class="row g-4">

            {{-- CURSOS --}}
            <div class="col-md-6 col-xl-3"
                 data-aos="fade-up"
                 data-aos-delay="100">

                <div class="tla-card text-center">

                    <div class="tla-icon mx-auto">
                        <i class="bi bi-easel2-fill"></i>
                    </div>

                    <h3>Cursos guiados</h3>

                    <p class="section-copy mb-0">
                        Lecciones progresivas sobre lenguas originarias con
                        ejemplos, evaluaciones breves y seguimiento del avance
                        para construir el aprendizaje paso a paso.
                    </p>

                </div>

            </div>


            {{-- MULTIMEDIA --}}
            <div class="col-md-6 col-xl-3"
                 data-aos="fade-up"
                 data-aos-delay="200">

                <div class="tla-card text-center">

                    <div class="tla-icon green mx-auto">
                        <i class="bi bi-headphones"></i>
                    </div>

                    <h3>Apoyo multimedia</h3>

                    <p class="section-copy mb-0">
                        Audios, imágenes y ejercicios visuales para mejorar
                        comprensión, pronunciación y retención.
                    </p>

                </div>

            </div>


            {{-- GAMIFICACIÓN --}}
            <div class="col-md-6 col-xl-3"
                 data-aos="fade-up"
                 data-aos-delay="300">

                <div class="tla-card text-center">

                    <div class="tla-icon gold mx-auto">
                        <i class="bi bi-patch-check-fill"></i>
                    </div>

                    <h3>Gamificación</h3>

                    <p class="section-copy mb-0">
                        Insignias, logros y metas formativas que convierten
                        el proceso en una experiencia motivadora.
                    </p>

                </div>

            </div>


            {{-- COMUNIDAD --}}
            <div class="col-md-6 col-xl-3"
                 data-aos="fade-up"
                 data-aos-delay="400">

                <div class="tla-card text-center">

                    <div class="tla-icon mx-auto">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <h3>Comunidad docente</h3>

                    <p class="section-copy mb-0">
                        Intercambio de experiencias, materiales y buenas
                        prácticas para la educación intercultural.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
    INTRODUCCIÓN GENERAL
========================================================= --}}
<section class="page-section compact">

    <div class="container">

        <div class="section-shell p-4 p-lg-5"
             data-aos="fade-up">

            <div class="row align-items-center g-4">

                <div class="col-lg-7">

                    <span class="section-subtitle">
                        Ruta de aprendizaje
                    </span>

                    <h2 class="section-heading">
                        Aprende Náhuatl paso a paso
                    </h2>

                    <p class="section-copy">
                        Tlamachtili ofrece una ruta de aprendizaje progresiva
                        para comenzar desde conceptos básicos y avanzar
                        poco a poco hacia contenidos más complejos.
                    </p>

                    <p class="section-copy mb-0">
                        Antes de cada evaluación encontrarás una pequeña
                        lección donde podrás estudiar los conceptos necesarios.
                        Después podrás poner a prueba lo aprendido mediante
                        ejercicios interactivos.
                    </p>

                </div>


                <div class="col-lg-5">

                    <div class="tla-card">

                        <div class="d-flex align-items-center gap-3 mb-3">

                            <div class="tla-icon">
                                <i class="bi bi-book-half"></i>
                            </div>

                            <div>

                                <h4 class="mb-1">
                                    5 niveles
                                </h4>

                                <small class="text-muted">
                                    De principiante a avanzado
                                </small>

                            </div>

                        </div>


                        <ul class="list-check mb-0">

                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>
                                    Mini-lección antes de cada curso.
                                </span>
                            </li>

                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>
                                    Ejemplos y vocabulario.
                                </span>
                            </li>

                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>
                                    Preguntas interactivas.
                                </span>
                            </li>

                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>
                                    Retroalimentación inmediata.
                                </span>
                            </li>

                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>
                                    Resultado y revisión de errores.
                                </span>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
    CURSOS
========================================================= --}}
<section class="page-section"
         id="cursos-nahuatl">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-subtitle">
                Cursos de Náhuatl
            </span>

            <h2 class="section-heading">
                Comienza tu ruta de aprendizaje
            </h2>

            <p class="section-copy mx-auto"
               style="max-width: 700px;">

                Primero aprenderás los conceptos principales y después
                podrás comprobar cuánto aprendiste.

            </p>

        </div>


        <div class="row g-4">

            {{-- =================================================
                 CURSO 1
            ================================================== --}}
            <div class="col-lg-4 col-md-6">

                <div class="tla-card h-100 course-card">

                    <div class="d-flex justify-content-between align-items-start">

                        <div class="tla-icon">
                            <i class="bi bi-1-circle-fill"></i>
                        </div>

                        <span class="badge bg-success">
                            Básico
                        </span>

                    </div>

                    <h3 class="mt-4">
                        Curso 1: Primeros pasos
                    </h3>

                    <p class="section-copy">
                        Conoce palabras básicas y comienza a familiarizarte
                        con algunos conceptos del Náhuatl.
                    </p>

                    <div class="mb-3">

                        <small class="text-muted">
                            <i class="bi bi-book me-1"></i>
                            Mini-lección
                        </small>

                        <span class="mx-2">•</span>

                        <small class="text-muted">
                            <i class="bi bi-question-circle me-1"></i>
                            5 preguntas
                        </small>

                    </div>

                    <button
                        type="button"
                        class="btn btn-primary w-100"
                        onclick="abrirCurso(0)"
                    >
                        Ver lección
                        <i class="bi bi-arrow-right ms-2"></i>
                    </button>

                </div>

            </div>


            {{-- =================================================
                 CURSO 2
            ================================================== --}}
            <div class="col-lg-4 col-md-6">

                <div class="tla-card h-100 course-card">

                    <div class="d-flex justify-content-between align-items-start">

                        <div class="tla-icon green">
                            <i class="bi bi-2-circle-fill"></i>
                        </div>

                        <span class="badge bg-primary">
                            Básico
                        </span>

                    </div>

                    <h3 class="mt-4">
                        Curso 2: Vocabulario cotidiano
                    </h3>

                    <p class="section-copy">
                        Amplía tu vocabulario y aprende a relacionar palabras
                        con objetos, personas y situaciones.
                    </p>

                    <div class="mb-3">

                        <small class="text-muted">
                            <i class="bi bi-book me-1"></i>
                            Mini-lección
                        </small>

                        <span class="mx-2">•</span>

                        <small class="text-muted">
                            <i class="bi bi-question-circle me-1"></i>
                            5 preguntas
                        </small>

                    </div>

                    <button
                        type="button"
                        class="btn btn-primary w-100"
                        onclick="abrirCurso(1)"
                    >
                        Ver lección
                        <i class="bi bi-arrow-right ms-2"></i>
                    </button>

                </div>

            </div>


            {{-- =================================================
                 CURSO 3
            ================================================== --}}
            <div class="col-lg-4 col-md-6">

                <div class="tla-card h-100 course-card">

                    <div class="d-flex justify-content-between align-items-start">

                        <div class="tla-icon gold">
                            <i class="bi bi-3-circle-fill"></i>
                        </div>

                        <span class="badge bg-warning text-dark">
                            Intermedio
                        </span>

                    </div>

                    <h3 class="mt-4">
                        Curso 3: Frases sencillas
                    </h3>

                    <p class="section-copy">
                        Aprende a interpretar expresiones sencillas y
                        comprender palabras dentro de un contexto.
                    </p>

                    <div class="mb-3">

                        <small class="text-muted">
                            <i class="bi bi-book me-1"></i>
                            Mini-lección
                        </small>

                        <span class="mx-2">•</span>

                        <small class="text-muted">
                            <i class="bi bi-question-circle me-1"></i>
                            5 preguntas
                        </small>

                    </div>

                    <button
                        type="button"
                        class="btn btn-primary w-100"
                        onclick="abrirCurso(2)"
                    >
                        Ver lección
                        <i class="bi bi-arrow-right ms-2"></i>
                    </button>

                </div>

            </div>


            {{-- =================================================
                 CURSO 4
            ================================================== --}}
            <div class="col-lg-6">

                <div class="tla-card h-100 course-card">

                    <div class="d-flex justify-content-between align-items-start">

                        <div class="tla-icon">
                            <i class="bi bi-4-circle-fill"></i>
                        </div>

                        <span class="badge bg-warning text-dark">
                            Intermedio
                        </span>

                    </div>

                    <h3 class="mt-4">
                        Curso 4: Comprensión y construcción
                    </h3>

                    <p class="section-copy">
                        Trabaja con estructuras más completas y desarrolla
                        estrategias para comprender expresiones.
                    </p>

                    <div class="mb-3">

                        <small class="text-muted">
                            <i class="bi bi-book me-1"></i>
                            Mini-lección
                        </small>

                        <span class="mx-2">•</span>

                        <small class="text-muted">
                            <i class="bi bi-question-circle me-1"></i>
                            5 preguntas
                        </small>

                    </div>

                    <button
                        type="button"
                        class="btn btn-primary w-100"
                        onclick="abrirCurso(3)"
                    >
                        Ver lección
                        <i class="bi bi-arrow-right ms-2"></i>
                    </button>

                </div>

            </div>


            {{-- =================================================
                 CURSO 5
            ================================================== --}}
            <div class="col-lg-6">

                <div class="tla-card h-100 course-card">

                    <div class="d-flex justify-content-between align-items-start">

                        <div class="tla-icon gold">
                            <i class="bi bi-5-circle-fill"></i>
                        </div>

                        <span class="badge bg-danger">
                            Avanzado
                        </span>

                    </div>

                    <h3 class="mt-4">
                        Curso 5: Integración
                    </h3>

                    <p class="section-copy">
                        Integra vocabulario, comprensión y estrategias de
                        aprendizaje mediante ejercicios de aplicación.
                    </p>

                    <div class="mb-3">

                        <small class="text-muted">
                            <i class="bi bi-book me-1"></i>
                            Mini-lección
                        </small>

                        <span class="mx-2">•</span>

                        <small class="text-muted">
                            <i class="bi bi-question-circle me-1"></i>
                            5 preguntas
                        </small>

                    </div>

                    <button
                        type="button"
                        class="btn btn-primary w-100"
                        onclick="abrirCurso(4)"
                    >
                        Ver lección
                        <i class="bi bi-arrow-right ms-2"></i>
                    </button>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    CURSOS DE MAYA
========================================================= --}}
<section class="page-section" id="cursos-maya">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-subtitle">
                Cursos de Maya
            </span>

            <h2 class="section-heading">
                Continúa tu ruta de aprendizaje
            </h2>

            <p class="section-copy mx-auto"
               style="max-width: 700px;">

                Aprende los conceptos principales del Maya de forma progresiva
                y comprueba lo aprendido mediante ejercicios interactivos.

            </p>

        </div>


        <div class="row g-4">

            {{-- =================================================
                 CURSO 1
            ================================================== --}}
            <div class="col-lg-4 col-md-6">

                <div class="tla-card h-100 course-card">

                    <div class="d-flex justify-content-between align-items-start">

                        <div class="tla-icon">
                            <i class="bi bi-1-circle-fill"></i>
                        </div>

                        <span class="badge bg-success">
                            Básico
                        </span>

                    </div>

                    <h3 class="mt-4">
                        Curso 1: Primeros pasos
                    </h3>

                    <p class="section-copy">
                        Conoce palabras básicas y comienza a familiarizarte
                        con algunos conceptos del Maya.
                    </p>

                    <div class="mb-3">

                        <small class="text-muted">
                            <i class="bi bi-book me-1"></i>
                            Mini-lección
                        </small>

                        <span class="mx-2">•</span>

                        <small class="text-muted">
                            <i class="bi bi-question-circle me-1"></i>
                            5 preguntas
                        </small>

                    </div>

                    <button
                        type="button"
                        class="btn btn-primary w-100"
                        onclick="abrirCurso(0, 'maya')"
                    >
                        Ver lección
                        <i class="bi bi-arrow-right ms-2"></i>
                    </button>

                </div>

            </div>


            {{-- =================================================
                 CURSO 2
            ================================================== --}}
            <div class="col-lg-4 col-md-6">

                <div class="tla-card h-100 course-card">

                    <div class="d-flex justify-content-between align-items-start">

                        <div class="tla-icon green">
                            <i class="bi bi-2-circle-fill"></i>
                        </div>

                        <span class="badge bg-primary">
                            Básico
                        </span>

                    </div>

                    <h3 class="mt-4">
                        Curso 2: Vocabulario cotidiano
                    </h3>

                    <p class="section-copy">
                        Amplía tu vocabulario y aprende a relacionar palabras
                        con objetos, personas y situaciones.
                    </p>

                    <div class="mb-3">

                        <small class="text-muted">
                            <i class="bi bi-book me-1"></i>
                            Mini-lección
                        </small>

                        <span class="mx-2">•</span>

                        <small class="text-muted">
                            <i class="bi bi-question-circle me-1"></i>
                            5 preguntas
                        </small>

                    </div>

                    <button
                        type="button"
                        class="btn btn-primary w-100"
                        onclick="abrirCurso(1, 'maya')"
                    >
                        Ver lección
                        <i class="bi bi-arrow-right ms-2"></i>
                    </button>

                </div>

            </div>


            {{-- =================================================
                 CURSO 3
            ================================================== --}}
            <div class="col-lg-4 col-md-6">

                <div class="tla-card h-100 course-card">

                    <div class="d-flex justify-content-between align-items-start">

                        <div class="tla-icon gold">
                            <i class="bi bi-3-circle-fill"></i>
                        </div>

                        <span class="badge bg-warning text-dark">
                            Intermedio
                        </span>

                    </div>

                    <h3 class="mt-4">
                        Curso 3: Frases sencillas
                    </h3>

                    <p class="section-copy">
                        Aprende a interpretar expresiones sencillas y
                        comprender palabras dentro de un contexto.
                    </p>

                    <div class="mb-3">

                        <small class="text-muted">
                            <i class="bi bi-book me-1"></i>
                            Mini-lección
                        </small>

                        <span class="mx-2">•</span>

                        <small class="text-muted">
                            <i class="bi bi-question-circle me-1"></i>
                            5 preguntas
                        </small>

                    </div>

                    <button
                        type="button"
                        class="btn btn-primary w-100"
                        onclick="abrirCurso(2, 'maya')"
                    >
                        Ver lección
                        <i class="bi bi-arrow-right ms-2"></i>
                    </button>

                </div>

            </div>


            {{-- =================================================
                 CURSO 4
            ================================================== --}}
            <div class="col-lg-6">

                <div class="tla-card h-100 course-card">

                    <div class="d-flex justify-content-between align-items-start">

                        <div class="tla-icon">
                            <i class="bi bi-4-circle-fill"></i>
                        </div>

                        <span class="badge bg-warning text-dark">
                            Intermedio
                        </span>

                    </div>

                    <h3 class="mt-4">
                        Curso 4: Comprensión y construcción
                    </h3>

                    <p class="section-copy">
                        Trabaja con estructuras más completas y desarrolla
                        estrategias para comprender expresiones.
                    </p>

                    <div class="mb-3">

                        <small class="text-muted">
                            <i class="bi bi-book me-1"></i>
                            Mini-lección
                        </small>

                        <span class="mx-2">•</span>

                        <small class="text-muted">
                            <i class="bi bi-question-circle me-1"></i>
                            5 preguntas
                        </small>

                    </div>

                    <button
                        type="button"
                        class="btn btn-primary w-100"
                        onclick="abrirCurso(3, 'maya')"
                    >
                        Ver lección
                        <i class="bi bi-arrow-right ms-2"></i>
                    </button>

                </div>

            </div>


            {{-- =================================================
                 CURSO 5
            ================================================== --}}
            <div class="col-lg-6">

                <div class="tla-card h-100 course-card">

                    <div class="d-flex justify-content-between align-items-start">

                        <div class="tla-icon gold">
                            <i class="bi bi-5-circle-fill"></i>
                        </div>

                        <span class="badge bg-danger">
                            Avanzado
                        </span>

                    </div>

                    <h3 class="mt-4">
                        Curso 5: Integración
                    </h3>

                    <p class="section-copy">
                        Integra vocabulario, comprensión y estrategias de
                        aprendizaje mediante ejercicios de aplicación.
                    </p>

                    <div class="mb-3">

                        <small class="text-muted">
                            <i class="bi bi-book me-1"></i>
                            Mini-lección
                        </small>

                        <span class="mx-2">•</span>

                        <small class="text-muted">
                            <i class="bi bi-question-circle me-1"></i>
                            5 preguntas
                        </small>

                    </div>

                    <button
                        type="button"
                        class="btn btn-primary w-100"
                        onclick="abrirCurso(4, 'maya')"
                    >
                        Ver lección
                        <i class="bi bi-arrow-right ms-2"></i>
                    </button>

                </div>

            </div>

        </div>

    </div>

</section>




{{-- =========================================================
    AUDIOS PARA PRACTICAR MAYA
========================================================= --}}
<section class="page-section" id="audios-maya">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-subtitle">Práctica de escucha</span>
            <h2 class="section-heading">Escucha y aprende Maya</h2>
            <p class="section-copy mx-auto" style="max-width: 720px;">
                Aprende expresiones cotidianas escuchando cómo suenan. Reproduce cada audio,
                lee su significado y repite la frase en voz alta. Puedes volver a escucharlo
                las veces que necesites.
            </p>
        </div>
        @php
            /*
             * AUDIOS MAYA
             * Se leen desde el servidor y se incrustan como Data URI.
             * Así el navegador no solicita directamente los .wav a OpenResty
             * y se evita el error 403 de la carpeta /landing/img/Audios/.
             */
            $audiosMaya = [
                [
                    'frase' => 'Bix a beel',
                    'significado' => '¿Cómo estás?',
                    'archivo' => "Bixabeel-Cómoestás.wav",
                    'icono' => 'bi-chat-dots-fill',
                ],
                [
                    'frase' => "In k'aaba'e'",
                    'significado' => 'Mi nombre es…',
                    'archivo' => "Ink'aaba'e'-Minombrees.wav",
                    'icono' => 'bi-person-fill',
                ],
                [
                    'frase' => "Ma'",
                    'significado' => 'No',
                    'archivo' => "Ma'-No.wav",
                    'icono' => 'bi-x-circle-fill',
                ],
                [
                    'frase' => "Ma' ba'al",
                    'significado' => 'De nada',
                    'archivo' => "Ma'ba'al-Denada.wav",
                    'icono' => 'bi-hand-thumbs-up-fill',
                ],
                [
                    'frase' => "Ma'alob k'iin",
                    'significado' => 'Buenos días',
                    'archivo' => "Ma'alobk'iin-Buenosdias.wav",
                    'icono' => 'bi-sun-fill',
                ],
                [
                    'frase' => "Ma'alob!",
                    'significado' => 'Bien',
                    'archivo' => "Ma'alob!-bien.wav",
                    'icono' => 'bi-emoji-smile-fill',
                ],
                [
                    'frase' => "Ma'alob, kux teech",
                    'significado' => 'Bien, ¿y tú?',
                    'archivo' => "Ma'alob,kuxteech-bienytu.wav",
                    'icono' => 'bi-chat-square-heart-fill',
                ],
                [
                    'frase' => "Yum bo'otik",
                    'significado' => 'Gracias',
                    'archivo' => "Yumbo'otik-Gracias.wav",
                    'icono' => 'bi-heart-fill',
                ],
            ];

            /*
             * Todo queda dentro de este mismo archivo Blade.
             * No necesitas agregar una ruta ni un controlador.
             */
            foreach ($audiosMaya as $indice => &$audio) {
                $rutaFisica = public_path('landing/img/Audios/' . $audio['archivo']);

                // Si el nombre real tiene espacios, apóstrofes u otra variación,
                // buscamos el WAV por su nombre normalizado. Esto corrige especialmente
                // "In k'aaba'e' - Mi nombre es.wav" / "Ink'aaba'e'-Minombrees.wav".
                if (!is_file($rutaFisica)) {
                    $directorioAudios = public_path('landing/img/Audios');
                    $normalizarNombre = function ($nombre) {
                        $nombre = pathinfo($nombre, PATHINFO_FILENAME);
                        $nombre = mb_strtolower($nombre, 'UTF-8');
                        return preg_replace('/[^a-z0-9]/u', '', $nombre);
                    };

                    $objetivo = $normalizarNombre($audio['archivo']);
                    foreach (glob($directorioAudios . '/*.wav') ?: [] as $candidato) {
                        if ($normalizarNombre(basename($candidato)) === $objetivo) {
                            $rutaFisica = $candidato;
                            $audio['archivo'] = basename($candidato);
                            break;
                        }
                    }

                    // Caso especial para "Mi nombre es", tolerando cualquier separación.
                    if (!is_file($rutaFisica) && $audio['frase'] === "In k'aaba'e'") {
                        foreach (glob($directorioAudios . '/*.wav') ?: [] as $candidato) {
                            $n = $normalizarNombre(basename($candidato));
                            if (str_contains($n, 'inkaabae') && str_contains($n, 'minombrees')) {
                                $rutaFisica = $candidato;
                                $audio['archivo'] = basename($candidato);
                                break;
                            }
                        }
                    }
                }

                if (is_file($rutaFisica) && is_readable($rutaFisica)) {
                    $contenidoAudio = file_get_contents($rutaFisica);

                    if ($contenidoAudio !== false && $contenidoAudio !== '') {
                        $audio['src'] = 'data:audio/wav;base64,' . base64_encode($contenidoAudio);
                        $audio['disponible'] = true;
                    } else {
                        $audio['src'] = '';
                        $audio['disponible'] = false;
                    }
                } else {
                    $audio['src'] = '';
                    $audio['disponible'] = false;
                }
            }
            unset($audio);
        @endphp

        <div class="section-shell p-3 p-md-4 mb-4">
            <div class="row align-items-center g-3">
                <div class="col-lg-7">
                    <label for="buscarAudioMaya" class="form-label fw-semibold mb-2">
                        <i class="bi bi-search me-2"></i>Buscar una expresión
                    </label>
                    <input
                        type="search"
                        class="form-control"
                        id="buscarAudioMaya"
                        placeholder="Escribe una frase o su significado..."
                        aria-label="Buscar audios de Maya"
                    >
                </div>
                <div class="col-lg-5">
                    <label for="velocidadAudioMaya" class="form-label fw-semibold mb-2">
                        <i class="bi bi-speedometer2 me-2"></i>Velocidad de reproducción
                    </label>
                    <select class="form-select" id="velocidadAudioMaya">
                        <option value="0.75">Lenta (0.75×)</option>
                        <option value="1" selected>Normal (1×)</option>
                        <option value="1.25">Un poco más rápida (1.25×)</option>
                    </select>
                </div>
            </div>
            <p class="small text-muted mt-3 mb-0">
                <i class="bi bi-lightbulb me-1"></i>
                Consejo: escucha primero, repite la frase y después intenta recordar su significado.
            </p>
        </div>

        <div class="row g-4" id="listaAudiosMaya">
            @foreach ($audiosMaya as $indice => $audio)
                <div
                    class="col-md-6 col-xl-4 audio-maya-item"
                    data-audio-search="{{ \Illuminate\Support\Str::lower($audio['frase'] . ' ' . $audio['significado']) }}"
                >
                    <article class="tla-card h-100 audio-maya-card">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="tla-icon green flex-shrink-0">
                                <i class="bi {{ $audio['icono'] }}"></i>
                            </div>
                            <div>
                                <h3 class="h5 mb-1">{{ $audio['frase'] }}</h3>
                                <p class="text-muted mb-0">{{ $audio['significado'] }}</p>
                            </div>
                        </div>

                        <audio
                            class="w-100 audio-maya-player"
                            controls
                            preload="auto"
                            playsinline
                            aria-label="Audio de {{ $audio['frase'] }}"
                            @if ($audio['disponible']) src="{{ $audio['src'] }}" @endif
                        >
                            @if (!$audio['disponible'])
                                El archivo de audio no está disponible en el servidor.
                            @endif
                        </audio>

                        <button
                            type="button"
                            class="btn btn-outline-primary btn-sm mt-3 repetir-audio-maya"
                        >
                            <i class="bi bi-arrow-repeat me-1"></i>Repetir desde el inicio
                        </button>
                    </article>
                </div>
            @endforeach
        </div>

        <div id="sinAudiosMaya" class="alert alert-info text-center mt-4" style="display:none;">
            No se encontraron expresiones con esa búsqueda. Intenta con otra palabra.
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const listaAudios = document.getElementById('listaAudiosMaya');
    if (!listaAudios) return;

    const reproductores = Array.from(listaAudios.querySelectorAll('.audio-maya-player'));
    const buscador = document.getElementById('buscarAudioMaya');
    const velocidad = document.getElementById('velocidadAudioMaya');
    const avisoVacio = document.getElementById('sinAudiosMaya');

    // Mantiene una sola reproducción activa a la vez.
    reproductores.forEach(function (audio) {
        audio.addEventListener('play', function () {
            reproductores.forEach(function (otroAudio) {
                if (otroAudio !== audio) otroAudio.pause();
            });
        });
    });

    // Cambia la velocidad de todos los audios.
    velocidad.addEventListener('change', function () {
        const nuevaVelocidad = Number(velocidad.value) || 1;
        reproductores.forEach(function (audio) {
            audio.playbackRate = nuevaVelocidad;
        });
    });

    // Permite volver a escuchar cada frase desde el principio.
    listaAudios.querySelectorAll('.repetir-audio-maya').forEach(function (boton) {
        boton.addEventListener('click', function () {
            const audio = boton.closest('.audio-maya-card').querySelector('.audio-maya-player');
            reproductores.forEach(function (otroAudio) {
                if (otroAudio !== audio) otroAudio.pause();
            });
            if (!audio.currentSrc && !audio.src) {
                return;
            }

            audio.currentTime = 0;
            audio.play().catch(function () {
                audio.controls = true;
            });
        });
    });

    // Filtra las expresiones por frase o significado en español.
    buscador.addEventListener('input', function () {
        const consulta = buscador.value.trim().toLocaleLowerCase();
        let visibles = 0;

        listaAudios.querySelectorAll('.audio-maya-item').forEach(function (tarjeta) {
            const contenido = (tarjeta.dataset.audioSearch || '').toLocaleLowerCase();
            const coincide = contenido.includes(consulta);
            tarjeta.style.display = coincide ? '' : 'none';
            if (coincide) visibles++;
        });

        avisoVacio.style.display = visibles === 0 ? 'block' : 'none';
    });
});
</script>


{{-- =========================================================
    MODAL DEL CURSO
========================================================= --}}
<div
    class="modal fade"
    id="cursoModal"
    tabindex="-1"
    aria-hidden="true"
>

    <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content border-0 shadow-lg">


            {{-- HEADER --}}
            <div class="modal-header">

                <div>

                    <span
                        class="section-subtitle"
                        id="modalNivel"
                    >
                        Curso 1 · Básico
                    </span>

                    <h4
                        class="modal-title"
                        id="modalTitulo"
                    >
                        Primeros pasos
                    </h4>

                </div>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar"
                ></button>

            </div>


            <div class="modal-body p-4">


                {{-- =================================================
                     MINI LECCIÓN
                ================================================== --}}
                <div id="leccionCurso">

                    <div class="text-center mb-4">

                        <div class="tla-icon mx-auto mb-3">
                            <i class="bi bi-book-open-fill"></i>
                        </div>

                        <span class="section-subtitle">
                            Antes de comenzar
                        </span>

                        <h3
                            class="mt-2"
                            id="leccionTitulo"
                        >
                            Aprende primero
                        </h3>

                        <p
                            class="text-muted"
                            id="leccionDescripcion"
                        ></p>

                    </div>


                    {{-- EXPLICACIÓN --}}
                    <div class="section-shell p-4 mb-4">

                        <div class="d-flex align-items-start gap-3">

                            <div class="tla-icon flex-shrink-0">
                                <i class="bi bi-lightbulb-fill"></i>
                            </div>

                            <div>

                                <h5 class="mb-2">
                                    Lo que debes saber
                                </h5>

                                <p
                                    class="section-copy mb-0"
                                    id="leccionExplicacion"
                                ></p>

                            </div>

                        </div>

                    </div>


                    {{-- VOCABULARIO --}}
                    <h5 class="mb-3">

                        <i class="bi bi-journal-text me-2"></i>

                        Palabras y ejemplos

                    </h5>


                    <div
                        class="row g-3 mb-4"
                        id="vocabularioCurso"
                    ></div>


                    {{-- CONSEJO --}}
                    <div
                        class="alert alert-info mb-4"
                    >

                        <h5>

                            <i class="bi bi-stars me-2"></i>

                            Consejo para aprender

                        </h5>

                        <p
                            class="mb-0"
                            id="consejoCurso"
                        ></p>

                    </div>


                    {{-- OBJETIVOS --}}
                    <div class="section-shell p-4 mb-4">

                        <h5>
                            <i class="bi bi-bullseye me-2"></i>
                            En esta lección aprenderás
                        </h5>

                        <ul
                            class="list-check mt-3 mb-0"
                            id="objetivosCurso"
                        ></ul>

                    </div>


                    {{-- BOTÓN --}}
                    <div class="text-center">

                        <p class="text-muted small mb-3">
                            Lee la lección y revisa los ejemplos antes
                            de comenzar la práctica.
                        </p>

                        <button
                            type="button"
                            class="btn btn-primary px-4"
                            onclick="iniciarPreguntas()"
                        >

                            Ya entendí,
                            comenzar práctica

                            <i class="bi bi-arrow-right ms-2"></i>

                        </button>

                    </div>

                </div>



                {{-- =================================================
                     PREGUNTAS
                ================================================== --}}
                <div
                    id="preguntasCurso"
                    style="display:none;"
                >

                    {{-- PROGRESO --}}
                    <div class="mb-4">

                        <div class="d-flex justify-content-between mb-2">

                            <small class="text-muted">
                                Progreso de la práctica
                            </small>

                            <small
                                class="text-muted"
                                id="contadorPregunta"
                            >
                                Pregunta 1 de 5
                            </small>

                        </div>


                        <div
                            class="progress"
                            style="height:8px;"
                        >

                            <div
                                id="barraProgreso"
                                class="progress-bar"
                                role="progressbar"
                                style="width:20%;"
                            ></div>

                        </div>

                    </div>


                    {{-- PREGUNTA --}}
                    <div class="tla-card mb-4">

                        <span
                            class="section-subtitle"
                            id="tipoPregunta"
                        >
                            Comprueba lo aprendido
                        </span>

                        <h4
                            class="mt-3 mb-4"
                            id="textoPregunta"
                        ></h4>

                        <div
                            id="opcionesPregunta"
                        ></div>

                    </div>


                    {{-- RETROALIMENTACIÓN --}}
                    <div
                        id="retroalimentacion"
                        style="display:none;"
                        class="alert mb-4"
                    >

                        <h5 id="retroTitulo"></h5>

                        <p
                            id="retroTexto"
                            class="mb-0"
                        ></p>

                    </div>


                    <div class="d-flex justify-content-end">

                        <button
                            type="button"
                            id="btnSiguiente"
                            class="btn btn-primary"
                            onclick="siguientePregunta()"
                            disabled
                        >
                            Siguiente
                            <i class="bi bi-arrow-right ms-2"></i>
                        </button>

                    </div>

                </div>



                {{-- =================================================
                     RESULTADO
                ================================================== --}}
                <div
                    id="resultadoCurso"
                    style="display:none;"
                    class="text-center"
                >

                    <div class="tla-icon mx-auto mb-4">

                        <i
                            id="resultadoIcono"
                            class="bi bi-trophy-fill"
                        ></i>

                    </div>


                    <h3>
                        ¡Práctica terminada!
                    </h3>


                    <p class="section-copy">
                        Este es tu resultado:
                    </p>


                    <div
                        class="display-4 fw-bold mb-3"
                        id="resultadoPuntos"
                    >
                        0/5
                    </div>


                    <div
                        class="alert"
                        id="mensajeResultado"
                    ></div>


                    <div
                        id="erroresResultado"
                        class="text-start mt-4"
                    ></div>


                    <div class="d-flex justify-content-center gap-2 mt-4">

                        <button
                            type="button"
                            class="btn btn-outline-secondary"
                            onclick="reiniciarCurso()"
                        >

                            <i class="bi bi-arrow-repeat me-2"></i>

                            Repasar y repetir

                        </button>


                        <button
                            type="button"
                            class="btn btn-primary"
                            onclick="cerrarYContinuar()"
                        >

                            Continuar

                            <i class="bi bi-arrow-right ms-2"></i>

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



{{-- =========================================================
    ACOMPAÑAMIENTO
========================================================= --}}
<section class="page-section compact">

    <div class="container">

        <div
            class="section-shell p-4 p-lg-5"
            data-aos="fade-up"
        >

            <div class="row align-items-center g-4">

                <div class="col-lg-6">

                    <span class="section-subtitle">
                        Acompañamiento integral
                    </span>

                    <h2 class="section-heading">
                        Servicios pensados para una implementación real
                    </h2>

                    <p class="section-copy">
                        La plataforma no solo ofrece contenido. También crea
                        una ruta clara para que el aprendizaje se convierta
                        en una herramienta práctica dentro del contexto escolar.
                    </p>

                </div>


                <div class="col-lg-6">

                    <ul class="list-check">

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>
                                Recursos descargables para reforzar sesiones
                                de clase y trabajo autónomo.
                            </span>
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>
                                Panel de progreso para visualizar avances.
                            </span>
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>
                                Diseño adaptable para escritorio, tableta
                                y celular.
                            </span>
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>
                                Retroalimentación después de cada ejercicio.
                            </span>
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
    BENEFICIOS
========================================================= --}}
<section class="page-section compact">

    <div class="container">

        <div class="row g-4">


            <div class="col-lg-6"
                 data-aos="fade-up">

                <div class="tla-card h-100">

                    <span class="section-subtitle">
                        Beneficios
                    </span>

                    <h3 class="mt-3">
                        Lo que obtiene cada usuario
                    </h3>

                    <ul class="list-check mt-3">

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>
                                Aprende antes de responder.
                            </span>
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>
                                Puede identificar sus errores.
                            </span>
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>
                                Recibe retroalimentación inmediata.
                            </span>
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>
                                Puede repetir los cursos para reforzar
                                conocimientos.
                            </span>
                        </li>

                    </ul>

                </div>

            </div>


            <div class="col-lg-6"
                 data-aos="fade-up"
                 data-aos-delay="150">

                <div class="tla-card h-100">

                    <span class="section-subtitle">
                        Impacto
                    </span>

                    <h3 class="mt-3">
                        Cómo ayuda al proyecto educativo
                    </h3>

                    <p class="section-copy mb-0">
                        Los servicios de Tlamachtili buscan fortalecer una
                        práctica educativa más consciente, inclusiva y conectada
                        con las comunidades. La plataforma permite convertir
                        el aprendizaje en una experiencia progresiva y práctica.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
    SERVICIOS COMPLEMENTARIOS
========================================================= --}}
<section class="page-section compact">

    <div class="container">

        <div
            class="section-shell p-4 p-lg-5"
            data-aos="fade-up"
        >

            <div class="row g-4">

                <div class="col-lg-3">

                    <h3>Capacitación</h3>

                    <p class="section-copy mb-0">
                        Espacios formativos para desarrollar habilidades
                        en el aprendizaje de lenguas originarias.
                    </p>

                </div>


                <div class="col-lg-3">

                    <h3>Acompañamiento</h3>

                    <p class="section-copy mb-0">
                        Seguimiento del avance de cada usuario para facilitar
                        un proceso de aprendizaje ordenado y constante.
                    </p>

                </div>


                <div class="col-lg-3">

                    <h3>Material de apoyo</h3>

                    <p class="section-copy mb-0">
                        Recursos digitales, actividades y orientaciones para
                        reforzar la experiencia de estudio.
                    </p>

                </div>


                <div class="col-lg-3">

                    <h3>Motivación</h3>

                    <p class="section-copy mb-0">
                        Elementos de gamificación que impulsan la participación,
                        el interés y el compromiso con la formación.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
    JAVASCRIPT
========================================================= --}}
<script>

const cursosNahuatl = [

    /* ========================================================
       CURSO 1
    ======================================================== */
    {
        nivel: "Curso 1 · Básico",

        titulo: "Primeros pasos en Náhuatl",

        leccionTitulo: "Conociendo nuestras primeras palabras",

        leccionDescripcion:
            "Antes de responder, vamos a conocer algunas palabras básicas.",

        leccionExplicacion:
            "En este primer curso comenzarás a familiarizarte con palabras sencillas. No necesitas memorizar todo inmediatamente. Primero observa la palabra, conoce su significado y relaciónala con una imagen o situación.",

        consejo:
            "Relaciona cada palabra con algo que ya conozcas. Por ejemplo, cuando veas una palabra relacionada con agua, imagina un río, una lluvia o un vaso de agua. Las asociaciones pueden ayudarte a recordar.",

        objetivos: [
            "Reconocer palabras básicas.",
            "Relacionar palabras con su significado.",
            "Familiarizarte con vocabulario cotidiano.",
            "Aprender mediante asociaciones."
        ],

        vocabulario: [

            {
                palabra: "Atl",
                significado: "Agua",
                icono: "💧",
                ejemplo: "Relaciona esta palabra con el agua."
            },

            {
                palabra: "Calli",
                significado: "Casa",
                icono: "🏠",
                ejemplo: "Piensa en el lugar donde vives."
            },

            {
                palabra: "Tlalli",
                significado: "Tierra",
                icono: "🌎",
                ejemplo: "Relaciona la palabra con la tierra."
            },

            {
                palabra: "Metztli",
                significado: "Luna",
                icono: "🌙",
                ejemplo: "Piensa en la luna que vemos por la noche."
            },

            {
                palabra: "Cualli",
                significado: "Bueno / bien",
                icono: "👍",
                ejemplo: "Relaciona la palabra con algo positivo."
            }

        ],

        preguntas: [

            {
                pregunta: "¿Qué significa «atl»?",

                opciones: [
                    "Agua",
                    "Casa",
                    "Tierra",
                    "Luna"
                ],

                correcta: 0,

                explicacion:
                    "«Atl» se relaciona con el agua."
            },

            {
                pregunta: "¿Qué significa «calli»?",

                opciones: [
                    "Flor",
                    "Casa",
                    "Agua",
                    "Luna"
                ],

                correcta: 1,

                explicacion:
                    "«Calli» significa casa."
            },

            {
                pregunta: "¿Qué significa «tlalli»?",

                opciones: [
                    "Tierra",
                    "Fuego",
                    "Agua",
                    "Persona"
                ],

                correcta: 0,

                explicacion:
                    "«Tlalli» se relaciona con la tierra."
            },

            {
                pregunta: "¿Cuál de estas palabras se relaciona con la luna?",

                opciones: [
                    "Metztli",
                    "Calli",
                    "Atl",
                    "Tlalli"
                ],

                correcta: 0,

                explicacion:
                    "«Metztli» se relaciona con la luna."
            },

            {
                pregunta: "¿Qué palabra se relaciona con algo bueno o positivo?",

                opciones: [
                    "Atl",
                    "Cualli",
                    "Calli",
                    "Tlalli"
                ],

                correcta: 1,

                explicacion:
                    "«Cualli» se utiliza en expresiones relacionadas con lo bueno o agradable."
            }

        ]
    },


    /* ========================================================
       CURSO 2
    ======================================================== */
    {
        nivel: "Curso 2 · Básico",

        titulo: "Vocabulario cotidiano",

        leccionTitulo: "Ampliando nuestro vocabulario",

        leccionDescripcion:
            "Ahora vamos a ampliar las palabras que ya conocemos.",

        leccionExplicacion:
            "En este nivel comenzarás a relacionar palabras con diferentes situaciones. La idea no es solamente memorizar traducciones, sino aprender a reconocer el concepto cuando aparezca durante una actividad.",

        consejo:
            "Cuando aprendas una palabra nueva, intenta utilizarla mentalmente en una situación. Pregúntate: ¿dónde podría encontrar esta palabra?, ¿qué imagen representa?, ¿con qué otras palabras podría relacionarse?",

        objetivos: [
            "Ampliar el vocabulario.",
            "Relacionar palabras con situaciones.",
            "Reconocer palabras conocidas.",
            "Utilizar el contexto para aprender."
        ],

        vocabulario: [

            {
                palabra: "Atl",
                significado: "Agua",
                icono: "💧",
                ejemplo: "Puede relacionarse con ríos, lluvia o agua."
            },

            {
                palabra: "Calli",
                significado: "Casa",
                icono: "🏠",
                ejemplo: "Relacionada con una vivienda."
            },

            {
                palabra: "Tlalli",
                significado: "Tierra",
                icono: "🌱",
                ejemplo: "Puede relacionarse con el suelo y la tierra."
            },

            {
                palabra: "Metztli",
                significado: "Luna",
                icono: "🌙",
                ejemplo: "Relacionada con la noche."
            },

            {
                palabra: "Cualli",
                significado: "Bueno / bien",
                icono: "⭐",
                ejemplo: "Relacionada con algo positivo."
            }

        ],

        preguntas: [

            {
                pregunta: "¿Qué palabra se relaciona con «bueno» o «bien»?",

                opciones: [
                    "Cualli",
                    "Atl",
                    "Calli",
                    "Metztli"
                ],

                correcta: 0,

                explicacion:
                    "«Cualli» se relaciona con lo bueno o agradable."
            },

            {
                pregunta: "¿Con qué concepto relacionarías «metztli»?",

                opciones: [
                    "Casa",
                    "Luna",
                    "Agua",
                    "Tierra"
                ],

                correcta: 1,

                explicacion:
                    "«Metztli» se relaciona con la luna."
            },

            {
                pregunta: "¿Qué palabra se relaciona con una vivienda?",

                opciones: [
                    "Atl",
                    "Tlalli",
                    "Calli",
                    "Metztli"
                ],

                correcta: 2,

                explicacion:
                    "«Calli» significa casa."
            },

            {
                pregunta: "¿Qué palabra se relaciona con el agua?",

                opciones: [
                    "Atl",
                    "Cualli",
                    "Calli",
                    "Metztli"
                ],

                correcta: 0,

                explicacion:
                    "«Atl» se relaciona con el agua."
            },

            {
                pregunta: "¿Por qué es útil aprender vocabulario dentro de un contexto?",

                opciones: [
                    "Porque facilita relacionar las palabras con situaciones reales",
                    "Porque evita practicar",
                    "Porque elimina la necesidad de escuchar",
                    "Porque todas las palabras significan lo mismo"
                ],

                correcta: 0,

                explicacion:
                    "El contexto ayuda a comprender cómo se utilizan las palabras."
            }

        ]
    },


    /* ========================================================
       CURSO 3
    ======================================================== */
    {
        nivel: "Curso 3 · Intermedio",

        titulo: "Frases sencillas",

        leccionTitulo: "De palabras a ideas",

        leccionDescripcion:
            "Ahora aprenderás a interpretar palabras dentro de un contexto.",

        leccionExplicacion:
            "Hasta ahora hemos trabajado principalmente con palabras. En este nivel comenzarás a pensar en ideas completas. Una palabra puede ser más fácil de comprender cuando observamos qué está ocurriendo alrededor de ella.",

        consejo:
            "No intentes traducir absolutamente todo. Primero busca entender la idea general. Después revisa las palabras que no conozcas.",

        objetivos: [
            "Comprender palabras dentro de un contexto.",
            "Relacionar palabras con ideas.",
            "Identificar información importante.",
            "Desarrollar estrategias de comprensión."
        ],

        vocabulario: [

            {
                palabra: "Palabra",
                significado: "Elemento básico de una expresión",
                icono: "📝",
                ejemplo: "Primero reconoce palabras conocidas."
            },

            {
                palabra: "Contexto",
                significado: "Situación que rodea una expresión",
                icono: "💬",
                ejemplo: "El contexto puede darte pistas."
            },

            {
                palabra: "Imagen",
                significado: "Apoyo visual",
                icono: "🖼️",
                ejemplo: "Una imagen puede ayudarte a recordar."
            },

            {
                palabra: "Escucha",
                significado: "Atención a la pronunciación",
                icono: "🎧",
                ejemplo: "Escuchar ayuda a familiarizarte con los sonidos."
            }

        ],

        preguntas: [

            {
                pregunta: "Si una actividad presenta una palabra nueva junto con una imagen de agua, ¿qué estrategia puede ayudarte?",

                opciones: [
                    "Relacionar la imagen con la palabra",
                    "Ignorar la imagen",
                    "Memorizar una lista diferente",
                    "No repetir la palabra"
                ],

                correcta: 0,

                explicacion:
                    "Relacionar una palabra con una imagen puede facilitar su asociación y recuerdo."
            },

            {
                pregunta: "¿Qué elemento puede ayudarte a comprender una frase nueva?",

                opciones: [
                    "El contexto",
                    "Ignorar las palabras conocidas",
                    "Aprenderla sin comprenderla",
                    "No escucharla"
                ],

                correcta: 0,

                explicacion:
                    "El contexto puede proporcionar pistas sobre el significado."
            },

            {
                pregunta: "¿Qué deberías hacer si no reconoces una palabra?",

                opciones: [
                    "Revisar el contexto y consultar su significado",
                    "Abandonar el ejercicio",
                    "Inventar siempre la respuesta",
                    "Evitar volver a verla"
                ],

                correcta: 0,

                explicacion:
                    "Revisar el contexto y consultar el significado convierte la duda en una oportunidad de aprendizaje."
            },

            {
                pregunta: "¿Qué habilidad se trabaja al pasar de palabras aisladas a frases?",

                opciones: [
                    "Comprensión contextual",
                    "Solo memorización",
                    "Velocidad de escritura",
                    "Diseño gráfico"
                ],

                correcta: 0,

                explicacion:
                    "Las frases permiten comenzar a interpretar palabras dentro de un contexto."
            },

            {
                pregunta: "¿Qué ayuda a mejorar la retención del vocabulario?",

                opciones: [
                    "Practicarlo repetidamente en diferentes contextos",
                    "Estudiarlo una sola vez",
                    "No utilizarlo",
                    "Evitar los ejercicios"
                ],

                correcta: 0,

                explicacion:
                    "La práctica repetida y contextualizada ayuda a reforzar el aprendizaje."
            }

        ]
    },


    /* ========================================================
       CURSO 4
    ======================================================== */
    {
        nivel: "Curso 4 · Intermedio",

        titulo: "Comprensión y construcción",

        leccionTitulo: "Comprender antes de traducir",

        leccionDescripcion:
            "En este nivel aprenderás estrategias para interpretar expresiones.",

        leccionExplicacion:
            "Cuando una expresión es más compleja, traducir palabra por palabra no siempre es suficiente. Primero debes observar la situación, reconocer las palabras que conoces y utilizar las pistas que ofrece el contexto.",

        consejo:
            "Si encuentras una palabra desconocida, no te detengas inmediatamente. Primero intenta descubrir de qué trata la expresión y después revisa la palabra.",

        objetivos: [
            "Comprender expresiones mediante el contexto.",
            "Relacionar diferentes elementos de una oración.",
            "Identificar información importante.",
            "Utilizar estrategias para resolver dudas."
        ],

        vocabulario: [

            {
                palabra: "Contexto",
                significado: "Situación en la que aparece una expresión",
                icono: "💬",
                ejemplo: "Ayuda a interpretar palabras desconocidas."
            },

            {
                palabra: "Comprensión",
                significado: "Capacidad de entender una idea",
                icono: "🧠",
                ejemplo: "Busca primero entender la idea general."
            },

            {
                palabra: "Práctica",
                significado: "Repetición para mejorar",
                icono: "🔄",
                ejemplo: "Practicar ayuda a reforzar conocimientos."
            },

            {
                palabra: "Retroalimentación",
                significado: "Información que ayuda a mejorar",
                icono: "💡",
                ejemplo: "Los errores pueden mostrar qué debes repasar."
            }

        ],

        preguntas: [

            {
                pregunta: "Cuando una palabra tiene diferentes usos dependiendo del contexto, ¿qué debes revisar?",

                opciones: [
                    "La situación en la que aparece",
                    "Solo su primera traducción",
                    "El tamaño de la palabra",
                    "La cantidad de letras"
                ],

                correcta: 0,

                explicacion:
                    "El contexto permite comprender cómo funciona una palabra en una situación determinada."
            },

            {
                pregunta: "¿Qué estrategia es adecuada cuando una oración contiene una palabra desconocida?",

                opciones: [
                    "Intentar comprender la idea general antes de consultar",
                    "Dejar de leer inmediatamente",
                    "Cambiar todas las palabras",
                    "Ignorar toda la oración"
                ],

                correcta: 0,

                explicacion:
                    "Comprender primero la idea general puede darte pistas para interpretar la palabra."
            },

            {
                pregunta: "¿Qué diferencia existe entre memorizar una palabra y aprender a utilizarla?",

                opciones: [
                    "Utilizarla implica comprender su contexto",
                    "No existe ninguna diferencia",
                    "Memorizar siempre es suficiente",
                    "Utilizarla significa no conocer su significado"
                ],

                correcta: 0,

                explicacion:
                    "Aprender a utilizar una palabra implica comprender cómo funciona dentro de diferentes contextos."
            },

            {
                pregunta: "¿Qué puede ayudarte a detectar un error durante una actividad?",

                opciones: [
                    "Comparar tu respuesta con la retroalimentación",
                    "Ignorar el resultado",
                    "Repetir siempre la misma respuesta",
                    "Cerrar la actividad"
                ],

                correcta: 0,

                explicacion:
                    "La retroalimentación permite identificar qué ocurrió y cómo mejorar."
            },

            {
                pregunta: "¿Qué característica debería tener una actividad progresiva?",

                opciones: [
                    "Aumentar gradualmente su dificultad",
                    "Comenzar siempre con el nivel más difícil",
                    "No permitir errores",
                    "Evitar la práctica"
                ],

                correcta: 0,

                explicacion:
                    "Una ruta progresiva aumenta la dificultad poco a poco."
            }

        ]
    },


    /* ========================================================
       CURSO 5
    ======================================================== */
    {
        nivel: "Curso 5 · Avanzado",

        titulo: "Integración del aprendizaje",

        leccionTitulo: "Utilizando todo lo aprendido",

        leccionDescripcion:
            "En este nivel integrarás vocabulario, comprensión y estrategias.",

        leccionExplicacion:
            "El objetivo de este último nivel es que puedas utilizar los conocimientos adquiridos para resolver situaciones nuevas. Aprender una lengua no consiste únicamente en memorizar palabras, sino en comprenderlas y utilizarlas dentro de un contexto.",

        consejo:
            "Cuando cometas un error, no lo veas solamente como una respuesta incorrecta. Pregúntate qué concepto necesitas repasar y vuelve a intentarlo.",

        objetivos: [
            "Integrar conocimientos anteriores.",
            "Aplicar vocabulario en diferentes contextos.",
            "Reflexionar sobre los errores.",
            "Desarrollar hábitos de aprendizaje."
        ],

        vocabulario: [

            {
                palabra: "Repaso",
                significado: "Revisión de contenidos anteriores",
                icono: "📚",
                ejemplo: "Repasa los conceptos que todavía te cuestan."
            },

            {
                palabra: "Práctica",
                significado: "Ejercicio constante",
                icono: "✏️",
                ejemplo: "La práctica ayuda a consolidar lo aprendido."
            },

            {
                palabra: "Contexto",
                significado: "Situación en la que se utiliza una expresión",
                icono: "💬",
                ejemplo: "Utiliza el contexto para obtener pistas."
            },

            {
                palabra: "Aplicación",
                significado: "Uso de lo aprendido",
                icono: "🎯",
                ejemplo: "Intenta aplicar lo aprendido en situaciones nuevas."
            }

        ],

        preguntas: [

            {
                pregunta: "¿Cuál es una buena estrategia para aprender una lengua de manera constante?",

                opciones: [
                    "Combinar estudio, práctica, escucha y revisión",
                    "Estudiar una vez y no volver a practicar",
                    "Memorizar listas sin contexto",
                    "Evitar cometer errores"
                ],

                correcta: 0,

                explicacion:
                    "Combinar diferentes formas de práctica ayuda a reforzar el aprendizaje."
            },

            {
                pregunta: "Si una respuesta es incorrecta, ¿qué debería hacer el estudiante?",

                opciones: [
                    "Revisar el error y comprender por qué ocurrió",
                    "Ignorar la respuesta",
                    "Eliminar el ejercicio",
                    "Dejar de practicar"
                ],

                correcta: 0,

                explicacion:
                    "Revisar el error permite identificar qué concepto necesita reforzarse."
            },

            {
                pregunta: "¿Por qué es importante considerar la variante de una lengua originaria?",

                opciones: [
                    "Porque puede haber diferencias regionales de vocabulario y uso",
                    "Porque todas las variantes son idénticas",
                    "Porque las variantes no existen",
                    "Porque elimina la necesidad de contexto"
                ],

                correcta: 0,

                explicacion:
                    "Las lenguas pueden presentar variaciones regionales, por lo que el material debe indicar la variante que está enseñando."
            },

            {
                pregunta: "¿Qué demuestra mejor que un estudiante está avanzando?",

                opciones: [
                    "Que puede aplicar lo aprendido en nuevos contextos",
                    "Que memoriza una sola lista",
                    "Que nunca se equivoca",
                    "Que termina rápidamente"
                ],

                correcta: 0,

                explicacion:
                    "Aplicar los conocimientos en situaciones nuevas demuestra una comprensión más amplia."
            },

            {
                pregunta: "¿Cuál debería ser el objetivo de una plataforma educativa?",

                opciones: [
                    "Facilitar un aprendizaje significativo y continuo",
                    "Hacer que el estudiante memorice sin comprender",
                    "Evitar la práctica",
                    "Evaluar sin retroalimentar"
                ],

                correcta: 0,

                explicacion:
                    "Una plataforma educativa debe acompañar el aprendizaje y utilizar la retroalimentación para ayudar al estudiante a mejorar."
            }

        ]
    }

];


/* =========================================================
   CURSOS DE MAYA
========================================================= */

const cursosMaya = [

    {
        nivel: "Curso 1 · Básico",
        titulo: "Primeros pasos en Maya",
        leccionTitulo: "Conociendo nuestras primeras palabras",
        leccionDescripcion:
            "Antes de responder, vamos a conocer algunas palabras básicas del Maya.",

        leccionExplicacion:
            "En este primer curso comenzarás a familiarizarte con palabras sencillas. Observa la palabra, conoce su significado y relaciónala con una imagen o situación.",

        consejo:
            "Relaciona cada palabra con algo que ya conozcas. Repite las palabras y vuelve a ellas durante la práctica.",

        objetivos: [
            "Reconocer palabras básicas.",
            "Relacionar palabras con su significado.",
            "Familiarizarte con vocabulario cotidiano.",
            "Aprender mediante asociaciones."
        ],

        vocabulario: [
            {
                palabra: "Ja'",
                significado: "Agua",
                icono: "💧",
                ejemplo: "Relaciona esta palabra con el agua."
            },
            {
                palabra: "Naj",
                significado: "Casa",
                icono: "🏠",
                ejemplo: "Piensa en el lugar donde vives."
            },
            {
                palabra: "K'iin",
                significado: "Día / sol",
                icono: "☀️",
                ejemplo: "Relaciona la palabra con el día o el sol."
            },
            {
                palabra: "Ixik",
                significado: "Mujer",
                icono: "👩",
                ejemplo: "Relaciona la palabra con una mujer."
            },
            {
                palabra: "Wíinik",
                significado: "Persona",
                icono: "🧑",
                ejemplo: "Piensa en una persona."
            }
        ],

        preguntas: [
            {
                pregunta: "¿Qué significa «ja'»?",
                opciones: ["Agua", "Casa", "Mujer", "Persona"],
                correcta: 0,
                explicacion: "«Ja'» significa agua."
            },
            {
                pregunta: "¿Qué palabra se relaciona con una casa?",
                opciones: ["K'iin", "Naj", "Ja'", "Ixik"],
                correcta: 1,
                explicacion: "«Naj» se relaciona con casa."
            },
            {
                pregunta: "¿Qué significa «ixik»?",
                opciones: ["Sol", "Agua", "Mujer", "Casa"],
                correcta: 2,
                explicacion: "«Ixik» significa mujer."
            },
            {
                pregunta: "¿Qué palabra se relaciona con una persona?",
                opciones: ["Naj", "Ja'", "Wíinik", "K'iin"],
                correcta: 2,
                explicacion: "«Wíinik» se relaciona con persona."
            },
            {
                pregunta: "¿Qué palabra se relaciona con el día o el sol?",
                opciones: ["Ixik", "K'iin", "Naj", "Ja'"],
                correcta: 1,
                explicacion: "«K'iin» se relaciona con día y sol."
            }
        ]
    },

    {
        nivel: "Curso 2 · Básico",
        titulo: "Vocabulario cotidiano",
        leccionTitulo: "Ampliando nuestro vocabulario",
        leccionDescripcion:
            "Ahora vamos a ampliar las palabras que utilizas para reconocer situaciones cotidianas.",

        leccionExplicacion:
            "Aprender vocabulario dentro de situaciones ayuda a relacionar una palabra con una idea y no solamente con una traducción.",

        consejo:
            "Cuando aprendas una palabra nueva, imagina una situación en la que podrías encontrarla.",

        objetivos: [
            "Ampliar el vocabulario.",
            "Relacionar palabras con situaciones.",
            "Reconocer palabras conocidas.",
            "Utilizar el contexto para aprender."
        ],

        vocabulario: [
            {
                palabra: "Ja'",
                significado: "Agua",
                icono: "💧",
                ejemplo: "Puede relacionarse con beber, lluvia o un cenote."
            },
            {
                palabra: "Naj",
                significado: "Casa",
                icono: "🏠",
                ejemplo: "Relacionada con una vivienda."
            },
            {
                palabra: "K'iin",
                significado: "Día / sol",
                icono: "☀️",
                ejemplo: "Relacionada con el día y el sol."
            },
            {
                palabra: "Ixik",
                significado: "Mujer",
                icono: "👩",
                ejemplo: "Relacionada con una persona de sexo femenino."
            },
            {
                palabra: "Wíinik",
                significado: "Persona",
                icono: "🧑",
                ejemplo: "Puede utilizarse al hablar de una persona."
            }
        ],

        preguntas: [
            {
                pregunta: "¿Qué palabra se relaciona con el agua?",
                opciones: ["Naj", "Ja'", "Ixik", "Wíinik"],
                correcta: 1,
                explicacion: "«Ja'» significa agua."
            },
            {
                pregunta: "¿Qué palabra se relaciona con una vivienda?",
                opciones: ["K'iin", "Ja'", "Naj", "Ixik"],
                correcta: 2,
                explicacion: "«Naj» se relaciona con casa."
            },
            {
                pregunta: "¿Con qué concepto relacionarías «k'iin»?",
                opciones: ["Día / sol", "Casa", "Mujer", "Agua"],
                correcta: 0,
                explicacion: "«K'iin» se relaciona con día y sol."
            },
            {
                pregunta: "¿Qué palabra se relaciona con una mujer?",
                opciones: ["Wíinik", "Ixik", "Naj", "Ja'"],
                correcta: 1,
                explicacion: "«Ixik» significa mujer."
            },
            {
                pregunta: "¿Por qué es útil aprender vocabulario dentro de un contexto?",
                opciones: [
                    "Porque facilita relacionar las palabras con situaciones reales",
                    "Porque evita practicar",
                    "Porque todas las palabras significan lo mismo",
                    "Porque elimina la necesidad de comprender"
                ],
                correcta: 0,
                explicacion: "El contexto ayuda a comprender cómo se utilizan las palabras."
            }
        ]
    },

    {
        nivel: "Curso 3 · Intermedio",
        titulo: "Frases sencillas",
        leccionTitulo: "De palabras a ideas",
        leccionDescripcion:
            "Ahora aprenderás a interpretar palabras dentro de un contexto.",

        leccionExplicacion:
            "Una palabra puede ser más fácil de comprender cuando observamos qué ocurre alrededor de ella. En este nivel comenzarás a pensar en ideas completas.",

        consejo:
            "No intentes traducir absolutamente todo. Primero busca entender la idea general y después revisa las palabras que no conozcas.",

        objetivos: [
            "Comprender palabras dentro de un contexto.",
            "Relacionar palabras con ideas.",
            "Identificar información importante.",
            "Desarrollar estrategias de comprensión."
        ],

        vocabulario: [
            {
                palabra: "Palabra",
                significado: "Elemento básico de una expresión",
                icono: "📝",
                ejemplo: "Primero reconoce las palabras conocidas."
            },
            {
                palabra: "Contexto",
                significado: "Situación que rodea una expresión",
                icono: "💬",
                ejemplo: "El contexto puede darte pistas."
            },
            {
                palabra: "Imagen",
                significado: "Apoyo visual",
                icono: "🖼️",
                ejemplo: "Una imagen puede ayudarte a recordar."
            },
            {
                palabra: "Escucha",
                significado: "Atención a la pronunciación",
                icono: "🎧",
                ejemplo: "Escuchar ayuda a familiarizarte con los sonidos."
            }
        ],

        preguntas: [
            {
                pregunta: "Si una palabra nueva aparece junto con una imagen de agua, ¿qué estrategia puede ayudarte?",
                opciones: [
                    "Relacionar la imagen con la palabra",
                    "Ignorar la imagen",
                    "Evitar repetir la palabra",
                    "Cambiar la actividad"
                ],
                correcta: 0,
                explicacion: "Relacionar una palabra con una imagen facilita su asociación y recuerdo."
            },
            {
                pregunta: "¿Qué elemento puede ayudarte a comprender una frase nueva?",
                opciones: ["El contexto", "Ignorar las palabras conocidas", "No escucharla", "Evitar practicar"],
                correcta: 0,
                explicacion: "El contexto proporciona pistas sobre el significado."
            },
            {
                pregunta: "¿Qué deberías hacer si no reconoces una palabra?",
                opciones: [
                    "Revisar el contexto y consultar su significado",
                    "Abandonar el ejercicio",
                    "Inventar siempre la respuesta",
                    "Evitar volver a verla"
                ],
                correcta: 0,
                explicacion: "Revisar el contexto convierte la duda en una oportunidad de aprendizaje."
            },
            {
                pregunta: "¿Qué habilidad se trabaja al pasar de palabras aisladas a frases?",
                opciones: ["Comprensión contextual", "Solo memorización", "Velocidad de escritura", "Diseño gráfico"],
                correcta: 0,
                explicacion: "Las frases permiten interpretar palabras dentro de un contexto."
            },
            {
                pregunta: "¿Qué ayuda a mejorar la retención del vocabulario?",
                opciones: [
                    "Practicarlo repetidamente en diferentes contextos",
                    "Estudiarlo una sola vez",
                    "No utilizarlo",
                    "Evitar los ejercicios"
                ],
                correcta: 0,
                explicacion: "La práctica repetida y contextualizada ayuda a reforzar el aprendizaje."
            }
        ]
    },

    {
        nivel: "Curso 4 · Intermedio",
        titulo: "Comprensión y construcción",
        leccionTitulo: "Comprender antes de traducir",
        leccionDescripcion:
            "En este nivel aprenderás estrategias para interpretar expresiones.",

        leccionExplicacion:
            "Cuando una expresión es más compleja, traducir palabra por palabra no siempre es suficiente. Primero observa la situación, reconoce las palabras que conoces y utiliza las pistas del contexto.",

        consejo:
            "Si encuentras una palabra desconocida, primero intenta descubrir de qué trata la expresión y después revisa la palabra.",

        objetivos: [
            "Comprender expresiones mediante el contexto.",
            "Relacionar diferentes elementos de una oración.",
            "Identificar información importante.",
            "Utilizar estrategias para resolver dudas."
        ],

        vocabulario: [
            {
                palabra: "Contexto",
                significado: "Situación en la que aparece una expresión",
                icono: "💬",
                ejemplo: "Ayuda a interpretar palabras desconocidas."
            },
            {
                palabra: "Comprensión",
                significado: "Capacidad de entender una idea",
                icono: "🧠",
                ejemplo: "Busca primero entender la idea general."
            },
            {
                palabra: "Práctica",
                significado: "Repetición para mejorar",
                icono: "🔄",
                ejemplo: "Practicar ayuda a reforzar conocimientos."
            },
            {
                palabra: "Retroalimentación",
                significado: "Información que ayuda a mejorar",
                icono: "💡",
                ejemplo: "Los errores pueden mostrar qué debes repasar."
            }
        ],

        preguntas: [
            {
                pregunta: "Cuando una palabra tiene diferentes usos dependiendo del contexto, ¿qué debes revisar?",
                opciones: [
                    "La situación en la que aparece",
                    "Solo su primera traducción",
                    "El tamaño de la palabra",
                    "La cantidad de letras"
                ],
                correcta: 0,
                explicacion: "El contexto permite comprender cómo funciona una palabra en una situación determinada."
            },
            {
                pregunta: "¿Qué estrategia es adecuada cuando una oración contiene una palabra desconocida?",
                opciones: [
                    "Intentar comprender la idea general antes de consultar",
                    "Dejar de leer inmediatamente",
                    "Cambiar todas las palabras",
                    "Ignorar toda la oración"
                ],
                correcta: 0,
                explicacion: "Comprender primero la idea general puede darte pistas para interpretar la palabra."
            },
            {
                pregunta: "¿Qué diferencia existe entre memorizar una palabra y aprender a utilizarla?",
                opciones: [
                    "Utilizarla implica comprender su contexto",
                    "No existe ninguna diferencia",
                    "Memorizar siempre es suficiente",
                    "Utilizarla significa no conocer su significado"
                ],
                correcta: 0,
                explicacion: "Aprender a utilizar una palabra implica comprender cómo funciona dentro de diferentes contextos."
            },
            {
                pregunta: "¿Qué puede ayudarte a detectar un error durante una actividad?",
                opciones: [
                    "Comparar tu respuesta con la retroalimentación",
                    "Ignorar el resultado",
                    "Repetir siempre la misma respuesta",
                    "Cerrar la actividad"
                ],
                correcta: 0,
                explicacion: "La retroalimentación permite identificar qué ocurrió y cómo mejorar."
            },
            {
                pregunta: "¿Qué característica debería tener una actividad progresiva?",
                opciones: [
                    "Aumentar gradualmente su dificultad",
                    "Comenzar siempre con el nivel más difícil",
                    "No permitir errores",
                    "Evitar la práctica"
                ],
                correcta: 0,
                explicacion: "Una ruta progresiva aumenta la dificultad poco a poco."
            }
        ]
    },

    {
        nivel: "Curso 5 · Avanzado",
        titulo: "Integración del aprendizaje",
        leccionTitulo: "Utilizando todo lo aprendido",
        leccionDescripcion:
            "En este nivel integrarás vocabulario, comprensión y estrategias.",

        leccionExplicacion:
            "El objetivo de este último nivel es utilizar los conocimientos adquiridos para resolver situaciones nuevas. Aprender una lengua no consiste únicamente en memorizar palabras, sino en comprenderlas y utilizarlas dentro de un contexto.",

        consejo:
            "Cuando cometas un error, identifica qué concepto necesitas repasar y vuelve a intentarlo.",

        objetivos: [
            "Integrar conocimientos anteriores.",
            "Aplicar vocabulario en diferentes contextos.",
            "Reflexionar sobre los errores.",
            "Desarrollar hábitos de aprendizaje."
        ],

        vocabulario: [
            {
                palabra: "Repaso",
                significado: "Revisión de contenidos anteriores",
                icono: "📚",
                ejemplo: "Repasa los conceptos que todavía te cuestan."
            },
            {
                palabra: "Práctica",
                significado: "Ejercicio constante",
                icono: "✏️",
                ejemplo: "La práctica ayuda a consolidar lo aprendido."
            },
            {
                palabra: "Contexto",
                significado: "Situación en la que se utiliza una expresión",
                icono: "💬",
                ejemplo: "Utiliza el contexto para obtener pistas."
            },
            {
                palabra: "Aplicación",
                significado: "Uso de lo aprendido",
                icono: "🎯",
                ejemplo: "Intenta aplicar lo aprendido en situaciones nuevas."
            }
        ],

        preguntas: [
            {
                pregunta: "¿Cuál es una buena estrategia para aprender una lengua de manera constante?",
                opciones: [
                    "Combinar estudio, práctica, escucha y revisión",
                    "Estudiar una vez y no volver a practicar",
                    "Memorizar listas sin contexto",
                    "Evitar cometer errores"
                ],
                correcta: 0,
                explicacion: "Combinar diferentes formas de práctica ayuda a reforzar el aprendizaje."
            },
            {
                pregunta: "Si una respuesta es incorrecta, ¿qué debería hacer el estudiante?",
                opciones: [
                    "Revisar el error y comprender por qué ocurrió",
                    "Ignorar la respuesta",
                    "Eliminar el ejercicio",
                    "Dejar de practicar"
                ],
                correcta: 0,
                explicacion: "Revisar el error permite identificar qué concepto necesita reforzarse."
            },
            {
                pregunta: "¿Por qué es importante considerar la variante de una lengua originaria?",
                opciones: [
                    "Porque puede haber diferencias regionales de vocabulario y uso",
                    "Porque todas las variantes son idénticas",
                    "Porque las variantes no existen",
                    "Porque elimina la necesidad de contexto"
                ],
                correcta: 0,
                explicacion: "Las lenguas pueden presentar variaciones regionales, por lo que el material debe indicar la variante que está enseñando."
            },
            {
                pregunta: "¿Qué demuestra mejor que un estudiante está avanzando?",
                opciones: [
                    "Que puede aplicar lo aprendido en nuevos contextos",
                    "Que memoriza una sola lista",
                    "Que nunca se equivoca",
                    "Que termina rápidamente"
                ],
                correcta: 0,
                explicacion: "Aplicar los conocimientos en situaciones nuevas demuestra una comprensión más amplia."
            },
            {
                pregunta: "¿Cuál debería ser el objetivo de una plataforma educativa?",
                opciones: [
                    "Facilitar un aprendizaje significativo y continuo",
                    "Hacer que el estudiante memorice sin comprender",
                    "Evitar la práctica",
                    "Evaluar sin retroalimentar"
                ],
                correcta: 0,
                explicacion: "Una plataforma educativa debe acompañar el aprendizaje y utilizar la retroalimentación para ayudar al estudiante a mejorar."
            }
        ]
    }

];


let cursoActual = 0;


let preguntaActual = 0;

let puntuacion = 0;

let respuestasIncorrectas = [];

let cursoModal;



/* =========================================================
   INICIAR MODAL
========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    const modalElement =
        document.getElementById('cursoModal');

    if (
        modalElement &&
        typeof bootstrap !== 'undefined'
    ) {

        cursoModal =
            new bootstrap.Modal(modalElement);

    }

});



/* =========================================================
   ABRIR CURSO
========================================================= */

function abrirCurso(indice, idioma = 'nahuatl') {

    cursoActual = indice;

    idiomaActual = idioma;

    cursosActivos =
        idioma === 'maya'
            ? cursosMaya
            : cursosNahuatl;

    preguntaActual = 0;

    puntuacion = 0;

    respuestasIncorrectas = [];


    const curso =
        cursosActivos[indice];


    document.getElementById('modalNivel').textContent =
        curso.nivel;


    document.getElementById('modalTitulo').textContent =
        curso.titulo;


    /*
     * MINI LECCIÓN
     */

    document.getElementById('leccionTitulo').textContent =
        curso.leccionTitulo;


    document.getElementById('leccionDescripcion').textContent =
        curso.leccionDescripcion;


    document.getElementById('leccionExplicacion').textContent =
        curso.leccionExplicacion;


    document.getElementById('consejoCurso').textContent =
        curso.consejo;



    /* =====================================================
       OBJETIVOS
    ===================================================== */

    const objetivos =
        document.getElementById('objetivosCurso');

    objetivos.innerHTML = '';


    curso.objetivos.forEach(function (objetivo) {

        objetivos.innerHTML += `

            <li>

                <i class="bi bi-check-circle-fill"></i>

                <span>
                    ${objetivo}
                </span>

            </li>

        `;

    });



    /* =====================================================
       VOCABULARIO
    ===================================================== */

    const vocabulario =
        document.getElementById('vocabularioCurso');

    vocabulario.innerHTML = '';


    curso.vocabulario.forEach(function (item) {

        vocabulario.innerHTML += `

            <div class="col-md-6">

                <div class="tla-card h-100">

                    <div class="d-flex align-items-center gap-3">

                        <div
                            style="
                                font-size: 2rem;
                                min-width: 48px;
                            "
                        >
                            ${item.icono}
                        </div>

                        <div>

                            <h5 class="mb-1">
                                ${item.palabra}
                            </h5>

                            <strong>
                                ${item.significado}
                            </strong>

                        </div>

                    </div>

                    <p class="text-muted small mt-3 mb-0">
                        ${item.ejemplo}
                    </p>

                </div>

            </div>

        `;

    });



    /*
     * MOSTRAR MINI LECCIÓN
     */

    document.getElementById('leccionCurso').style.display =
        'block';

    document.getElementById('preguntasCurso').style.display =
        'none';

    document.getElementById('resultadoCurso').style.display =
        'none';



    if (cursoModal) {

        cursoModal.show();

    }

}



/* =========================================================
   INICIAR PREGUNTAS
========================================================= */

function iniciarPreguntas() {

    preguntaActual = 0;

    puntuacion = 0;

    respuestasIncorrectas = [];


    document.getElementById('leccionCurso').style.display =
        'none';

    document.getElementById('preguntasCurso').style.display =
        'block';

    document.getElementById('resultadoCurso').style.display =
        'none';


    mostrarPregunta();

}



/* =========================================================
   MOSTRAR PREGUNTA
========================================================= */

function mostrarPregunta() {

    const curso =
        cursosActivos[cursoActual];


    const pregunta =
        curso.preguntas[preguntaActual];


    const total =
        curso.preguntas.length;



    document.getElementById('contadorPregunta').textContent =
        `Pregunta ${preguntaActual + 1} de ${total}`;


    document.getElementById('barraProgreso').style.width =
        `${((preguntaActual + 1) / total) * 100}%`;


    document.getElementById('textoPregunta').textContent =
        pregunta.pregunta;



    const contenedor =
        document.getElementById('opcionesPregunta');


    contenedor.innerHTML = '';



    pregunta.opciones.forEach(function (opcion, indice) {

        const boton =
            document.createElement('button');


        boton.type = 'button';


        boton.className =
            'btn btn-outline-primary w-100 text-start mb-2 opcion-respuesta';


        boton.innerHTML = `

            <strong>
                ${String.fromCharCode(65 + indice)}.
            </strong>

            ${opcion}

        `;


        boton.onclick = function () {

            responderPregunta(indice);

        };


        contenedor.appendChild(boton);

    });



    document.getElementById('retroalimentacion').style.display =
        'none';


    document.getElementById('btnSiguiente').disabled =
        true;



    if (
        preguntaActual ===
        total - 1
    ) {

        document.getElementById('btnSiguiente').innerHTML =

            `Ver resultado
             <i class="bi bi-trophy ms-2"></i>`;

    } else {

        document.getElementById('btnSiguiente').innerHTML =

            `Siguiente
             <i class="bi bi-arrow-right ms-2"></i>`;

    }

}



/* =========================================================
   RESPONDER PREGUNTA
========================================================= */

function responderPregunta(indiceSeleccionado) {

    const curso =
        cursosActivos[cursoActual];


    const pregunta =
        curso.preguntas[preguntaActual];


    const botones =
        document.querySelectorAll(
            '.opcion-respuesta'
        );


    botones.forEach(function (boton) {

        boton.disabled = true;

    });



    const esCorrecta =
        indiceSeleccionado ===
        pregunta.correcta;



    if (esCorrecta) {

        puntuacion++;


        botones[indiceSeleccionado]
            .classList
            .remove('btn-outline-primary');


        botones[indiceSeleccionado]
            .classList
            .add('btn-success');


        mostrarRetroalimentacion(

            true,

            '¡Muy bien! Respuesta correcta.',

            pregunta.explicacion

        );

    } else {

        botones[indiceSeleccionado]
            .classList
            .remove('btn-outline-primary');


        botones[indiceSeleccionado]
            .classList
            .add('btn-danger');



        botones[pregunta.correcta]
            .classList
            .remove('btn-outline-primary');


        botones[pregunta.correcta]
            .classList
            .add('btn-success');



        respuestasIncorrectas.push({

            pregunta:
                pregunta.pregunta,

            respuestaUsuario:
                pregunta.opciones[
                    indiceSeleccionado
                ],

            respuestaCorrecta:
                pregunta.opciones[
                    pregunta.correcta
                ],

            explicacion:
                pregunta.explicacion

        });



        mostrarRetroalimentacion(

            false,

            'Vamos a revisarlo.',

            `Tu respuesta no fue correcta. La respuesta correcta era "${pregunta.opciones[pregunta.correcta]}". ${pregunta.explicacion}`

        );

    }



    document.getElementById('btnSiguiente').disabled =
        false;

}



/* =========================================================
   RETROALIMENTACIÓN
========================================================= */

function mostrarRetroalimentacion(
    correcta,
    titulo,
    texto
) {

    const caja =
        document.getElementById(
            'retroalimentacion'
        );


    const tituloElemento =
        document.getElementById(
            'retroTitulo'
        );


    const textoElemento =
        document.getElementById(
            'retroTexto'
        );



    caja.style.display =
        'block';



    if (correcta) {

        caja.className =
            'alert alert-success mb-4';


        tituloElemento.innerHTML = `

            <i class="bi bi-check-circle-fill me-2"></i>

            ${titulo}

        `;

    } else {

        caja.className =
            'alert alert-danger mb-4';


        tituloElemento.innerHTML = `

            <i class="bi bi-lightbulb-fill me-2"></i>

            ${titulo}

        `;

    }



    textoElemento.textContent =
        texto;

}



/* =========================================================
   SIGUIENTE PREGUNTA
========================================================= */

function siguientePregunta() {

    const curso =
        cursosActivos[cursoActual];


    if (
        preguntaActual <
        curso.preguntas.length - 1
    ) {

        preguntaActual++;

        mostrarPregunta();

    } else {

        mostrarResultado();

    }

}



/* =========================================================
   RESULTADO
========================================================= */

function mostrarResultado() {

    const curso =
        cursosActivos[cursoActual];


    const total =
        curso.preguntas.length;


    const porcentaje =
        Math.round(
            (puntuacion / total) * 100
        );



    document.getElementById('preguntasCurso').style.display =
        'none';


    document.getElementById('resultadoCurso').style.display =
        'block';



    document.getElementById('resultadoPuntos').textContent =
        `${puntuacion}/${total}`;



    const mensaje =
        document.getElementById(
            'mensajeResultado'
        );



    if (porcentaje >= 80) {

        mensaje.className =
            'alert alert-success';


        mensaje.textContent =
            `¡Excelente trabajo! Obtuviste ${porcentaje}%. Has demostrado un buen dominio de los contenidos de este curso.`;

    }

    else if (porcentaje >= 60) {

        mensaje.className =
            'alert alert-warning';


        mensaje.textContent =
            `Buen esfuerzo. Obtuviste ${porcentaje}%. Te recomendamos repasar las preguntas que fallaste antes de continuar.`;

    }

    else {

        mensaje.className =
            'alert alert-danger';


        mensaje.textContent =
            `Obtuviste ${porcentaje}%. No te preocupes. Revisa la retroalimentación y vuelve a intentarlo.`;

    }



    mostrarErrores();

}



/* =========================================================
   MOSTRAR ERRORES
========================================================= */

function mostrarErrores() {

    const contenedor =
        document.getElementById(
            'erroresResultado'
        );



    /*
     * SIN ERRORES
     */

    if (
        respuestasIncorrectas.length === 0
    ) {

        contenedor.innerHTML = `

            <div class="alert alert-success">

                <h5>

                    <i class="bi bi-stars me-2"></i>

                    ¡Todas correctas!

                </h5>

                <p class="mb-0">

                    Excelente. No tuviste respuestas incorrectas
                    en este curso.

                </p>

            </div>

        `;

        return;

    }



    /*
     * CON ERRORES
     */

    let html = `

        <h5 class="mb-3">

            <i class="bi bi-journal-text me-2"></i>

            Repasa tus errores

        </h5>

        <p class="text-muted">

            Aquí puedes revisar exactamente qué respuesta
            elegiste y qué deberías recordar para la próxima vez.

        </p>

    `;



    respuestasIncorrectas.forEach(
        function (error, indice) {

            html += `

                <div class="section-shell p-3 mb-3">

                    <div class="d-flex align-items-center gap-2 mb-2">

                        <span class="badge bg-danger">
                            Error ${indice + 1}
                        </span>

                    </div>


                    <strong>
                        ${error.pregunta}
                    </strong>


                    <div class="mt-3 mb-2">

                        <span class="text-danger">

                            <i class="bi bi-x-circle-fill me-1"></i>

                            Tu respuesta:

                        </span>

                        <strong>
                            ${error.respuestaUsuario}
                        </strong>

                    </div>


                    <div class="mb-2">

                        <span class="text-success">

                            <i class="bi bi-check-circle-fill me-1"></i>

                            Respuesta correcta:

                        </span>

                        <strong>
                            ${error.respuestaCorrecta}
                        </strong>

                    </div>


                    <div class="alert alert-info mt-3 mb-0">

                        <strong>
                            <i class="bi bi-lightbulb me-1"></i>
                            Retroalimentación:
                        </strong>

                        <div class="mt-1">

                            ${error.explicacion}

                        </div>

                    </div>

                </div>

            `;

        }
    );



    contenedor.innerHTML =
        html;

}



/* =========================================================
   REPETIR CURSO
========================================================= */

function reiniciarCurso() {

    preguntaActual = 0;

    puntuacion = 0;

    respuestasIncorrectas = [];


    /*
     * Volvemos a mostrar la mini-lección.
     */

    document.getElementById(
        'resultadoCurso'
    ).style.display = 'none';


    document.getElementById(
        'preguntasCurso'
    ).style.display = 'none';


    document.getElementById(
        'leccionCurso'
    ).style.display = 'block';

}



/* =========================================================
   CONTINUAR AL SIGUIENTE CURSO
========================================================= */

function cerrarYContinuar() {

    if (
        cursoActual <
        cursosActivos.length - 1
    ) {

        const siguienteCurso =
            cursoActual + 1;


        abrirCurso(
            siguienteCurso
        );

    } else {

        if (cursoModal) {

            cursoModal.hide();

        }


        document.getElementById(
            idiomaActual === 'maya'
                ? 'cursos-maya'
                : 'cursos-nahuatl'
        ).scrollIntoView({

            behavior: 'smooth'

        });

    }

}

</script>

@endsection
