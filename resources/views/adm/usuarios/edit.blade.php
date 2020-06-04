@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="{{ route('adm.index') }}" class="breadcrumb">Home</a>
                        <a href="{{ route('usuario') }}" class="breadcrumb">Usuarios</a>
                    </div>
                </div>
            </nav>
        <h5>Editar</h5>
        <div class="divider"></div>
        <form method="POST"  enctype="multipart/form-data" action="{{ action('UserController@update', $usuario->id) }}" class="col s12 m8 offset-m2 xl10 offset-xl1">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="input-field col s6">
                    <input id="icon_prefix" type="text"  name="username" readonly value="{{$usuario->username}}" >
                    <label for="icon_prefix">Nombre de usuario</label>
                </div>
                <div class="input-field col s6">
                    <input id="icon_prefix_nombre" type="text"  name="name" value="{{$usuario->name}}" >
                    <label for="icon_prefix_nombre">Nombre</label>
                </div>
                <div class="input-field col s6">
                    <input id="icon_prefix_password" type="password" name="password">
                    <label for="icon_prefix_password">Contraseña</label>
                </div>
                <div class="input-field col s6">
                    <input id="icon_prefix_email" type="text"  name="email" value="{{$usuario->email}}"  >
                    <label for="icon_prefix_email">Email</label>
                </div>
            </div>
            <div class="row">
                
                <div class="input-field col s6">
                    <select id="isAdmin" name="isAdmin" disabled>
                        <option value="0">::Seleccione Tipo de Usuario::</option>
                        <option value="1"> Administrador</option>
                        <option value="2"> Usuario</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="right">
                    <a href="{{action('UserController@index')}}"  class="waves-effect waves-light btn">Cancelar</a>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    let usuario = {!! json_encode($usuario) !!}
    $("#isAdmin").val(usuario.isAdmin);
</script>
@endsection
