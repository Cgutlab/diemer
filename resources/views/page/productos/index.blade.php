@extends('layouts.app')

@section('content')
<div class="contenedor_familia">
    @foreach ($familia as $item)
        <div class="familia">
            <a href="{{ route('seccion-pg', $item->id) }}">
                <img class="img_familia" src="{{ asset('images/'.$item->imagen) }}">
                <span class="nombre_familia"> {{ $item->nombre }} </span>
            </a>
        </div>
    @endforeach
</div>
@endsection