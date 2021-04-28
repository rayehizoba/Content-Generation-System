<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id' => 1,
                'label' => 'Biology',
                'parent_id' => null,
            ],
            [
                'id' => 2,
                'label' => 'History & Civilization',
                'parent_id' => null,
            ],
            [
                'id' => 3,
                'label' => 'Geography',
                'parent_id' => null,
            ],
            [
                'id' => 4,
                'label' => 'Sciences',
                'parent_id' => null,
            ],
            [
                'id' => 5,
                'label' => 'Literature',
                'parent_id' => null,
            ],
            [
                'id' => 6,
                'label' => 'Entertainment',
                'parent_id' => null,
            ],
            [
                'id' => 7,
                'label' => 'Middle Age',
                'parent_id' => 2
            ],
            [
                'id' => 8,
                'label' => 'Modern Age',
                'parent_id' => 2
            ],
            [
                'id' => 9,
                'label' => 'Contemporary',
                'parent_id' => 2
            ],
            [
                'id' => 10,
                'label' => 'Reanaissance',
                'parent_id' => 2
            ],
        ];

        Category::insert($categories);
    }
}
