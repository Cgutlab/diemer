@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="{{ route('adm.index') }}" class="breadcrumb">Home</a>
                        <a href="{{ route('metadata') }}" class="breadcrumb">Meta Datos</a>
                    </div>
                </div>
            </nav>
            <h5>Meta Datos</h5>
            <div class="divider"></div>
            <table class="index-table responsive-table ">
                <tbody>
                <thead>
                <tr>
                    <th>keyword</th>
                    <th>Descripción</th>
                    <th>Sección</th>
                    <th>Editar</th>
                </tr>
                </thead>
                    @if($metadata)
                        @foreach ($metadata as $item)
                        <tr>
                            <td>{{ $item->palabras_clave }}</td>
                            <td>{{ $item->descripcion }}</td>
                            <td>{{ $item->seccion }}</td>
                            <td> <a href=" {{ action('MetadataController@showEdit', $item->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i style="font-size: 20px" class="material-icons dp48">create</i></a></td>
                        </tr>
                        @endforeach
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
