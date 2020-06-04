<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
/**
 	*Muestra una listade los recursos
     */
    public function home($section)
    {
        $element = Content::firstOrNew(['section' => $section]);
        $config = config('dynamic-content.' . $section);

        return view('content.home', [
            'section' => $section,
            'element' => $element,
            'config' => $config,
        ]);
    }

    /**
     * Almacena un nuevo registro
     *
     * 
     */
    public function store(Request $request)
    {
        $item = Content::firstOrNew(['section' => $request->section]);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/sliders');
            $item->image     = $path;
        }
        $item->title     = $request->title;
        $item->text      = $request->text;
        $item->save();
        return redirect()->route('content', ['seccion' => $item->section])->with('status', 'Se añadio un <strong>Slider</strong> con exitó.');
    }
}
