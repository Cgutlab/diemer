<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nombre')->nullable();
            $table->string('imagen')->nullable();
            $table->text('orden')->nullable();
            $table->string('seccion')->nullable();
            $table->unsignedBigInteger('family_id');
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
        Schema::dropIfExists('general_products');
    }
}
