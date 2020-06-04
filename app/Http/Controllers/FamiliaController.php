<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familias;

class FamiliaController extends Controller
{
    public function index(){
        $familia = Familias::orderBy('orden', 'ASC')->paginate(10);
        return view('adm.familia.index', compact('familia'));
    }

    public function showCreate(){
        return view('adm.familia.create');
    }
    
    public function store(Request $request, Familias $item){
        if ($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $imagename = uniqid().'_'.$file->getClientOriginalName();
            if (!file_exists('images'))
                mkdir('images',0777,true);
            $file->move('images',$imagename);
        }else
            $imagename = 'no-disponible.jpg';
        
        $item->nombre     = $request->nombre;
        $item->imagen     = $imagename;
        $item->orden      = $request->nombre;
        $item->save();

        return redirect()->route('familia_show')->with('status', 'Se añadio una <strong>Familia</strong> con exitó.');
}
    public function showEdit($id)
    {
        $familia = Familias::find($id);
        return view('adm.familia.edit', compact('familia'));
    }
    public function update(Request $request, $data)
    {
        $familia = Familias::find($data);
        if ($request->hasFile('imagen'))
        {
            $file = $request->file('imagen');
            $imagename = uniqid().'_'.$file->getClientOriginalName();
            if (!file_exists('images'))
            {
                mkdir('images',0777,true);
            }
            $file->move('images',$imagename);
        }else{
            $imagename = $familia->imagen;
        }
        $familia->nombre = $request->nombre;
        $familia->imagen = $imagename;
        $familia->orden      = $request->nombre;
        $familia->save();
        return redirect()->route('familia_show')->with('alert', "Registro actualizado exitósamente" );
    }
    public function eliminar($id){
        $familia = Familias::find($id);
        $familia->delete();
        return redirect()->route('familia_show')->with('alert', "Registro eliminado exitósamente" );
    }
}
