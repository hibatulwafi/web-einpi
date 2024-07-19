<?php

namespace Database\Seeders;

use App\Models\Bride;
use Illuminate\Database\Seeder;

class BrideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bride::create([
            'wedding_id'        => 1,
            'name'              => 'Hibatul Wafi',
            'child'             => 'Putra Pertama dari',
            'name_father'       => 'Bpk Agus Kustawan (Alm)',
            'name_mother'       => 'Ibu Rini Nuraeni',
            'instagram'         => 'https://www.instagram.com/wapiputra/',
            'bank_id'           => 2,
            'acc_name'          => 'Wafi',
            'acc_number'        => 0,
            'gender'            => 'Male',
            'photo'             => 'male.jpg',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        Bride::create([
            'wedding_id'        => 1,
            'name'              => 'Tisa Amelia',
            'child'             => 'Putri Pertama dari',
            'name_father'       => 'Bpk Amat',
            'name_mother'       => 'Ibu Imas',
            'instagram'         => 'https://www.instagram.com/wapiputra/',
            'bank_id'           => 1,
            'acc_name'          => 'Tisa',
            'acc_number'        => 0,
            'gender'            => 'Female',
            'photo'             => 'female.jpg',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
