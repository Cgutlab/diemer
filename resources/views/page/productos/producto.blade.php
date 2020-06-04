@extends('layouts.app')

@section('content')
<div class="contenido">
    <div class="producto-breadcrumb">
        <div class="breadcrumb-inner">Producto</div>
        <div id="breadcrumps" class="breadcrumb-inner"></div>
    </div>

    @include('partials.sidebar')
    @yield('informacion')
    
</div>
@endsection
@push('script')
<script>
    var breadcrumbs   = JSON.parse('{!! session()->get('breadcrumbs') !!}')
        html=''
        if(breadcrumbs['f'] !== undefined)
        html+= `| <a href="{{ url('/producto/f-')}}${breadcrumbs['f']['id']}">${breadcrumbs['f']['nombre']}</a>`
        if(breadcrumbs['pg'] !== undefined)
            html+= `| <a href="{{ url('/producto/pg-') }}${breadcrumbs['pg']['id']}">${breadcrumbs['pg']['nombre']}</a>`
        if(breadcrumbs['pf'] !== undefined)
            html+= `| <a href="{{ url('/producto/pf-') }}${breadcrumbs['pf']['id']}">${breadcrumbs['pf']['nombre']}</a>`
    $("#breadcrumps").append(html);
</script>
@endpush