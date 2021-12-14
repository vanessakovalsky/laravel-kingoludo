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
        User::create([
            'name' => 'vanessa',
            'email' => 'v.david@kovalibre.com',
            'password' => 'password',
            'role'  => 'admin',
            'adresse' => '15 Rue des Halles 75001 Paris'
        ]);
    }
}
