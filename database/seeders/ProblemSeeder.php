<?php

namespace Database\Seeders;

use App\Models\Problem;
use Illuminate\Database\Seeder;

class ProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $problems = [
            'Mispelling, Typo, Grammar',
            'Offensive content',
            'Wrong Answer',
            'Not Underatable',
            'Too Specific',
            'Obsolete',
            'Other',
        ];

        foreach ($problems as $problem) {
            Problem::create([
                'label' => $problem,
                'is_fixable' => true,
            ]);
        }
    }
}
