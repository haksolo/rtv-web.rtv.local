<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->createMany([
            ['name' => 'Ronald Ocubillo', 'email' => 'rocubillo@rtv.local'],
            ['name' => 'Ian Secretario', 'email' => 'isecretario@rtv.local'],
            ['name' => 'AJ Dumanhug', 'email' => 'adumanhug@rtv.local'],
            ['name' => 'Ariz Soriano', 'email' => 'asoriano@rtv.local'],
            ['name' => 'Bianca Gadiana', 'email' => 'bgadiana@rtv.local'],
            ['name' => 'Rodel Llemit', 'email' => 'rllemit@rtv.local'],
            ['name' => 'Shav Manalo', 'email' => 'smanalo@rtv.local'],
            ['name' => 'Felix Mendoza', 'email' => 'fmendoza@rtv.local'],
            ['name' => 'Ameer Pornillos', 'email' => 'apornillos@rtv.local'],
            ['name' => 'Emman Reed', 'email' => 'ereed@rtv.local'],
            ['name' => 'Cjay Villapando', 'email' => 'cvillapando@rtv.local'],
        ]);
    }
}
