@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Meta Datos</a>
                    </div>
                </div>
            </nav>
            <h5>Meta Datos</h5>
            <div class="divider"></div>
            <form method="POST"  enctype="multipart/form-data" action="{{action('MetadataController@store')}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
                @csrf
                @method('PUT')
                <div class="row">
                    <h5>Agregar</h5>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="icon_prefix" type="text" name="palabras_clave" required>
                            <label for="icon_prefix">Keyword </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <h6 for="textarea1">Descripción</h6>
                        </div>
                        <div class="input-field col s12">
                            <textarea  name="descripcion" required>  </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <select class="materialSelect  " id="select-seccion" name="seccion" >
                                <option  value="0" disable="true" selected="true">Seleccionar secci&oacute;n</option>
                                    <option value="home">Home </option>
                                    <option value="empresa">Empresa</option>
                                    <option value="producto">Producto </option>
                                    <option value="contacto">contacto</option>
                            </select>
                            <label for="icon_prefix">Secci&oacute;n</label>
                        </div>
                    </div>
                </div>
                    <div class="right">
                        <a href="{{ action('MetadataController@index') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>
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