<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{

    /*
        Create Table
     */
    public function up()
    {
        Schema::create('contents',function(Blueprint $table){
            $table->increments('id');
            $table->text('titulo')->nullable();
            $table->text('subtitulo')->nullable();
            $table->longtext('texto')->nullable();
            $table->string('imagen')->nullable();
            $table->string('seccion')->nullable();
            $table->string('bloque')->nullable();
            $table->string('orden')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        
         Schema::create('content_metas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('meta_key')->nullable();
            $table->longText('meta_value')->nullable();
            $table->integer('content_id')->unsigned()->nullable();
            $table->timestamps();
        });
        
    }

    /*
        Destroy Table
     */
    public function down()
    {
        Schema::dropIfExists('content');
    }
}
