<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familias;
use App\ProductoGenerales;
use App\Slider;
use App\Icon;
use App\Metadata;

class HomeController extends Controller
{
    public function index()
    {
        $familia            = Familias::orderBy('orden', 'ASC')->get();
        $slider             = Slider::where('seccion', 'home')->orderBy('orden', 'asc')->get();
        $icons_trayectoria  = Icon::where('seccion', 'trayectoria')->orderBy('orden', 'asc')->paginate(3);
        $icons_destacado    = Icon::where('seccion', 'destacados')->orderBy('orden', 'asc')->paginate(7);
        $metadata           = Metadata::where('seccion', 'home')->get();
        return view('page.home.index', compact('familia', 'slider','icons_trayectoria','icons_destacado','metadata'));
    }

}
