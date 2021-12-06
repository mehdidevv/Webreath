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
            [
                'name' => 'LTE-M',
                'description' => 'LTE-M is a type of low power wide area network (LPWAN) radio technology standard developed by 3GPP to enable a wide range of cellular devices and services (specifically, for machine-to-machine and Internet of Things applications).'
            ],
            [
                'name' => 'LTE-M',
                'description' => 'NB-IoT is a low-power wide-area network (LPWAN) radio technology standard developed by 3GPP for cellular devices and services'
            ],
            [
                'name' => 'Dual LTE-M, NB-IoT',
                'description' => 'LTE-M is a type of low power wide area network (LPWAN) radio technology standard developed by 3GPP to enable a wide range of cellular devices and services (specifically, for machine-to-machine and Internet of Things applications).'
            ],
        ];

        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
