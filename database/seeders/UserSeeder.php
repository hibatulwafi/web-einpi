<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = User::create([
            'name'      => 'Hibatul Wafi',
            'email'     => 'hiwapiputra@gmail.com',
            'password'  => bcrypt('12341234'),
            'email_verified_at' => now()
        ]);

        $superadmin->assignRole('Super admin');

        $superadmin = User::create([
            'name'      => 'Admin',
            'email'     => 'admin@einpi.com',
            'password'  => bcrypt('12341234'),
            'email_verified_at' => now()
        ]);

        $superadmin->assignRole('Super admin');
    }
}
