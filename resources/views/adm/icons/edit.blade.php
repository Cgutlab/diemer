@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="{{ route('adm.index') }}" class="breadcrumb">Home</a>
                        <a href="{{ route('icons', $icono->seccion) }}" class="breadcrumb">Iconos</a>
                        <a href="#" class="breadcrumb">Editar</a>
                    </div>
                </div>
            </nav>
            <form method="POST"  enctype="multipart/form-data" action="{{action('IconsController@update',  $icono->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
                {{ csrf_field() }}
                {{ method_field('PUT')}}

                <div class="row">
                    <h5>Editar Iconos</h5>
                    <div class="divider"></div>
                    <div class="file-field input-field s12">
                        <div class="btn">
                            <span>Imagen</span>
                            <input type="file" name="imagen" accept=".png,.jpg" >
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                            <span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 1400x450</span>
                        </div>
                        <div class="img-producto">
                            <img class="img" src="{{ asset('images/iconos/'.$icono->imagen) }}">
                        </div> 
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="icon_prefix_titulo" type="text" name="titulo" value="{{ $icono->titulo }}" >
                            <label for="icon_prefix_titulo">Titulo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="icon_prefix_seccion" type="text" name="seccion" value="{{ $icono->seccion }}" >
                            <label for="icon_prefix_seccion">Sección</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="icon_prefix_orden" type="text" name="orden"  value="{{ $icono->orden }}" >
                            <label for="icon_prefix_orden">Orden</label>
                        </div>
                    </div>
                    @if($icono->seccion=="destacados")
                    <div class="row">
                        <div class="input-field col s6">
                            <select class="materialSelect  " id="select-family" name="familia_id" >
                                <option  value="0" disable="true" selected="true">Seleccionar familia</option>
                                @foreach ($familias as $f )
                                    <option value="{{ $f->id }}" >{{ $f->nombre }} </option>
                                @endforeach
                            </select>
                            <label for="icon_prefix">Familia</label>
                        </div>
                        <div class="input-field col s6">
                            <select class="materialSelect  " id="select-productG" name="productoG_id" >
                                <option  value="0" disable="true" selected="true">Seleccionar sub familia</option>
                                @foreach ($productoG as $pg )
                                    <option value="{{ $pg->id }}" >{{ $pg->nombre }} </option>
                                @endforeach
                            </select>
                            <label for="icon_prefix">Sub Familia</label>
                        </div>
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="right">
                        <a href="{{ route('icons',$icono->seccion)}}" class="waves-effect waves-light btn btn-color">Cancelar</a>
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
    var icons = {!! $icono !!}
    $("#select-family").val(icons.familia_id)

    $("#select-productG").val(icons.subfamilia_id)

    //Filtrar el selector de Producto General
    $('#select-family').change(function (event) {
        $('#select-productG').empty();
        let familia_id = $(this).val();
        let ruta = '{{ route('lista_pg') }}'
        ruta+='/?id='+familia_id+'';
        $.get(ruta, function(data) {
            $('#select-productG').empty();

            $('#select-productG').append('<option  value="0" disable="true" selected="true">Seleccionar sub familia </option>');
            for(i=0;i<data.length;i++){
                $('#select-productG').append('<option value="'+ data[i].id +'">'+ data[i].nombre +'</option>');
            } 
            $('select').formSelect();
        });
    });
    </script>
@stop