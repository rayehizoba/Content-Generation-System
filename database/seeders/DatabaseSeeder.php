<?php

namespace Database\Seeders;

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
        $this->call([
            AudienceSeeder::class,
            CategorySeeder::class,
            DifficultySeeder::class,
            ProblemSeeder::class,
            TypeSeeder::class,
            QuestionSeeder::class,
        ]);
    }
}
