@extends('layouts.main')

@section('content')
    <section class="section hero hero-services-page">
        <div class="container">
            <div class="flex mb-2 max-[1200px]:justify-center">
                {{ Breadcrumbs::render('services') }}
            </div>

            <div class="flex flex-col gap-4 pb-8 max-[1200px]:gap-2">
                <h1 class="h1 uppercase max-[1200px]:text-center">
                    {!! $page->title !!}
                </h1>

                <p class="text-neutral-600 max-[1200px]:text-center max-[768px]:text-[14px] max-[768px]:leading-[130%]">
                    {!! $page->description !!}</p>



                <button data-micromodal-trigger="modal-callback"
                    class="btn --accent mr-auto max-[1200px]:mx-auto max-[1200px]:mt-4 ">Бесплатная
                    консультация</button>
            </div>

            <div class="divider horizontal gray"></div>
        </div>
    </section>


    <section class="section section-services">
        <div class="container">

            <nav class="mt-10 grid grid-cols-1 gap-x-10 gap-y-10 max-[1200px]:grid-cols-1 max-[1200px]:gap-y-6">
                @foreach ($parent_services as $parent_service)
                    <div class="">
                        <a class="font-serif text-blue text-2xl max-[1200px]:text-xl "
                            href="{{ route('service-single', $parent_service->slug) }}">
                            {{ $parent_service->title }}
                        </a>

                        <ul class="mt-4 flex flex-col gap-2 max-[768px]:gap-1 max-[768px]:mt-3">

                            @foreach ($parent_service->prices as $price)
                                <div
                                    class="flex justify-between max-[550px]:flex-col max-[550px]:gap-2 max-[768px]:border max-[768px]:p-3 max-[768px]:rounded-[4px] ">
                                    <a class="shrink-0 hover:text-gold transition-colors duration-300 max-[768px]:leading-[120%]"
                                        href="{{ $price->link_service }}">
                                        {{ $price->title }}
                                    </a>

                                    <div
                                        class="border-b border-gray-300 border-dashed w-full mb-[6px] mx-4 max-[550px]:hidden">
                                    </div>


                                    <div class="shrink-0 grow max-[550px]:ml-auto  max-[768px]:text-gold">от
                                        {{ $price->price }} руб.</div>
                                </div>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </nav>
        </div>
    </section>

    <x-sections.callback :block="$block_callback_form" />
    <x-sections.faq :block="$block_questions" />

    <section class="section">

    </section>
@endsection()
