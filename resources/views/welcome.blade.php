@extends('layouts.main')

@section('content')
    <x-sections.index-hero :item="$home_page" />
    <x-sections.stock-slider :data="$stocks" />
    <x-sections.services :data="$services" />
    <x-sections.showreel :data="$show_reel" />
    <x-sections.doctors :data="$specialists" />
    <x-sections.reviews-external />
    {{-- <x-sections.map /> --}}
    <x-sections.news :data="$news" />
    <x-sections.map />
    <x-sections.callback />
    <x-sections.faq />


    <section class="section"></section>
@endsection()
