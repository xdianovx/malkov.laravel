
@extends('layouts.main')

@section('content')

    <section class="section hero contacts-hero">
        <div class="container">
            <div class="contacts-hero__top">
                <h1 class="h1 uppercase">
                    {!! $contacts_page->title_h1 !!}
                </h1>
                <x-ui.socials class="contacts-hero__socials"/>
            </div>
            {!! $contacts_page->description !!}
            <div class="divider horizontal gray"></div>
        </div>
    </section>


    <section class="section contacts-content-section">
        <div class="container">
                {!! $contacts_page->description !!}
        </div>
    </section>
    <x-sections.map/>
    <x-sections.faq :block="$block_questions"/>

    <section class="section"></section>
@endsection()
