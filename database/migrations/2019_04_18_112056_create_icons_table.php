<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('imagen')->nullable();
            $table->string('titulo')->nullable();
            $table->text('orden')->nullable();
            $table->unsignedBigInteger('familia_id')->nullable();
            $table->unsignedBigInteger('subfamilia_id')->nullable();
            $table->string('seccion')->nullable();
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
        Schema::dropIfExists('icons');
    }
}
