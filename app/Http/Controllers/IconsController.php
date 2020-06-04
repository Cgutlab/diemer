<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Icon;
use App\Familias;
use App\ProductoGenerales;

class IconsController extends Controller
{
    public function index($seccion)
    {
        $iconos = Icon::where('seccion',$seccion)->orderBy('orden', 'asc')->get();
        return view('adm.icons.index',compact('iconos','seccion'));
    }
    public function showCreate($seccion)
    {
        $seccion = $seccion;
        $familias  = Familias::orderBy('orden', 'asc')->get();
        return view('adm.icons.create', compact('seccion','familias'));
    }

    public function store(Request $request)
    {
        if ($request->hasFile('imagen'))
        {
            $file = $request->file('imagen');
            $imagename = uniqid().'_'.$file->getClientOriginalName();
            if (!file_exists('images/iconos'))
            {
                mkdir('images/iconos',0777,true);
            }
            $file->move('images/iconos',$imagename);
        }else{
            $imagename = 'no-disponible.jpg';
        }

        $icono = new Icon();
        $icono->imagen        = $imagename;
        $icono->titulo        = $request->titulo;
        $icono->seccion       = $request->seccion;
        $icono->orden         = $request->orden;
        $icono->subfamilia_id = $request->productoG_id;
        $icono->familia_id    = $request->familia_id;
        $icono->save();
        return redirect()->route('icons', $icono->seccion)->with('alert', "Registro almacenado exitósamente" );
    }

    public function showEdit($id)
    {
        $icono      = Icon::find($id);
        $familias   = Familias::orderBy('orden', 'asc')->get();
        $productoG  = ProductoGenerales::where('family_id', $icono->familia_id)->orderBy('orden', 'asc')->get();
        return view('adm.icons.edit', compact('icono','familias','productoG'));
    }

    public function update(Request $request, $id)
    {
        $icono = Icon::find($id);
        if ($request->hasFile('imagen'))
        {
            $file = $request->file('imagen');
            $imagename = uniqid().'_'.$file->getClientOriginalName();
            if (!file_exists('images/iconos'))
            {
                mkdir('images/iconos',0777,true);
            }
            $file->move('images/iconos',$imagename);
        }else{
            $imagename = $icono->imagen;
        }

        $icono->imagen        = $imagename;
        $icono->titulo        = $request->titulo;
        $icono->seccion       = $request->seccion;
        $icono->orden         = $request->orden;
        $icono->subfamilia_id = $request->productoG_id;
        $icono->familia_id    = $request->familia_id;
        $icono->save();
        return redirect()->route('icons', $icono->seccion)->with('alert', "Registro actualizado exitósamente" );
    }

    public function eliminar($id){
        $icono = Icon::find($id);
        $icono->delete();
        return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
    }
}
