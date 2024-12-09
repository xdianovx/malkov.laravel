<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="footer__top">
                <a href="/" class="footer__logo">
                    <img src="{{ asset('img/logo.png') }}" alt="Логотип Клиники Доктора Малькова">
                </a>

                <p class="footer__description">{{ $main_info->text_footer }}</p>

                <div class="footer__contacts">
                    <a class="footer__phone" href="tel:{{ $main_info->phone }}">{{ $main_info->phone }}</a>

                    <x-ui.socials class="footer__socials" />
                </div>
            </div>

            <nav class="footer__nav">
                <a href="{{ route('services') }}">Услуги</a>
                <a href="{{ route('stocks') }}">Акции</a>
                <a href="/pacientam">Пациентам</a>
                <a href="{{ route('specialists') }}">Врачи</a>
                <a href="{{ route('contacts') }}">Контакты</a>
                <a href="{{ route('about') }}">О клинике</a>
                <a href="{{ route('reviews') }}">Отзывы</a>
            </nav>

            <div class="footer__bot">
                <a href="{{ route('politika-konfidencialnosti') }}">Политика конфиденциальности</a>
                <a href="{{ route('pravila-predostavleniya-uslug') }}">Правила предоставления услуг мед.организации</a>
                <a href="http://kometa.team" class="footer__kometa" target="_blank">
                    <img src="{{ asset('img/icon/kometa.svg') }}" alt="" />
                </a>
            </div>
        </div>
    </div>
</footer>
