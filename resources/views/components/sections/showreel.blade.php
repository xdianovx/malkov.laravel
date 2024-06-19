@isset($data->file)
    <section class="section showreel-section">
        <div class="showreel">
            <video controls playsinline autoplay muted loop controls="false">
                <source src="{{ $data->file }}" type="video/mp4">
            </video>

            {{-- <img src="{{ $data->file }}" alt=""> --}}
        </div>
    </section>
@endisset
