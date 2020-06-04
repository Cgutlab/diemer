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
                        <a href="#!" class="breadcrumb">Usuarios</a>
                    </div>
                </div>
            </nav>
            <h5>Usuarios</h5>
            <div class="divider"></div>
            <table class="index-table responsive-table ">
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Nombre</th>
                    <th>Opciones</th>

                </tr>
                </thead>
                <tbody>
                @forelse($usuarios as $u)
                    <tr>
                        <td>{{ $u->username }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ ($u->isAdmin == '1')?'Administrador':'Usuario' }}</td>
                        <td>
                            <a href=" {{ action('UserController@showEdit', $u->id)}} " class="btn-floating btn-large waves-effect waves-light orange"><i style="font-size: 20px" class="material-icons dp48">create</i></a>
                            @if(Auth::user()->id != $u->id)
                            <a onclick="return confirm('¿Realmente desea eliminar este registro?')"  href=" {{ action('UserController@eliminar', $u->id)}} " class="btn-floating btn-large waves-effect waves-light deep-orange"><i style="font-size: 20px" class="material-icons dp48">delete</i></a>
                            @endif
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
