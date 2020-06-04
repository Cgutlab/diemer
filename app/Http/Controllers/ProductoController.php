<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familias;
use App\ProductoGenerales;
use App\Producto;
use App\ProductoVariantes;
use App\ProductoImagenes;

class ProductoController extends Controller
{
    public function index(){
        $familias    = Familias::orderBy('orden', 'ASC')->get();
        $productoG   = ProductoGenerales::orderBy('orden', 'ASC')->get();
        $producto    = Producto::orderBy('family_id', 'ASC')->orderBy('general_products_id', 'ASC')->orderBy('orden', 'ASC')->get();
        return view('adm.producto.index', compact('producto', 'productoG', 'familias'));
    }

    public function showCreate(){
        $familias    = Familias::orderBy('nombre', 'ASC')->get();
        $productoG   = ProductoGenerales::orderBy('nombre', 'ASC')->get();
        return view('adm.producto.create', compact('familias', 'productoG'));
    }
    
    public function store(Request $request, Producto $item){
        
        //Revisa que tenga los archivos de Imagen
        if ($request->hasFile('imagen')){

            //Asignamos el archivo y la imagen
            //Asignamos el nombre con id unico
            $img        = $request->file('imagen');
            $imagename  = uniqid().'_'.$img->getClientOriginalName();
            //Verifica que existan las rutas, si no existen las crea 
            if (!file_exists('images'))
                mkdir('images',0777,true);
            //Mueve los archivos a la ruta indicada
            $img->move('images',$imagename);
        }
        else
            //En caso de no existir archivos, asignamos una imagen de no disponible
            $imagename = 'no-disponible.jpg';
            
        if ($request->hasFile('archivo')){
            $arch       = $request->file('archivo');
            $filename   = uniqid().'_'.$arch->getClientOriginalName();
            if (!file_exists('files'))
                mkdir('files',0777,true);
            $arch->move('files',$filename);
        }
        else
           $filename  = null;

        if ($request->hasFile('certificado')){
            $arch2       = $request->file('certificado');
            $filename2   = uniqid().'_'.$arch2->getClientOriginalName();
            if (!file_exists('files'))
                mkdir('files',0777,true);
            $arch2->move('files',$filename2);
        }
        else
            $filename2  = null;

        //verifica que exista la coleccion de imagenes y las guarda en el directorio
        if ($request->hasFile('imagenEx')){
            for ($i=0;$i < count($request->file('imagenEx')); $i++) {
                $imgEx[$i]      = $request->file('imagenEx.'.+$i);
                $imgexname[$i]  = uniqid().'_'.$imgEx[$i]->getClientOriginalName();
                $imgEx[$i]->move('images',$imgexname[$i]);
            }
        }
        
        $item->nombre                    = $request->nombre;
        $item->aplicacion                = $request->aplicacion;
        $item->construccion              = $request->construccion;
        $item->imagen                    = $imagename;
        $item->archivo                   = $filename;
        $item->certificado               = $filename2;
        $item->general_products_id       = $request->productoG_id;
        $item->family_id                 = $request->familia_id;
        $item->orden                     = $request->orden;
        $item->seccion                   = $request->seccion;
        $item->save();
        //Se cargan los modelos del producto y la guardamos en product_variants
        foreach ($request->filas as $key => $value) {

            for ($i=0; $i <$value['fila'] ; $i++) { 
                $variante = new ProductoVariantes;
                $variante->product_id      = $item->id;
                $variante->codigo          = $request->codigo[$key][$i];
                $variante->interior_mm     = $request->interior_mm[$key][$i];
                $variante->interior_pulg   = $request->interior_pulg[$key][$i];
                $variante->exterior_mm     = $request->exterior_mm[$key][$i];
                $variante->presion_bar     = $request->presion_bar[$key][$i];
                $variante->presion_libras  = $request->presion_libras[$key][$i];
                $variante->numero_tabla    = $key;
                $variante->titulo_tabla    = $request->titulo_tabla[$key];
                $variante->save();
            }
        }
        //Se cargan la coleccion de imagenes y la guardamos en product_images
        if(isset($imgEx)){
            for ($i=0; $i < count($imgEx); $i++) {
                $colleccion = new ProductoImagenes;
                $colleccion->product_id     = $item->id;
                $colleccion->imagen         = $imgexname[$i];
                $colleccion->save();
            }
        }
        
        return redirect()->route('producto')->with('alert', "Se guardo un <strong> producto </strong> exitosamente" );
    }

    public function search()
    {   
        if(request()->subfamilia == 0)
            $producto = Producto::where('family_id', request()->familia)->orderBy('orden', 'ASC')->get();
        else
            $producto = Producto::where('family_id', request()->familia)->where('general_products_id', request()->subfamilia)->orderBy('orden', 'ASC')->get();
        return response()->json($producto);
    }

    public function showEdit($id)
    {
        $familias    = Familias::orderBy('id', 'ASC')->get();
        $productoG   = ProductoGenerales::orderBy('orden', 'ASC')->get();
        $producto    = Producto::find($id);
        $coleccion   = ProductoImagenes::where('product_id', $id)->get();
        $variante    = ProductoVariantes::where('product_id', $id)->orderBy('numero_tabla', 'ASC')->get();
        $x = [];
        foreach($variante as $k =>$v){
            if(!isset($x[$v->numero_tabla]))
                $x[$v->numero_tabla] = [];
                
            $x[$v->numero_tabla][] = [
                'codigo' =>$v->codigo,
                'interior_mm' => $v->interior_mm,
                'interior_pulg' => $v->interior_pulg,
                'exterior_mm' => $v->exterior_mm,
                'presion_bar' => $v->presion_bar,
                'presion_libras' => $v->presion_libras,
                'titulo_tabla' => $v->titulo_tabla
            ];
        }
        return view('adm.producto.edit', compact('familias','productoG','producto','coleccion','x'));
    }

