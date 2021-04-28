<?php

namespace Database\Seeders;

use App\Models\Audience;
use Illuminate\Database\Seeder;

class AudienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $audiences = [
            'UK',
            'USA',
            'Worldwide',
        ];

        foreach ($audiences as $audience) {
            Audience::create([
                'label' => $audience
            ]);
        }
    }
}
