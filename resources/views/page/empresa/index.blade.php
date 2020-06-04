@extends('layouts.app')

@section('content')
<div class="contenedor">
    
    <div class="empresa">
        <span class="titulo_empresa">
            {!! $empresa->titulo !!}
        </span>
        <div class="divisor"></div>
        <div class="descripcion_empresa">
            {!! $empresa->texto !!}
        </div>
    </div>
    <div class="imagenes_empresa">
        <div id="img" class="imagen_1">
            {!! $empresa->titulo_imagen !!}
        </div>
        <div id="img_2" class="imagen_2">
            {!! $empresa->titulo_imagen_2 !!}
        </div>
    </div>

</div>
@endsection
@push('script')
<script>
    let empresa     = {!! json_encode($empresa) !!}
    if( empresa.imagen_2 !== 'undefined'){
        html = '';
        html+=`<img class="img_empresa" src="{{ asset('images/empresa')}}/${empresa.imagen}">`
        $("#img").append(html);
    }

    if( empresa.imagen_2 !== 'undefined'){
        html = '';
        html+=`<img class="img_empresa" src="{{ asset('images/empresa')}}/${empresa.imagen_2}">`
        $("#img_2").append(html);
    }

</script>
@endpush