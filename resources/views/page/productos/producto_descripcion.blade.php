@extends('page.productos.producto')

@section('informacion')
<div class="contenedor_padre">
<div class="contenedor_producto">
    <div class="galeria" style="max-width: 300px">
        <div class="slider-for">
            <img src="{{asset('images/'.$producto->imagen)}}">
            @foreach($producto->imagenes as $item)
                <img src="{{asset('images/'.$item->imagen)}}">
            @endforeach
        </div>
        <div class="slider-nav" style="max-width: 300px">
            <img src="{{asset('images/'.$producto->imagen)}}" >
            @foreach($producto->imagenes as $item)
                <img src="{{asset('images/'.$item->imagen)}}" >
            @endforeach
        </div>
    </div>
    <div class="producto">
        <span class="nombre_producto">
        {!! $producto->nombre !!}
        </span>
        @if($producto->general_product!=null)
        <span class="nombre_producto_especifico">
            {!! $producto->general_product->nombre !!}
        </span>
        @endif
        <div class="aplicacion">
            {!! $producto->aplicacion !!}
        </div>
        <div class="construccion">
            {!! $producto->construccion !!}
        </div>
        <div class="boton">
            @if(!empty($producto->archivo))
            <button class="boton-producto">
                <a href="{{ asset('files/'.$producto->archivo) }}" target="_blank">
                    FICHA TÉCNICA
                </a>
            </button>
            @endif
            @if(!empty($producto->certificado))
            <button class="boton-producto">
                <a href="{{ asset('files/'.$producto->certificado) }}" target="_blank">
                    CERTIFICADO
                </a>
            </button>
            @endif
        </div>
    </div>
    </div>
    @forelse($x as $item)
    <div class="variante">
        <table class="centered">
            <tbody class="table">
                <tr>
                    <th class="header_tabla" colspan="7">{{$item['titulo']}}</th> 
                </tr>
                <tr>
                    <th class="header_tabla" colspan="7">DIAMETRO</th> 
                </tr>
                <tr>
                    <th class="header_tabla"><div>CODIGO</div></th>
                    <th class="header_tabla" colspan="2"><div>INTERIOR</div></th>
                    <th class="header_tabla"><div>EXTERIOR</div></th>
                    <th class="header_tabla" colspan="3"><div>PRESIÓN DE TRABAJO</div></th>
                </tr>
                <tr>
                    <th class="header_tabla"></th>
                    <th class="header_tabla"><div>Mm.</div></th>
                    <th class="header_tabla"><div>Pulg.</div></th>
                    <th class="header_tabla"><div>Mm.</div></th>
                    <th class="header_tabla"><div>Bar.</div></th>
                    <th class="header_tabla"><div>Libras</div></th>
                    <th class="header_tabla"></th>
                </tr>
                @foreach($item['filas'] as $content => $value )
                <tr>
                    <td>{{ $value['codigo'] }}</td>
                    <td>{{ $value['interior_mm'] }}</td>
                    <td>{{ $value['interior_pulg']}}</td>
                    <td>{{ $value['exterior_mm'] }}</td>
                    <td>{{ $value['presion_bar'] }}</td>
                    <td>{{ $value['presion_libras'] }}</td>
                    <td><button class="boton-consulta"><a href="{{route('producto_peticion', $value['codigo'])}}">CONSULTAR</button></td>
                </tr>
                @endforeach
            </tbody>    
          </table>
      </div>
      @empty
      @endforelse
    
</div>
@endsection
@push('script')
<script> 
    $('.slider-for').slick({
        arrows:false,
        slidesToShow: 1,
        slidesToScroll: 1,
        focusOnSelect: true,
        asNavFor: '.slider-nav',
        variableWidth: true,
        responsive: [
            {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                focusOnSelect: true,
                asNavFor: '.slider-nav',
                variableWidth: true
            }
            }
        ]
    });
    
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        focusOnSelect: true,
        variableWidth: true
    });

    let aspirante   = {!! $listproductos!!}
    var breadcrumbs   = JSON.parse('{!! session()->get('breadcrumbs') !!}')
    html=''
    html+='<div class="submenu">'
    html+='<div class="menu-aspirante">'
    aspirante.forEach(element => {
        html+= `<a id="pf-${element['id']}" href="{{ url('/producto/pf-') }}${element['id']}">${element['nombre']}</a>`
    });
    html+='</div>'
    html+='</div>'
    
    $("#menu_pg-"+breadcrumbs['pg']['id']).append(html);
    //activamos los elementos del menu
    $('#familia-'+breadcrumbs['f']['id']).addClass('active');
    $('#f-'+breadcrumbs['f']['id']).addClass('active');

    $('#pg-'+breadcrumbs['pg']['id']).addClass('active');
    $('#pf-'+breadcrumbs['pf']['id']).addClass('active');
</script>
@endpush