@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="{{ route('adm.index') }}" class="breadcrumb">Home</a>
                        <a href="{{action('UserController@index')}}" class="breadcrumb">Usuarios</a>
                    </div>
                </div>
            </nav>
            <h5>Crear Usuario</h5>
            <div class="divider" style="margin-bottom: 5%"></div>
            <form method="POST"  enctype="multipart/form-data" action="{{action('UserController@store')}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
                {{ csrf_field() }}

                <div class="row">
                    <div class="input-field col s6">
                        <input id="icon_prefix_user" type="text" class="validate" name="username" required>
                        <label for="icon_prefix_user">Nombre de Usuario</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="icon_prefix_nombre" type="text" class="validate" name="name" required>
                        <label for="icon_prefix_nombre">Nombre</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="icon_prefix_email" type="text" name="email" required>
                        <label for="icon_prefix_email">Email</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="icon_prefix_password" type="password" name="password" required>
                        <label for="icon_prefix_password">Contraseña</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select name="isAdmin" required>
                            <option>::Seleccione Tipo de Usuario::</option>
                                <option value="1">Administrador</option>
                                <option value="2">Usuario</option>
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
