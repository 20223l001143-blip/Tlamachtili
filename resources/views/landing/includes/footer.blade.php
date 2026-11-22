<footer id="footer" class="footer position-relative" style="background: #2f3d34; color: #FFF8F0; border-top: 6px solid #D4A373;">
    <div class="container py-5">
        <div class="row gy-4 align-items-start">
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div style="width: 58px; height: 58px; border-radius: 0; background: #fff; display: inline-flex; align-items: center; justify-content: center; border: 2px solid #E9C46A; overflow: hidden;">
                        <img src="{{ asset('landing/img/logo.jpeg') }}" alt="Logo Tlamachtili" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div>
                        <h4 class="mb-0" style="font-size: 1.6rem; color: #FFF8F0; font-weight: 800; text-transform: uppercase;">Tlamachtili</h4>
                        <p class="mb-0" style="color: rgba(255, 248, 240, 0.75);">Formación docente intercultural</p>
                    </div>
                </div>
                <p style="color: rgba(255, 248, 240, 0.82);">
                    Plataforma digital enfocada en dialectos, identidad cultural y herramientas educativas para maestras y maestros en formación y servicio.
                </p>
            </div>

            <div class="col-lg-4 col-md-6">
                <h5 style="color: #F4E1B5; text-transform: uppercase; font-weight: 800;">Secciones</h5>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2"><a href="{{ route('inicio') }}" class="text-decoration-none" style="color: rgba(255, 248, 240, 0.82);">Inicio</a></li>
                    <li class="mb-2"><a href="{{ route('nosotros') }}" class="text-decoration-none" style="color: rgba(255, 248, 240, 0.82);">Proyecto</a></li>
                    <li class="mb-2"><a href="{{ route('servicios') }}" class="text-decoration-none" style="color: rgba(255, 248, 240, 0.82);">Servicios</a></li>
                    <li class="mb-2"><a href="{{ route('productos') }}" class="text-decoration-none" style="color: rgba(255, 248, 240, 0.82);">Recursos</a></li>
                    <li class="mb-2"><a href="{{ route('privacidad') }}" class="text-decoration-none" style="color: rgba(255, 248, 240, 0.82);">Privacidad</a></li>
                    <li class="mb-2"><a href="{{ route('contacto') }}" class="text-decoration-none" style="color: rgba(255, 248, 240, 0.82);">Contacto</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12">
                <h5 style="color: #F4E1B5; text-transform: uppercase; font-weight: 800;">Contacto</h5>
                <div class="mt-3" style="color: rgba(255, 248, 240, 0.82); line-height: 1.8;">
                    <p class="mb-1"><i class="bi bi-geo-alt-fill me-2"></i>México, comunidad educativa intercultural</p>
                    <p class="mb-1"><i class="bi bi-envelope-fill me-2"></i>contacto@tlamachtili.edu.mx</p>
                    <p class="mb-1"><i class="bi bi-telephone-fill me-2"></i>+52 271 000 0000</p>
                    <p class="mb-0"><i class="bi bi-clock-fill me-2"></i>Lunes a viernes, 9:00 a 18:00 hrs</p>
                </div>
            </div>
        </div>
    </div>

    <div style="border-top: 1px solid rgba(244, 225, 181, 0.18);">
        <div class="container py-3 text-center">
            <p class="mb-1" style="color: rgba(255, 248, 240, 0.78);">&copy; {{ date('Y') }} Tlamachtili. Plataforma web construida con Laravel.</p>
            <small style="color: rgba(255, 248, 240, 0.6);">Lengua, cultura y docencia en una misma experiencia digital.</small>
        </div>
    </div>
</footer>
