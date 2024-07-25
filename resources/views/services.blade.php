@extends('layouts.main')

@section('content')
    <section class="section hero">
        <div class="container">
            <div class="hero-services__top">
                <h1 class="h1 uppercase">
                    {!! $service_page->h1_title !!}
                </h1>

                <button data-micromodal-trigger="modal-callback" class="btn --accent ml-auto">Быстрая запись</button>
            </div>

            <div class="divider horizontal gray"></div>

            <div class="hero-services__texts">
                {!! $service_page->description_header !!}
            </div>
        </div>
    </section>


    <section class="section section-services">
        <div class="container">
            <h2 class="h2">Услуги</h2>

            <div class="section-services__items">
                @foreach ($parent_services as $parent_service)
                    <div class="nav-group">
                        <div class="nav-group__top">
                            <a href="{{ route('service-single', $parent_service->slug) }}">{{$parent_service->title}}</a>
                        </div>

                        <ul class="nav-group__links">
                            @foreach ($parent_service->children as $children_service)
                            <li>
                                <a href="{{ route('service-single', $children_service->slug) }}">{{$children_service->title}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <x-sections.callback :block="$block_callback_form" />
    <x-sections.faq :block="$block_questions" />

    <section class="section">

    </section>
@endsection()
