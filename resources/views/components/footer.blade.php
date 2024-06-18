<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="footer__top">
                <a href="/" class="footer__logo">
                    <img src="{{ asset('img/logo.png') }}" alt="Логотип Клиники Доктора Малькова">
                </a>

                <p class="footer__description">
                    Являясь всего лишь частью общей картины, стремящиеся вытеснить традиционное
                    производство,нанотехнологии набирают
                </p>

                <div class="footer__contacts">
                    <a class="footer__phone" href="tel:+7 (926) 076 78 17">+7 (926) 076 78 17</a>

                    <x-ui.socials class="footer__socials" />
                </div>
            </div>

            <nav class="footer__nav">
                <a href="{{ route('services') }}">Услуги</a>
                <a href="{{ route('stocks') }}">Акции</a>
                <a href="/pacientam">Пациентам</a>
                <a href="/vrachi">Врачи</a>
                <a href="/kontakty">Контакты</a>
                <a href="/o-klinike">О клинике</a>
                <a href="/otzyvi">Отзывы</a>
            </nav>

            <div class="footer__bot">
                <a href="">Политика конфиденциальности</a>
                <a href="">Правила предоставления услуг мед.организации</a>
                <a href="" class="footer__kometa" target="_blank">
                    <img src="{{ asset('img/icon/kometa.svg') }}" alt="" />
                </a>
            </div>
        </div>
    </div>
</footer>
