<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MainInfo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            PageSeeder::class,
        ]);
        $this->call([
            HomePageNumSeeder::class,
        ]);
        $this->call([
            BlockSeeder::class,
        ]);
        $this->call([
            QuestionSeeder::class,
        ]);
        $this->call([
            ServiceSeeder::class,
        ]);
        $this->call([
            PriceSeeder::class,
        ]);
        $this->call([
            StockSeeder::class,
        ]);
        $this->call([
            BlogSeeder::class,
        ]);

        $this->call([
            ReviewSeeder::class,
        ]);

        $this->call([
            SpecialistSeeder::class,
        ]);

        $this->call([
            DocumentSeeder::class,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'password' => Hash::make('aspire5745g'),
            'email' => 'test@example.com',
        ]);

        MainInfo::truncate();

    $reviews = [
      [
            'og_site_title' => 'Стоматологическая клиника доктора Малькова',
            'og_site_image' => 'test',
            'telegram' => 'test',
            'whatsapp' => 'test',
            'vkontakte' => 'test',
            'phone' => '+7 (926) 076 78 17',
            'address' => 'Москва, поселение Московский, Саларьевская улица, 16к3',
            'working_days' => '<p>ПН–ВС:</p><p>10:00 до 21:00</p>',
            'text_footer' => 'Здоровые зубы – залог вашего здоровья и красоты. Запишитесь на консультацию к нашим специалистам. Мы работаем для вас с 10:00 до 21:00 без выходных.',
      ]
    ];

    foreach ($reviews as $key => $value) {
      MainInfo::create($value);
    }
    }
}
