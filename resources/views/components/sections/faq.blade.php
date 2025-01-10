<section {{ $attributes->merge(['class' => 'faq-section section']) }}>
    <div class="container">
        <div class="faq-section__wrap">
            <div class="faq-section__left">
                <div class="">
                    <h2 class="h2">
                        {{ $block->h1_title }}
                    </h2>

                    <p class="faq-section__text">
                        {!! $block->description !!}
                    </p>
                </div>

                <button class="btn faq-section__btn uppercase --accent" data-micromodal-trigger="modal-callback">Задать
                    вопрос</button>
            </div>

            <div class="faq-section__right">
                @foreach ($block->questions as $question)
                    <div class="accordion">
                        <div class="accordion__intro">
                            <h4 class="accordion__title">{!! $question->title !!}</h4>
                            <svg class="accordion__chevron" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" stroke="#1B1B1B" viewBox="0 0 24 24" fill="none">
                                <path d="M5 9.07031L12.0711 16.1414L19.1421 9.07031" />
                            </svg>
                        </div>
                        <div class="accordion__content">
                            <div class="accordion__content-inner">{!! $question->description !!}</div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</section>
