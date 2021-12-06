<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $histories = [
            [
                'title' => 'panne 1',
                'module_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis laboriosam eligendi, autem esse fugit vitae repellat iste distinctio perspiciatis consectetur officia accusantium maxime perferendis. Architecto, atque excepturi. Soluta, explicabo possimus.'
            ],
            [
                'title' => 'panne 2',
                'module_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis laboriosam eligendi, autem esse fugit vitae repellat iste distinctio perspiciatis consectetur officia accusantium maxime perferendis. Architecto, atque excepturi. Soluta, explicabo possimus.'
            ],
            [
                'title' => 'panne 3',
                'module_id' => 2,
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis laboriosam eligendi, autem esse fugit vitae repellat iste distinctio perspiciatis consectetur officia accusantium maxime perferendis. Architecto, atque excepturi. Soluta, explicabo possimus.'
            ],
            [
                'title' => 'panne 4',
                'module_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis laboriosam eligendi, autem esse fugit vitae repellat iste distinctio perspiciatis consectetur officia accusantium maxime perferendis. Architecto, atque excepturi. Soluta, explicabo possimus.'
            ],
            [
                'title' => 'panne 5',
                'module_id' => 3,
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis laboriosam eligendi, autem esse fugit vitae repellat iste distinctio perspiciatis consectetur officia accusantium maxime perferendis. Architecto, atque excepturi. Soluta, explicabo possimus.'
            ],
        ];

        foreach ($histories as $history) {
            History::create($history);
        }
    }
}
