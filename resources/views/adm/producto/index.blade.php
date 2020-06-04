@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            @include('adm.partials.alert')
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="{{ route('adm.index') }}" class="breadcrumb">Home</a>
                        <a href="{{ route('producto') }}" class="breadcrumb">Producto</a>
                    </div>
                </div>
            </nav>
            <h5>Producto</h5>
            <div class="divider"></div>
            <div class="row">
                <div class="input-field col s6">
                    <select class="materialSelect  " id="select-familia" name="familia_id" >
                        <option  value="0" disable="true" selected="true">Seleccionar familia</option>
                        @foreach ($familias as $f )
                            <option value="{{ $f->id }}">{{ $f->nombre }} </option>
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
            <button id="buscar" class="btn waves-effect waves-light teal" >Buscar<i class="material-icons right">send</i></button>
            <table class="index-table-logos responsive-table ">
                <thead>
                <tr>
                    <th>Orden</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Familia</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody id="tabla">
                @forelse($producto as $p)
                    <tr>
                        <td >{{ $p->orden }}</td>
                        <td ><img style="width: 100px !important;" src="{{ asset('images/'.$p->imagen) }}"></td>
                        <td >{{ $p->nombre }}</td>
                        @foreach ($familias as $item2)
                            @if($p->family_id == $item2->id)
                                <td>{{ $item2->nombre }}</td>
                            @endif
                        @endforeach
                        <td>
                            <a href="{{ action('ProductoController@showEdit', $p->id)}}" class="btn-floating btn waves-effect waves-light orange"><i class="material-icons dp48">create</i></a>
                            <a onclick="return confirm('Realmente desea eliminar este registro?')"  href=" {{ action('ProductoController@eliminar',  $p->id)}} " class="btn-floating btn-large waves-effect waves-light deep-orange"><i class="material-icons dp48">delete</i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No existen registros</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    let familia = {!! $familias !!}

    $('#select-familia').change(function (event) {
        let familia_id = $(this).val();
        let ruta = '{{ route('lista_pg') }}'
        ruta+='/?id='+familia_id+'';
        $.get(ruta, function(data) {
            $('#select-productG').empty();
            $('#select-productG').append('<option  value="0" disable="true" selected="true">Seleccione Sub Familia</option>');
            for(i=0;i<data.length;i++){
                $('#select-productG').append('<option value="'+ data[i].id +'">'+ data[i].nombre +'</option>');
            } 
            $('select').formSelect();
        });

    $('#buscar').click(function(){
        let ruta       = '{{ route('lista_p') }}'
        var id         = []
        id['familia']  = $('#select-familia').val();
        id['productG'] = $('#select-productG').val();
        ruta+='/?familia='+id['familia']+'&&subfamilia='+id['productG'];
        $.get(ruta, function(data) {
            $('#tabla').empty();
            html=''
            nombre = ''
            familia.forEach(function(element) {
                  if(element['id'] == id['familia'])
                   nombre = element['nombre']
                });
            for(i=0;i<data.length;i++){
                html+=`<tr>`
                html+=`<td>${data[i].orden}</td>`
                html+=`<td><img src="http://osolelaravel.com/diemer/images/${data[i].imagen}" style="width: 100px"></td>`
                html+=`<td>${data[i].nombre}</td>`
                html+=`<td>${nombre}</td>`
                html+=`<td>`
                html+=`<a href="http://osolelaravel.com/diemer/adm/producto/edit/${data[i].id} " class=" btn-large waves-effect waves-light orange right"><i style="font-size: 20px" class="material-icons dp48">create</i></a>`
                html+=`<a onclick="return confirm('Realmente desea eliminar este registro?')"  href="http://osolelaravel.com/diemer/adm/producto_general/eliminar/${data[i].id} " class=" btn-large waves-effect waves-light deep-orange"><i class="material-icons dp48">delete</i></a>`
                html+=`</td> `
                html+=`</tr>`
            }
            $('#tabla').append(html);
        });
    });
});
</script>
@endsection