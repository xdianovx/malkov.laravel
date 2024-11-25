@extends('layouts.main')

@section('content')
    <x-sections.index-hero :item="$home_page" />
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
