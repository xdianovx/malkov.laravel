<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Главная',
                'title_h1' => 'Стоматологическая клиника доктора Малькова',
                'description' => 'Наша клиника предлагает полный спектр стоматологических услуг, используя самые современные технологии и материалы. Наши опытные врачи помогут вам обрести здоровую и красивую улыбку',
                'slug' => 'glavnaya',
                'og_title' => 'Стоматологическая клиника доктора Малькова',
                'og_description' => 'Наша клиника предлагает полный спектр стоматологических услуг, используя самые современные технологии и материалы. Наши опытные врачи помогут вам обрести здоровую и красивую улыбку',
                'og_url' => 'https://dr-malkov.ru/',
                'meta_title' => 'Стоматологическая клиника доктора Малькова',
                'meta_description' => 'Наша клиника предлагает полный спектр стоматологических услуг, используя самые современные технологии и материалы. Наши опытные врачи помогут вам обрести здоровую и красивую улыбку',
                'meta_keywords' => 'стоматология, лечение зубов, имплантация, протезирование, ортодонтия, стоматолог, клиника'
            ],
            [
                'title' => 'Услуги',
                'title_h1' => 'Услуги',
                'description' => 'В нашей клинике мы предлагаем широкий спектр стоматологических услуг, направленных на восстановление и сохранение здоровья ваших зубов. Благодаря современному оборудованию и опыту наших специалистов, мы гарантируем высокое качество лечения и комфортное пребывание в клинике.',
                'slug' => 'uslugi',
                'og_title' => 'Комплексные стоматологические услуги для вашей идеальной улыбки | Стоматологическая клиника доктора Малькова',
                'og_description' => 'В нашей клинике мы предлагаем широкий спектр стоматологических услуг, направленных на восстановление и сохранение здоровья ваших зубов. Благодаря современному оборудованию и опыту наших специалистов, мы гарантируем высокое качество лечения и комфортное пребывание в клинике.',
                'og_url' => 'https://dr-malkov.ru/uslugi',
                'meta_title' => 'Комплексные стоматологические услуги для вашей идеальной улыбки',
                'meta_description' => 'В нашей клинике мы предлагаем широкий спектр стоматологических услуг, направленных на восстановление и сохранение здоровья ваших зубов. Благодаря современному оборудованию и опыту наших специалистов, мы гарантируем высокое качество лечения и комфортное пребывание в клинике.',
                'meta_keywords' => 'стоматологические услуги, лечение зубов, стоматология'
            ],
            [
                'title' => 'Пациентам',
                'title_h1' => 'Пациентам',
                'description' => 'Мы заботимся о вашем здоровье и комфорте. На этой странице вы найдете всю необходимую информацию о нашей клинике, наших врачах и предоставляемых услугах. Мы открыты и прозрачны в своей работе, поэтому все документы, подтверждающие качество наших услуг, доступны для ознакомления',
                'slug' => 'pacientam',
                'og_title' => 'Информация для пациентов | Стоматологическая клиника доктора Малькова',
                'og_description' => 'Мы заботимся о вашем здоровье и комфорте. На этой странице вы найдете всю необходимую информацию о нашей клинике, наших врачах и предоставляемых услугах. Мы открыты и прозрачны в своей работе, поэтому все документы, подтверждающие качество наших услуг, доступны для ознакомления',
                'og_url' => 'https://dr-malkov.ru/pacientam',
                'meta_title' => 'Информация для пациентов | Стоматологическая клиника доктора Малькова',
                'meta_description' => 'Мы заботимся о вашем здоровье и комфорте. На этой странице вы найдете всю необходимую информацию о нашей клинике, наших врачах и предоставляемых услугах. Мы открыты и прозрачны в своей работе, поэтому все документы, подтверждающие качество наших услуг, доступны для ознакомления',
                'meta_keywords' => 'договор на оказание медицинских услуг, информированное согласие, гарантия на лечение, сертификаты качества, лицензия на медицинскую деятельность, квалификация врачей'
            ],
            [
                'title' => 'Врачи',
                'title_h1' => 'Наши врачи',
                'description' => 'Наша команда – это опытные и высококвалифицированные специалисты, которые любят свою работу и заботятся о здоровье своих пациентов. Каждый врач нашей клиники – настоящий профессионал своего дела.',
                'slug' => 'vrachi',
                'og_title' => 'Наши врачи | Стоматологическая клиника доктора Малькова',
                'og_description' => 'Наша команда – это опытные и высококвалифицированные специалисты, которые любят свою работу и заботятся о здоровье своих пациентов. Каждый врач нашей клиники – настоящий профессионал своего дела.',
                'og_url' => 'https://dr-malkov.ru/vrachi',
                'meta_title' => 'Наши врачи | Стоматологическая клиника доктора Малькова',
                'meta_description' => 'Наша команда – это опытные и высококвалифицированные специалисты, которые любят свою работу и заботятся о здоровье своих пациентов. Каждый врач нашей клиники – настоящий профессионал своего дела.',
                'meta_keywords' => 'врачи-стоматологи, команда профессионалов, опыт работы, квалификация, специализация, запись на прием'
            ],
            [
                'title' => 'Контакты',
                'title_h1' => 'Контакты',
                'description' => '<div class="contacts-hero__contacts"><div class="contacts-hero__address">
                    000000, Москва, пос. Московский, <br> Саларьевская ул., 16, корп. 3
                </div><div class="contacts-hero__contacts_wrap"><div class="contacts-hero__contacts_item"><h4>Телефон</h4>
                <a href="tel:+7 (926) 076-78-18">+7 (926) 076-78-18</a></div><div class="contacts-hero__contacts_item"><h4>Почта</h4>
                <a href="mailto:malkov@malkov.com">malkov@malkov.com</a></div></div></div>',
                'slug' => 'kontakty',
                'og_title' => 'Контакты | Стоматологическая клиника доктора Малькова',
                'og_description' => 'Доверьте свою улыбку профессионалам! Запишитесь на прием в клинику Dr. Malkov онлайн или по телефону. Мы находимся в Москве, по адресу: пос. Московский, Саларьевская ул., 16, корп. 3',
                'og_url' => 'https://dr-malkov.ru/kontakty',
                'meta_title' => 'Контакты | Стоматологическая клиника доктора Малькова',
                'meta_description' => 'Доверьте свою улыбку профессионалам! Запишитесь на прием в клинику Dr. Malkov онлайн или по телефону. Мы находимся в Москве, по адресу: пос. Московский, Саларьевская ул., 16, корп. 3',
                'meta_keywords' => 'контакты, записаться на прием, телефон, адрес, email, карта проезда, часы работы, Москва'
            ],
            [
                'title' => 'О нас',
                'title_h1' => 'О нас',
                'description' => 'Добро пожаловать в нашу стоматологию! Мы создаем здоровые и красивые улыбки для всей семьи. Наша команда опытных стоматологов использует новейшее оборудование и качественные материалы,
                 чтобы обеспечить вам комфортное и безболезненное лечение. Мы предлагаем широкий спектр услуг, включая лечение кариеса, профессиональную гигиену, отбеливание зубов, имплантацию и протезирование.
                  Наши пациенты отмечают высокий профессионализм врачей, внимательное отношение и отличный результат лечения. Мы гарантируем качество наших работ и предлагаем доступные цены.',
                'slug' => 'o-nas',
                'og_title' => 'О нас | Стоматологическая клиника доктора Малькова',
                'og_description' => 'Добро пожаловать в нашу стоматологию! Мы создаем здоровые и красивые улыбки для всей семьи. Наша команда опытных стоматологов использует новейшее оборудование и качественные материалы,
                 чтобы обеспечить вам комфортное и безболезненное лечение. Мы предлагаем широкий спектр услуг, включая лечение кариеса, профессиональную гигиену, отбеливание зубов, имплантацию и протезирование.
                  Наши пациенты отмечают высокий профессионализм врачей, внимательное отношение и отличный результат лечения. Мы гарантируем качество наших работ и предлагаем доступные цены.',
                'og_url' => 'https://dr-malkov.ru/o-nas',
                'meta_title' => 'О нас | Стоматологическая клиника доктора Малькова',
                'meta_description' => 'Добро пожаловать в нашу стоматологию! Мы создаем здоровые и красивые улыбки для всей семьи. Наша команда опытных стоматологов использует новейшее оборудование и качественные материалы,
                 чтобы обеспечить вам комфортное и безболезненное лечение. Мы предлагаем широкий спектр услуг, включая лечение кариеса, профессиональную гигиену, отбеливание зубов, имплантацию и протезирование.
                  Наши пациенты отмечают высокий профессионализм врачей, внимательное отношение и отличный результат лечения. Мы гарантируем качество наших работ и предлагаем доступные цены.',
                'meta_keywords' => 'стоматология, лечение зубов, имплантация, отбеливание, Москва'
            ],
            [
                'title' => 'Блог',
                'title_h1' => 'Блог',
                'description' => 'Узнайте все о здоровье зубов и десен! В нашем блоге вы найдете полезные советы по уходу за полостью рта, информацию о современных методах лечения и ответы на часто задаваемые вопросы.',
                'slug' => 'blog',
                'og_title' => 'Блог | Стоматологическая клиника доктора Малькова',
                'og_description' => 'Узнайте все о здоровье зубов и десен! В нашем блоге вы найдете полезные советы по уходу за полостью рта, информацию о современных методах лечения и ответы на часто задаваемые вопросы.',
                'og_url' => 'https://dr-malkov.ru/blog',
                'meta_title' => 'Блог | Стоматологическая клиника доктора Малькова',
                'meta_description' => 'Узнайте все о здоровье зубов и десен! В нашем блоге вы найдете полезные советы по уходу за полостью рта, информацию о современных методах лечения и ответы на часто задаваемые вопросы.',
                'meta_keywords' => 'стоматология, лечение зубов, имплантация, отбеливание, блог'
            ],
            [
                'title' => 'Акции',
                'title_h1' => 'Акции',
                'description' => 'На этой странице вы найдете самые актуальные акции и специальные предложения нашей клиники. Мы регулярно обновляем информацию, чтобы вы могли воспользоваться выгодными условиями и получить качественное стоматологическое лечение по доступной цене.,
                 а значит, должны быть объективно рассмотрены соответствующими инстанциями.',
                'slug' => 'akcii',
                'og_title' => 'Акции | Стоматологическая клиника доктора Малькова',
                'og_description' => 'На этой странице вы найдете самые актуальные акции и специальные предложения нашей клиники. Мы регулярно обновляем информацию, чтобы вы могли воспользоваться выгодными условиями и получить качественное стоматологическое лечение по доступной цене.',
                'og_url' => 'https://dr-malkov.ru/akcii',
                'meta_title' => 'Акции | Стоматологическая клиника доктора Малькова',
                'meta_description' => 'На этой странице вы найдете самые актуальные акции и специальные предложения нашей клиники. Мы регулярно обновляем информацию, чтобы вы могли воспользоваться выгодными условиями и получить качественное стоматологическое лечение по доступной цене.',
                'meta_keywords' => 'акция, скидка, подарок, бесплатно, ограниченное время, специальное предложение, новый пациент, комплексная чистка, отбеливание зубов, имплантация'
            ],
            [
                'title' => 'Отзывы',
                'title_h1' => 'Отзывы',
                'description' => 'Отзывы наших пациентов — зеркало нашей работы! Узнайте, почему сотни людей выбирают стоматологическую клинику Доктора Малькова. На этой странице собраны честные и открытые отзывы о работе наших врачей и качестве предоставляемых услуг. Прочитайте истории пациентов, которые уже оценили преимущества профессионального лечения и комфортной атмосферы.',
                'slug' => 'otzyvy',
                'og_title' => 'Отзывы | Стоматологическая клиника доктора Малькова',
                'og_description' => 'Отзывы наших пациентов — зеркало нашей работы! Узнайте, почему сотни людей выбирают стоматологическую клинику Доктора Малькова. На этой странице собраны честные и открытые отзывы о работе наших врачей и качестве предоставляемых услуг. Прочитайте истории пациентов, которые уже оценили преимущества профессионального лечения и комфортной атмосферы.',
                'og_url' => 'https://dr-malkov.ru/otzyvy',
                'meta_title' => 'Отзывы | Стоматологическая клиника доктора Малькова',
                'meta_description' => 'Отзывы наших пациентов — зеркало нашей работы! Узнайте, почему сотни людей выбирают стоматологическую клинику Доктора Малькова. На этой странице собраны честные и открытые отзывы о работе наших врачей и качестве предоставляемых услуг. Прочитайте истории пациентов, которые уже оценили преимущества профессионального лечения и комфортной атмосферы.',
                'meta_keywords' => 'стоматология, лечение зубов, имплантация, отбеливание, отзывы, пациенты, клиника'
            ],
            [
                'title' => 'Цены',
                'title_h1' => 'Цены',
                'description' => 'На этой странице вы найдете подробный прайс-лист на все виды стоматологических услуг, предоставляемых нашей клиникой. Мы предлагаем прозрачные цены и высокое качество лечения.',
                'slug' => 'сeny',
                'og_title' => 'Цены | Стоматологическая клиника доктора Малькова',
                'og_description' => 'На этой странице вы найдете подробный прайс-лист на все виды стоматологических услуг, предоставляемых нашей клиникой. Мы предлагаем прозрачные цены и высокое качество лечения.',
                'og_url' => 'https://dr-malkov.ru/сeny',
                'meta_title' => 'Цены | Стоматологическая клиника доктора Малькова',
                'meta_description' => 'На этой странице вы найдете подробный прайс-лист на все виды стоматологических услуг, предоставляемых нашей клиникой. Мы предлагаем прозрачные цены и высокое качество лечения.',
                'meta_keywords' => 'стоматология, лечение зубов, имплантация, отбеливание, цены, стоматологические услуги'
            ],
            [
                'title' => 'Правила предоставления услуг мед.организации',
                'title_h1' => 'Правила предоставления услуг мед.организации',
                'description' => file_get_contents(public_path('politika_and_pravila_html_for_seed/pravila-predostavleniya-uslug.php')),
                'slug' => 'pravila-predostavleniya-uslug',
                'og_title' => 'Правила предоставления услуг мед.организации | Стоматологическая клиника доктора Малькова',
                'og_description' => 'На этой странице вы можете ознакомиться с правилами предоставления услуг медицинской организации.',
                'og_url' => 'https://dr-malkov.ru/pravila-predostavleniya-uslug',
                'meta_title' => 'Правила предоставления услуг мед.организации | Стоматологическая клиника доктора Малькова',
                'meta_description' => 'На этой странице вы можете ознакомиться с правилами предоставления услуг медицинской организации.',
                'meta_keywords' => 'стоматология, лечение зубов, имплантация, отбеливание, правила предоставления услуг, стоматологические услуги'
            ],
            [
                'title' => 'Политика конфиденциальности',
                'title_h1' => 'Политика конфиденциальности',
                'description' => file_get_contents(public_path('politika_and_pravila_html_for_seed/politika-konfidencialnosti.php')),
                'slug' => 'politika-konfidencialnosti',
                'og_title' => 'Политика конфиденциальности | Стоматологическая клиника доктора Малькова',
                'og_description' => 'На этой странице вы можете ознакомиться с политикой конфиденциальности и защите данных.',
                'og_url' => 'https://dr-malkov.ru/politika-konfidencialnosti',
                'meta_title' => 'Политика конфиденциальности | Стоматологическая клиника доктора Малькова',
                'meta_description' => 'На этой странице вы можете ознакомиться с политикой конфиденциальности и защите данных.',
                'meta_keywords' => 'стоматология, лечение зубов, имплантация, отбеливание, политика конфиденциальности, стоматологические услуги'
            ],
        ];

        foreach ($data as $key => $value) {
            Page::create($value);
        }
    }
}
