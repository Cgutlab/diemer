@extends('layouts.app')

@section('content')
<div class="home_container">
	<div class="slider">
		<ul class="slides">
            @foreach ($slider as $item)
                <li>
                    <img src="{{asset('images/sliders/'.$item->imagen)}}">
                    <div class="caption left-align texto_slider">{!!$item->texto!!}</div>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="familias_img">
        @foreach ($familia as $item)
        <div class="cols s4">
            <a href="{{ route('seccion-pg', $item->id) }}">
                <img class="img_familia" src="{{ asset('images/'.$item->imagen) }}">
                <span class="nombre_familia"> {{ $item->nombre }} </span>
            </a>
        </div>
        @endforeach
    </div>
    <div id="certificado" style="width: 100%;">
        <div class="row certificbar" > 
            @foreach ($icons_trayectoria as $item)
            <div class="col s12 m2 l2" style ="display: flex; justify-content: center; margin:0;">
                    <img class="img_banner" src="{{ asset('images/iconos/'.$item->imagen) }}">
            </div>
            @endforeach
        </div>      
    </div>
    <div class="miniaturas" >
        @foreach ($icons_destacado as $item)
        <div>
            <a href="{{ route('seccion-pesp', $item->subfamilia_id) }}">
                <img class="circle min_img" src="{{ asset('images/iconos/'.$item->imagen) }}">
                <p>{{ $item->titulo }}</p>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection