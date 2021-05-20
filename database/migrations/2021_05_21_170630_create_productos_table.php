<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string("producto_nombre",255)->nullable(false);
            $table->text("producto_observaciones")->nullable(false);
            $table->integer("producto_cantidad")->nullable(false);
            $table->date("producto_fechaembarque",255)->nullable(false);
            $table->unsignedBigInteger("producto_talla");
            $table->unsignedBigInteger('producto_marca');
            $table->timestamps();

            $table->foreign('producto_marca')
                ->references('id')
                ->on('marca')
                ->onDelete('cascade');

            $table->foreign('producto_talla')
                ->references('id')
                ->on('talla')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
