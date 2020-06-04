<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contents;


class SeccionEmpresaController extends Controller
{
    public function index()
    {
        $empresa = Contents::where('seccion', "Empresa")->first();
        if($empresa->meta()->get()!= NULL){
            $meta_data = $empresa->meta()->get();
            foreach ($meta_data as $key => $value) {
                $key           = $value->meta_key;
                $empresa->$key = $value->meta_value;
            }
        }
        return view('page.empresa.index', compact('empresa'));
    }
}
