<?php

namespace Database\Seeders;

use App\Models\HomePageNum;
use Illuminate\Database\Seeder;

class HomePageNumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'page_id' => 1,
                'title' => 'Довольных клиента',
                'label' => '',
                'num' => 1763,
            ],
            [
                'page_id' => 1,
                'title' => 'Средняя разница в цене',
                'label' => '',
                'num' => 32,
            ],
            [
                'page_id' => 1,
                'title' => 'Средняя разница в цене',
                'label' => '%',
                'num' => 30,
            ],
            [
                'page_id' => 1,
                'title' => 'Средний опыт специалистов',
                'label' => 'лет',
                'num' => 12,
            ],
            [
                'page_id' => 6,
                'title' => 'Довольных клиента(page_about)',
                'label' => '',
                'num' => 1763,
            ],
            [
                'page_id' => 6,
                'title' => 'Средняя разница в цене(page_about)',
                'label' => '',
                'num' => 32,
            ],
            [
                'page_id' => 6,
                'title' => 'Средняя разница в цене(page_about)',
                'label' => '%',
                'num' => 30,
            ],
            [
                'page_id' => 6,
                'title' => 'Средний опыт специалистов(page_about)',
                'label' => 'лет',
                'num' => 12,
            ],
        ];

        foreach ($data as $key => $value) {
            HomePageNum::create($value);
        }
    }
}
