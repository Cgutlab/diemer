<?php

namespace App\Http\Controllers;

use App\Familias;
use App\ProductoGenerales;
use App\Producto;
use App\ProductoVariantes;
use App\ProductoImagenes;
use App\Http\Controller\SeccionContactoController;
use Illuminate\Http\Request;

class SeccionProductoController extends Controller
{
    private $breadcrumbs =  array();

    public function index()
    {
        $familia    = Familias::orderBy('id', 'ASC')->get();
        return view('page.productos.index', compact('familia'));
    }

    public function showProductG($id)
    {
        $familia      = Familias::orderBy('id', 'ASC')->get();
        $productoG    = ProductoGenerales::orderBy('family_id', 'asc')->orderBy('orden', 'ASC')->get();
        $productoGS   = ProductoGenerales::where('family_id', $id)->orderBy('orden', 'ASC')->get();
        $productoF    = Producto::where('family_id', $id)->orderBy('orden', 'ASC')->get();
        if($productoF->isEmpty())
            $productoF= null;
        session()->forget('breadcrumbs');
        
        if($productoGS->first() != null)
            $this->breadcrumbs['f']['nombre']  = $productoGS->first()->familia->nombre;
        else
            $this->breadcrumbs['f']['nombre']  = Familias::where('id', $id)->first()->nombre;
            $this->breadcrumbs['f']['id']      = $id;
        session()->put('breadcrumbs',json_encode($this->breadcrumbs) );

        return view('page.productos.producto_general', compact('productoGS','familia','productoG','productoF'));
    }
    public function showProductEsp($id)
    {
        $familia              = Familias::orderBy('id', 'ASC')->get();
        $productoG            = ProductoGenerales::orderBy('family_id', 'asc')->orderBy('orden', 'ASC')->get();
        $nombreFamilia        = ProductoGenerales::where('id', $id)->orderBy('seccion', 'ASC')->first();
        $producto             = Producto::where('general_products_id', $id)->orderBy('orden', 'ASC')->get();
        $productoF            = Producto::where('family_id', $id)->orderBy('orden', 'ASC')->get();

        session()->forget('breadcrumbs');
        $this->breadcrumbs['f']['nombre']    = $nombreFamilia->familia->nombre;
        $this->breadcrumbs['pg']['nombre']   = $nombreFamilia->nombre;

        $this->breadcrumbs['f']['id']   = $nombreFamilia->familia->id;
        $this->breadcrumbs['pg']['id'] = $id;
                
 
        session()->put('breadcrumbs',json_encode($this->breadcrumbs) );
        return view('page.productos.producto_especifico', compact('familia','productoG','producto','productoF','listExpelente','id'));
        
    }

    public function showProduct($id)
    {
        $familia             = Familias::orderBy('id', 'ASC')->get();
        $productoG           = ProductoGenerales::orderBy('id', 'ASC')->get();
        $producto            = Producto::where('id', $id)->orderBy('nombre', 'ASC')->first();
        $listproductos       = Producto::where('family_id',$producto->family_id)->where('general_products_id',$producto->general_products_id)->orderBy('nombre', 'ASC')->get();

        if($listproductos->isEmpty())
        $listproductos       = Producto::where('family_id',$producto->family_id)->where('general_products_id',$producto->general_products_id)->orderBy('nombre', 'ASC')->get();
        if($producto->variantes->isNotEmpty()){
            $x = [];
            foreach($producto->variantes as $k =>$v){
                if(!isset($x[$v->numero_tabla]))
                    $x[$v->numero_tabla] = [];
                $x[$v->numero_tabla]['titulo'] = $v->titulo_tabla;
                $x[$v->numero_tabla]['filas'][] = [
                    'codigo' =>$v->codigo,
                    'interior_mm' => $v->interior_mm,
                    'interior_pulg' => $v->interior_pulg,
                    'exterior_mm' => $v->exterior_mm,
                    'presion_bar'=> $v->presion_bar,
                    'presion_libras' => $v->presion_libras
                ];
            }
        }
        else
            $x = [];

        $nombreFamilia       = Familias::where('id', $producto->family_id)->orderBy('id', 'ASC')->first();

        //Cargamos el BreadCrumbs
        //Limpiamos los datos almacenados en la session()
        //Cargamos un array y en el indice indicamos elnombre y id de la familia, subfamilia y producto
        //verifica que exista una subfamilia si no existemanda un vacio
        //mandamos el array a la session()
        session()->forget('breadcrumbs');

        $this->breadcrumbs['f']['nombre']        = $nombreFamilia->nombre;
        if($producto->general_product != null)
            $this->breadcrumbs['pg']['nombre']   = $producto->general_product->nombre;
        else
            $this->breadcrumbs['pg']['nombre']   = '';
        $this->breadcrumbs['pf']['nombre']       = $producto->nombre;

        $this->breadcrumbs['f']['id']            = $nombreFamilia->id;

        if($producto->general_product!= null)
            $this->breadcrumbs['pg']['id']       = $producto->general_product->id;
        else
             $this->breadcrumbs['pg']['id']      = '';

        $this->breadcrumbs['pf']['id']           = $id;
        session()->put('breadcrumbs',json_encode($this->breadcrumbs) );
        return view('page.productos.producto_descripcion', compact('familia','productoG','listproductos','producto','id','x'));
        
    }
    
    public function busqueda()
    {
        $familia    = Familias::where('nombre', 'like', '%'.request()->buscador.'%')->orderBy('orden', 'ASC')->get();
        $productoG  = ProductoGenerales::where('nombre', 'like', '%'.request()->buscador.'%')->orderBy('orden', 'ASC')->orderBy('family_id', 'ASC')->get();
        $producto   = Producto::where('nombre', 'like', '%'.request()->buscador.'%')->orderBy('family_id', 'ASC')->orderBy('general_products_id', 'ASC')->orderBy('orden', 'ASC')->get();
        $data=[
            'familia' => [],
            'subfamilia' => [],
            'productos' => []
            ];
        if($familia->isNotEmpty() ){
            $data['familia']= $familia;
        }
        
        if($productoG->isNotEmpty() ){
            $data['subfamilia']= $productoG;
        }
        
        if($producto->isNotEmpty() ){
            $data['productos']= $producto;
        }
         return view('page.busqueda.resultado', compact('data'));
        
    }

    public function Contact($codigo){
        session()->forget('codigo');
        session()->put('codigo', $codigo);
         return redirect()->route('contacto');
    }
}
