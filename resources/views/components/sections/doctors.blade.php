<section class="section doctors-section">
    <div class="container">
        <div class="doctors-section__top">
            <div class="">
                <h2 class="h2">{{ $block->h1_title }}</h2>
                {!! $block->description !!}
            </div>

            <a href="{{ route('specialists') }}" class="btn doctors-section__top-btn --accent">Все специалисты</a>
        </div>

        <div class="doctors-section__items">
            {{--  --}}
            @foreach ($data as $specialist)
                <x-doctor-card :slug="$specialist->slug" :title="$specialist->title" :image="$specialist->image" :profs="$specialist->specializations" :experience="$specialist->experience"
                    :operations="$specialist->operations" />
            @endforeach

        </div>
    </div>
</section>
