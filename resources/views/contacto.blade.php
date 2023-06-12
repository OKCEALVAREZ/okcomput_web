@extends("themes/web/layout")

@section("title") CONTACTO @endsection

@section("content")
<div class="main container bar">
    <div class="account-login">
        <div class="page-title"><h2>Contáctate con nosotros</h2></div>
        <fieldset class="col2-set">
            <div class="col-1 new-users"><strong>Datos de contacto</strong>
                <div class="content">
                    <div class="contact-text-okc">
						<div class="group-text mb-4">
							<h5><span class="fa fa-home"></span>Dirección</h5>
							<div class="cto-text">
                                <ul>
									<li>Lima: Calle Las Castañitas 127, San isidro</li>
									<li>Ilo: Villa del Mar M-22</li>
									<li>Moquegua: APV. VIMCOOP Mz A Lote 03, Mariscal Nieto</li>
								</ul>
							</div>
						</div>
						<div class="group-text mb-4">
							<h5><span class="fa fa-phone"></span>Teléfono</h5>
							<div class="cto-text">
                                <ul>
									<li>Oficina Lima: (01) 288-4541</li>
									<li>Oficina Ilo: (053) 484354</li>
									<li>Atención en Línea (01) 748-5418</li>
								</ul>
							</div>
						</div>
						<div class="group-text mb-4">
							<h5><span class="fa fa-envelope-o"></span>Correo</h5>
							<div class="cto-text">
                                <ul>
									<li><a href="mailto:soporte.lima@okcomputer.com.pe" target="_blank">soporte.lima@okcomputer.com.pe</a></li>
									<li><a href="mailto:atencion@okcomputer.com.pe" target="_blank">atencion@okcomputer.com.pe</a></li>
								</ul>
							</div>
						</div>
						<div class="group-text mb-4">
							<h5><span class="fa fa-whatsapp"></span>WhatsApp</h5>
							<div class="cto-text">
                                <ul>
									<li><a href="https://wa.link/8yw09o" target="_blank">OK COMPUTER (clic para contactarnos)</a></li>
								</ul>
							</div>
						</div>
					</div>
                </div>
            </div>
            <div class="col-2 registered-users"><strong>Escríbenos un mensaje</strong>
                <div class="content">
                    <p>Déjanos tu mensaje y nos contactaremos contigo a la brevedad</p>
                    <ul class="form-list">
                        <li>
                            <label for="name_user">Nombres y Apellidos <span class="required">*</span></label>
                            <br>
                            <input type="text" name="login_name" title="Nombres y Apellidos" class="input-text required-entry" id="name_user" value="">
                        </li>
                        <li>
                            <label for="email">Correo electrónico <span class="required">*</span></label>
                            <br>
                            <input type="text" name="login_email" title="Correo electrónico" class="input-text required-entry" id="email" value="">
                        </li>
                        <li>
                            <label for="message">Mensaje <span class="required">*</span></label>
                            <br>
                            <textarea name="login_message" title="Mensaje" class="input-text required-entry" id="message" rows="4"></textarea>
                        </li>
                    </ul>
                    <p class="required">* Campos obligatorios</p>
                    <div class="buttons-set">
                        <button id="send2" name="send" type="submit" class="button btn-block login" onclick="sendMessage();">
                            <span>Enviar mensaje</span>
                        </button>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>
@endsection

@section("scripts")
    <script type="text/javascript">
        jQuery(document).ready(function () {

        });

        function sendMessage() {
            alert('Mensaje enviado con éxito');
            $("#name_user").val("");
            $("#email").val("");
            $("#message").val("");
        }
    </script>
@endsection