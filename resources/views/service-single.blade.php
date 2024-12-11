@extends('layouts.main')

@section('content')
    <section class="section hero service-single-hero">
        <div class="container">
            <div class="service-single-hero__wrap">
                <h1 class="h1 uppercase">{!! $service->title !!}</h1>
                <div class="service-single-hero__content">{!! $service->description_header !!}</div>
                <x-ui.button-arrow text="Получить консультацию" data-micromodal-trigger="modal-callback"
                    class="service-single-hero__btn --accent" />
                <div class="divider horizontal gray"></div>
            </div>
    </section>

    <section class="services-page-section">
        <div class="container">
            <div class="content">
                {!! $service->description !!}
            </div>
        </div>
    </section>

    <section class="section section-services">
      <div class="container">

          <nav class="mt-10 grid grid-cols-2 gap-x-10 gap-y-10 max-[1200px]:grid-cols-1">
                  <ul class="mt-4 flex flex-col gap-2">
                    @forelse($service->prices as $price)
                          <div class="flex justify-between max-[550px]:flex-col max-[550px]:gap-2">
                              <a class="shrink-0 hover:text-gold transition-colors duration-300"
                                  href="{{ $price->link_service }}">
                                  {{ $price->title }}
                              </a>

                              <div
                                  class="border-b border-gray-300 border-dashed w-full mb-[6px] mx-4 max-[550px]:hidden">
                              </div>


                              <div class="shrink-0 grow max-[550px]:ml-auto">от {{ $price->price }} руб.</div>
                          </div>
                    @empty
                        <p>{{ __('admin.notification_no_entries') }}</p>
                    @endforelse
                  </ul>
                </nav>
              </div>
          </section>


    {{--    <section class="section price-section"> --}}
    {{--        <div class="container"> --}}
    {{--            <div class="price-section__wrap"> --}}
    {{--                --}}{{-- Item --}}
    {{--                @forelse($service->prices as $item) --}}
    {{--                    <div class="price-section__item"> --}}

    {{--                        <div class="price-section__item_top"> --}}
    {{--                            <h3>{!! $item->title !!}</h3> --}}
    {{--                            <div>{!! $item->price !!}</div> --}}
    {{--                        </div> --}}

    {{--                        <div class="price-section__item_bottom"> --}}
    {{--                            <p>{!! $item->description !!}</p> --}}

    {{--                            @isset($item->link_service) --}}
    {{--                                <a href="{{ $item->link_service }}">Подробнее</a> --}}
    {{--                            @endisset --}}
    {{--                        </div> --}}
    {{--                    </div> --}}
    {{--                @endforeach --}}
    {{--            </div> --}}
    {{--        </div> --}}
    {{--    </section> --}}





    <x-sections.services :block="$block_services" :data="$services" />
    <x-sections.callback :block="$block_callback_form" />
    <x-sections.faq :block="$block_questions" />

    <section class="section"></section>
@endsection()
