@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Logo</a>
                    </div>
                </div>
            </nav>
            <form method="POST"  enctype="multipart/form-data" action="{{action('LogoController@store')}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
                @csrf
                @method('PUT')
                <div class="row">
                    <h5>Agregar</h5>
                    <div class="divider"></div>
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
                    <div class="input-field col s6">
                        <select class="materialSelect  " id="select-seccion" name="seccion" >
                            <option  value="0" disable="true" selected="true">Seleccionar secci&oacute;n</option>
                                @if($productoG->family_id == $f->id)
                                <option value="header" selected>Header </option>
                                @else
                                <option value="footer">Footer</option>
                                @endif
                        </select>
                        <label for="icon_prefix">Secci&oacute;n</label>
                    </div>
                    <div class="right">
                        <a href="{{ route('logo') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>
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