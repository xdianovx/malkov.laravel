
@extends('layouts.main')

@section('content')

    <section class="section hero section-doctor">
        <div class="container">
            <div class="section-doctor__wrap">

                <img class="section-doctor__image" src="{{ asset('storage') . '/' . $specialist->image }}" alt="">
                <div class="section-doctor__info">
                    <h1 class="h1 uppercase">
                        {!! $specialist->h1_title !!}
                    </h1>
                    <div class="section-doctor__info_content">
                        @foreach (json_decode($specialist->education, true) as $education)
                        <p>{{ $education }}</p>
                         @endforeach
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
                @foreach ($specialist->documents as $document)
                    <div class="diplom-item">
                        <div class="diplom-item__image">
                            <img src="{{ asset('storage') . '/' . $document->image }}" alt="">
                        </div>
                        <h3 class="diplom-item__title">{!! $document->title !!}</h3>
                        <p class="diplom-item__text">{!! $document->description !!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <x-sections.doctors :block="$block_specialists" :data="$specialists"/>
    <x-sections.callback :block="$block_callback_form"/>
    <x-sections.faq :block="$block_questions"/>

    <section class="section"></section>
@endsection()
