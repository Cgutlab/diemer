<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DIEMER</title>
    <link rel="icon" href="{{asset('icons/icono_logo.png')}}">
    <!--Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <!--Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!--Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" >
    @yield('style')
</head>
<body style="font-size: 18px;">
    <div id="app">
        @include('partials.navbar')
        <main class=" ">
            @yield('content')
        </main>
        @include('partials.footer')
    </div>

    <!-- Compiled and minified JavaScript -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Librería para el recaptcha -->
    @stack('script')
    <script>
        var onloadCallback = function() {
            grecaptcha.render('html_element', {
              'sitekey' : '6Ldbq5oUAAAAAOUkdEMu4sYzDOPKf85c_-vRI7r3'
            });
          };
          
            $('.collapsible').collapsible();
            $('.sidenav').sidenav();
            
            $('.modal').modal();
    		document.addEventListener('DOMContentLoaded', function() {
    			let elems = document.querySelectorAll('.slider');
        		let slider = M.Slider.init(elems, {
        			height: 300
        		});
    		});     
    		
        $("#buscador").click(function(){
             $('#resultado').empty()
            let ruta = '{{ route('buscador') }}'
            var buscar = $('input[name=buscador]').val();
            ruta+='/?data='+buscar+'';
            $.get(ruta, function(data) {
                console.log(data)
                $.each(data, function( index, value ) {
                  $('#resultado').append(value);
                });
                
            });
          
        });
    </script>
</body>
</html>
