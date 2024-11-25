@extends('layouts.main')

@section('content')

    <section class="section hero about-hero">
        <div class="container">
            <h1 class="h1 uppercase">{!! $politika_page->title_h1 !!}</h1>

            <div class="about-hero__wrap">
                {!! $politika_page->description !!}
            </div>
        </div>
    </section>


    <section class="section"></section>
@endsection()
