<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            
            $table->string('apellidos')->nullable();
            $table->integer('celular')->nullable();
            $table->integer('DNI')->nullable();
            $table->enum('sexo',[1, 2])->default(1);
            $table->string('fecha_nac')->nullable();
            $table->text('descripcion')->nullable();
            $table->enum('estado',['0', '1'])->default('1');
            $table->string('acceso')->default('Estudiante');
            
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
