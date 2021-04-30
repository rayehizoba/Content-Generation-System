<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            'Validated',
            'Waiting for review',
            'Correction in progress',
        ];

        foreach ($statuses as $status) {
            Status::create([
                'label' => $status
            ]);
        }
    }
}
