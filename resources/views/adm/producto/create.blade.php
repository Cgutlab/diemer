

@extends('adm.layouts.app')

@section('content')
    <div class="container" id="container-fluid" style="margin-bottom: 5%">
        <div class="row">
            <div class="col s12">
                <nav>
                    <div class="nav-wrapper grey">
                        <div class="col s12">
                            <a href="{{ route('adm.index') }}" class="breadcrumb">Home</a>
                            <a href="{{ route('producto') }}" class="breadcrumb">Productos</a>
                            <a href="#" class="breadcrumb">Nuevo</a>
                        </div>
                    </div>
                </nav>
                <form method="POST"  enctype="multipart/form-data" action="{{ action('ProductoController@store') }}" class="col s12 m8 offset-m2 xl10 offset-xl1">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <h5>Agregar</h5>
                        <div class="divider"></div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="icon_prefix" type="text" name="nombre" >
                                <label for="icon_prefix">Nombre</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="file-field input-field s4">
                                <div class="btn">
                                    <span>Imagen</span>
                                    <input type="file" name="imagen" accept=".png,.jpg,.gif" >
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                    <span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 1400x334</span>
                                </div>  
                            </div>
                            <div class="input-field col s3">
                                <button class="btn waves-effect waves-light btn-color" id="añadirI" name="añadirI" type ="button">AGREGAR IMAGEN
                            </div>
                        </div>
                        <div id="img"></div>
                        <div class="row">
                            <div class="file-field input-field s2">
                                <div class="btn">
                                    <span>Ficha Técnica</span>
                                    <input type="file" name="archivo" accept=".pdf" >
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                    <span class="helper-text" data-error="wrong" data-success="right">Subir PDF</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="file-field input-field s2">
                                <div class="btn">
                                    <span>Certificado</span>
                                    <input type="file" name="certificado"accept=".pdf,.png,.jpg" >
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                    <span class="helper-text" data-error="wrong" data-success="right">Subir PDF</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col s12">
                                <h6 for="textarea1">Aplicación</h6>
                            </div>
                            <div class="input-field col s12">
                                <textarea  name="aplicacion" >  </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <h6 for="textarea1">Construcción</h6>
                            </div>
                            <div class="input-field col s12">
                                <textarea  name="construccion" >  </textarea>
                            </div>
                        </div>
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
                                <option  value="0" disable="true" selected="true">Seleccionar Producto General</option>
                            </select>
                            <label for="icon_prefix">Producto General</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="icon_prefix_orden" type="text" class="validate" name="orden">
                            <label for="icon_prefix_orden">Orden</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light btn-color" onclick="anadirtabla()" name="añadir" type ="button">Agregar Tabla
                        </div>
                    </div>  
                    <div id="tabla">
                        <h5>Tabla</h5>
                        <div class="divider"></div>
                        <div class="row">
                            <div class="input-field col s10">
                                <input id="icon_prefix_tabla" type="text" class="validate" name="titulo_tabla[1]">
                                <input id="tabla_num" type="hidden" name="numero_tabla[]" value="1">
                                <input type="hidden" name="filas[1][fila]" value="1" >
                                <label for="icon_prefix_tabla">Titulo Tabla</label>
                            </div>
                            <div class="input-field col s2">
                                <button class="btn waves-effect waves-light btn-color" onclick="anadirfila(this, 1)" name="añadir" type ="button">+
                            </div>
                        </div>
                        <div class="filas">
                            <div class="row">
                                <div class="input-field col s2">
                                    <input id="icon_prefix_codigo" type="text" class="validate" name="codigo[1][]" >
                                    <label for="icon_prefix_codigo">Codigo</label>
                                </div>
                                <div class="input-field col s2">
                                    <input id="icon_prefix_dmm" type="text" class="validate" name="interior_mm[1][]" >
                                    <label for="icon_prefix_dmm"> Diam. Int.(mm)</label>
                                </div>
                                <div class="input-field col s2">
                                    <input id="icon_prefix_dplg" type="text" class="validate" name="interior_pulg[1][]" >
                                    <label for="icon_prefix_dplg">Diam. Int.(Pulg)</label>
                                </div>
                                <div class="input-field col s2">
                                    <input id="icon_prefix_emm" type="text" class="validate" name="exterior_mm[1][]" >
                                    <label for="icon_prefix_emm">Diam. Ext.(mm)</label>
                                </div>
                                <div class="input-field col s2">
                                    <input id="icon_prefix_prsb" type="text" class="validate" name="presion_bar[1][]" >
                                    <label for="icon_prefix_prsb">Pres. trab.(Bar)</label>
                                </div>
                                <div class="input-field col s2">
                                    <input id="icon_prefix_prsl" type="text" class="validate" name="presion_libras[1][]" >
                                    <label for="icon_prefix_prsl">Pres. trab.(Libras)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <a href="{{ route('producto') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>
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

    //Filtrar el selector de Producto General
    $('#select-family').change(function (event) {
        let familia_id = $(this).val();
        let ruta = '{{ route('lista_pg') }}'
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
    function anadirtabla(){
        if(window.contadorT === undefined)
            window.contadorT = 1
        window.contadorT++
        let html = '';
        html += '<div class="padre">'
            html += '<h5>Tabla</h5>'
            html += '<div class="divider"></div>'
            html += '<div class="row">'
                html += '<div class="input-field col s9">'
                    html += `<input id="icon_prefix_tabla" type="text" class="validate" name="titulo_tabla[${window.contadorT}]">`
                    html += `<input id="tabla_num" type="hidden" name="numero_tabla[]" value="${window.contadorT}" class="tabla_num">`
                    html += `<input type="hidden" name="filas[${window.contadorT}]" value="1" >`
                    html += '<label for="icon_prefix_tabla">Titulo Tabla</label>'
                html += '</div>'
                html += '<div class="input-field col s2">'
                    html += `<button class="btn waves-effect waves-light btn-color" onClick="anadirfila(this, ${window.contadorT})" name="añadir" type ="button">+`
                html += '</div>'
                html += '<div class="input-field col s1">'
                        html += '<button class="btn waves-effect waves-light btn-color" onclick="removertabla(this)" type="button" >X</button>';
                    html += '</div>'
            html += '</div>'
            html += `<div id="filas${window.contadorT}" class="filas">`
                html += '<div class="row">'
                    html += '<div class="input-field col s1">'
                        html += `<input id="icon_prefix_codigo_${window.contadorT}" type="text" class="validate" name="codigo[${window.contadorT}][]">`
                        html += `<label for="icon_prefix_codigo_${window.contadorT}">Codigo</label> `
                    html += '</div>'
                    html += '<div class="input-field col s2">'
                        html += `<input id="icon_prefix_dmm_${window.contadorT}" type="text" class="validate" name="interior_mm[${window.contadorT}][]" > `
                        html += `<label for="icon_prefix_dmm_${window.contadorT}"> Diam. Int.(mm)</label>`
                    html += '</div>'
                    html += '<div class="input-field col s2">'
                        html += `<input id="icon_prefix_dplg_${window.contadorT}" type="text" class="validate" name="interior_pulg[${window.contadorT}][]" > `
                        html += `<label for="icon_prefix_dplg_${window.contadorT}">Diam. Int.(Pulg)</label>`
                    html += '</div>'
                    html += '<div class="input-field col s2">'
                        html += `<input id="icon_prefix_emm_${window.contadorT}" type="text" class="validate" name="exterior_mm[${window.contadorT}][]" >`
                        html += `<label for="icon_prefix_emm_${window.contadorT}">Diam. Ext.(mm)</label>`
                    html += '</div>'
                    html += '<div class="input-field col s2">'
                        html += `<input id="icon_prefix_prsb_${window.contadorT}" type="text" class="validate" name="presion_bar[${window.contadorT}][]" >`
                        html += `<label for="icon_prefix_prsb_${window.contadorT}">Pres. de trab.(Bar)</label>`
                    html += '</div>'
                    html += '<div class="input-field col s2">'
                        html += `<input id="icon_prefix_prsl_${window.contadorT}" type="text" class="validate" name="presion_libras[${window.contadorT}][]" >`
                        html += `<label for="icon_prefix_prsl_${window.contadorT}">Pres. trab.(Libras)</label>`
                    html += '</div>'
                html += '</div>'
            html += '</div>';
        html += '</div>';
        $("#tabla").append(html);
        window.filas=[]
        window.filas['tabla'] = window.contadorT
        window.filas['fila'] = 1
};
function anadirfila(t, id_tabla=1) {
    
    if(window.contadorF === undefined)
        window.contadorF = {}
    if(window.contadorF[id_tabla] === undefined)
        window.contadorF[id_tabla] = 1
    window.contadorF[id_tabla]++
        let html = '';
        html += `<div class="hijo">`
        html += `<input type="hidden" name="filas[${id_tabla}][fila]" value="${window.contadorF[id_tabla]}" >`
            html += '<div class="row">'
                html += '<div class="input-field col s1">'
                    html += `<input id="icon_prefix_codigo_${id_tabla}_${window.contadorF[id_tabla]}" type="text" class="validate" name="codigo[${id_tabla}][]" >`
                    html += `<label for="icon_prefix_codigo_${id_tabla}_${window.contadorF[id_tabla]}">Codigo</label> `
                html += '</div>'
                html += '<div class="input-field col s2">'
                    html += `<input id="icon_prefix_dmm_${id_tabla}_${window.contadorF[id_tabla]}" type="text" class="validate" name="interior_mm[${id_tabla}][]" > `
                    html += `<label for="icon_prefix_dmm_${id_tabla}_${window.contadorF[id_tabla]}"> Diam. Int.(mm)</label>`
                html += '</div>'
                html += '<div class="input-field col s2">'
                    html += `<input id="icon_prefix_dplg_${id_tabla}_${window.contadorF[id_tabla]}" type="text" class="validate" name="interior_pulg[${id_tabla}][]" > `
                    html += `<label for="icon_prefix_dplg_${id_tabla}_${window.contadorF[id_tabla]}">Diam. Int.(Pulg)</label>`
                html += '</div>'
                html += '<div class="input-field col s2">'
                    html += `<input id="icon_prefix_emm_${id_tabla}_${window.contadorF[id_tabla]}" type="text" class="validate" name="exterior_mm[${id_tabla}][]" >`
                    html += `<label for="icon_prefix_emm_${id_tabla}_${window.contadorF[id_tabla]}">Diam. Ext.(mm)</label>`
                html += '</div>'
                html += '<div class="input-field col s2">'
                    html += `<input id="icon_prefix_prsb_${id_tabla}_${window.contadorF[id_tabla]}" type="text" class="validate" name="presion_bar[${id_tabla}][]" >`
                    html += `<label for="icon_prefix_prsb_${id_tabla}_${window.contadorF[id_tabla]}">Pres.trab.(Bar)</label>`
                html += '</div>'
                html += '<div class="input-field col s2">'
                    html += `<input id="icon_prefix_prsl_${id_tabla}_${window.contadorF[id_tabla]}" type="text" class="validate" name="presion_libras[${id_tabla}][]" >`
                    html += `<label for="icon_prefix_prsl_${id_tabla}_${window.contadorF[id_tabla]}">Pres. trab.(Libras)</label>`
                html += '</div>'
                html += '<div class="col s1">'
                    html += '<button class="btn waves-effect waves-light btn-color" onclick="remover(this)" type="button" >X</button>';
                html += '</div>'
            html += '</div>'
        html += '</div>';
        $(t).closest(".row").next(".filas").append(html);
    };

    function remover(t) {
        $(t).closest(".hijo").remove();
        window.contadorF--;
    }
    
    function removertabla(t) {
        $(t).closest(".padre").remove();
        window.contadorT--;
    };

    let countI = 0
    
    $('#añadirI').click(function(){
        if(countI<3){
            let html = '';
            html += `<div class="imgEx">`;
                html += `<div class="row">`;
                    html += `<div class="file-field input-field col s10">`;
                        html += `<div class="btn"> <span>Imagen</span> <input type="file" name="imagenEx[]"> </div>`;
                        html += `<div class="file-path-wrapper">`;
                            html += `<input class="file-path validate" type="text">`;
                            html += '<span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 569x380</span>';
                        html += '</div>';
                    html += '</div>';
                    html += `<div class="col s2">`;  
                        html += '<button class="btn waves-effect waves-light btn-color remove" type="button" >X</button>';
                    html += '</div>';
                html += '</div>';
            html += '</div>';
            $("#img").append(html);
            countI++;
        }
    });
    $(document).on("click", ".remove", function() {
        $(this).closest(".imgEx").remove();
        count--;
    });

    CKEDITOR.replace('aplicacion');

    CKEDITOR.config.height = '150px';

    CKEDITOR.config.width = '100%';

    CKEDITOR.replace('construccion');

    CKEDITOR.config.height = '150px';

    CKEDITOR.config.width = '100%';
</script>
@stop