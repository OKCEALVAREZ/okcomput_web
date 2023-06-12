<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evento DELL</title>
    <link rel="icon" type="image/ico" href="{{asset('images/logo.ico')}}">
    <link type="text/css" href="{{ asset('assets_web/css/iconsmind.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets_web/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets_web/css/dell.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('plugins/iCheck/all.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets_web/css/font-awesome.min.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('plugins/lobibox/dist/css/lobibox.min.css') }}" rel="stylesheet" />
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-md-4 text-left">
                <img class="logo" src="{{ asset('images/evento-dell/okc_logo.png') }}" alt="logo_ok_computer">
            </div>
            <div class="col-md-4 col-md-offset-4 text-right">
                <img class="logo" src="{{ asset('images/evento-dell/dell_logo.jpg') }}" alt="logo_dell">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 col-md-offset-3">
                <img class="titulo" src="{{ asset('images/evento-dell/titulo.png') }}" alt="titulo_formulario">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4 class="text-center mb-4">Todos los que llenen el formulario ingresan al sorteo. <br> Es necesario llenar todos los campos</h4>
                <div class="row">
                    <div class="col-md-12">
                        <form id="formulario" method="POST">
                            @csrf
                            <input type="hidden" name="id">

                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="form-titulo">Nombres y apeliidos</label>
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
                                                <label class="form-titulo">Teléfono</label>
                                                <input type="tel" class="form-control" name="telefono" placeholder="Ingrese su número de teléfono" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label class="form-titulo">Cargo</label>
                                                <input type="text" class="form-control" name="cargo" placeholder="Ingrese su cargo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="form-titulo">Empresa o entidad</label>
                                        <input type="text" class="form-control" name="empresa" placeholder="Ingrese nombre de su empresa">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="form-titulo mb-2">1. De ser invitado a una capacitación acerca del portafolio de DELL TECHNOLOGIES ¿de que forma le gustaría que fuera?</label>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label><input type="radio" name="modo" class="radio-opcion" value="VIRTUAL"> Virtual</label>
                                        </div>
                                        <div class="col-md-4">
                                            <label><input type="radio" name="modo" class="radio-opcion" value="PRESENCIAL"> Presencial</label>
                                        </div>
                                        <div class="col-md-4">
                                            <label><input type="radio" name="modo" class="radio-opcion" value="SEMIPRESENCIAL"> Semi Presencial</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-titulo mb-2">2. ¿Que temas les gustaría tratar? (Puedes marcar más de una opción) </label>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <label><input type="checkbox" name="comp_portatil" class="minimal-red"> Computadoras portátiles </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label><input type="checkbox" name="comp_escritorio" class="minimal-red"> Computadores de escritorio</label>
                                        </div>
                                        <div class="col-md-6">
                                            <label><input type="checkbox" name="est_trabajo" class="minimal-red"> Estación de trabajo</label>
                                        </div>
                                        <div class="col-md-6">
                                            <label><input type="checkbox" name="servidor" class="minimal-red"> Servidores</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-titulo mb-2">3. ¿Cuantas personas forman parte de su organización?</label>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label><input type="radio" name="organizacion" class="radio-opcion" value="0_100"> De 0 a 100</label>
                                        </div>
                                        <div class="col-md-6">
                                            <label><input type="radio" name="organizacion" class="radio-opcion" value="100_500"> De 100 a 500</label>
                                        </div>
                                        <div class="col-md-6">
                                            <label><input type="radio" name="organizacion" class="radio-opcion" value="500_1000"> De 500 a 1000</label>
                                        </div>
                                        <div class="col-md-6">
                                            <label><input type="radio" name="organizacion" class="radio-opcion" value="1000_MAS"> De 1000 a más</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-titulo mb-2">4. ¿Le gustaría ser contactado para brindarle información acerca del portafolio Dell?</label>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <label><input type="radio" name="informacion" class="radio-opcion" value="SI"> SI</label>
                                        </div>
                                        <div class="col-md-12">
                                            <label><input type="radio" name="informacion" class="radio-opcion" value="NO"> NO</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-default">Enviar formulario</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets_web/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('plugins/lobibox/dist/js/lobibox.min.js') }}"></script>
    <script src="{{ asset('js/util.js') }}"></script>
    <script src="{{ asset('js/myjava.js') }}?v=2"></script>
</body>
</html>