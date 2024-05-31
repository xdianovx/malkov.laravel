@extends('layouts.main')

@section('content')

    <section class="section hero contacts-hero">
        <div class="container">
            <div class="contacts-hero__top">
                <h1 class="h1 uppercase">
                    контакты клиники <br> доктора малькова
                </h1>
                <x-ui.socials class="contacts-hero__socials"/>
            </div>

            <div class="contacts-hero__contacts">
                <div class="contacts-hero__address">
                    000000, Москва, пос. Московский, <br> Саларьевская ул., 16, корп. 3
                </div>

                <div class="contacts-hero__contacts_wrap">
                    <div class="contacts-hero__contacts_item">
                        <h4>Телефон</h4>
                        <a href="tel:+7 (926) 076-78-18">+7 (926) 076-78-18</a>
                    </div>

                    <div class="contacts-hero__contacts_item">
                        <h4>Почта</h4>
                        <a href="mailto:malkov@malkov.com">malkov@malkov.com</a>
                    </div>
                </div>

            </div>

            <div class="divider horizontal gray"></div>
        </div>
    </section>


    <section class="section contacts-content-section">
        <div class="container">
            <h2 class="h2">Контакты клиники Доктора малькова</h2>

            <div class="content">
                <p>
                    Имплантация представляет собой вживление титановых дентальных имплантов в челюстную костную ткань.
                    В дальнейшем они являются основой при установке несъемных протезов - коронок и мостов, или же
                    используются в виде вспомогательной фиксации съемных протезов.
                </p>

                <p>
                    Впервые установка зубных имплантов стала применяться на практике в стоматологии во второй половине 20
                    века. Ученый Ингвар Бранемарк воплотил впервые свои исследования в реальность, которая применяется
                    по настоящее время. Такое открытие в то время поразило многих стоматологов. В качестве материала для
                    импланта он использовал титан, так как он хорошо интегрируется с костной тканью. Это был новый
                    уровень развития в стоматологической сфере.
                </p>

                <p>
                    Сегодня имплантация зубов пользуются особым спросом, в том числе благодаря доступным ценам. Данную процедуру проводят при отсутствии у человека как одного, так и нескольких зубов сразу. Дентальные элементы по своему строению и форме напоминают корень зуба. В качестве материалов для протезирования используются биологически совместимые с костной тканью - керамика, титан и диоксид циркония.
                </p>


            </div>
        </div>
    </section>
    <x-sections.map/>
    <x-sections.faq/>


    <section class="section"></section>
@endsection()
