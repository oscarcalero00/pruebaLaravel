<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TallaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Talla::create(array('talla_nombre' => 'S'));
        \App\Models\Talla::create(array('talla_nombre' => 'M'));
        \App\Models\Talla::create(array('talla_nombre' => 'L'));
    }
}
