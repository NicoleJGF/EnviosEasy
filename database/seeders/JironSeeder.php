<?php

namespace Database\Seeders;

use App\Models\jiron;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JironSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        jiron::create([
            'slug' => 'dos-de-mayo',
            'descripcion' => 'Centro',
            'abreviatura' => 'Dos de Mayo',
            'estado'=> '1',
            'tipo' => 'Jiron',
            'sector_id'=> 1,
        ]);
        jiron::create([
            'slug' => 'crespo-castillo',
            'descripcion' => 'Centro',
            'abreviatura' => 'Crespo Castillo',
            'estado'=> '1',
            'tipo' => 'Jiron',
            'sector_id'=> 2,
        ]);
        jiron::create([
            'slug' => 'atao',
            'descripcion' => 'Centro',
            'abreviatura' => 'Atao',
            'estado'=> '1',
            'tipo' => 'Jiron',
            'sector_id'=> 3,
        ]);
        jiron::create([
            'slug' => 'carrisales',
            'descripcion' => 'Centro',
            'abreviatura' => 'Carrisales',
            'estado'=> '1',
            'tipo' => 'Jiron',
            'sector_id'=> 4,
        ]);
        jiron::create([
            'slug' => 'mayro',
            'descripcion' => 'Centro',
            'abreviatura' => 'Mayro',
            'estado'=> '1',
            'tipo' => 'Jiron',
            'sector_id'=> 5,
        ]);
        jiron::create([
            'slug' => 'las-flores',
            'descripcion' => 'Centro',
            'abreviatura' => 'Las Flores',
            'estado'=> '1',
            'tipo' => 'Avenida',
            'sector_id'=> 6,
        ]);
        jiron::create([
            'slug' => 'patahuasi',
            'descripcion' => 'Centro',
            'abreviatura' => 'Patahuasi',
            'estado'=> '1',
            'tipo' => 'Avenida',
            'sector_id'=> 1,
        ]);
        jiron::create([
            'slug' => 'ayacucho',
            'descripcion' => 'Centro',
            'abreviatura' => 'Aayacucho',
            'estado'=> '1',
            'tipo' => 'Jiron',
            'sector_id'=> 2,
        ]);
        jiron::create([
            'slug' => 'general-prado',
            'descripcion' => 'Centro',
            'abreviatura' => 'General Prado',
            'estado'=> '1',
            'tipo' => 'Jiron',
            'sector_id'=> 3,
        ]);
        jiron::create([
            'slug' => 'laguna',
            'descripcion' => 'Centro',
            'abreviatura' => 'Laguna',
            'estado'=> '1',
            'tipo' => 'Jiron',
            'sector_id'=> 4,
        ]);

    }
}
