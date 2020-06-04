<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Metadata;

class MetadataController extends Controller
{
    public function index()
    {
        $metadata = Metadata::orderBy('id', 'ASC')->get();
        return view('adm.metadata.index', compact('metadata'));
    }
    public function showCreate()
    {
        return view('adm.metadata.create');
    }

    public function store(Request $request, Metadata $item)
    {
        $item->palabras_clave = $request->palabras_clave;
        $item->descripcion    = $request->descripcion;
        $item->seccion        = $request->seccion;
        $item->save();
        return redirect()->route('metadata')->with('status', 'Se añadio una <strong>meta data</strong> con exitó.');
}

    public function showEdit($id)
    {
        $metadata = Metadata::find($id);
        return view('adm.metadata.edit', compact('metadata'));
    }

    public function update(Request $request, $data)
    {
        $metadata = Metadata::find($data);
        
        $metadata->palabras_clave = $request->palabras_clave;
        $metadata->descripcion    = $request->descripcion;
        $metadata->seccion        = $request->seccion;;
        $metadata->save();
        return redirect()->route('metadata')->with('alert', "Registro actualizado exitósamente" );
    
    }
}
