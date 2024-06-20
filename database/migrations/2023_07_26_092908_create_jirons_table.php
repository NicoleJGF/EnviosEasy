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
        Schema::create('jirons', function (Blueprint $table) {
            $table->id();
            
            $table->string('slug');
            $table->text('descripcion')->nullable();
            $table->string('abreviatura')->nullable();
            $table->string('tipo')->nullable();
            $table->enum('estado',['0', '1'])->default('1');
            $table->string('otro')->nullable();

            $table->unsignedBigInteger('sector_id')->nullable();
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('set null');
            
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
        Schema::dropIfExists('jirons');
    }
};
