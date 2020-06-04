<?php

use Illuminate\Database\Seeder;

class FillDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            'titulo' => 'Institucion',
            'texto' => '<p>Prueba numero 11 del editar</p>',
            'imagen' => '5c8f8576c1dd0_map-1.jpg',
            'seccion' => 'Empresa',
            'orden' => '1',
        ]);
        //LLenamos los datos del meta de la empresa
        DB::table('content_metas')->insert([
            'meta_key' => 'telefono',
            'meta_value' => '1143598202',
            'content_id' => '1',
        ]);
        DB::table('content_metas')->insert([
            'meta_key' => 'email',
            'meta_value' => 'info@e-diemer.com.ar',
            'content_id' => '1',
        ]);
        DB::table('content_metas')->insert([
            'meta_key' => 'calle',
            'meta_value' => 'bernardo de irigoyen',
            'content_id' => '1',
        ]);
        DB::table('content_metas')->insert([
            'meta_key' => 'altura',
            'meta_value' => '21',
            'content_id' => '1',
        ]);
        DB::table('content_metas')->insert([
            'meta_key' => 'codigo_postal',
            'meta_value' => '2110',
            'content_id' => '1',
        ]);
        DB::table('content_metas')->insert([
            'meta_key' => 'localidad',
            'meta_value' => 'CASERO',
            'content_id' => '1',
        ]);
        DB::table('content_metas')->insert([
            'meta_key' => 'provincia',
            'meta_value' => 'BUENOS AIRES',
            'content_id' => '1',
        ]);

        //Familias
        DB::table('families')->insert([
            'nombre' => 'AspiraPolvos',
            'imagen' => '5c9271e439087_categorias_aspirapolvos.jpg',
            'seccion' => 'Familia',
        ]);

        DB::table('families')->insert([
            'nombre' => 'Mangueras a medida',
            'imagen' => '5c928a316184e_categorias_mangueras especiales.jpg',
            'seccion' => 'Familia',
        ]);
        
        //Productos Generales
        DB::table('general_products')->insert([
            'nombre' => 'Abrasivo',
            'imagen' => '5c9272081b42c_subcategoria_abrasivos.jpg',
            'seccion' => 'Producto General',
            'family_id' => '1',
        ]);
        DB::table('general_products')->insert([
            'nombre' => 'Abrasivo',
            'imagen' => 'BUENOS AIRES',
            'seccion' => 'Producto General',
            'family_id' => '2',
        ]);

        //Productos especificos
        DB::table('especific_products')->insert([
            'nombre' => 'Aire-Agua',
            'imagen' => '5c92722023a72_categorias_mangueras especiales.jpg',
            'seccion' => 'Producto Especifico',
            'general_product_id' => '1',
        ]);
        DB::table('especific_products')->insert([
            'nombre' => 'Reforzada',
            'imagen' => '5c928a6fad18a_subcategoria_expelente.jpg',
            'seccion' => 'Producto Especifico',
            'general_product_id' => '2',
        ]);

        //Producto
        DB::table('products')->insert([
            'nombre' => 'Servicio liviano',
            'aplicacion' => '<p>haksjdhaskdhaksdadasdasddasdas24424</p>',
            'construccion' => '<p>dsadasdadasdasdasdadasda424</p>',
            'imagen' => '5c9279b2965e4_categorias_aspirapolvos.jpg',
            'archivo' => '5c9279b2969cc_robots.txt',
            'general_products_id' => '1',
        ]);
        //producto variante
        DB::table('product_variants')->insert([
            'codigo' => '12',
            'interior_mm' => '32',
            'interior_pulg' => '32',
            'exterior_mm' => '12',
            'presion_bar' => '12',
            'presion_libras' => '56',
            'product_id' => '1',
            
        ]);
        DB::table('product_variants')->insert([
            'codigo' => '2',
            'interior_mm' => '674',
            'interior_pulg' => '95',
            'exterior_mm' => '35',
            'presion_bar' => '76',
            'presion_libras' => '65',
            'product_id' => '1',
        ]);
        //Producto imagen
        DB::table('product_images')->insert([
            'imagen' => '5c93c372d820a_solicitarpresupuesto_01a.jpg',
            'product_id' => '1',
        ]);DB::table('product_images')->insert([
            'imagen' => '5c93c38c04138_subcategoria_abrasivos.jpg',
            'product_id' => '1',
        ]);
        
    }
}
