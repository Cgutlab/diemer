@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="{{ route('adm.index') }}" class="breadcrumb">Home</a>
                        <a href="{{ route('producto_esp') }}" class="breadcrumb">Producto Especifico</a>
                    </div>
                </div>
            </nav>
            <h5>Producto Especifico</h5>
            <div class="divider"></div>
            <table class="index-table responsive-table ">
                <tbody>
                    @if(!$productoEsp->isEmpty())
                        @foreach ($productoEsp as $item)
                        <tr>
                            <td><img src="{{ asset('images/'.$item->imagen) }}" style="width: 100px"></td>
                            <td>{{ $item->nombre }}</td>
                            @foreach ($productoG as $item2)
                                @if($item->general_product_id == $item2->id)
                                    <td>{{ $item2->nombre }}</td>
                                @endif
                            @endforeach
                            <td> 
                                <a href=" {{ action('ProductoEspController@showEdit', $item->id)}} " class="btn-floating btn-large waves-effect waves-light orange right"><i style="font-size: 20px" class="material-icons dp48">create</i></a>
                                <a onclick="return confirm('Realmente desea eliminar este registro?')"  href=" {{ action('ProductoEspController@eliminar',  $item->id)}} " class="btn-floating btn-large waves-effect waves-light deep-orange"><i class="material-icons dp48">delete</i></a>
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
        </div>
    </div>
</div>
@endsection

