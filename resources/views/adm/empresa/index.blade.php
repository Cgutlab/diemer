@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="{{ route('adm.index') }}" class="breadcrumb">Home</a>
                        <a href="{{ route('empresa') }}" class="breadcrumb">Empresa</a>
                    </div>
                </div>
            </nav>
            <h5>Información EMPRESA</h5>
            <div class="divider"></div>
            <input type="hidden" name="seccion" value="{{ $empresa->seccion }}">
            <table class="index-table responsive-table ">
                <tbody>
                @if($empresa)
                <tr>
                        <td><b>Título</b></td>
                        <td>{{ $empresa->titulo }}</td>
                    </tr>
                    <tr>
                        <td><b>Texto</b></td>
                        <td>{!! $empresa->texto !!}</td>
                    </tr>
                    <tr>
                        <td><b>Imagen </b></td>
                        <td><img class="empresa_img" src="{{ asset('images/empresa/'.$empresa->imagen) }}"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href=" {{ action('EmpresaController@showEdit', $empresa->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i style="font-size: 20px" class="material-icons dp48">create</i></a>
                        </td>
                    </tr>
                @else
                    <tr>
                        <td colspan="2">No existen registros</td>
                    </tr>
                @endif
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
