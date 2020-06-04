<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contents;

class LogoController extends Controller
{
    public function index()
    {
        $logo = Contents::where('bloque', "Logo")->orderBy('orden', 'ASC')->paginate(2);
        return view('adm.logo.index', compact('logo'));
    }
    public function showCreate()
    {
        return view('adm.logo.create');
    }

    public function store(Request $request, Contents $item)
    {
        if ($request->hasFile('imagen'))
        {
            $file = $request->file('imagen');
            $imagename = uniqid().'_'.$file->getClientOriginalName();
            if (!file_exists('images/logo'))
            {
                mkdir('images/logo',0777,true);
            }
            $file->move('images/logo',$imagename);
        }else{
            $imagename = 'no-disponible.jpg';
        }
        $item->orden     = $request->orden;
        $item->titulo    = $request->titulo;
        $item->bloque    = "Logo";
        $item->seccion   = $request->titulo;
        $item->imagen    = $imagename;
        $item->save();
        return redirect()->route('logo')->with('status', 'Se añadio un <strong>Logo</strong> con exitó.');
}

    public function showEdit($id)
    {
        $logo = Contents::find($id);
        return view('adm.logo.edit', compact('logo'));
    }

    public function update(Request $request, $data)
    {
        $logo = Contents::find($data);
        if ($request->hasFile('imagen'))
        {
            $file = $request->file('imagen');
            $imagename = uniqid().'_'.$file->getClientOriginalName();
            if (!file_exists('images/logo'))
            {
                mkdir('images/logo',0777,true);
            }
            $file->move('images/logo',$imagename);
        }else{
            $imagename = $logo->imagen;
        }

        $logo->orden = $request->orden;
        $logo->seccion = $request->seccion;
        $logo->imagen = $imagename;
        $logo->save();
            return redirect()->route('logo')->with('alert', "Registro actualizado exitósamente" );
    }

    public function eliminar($id){
        $logo = Contents::find($id);
        $logo->delete();
        return redirect()->route('logo')->with('alert', "Registro eliminado exitósamente" );
    }
}