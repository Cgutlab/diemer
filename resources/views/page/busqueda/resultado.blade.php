@extends('layouts.app')
@section('content')
<div class="container" style="width:100%; display:block;">
    <div class="row">
        <div class="col s12 m12 l12">
            <form id="buscador" action="{{ route('buscador') }}" method="post"  style="display: flex; align-items: center">
                @csrf
                @method('POST')
                <div class="input-field col s10">
                    <input id="icon_prefix_busqueda" type="text" name="buscador" >
                    <label for="icon_prefix_busqueda">Buscar </label>
                </div>
                <div class="col s2">
                    <button type="submit" class="btn-producto">Buscar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div id="resultado" class="col s12 m12 l12">
            <div class="row">
                <h5>Familias</h5>
                @forelse($data['familia'] as $df)
                    <div class="col s12 m4 l4" style="margin-bottom:40px;height: 195px;">
                        <div class="familia_resultado" >
                            <a href="{{ route('seccion-pg', $df->id) }}">
                                <img src="{{ asset('images/'.$df->imagen) }}">
                                <p class="nombre_familia_resultado"> {{ $df->nombre }} </p>
                            </a>
                        </div>
                    </div>
                @empty
                    No hay resultados encontrados
                @endforelse
                
            </div>
            <div class="row">
                <h5>Sub Familias</h5>
                @forelse($data['subfamilia'] as $dsf)
                <div class="col s12 m3 l3" style="margin-bottom:40px; height: 195px;">
                    <div class="subfamilia_resultado">
                        <a href="{{ route('seccion-pesp', $dsf->id) }}" class="">
                            <img src="{{ asset('images/'.$dsf->imagen) }}">
                            <p class="nombre_familia_resultado"> {{ $dsf->nombre }} </p>
                        </a>
                    </div>
                </div>
                @empty
                    No hay resultados encontrados
                @endforelse
            </div>
            <div class="row">
                <h5>Productos</h5>
                @forelse($data['productos'] as $p)
                <div class="col s12 m4 l2" style="margin-bottom:40px; height: 195px;">
                    <div class="producto_resultado">
                        <a href="{{ route('seccion-pf', $p->id) }}" class="producto_resultado">
                            <img src="{{ asset('images/'.$p->imagen) }}">
                            <p class="producto"> {{ $p->nombre }} </p>
                        </a>
                    </div>
                </div>
                @empty
                    No hay resultados encontrados
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection