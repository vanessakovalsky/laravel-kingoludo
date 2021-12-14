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
        $file = fopen('/var/www/html/laravel/storage/app/public/jeux.csv','r');

        while ($row = fgetcsv($file, 1000, ',')) {
            $line = explode(';', $row[0]);
            $categorie = Categorie::where('nom',$line[1])->first();

            JeuModel::Create( [
                'nom' => $line[0],
                'categorie_id' => $categorie->id 
            ]);
        }
    }
}
