@extends('layout.layout')
@php
    $title='Progress Bar';
    $subTitle = 'Components / Progress Bar';
    $script = '<script>
    // Floating progress bar
    $(".progress-wrapper").each(function() {
        var percentage = $(this).attr("data-perc");
        var floatingLabel = $(this).find(".floating-label");

        // Set CSS variable to be used in keyframes
        floatingLabel.css("--left-percentage", percentage);

        // Trigger reflow to restart animation
        floatingLabel[0].offsetWidth; // Force reflow
        floatingLabel.css("animation-name", "none");
        floatingLabel.css("left", percentage); // Ensure final position is correct
        floatingLabel.css("animation-name", "animateFloatingLabel");
    });

    // Semi Circle progress bar
    $(".progressBar").each(function() {
        var $bar = $(this).find(".circleBar");
        var $val = $(this).find(".barNumber");
        var perc = parseInt($val.text(), 10);

        $({
            p: 0
        }).animate({
            p: perc
        }, {
            duration: 3000,
            easing: "swing",
            step: function(p) {
                $bar.css({
                    transform: "rotate(" + (45 + (p * 1.8)) + "deg)", // 100%=180° so: ° = % * 1.8
                    // 45 is to add the needed rotation to have the green borders at the bottom
                });
                $val.text(p | 0);
            }
        });
    });
    </script>';

@endphp

