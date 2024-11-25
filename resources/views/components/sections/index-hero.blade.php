<section class="index-hero">
    <div class="container">
        <span class="index-hero__suptitle uppercase">с заботой о вашем здоровье</span>

        <div class="index-hero__wrap">
            <h1 class="h1-index  uppercase">{!! $item->title !!}</h1>
            <p class="index-hero__description">{!! $item->description !!}</p>
        </div>
    </div>
</section>


<section class="numbers">
    <div class="container">
        <div class="numbers__wrap">
            @foreach ($item->home_page_nums as $item_num)
                <div class="numbers__item">
                    <div class="numbers__item-num">{{ $item_num->num }}<span>{{ $item_num->label }}</span></div>
                    <p class="numbers__item-descr">{{ $item_num->title }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
