<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductoGenerales;
use App\Familias;

class ProductoGeneralController extends Controller
{
    public function index(){
        $productoG = ProductoGenerales::orderBy('family_id', 'asc')->orderBy('orden', 'ASC')->get();
        $familias = Familias::orderBy('orden', 'ASC')->get();
        return view('adm.productogeneral.index', compact('productoG', 'familias'));
    }

    public function showCreate(){
        $familias = Familias::orderBy('id', 'ASC')->get();
        return view('adm.productogeneral.create', compact('familias'));
    }

    public function store(Request $request, ProductoGenerales $item){
        if ($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $imagename = uniqid().'_'.$file->getClientOriginalName();
            if (!file_exists('images'))
                mkdir('images',0777,true);
            $file->move('images',$imagename);
        }else
            $imagename = 'no-disponible.jpg';
        
        $item->nombre     = $request->nombre;
        $item->family_id  = $request->familia_id;
        $item->orden      = $request->orden;
        $item->imagen     = $imagename;
        $item->seccion    = "Producto General";
        $item->save();

        return redirect()->route('producto_general')->with('status', 'Se añadio un <strong>Producto General</strong> con exitó.');
}

    public function showEdit($id)
    {   
        $productoG = ProductoGenerales::find($id);
        $familias = Familias::orderBy('orden', 'ASC')->get();
        return view('adm.productogeneral.edit', compact('productoG', 'familias'));
        
    }
    public function byFamily()
    {

        $productoG = ProductoGenerales::where('family_id', request()->id)->orderBy('orden', 'ASC')->get();
        return response()->json($productoG);
    }

    public function update(Request $request, $data)
    {
        $productoG = ProductoGenerales::find($data);
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
            $imagename = $productoG->imagen;
        }
        $productoG->nombre    = $request->nombre;
        $productoG->imagen    = $imagename;
        $productoG->family_id = $request->familia_id;
        $productoG->orden     = $request->orden;
        $productoG->save();
        return redirect()->route('producto_general')->with('alert', "Registro actualizado exitósamente" );
    }
    public function eliminar($id){
        $productoG = ProductoGenerales::find($id);
        $productoG->delete();
        return redirect()->route('producto_general')->with('alert', "Registro eliminado exitósamente" );
    }
}