@section('content')

    <div class="grid sm:grid-cols-12 gap-6">
        <div class="col-span-12 sm:col-span-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Default Progress</h6>
                </div>
                <div class="card-body p-6">

                    <div class="flex items-center flex-col gap-6">
                        <div class="w-full bg-primary-600/10 rounded-full h-2">
                            <div class="bg-primary-600 h-2 rounded-full dark:bg-primary-600" style="width: 20%"></div>
                        </div>

                        <div class="w-full bg-primary-600/10 rounded-full h-2">
                            <div class="bg-primary-600 h-2 rounded-full dark:bg-primary-600" style="width: 35%"></div>
                        </div>

                        <div class="w-full bg-primary-600/10 rounded-full h-2">
                            <div class="bg-primary-600 h-2 rounded-full dark:bg-primary-600" style="width: 50%"></div>
                        </div>

                        <div class="w-full bg-primary-600/10 rounded-full h-2">
                            <div class="bg-primary-600 h-2 rounded-full dark:bg-primary-600" style="width: 75%"></div>
                        </div>

                        <div class="w-full bg-primary-600/10 rounded-full h-2">
                            <div class="bg-primary-600 h-2 rounded-full dark:bg-primary-600" style="width: 90%"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Progress with multiple color</h6>
                </div>
                <div class="card-body p-6">

                    <div class="flex items-center flex-col gap-6">
                        <div class="w-full bg-primary-600/10 rounded-full h-2">
                            <div class="bg-primary-600 h-2 rounded-full dark:bg-primary-600" style="width: 20%"></div>
                        </div>

                        <div class="w-full bg-success-600/10 rounded-full h-2">
                            <div class="bg-success-600 h-2 rounded-full dark:bg-success-600" style="width: 35%"></div>
                        </div>

                        <div class="w-full bg-info-600/10 rounded-full h-2">
                            <div class="bg-info-600 h-2 rounded-full dark:bg-info-600" style="width: 50%"></div>
                        </div>

                        <div class="w-full bg-warning-600/10 rounded-full h-2">
                            <div class="bg-warning-600 h-2 rounded-full dark:bg-warning-600" style="width: 75%"></div>
                        </div>

                        <div class="w-full bg-danger-600/10 rounded-full h-2">
                            <div class="bg-danger-600 h-2 rounded-full dark:bg-danger-600" style="width: 90%"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Progress with right label</h6>
                </div>
                <div class="card-body p-6">

                    <div class="flex flex-col gap-6">
                        <div class="flex items-center gap-4 w-full">
                            <div class="w-full bg-primary-600/10 rounded-full h-2">
                                <div class="bg-primary-600 h-2 rounded-full dark:bg-primary-600" style="width: 20%"></div>
                            </div>
                            <span class="text-neutral-600 text-xs font-semibold line-height-1">20%</span>
                        </div>

                        <div class="flex items-center gap-4 w-full">
                            <div class="w-full bg-primary-600/10 rounded-full h-2">
                                <div class="bg-primary-600 h-2 rounded-full dark:bg-primary-600" style="width: 35%"></div>
                            </div>
                            <span class="text-neutral-600 text-xs font-semibold line-height-1">35%</span>
                        </div>

                        <div class="flex items-center gap-4 w-full">
                            <div class="w-full bg-primary-600/10 rounded-full h-2">
                                <div class="bg-primary-600 h-2 rounded-full dark:bg-primary-600" style="width: 50%"></div>
                            </div>
                            <span class="text-neutral-600 text-xs font-semibold line-height-1">50%</span>
                        </div>

                        <div class="flex items-center gap-4 w-full">
                            <div class="w-full bg-primary-600/10 rounded-full h-2">
                                <div class="bg-primary-600 h-2 rounded-full dark:bg-primary-600" style="width: 75%"></div>
                            </div>
                            <span class="text-neutral-600 text-xs font-semibold line-height-1">75%</span>
                        </div>

                        <div class="flex items-center gap-4 w-full">
                            <div class="w-full bg-primary-600/10 rounded-full h-2">
                                <div class="bg-primary-600 h-2 rounded-full dark:bg-primary-600" style="width: 90%"></div>
                            </div>
                            <span class="text-neutral-600 text-xs font-semibold line-height-1">90%</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Progress with multiple color</h6>
                </div>
                <div class="card-body p-6">

                    <div class="flex items-center flex-col gap-6 position-relative">
                        <div class="w-full bg-primary-600/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-primary-600 h-2 rounded-full dark:bg-primary-600 animate-progress transition-all ease-out duration-1000" style="width: 20%"></div>
                        </div>

                        <div class="w-full bg-success-600/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-success-600 h-2 rounded-full dark:bg-success-600 animate-progress transition-all ease-out duration-1000" style="width: 35%"></div>
                        </div>

                        <div class="w-full bg-info-600/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-info-600 h-2 rounded-full dark:bg-info-600 animate-progress transition-all ease-out duration-1000" style="width: 50%"></div>
                        </div>

                        <div class="w-full bg-warning-600/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-warning-600 h-2 rounded-full dark:bg-warning-600 animate-progress transition-all ease-out duration-1000" style="width: 75%"></div>
                        </div>

                        <div class="w-full bg-danger-600/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-danger-600 h-2 rounded-full dark:bg-danger-600 animate-progress transition-all ease-out duration-1000" style="width: 90%"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6">
            <div class="card p-0 overflow-hidden relative rounded-xl border-0">
                <div class="card-header py-4 px-6 bg-white dark:bg-neutral-700 border-b border-neutral-200 dark:border-neutral-600">
                    <h6 class="text-lg mb-0">Gradient Progress</h6>
                </div>
                <div class="card-body p-6">

                    <div class="flex items-center flex-col gap-6 position-relative">
                        <div class="w-full bg-gradient-to-l to-primary-600/50 from-primary-600/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-gradient-to-l to-primary-700 from-primary-500 h-2 rounded-full dark:bg-primary-600 animate-progress transition-all ease-out duration-1000" style="width: 20%"></div>
                        </div>

                        <div class="w-full bg-gradient-to-l to-success-600/50 from-success-600/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-gradient-to-l to-success-700 from-success-500 h-2 rounded-full dark:bg-success-600 animate-progress transition-all ease-out duration-1000" style="width: 35%"></div>
                        </div>

                        <div class="w-full bg-gradient-to-l to-info-600/50 from-info-600/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-gradient-to-l to-info-700 from-info-500 h-2 rounded-full dark:bg-info-600 animate-progress transition-all ease-out duration-1000" style="width: 50%"></div>
                        </div>

                        <div class="w-full bg-gradient-to-l to-warning-600/50 from-warning-600/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-gradient-to-l to-warning-700 from-warning-500 h-2 rounded-full dark:bg-warning-600 animate-progress transition-all ease-out duration-1000" style="width: 75%"></div>
                        </div>

                        <div class="w-full bg-gradient-to-l to-danger-600/50 from-danger-600/10 rounded-full h-2 overflow-hidden">
                            <div class="bg-gradient-to-l to-danger-700 from-danger-500 h-2 rounded-full dark:bg-danger-600 animate-progress transition-all ease-out duration-1000" style="width: 90%"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
