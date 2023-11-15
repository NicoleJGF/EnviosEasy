<?php

namespace Database\Seeders;

use App\Models\sector;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        sector::create([
            'slug' => 'huanuco',
            'descripcion' => 'Centro',
            'abreviatura' => 'Huanuco',
            'estado'=> '1',
        ]);
        sector::create([
            'slug' => 'colectora',
            'descripcion' => 'Centro',
            'abreviatura' => 'Colectora',
            'estado'=> '1',
        ]);
        sector::create([
            'slug' => 'esperanza',
            'descripcion' => 'Centro',
            'abreviatura' => 'Esperanza',
            'estado'=> '1',
        ]);
        sector::create([
            'slug' => 'pillcomarca',
            'descripcion' => 'Centro',
            'abreviatura' => 'Pillcomarca',
            'estado'=> '1',
        ]);
        sector::create([
            'slug' => 'bosque',
            'descripcion' => 'Centro',
            'abreviatura' => 'Bosque',
            'estado'=> '1',
        ]);
        sector::create([
            'slug' => 'amarilis',
            'descripcion' => 'Centro',
            'abreviatura' => 'Amarilis',
            'estado'=> '1',
        ]);
    }
}
