<footer id="footer" class="page-footer">
    <div class="container">
        <div class="image_footer">
            <a href="{{ url('/') }}" class="img_footer">
                <img src="{{ asset('images/logo/'.$datos['logo_footer']) }}" class="responsive-img logo_footer">
            </a>
        </div>
        <div class="mapa">
            <h5 class="titulo">MAPA DE SITIO</h5>
            <div style="display:flex;">
                
                <div class="colum">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/empresa') }}">Empresa</a>
                <a href="{{ url('/producto') }}">Productos</a>
                </div>
                <div class="colum" style="line-height: 1; ">
                    <a href="{{ url('/mangueras_a_medida') }}" style="display: block; width: 90px;margin-bottom: 5px; margin-top: 5px;" >
                        Mangueras a Medida
                    </a>
                    <a href="{{ url('/contacto') }}">Contacto</a>
                </div>
            </div>
        </div>
        <div class="info-empresa">
            <h6 class="titulo">DIEMER TRADING SA</h5>
            <div class="line">
                <div class="col_img">
                    <img src="{{asset('icons/mapa_icon.png')}}" class="icono_mapa_contacto">
                </div>
                <div class="col_texto">
                     <a href="{{url('https://www.google.com.ar/maps/search/'.$datos['calle'].'+'.$datos['altura'].'+'.$datos['localidad'].'+'.$datos['provincia'] )}}" class="enlace_footer" target="_blank" >
                        <p>
                        {{$datos['calle'].' '.$datos['altura']}}<br>
                        {{$datos['localidad'].' '.$datos['provincia']}}
                        </p>
                    </a>
                </div>
            </div>

            <div class="line">
                <div class="col_img">
                    <img src="{{asset('icons/telefono_icon.png')}}" class="icono_telefono_contacto">
                </div>


                <div class="col_texto">
                    <a  href="{{ url('tel:'.$datos['telefono'])}}" target="_blank" class="enlace_footer">
                        <p>{{ $datos['telefono'] }}</p>
                    </a>        
                </div>
            </div>
           <div class="line">
                <div class="col_img">
                     <img src="{{asset('icons/email_icon.png')}}" class="icono_email_contacto">
                </div>
                <div class="col_texto">
                    <a href="{{url('mailto:'.$datos['email'])}}" target="_blank" class="enlace_footer">
                        <p>{{ $datos['email'] }}</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="footer-copyright">
        <div class="container-footer">
            <span class="year">© 2019 </span>
            <span class="autor">BY OSOLE</span>
        </div>
    </div>
</footer>