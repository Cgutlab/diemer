<?php

Route::get('/', 'HomeController@index')->name('index');
Route::get('/empresa', 'SeccionEmpresaController@index')->name('empresa');
Route::get('/producto', 'SeccionProductoController@index')->name('producto');
Route::get('/mangueras_a_medida', 'SeccionSolicitudController@index')->name('solicitud');
Route::get('/contacto', 'SeccionContactoController@index')->name('contacto');

Route::post('/busqueda',['uses' => 'SeccionProductoController@busqueda'])->name('buscador');

Route::prefix('producto')->group(function() {
    Route::get('/f-{id}', ['uses' => 'SeccionProductoController@showProductG', 'as' => 'seccion-pg']);
    Route::get('/pg-{id}', ['uses' => 'SeccionProductoController@showProductEsp', 'as' => 'seccion-pesp']);
    Route::get('/pf-{id}', ['uses' => 'SeccionProductoController@showProduct', 'as' => 'seccion-pf']);
    Route::get('/{codigo}', ['uses' => 'SeccionProductoController@Contact', 'as' => 'producto_peticion']);
});

Route::prefix('mangueras_a_medida')->group(function() {
    Route::post('/formulario',['uses' => 'SeccionSolicitudController@showProductForm'])->name('formulario');
    Route::put('/formulario', ['uses' => 'SeccionSolicitudController@solicitudMailForm', 'as' => 'enviar']);
});
Route::prefix('contacto')->group(function() {
    Route::put('/', ['uses' => 'SeccionContactoController@sendMail', 'as' => 'enviar']);
});

Route::prefix('adm')->group(function (){
    Route::get('/', function () { return view('auth.login'); });
    Route::get('login', 'Auth\LoginController@authentificate')->name('login');
    Auth::routes();
});


