    @forelse ($blogs as $item)
        <x-blog-item :data="$item"/>
    @empty
        <p>{{ __('admin.notification_no_entries') }}</p>
    @endforelse
