@extends('layout.layout')
@php
    $title='Carousel';
    $subTitle = 'Components / Carousel';
    $script='<script src="' . asset('assets/js/defaultCarousel.js') . '"></script>';   

@endphp

@section('content')

    <div class="grid grid-cols-1 sm:grid-cols-12 gap-6">
        <div class="col-span-12 sm:col-span-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Default Carousel</h6>
                </div>
                <div class="card-body p-0 default-carousel">
                    <div class="before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full">
                        <img src="{{ asset('assets/images/carousel/carousel-img1.png') }}" alt="" class="w-full h-full object-fit-cover">
                        <div class="absolute start-1/2 -translate-x-1/2 bottom-0 pb-6 z-[2] text-center w-full max-w-[440px]">
                            <h5 class="card-title text-white text-lg mb-1.5">Carousel Slide One</h5>
                            <p class="card-text text-white mx-auto text-sm">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class="before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full">
                        <img src="{{ asset('assets/images/carousel/carousel-img2.png') }}" alt="" class="w-full h-full object-fit-cover">
                        <div class="absolute start-1/2 -translate-x-1/2 bottom-0 pb-6 z-[2] text-center w-full max-w-[440px]">
                            <h5 class="card-title text-white text-lg mb-1.5">Carousel Slide Two</h5>
                            <p class="card-text text-white mx-auto text-sm">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class="before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full">
                        <img src="{{ asset('assets/images/carousel/carousel-img3.png') }}" alt="" class="w-full h-full object-fit-cover">
                        <div class="absolute start-1/2 -translate-x-1/2 bottom-0 pb-6 z-[2] text-center w-full max-w-[440px]">
                            <h5 class="card-title text-white text-lg mb-1.5">Carousel Slide Three</h5>
                            <p class="card-text text-white mx-auto text-sm">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Carousel With Arrows</h6>
                </div>
                <div class="card-body p-0 arrow-carousel">
                    <div class="before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full">
                        <img src="{{ asset('assets/images/carousel/carousel-img2.png') }}" alt="" class="w-full h-full object-fit-cover">
                        <div class="absolute start-1/2 -translate-x-1/2 bottom-0 pb-6 z-[2] text-center w-full max-w-[440px]">
                            <h5 class="card-title text-white text-lg mb-1.5">Carousel Slide One</h5>
                            <p class="card-text text-white mx-auto text-sm">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class="before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full">
                        <img src="{{ asset('assets/images/carousel/carousel-img4.png') }}" alt="" class="w-full h-full object-fit-cover">
                        <div class="absolute start-1/2 -translate-x-1/2 bottom-0 pb-6 z-[2] text-center w-full max-w-[440px]">
                            <h5 class="card-title text-white text-lg mb-1.5">Carousel Slide Two</h5>
                            <p class="card-text text-white mx-auto text-sm">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class="before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full">
                        <img src="{{ asset('assets/images/carousel/carousel-img3.png') }}" alt="" class="w-full h-full object-fit-cover">
                        <div class="absolute start-1/2 -translate-x-1/2 bottom-0 pb-6 z-[2] text-center w-full max-w-[440px]">
                            <h5 class="card-title text-white text-lg mb-1.5">Carousel Slide Three</h5>
                            <p class="card-text text-white mx-auto text-sm">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Carousel With Pagination</h6>
                </div>
                <div class="card-body p-0 pagination-carousel slick-dots-style-two absolute-dots">
                    <div class="before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full">
                        <img src="{{ asset('assets/images/carousel/carousel-img3.png') }}" alt="" class="w-full h-full object-fit-cover">
                        <div class="absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]">
                            <h5 class="card-title text-white text-lg mb-1.5">Carousel Slide One</h5>
                            <p class="card-text text-white mx-auto text-sm">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class="before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full">
                        <img src="{{ asset('assets/images/carousel/carousel-img4.png') }}" alt="" class="w-full h-full object-fit-cover">
                        <div class="absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]">
                            <h5 class="card-title text-white text-lg mb-1.5">Carousel Slide Two</h5>
                            <p class="card-text text-white mx-auto text-sm">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class="before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full">
                        <img src="{{ asset('assets/images/carousel/carousel-img1.png') }}" alt="" class="w-full h-full object-fit-cover">
                        <div class="absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]">
                            <h5 class="card-title text-white text-lg mb-1.5">Carousel Slide Three</h5>
                            <p class="card-text text-white mx-auto text-sm">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                    <div class="before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full">
                        <img src="{{ asset('assets/images/carousel/carousel-img2.png') }}" alt="" class="w-full h-full object-fit-cover">
                        <div class="absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]">
                            <h5 class="card-title text-white text-lg mb-1.5">Carousel Slide Four</h5>
                            <p class="card-text text-white mx-auto text-sm">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Carousel with progress</h6>
                </div>
                <div class="card-body p-0 relative">
                    <div class="p-0 progress-carousel dots-style-circle dots-positioned">
                        <div class="before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full relative">
                            <img src="{{ asset('assets/images/carousel/carousel-img4.png') }}" alt="" class="w-full h-full object-fit-cover">
                            <div class="absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]">
                                <h5 class="card-title text-white text-lg mb-1.5">Carousel Slide One</h5>
                                <p class="card-text text-white mx-auto text-sm">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                            </div>
                        </div>
                        <div class="before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full">
                            <img src="{{ asset('assets/images/carousel/carousel-img2.png') }}" alt="" class="w-full h-full object-fit-cover">
                            <div class="absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]">
                                <h5 class="card-title text-white text-lg mb-1.5">Carousel Slide Two</h5>
                                <p class="card-text text-white mx-auto text-sm">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                            </div>
                        </div>
                        <div class="before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full">
                            <img src="{{ asset('assets/images/carousel/carousel-img3.png') }}" alt="" class="w-full h-full object-fit-cover">
                            <div class="absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]">
                                <h5 class="card-title text-white text-lg mb-1.5">Carousel Slide Three</h5>
                                <p class="card-text text-white mx-auto text-sm">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                            </div>
                        </div>
                        <div class="before:absolute before:w-full before:h-full before:bg-gradient-to-t from-neutral-900/75 before:z-[1] z-1 relative bottom-0 start-0 h-full">
                            <img src="{{ asset('assets/images/carousel/carousel-img1.png') }}" alt="" class="w-full h-full object-fit-cover">
                            <div class="absolute start-1/2 -translate-x-1/2 bottom-0 pb-[64px] z-[2] text-center w-full max-w-[440px]">
                                <h5 class="card-title text-white text-lg mb-1.5">Carousel Slide Four</h5>
                                <p class="card-text text-white mx-auto text-sm">User Interface (UI) and User Experience (UX) Design play key roles in the experience users have when </p>
                            </div>
                        </div>
                    </div>
                    <div class="slider-progress">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Multiple slides</h6>
                </div>
                <div class="card-body py-6 px-4 multiple-carousel slick-dots-style-two">
                    <div class="mx-2 mb-6">
                        <img src="{{ asset('assets/images/carousel/mutiple-carousel-img1.png') }}" class="w-full h-full object-fit-cover" alt="">
                    </div>
                    <div class="mx-2 mb-6">
                        <img src="{{ asset('assets/images/carousel/mutiple-carousel-img2.png') }}" class="w-full h-full object-fit-cover" alt="">
                    </div>
                    <div class="mx-2 mb-6">
                        <img src="{{ asset('assets/images/carousel/mutiple-carousel-img3.png') }}" class="w-full h-full object-fit-cover" alt="">
                    </div>
                    <div class="mx-2 mb-6">
                        <img src="{{ asset('assets/images/carousel/mutiple-carousel-img4.png') }}" class="w-full h-full object-fit-cover" alt="">
                    </div>
                    <div class="mx-2 mb-6">
                        <img src="{{ asset('assets/images/carousel/mutiple-carousel-img2.png') }}" class="w-full h-full object-fit-cover" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
