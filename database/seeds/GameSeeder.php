<?php

use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\ModelGame::create([
            'title' => 'Monopoly',
            'editor' => 'Hasbro',
            'year_exit' => now(),
        ]);
        \App\Model\ModelGame::create([
            'title' => 'Scythe',
            'editor' => 'Matagot',
            'year_exit' => now(),
        ]);
    }
}
