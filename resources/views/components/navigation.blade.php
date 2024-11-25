<section class="navigation">
    <div class="container">
        <div class="navigation-wrap">
            <div class="navigation-left">
                <nav class="nav-left">
                    <a href="{{ route('pacientam') }}">Пациентам</a>
                    <a href="{{ route('services') }}">Услуги</a>
                    <a href="{{ route('stocks') }}">Акции</a>
                    <a href="{{ route('specialists') }}">Врачи</a>
                    <a href="{{ route('blogs') }}">Блог</a>
                    <a href="{{ route('contacts') }}">Контакты</a>
                    <a href="{{ route('about') }}">О клинике</a>
                    <a href="{{ route('reviews') }}">Отзывы</a>

                </nav>

                <div class="divider horizontal"></div>

                <x-ui.socials />

                <a href="tel:{{ $main_info->phone }}">{{ $main_info->phone }}</a>

                <p>{{ $main_info->address }}</p>
                <div class="flex flex-col">{!! $main_info->working_days !!}</div>

                <button class="btn uppercase">Заказать звонок</button>

                <div class="nav-left-policy">
                    <a href="{{ route('politika-konfidencialnosti') }}">Политика конфиденциальности</a>
                    <a href="{{ route('pravila-predostavleniya-uslug') }}">Правила предоставления услуг мед.организации</a>
                </div>

            </div>
            <nav class="navigation-right">
                {{-- Item --}}
                @foreach ($parent_services as $parent_service)
                    <div class="nav-group">
                        <div class="nav-group__top">
                            <a
                                href="{{ route('service-single', $parent_service->slug) }}">{{ $parent_service->title }}</a>
                        </div>

                        <div class="divider horizontal"></div>

                        <ul class="nav-group__links">
                            @foreach ($parent_service->children as $children_service)
                                <li>
                                    <a
                                        href="{{ route('service-single', $children_service->slug) }}">{{ $children_service->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach

            </nav>
        </div>
    </div>
</section>
