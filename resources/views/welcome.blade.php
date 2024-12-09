@extends('layouts.main')

@section('title', 'Стоматологическая Клиника Доктора Малькова')
@section('meta_description',
    'Качественное лечение зубов с гарантией в стоматологии с современным оборудованием и
    опытными врачами. Доверие, безопасность и гарантия на все услуги.')
@section('meta_keywords',
    'стоматологическая клиника, лечение зубов, современные технологии, квалифицированные врачи,
    безопасное лечение, гарантия на услуги, стоматология для всей семьи')
@section('canonical', url('/'))
@section('og_title', 'Стоматологическая Клиника Доктора Малькова')
@section('og_description', 'Качественное лечение зубов от профессионалов с гарантией.')
@section('og_url', url('/'))
@section('og_image', asset('images/clinic_main.jpg'))
@section('twitter_title', 'Стоматологическая Клиника Доктора Малькова')
@section('twitter_description', 'Современные методы и высококвалифицированные врачи. Запишитесь на приём.')
@section('twitter_image', asset('images/clinic_main.jpg'))

@section('content')
    <x-sections.index-hero :item="$home_page" />
    <x-sections.stock-slider :data="$stocks" />


    <x-sections.services :block="$block_services" :data="$services" />
    <x-sections.showreel :data="$show_reel" />
    {{-- <x-sections.doctors :block="$block_specialists" :data="$specialists" /> --}}
    {{-- <x-sections.reviews-external :block="$block_reviews" :data="$reviews" /> --}}
    <x-sections.news :block="$block_articles_news" :data="$news" />
    <x-sections.map />
    <x-sections.callback :block="$block_callback_form" />
    <x-sections.faq :block="$block_questions" />
    <section class="section"></section>
@endsection()
