<?php

namespace Database\Seeders;

use App\Models\cuadra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CuadraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        cuadra::create([
            'slug' => '1',
            'descripcion' => 'Centro',
            'abreviatura' => '1',
            'estado'=> '1',
            'jiron_id'=> 1,
        ]);
        cuadra::create([
            'slug' => '2',
            'descripcion' => 'Centro',
            'abreviatura' => '2',
            'estado'=> '1',
            'jiron_id'=> 2,
        ]);
        cuadra::create([
            'slug' => '3',
            'descripcion' => 'Centro',
            'abreviatura' => '3',
            'estado'=> '1',
            'jiron_id'=> 3,
        ]);
        cuadra::create([
            'slug' => '4',
            'descripcion' => 'Centro',
            'abreviatura' => '4',
            'estado'=> '1',
            'jiron_id'=> 4,
        ]);
        cuadra::create([
            'slug' => '5',
            'descripcion' => 'Centro',
            'abreviatura' => '5',
            'estado'=> '1',
            'jiron_id'=> 5,
        ]);
        cuadra::create([
            'slug' => '6',
            'descripcion' => 'Centro',
            'abreviatura' => '6',
            'estado'=> '1',
            'jiron_id'=> 6,
        ]);
        cuadra::create([
            'slug' => '7',
            'descripcion' => 'Centro',
            'abreviatura' => '7',
            'estado'=> '1',
            'jiron_id'=> 7,
        ]);
        cuadra::create([
            'slug' => '8',
            'descripcion' => 'Centro',
            'abreviatura' => '8',
            'estado'=> '1',
            'jiron_id'=> 8,
        ]);
        cuadra::create([
            'slug' => '9',
            'descripcion' => 'Centro',
            'abreviatura' => '9',
            'estado'=> '1',
            'jiron_id'=> 9,
        ]);
        cuadra::create([
            'slug' => '10',
            'descripcion' => 'Centro',
            'abreviatura' => '10',
            'estado'=> '1',
            'jiron_id'=> 10,
        ]);
        cuadra::create([
            'slug' => '11',
            'descripcion' => 'Centro',
            'abreviatura' => '11',
            'estado'=> '1',
            'jiron_id'=> 1,
        ]);
        cuadra::create([
            'slug' => '12',
            'descripcion' => 'Centro',
            'abreviatura' => '12',
            'estado'=> '1',
            'jiron_id'=> 2,
        ]);
    }
}
