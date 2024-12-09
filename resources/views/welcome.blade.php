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
    <x-sections.index-hero :item="$page" />
    @if ($stocks->isNotEmpty())
        <x-sections.stock-slider :data="$stocks" />
    @endif
    @if ($block_services->is_active != null)
        <x-sections.services :block="$block_services" :data="$services" />
    @endif
    @if ($show_reel != null)
        <x-sections.showreel :data="$show_reel" />
    @endif
    @if ($block_specialists->is_active != null)
        <x-sections.doctors :block="$block_specialists" :data="$specialists" />
    @endif
    @if ($block_reviews->is_active != null)
        <x-sections.reviews-external :block="$block_reviews" :data="$reviews" />
    @endif
    @if ($block_articles_blog->is_active != null)
        <x-sections.blogs :block="$block_articles_blog" :data="$blogs" />
    @endif
    <x-sections.map />
    @if ($block_callback_form->is_active != null)
        <x-sections.callback :block="$block_callback_form" />
    @endif
    @if ($block_questions->is_active != null)
        <x-sections.faq :block="$block_questions" />
    @endif
    <section class="section"></section>
@endsection()
