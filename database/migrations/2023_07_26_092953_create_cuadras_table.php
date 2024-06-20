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
        Schema::create('cuadras', function (Blueprint $table) {
            $table->id();
            
            $table->string('slug');
            $table->text('descripcion')->nullable();
            $table->string('abreviatura')->nullable();
            $table->enum('estado',['0', '1'])->default('1');
            $table->string('otro')->nullable();
            
            $table->unsignedBigInteger('jiron_id')->nullable();
            $table->foreign('jiron_id')->references('id')->on('jirons')->onDelete('set null');
            
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
        Schema::dropIfExists('cuadras');
    }
};
