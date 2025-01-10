@forelse($stocks as $item)
<div class="stock-item">
    <h3 class="stock-item__title">{!! $item->title !!}</h3>
    <p class="stock-item__text">{!! $item->content !!}</p>

    <div class="stock-item__bottom">
        <p>Действует до: {{ date('d.m.Y', strtotime($item->due_time))}}</p>
        <a href="{{ route('stock-single', $item->slug) }}">Подробнее</a>
    </div>
</div>
@empty
<p>{{ __('admin.notification_no_entries') }}</p>
@endforelse
