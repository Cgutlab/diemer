
	<ul id="slide-out" class="sidenav sidenav-fixed">
		<div class="logo-admin">
			<a href="{{ route('adm.index') }}">
				<img class="responsive-img logo" src="{{ asset('images/logo/'.$datos['logo_header']) }}" alt="">
			</a>
		</div>

		<div class="divider"></div>

			<li class="no-padding">
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey " tabindex="0"><i class="material-icons">account_circle</i> Home</a>
						<div class="collapsible-body"  >
							<ul>
								<li><a href="{{ route('icons_create',['seccion' => 'trayectoria']) }}"><i class="material-icons">navigate_next</i>Crear Iconos trayectoria</a></li>
								<li><a href="{{ route('icons', ['seccion' => 'trayectoria']) }}"><i class="material-icons">navigate_next</i>Ver Iconos trayectoria</a></li>
								<li><a href="{{ route('icons_create', ['seccion' => 'destacados']) }}"><i class="material-icons">navigate_next</i>Crear Iconos destacados</a></li>
								<li><a href="{{ route('icons', ['seccion' => 'destacados']) }}"><i class="material-icons">navigate_next</i>Ver Iconos destacados</a></li>
								<li><a href="{{ route('slider_create', ['seccion' => 'home']) }}"><i class="material-icons">navigate_next</i>Crear Sliders</a></li>
								<li><a href="{{ route('slider', ['seccion' => 'home']) }}"><i class="material-icons">navigate_next</i>Ver Sliders</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey" tabindex="0"><i class="material-icons">business</i>Empresa</a>
						<div class="collapsible-body"  >
							<ul>
								<li><a href="{{ route('empresa') }}"><i class="material-icons">navigate_next</i>Datos de la Empresa</a></li>
							</ul>
						</div>
					</li>
				</ul>
			 	<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey " tabindex="0" ><i class="material-icons">shopping_cart</i>Productos</a>
						<div class="collapsible-body"  >
							<ul>
								<li><a href="{{ route('familia_create') }}" ><i class="material-icons">navigate_next</i>Crear Familias</a></li>
								<li><a href="{{ route('familia_show') }}" ><i class="material-icons">navigate_next</i>Ver Familias</a></li>
								<li><a href="{{ route('producto_general_create') }}" ><i class="material-icons">navigate_next</i>Crear sub-familia</a></li>
								<li><a href="{{ route('producto_general') }}" ><i class="material-icons">navigate_next</i>Ver sub-familia</a></li>
								<li><a href="{{ route('producto_create') }}" ><i class="material-icons">navigate_next</i>Crear Producto</a></li>
								<li><a href="{{ route('producto') }}" ><i class="material-icons">navigate_next</i>Ver Productos</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey " tabindex="0"><i class="material-icons">add_photo_alternate</i> Logos</a>
						<div class="collapsible-body"  >
							<ul>
								<!--<li><a href="{{ route('logo_create') }}"><i class="material-icons">navigate_next</i>Crear logo</a></li>-->
								<li><a href="{{ route('logo') }}"><i class="material-icons">navigate_next</i>Ver logos</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey " tabindex="0"><i class="material-icons">build</i> Meta-datos</a>
						<div class="collapsible-body"  >
							<ul>
								<li><a href="{{ route('meta_create') }}"><i class="material-icons">navigate_next</i>Crear meta datos</a></li>
								<li><a href="{{ route('metadata') }}"><i class="material-icons">navigate_next</i>Ver meta datos</a></li>
							</ul>
						</div>
					</li>
				</ul>
				@if(Auth::user()->isAdmin == '1')
					<ul class="collapsible collapsible-accordion">
						<li class="bold"><a class="collapsible-header waves-effect waves-grey" tabindex="0"  ><i class="material-icons">people</i>Usuarios</a>
							<div class="collapsible-body"  >
								<ul>
									<li><a href="{{ route('usuario_create') }}"><i class="material-icons">navigate_next</i>Crear Usuario</a></li>
									<li><a href="{{ route('usuario') }}"><i class="material-icons">navigate_next</i>Ver Usuarios</a></li>
								</ul>
							</div>
						</li>
					</ul>
				@endif
			</li>
		</div>
	</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
