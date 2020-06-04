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
                        <a href="#!" class="breadcrumb">Logos</a>
                    </div>
                </div>
            </nav>
            <h5>Logos</h5>
            <div class="divider"></div>
            <table class="index-table-logos responsive-table ">
                <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Secci&oacute;n</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse($logo as $l)
                    <tr>
                        <td style="width: 550px"><img src="{{ asset('images/logo/'.$l->imagen) }}"></td>
                        <td>{{$l->seccion}}</td>
                        <td>
                            <a href=" {{ action('LogoController@showEdit', $l->id)}} " class="btn-floating btn-large waves-effect waves-light orange"><i style="font-size: 20px" class="material-icons dp48">create</i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No existen registros</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
    @endsection
