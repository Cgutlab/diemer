@extends('page.productos.producto')

@section('informacion')
<div class="contenedor_productos">
    @forelse ($productoGS as $item)
        <div class="producto_g">
            <a href="{{ route('seccion-pesp', $item->id) }}">
                <img class="img_progen" src="{{ asset('images/'.$item->imagen) }}">
                <span class="nombre_progen"> {{ $item->nombre }} </span>
            </a>
        </div>
    @empty
        @if($productoF!=null)
            @foreach($productoF as $item)
                <div class="producto_aspirante">
                    <a href="{{ route('seccion-pf', $item->id) }}">
                        <img class="img_producto" src="{{ asset('images/'.$item->imagen) }}">
                        <span class="producto"> {{ $item->nombre }} </span>
                    </a>  
                </div>
            @endforeach
        @else
            No hay sub familias ni productos afiliados a esta familia
        @endif
    @endforelse   
</div>
@endsection
@push('script')
<script>
    var breadcrumbs   = JSON.parse('{!! session()->get('breadcrumbs') !!}')
</script>
@endpush