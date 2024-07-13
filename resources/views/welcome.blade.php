@extends('layouts.main')

@section('content')
    <x-sections.index-hero :item="$home_page" />
    <x-sections.stock-slider :data="$stocks" />
    <x-sections.services :block="$block_services" :data="$services" />
    <x-sections.showreel :data="$show_reel" />
    <x-sections.doctors :block="$block_specialists" :data="$specialists" />
    <x-sections.reviews-external :block="$block_reviews" :data="$reviews" />
    <x-sections.news :block="$block_articles_news" :data="$news" />
    <x-sections.map />
    <x-sections.callback :block="$block_callback_form" />
    <x-sections.faq :block="$block_questions" />
    <section class="section"></section>
@endsection()
