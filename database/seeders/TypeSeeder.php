<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Unique Answer Question',
            'Multiple Choice Question',
        ];

        foreach ($types as $type) {
            Type::create([
                'label' => $type
            ]);
        }
    }
}
