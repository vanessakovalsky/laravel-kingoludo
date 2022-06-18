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
        $user = User::where('email', 'v.david@kovalibre.com')->first();

        if(!$user){
            User::Create([
                'name' => 'vanessa',
                'email' => 'v.david@kovalibre.com',
                'password' => bcrypt('password'),
                'role'  => 'admin',
                'adresse' => '15 Rue des Halles 75001 Paris'
            ]);
        }

        User::factory()->count(50)->create();
    }
}
