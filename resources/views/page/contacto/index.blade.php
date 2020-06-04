@extends('layouts.app')

@section('content')
<div class="contenedor_contacto">
    
    <div class="contacto">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.6191093485804!2d-58.57493588459151!3d-34.61379186553863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb8401bee9973%3A0xcde36261e1952548!2sDIEMER!5e0!3m2!1ses!2sar!4v1553779989857" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="datos_contacto">
		<form method="POST" action="{{ action('SeccionContactoController@sendMail') }}" class="col s12 m8 offset-m2 xl10 offset-xl1">
			@csrf
			@method('PUT')
			<div class="formulario_contacto">
				<div class="iconos">
					<div class="icono_mapa">
						<img src="images/icons/5c9cce991b476_contacto_mapa_icon.jpg" class="icono_mapa_contacto">
						<p>
							{{ $empresa->calle }} {{ $empresa->altura}}
						</p>
						<p>
							{{ $empresa->localidad }} {{ $empresa->provincia}}
						</p>
					</div>
					<div class="icono_telefono">
						<img src="images/icons/telefono_contacto.png" class="icono_telefono_contacto">
						<p>{{ $empresa->telefono }}</p>
					</div>
					<div class="icono_email">
						<img src="images/icons/email_contacto.png" class="icono_email_contacto">
						<p>{{ $empresa->email }}</p>
					</div>
				</div>
				<div class="campos">
					<div class="row">
						<div class="input-field col s6">
							<input id="icon_prefix_nombre" type="text"  name="nombre" required>
							<label for="icon_prefix_nombre">NOMBRE<span class="required">*</span></label>
						</div>
						<div class="input-field col s6">
							<input id="icon_prefix_apellido" type="text"  name="apellido" required>
							<label for="icon_prefix_apellido">APELLIDO<span class="required">*</span></label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input id="icon_prefix_email" type="text" name="email" required>
							<label for="icon_prefix_email">E-MAIL<span class="required">*</span></label>
						</div>
						<div class="input-field col s6">
							<input id="icon_prefix_telefono" type="text" name="telefono" >
							<label for="icon_prefix_telefono">TELEFONO<span class="required">*</span> </label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							@if(session()->get('codigo'))
							<textarea id="mensaje" name="mensaje"class="materialize-textarea">Estoy interesado en el producto de codigo:{{session()->get('codigo')}}</textarea>
							@else
							<textarea id="mensaje" name="mensaje"class="materialize-textarea"></textarea>
							@endif
							<label for="mensaje">Mensaje</label>
						</div>
					</div>
					<div class="fila">
						<div class="captcha">
							<div class="g-recaptcha" data-sitekey="6Ldbq5oUAAAAAOUkdEMu4sYzDOPKf85c_-vRI7r3"></div>
						</div>
						<div class="terminos">
							<label>
								<input type="checkbox" class="modal-trigger" data-target="modal_terminos" required/>
								<span>Acepto los términos y condiciones de privacidad</span>
							</label>
							<div id="modal_terminos" class="modal">
							    <div class="modal-content">
								    {!! $empresa->terminos  !!}
						    	</div>
							    <div class="modal-footer">
								    <button class="btn-producto modal-close" id="aceptar">Acepto</button>
								    <button class="btn-cerrar modal-close" id="rechazar">No Acepto</button>
							    </div>
						    </div>
					</div>
				</div>
				<div class="row">
						<button class="btn-producto" type="submit" name="action">ENVIAR
						</button>
					</div>
			</div>
		</form>
    </div>
</div>
@endsection
@push('script')
<script>
	$('#aceptar').on('click', function(){
		$( ".modal-trigger" ).prop( "checked", true );
	});
	$('#rechazar').on('click', function(){
		$( ".modal-trigger" ).prop( "checked", false );
	});
</script>		
@endpush