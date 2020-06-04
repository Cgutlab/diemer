<?php

namespace App\Http\Controllers;

use App\Contents;
use App\ContentMetasModel;
use App\Mail\solicitudMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class SeccionSolicitudController extends Controller
{
    public function index()
    {
        return view('page.presupuesto.index');
    }

    public function showProductForm(Request $request)
    {
        $data['nombre']   =   $request->nombre;
        $data['email']    =   $request->email;
        $data['telefono'] =   $request->telefono;
        $data['tipo']     =   $request->tipo;
        session()->put('data', $data);
        return view('page.presupuesto.formulario');
    }

    public function solicitudMailForm(Request $request)
    {
        session()->get('data');
        $data                     = session()->get('data');
        if ($request->hasFile('archivo')){
            $path                 = $request->file('archivo')->store('public/files');
        }
        else
           $path  = null;
        $data['tipo_manguera']    = $request->tipo_manguera;
        $data['interior_mm']      = $request->interior_mm;
        $data['exterior_mm']      = $request->exterior_mm;
        $data['presion_trabajo']  = $request->presion_trabajo;
        $data['temperatura']      = $request->temperatura;
        $data['cantidad_metros']  = $request->cantidad_metros;
        $data['cantidad_tramos']  = $request->cantidad_tramos;
        $data['archivo']          = $path;
        $data['observacion']      = $request->observacion;
        $secret                   = '6Ldbq5oUAAAAAMeEl8qxphxTxeoaPJl3uuDbUfHj';
        $response                 = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$request->{'g-recaptcha-response'}."&remoteip=".$_SERVER['REMOTE_ADDR']);
        $g_response               = json_decode($response);
        
        $empresa = Contents::where('seccion', "Empresa")->first();
        if($empresa->meta()->get()!= NULL){
            $meta_data = $empresa->meta()->get();
            foreach ($meta_data as $key => $value) {
                $key           = $value->meta_key;
                $empresa->$key = $value->meta_value;
            }
        }
       
        if($g_response->success===true) {
            Mail::to('carlossierralsf@gmail.com')->send(new solicitudMail($data));
            return redirect()->route('solicitud')->with('alert', "Solicitud realizada exitósamente" );
        }else{
            return redirect()->route('solicitud')->with('recaptcha-error', true);
        }
    }
}
