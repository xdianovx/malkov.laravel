<?php

namespace Database\Seeders;

use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Администратор',
                'slug' => Str::slug('Администратор'),
            ],
            [
                'title' => 'Гигиенист',
                'slug' => Str::slug('Гигиенист'),
            ],
            [
                'title' => 'Ортодонт',
                'slug' => Str::slug('Ортодонт'),
            ],
            [
                'title' => 'Имплантолог',
                'slug' => Str::slug('Имплантолог'),
            ],
            [
                'title' => 'Хирург',
                'slug' => Str::slug('Хирург'),
            ],
            [
                'title' => 'Терапевт',
                'slug' => Str::slug('Терапевт'),
            ],
            [
                'title' => 'Парадантолог',
                'slug' => Str::slug('Парадантолог'),
            ],
            [
                'title' => 'Ассистент',
                'slug' => Str::slug('Ассистент'),
            ]
        ];

        foreach ($data as $key => $value) {
            Specialization::create($value);
        }
    }
}
