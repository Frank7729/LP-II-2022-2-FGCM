<?php

namespace Database\Seeders;

use App\Models\Tournament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tournament::create([
            'name'=>'Dota 2',
            'description'=>'Es un torneo de juego en equipo, el que mejor usa combos será el mejor equipo del mundo y posteriormente será el ganador del torneo',
            'status'=>'1',
            'rules'=>'-No hacer trampa.'
        ]);
        Tournament::factory(5)->create();
    }
}
