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

            <form method="POST"  enctype="multipart/form-data" action="{{action('LogoController@update', $logo->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
                @csrf
                @method('PUT')
                <div class="row">
                    <h5>Editar</h5>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="file-field input-field col s10">
                            <div class="btn">
                                <span>Imagen</span>
                                <input type="file" name="imagen" accept=".png,.jpg" >
                            </div>

                            <div class="file-path-wrapper">
                                <input class="file-path" type="text">
                                <span class="helper-text" data-error="wrong" data-success="right">Tama&ntilde;o recomendado: 569x380</span>
                            </div>
                            <div class="img-producto">
                                <img class="img-logo" src="{{ asset('images/logo/'.$logo->imagen) }}">
                            </div> 
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <select class="materialSelect  " id="select-seccion" name="seccion" >
                                    <option  value="0" disable="true" selected="true">Seleccionar secci&oacute;n</option>
                                        <option value="header" disable="true">Header </option>
                                        <option value="footer" disable="true">Footer</option>
                                </select>
                                <label for="icon_prefix">Secci&oacute;n</label>
                            </div>
                        </div>
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
@section('script')
<script>
    var seccion = "{{$logo->seccion}}"
    $('#select-seccion').val(seccion)
</script>
@endsection