Route::group(['middleware' => 'auth', 'prefix' => 'adm'], function() {
    Route::get('/', 'adm\admController@index')->name('adm.index');
    Route::post('logout', ['as' => 'logout', 'uses' => 'adm\LoginController@logout']);
    
    //Rutas del menu
    Route::get('/empresa', 'EmpresaController@index')->name('empresa');

    Route::get('/logo/nuevo', 'LogoController@showCreate')->name('logo_create');
    Route::get('/logo', 'LogoController@index')->name('logo');

    Route::get('/slider/nuevo-{seccion}', 'SliderController@showCreate')->name('slider_create');
    Route::get('/slider-{seccion}', 'SliderController@index')->name('slider');

    Route::get('/familia/nuevo', 'FamiliaController@showCreate')->name('familia_create');
    Route::get('/familia', 'FamiliaController@index')->name('familia_show');

    Route::get('/producto_general/nuevo', 'ProductoGeneralController@showCreate')->name('producto_general_create');
    Route::get('/producto_general', 'ProductoGeneralController@index')->name('producto_general');

    Route::get('/producto_esp/nuevo', 'ProductoEspController@showCreate')->name('producto_esp_create');
    Route::get('/producto_esp', 'ProductoEspController@index')->name('producto_esp');

    Route::get('/producto/nuevo', 'ProductoController@showCreate')->name('producto_create');
    Route::get('/producto', 'ProductoController@index')->name('producto');

    Route::get('/usuario/nuevo', 'UserController@showCreate')->name('usuario_create');
    Route::get('/usuario', 'UserController@index')->name('usuario');

    Route::get('/metadata/nuevo', 'MetadataController@showCreate')->name('meta_create');
    Route::get('/metadata', 'MetadataController@index')->name('metadata');

    Route::get('/iconos/nuevo-{seccion}', 'IconsController@showCreate')->name('icons_create');
    Route::get('/iconos-{seccion}', 'IconsController@index')->name('icons');

    //Ruta para la seccion Empresa
    Route::group(['prefix' => 'empresa', 'as' => 'content'], function() {
        Route::get('/{id}/edit', ['uses' => 'EmpresaController@showEdit', 'as' => '.empresa_show']);
        Route::put('/{id}', ['uses' => 'EmpresaController@update', 'as' => '.update']);
    });
    
    //Ruta para la seccion General
    Route::group(['prefix' => 'general', 'as' => 'content'], function() {
        Route::get('/new', ['uses' => 'MetadataController@showCreate', 'as' => 'meta_create']);
        Route::put('/new', ['uses' => 'MetadataController@store', 'as' => '.store']);
        Route::get('/edit/{id}', ['uses' => 'MetadataController@showEdit', 'as' => 'meta_show']);
        Route::put('/{id}', ['uses' => 'MetadataController@update', 'as' => '.update']);
    });

    //Ruta para la seccion Slider
    Route::group(['prefix' => 'slider'], function() {
        Route::put('/new', ['uses' => 'SliderController@store', 'as' => '.store']);
        Route::get('/edit/{id}', ['uses' => 'SliderController@showEdit', 'as' => 'slider_show']);
        Route::put('/{id}', ['uses' => 'SliderController@update', 'as' => '.update']);
        Route::get('eliminar/{id}', ['uses' => 'SliderController@eliminar', 'as' => '.eliminar']);
    });

    //Ruta para la seccion Logo
    Route::group(['prefix' => 'logo'], function() {
        Route::get('/new', ['uses' => 'LogoController@showCreate', 'as' => 'logo_create']);
        Route::put('/new', ['uses' => 'LogoController@store', 'as' => '.store']);
        Route::get('/edit/{id}', ['uses' => 'LogoController@showEdit', 'as' => 'logo_show']);
        Route::put('/{id}', ['uses' => 'LogoController@update', 'as' => '.update']);
        Route::get('eliminar/{id}', ['uses' => 'LogoController@eliminar', 'as' => '.eliminar']);
    });
    //Ruta para la seccion Iconos
    Route::group(['prefix' => 'icons'], function() {
        Route::get('/new', ['uses' => 'IconsController@showCreate', 'as' => 'icon_create']);
        Route::put('/new', ['uses' => 'IconsController@store', 'as' => '.store']);
        Route::get('/edit/{id}', ['uses' => 'IconsController@showEdit', 'as' => 'icon_show']);
        Route::put('/{id}', ['uses' => 'IconsController@update', 'as' => '.update']);
        Route::get('eliminar/{id}', ['uses' => 'IconsController@eliminar', 'as' => '.eliminar']);
    });
    //Ruta para la seccion familia
    Route::group(['prefix' => 'familia', 'as' => 'content'], function() {
        Route::get('/new', ['uses' => 'FamiliaController@showCreate', 'as' => 'familia_create']);
        Route::put('/new', ['uses' => 'FamiliaController@store', 'as' => '.store']);
        Route::get('/edit/{id}', ['uses' => 'FamiliaController@showEdit', 'as' => 'familia_show']);
        Route::put('/{id}', ['uses' => 'FamiliaController@update', 'as' => '.update']);
        Route::get('eliminar/{id}', ['uses' => 'FamiliaController@eliminar', 'as' => '.eliminar']);
    });

    //Ruta para la seccion producto general
    Route::group(['prefix' => 'producto_general'], function() {
        Route::get('/new', ['uses' => 'ProductoGeneralController@showCreate', 'as' => 'producto_general_create']);
        Route::put('/new', ['uses' => 'ProductoGeneralController@store', 'as' => '.store']);
        Route::get('/edit/{id}', ['uses' => 'ProductoGeneralController@showEdit', 'as' => 'producto_general_show']);
        Route::put('/{id}', ['uses' => 'ProductoGeneralController@update', 'as' => '.update']);
        Route::get('lista',['uses' => 'ProductoGeneralController@byFamily'])->name('lista_pg');
        Route::get('eliminar/{id}', ['uses' => 'ProductoGeneralController@eliminar', 'as' => '.eliminar']);
    });

    //Ruta para la seccion producto
    Route::group(['prefix' => 'producto'], function() {
        Route::get('/new', ['uses' => 'ProductoController@showCreate', 'as' => 'producto_create']);
        Route::post('/new', ['uses' => 'ProductoController@store', 'as' => '.store']);
        Route::get('/edit/{id}', ['uses' => 'ProductoController@showEdit', 'as' => 'producto_show']);
        Route::put('/{id}', ['uses' => 'ProductoController@update', 'as' => '.update']);
        Route::get('lista',['uses' => 'ProductoController@search'])->name('lista_p');
        Route::get('eliminar/{id}', ['uses' => 'ProductoController@eliminar', 'as' => '.eliminar']);
    });

    //Ruta para la seccion Usuario
    Route::group(['prefix' => 'usuario'], function() {
        Route::get('/new', ['uses' => 'UserController@showCreate', 'as' => 'usuario_create']);
        Route::post('/new', ['uses' => 'UserController@store', 'as' => '.store']);
        Route::get('/edit/{id}', ['uses' => 'UserController@showEdit', 'as' => 'usuario_show']);
        Route::put('/{id}', ['uses' => 'UserController@update', 'as' => '.update']);
        Route::get('eliminar/{id}', ['uses' => 'UserController@eliminar', 'as' => '.eliminar']);
    });
});
