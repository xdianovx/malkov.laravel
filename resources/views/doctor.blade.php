
@extends('layouts.main')

@section('content')

    <section class="section hero section-doctor">
        <div class="container">
            <div class="section-doctor__wrap">

                <img class="section-doctor__image" src="{{$specialist->image}}" alt="">
                <div class="section-doctor__info">
                    <h1 class="h1 uppercase">
                        {!! $specialist->title !!}
                    </h1>

                    <x-ui.rating :rating="1" class="doctor-rating"/>

                    <div class="section-doctor__info_content">
                        {!! $specialist->education !!}
                    </div>


                    <x-ui.button-arrow class="accent section-doctor-btn" text="Записаться к врачу"/>
                </div>
            </div>

            <div class="section-doctor__info_content-mob">

            </div>

            <div class="divider horizontal gray"></div>
        </div>
    </section>

    <section class="section doctor-exp-section">
        <div class="container">
            {!! $specialist->description !!}
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


    <x-sections.doctors  :data="$specialists"/>
    <x-sections.callback />
    <x-sections.faq />



    <section class="section"></section>
@endsection()
