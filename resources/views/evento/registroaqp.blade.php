<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evento CULTIVANDO ORIGINALIDAD</title>
    <link rel="icon" type="image/ico" href="{{asset('images/logo.ico')}}">
    <link type="text/css" href="{{ asset('assets_web/css/iconsmind.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets_web/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets_web/css/eventoAqp.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('plugins/iCheck/all.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets_web/css/font-awesome.min.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('plugins/lobibox/dist/css/lobibox.min.css') }}" rel="stylesheet" />
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-md-6 text-left">
                <img class="logo" src="{{ asset('images/evento-dell/okc_logo.png') }}" alt="logo_ok_computer">
            </div>
            <!-- <div class="col-md-4  text-center">
                <img class="logohp" width="10" src="{{ asset('images/eventos/aqp/hp.png') }}" alt="logo_dell">
            </div> -->
            <div class="col-md-6  text-right">
                <img class="logo" src="{{ asset('images/eventos/aqp/Microsoft logo.png') }}" alt="logo_dell">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 col-md-offset-3">
                {{-- <img class="titulo" src="{{ asset('images/evento-dell/titulo.png') }}" alt="titulo_formulario"> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="{{ route('registroaqp') }}" data-form="registro">
                            @csrf
                            <h2 class="text-center mb-4 text-title-evento">
                                {{-- Todos los que llenen el formulario ingresan al sorteo.
                                <br>  --}}
                                CULTIVANDO ORIGINALIDAD</h2>
                            <input type="hidden" name="id">
                            <input type="hidden" name="total" value="{{$suma}}">

                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="form-titulo">Nombres y Apellidos</label>
                                        <input type="text" class="form-control" name="nombres" placeholder="Ingrese su nombre y apellidos completos" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="form-titulo">Correo electrónico</label>
                                        <input type="email" class="form-control" name="correo" placeholder="Ingrese su correo electrónicos" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="form-titulo">Celular</label>
                                                <input type="number" class="form-control" name="celular" placeholder="Ingrese su número de celular" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="form-titulo">Lugar de Trabajo</label>
                                                <input type="text" class="form-control" name="lugar_trabajo" placeholder="Ingrese su lugar de trabajo" required>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="form-titulo">Cargo</label>
                                        <input type="text" class="form-control" name="cargo" placeholder="Ingrese su cargo" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3>Temas de Interés</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label><input type="checkbox" name="programa" class="minimal-red" value="1"> Programa shape the future</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label><input type="checkbox" name="office" class="minimal-red" value="1"> Office Professional y Office Home & Business 2021</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <label><input type="checkbox" name="windows" class="minimal-red" value="1"> Windows 11 </label>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="g-recaptcha" data-sitekey="6Ldi_kAlAAAAAPXDDMGXYQKH-o4Pd1YnPjK05uXC" ></div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 text-center">
                                    <img src="{{asset('images/eventos/recapta.png')}}" alt="" width="20"><label> &nbsp&nbsp No soy un robot</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">

                                            {{$numero_1}} + {{$numero_2}}
                                        </span>
                                        <input type="number" class="form-control"  placeholder="Calcular" name="suma" title="Llenar capta" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" data-section="alerta" style=" margin-top: 15px; ">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-info">Enviar Formulario</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="{{ asset('assets_web/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('plugins/lobibox/dist/js/lobibox.min.js') }}"></script>
    <script src="{{ asset('js/util.js') }}"></script>
    <script src="{{ asset('js/myjava.js') }}?v=2"></script>
    <script>
        // $('[name="g-recaptcha-response"]').attr('required','true')
        $('[data-form="registro"]').submit(function (e) {
            e.preventDefault();
            var data = $(this).serialize(),
                html= '';
                $(this).find('[type="submit"]').attr('disabled','true');
            $('[data-section="alerta"]').html(html);
            $.ajax({
                type: "POST",
                url : $(this).attr('action'),
                data: data,
                dataType: "JSON",
                beforeSend: function(){

                },
                success: function (response) {
                    if (response.success===true) {
                        html = `
                            <div class="alert alert-warning" role="alert">
                                <p class="mensaje">`+response.mensaje+`</p>
                            </div>
                        `;
                        Util.notify('warning',response.mensaje)
                        $('[data-form="registro"]').find('[type="submit"]').removeAttr('disabled');
                    }else{
                        html = `
                            <div class="alert alert-success" role="alert">
                                <p class="mensaje">`+response.mensaje+`</p>
                            </div>
                        `;
                        setTimeout( function() {
                            location.reload();
                        }, 2000);

                        Util.notify('success',response.mensaje)

                    }
                    $('[data-section="alerta"]').html(html);
                    if (response.validate_email===true) {

                        $('[name="correo"]').val('');
                    }

                }
            }).fail( function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            });
        });
    </script>
</body>
</html>

