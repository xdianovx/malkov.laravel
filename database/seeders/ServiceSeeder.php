<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_parent = [
            //Главные
            [
                'title' => 'Профилактика',
                'slug' => Str::slug('Профилактика'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.'
            ],
            [
                'title' => 'Хирургия',
                'slug' => Str::slug('Хирургия'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.'
            ],
            [
                'title' => 'Имплантация',
                'slug' => Str::slug('Имплантация'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.'
            ],
            [
                'title' => 'Костная пластика',
                'slug' => Str::slug('Костная пластика'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.'
            ],
            [
                'title' => 'Терапия',
                'slug' => Str::slug('Терапия.'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.'
            ],
            [
                'title' => 'Эндодонтия',
                'slug' => Str::slug('Эндодонтия'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.'
            ],
            [
                'title' => 'Цифровая стоматология',
                'slug' => Str::slug('Цифровая стоматология'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.'
            ],
            [
                'title' => 'Протезирование',
                'slug' => Str::slug('Протезирование'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.'
            ],
            [
                'title' => 'Ортодонтия',
                'slug' => Str::slug('Ортодонтия'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.'
            ],
            [
                'title' => 'Диагностика',
                'slug' => Str::slug('Диагностика'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.'
            ]
        ];
        foreach ($data_parent as $key => $value) {
            Service::create($value);
        }
        $data_child = [
            //Дочерние
            [
                'title' => 'Гигиена полости рта',
                'slug' => Str::slug('Гигиена полости рта'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.',
                'parent_id' => Service::where('title', 'Профилактика')->first()->id
            ],
            [
                'title' => 'Удаление зубов',
                'slug' => Str::slug('Удаление зубов'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.',
                'parent_id' => Service::where('title', 'Хирургия')->first()->id
            ],
            [
                'title' => 'Одиночная',
                'slug' => Str::slug('Одиночная'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.',
                'parent_id' => Service::where('title', 'Имплантация')->first()->id
            ],
            [
                'title' => 'Тотальная реабилитация',
                'slug' => Str::slug('Тотальная реабилитация'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.',
                'parent_id' => Service::where('title', 'Имплантация')->first()->id
            ],
            [
                'title' => 'Верхняя челюсть. Синус-лифтинг',
                'slug' => Str::slug('Верхняя челюсть. Синус-лифтинг'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.',
                'parent_id' => Service::where('title', 'Костная пластика')->first()->id
            ],
            [
                'title' => 'Нижняя Челюсть. Синус-лифтинг',
                'slug' => Str::slug('Нижняя Челюсть. Синус-лифтинг'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.',
                'parent_id' => Service::where('title', 'Костная пластика')->first()->id
            ],
            [
                'title' => 'Пластика мягких тканей',
                'slug' => Str::slug('Пластика мягких тканей'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.',
                'parent_id' => Service::where('title', 'Костная пластика')->first()->id
            ],
            [
                'title' => 'Лечение зубов',
                'slug' => Str::slug('Лечение зубов'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.',
                'parent_id' => Service::where('title', 'Терапия')->first()->id
            ],
            [
                'title' => 'Коронки',
                'slug' => Str::slug('Коронки'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.',
                'parent_id' => Service::where('title', 'Протезирование')->first()->id
            ],
            [
                'title' => 'Виниры',
                'slug' => Str::slug('Виниры'),
                'description_header' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'description' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.
                    Только зубные имплантаты позволяют полностью восстановить функциональность зуба, включая корень зуба, и не затрагивая соседние зубы.',
                'content' => 'Стоматологическая имплантация — это уникальный метод восстановления утраченных зубов.',
                'parent_id' => Service::where('title', 'Протезирование')->first()->id
            ],
        ];

        foreach ($data_child as $key => $value) {
            Service::create($value);
        }
    }
}

    // Schema::create('services', function (Blueprint $table) {
    //     $table->id();
    //     $table->string('title');
    //     $table->string('slug');
    //     $table->string('image')->nullable();
    //     $table->string('image_mob')->nullable();
    //     $table->text('description_header')->nullable();
    //     $table->text('description')->nullable();
    //     $table->text('description_footer')->nullable();
    //     $table->text('content')->nullable();
