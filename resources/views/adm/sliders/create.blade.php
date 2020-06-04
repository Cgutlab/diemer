@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="{{ route('adm.index') }}" class="breadcrumb">Home</a>
                        <a href="{{ route('slider', $seccion) }}" class="breadcrumb">Slider</a>
                        <a href="" class="breadcrumb">Nuevo</a>
                    </div>
                </div>
            </nav>
            <form method="POST"  enctype="multipart/form-data" action="{{action('SliderController@store')}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
                {{ csrf_field() }}
                {{ method_field('PUT')}}

                <div class="row">
                    <input id="icon_prefix_orden" type="hidden" name="seccion" value="{{$seccion}}">
                    <h5>Crear Slider</h5>
                    <div class="divider"></div>
                    <div class="file-field input-field s12">
                        <div class="btn">
                            <span>Imagen</span>
                            <input type="file" name="imagen" accept=".png,.jpg" required>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                            <span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 1400x450</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix_orden" type="text" name="orden" required>
                            <label for="icon_prefix_orden">Orden</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <h6>Texto</h6>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="texto" name="texto"> </textarea>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="right">
                        <a href="{{ route('slider', $seccion)}}" class="waves-effect waves-light btn btn-color">Cancelar</a>
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

    </script>
@stop