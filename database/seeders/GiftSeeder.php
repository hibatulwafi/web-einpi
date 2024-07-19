<?php

namespace Database\Seeders;

use App\Models\Gift;
use Illuminate\Database\Seeder;

class GiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gift::create([
            'wedding_id'        => 1,
            'name'              => 'Rumah Wafi',
            'address'           => 'Jl Bhayangkara Gg Karya 1',
            'maps'              => 'https://maps.app.goo.gl/FDTdgwmkumfq2fGM6',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
