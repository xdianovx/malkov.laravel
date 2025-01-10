<?php

namespace Database\Seeders;

use App\Models\Document;
use App\Models\Specialist;
use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Сертификат 1',
                'description' => 'Сертификат описание 1',
                'image' => 'image1.jpg',
                'specialist_id' => 1,
            ],
            [
                'title' => 'Сертификат 2',
                'description' => 'Сертификат описание 2',
                'image' => 'image2.jpg',
                'specialist_id' => 1,
            ],
            [
                'title' => 'Сертификат 3',
                'description' => 'Сертификат описание 3',
                'image' => 'image3.jpg',
                'specialist_id' => 2,
            ],
            [
                'title' => 'Сертификат 4',
                'description' => 'Сертификат описание 4',
                'image' => 'image4.jpg',
                'specialist_id' => 2,
            ],
            [
                'title' => 'Сертификат 5',
                'description' => 'Сертификат описание 5',
                'image' => 'image5.jpg',
                'specialist_id' => 3,
            ],
            [
                'title' => 'Сертификат 6',
                'description' => 'Сертификат описание 6',
                'image' => 'image6.jpg',
                'specialist_id' => 3,
            ],
            [
                'title' => 'Сертификат 7',
                'description' => 'Сертификат описание 7',
                'image' => 'image7.jpg',
                'specialist_id' => 4,
            ],
            [
                'title' => 'Сертификат 8',
                'description' => 'Сертификат описание 8',
                'image' => 'image8.jpg',
                'specialist_id' => 4,
            ],
        ];

        foreach ($data as $key => $value) {
            Document::create($value);
        }


    }
}
