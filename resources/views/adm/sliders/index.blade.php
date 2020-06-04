@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            @include('adm.partials.alert')
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="{{ route('adm.index') }}" class="breadcrumb">Home</a>
                        <a href="{{ route('slider', $seccion)}}" class="breadcrumb">Slider</a>
                    </div>
                </div>
            </nav>
            <h5>Sliders</h5>
            <div class="divider"></div>
            <table class="index-table responsive-table ">
                <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Orden</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse($slider as $s)
                    <tr>
                        <td><img style="width: 200px" src="{{ asset('images/sliders/'.$s->imagen) }}"></td>
                        <td>{{ $s->orden }}</td>
                        <td>
                            <a href=" {{ action('SliderController@showEdit', $s->id)}} " class="btn-floating btn-large waves-effect waves-light orange"><i style="font-size: 20px" class="material-icons dp48">create</i></a>
                            <a onclick="return confirm('¿Realmente desea eliminar este registro?')"  href=" {{ action('SliderController@eliminar',  $s->id)}} " class="btn-floating btn-large waves-effect waves-light deep-orange"><i class="material-icons dp48">delete</i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No existen registros</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
