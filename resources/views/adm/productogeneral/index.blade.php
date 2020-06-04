@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="{{ route('adm.index') }}" class="breadcrumb">Home</a>
                        <a href="{{ route('producto_general') }}" class="breadcrumb">Sub Familia</a>
                    </div>
                </div>
            </nav>
            <h5>Sub Familia</h5>
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
            </div>
            
            <table class="table responsive-table ">
                <tbody id="tabla">
                    @if(!$productoG->isEmpty())
                        @foreach ($productoG as $item)
                        <tr >
                            <td><img src="{{ asset('images/'.$item->imagen) }}" style="width: 100px"></td>
                            <td>{{ $item->nombre }}</td>
                            @foreach ($familias as $item2)
                                @if($item->family_id == $item2->id)
                                    <td>{{ $item2->nombre }}</td>
                                @endif
                            @endforeach
                            <td>{{$item->orden}}</td>
                            <td> 
                                <a href=" {{ action('ProductoGeneralController@showEdit', $item->id)}} " class=" btn-large waves-effect waves-light orange right"><i style="font-size: 20px" class="material-icons dp48">create</i></a>
                                <a onclick="return confirm('Realmente desea eliminar este registro?')"  href=" {{ action('ProductoGeneralController@eliminar',  $item->id)}} " class=" btn-large waves-effect waves-light deep-orange"><i class="material-icons dp48">delete</i></a>
                            </td>  
                        </tr>
                        @endforeach
                    @else
                    <tr>
                        <td colspan="2">No existen registros</td>
                    </tr>
                    @endif
                </tbody>
            </table>
            <ul class="pagination pager" id="myPager"></ul>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    let familia = {!! $familias !!}
    $(function () { 
        $('#select-familia').change(function (event) {
            let ruta = '{{ route('lista_pg') }}'
            var familia_id = $(this).val();
            ruta+='/?id='+familia_id+'';
            $.get(ruta, function(data) {
                $('#tabla').empty();
                html=''
                nombre = ''
                familia.forEach(function(element) {
                      if(element['id'] == familia_id)
                       nombre = element['nombre']
                    });
                for(i=0;i<data.length;i++){
                    html+=`<tr>`
                    html+=`<td><img src="http://osolelaravel.com/diemer/images/${data[i].imagen}" style="width: 100px"></td>`
                    html+=`<td>${data[i].nombre}</td>`
                    html+=`<td>${nombre}</td>`
                    html+=`<td>${data[i].orden}</td>`
                    html+=`<td>`
                    html+=`<a href="http://osolelaravel.com/diemer/adm/producto_general/edit/${data[i].id} " class=" btn-large waves-effect waves-light orange right"><i style="font-size: 20px" class="material-icons dp48">create</i></a>`
                    html+=`<a onclick="return confirm('Realmente desea eliminar este registro?')"  href="http://127.0.0.1:8000/adm/producto_general/eliminar/${data[i].id} " class=" btn-large waves-effect waves-light deep-orange"><i class="material-icons dp48">delete</i></a>`
                    html+=`</td> `
                    html+=`</tr>`
                }
                $('#tabla').append(html);
            });
        });
    });
</script>
@endsection