@isset($data->file)
    <section class="section showreel-section">
        <div class="showreel">
            @if (str_contains($data->file, '.mp4') || str_contains($data->file, '.mov') || str_contains($data->file, '.ogg'))
                <video controls playsinline autoplay muted loop controls="false">
                    <source src="{{ $data->file }}" type="video/mp4">
                </video>
            @else
                <img src="{{ asset('storage') . '/' . $data->file }}" alt="logo">
            @endif
        </div>
    </section>
@endisset
