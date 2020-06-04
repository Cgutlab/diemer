@extends('page.productos.producto')
@section('informacion')
<div class="contenedor_list">
    <div class="aspirantes">
        <h5>Productos</h5>
        <div class="aspirantes_productos">
            @forelse ($producto as $p)
                <div class=" producto_aspirante">
                    <a href="{{ route('seccion-pf', $p->id) }}">
                        <img class="img_producto" src="{{ asset('images/'.$p->imagen) }}">
                        <span class="producto"> {{ $p->nombre }} </span>
                    </a>  
                </div>
            @empty
            <p>No hay productos afiliados a esta rama.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    let producto    = {!! $producto !!}
    var breadcrumbs   = JSON.parse('{!! session()->get('breadcrumbs') !!}')
    html=''
    html+='<div class="submenu">'
        html+='<div class="menu-aspirante">'
        producto.forEach(element => {
            html+= `<a id="pf-${element['id']}" href="{{ url('/producto/pf-') }}${element['id']}">${element['nombre']}</a>`
        });
        html+='</div>'
    html+='</div>'
    $("#menu_pg-"+{!! $id !!}).append(html);
    $('#familia-'+breadcrumbs['f']['id']).addClass('active');
</script>
@endpush
