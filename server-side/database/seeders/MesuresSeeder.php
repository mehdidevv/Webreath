<?php

namespace Database\Seeders;

use App\Models\Mesures;
use Illuminate\Database\Seeder;

class MesuresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mesures = [
            [
                'module_id' => 1,
                'value' => '26.80',
                'unit' => 'C'
            ],
            [
                'module_id' => 2,
                'value' => '40.80',
                'unit' => 'C'
            ],
            [
                'module_id' => 2,
                'value' => '23.80',
                'unit' => 'C'
            ],
            [
                'module_id' => 1,
                'value' => '30.40',
                'unit' => 'C'
            ],
            [
                'module_id' => 3,
                'value' => '28.40',
                'unit' => 'C'
            ],
        ];

        foreach ($mesures as $mesure) {
            Mesures::create($mesure);
        }
    }
}
