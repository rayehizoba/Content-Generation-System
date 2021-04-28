<?php

namespace Database\Seeders;

use App\Models\Difficulty;
use Illuminate\Database\Seeder;

class DifficultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $difficulties = [
            'Very Easy',
            'Easy',
            'Normal',
            'Hard',
            'Very Hard',
        ];

        foreach ($difficulties as $order => $difficulty) {
            Difficulty::create([
                'label' => $difficulty,
                'order' => $order,
            ]);
        }
    }
}
