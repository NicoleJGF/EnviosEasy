<?php

namespace Database\Seeders;

use App\Models\manzana;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManzanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        manzana::create([
            'slug' => 'a-lt-10',
            'descripcion' => 'Centro',
            'abreviatura' => 'A LT 10',
            'estado'=> '1',
            'sector_id'=> 1,
        ]);
        manzana::create([
            'slug' => 'a-lt-11',
            'descripcion' => 'Centro',
            'abreviatura' => 'A LT 11',
            'estado'=> '1',
            'sector_id'=> 2,
        ]);
        manzana::create([
            'slug' => 'a-lt-12',
            'descripcion' => 'Centro',
            'abreviatura' => 'A LT 12',
            'estado'=> '1',
            'sector_id'=> 3,
        ]);
        manzana::create([
            'slug' => 'a-lt-13',
            'descripcion' => 'Centro',
            'abreviatura' => 'A LT 13',
            'estado'=> '1',
            'sector_id'=> 4,
        ]);
        manzana::create([
            'slug' => 'a-lt-14',
            'descripcion' => 'Centro',
            'abreviatura' => 'A LT 14',
            'estado'=> '1',
            'sector_id'=> 5,
        ]);
        manzana::create([
            'slug' => 'a-lt-15',
            'descripcion' => 'Centro',
            'abreviatura' => 'A LT 15',
            'estado'=> '1',
            'sector_id'=> 6,
        ]);
        manzana::create([
            'slug' => 'a-lt-16',
            'descripcion' => 'Centro',
            'abreviatura' => 'A LT 16',
            'estado'=> '1',
            'sector_id'=> 5,
        ]);
        manzana::create([
            'slug' => 'a-lt-17',
            'descripcion' => 'Centro',
            'abreviatura' => 'A LT 17',
            'estado'=> '1',
            'sector_id'=> 3,
        ]);
        manzana::create([
            'slug' => 'a-lt-18',
            'descripcion' => 'Centro',
            'abreviatura' => 'A LT 18',
            'estado'=> '1',
            'sector_id'=> 2,
        ]);
        manzana::create([
            'slug' => 'a-lt-19',
            'descripcion' => 'Centro',
            'abreviatura' => 'A LT 19',
            'estado'=> '1',
            'sector_id'=> 1,
        ]);
        manzana::create([
            'slug' => 'a-lt-9',
            'descripcion' => 'Centro',
            'abreviatura' => 'A LT 9',
            'estado'=> '1',
            'sector_id'=> 4,
        ]);
        
    }
}
