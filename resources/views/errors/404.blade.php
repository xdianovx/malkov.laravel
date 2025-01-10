
@extends('layouts.main')

@section('content')
    <section class="section hero section-news d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <h1 class="h1 display-1" style="font-size: 6rem;">404</h1>
            <p class="fs-3">Страница не найдена</p>
            <div class="section-news__description d-flex align-items-center justify-content-center">
                <a href="{{ route('home') }}" class="btn doctors-section__top-btn --accent mx-auto">Вернуться на главную</a>
            </div>
            <div class="divider horizontal gray"></div>
        </div>
    </section>

@endsection()
