<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = [
            [
                'name' => 'LM91-MV',
                'type_id' => 1,
                'active' => true,
                'description' => 'LM91-MV is a type of low power wide area network (LPWAN) radio technology standard developed by 3GPP to enable a wide range of cellular devices and services (specifically, for machine-to-machine and Internet of Things applications).'
            ],
            [
                'name' => 'WNC IMS2',
                'type_id' => 2,
                'active' => false,
                'description' => 'WNC IMS2 is a low-power wide-area network (LPWAN) radio technology standard developed by 3GPP for cellular devices and services'
            ],
            [
                'name' => 'C1RS',
                'type_id' => 2,
                'active' => false,
                'description' => 'C1RS is a type of low power wide area network (LPWAN) radio technology standard developed by 3GPP to enable a wide range of cellular devices and services (specifically, for machine-to-machine and Internet of Things applications).'
            ],
            [
                'name' => 'Digi XBee3 Cellular LTE-M',
                'type_id' => 1,
                'active' => true,
                'description' => 'Digi XBee3 Cellular LTE-M is a type of low power wide area network (LPWAN) radio technology standard developed by 3GPP to enable a wide range of cellular devices and services (specifically, for machine-to-machine and Internet of Things applications).'
            ],
            [
                'name' => 'Digi XBee3 Cellular NB-IoT',
                'type_id' => 3,
                'active' => true,
                'description' => 'Digi XBee3 Cellular NB-IoT is a type of low power wide area network (LPWAN) radio technology standard developed by 3GPP to enable a wide range of cellular devices and services (specifically, for machine-to-machine and Internet of Things applications).',
            ],
        ];

        foreach ($modules as $module) {
            Module::create($module);
        }
    }
}
