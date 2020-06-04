<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Contents;
use App\ContentMetasModel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $empresa     = Contents::where('seccion', "Empresa")->first();
        $logo_header = Contents::where('seccion', "header")->first();
        $logo_footer = Contents::where('seccion', "footer")->first();
        if($empresa->meta()->get()!= NULL){
            $meta_data = $empresa->meta()->get();
            foreach ($meta_data as $key => $value) {
                $key           = $value->meta_key;
                $empresa->$key = $value->meta_value;
            }
        }
        $datos['email']     = $empresa->email;
        $datos['telefono']  = $empresa->telefono;
        $datos['calle']     = $empresa->calle;
        $datos['altura']    = $empresa->altura;
        $datos['localidad'] = $empresa->localidad;
        $datos['provincia'] = $empresa->provincia;
        $datos['logo_header'] = $logo_header->imagen;
        $datos['logo_footer'] = $logo_footer->imagen;
        View::share('datos', $datos);
    }
}
