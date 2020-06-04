<div id="infobar" class="infobar" >
    <div class="icons-topbar">
        
        <img class="icon_info" src="{{ url('icons/telefono_icon.png') }}">
        <a  href="{{ url('tel:'.$datos['telefono'])}}" target="_blank" style="color: #D9D9EA;">
            <p>{{ $datos['telefono'] }}</p>
        </a>
    </div>
    <div class="icons-topbar">
        <img class="icon_info" src="{{ url('icons/email_icon.png') }}">
        <a href="{{url('mailto:'.$datos['email'])}}" target="_blank" style="color: #D9D9EA; margin-left:5px;">
            <p>{{ $datos['email'] }}</p>
        </a>
    </div>
    <div class="icons-topbar">
        <form id="buscador" action="{{ route('buscador') }}" method="post"  style="display: flex; align-items: center">
            @csrf
            @method('POST')
            <div class="input-field col s12 m6 l6" style="margin:0; height:25px;">
    		    <input id="icon_prefix_busqueda" type="text" name="buscador" style="height: 20px; color:#D9D9EA;" placeholder="Buscar" >
    		</div>
    		<button type="submit" style="margin-right:10px;border: 0; background: transparent">  <img class="icon_info" src="{{ url('icons/lupa_icon.png') }}"></button>
		</form>
    </div>
</div>
<nav>
    <div class="nav-wrapper">
        <div class="col s3">
            <a href="{{ url('/') }}" class="brand-logo ">
                <img src="{{ asset('images/logo/'.$datos['logo_header']) }}" class=" responsive-img logo_header">
            </a>
        </div>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <div class="col s9">
           
            <ul class="right hide-on-med-and-down">
                <li><a class="{{ (Request::is('empresa*')) ? 'menu_active' : '' }}" href="{{ url('/empresa') }}">EMPRESA</a></li>
                <li><a class="{{ (Request::is('producto*')) ? 'menu_active' : '' }}" href="{{ url('/producto') }}">PRODUCTOS</a></li>
                <li><a class="{{ (Request::is('mangueras_a_medida*')) ? 'menu_active' : '' }}" href="{{ url('/mangueras_a_medida') }}">MANGUERAS A MEDIDA</a></li>
                <li><a class="{{ (Request::is('contacto*')) ? 'menu_active' : '' }}" href="{{ url('/contacto') }}">CONTACTO</a></li>
            <ul>
        </div>
    </div>
</nav>
<ul class="sidenav" id="mobile-demo">
    <a href="{{ url('/') }}" class="brand-logo ">
            <img src="{{ asset('images/logo/'.$datos['logo_header']) }}" class="responsive-img logo_header_menu">
        </a>
    <li><a class="{{ (Request::is('empresa*')) ? 'menu_active' : '' }}" href="{{ url('/empresa') }}">EMPRESA</a></li>
    <li><a class="{{ (Request::is('producto*')) ? 'menu_active' : '' }}" href="{{ url('/producto') }}">PRODUCTOS</a></li>
    <li><a class="{{ (Request::is('mangueras_a_medida*')) ? 'menu_active' : '' }}" href="{{ url('/mangueras_a_medida') }}">MANGUERAS A MEDIDA</a></li>
    <li><a class="{{ (Request::is('contacto*')) ? 'menu_active' : '' }}" href="{{ url('/contacto') }}">CONTACTO</a></li>
</ul>