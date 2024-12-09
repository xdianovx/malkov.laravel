<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Stock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Акция 1',
                'h1_title' => 'Акция 1',
                'description' => 'Описание акции 1',
                'description_header' => 'Описание акции 1',
                'content' => 'Описание акции 1',
                'slug' => 'aktsiya-1',
                'og_title' => 'Акция 1',
                'og_description' => 'Описание акции 1',
                'og_url' => 'https://dr-malkov.ru/akcii/aktsiya-1',
                'meta_title' => 'Акция 1',
                'meta_description' => 'Описание акции 1',
                'meta_keywords' => 'акция',
                'slider_active' => 'TRUE',
                'due_time' => '2023-12-31',
                'image' => 'img/stock-slider/1.jpg',
                'image_mob' => 'img/stock-slider/1.jpg',
            ],
            [
                'title' => 'Акция 2',
                'h1_title' => 'Акция 2',
                'description' => 'Описание акции 2',
                'description_header' => 'Описание акции 2',
                'content' => 'Описание акции 2',
                'slug' => 'aktsiya-2',
                'og_title' => 'Акция 2',
                'og_description' => 'Описание акции 2',
                'og_url' => 'https://dr-malkov.ru/akcii/aktsiya-2',
                'meta_title' => 'Акция 2',
                'meta_description' => 'Описание акции 2',
                'meta_keywords' => 'акция',
                'slider_active' => 'TRUE',
                'due_time' => '2023-12-31',
                'image' => 'img/stock-slider/1.jpg',
                'image_mob' => 'img/stock-slider/1.jpg',
            ],
            [
                'title' => 'Акция 3',
                'h1_title' => 'Акция 3',
                'description' => 'Описание акции 3',
                'description_header' => 'Описание акции 3',
                'content' => 'Описание акции 3',
                'slug' => 'aktsiya-3',
                'og_title' => 'Акция 3',
                'og_description' => 'Описание акции 3',
                'og_url' => 'https://dr-malkov.ru/akcii/aktsiya-3',
                'meta_title' => 'Акция 3',
                'meta_description' => 'Описание акции 3',
                'meta_keywords' => 'акция',
                'slider_active' => 'TRUE',
                'due_time' => '2023-12-31',
                'image' => 'img/stock-slider/1.jpg',
                'image_mob' => 'img/stock-slider/1.jpg',
            ],
            [
                'title' => 'Акция 4',
                'h1_title' => 'Акция 4',
                'description' => 'Описание акции 4',
                'description_header' => 'Описание акции 4',
                'content' => 'Описание акции 4',
                'slug' => 'aktsiya-4',
                'og_title' => 'Акция 4',
                'og_description' => 'Описание акции 4',
                'og_url' => 'https://dr-malkov.ru/akcii/aktsiya-4',
                'meta_title' => 'Акция 4',
                'meta_description' => 'Описание акции 4',
                'meta_keywords' => 'акция',
                'slider_active' => 'TRUE',
                'due_time' => '2023-12-31',
                'image' => 'img/stock-slider/1.jpg',
                'image_mob' => 'img/stock-slider/1.jpg',
            ],
            [
                'title' => 'Акция 5',
                'h1_title' => 'Акция 5',
                'description' => 'Описание акции 5',
                'description_header' => 'Описание акции 5',
                'content' => 'Описание акции 5',
                'slug' => 'aktsiya-5',
                'og_title' => 'Акция 5',
                'og_description' => 'Описание акции 5',
                'og_url' => 'https://dr-malkov.ru/akcii/aktsiya-5',
                'meta_title' => 'Акция 5',
                'meta_description' => 'Описание акции 5',
                'meta_keywords' => 'акция',
                'slider_active' => 'TRUE',
                'due_time' => '2023-12-31',
                'image' => 'img/stock-slider/1.jpg',
                'image_mob' => 'img/stock-slider/1.jpg',
            ],
            [
                'title' => 'Акция 6',
                'h1_title' => 'Акция 6',
                'description' => 'Описание акции 6',
                'description_header' => 'Описание акции 6',
                'content' => 'Описание акции 6',
                'slug' => 'aktsiya-6',
                'og_title' => 'Акция 6',
                'og_description' => 'Описание акции 6',
                'og_url' => 'https://dr-malkov.ru/akcii/aktsiya-6',
                'meta_title' => 'Акция 6',
                'meta_description' => 'Описание акции 6',
                'meta_keywords' => 'акция',
                'slider_active' => 'TRUE',
                'due_time' => '2023-12-31',
                'image' => 'img/stock-slider/1.jpg',
                'image_mob' => 'img/stock-slider/1.jpg',
            ],
            [
                'title' => 'Акция 7',
                'h1_title' => 'Акция 7',
                'description' => 'Описание акции 7',
                'description_header' => 'Описание акции 7',
                'content' => 'Описание акции 7',
                'slug' => 'aktsiya-7',
                'og_title' => 'Акция 7',
                'og_description' => 'Описание акции 7',
                'og_url' => 'https://dr-malkov.ru/akcii/aktsiya-7',
                'meta_title' => 'Акция 7',
                'meta_description' => 'Описание акции 7',
                'meta_keywords' => 'акция',
                'slider_active' => 'TRUE',
                'due_time' => '2023-12-31',
                'image' => 'img/stock-slider/1.jpg',
                'image_mob' => 'img/stock-slider/1.jpg',
            ],
            [
                'title' => 'Акция 8',
                'h1_title' => 'Акция 8',
                'description' => 'Описание акции 8',
                'description_header' => 'Описание акции 8',
                'content' => 'Описание акции 8',
                'slug' => 'aktsiya-8',
                'og_title' => 'Акция 8',
                'og_description' => 'Описание акции 8',
                'og_url' => 'https://dr-malkov.ru/akcii/aktsiya-8',
                'meta_title' => 'Акция 8',
                'meta_description' => 'Описание акции 8',
                'meta_keywords' => 'акция',
                'slider_active' => 'TRUE',
                'due_time' => '2023-12-31',
                'image' => 'img/stock-slider/1.jpg',
                'image_mob' => 'img/stock-slider/1.jpg',
            ],
            [
                'title' => 'Акция 9',
                'h1_title' => 'Акция 9',
                'description' => 'Описание акции 9',
                'description_header' => 'Описание акции 9',
                'content' => 'Описание акции 9',
                'slug' => 'aktsiya-9',
                'og_title' => 'Акция 9',
                'og_description' => 'Описание акции 9',
                'og_url' => 'https://dr-malkov.ru/akcii/aktsiya-9',
                'meta_title' => 'Акция 9',
                'meta_description' => 'Описание акции 9',
                'meta_keywords' => 'акция',
                'slider_active' => 'TRUE',
                'due_time' => '2023-12-31',
                'image' => 'img/stock-slider/1.jpg',
                'image_mob' => 'img/stock-slider/1.jpg',
            ],
            [
                'title' => 'Акция 10',
                'h1_title' => 'Акция 10',
                'description' => 'Описание акции 10',
                'description_header' => 'Описание акции 10',
                'content' => 'Описание акции 10',
                'slug' => 'aktsiya-10',
                'og_title' => 'Акция 10',
                'og_description' => 'Описание акции 10',
                'og_url' => 'https://dr-malkov.ru/akcii/aktsiya-10',
                'meta_title' => 'Акция 10',
                'meta_description' => 'Описание акции 10',
                'meta_keywords' => 'акция',
                'slider_active' => 'TRUE',
                'due_time' => '2023-12-31',
                'image' => 'img/stock-slider/1.jpg',
                'image_mob' => 'img/stock-slider/1.jpg',
            ],
            [
                'title' => 'Акция 11',
                'h1_title' => 'Акция 11',
                'description' => 'Описание акции 11',
                'description_header' => 'Описание акции 11',
                'content' => 'Описание акции 11',
                'slug' => 'aktsiya-11',
                'og_title' => 'Акция 11',
                'og_description' => 'Описание акции 11',
                'og_url' => 'https://dr-malkov.ru/akcii/aktsiya-11',
                'meta_title' => 'Акция 11',
                'meta_description' => 'Описание акции 11',
                'meta_keywords' => 'акция',
                'slider_active' => 'TRUE',
                'due_time' => '2023-12-31',
                'image' => 'img/stock-slider/1.jpg',
                'image_mob' => 'img/stock-slider/1.jpg',
            ],
            [
                'title' => 'Акция 12',
                'h1_title' => 'Акция 12',
                'description' => 'Описание акции 12',
                'description_header' => 'Описание акции 12',
                'content' => 'Описание акции 12',
                'slug' => 'aktsiya-12',
                'og_title' => 'Акция 12',
                'og_description' => 'Описание акции 12',
                'og_url' => 'https://dr-malkov.ru/akcii/aktsiya-12',
                'meta_title' => 'Акция 12',
                'meta_description' => 'Описание акции 12',
                'meta_keywords' => 'акция',
                'slider_active' => 'TRUE',
                'due_time' => '2023-12-31',
                'image' => 'img/stock-slider/1.jpg',
                'image_mob' => 'img/stock-slider/1.jpg',
            ],
            [
                'title' => 'Акция 13',
                'h1_title' => 'Акция 13',
                'description' => 'Описание акции 13',
                'description_header' => 'Описание акции 13',
                'content' => 'Описание акции 13',
                'slug' => 'aktsiya-13',
                'og_title' => 'Акция 13',
                'og_description' => 'Описание акции 13',
                'og_url' => 'https://dr-malkov.ru/akcii/aktsiya-13',
                'meta_title' => 'Акция 13',
                'meta_description' => 'Описание акции 13',
                'meta_keywords' => 'акция',
                'slider_active' => 'TRUE',
                'due_time' => '2023-12-31',
                'image' => 'img/stock-slider/1.jpg',
                'image_mob' => 'img/stock-slider/1.jpg',
            ],
            [
                'title' => 'Акция 14',
                'h1_title' => 'Акция 14',
                'description' => 'Описание акции 14',
                'description_header' => 'Описание акции 14',
                'content' => 'Описание акции 14',
                'slug' => 'aktsiya-14',
                'og_title' => 'Акция 14',
                'og_description' => 'Описание акции 14',
                'og_url' => 'https://dr-malkov.ru/akcii/aktsiya-14',
                'meta_title' => 'Акция 14',
                'meta_description' => 'Описание акции 14',
                'meta_keywords' => 'акция',
                'slider_active' => 'TRUE',
                'due_time' => '2023-12-31',
                'image' => 'img/stock-slider/1.jpg',
                'image_mob' => 'img/stock-slider/1.jpg',
            ],
            [
                'title' => 'Акция 15',
                'h1_title' => 'Акция 15',
                'description' => 'Описание акции 15',
                'description_header' => 'Описание акции 15',
                'content' => 'Описание акции 15',
                'slug' => 'aktsiya-15',
                'og_title' => 'Акция 15',
                'og_description' => 'Описание акции 15',
                'og_url' => 'https://dr-malkov.ru/akcii/aktsiya-15',
                'meta_title' => 'Акция 15',
                'meta_description' => 'Описание акции 15',
                'meta_keywords' => 'акция',
                'slider_active' => 'TRUE',
                'due_time' => '2023-12-31',
                'image' => 'img/stock-slider/1.jpg',
                'image_mob' => 'img/stock-slider/1.jpg',
            ],
            ];

        foreach ($data as $key => $value) {
            Stock::create($value);
        }
    }
}
