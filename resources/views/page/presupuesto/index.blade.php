@extends('layouts.app')

@section('content')
<div class="contenedor_solicitud">
    
    <div class="solicitud">
    	<div class="imagen_solicitud">
			<img class="" src="{{ asset('images/solicitarpresupuesto_01b.png') }}">
			<p class="texto_solicitud negrita">TUS DATOS</p>
		</div>
		<div class="linea-divisora"></div>
		<div class="imagen_solicitud">
			<img class="" src="{{ asset('images/solicitarpresupuesto_02a.png') }}">
			<p class="texto_solicitud">TU CONSULTA</p>
		</div>
    </div>
    <div class="data">
		<form method="POST" action="{{ route('formulario') }}" class="col s12 m8 offset-m2 xl10 offset-xl1">
			@csrf
			<div class="formulario">
				<div class="columna">
					<div class="row">
						<div class="input-field col s12">
							<input id="icon_prefix_nombre" type="text"  name="nombre" required>
							<label for="icon_prefix_nombre">NOMBRE<span class="required">*</span></label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="icon_prefix_email" type="text" name="email" required>
							<label for="icon_prefix_email">E-MAIL<span class="required">*</span></label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="icon_prefix_telefono" type="text" name="telefono" required>
							<label for="icon_prefix_telefono">TELEFONO<span class="required">*</span> </label>
						</div>
					</div>
				</div>
				<div class="columna">
					<div class="row">
						<div class="col s12">
							<label>EMPRESA<span class="required">*</span> </label>
						</div>
						<div class="input-field col s12">
							<label>
								<input class="with-gap" name="tipo" type="radio" value="usuario"  required/>
								<span>USUARIO</span>
							</label>
						</div>
						<div class="input-field col s12">
							<label>
								<input class="with-gap" name="tipo" type="radio" value="empresa" />
								<span>DISTRIBUIDOR</span>
							</label>
						</div>
					</div>
					<div class="row">
						<button class="btn-producto" type="submit" name="action">SIGUIENTE
						</button>
					</div>
				</div>
			</div>
		</form>
    </div>
</div>
@endsection