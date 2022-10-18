<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Genero;
use App\Models\Grupo;
use App\Models\Musico;
use App\Models\MusicosGrupo;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UserSeeder::class);
        Grupo::factory(10)->create();
        Genero::factory(10)->create();
        Tag::factory(10)->create();
        //GenerosGrupo::factory(10)->create();
        $this->call(GenerosGrupoSeeder::class);
        Musico::factory(10)->create();
        MusicosGrupo::factory(10)->create();
    }
}
