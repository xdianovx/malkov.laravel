@php
    $data = [
        'name' => 'Дорошенко <br> Владислава Сергеевна',
        'image' => 'img/doctors/1.jpg',
        'expirience' => '7 лет',
        'rating' => 4,
        'info' => '<h4 class="h4">Образование:</h4><p>2015г. — Диплом по специальности «Стоматология», Первый Московский
        государственный медицинский университет имени И.М. Сеченова</p><p>2016г. — Интернатура по специальности
        «Стоматология общей практики», Первый Московский государственный медицинский университет имени И.М. Сеченова</p><h4 class="h4">Образование:</h4><p>2015г.  Диплом по специальности «Стоматология», Первый Московский
        государственный медицинский университет имени И.М. Сеченова</p><p>2016г. — Интернатура по специальности
        «Стоматология общей практики», Первый Московский государственный медицинский университет имени И.М. Сеченова</p>',
        'expirience_info' => ''
    ]
@endphp

@extends('layouts.main')

@section('content')

    <section class="section hero section-doctor">
        <div class="container">
            <div class="section-doctor__wrap">

                <img class="section-doctor__image" src="{{asset('img/doctors/1.jpg')}}" alt="">
                <div class="section-doctor__info">
                    <h1 class="h1 uppercase">
                        {!! $data['name'] !!}
                    </h1>

                    <x-ui.rating :rating="$data['rating']" class="doctor-rating"/>

                    <div class="section-doctor__info_content">
                        {!! $data['info'] !!}
                    </div>


                    <x-ui.button-arrow class="accent section-doctor-btn" text="Записаться к врачу"/>
                </div>
            </div>

            <div class="section-doctor__info_content-mob">
                {!! $data['info'] !!}
            </div>

            <div class="divider horizontal gray"></div>
        </div>
    </section>

    <section class="section doctor-exp-section">
        <div class="container">
            <h2 class="h2">Профессиональные навыки</h2>

            <div class="doctor-exp-section__info content">
                <h3>Заголовок для навыка</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias dolores et expedita fugiat harum
                    ipsa, laboriosam, laborum molestias nostrum, praesentium quae quis sed tempora tenetur vitae
                    voluptate voluptatibus. Accusantium aspernatur dignissimos doloribus esse ex qui sunt! Aliquid,
                    maxime, omnis. Alias at cumque dicta dolore, dolorem eligendi enim error harum ipsa libero nisi non
                    officia perspiciatis praesentium repellendus sed sequi similique ut vel veritatis!</p>

                <h3>Заголовок для навыка</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias dolores et expedita fugiat harum
                    ipsa, laboriosam, laborum molestias nostrum, praesentium quae quis sed tempora tenetur vitae
                    voluptate voluptatibus. Accusantium aspernatur dignissimos doloribus esse ex qui sunt! Aliquid,
                    maxime, omnis. Alias at cumque dicta dolore, dolorem eligendi enim error harum ipsa libero nisi non
                    officia perspiciatis praesentium repellendus sed sequi similique ut vel veritatis!</p>

                <ul>
                    <li>Списочек 1</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias dolores et expedita fugiat
                        harum ipsa, laboriosam, laborum molestias nostrum, praesentium quae quis sed tempora tenetur
                        vitae voluptate voluptatibus. Accusantium aspernatur dignissimos doloribus esse ex qui sunt!
                        Aliquid, maxime, omnis. Alias at cumque dicta dolore, dolorem eligendi enim error harum ipsa
                        libero nisi non officia perspiciatis praesentium repellendus sed sequi similique ut vel
                        veritatis!
                    </li>
                    <li>Списочек 3</li>
                    <li>Списочек 4</li>
                </ul>


                <ol>
                    <li><h4>Естественный вид</h4>
                        <p>asd</p></li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias dolores et expedita fugiat
                        harum ipsa, laboriosam, laborum molestias nostrum, praesentium quae quis sed tempora tenetur
                        vitae voluptate voluptatibus. Accusantium aspernatur dignissimos doloribus esse ex qui sunt!
                        Aliquid, maxime, omnis. Alias at cumque dicta dolore, dolorem eligendi enim error harum ipsa
                        libero nisi non officia perspiciatis praesentium repellendus sed sequi similique ut vel
                        veritatis!
                    </li>
                    <li>Списочек 3</li>
                    <li>Списочек 4</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="h2">Дипломы и сертификаты</h2>
            <div class="diplomas-items">
                @for($i = 0; $i < 8; $i++)
                    <div class="diplom-item">
                        <div class="diplom-item__image">
                            <img src="" alt="">
                        </div>
                        <h3 class="diplom-item__title">Диплом 1</h3>
                        <p class="diplom-item__text">Описание документа</p>
                    </div>
                @endfor
            </div>
        </div>
    </section>


    <x-sections.doctors />
    <x-sections.callback />
    <x-sections.faq />



    <section class="section"></section>
@endsection()
