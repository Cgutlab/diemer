@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Empresa</a>
                    </div>
                </div>
            </nav>
            <h5>Información EMPRESA</h5>
            <div class="divider"></div>

            <form method="POST"  enctype="multipart/form-data" action="{{action('EmpresaController@update', $empresa->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
                @csrf
                @method('PUT')
                <div class="row">
                    <h5>Editar</h5>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix" type="text" class="validate" name="titulo" value="{{$empresa->titulo}}" >
                            <label for="icon_prefix">Titulo </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="file-field input-field s6">
                            <div class="btn">
                                <span>Imagen</span>
                                <input type="file" name="imagen">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path" type="text">
                                <span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 569x380</span>
                            </div>
                            <div class="img-producto">
                                <img class="img-producto" src="{{ asset('images/empresa/'.$empresa->imagen) }}">
                            </div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <h6 for="textarea">Título de la imagen</h6>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="titulo_imagen" name="titulo_imagen"> {{ $empresa->titulo_imagen }} </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="file-field input-field s6">
                            <div class="btn">
                                <span>Imagen 2</span>
                                <input type="file" name="imagen_2">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path" type="text">
                                <span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 569x380</span>
                            </div>
                            <div class="img-producto">
                                <img class="img-producto" src="{{ asset('images/empresa/'.$empresa->imagen_2) }}">
                            </div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <h6 for="titulo_imagen_2">Título imagen 2</h6>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="titulo_imagen_2" name="titulo_imagen_2"> {{ $empresa->titulo_imagen_2 }} </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix_telefono" type="text" name="telefono" value="{{$empresa->telefono}}" >
                            <label for="icon_prefix_telefono">Telefono </label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix_email" type="text"  name="email" value="{{$empresa->email}}" >
                            <label for="icon_prefix_email">Email </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix_calle" type="text" name="calle" value="{{$empresa->calle}}" >
                            <label for="icon_prefix_calle">Calle </label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix_altura" type="text" name="altura" value="{{$empresa->altura}}" >
                            <label for="icon_prefix_altura">Altura </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix_codigo_p" type="text" name="codigo_postal" value="{{$empresa->codigo_postal}}" >
                            <label for="icon_prefix_codigo_p">Codigo Postal </label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix_localidad" type="text" name="localidad" value="{{$empresa->localidad}}" >
                            <label for="icon_prefix_localidad">Localidad </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix_provincia" type="text" name="provincia" value="{{$empresa->provincia}}" >
                            <label for="icon_prefix_provincia">Provincia </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <h6 for="texto">Descripción</h6>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="texto" name="texto"> {{ $empresa->texto }} </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <h6 for="terminos">Términos y condiciones de privacidad</h6>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="terminos" name="terminos"> {{ $empresa->terminos }} </textarea>
                        </div>
                    </div>
                    <div class="right">
                        <a href="{{ action('EmpresaController@index') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>
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
        CKEDITOR.replace('texto');

        CKEDITOR.config.height = '150px';

        CKEDITOR.config.width = '100%';
                
        CKEDITOR.replace('titulo_imagen');

        CKEDITOR.config.height = '150px';

        CKEDITOR.config.width = '100%';
        
        CKEDITOR.replace('titulo_imagen_2');

        CKEDITOR.config.height = '150px';

        CKEDITOR.config.width = '100%';

        CKEDITOR.replace('terminos');

        CKEDITOR.config.height = '150px';

        CKEDITOR.config.width = '100%';
    </script>
@stop