    public function updateGallery(Producto $producto, Request $request, $imgexname){
        //Verificamos que exista el array las id de la galeria y si no existe asignamos un NULL
        if(isset($request->imagenExid) )
            $exist_img = $request->imagenExid;
        else
            $exist_img = NULL;
            
        //Revisa el id de la galeria coincida con las existente y las asigna
        foreach ($producto->imagenes as $key => $value){
            //Si es diferente a vacio y existe en el array de las imagenes, lo asigna
            if($exist_img!= NULL && in_array($value->id, $exist_img )){
                $imgexname[$key]  = ['imagen'   => $value->imagen];
            }
        }
        return $imgexname;
    }

    public function update(Request $request, $data)
    {
        $producto   = Producto::find($data);
        $colleccion = ProductoImagenes::where('product_id', $data)->get();
        $variante   = ProductoVariantes::where('product_id', $data);
        //Revisa que tenga los archivos de Imagen
        if ($request->hasFile('imagen')){

            //Asignamos el archivo y la imagen
            //Asignamos el nombre con id unico
            $img        = $request->file('imagen');
            $imagename  = uniqid().'_'.$img->getClientOriginalName();
            //Verifica que existan las rutas, si no existen las crea 
            if (!file_exists('images'))
                mkdir('images',0777,true);
            //Mueve los archivos a la ruta indicada
            $img->move('images',$imagename);
        }
        else
            //En caso de no existir archivos, los pasa de la base de datos
            $imagename = $producto->imagen;
            
        if ($request->hasFile('archivo')){
            $arch       = $request->file('archivo');
            $filename   = uniqid().'_'.$arch->getClientOriginalName();
            if (!file_exists('files'))
                mkdir('files',0777,true);
            $arch->move('files',$filename);
        }
        else
           $filename  = $producto->archivo;
        if ($request->hasFile('certificado')){
            $arch2       = $request->file('certificado');
            $filename2   = uniqid().'_'.$arch2->getClientOriginalName();
            if (!file_exists('files'))
                mkdir('files',0777,true);
            $arch2->move('files',$filename2);
        }
        else
            $filename2  = $producto->certificado;

        //verifica que exista la coleccion de imagenes y las guarda en el directorio
        if ($request->hasFile('imagenEx')){

            //Revisa el id de la galeria coincida con las existente y las asigna
            if(isset($request->imagenExid) )

                //recorremos la galeria de imagenes que pueda tener el producto
                foreach ($producto->imagenes as $key => $value){

                    //Verificamos que exista el id en el array de los Id de la galeria ya existente
                    if(in_array($value->id, $request->imagenExid )){

                        //creamos un nuevo array y le asignamos el nuevo valor
                        $imgexname[$key]  = ['imagen'   => $value->imagen];
                    }
                }

            //Recorremos las imagenes de la galeria nueva que tenga
            foreach ($request->file('imagenEx') as $key => $value){
                //Si es diferente a vacio y existe en el array de las imagenes, lo asigna
                $imgexcname[$key]  = uniqid().'_'.$value->getClientOriginalName();
                $imgexname[$key]  = ['imagen'   => $imgexcname[$key]];
                $value->move('images',$imgexcname[$key]);
            }

            $imgexname =  self::updateGallery($producto, $request, $imgexname);
        }
        else{
            $imgexname = null;
            $imgexname =   self::updateGallery($producto, $request, $imgexname);
            
        }

        $producto->nombre                    = $request->nombre;
        $producto->aplicacion                = $request->aplicacion;
        $producto->construccion              = $request->construccion;
        $producto->imagen                    = $imagename;
        $producto->archivo                   = $filename;
        $producto->certificado               = $filename2;
        $producto->general_products_id       = $request->productoG_id;
        $producto->family_id                 = $request->familia_id;
        $producto->orden                     = $request->orden;
        $producto->seccion                   = $request->seccion;
        $producto->save();

        
        $variante->delete();
        //Se cargan los modelos del producto y la guardamos en product_variants 
        foreach ($request->filas as $key => $value) {
            for ($i=1; $i <=$value['fila'] ; $i++) {
                $variante = new ProductoVariantes;
                $variante->product_id      = $producto->id;
                $variante->codigo          = $request->codigo[$key][$i-1];
                $variante->interior_mm     = $request->interior_mm[$key][$i-1];
                $variante->interior_pulg   = $request->interior_pulg[$key][$i-1];
                $variante->exterior_mm     = $request->exterior_mm[$key][$i-1];
                $variante->presion_bar     = $request->presion_bar[$key][$i-1];
                $variante->presion_libras  = $request->presion_libras[$key][$i-1];
                $variante->numero_tabla    = $key;
                $variante->titulo_tabla    = $request->titulo_tabla[$key];
                $variante->save();
            }
        }
        //Se cargan la coleccion de imagenes y la guardamos en product_images
        if(isset($imgexname)){
            $producto->imagenes()->delete();
            $producto->imagenes()->createMany($imgexname);
        }
        //Si el array esta vacio vacia la tabla de las imagenes
        else
            $producto->imagenes()->delete();
        
        return redirect()->route('producto')->with('alert', "Registro actualizado exitósamente" );
    }
    
    public function eliminar($id){
        $producto = Producto::find($id);
        $producto->imagenes()->delete();
        $producto->variantes()->delete();
        $producto->delete();
        return redirect()->route('producto')->with('alert', "Registro eliminado exitósamente" );
    }
}
