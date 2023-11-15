<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccionns', function (Blueprint $table) {
            $table->id();
            
            $table->string('slugd');
            $table->string('nombred')->nullable();
            $table->string('numerod')->nullable();
            $table->string('piso_dpto')->nullable();
            $table->text('descripcion')->nullable();
            $table->enum('estadod',['0', '1'])->default('1');
            $table->string('otro')->nullable();

            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('set null');
            $table->unsignedBigInteger('otro_id')->nullable();
            $table->foreign('otro_id')->references('id')->on('otros')->onDelete('set null');
            $table->unsignedBigInteger('cuadra_id')->nullable();
            $table->foreign('cuadra_id')->references('id')->on('cuadras')->onDelete('set null');
            $table->unsignedBigInteger('manzana_id')->nullable();
            $table->foreign('manzana_id')->references('id')->on('manzanas')->onDelete('set null');
            
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
        Schema::dropIfExists('direccionns');
    }
};
