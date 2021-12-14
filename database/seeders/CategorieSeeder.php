<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Categorie::where('nom','Apéro')->first()){
            Categorie::Create(
                [
                    'nom' => 'Apéro'
                ]
            );
        }
        if (!Categorie::where('nom','Jeux à deux')->first()){
            Categorie::Create(
                [
                    'nom' => 'Jeux à deux'
                ]
            );
        }
    }
}
