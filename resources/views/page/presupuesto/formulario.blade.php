@extends('layouts.app')

@section('content')
<div class="contenedor_solicitud">
    
    <div class="solicitud">
    	<div class="imagen_solicitud">
			<img class="" src="{{ asset('images/solicitarpresupuesto_01a.png') }}">
			<p class="texto_solicitud">TUS DATOS</p>
		</div>
		<div class="linea-divisora"></div>
		<div class="imagen_solicitud">
			<img class="" src="{{ asset('images/solicitarpresupuesto_02b.png') }}">
			<p class="texto_solicitud negrita">TU CONSULTA</p>
		</div>
    </div>
    <div class="data">
		<form method="POST"  enctype="multipart/form-data" action="{{ action('SeccionSolicitudController@solicitudMailForm') }}" class="col s12 m8 offset-m2 xl10 offset-xl1">
			@method('PUT')
			<div class="formulario">
				@csrf
				<div class="columna">
					<div class="row">
						<div class="col s12">
							<label>Manguera<span class="required">*</span> </label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<label>
								<input class="with-gap" name="tipo_manguera" type="radio" value="aspirapolvo"  required/>
								<span>Aspirapolvo</span>
							</label>
						</div>
						<div class="input-field col s6">
							<label>
								<input class="with-gap" name="tipo_manguera" type="radio" value="expelente" required/>
								<span>Expelente</span>
							</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<label>
								<input class="with-gap" name="tipo_manguera" type="radio" value="manga" required/>
								<span>Manga</span>
							</label>
						</div>
						<div class="input-field col s6">
							<label>
								<input class="with-gap" name="tipo_manguera" type="radio" value="aspir-expel"  required/>
								<span>Aspirante/Expelente</span>
							</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<label>
								<input class="with-gap" name="tipo_manguera" type="radio" value="aspirante"  required/>
								<span>Aspirante</span>
							</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="icon_prefix_fluido" type="text"  name="fluido" required>
							<label for="icon_prefix_fluido">Fluido<span class="required">*</span></label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="icon_prefix_interior_mm" type="text" name="interior_mm" required>
							<label for="icon_prefix_interior_mm">Diametro interior (mm)<span class="required">*</span></label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="icon_prefix_exterior_mm" type="text"  name="exterior_mm" required>
							<label for="icon_prefix_exterior_mm">Diametro exterior (mm)<span class="required">*</span></label>
						</div>
					</div>
					<div class="row">
						<div class="col s3">
							<p class="texto_solicitud">Presión de trabajo <span class="required">*</span>
							</p>
						</div>
						<div class="col s6">
							<input id="icon_prefix_presion_trabajo" type="text"  name="presion_trabajo" required>
						</div>
						<div class="col s3">
							<p class="texto_solicitud">BAR/
								<br>
								kg/cm2</p>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<span for="icon_prefix_temperatura">Temperatura de trabajo (℃)</span>
						</div>
						<div class="input-field col s6">
							<select id="icon_prefix_temperatura" name="temperatura" class="materialSelect">
								<option value="70℃" selected="true">70℃</option>
								<option value="100℃">100℃</option>
								<option value="130℃">130℃</option>
								<option value=">130℃">> 130℃</option>
							</select>
						</div>
					</div>
				</div>
				<div class="columna_2">
					<div class="row">
						<div class="input-field col s12">
							<label for="icon_prefix_cant_metros" class="texto_input_solicitud">Cantidad (mts)<span class="required">*</span></label>
							<input id="icon_prefix_cant_metros" type="text"  name="cantidad_metros" required>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<span id="icon_prefix_cant_tramos" class="texto_input_solicitud"> Longitud y cantidad de tramos</span>
							<input for="icon_prefix_cant_tramos" type="text" name="cantidad_tramos" >
						</div>
					</div>
				    <div class="row">
                        <div class="file-field input-field s4">
                            <div class="btn">
                                <span>Archivo</span>
                                <input type="file" name="archivo">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>  
                        </div>
                    </div>
                    <div class="row">
						<div class="input-field col s12">
							<span texto_input_solicitud class="texto_input_solicitud" for="icon_prefix_observacion">Observacion </span>
							<input id="icon_prefix_observacion" type="text" name="observacion" style="margin-bottom: 250px;">
						</div>
					</div>
					<div class="row">
					<div class="g-recaptcha" data-sitekey="6Ldbq5oUAAAAAOUkdEMu4sYzDOPKf85c_-vRI7r3"></div>
					</div>
					<div class="row">
						<a href="{{ route('solicitud') }}" class="btn btn-retorno">ANTERIOR</a>
                    	<button class="btn-producto" type="submit" name="action">SIGUIENTE
                    	</button>	
					</div>
				</div>
			</div>
		</form>
    </div>
</div>
@endsection