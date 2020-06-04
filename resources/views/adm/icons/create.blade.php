@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="{{ route('adm.index') }}" class="breadcrumb">Home</a>
                        <a href="{{ route('icons', $seccion) }}" class="breadcrumb">Iconos</a>
                        <a href="" class="breadcrumb">Nuevo</a>
                    </div>
                </div>
            </nav>
            <form method="POST"  enctype="multipart/form-data" action="{{action('IconsController@store')}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
                {{ csrf_field() }}
                {{ method_field('PUT')}}

                <div class="row">
                    <h5>Nuevo Icono</h5>
                    <div class="divider"></div>
                    <input type="hidden" name="seccion" value="{{$seccion}}">
                    <div class="file-field input-field s12">
                        <div class="btn">
                            <span>Imagen</span>
                            <input type="file" name="imagen" accept=".png,.jpg" >
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                            <span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 1400x450</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="icon_prefix_titulo" type="text" name="titulo" >
                            <label for="icon_prefix_titulo">Titulo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="icon_prefix_orden" type="text" name="orden" >
                            <label for="icon_prefix_orden">Orden</label>
                        </div>
                    </div>
                    @if($seccion=="destacados")
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
                            </select>
                            <label for="icon_prefix">Sub Familia</label>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="right">
                        <a href="{{ route('icons', $seccion)}}" class="waves-effect waves-light btn btn-color">Cancelar</a>
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
 $('#select-family').change(function (event) {
        $('#select-productG').empty();
        let familia_id = $(this).val();
        let ruta = '{{ route('lista_pg') }}'
        ruta+='/?id='+familia_id+'';
        $.get(ruta, function(data) {
            $('#select-productG').empty();
            $('#select-productG').append('<option  value="0" disable="true" selected="true">Seleccionar sub familia</option>');
            for(i=0;i<data.length;i++){
                $('#select-productG').append('<option value="'+ data[i].id +'">'+ data[i].nombre +'</option>');
            } 
            $('select').formSelect();
        });
    });
</script>
@stop