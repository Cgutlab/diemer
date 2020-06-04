<?php

namespace App\Http\Controllers;

use App\Contents;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresa = Contents::where('seccion', "Empresa")->first();
        return view('adm.empresa.index', compact('empresa'));
    }

    public function showEdit($id)
    {
        $empresa = Contents::find($id);
        if($empresa->meta()->get()!= NULL){
            $meta_data = $empresa->meta()->get();
            foreach ($meta_data as $key => $value) {
                $key           = $value->meta_key;
                $empresa->$key = $value->meta_value;
            }
        }
        return view('adm.empresa.edit', compact('empresa'));
    }

    public function update(Request $request, $data)
    {
        $empresa = Contents::find($data);
        if ($request->hasFile('imagen'))
        {
            $file       = $request->file('imagen');
            $file2      = $request->file('imagen_2');
            $imagename  = uniqid().'_'.$file->getClientOriginalName();
            $imagename2 = uniqid().'_'.$file2->getClientOriginalName();
            if (!file_exists('images/empresa'))
            {
                mkdir('images/empresa',0777,true);
            }
            $file->move('images/empresa',$imagename);
            $file2->move('images/empresa',$imagename2);
        }else{
            $imagename  = $empresa->imagen;
            if($request->file('imagen_2') == NULL){
                if ($empresa->meta()->get()!= NULL) {
                    $meta_data = $empresa->meta()->get();
                    foreach ($meta_data as $key => $value) {
                        if($value->meta_key == "imagen_2"){
                            $imagename2  = $value->meta_value;
                        }
                    }
                }
            }
            else{
                $file2      = $request->file('imagen_2');
                $imagename2 = uniqid().'_'.$file2->getClientOriginalName();

                if (!file_exists('images/empresa'))
                    mkdir('images/empresa',0777,true);

                $file2->move('images/empresa',$imagename2);
            }
            
        }

        $empresa->titulo = $request->titulo;
        $empresa->texto  = $request->texto;
        $empresa->imagen = $imagename;

        $meta = [
            ['meta_key'   => 'imagen_2',
             'meta_value' => $imagename2,
            ],
            ['meta_key'   => 'telefono',
             'meta_value' => $request->telefono,
            ],
            ['meta_key'   => 'email',
             'meta_value' => $request->email,
            ],
            ['meta_key'   => 'calle',
             'meta_value' => $request->calle,
            ],
            ['meta_key'   => 'altura',
             'meta_value' => $request->altura,
            ],
            ['meta_key'   => 'codigo_postal',
             'meta_value' => $request->codigo_postal,
            ],
            ['meta_key'   => 'localidad',
             'meta_value' => $request->localidad,
            ],
            ['meta_key'   => 'provincia',
             'meta_value' => $request->provincia,
            ],
            ['meta_key'   => 'titulo_imagen',
             'meta_value' => $request->titulo_imagen,
            ],
            ['meta_key'   => 'titulo_imagen_2',
             'meta_value' => $request->titulo_imagen_2,
            ],
            ['meta_key'   => 'terminos',
             'meta_value' => $request->terminos,
            ]
        ];

        if($empresa->save()){
            $empresa->meta()->delete();
            $empresa->meta()->createMany($meta);
            return redirect()->route('empresa')->with('alert', "Registro actualizado exitósamente" );
        }
            
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }
}
