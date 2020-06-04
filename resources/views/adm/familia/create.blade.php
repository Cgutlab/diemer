@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Familia</a>
                    </div>
                </div>
            </nav>
            <h5>Familia</h5>
            <div class="divider"></div>

            <form method="POST"  enctype="multipart/form-data" action="{{action('FamiliaController@store')}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
                @csrf
                @method('PUT')
                <div class="row">
                    <h5>Agregar</h5>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="icon_prefix" type="text" class="validate" name="nombre" required>
                            <label for="icon_prefix">Nombre </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="file-field input-field s6">
                            <div class="btn">
                                <span>Imagen</span>
                                <input type="file" name="imagen" accept=".png,.jpg" required>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                                <span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 569x380</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="icon_prefix_orden" type="text" class="validate" name="orden">
                            <label for="icon_prefix_orden">Orden </label>
                        </div>
                    </div>
                    <div class="right">
                        <a href="{{ action('FamiliaController@index') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>
                        <button class="btn waves-effect waves-light btn-color" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection