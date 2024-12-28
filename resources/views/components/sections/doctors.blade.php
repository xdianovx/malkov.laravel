<section class="section doctors-section">
    <div class="container">
        <div class="flex flex-col gap-4 items-start">
            <h2 class="h2">{{ $block->h1_title }}</h2>
            <p class="text-neutral-700">{!! $block->description !!}</p>
        </div>

        <div class="doctors-section__items">
            {{--  --}}
            @foreach ($data as $specialist)
                <x-doctor-card :slug="$specialist->slug" :title="$specialist->title" :image="$specialist->image" :profs="$specialist->specializations" :experience="$specialist->experience"
                    :operations="$specialist->operations" />
            @endforeach

        </div>

        <div class="mt-10 flex justify-center">
            <x-ui.button-arrow class="accent" text="Все специалисты" href="{{ route('specialists') }}" />
        </div>

    </div>
</section>
