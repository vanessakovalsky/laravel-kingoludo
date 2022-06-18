<?php

namespace Database\Seeders;

use App\Models\JeuModel;
use App\Models\Categorie;
use Illuminate\Database\Seeder;

class JeuxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JeuModel::factory()->count(1500)->create();

    }
}
