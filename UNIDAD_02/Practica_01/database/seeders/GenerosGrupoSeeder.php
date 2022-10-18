<?php

namespace Database\Seeders;

use App\Models\GenerosGrupo;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenerosGrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts=GenerosGrupo::factory(100)->create();
        foreach($posts as $generosgrupo) {
            Image::factory(1)->create([
                'imageable_id'=>$generosgrupo->id,
                'imageable_type'=>GenerosGrupo::class
            ]);

            $generosgrupo->tags()->attach([
                rand(1,4),
                rand(5,8)
            ]);
        }
    }
}
