<?php

namespace App\Http\Controllers;

use App\Extensions\Helpers;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index($seccion)
    {
        $slider = slider::where('seccion',$seccion)->orderBy('orden', 'asc')->get();
        return view('adm.sliders.index',compact('slider', 'seccion'));
    }
    public function showCreate($seccion)
    {
        $seccion = $seccion;
        return view('adm.sliders.create',compact('seccion'));
    }

    public function store(Request $request)
    {
        if ($request->hasFile('imagen'))
        {
            $file = $request->file('imagen');
            $imagename = uniqid().'_'.$file->getClientOriginalName();
            if (!file_exists('images/sliders'))
            {
                mkdir('images/sliders',0777,true);
            }
            $file->move('images/sliders',$imagename);
        }else{
            $imagename = 'images/no_disponible.jpg';
        }

        $slider = new Slider();
        $slider->titulo = $request->titulo;
        $slider->texto = $request->texto;
        $slider->imagen = $imagename;
        $slider->seccion = $request->seccion;
        $slider->orden = $request->orden;
        $seccion = $request->seccion;
        $slider->save();
        return redirect()->route('slider',compact('seccion'))->with('alert', "Registro almacenado exitósamente" );
    }


    public function showEdit($id)
    {
        $slider = Slider::find($id);

        return view('adm.sliders.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        if ($request->hasFile('imagen'))
        {
            $file = $request->file('imagen');
            $imagename = uniqid().'_'.$file->getClientOriginalName();
            if (!file_exists('images/sliders'))
            {
                mkdir('images/sliders',0777,true);
            }
            $file->move('images/sliders',$imagename);
        }else{
            $imagename = $slider->imagen;
        }

        $slider->titulo = $request->titulo;
        $slider->texto = $request->texto;
        $slider->imagen = $imagename;
        $slider->seccion = $request->seccion;
        $slider->orden = $request->orden;
        $seccion = $request->seccion;
        $slider->save();
        return redirect()->route('slider',compact('seccion'))->with('alert', "Registro actualizado exitósamente" );
    }

    public function eliminar($id){
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->back()->with('alert', "Registro eliminado exitósamente" );
    }
}
