
@extends('layouts.main')

@section('content')
    <section class="section hero doctors-hero">
        <div class="container">
            <div class="h1 uppercase dectors-hero__title">{{ $page->title_h1 }}</div>

            <div class="doctors-hero__top">
                <p class="doctors-hero__text">
                    {!! $page->description !!}
                </p>
            </div>

            <div class="divider horizontal gray"></div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <h2 class="h2">Документы</h2>
            <div class="diplomas-items">
                @foreach ($clinic_documents as $document)
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

    <section class="section">
        <div class="container">
            <h2 class="h2">Сертификаты</h2>
            <div class="diplomas-items">
                @foreach ($clinic_certificates as $certificate)
                    <div class="diplom-item">
                        <div class="diplom-item__image">
                            <img src="{{ asset('storage') . '/' . $certificate->image }}" alt="">
                        </div>
                        <h3 class="diplom-item__title">{!! $certificate->title !!}</h3>
                        <p class="diplom-item__text">{!! $certificate->description !!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @if ($block_callback_form->is_active != 'off')
    <x-sections.callback :block="$block_callback_form"/>
    @endif
    @if ($block_questions->is_active != 'off')
    <x-sections.faq :block="$block_questions"/>
    @endif
    <section class="section"></section>
@endsection()
