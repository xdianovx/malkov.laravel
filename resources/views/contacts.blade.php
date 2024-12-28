@extends('layouts.main')

@section('content')
    <section class="section hero contacts-hero">
        <div class="container">
            <div class="mb-4 flex justify-start max-[768px]:flex max-[768px]:justify-center max-[768px]:mb-8">
                {{ Breadcrumbs::render('contacts') }}
            </div>
            <div class="contacts-hero__top">
                <h1 class="h1 uppercase max-[768px]:text-center">
                    {!! $page->title_h1 !!}
                </h1>

                <x-ui.socials class="contacts-hero__socials" />
            </div>
            <div class="divider horizontal gray"></div>
        </div>
    </section>


    <section class="section contacts-content-section">
        <div class="container">
            {!! $page->description !!}
        </div>
    </section>
    <x-sections.map />
    <x-sections.faq :block="$block_questions" />

    <section class="section"></section>
@endsection()
