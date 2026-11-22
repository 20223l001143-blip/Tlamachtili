@extends('admin.layout.registro')

@section('css_custom')
    <style>
        #resultcurp , #resulttele, #resultcelu, #resultmail{
            color: #df2e1b;font-weight: bold;
        }
        .form-control {
            background-color: white;
            color: black;
        }
    </style>
@endsection

@section('contenido')
    @if(Session::has('status'))
        <div class="col-md-12 alert-section">
            <div class="alert alert-{{Session::get('status_type')}}" style="text-align: center; padding: 5px; margin-bottom: 5px;">
            <span style="font-size: 20px; font-weight: bold;">
                {{Session::get('status')}}
                @php
                    Session::forget('status');
                @endphp
            </span>
            </div>
        </div>
    @endif
    <div class="card">
        <div class="card-header" style="display: inline-flex">
            <div class="col-8">
                <h4 style="font-weight: bold">
                    {{ Auth::user()->name }}
                     (Complementa tu registro)
                </h4>
            </div>
            <div class="col-4">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">
                    <!-- Message Start -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <div class="media">
                        <div class="media-body">
                            <p class="text-sm" style="color: white!important;">Cerrar sesión</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>

            </div>
        </div>
        <div class="card-body">
            <div class="row">

                {!!Form::open(['route' => 'user.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

                <div class="col-lg-12 col-sm-12 col-12">
                    <fieldset>
                        <legend>Datos personales</legend>
                        <div class="row">
                            <div class="col-lg-3 col-sm-3 col-3">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label class="form-label">Nombre(s)<span class="required" style="color:red!important;">&nbsp;<strong>*</strong></span></label>
                                        <input required="" id="nombre" class="form-control" onkeypress="return Letras(event);" title="Nombre del usuario a registrar" maxlength="40" name="nombre" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-3">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label class="form-label">Primer Apellido<span class="required" style="color:red!important;">&nbsp;<strong>*</strong></span></label>
                                        <input required="" id="pApellido" class="form-control" onkeypress="return Letras(event);" title="Primer apellido del usuario a registrar" maxlength="30" name="pApellido" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-3">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label for="sApellido" class="form-label">Segundo Apellido</label>
                                        <input id="sApellido" class="form-control" onkeypress="return Letras(event);" title="Segundo apellido del usuario a registrar" maxlength="30" name="sApellido" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-3">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label for="curp" class="form-label">CURP</label>
                                        <input id="curp" class="form-control" onkeypress="return UTText(event,this);" onkeyup="mayus(this);" onfocusout="validacurp(this);" title="CURP de la persona de contacto" maxlength="18" name="curp" type="text">
                                        <pre id="resultcurp" style="padding: 0px!important;"></pre>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-3">
                                {!! Form::UTCalendar('nacimiento','Fecha de nacimiento','Fecha de nacimiento de la persona a registrar',null ,$errors,true,null) !!}
                            </div>
                            <div class="col-lg-3 col-sm-3 col-3">
                                {!! Form::UTList('genero', 'Género', 'Genero del usuario a registrar', ['masculino'=>'Masculino','Femenino'=>'Femenino'], null , $errors, true) !!}
                            </div>
                            <div class="col-lg-3 col-sm-3 col-3">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label class="form-label">Correo electrónico<span class="required" style="color:red!important;">&nbsp;<strong>*</strong></span></label>
                                        <input required="" id="email" class="form-control" value="{{Auth::user()->email}}" title="Correo electrónico del usuario a registrar" maxlength="50" name="email" type="email" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-3">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label for="telefono" class="form-label">Teléfono fijo</label>
                                        <input id="telefono" placeholder="(000) 00-00000" class="form-control" onkeypress="return UTNumeric(event);" onkeyup="UTZero(event,this)" onfocusout="validatele(this);"
                                               title="Número telefónico fijo del contacto" maxlength="14" name="telefono" type="text">
                                        <pre id="resulttele" style="padding: 0px!important;"></pre>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-3">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label class="form-label">Celular<span class="required" style="color:red!important;">&nbsp;<strong>*</strong></span></label>
                                        <input required="" id="celular" placeholder="(000) 00-00000" class="form-control"
                                               onkeypress="return UTNumeric(event);" onkeyup="UTZero(event,this)" onfocusout="validacelu(this);"
                                               title="Número telefónico móvil del contacto" maxlength="14"  name="celular" type="text">
                                        <pre id="resultcelu" style="padding: 0px!important;"></pre>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 col-sm-10 col-10">
                                <div class="form-group">
                                    <div class="form-line" style="border: none!important;">
                                        <label for="img" class="form-label">Fotografía del usuario</label>
                                        <input id="img" class="form-control" title="Fotografía o imagen del usuario" name="img" type="file" accept="image/jpeg, image/png">
                                        <div class="row">
                                            <div>
                                                <label style="font-weight: normal;font-size: small;padding: 1rem;"><strong>1.-</strong> Formato (*.png, *.jpg).</label>
                                            </div>
                                            <div>
                                                <label style="font-weight: normal;font-size: small;padding: 1rem;"><strong>2.-</strong> El tamaño m&aacute;ximo de 400 x 400 pixeles.</label>
                                            </div>
                                            <div>
                                                <label style="font-weight: normal;font-size: small;padding: 1rem;"><strong>3.-</strong> El peso m&aacute;ximo del archivo 200 Kb.</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($errors->has('img'))
                                    <span class="help-block">
                                        <strong style="color: darkred;">{{ $errors->first('img') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row" style="float: right;">
                            <button style="margin: 1rem;" type="submit" class="btn btn-success" title="Registrar usuario"><i class="mdi mdi-content-save-all" style="color: white;"></i>Guardar</button>
                        </div>
                    </fieldset>
                </div>
                {!!Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('js_custom')
    <script src="{{asset('admin/js/validatorFields.js')}}"></script>
    <script>
        var telefonoinput = document.getElementById('telefono');
        var celularinput = document.getElementById('celular');
        
        
        telefonoinput.addEventListener('input', function (e) {
            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,2})(\d{0,5})/);
            e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
        });
        celularinput.addEventListener('input', function (e) {
            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,2})(\d{0,5})/);
            e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
        });

       
        var fechaActual = new Date();
        var fechaMinima = new Date();
        fechaMinima.setFullYear(fechaActual.getFullYear() - 16); 

        $(".datepicker").datepicker({
            maxDate: fechaActual, 
            minDate: new Date(1900, 0, 1), 
            showButtonPanel: true,
            dateFormat: "dd / mm / yy",
            changeMonth: true,
            changeYear: true,
            yearRange: "c-100:c0",
            prevText: "Anterior",
            nextText: 'Siguiente',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
            ],
            monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
                'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'
            ],
            dayNames: ["Domingo","Lunes","Martes","Mi&eacute;rcoles","Jueves","Viernes","S&aacute;bado"],
            dayNamesShort: ["Dom","Lun","Mar","Mi&eacute;","Jue","Vie","S&aacute;b"],
            dayNamesMin : [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "S&aacute;" ],
            buttonImage: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAATCAYAAAB2pebxAAABGUlEQVQ4jc2UP06EQBjFfyCN3ZR2yxHwBGBCYUIhN1hqGrWj03KsiM3Y7p7AI8CeQI/ATbBgiE+gMlvsS8jM+97jy5s/mQCFszFQAQN1c2AJZzMgA3rqpgcYx5FQDAb4Ah6AFmdfNxp0QAp0OJvMUsi2BDDUzS3w7s2KOcGd5+UsRDhbAo+AWfyU4GwnPAYG4XucTYOPt1PkG2SsYTbq2iT2X3ZFkVeeTChyA9wDN5uNi/x62TzaMD5t1DTdy7rsbPfnJNan0i24ejOcHUPOgLM0CSTuyY+pzAG2wFG46jugupw9mZczSORl/BZ4Fq56ArTzPYn5vUA6h/XNVX03DZe0J59Maxsk7iCeBPgWrroB4sA/LiX/R/8DOHhi5y8Apx4AAAAASUVORK5CYII=",
            buttonText: "Pick Date",
            language: 'es',
            onSelect: function(dateText, inst) {
              
                var fechaSeleccionada = $(this).datepicker('getDate');
                if (fechaSeleccionada && fechaSeleccionada > fechaMinima) {
                    alert("Debes tener al menos 16 años para registrarte.");
                    $(this).val('');
                }
            }
        });

        $('form').on('submit', function(e) {
            var fechaNacimiento = $('.datepicker').datepicker('getDate');
            if (fechaNacimiento && fechaNacimiento > fechaMinima) {
                alert("Debes tener al menos 16 años para registrarte.");
                e.preventDefault(); 
            }
        });
    </script>
@endsection


