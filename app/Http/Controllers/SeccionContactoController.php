<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Contents;
use App\ContentMetasModel;
use App\Mail\contactoMail;


class SeccionContactoController extends Controller
{
    public function index()
    {   
        if(session()->get('codigo') == NULL)         
        session()->forget('codigo');
        $empresa = Contents::where('seccion', "Empresa")->first();
        if($empresa->meta()->get()!= NULL){
            $meta_data = $empresa->meta()->get();
            foreach ($meta_data as $key => $value) {
                $key           = $value->meta_key;
                $empresa->$key = $value->meta_value;
            }
        }
        $empresa->terminos = "<p> Esto es un texto de los terminos y condiciones de la empresa </p>";
        return view('page.contacto.index', compact('empresa'));
    }
    public function sendMail(Request $request)
    {
        $data['nombre']   = $request->nombre;
        $data['apellido'] = $request->apellido;
        $data['email']    = $request->email;
        $data['telefono'] = $request->telefono;
        $data['mensaje']  = $request->mensaje;

        $empresa = Contents::where('seccion', "Empresa")->first();
        if($empresa->meta()->get()!= NULL){
            $meta_data = $empresa->meta()->get();
            foreach ($meta_data as $key => $value) {
                $key           = $value->meta_key;
                $empresa->$key = $value->meta_value;
            }
        }
        
        $secret                   = '6Ldbq5oUAAAAAMeEl8qxphxTxeoaPJl3uuDbUfHj';
        $response                 =file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$request->{'g-recaptcha-response'}."&remoteip=".$_SERVER['REMOTE_ADDR']);
        $g_response               = json_decode($response);    
        if($g_response->success===true) {
             Mail::to($empresa->email)->send(new contactoMail($data));
            return redirect()->route('contacto')->with('alert', "Solicitud realizada exitosamente" );
        }else{
            return redirect()->route('contacto')->with('recaptcha-error', true);
        }
        return view('page.contacto.index');
    }
}
