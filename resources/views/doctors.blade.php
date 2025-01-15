@extends('layouts.main')

@section('content')
    <section class="section hero doctors-hero">
        <div class="container">
            <div class="mb-4 flex justify-start">{{ Breadcrumbs::render('specialists') }}</div>

            <div class="h1 uppercase dectors-hero__title">{{ $page->title_h1 }}</div>

            <div class="doctors-hero__top">
                <p class="doctors-hero__text text-neutral-700">
                    {!! $page->description !!}
                </p>

                <x-ui.button-arrow class="ml-auto accent" data-micromodal-trigger="modal-callback"
                    text="Задать вопрос врачу" />
            </div>

            <div class="divider horizontal gray"></div>
        </div>
    </section>


    <section class="section team-section">
        <div class="container">
            <div class="team-section__items">
                <div class="doctors-section__items">
                    @foreach ($specialists as $specialist)
                        <x-doctor-card :slug="$specialist->slug" :title="$specialist->h1_title" :image="$specialist->image" :profs="$specialist->specializations"
                            :experience="$specialist->experience" :operations="$specialist->operations" />
                    @endforeach
                </div>
            </div>


        </div>
    </section>
    @if ($block_articles_news->is_active != 'off')
    <x-sections.blogs :block="$block_articles_news" :data="$blogs" />
    @endif
    @if ($block_callback_form->is_active != 'off')
    <x-sections.callback :block="$block_callback_form" />
    @endif
    @if ($block_questions->is_active != 'off')
    <x-sections.faq :block="$block_questions" />
    @endif
    <section class="section"></section>
@endsection()
