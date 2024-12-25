@if (!request()->routeIs('home'))
    <div {{ $attributes->merge(['class' => 'breadcrumbs']) }}>
        {{ Breadcrumbs::render() }}
    </div>
@endif
