<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable();
            $table->text('aplicacion')->nullable();
            $table->text('construccion')->nullable();
            $table->string('imagen')->nullable();
            $table->string('archivo')->nullable();
            $table->string('seccion')->nullable();
            $table->string('orden')->nullable();
            $table->string('certificado')->nullable();
            $table->integer('general_products_id')->nullable();
            $table->unsignedBigInteger('family_id')->nullable();
            $table->foreign('family_id')->references('id')->on('families')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
