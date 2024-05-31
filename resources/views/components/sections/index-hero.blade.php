@php
    $data = [
        [
            'id' => '1',
            'title' => 'Довольных клиента',
            'label' => '',
            'num' => '1 763',
        ],
        [
            'id' => '2',
            'title' => 'Средняя разница в цене',
            'label' => '',
            'num' => '32',
        ],
        [
            'id' => '3',
            'title' => 'Средняя разница в цене',
            'label' => '%',
            'num' => '30',
        ],
        [
            'id' => '4',
            'title' => 'Средний опыт специалистов',
            'label' => 'лет',
            'num' => '12',
        ],
    ];
@endphp

<section class="index-hero">
    <div class="container">
        <span class="index-hero__suptitle uppercase">с заботой о вашем здоровье</span>

        <div class="index-hero__wrap">
            <h1 class="h1-index  uppercase">Стоматологическая<br>клиника доктора<br>малькова</h1>
            <p class="index-hero__description">Миссия клиники - честно создавать безупречные улыбки и вдохновлять вас
                улыбаться чаще!</p>
        </div>
    </div>
</section>


<section class="numbers">
    <div class="container">
        <div class="numbers__wrap">
            @foreach ($data as $item)
                <div class="numbers__item">
                    <div class="numbers__item-num">{{ $item['num'] }}</div>
                    <p class="numbers__item-descr">{{ $item['title'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
