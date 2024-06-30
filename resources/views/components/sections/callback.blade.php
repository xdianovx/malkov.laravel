<section {{ $attributes->merge(['class' => 'callback-section section']) }}>
    <div class="container">
        <div class="callback-wrap">
            <div class="callback__left">
                <h2 class="h2">
                    {{ $block->h1_title }}
                </h2>

                <p class="callback-text">
                    {!! $block->description !!}
                </p>
            </div>
            <div class="callback__right">
                <form class="callback-form">
                    <input type="text" class="input" placeholder="Имя">
                    <input type="tel" class="input" placeholder="+7 (___) ___ - __ - __">
                    <button class="callback-form-submit uppercase btn --accent" type="submit">Отправить</button>

                    <p class="form-policy">
                        Нажимая кнопку “Записаться”, вы соглашаетесь с нашей <a href="/policy">политикой
                            конфиденциальности</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <div class="partical-l partical"></div>
    <div class="partical-r partical"></div>
</section>
