@extends('landing.layout.principal')

@section('carrusel')
<section class="page-banner">
    <div class="container banner-content">
        <span class="page-pill">Contacto</span>
        <h1 class="section-heading mt-3">Estamos para ayudarte a conocer y usar Tlamachtili</h1>
        <p class="lead-copy col-lg-8 mb-0">
            Si deseas más información sobre la plataforma, colaboraciones educativas o implementación en tu contexto, escríbenos.
        </p>
    </div>
</section>
@endsection

@section('contenido')
<section class="page-section">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tla-card text-center h-100">
                    <div class="tla-icon mx-auto"><i class="bi bi-geo-alt-fill"></i></div>
                    <h3>Ubicacion</h3>
                    <p class="section-copy mb-0">México, plataforma enfocada en educación intercultural, aprendizaje digital y fortalecimiento de dialectos.</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tla-card text-center h-100">
                    <div class="tla-icon green mx-auto"><i class="bi bi-envelope-fill"></i></div>
                    <h3>Correo</h3>
                    <p class="section-copy mb-0">contacto@tlamachtili.edu.mx</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="tla-card text-center h-100">
                    <div class="tla-icon gold mx-auto"><i class="bi bi-telephone-fill"></i></div>
                    <h3>Telefono</h3>
                    <p class="section-copy mb-0">+52 271 000 0000</p>
                </div>
            </div>
        </div>

        <div class="row g-5 align-items-start">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="section-subtitle">Conversemos</span>
                <h2 class="section-heading">Queremos escuchar tu idea, duda o propuesta.</h2>
                <p class="section-copy">
                    Tlamachtili busca crecer junto con docentes, instituciones y comunidades que valoran la diversidad lingüística. Si deseas colaborar, conocer la plataforma o recibir acompañamiento, este es el espacio indicado.
                </p>
                <p class="section-copy">
                    Puedes escribirnos para solicitar información general, resolver dudas sobre registro, compartir una propuesta académica o iniciar una posible colaboración institucional.
                </p>
                <ul class="list-check mt-4">
                    <li><i class="bi bi-check-circle-fill"></i><span>Atencion a dudas sobre registro y uso de la plataforma.</span></li>
                    <li><i class="bi bi-check-circle-fill"></i><span>Información sobre recursos, cursos y alcance del proyecto.</span></li>
                    <li><i class="bi bi-check-circle-fill"></i><span>Vinculacion para iniciativas educativas interculturales.</span></li>
                </ul>
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                {!! Form::open(['route' => 'sendmessage', 'method' => 'post', 'class' => 'form-shell']) !!}
                    {!! Form::UTTextOnly('nombre', 'Nombre completo', 'Escribe tu nombre completo.', null, $errors, 70, true) !!}
                    {!! Form::UTEmail('email', 'Correo electrónico', 'Comparte tu correo electrónico.', null, $errors, 70, true) !!}
                    {!! Form::UTNumeric('telefono', 'Telefono', 'Ingresa tu telefono de contacto.', null, $errors, 10, true, null, '10 digitos') !!}

                    <div class="form-group mb-4 mt-3">
                        <label for="mensaje" class="form-label fw-bold" style="color: #4A2C2A;">Mensaje</label>
                        {!! Form::textarea('mensaje', null, ['class' => 'form-control', 'rows' => 6, 'placeholder' => 'Cuéntanos en qué podemos ayudarte']) !!}
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="tla-btn-primary justify-content-center border-0">
                            <i class="bi bi-send-fill"></i>
                            Enviar mensaje
                        </button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>

<section class="page-section compact">
    <div class="container">
        <div class="section-shell p-4 p-lg-5" data-aos="fade-up">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h3>Información general</h3>
                    <p class="section-copy mb-0">
                        Puedes comunicarte con el equipo de Tlamachtili para resolver dudas sobre la plataforma, su propósito educativo y la manera en que puede ser aprovechada en distintos contextos formativos.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h3>Colaboraciones</h3>
                    <p class="section-copy mb-0">
                        Esta vista también está pensada para instituciones, docentes y comunidades interesadas en colaborar con iniciativas de aprendizaje, interculturalidad y fortalecimiento de dialectos.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h3>Soporte</h3>
                    <p class="section-copy mb-0">
                        Si necesitas ayuda con tu registro, acceso o uso de algún recurso, aquí puedes enviar tu mensaje para recibir acompañamiento y orientación.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('custom_js')
<script src="{{ asset('admin/js/validatorFields.js') }}"></script>
@endsection
