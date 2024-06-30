<section class="navigation">
    <div class="container">
        <div class="navigation-wrap">
            <div class="navigation-left">
                <nav class="nav-left">
                    <a href="/patsiientam">Пациентам</a>
                    <a href="{{ route('services') }}">Услуги</a>
                    <a href="{{ route('stocks') }}">Акции</a>
                    <a href="{{ route('specialists') }}">Врачи</a>
                    <a href="{{ route('blogs') }}">Блог</a>
                    <a href="{{ route('contacts') }}">Контакты</a>
                    <a href="{{ route('about') }}">О клинике</a>
                    <a href="/otzyvy">Отзывы</a>

                </nav>

                <div class="divider horizontal"></div>

                <x-ui.socials />

                <a href="tel:+7 (926) 076-78-18">+7 (926) 076-78-18</a>

                <p>Москва, поселение Московский, Саларьевская улица, 16к3</p>
                <div class="flex flex-col">
                    <p>ПН–ВС:</p>
                    <p>10:00 до 21:00</p>
                </div>

                <button class="btn uppercase">Заказать звонок</button>

                <div class="nav-left-policy">
                    <a href="">Политика конфиденциальности</a>
                    <a href="">Правила предоставления услуг мед.организации</a>
                </div>

            </div>
            <nav class="navigation-right">
                {{-- Item --}}
                @foreach ($parent_services as $parent_service)
                    <div class="nav-group">
                        <div class="nav-group__top">
                            <a href="{{ route('service-single', $parent_service->slug) }}">{{$parent_service->title}}</a>
                        </div>

                        <div class="divider horizontal"></div>

                        <ul class="nav-group__links">
                            @foreach ($parent_service->children as $children_service)
                            <li>
                                <a href="{{ route('service-single', $children_service->slug) }}">{{$children_service->title}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach

            </nav>
        </div>
    </div>
</section>
