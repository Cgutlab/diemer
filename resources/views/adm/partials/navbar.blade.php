	<nav>
		<div class="nav-wrapper nav-admin">
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><span style="color: #FFFFFF; padding-right: 20px" > BIENVENIDO, {{ ucfirst(Auth::user()->name) }}  </span></li>
				<li>
					<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
						Cerrar Sesión
					</a>
				</li>
			</ul>
		</div>
	</nav>
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form>