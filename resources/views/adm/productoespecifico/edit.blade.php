@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Producto Especifico</a>
                    </div>
                </div>
            </nav>
            <h5>Producto Especifico</h5>
            <div class="divider"></div>

            <form method="POST"  enctype="multipart/form-data" action="{{action('ProductoEspController@update', $productoEsp->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
                @csrf
                @method('PUT')
                <div class="row">
                    <h5>Editar</h5>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="icon_prefix" type="text" class="validate" name="nombre" value="{{$productoEsp->nombre}}" >
                            <label for="icon_prefix">Nombre </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <select class="materialSelect  " id="select-family" name="familia_id" >
                                <option  value="0" disable="true" selected="true">Seleccionar familia</option>
                                @foreach ($familias as $f)
                                    <option value="{{ $f->id }}">{{ $f->nombre }} </option> 
                                @endforeach
                            </select>
                            <label for="icon_prefix">Familia</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <select class="materialSelect  " id="select-productG" name="productoG_id" >
                                <option  value="0" disable="true" selected="true">Seleccionar Producto General</option>
                                    @foreach ($productoG as $f)
                                        @if($productoEsp->general_product_id == $f->id)
                                            <option value="{{ $f->id }}" selected>{{ $f->nombre }} </option>
                                            @else
                                            <option value="{{ $f->id }}">{{ $f->nombre }} </option>
                                        @endif
                                    @endforeach 
                            </select>
                            <label for="icon_prefix">Producto General</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="file-field input-field s6">
                            <div class="btn">
                                <span>Imagen</span>
                                <input type="file" name="imagen" accept=".png,.jpg" >
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" value="{{$productoEsp->imagen}}">
                                <span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 569x380</span>
                            </div>
                            <div class="img-producto">
                                <img class="img-producto" src="{{ asset('images/'.$productoEsp->imagen) }}">
                            </div> 
                        </div>
                        
                    </div>
 
                    <div class="right">
                        <a href="{{ action('ProductoEspController@index') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>
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
    $('select').formSelect();
    let productoG = {!! json_encode($productoG) !!}
    let familia = {!! json_encode($familias) !!}
    
    for(i=0;i<productoG.data.length;i++){
        if(productoG.data[i].id == {{$productoEsp->general_product_id}})
            $("#select-family").val(productoG.data[i].family_id)
    }
    
    
    $(function () { 
        $('#select-family').change(function (event) {
            $('#select-productG').empty();
            let ruta = '{{ route('lista_pg') }}'
            var familia_id = $(this).val();
            ruta+='/?id='+familia_id+'';
            $.get(ruta, function(data) {
                $('#select-productG').empty();
                $('#select-productG').append('<option  value="0" disable="true" selected="true">Seleccionar Producto General</option>');
                for(i=0;i<data.length;i++){
                    $('#select-productG').append('<option value="'+ data[i].id +'">'+ data[i].nombre +'</option>');
                }
                $('select').formSelect();
            });
        });
    });

</script>

@endsection