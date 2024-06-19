<section class="section doctors-section">
    <div class="container">
        <div class="doctors-section__top">
            <div class="">
                <h2 class="h2">Наши врачи <br>и специалисты</h2>
                <p class="doctors-section__top-descr"><a href="/">Познакомьтесь с врачом бесплатно</a><br>
                    и получите в подарок снимок и план лечения.</p>
            </div>

            <a href="{{ route('specialists') }}" class="btn doctors-section__top-btn --accent">Все специалисты</a>
        </div>

        <div class="doctors-section__items">
            {{--  --}}
            @foreach ($data as $specialist)
                <x-doctor-card :slug="$specialist->slug" :title="$specialist->title" :image="$specialist->image" :profs="$specialist->specializations" :expirience="$specialist->expirience"
                    :operations="$specialist->operations" />
            @endforeach

        </div>
    </div>
</section>
