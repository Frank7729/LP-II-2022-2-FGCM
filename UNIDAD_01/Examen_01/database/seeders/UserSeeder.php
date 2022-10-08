<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name'=>'Manuel Chunca Mamani',
            'email'=>'frankchunca@gmail.com',
            'email_verified_at' => now(),
            'password'=>bcrypt('12346578'),
        ]);
        User::factory(3)->create();
    }
}
