@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Sub Familia</a>
                    </div>
                </div>
            </nav>
            <h5>Sub Familia</h5>
            <div class="divider"></div>
            <form method="POST"  enctype="multipart/form-data" action="{{ action('ProductoGeneralController@update', $productoG->id) }}" class="col s12 m8 offset-m2 xl10 offset-xl1">
                @csrf
                @method('PUT')
                <div class="row">
                    <h5>Editar</h5>
                    <div class="divider"></div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="icon_prefix" type="text" class="validate" name="nombre"  value="{{$productoG->nombre}}" >
                            <label for="icon_prefix">Nombre </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <select class="materialSelect  " id="select-category" name="familia_id" >
                                <option  value="0" disable="true" selected="true">Seleccionar familia</option>
                                @foreach ($familias as $f )
                                    @if($productoG->family_id == $f->id)
                                    <option value="{{ $f->id }}" selected>{{ $f->nombre }} </option>
                                    @else
                                    <option value="{{ $f->id }}">{{ $f->nombre }} </option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="icon_prefix">Familia</label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="file-field input-field s6">
                            <div class="btn">
                                <span>Imagen</span>
                                <input type="file" name="imagen" value="{{$productoG->imagen}}" accept=".png,.jpg" >
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="ult_imagen" value="{{$productoG->imagen}}">
                                <span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 569x380</span>
                            </div>
                            <div class="img-producto">
                                <img class="img-producto" src="{{ asset('images/'.$productoG->imagen) }}">
                            </div>
                            
                    </div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="icon_prefix_orden" type="text" class="validate" name="orden"  value="{{$productoG->orden}}" >
                            <label for="icon_prefix_orden">Orden </label>
                        </div>
                    </div>
                    <div class="right">
                        <a href="{{ action('ProductoGeneralController@index') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>
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
</script>
@endsection