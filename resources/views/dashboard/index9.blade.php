@extends('layout.layout')
@php
    $title='Analytics';
    $subTitle = 'Analytics';
    $script = '<script>
                    // ===================== Revenue Chart Start =============================== 
                    function createChartTwo(chartId, color1, color2) {
                        var options = {
                            series: [{
                                name: "series1",
                                data: [6, 20, 15, 48, 28, 55, 28, 52, 25, 32, 15, 25]
                            }, {
                                name: "series2",
                                data: [0, 8, 4, 36, 16, 42, 16, 40, 12, 24, 4, 12]
                            }],
                            legend: {
                                show: false
                            },
                            chart: {
                                type: "area",
                                width: "100%",
                                height: 150,
                                toolbar: {
                                    show: false
                                },
                                padding: {
                                    left: 0,
                                    right: 0,
                                    top: 0,
                                    bottom: 0
                                }
                            },
                            dataLabels: {
                                enabled: false
                            },
                            stroke: {
                                curve: "smooth",
                                width: 3,
                                colors: [color1, color2], // Use two colors for the lines
                                lineCap: "round"
                            },
                            grid: {
                                show: true,
                                borderColor: "#D1D5DB",
                                strokeDashArray: 1,
                                position: "back",
                                xaxis: {
                                    lines: {
                                        show: false
                                    }
                                },
                                yaxis: {
                                    lines: {
                                        show: true
                                    }
                                },
                                row: {
                                    colors: undefined,
                                    opacity: 0.5
                                },
                                column: {
                                    colors: undefined,
                                    opacity: 0.5
                                },
                                padding: {
                                    top: -20,
                                    right: 0,
                                    bottom: -10,
                                    left: 0
                                },
                            },
                            fill: {
                                type: "gradient",
                                colors: [color1, color2], // Use two colors for the gradient
                                // gradient: {
                                //     shade: "light",
                                //     type: "vertical",
                                //     shadeIntensity: 0.5,
                                //     gradientToColors: [`${color1}`, `${color2}00`], // Bottom gradient colors with transparency
                                //     inverseColors: false,
                                //     opacityFrom: .6,
                                //     opacityTo: 0.3,
                                //     stops: [0, 100],
                                // },
                                gradient: {
                                    shade: "light",
                                    type: "vertical",
                                    shadeIntensity: 0.5,
                                    gradientToColors: [undefined, `${color2}00`], // Apply transparency to both colors
                                    inverseColors: false,
                                    opacityFrom: [0.4, 0.6], // Starting opacity for both colors
                                    opacityTo: [0.3, 0.3], // Ending opacity for both colors
                                    stops: [0, 100],
                                },
                            },
                            // markers: {
                            //     colors: [color1, color2], // Use two colors for the markers
                            //     strokeWidth: 3,
                            //     size: 0,
                            //     hover: {
                            //         size: 10
                            //     }
                            // },

                            markers: {
                                colors: [color1, color2],
                                strokeWidth: 2,
                                size: 0,
                                hover: {
                                    size: 8
                                }
                            },

                            xaxis: {
                                labels: {
                                    show: false
                                },
                                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                                tooltip: {
                                    enabled: false
                                },
                                labels: {
                                    formatter: function(value) {
                                        return value;
                                    },
                                    style: {
                                        fontSize: "14px"
                                    }
                                }
                            },
                            yaxis: {
                                labels: {
                                    formatter: function(value) {
                                        return "$" + value + "k";
                                    },
                                    style: {
                                        fontSize: "14px"
                                    }
                                },
                            },
                            tooltip: {
                                x: {
                                    format: "dd/MM/yy HH:mm"
                                }
                            }
                        };

                        var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
                        chart.render();
                    }

                    createChartTwo("revenueChart", "#CD20F9", "#6593FF");
                    // ===================== Revenue Chart End =============================== 

                    // ================================ Bar chart Start ================================ 
                    var options = {
                        series: [{
                            name: "Sales",
                            data: [{
                                x: "Sun",
                                y: 15,
                            }, {
                                x: "Mon",
                                y: 12,
                            }, {
                                x: "Tue",
                                y: 18,
                            }, {
                                x: "Wed",
                                y: 20,
                            }, {
                                x: "Thu",
                                y: 13,
                            }, {
                                x: "Fri",
                                y: 16,
                            }, {
                                x: "Sat",
                                y: 6,
                            }]
                        }],
                        chart: {
                            type: "bar",
                            height: 200,
                            toolbar: {
                                show: false
                            },
                        },
                        plotOptions: {
                            bar: {
                                borderRadius: 6,
                                horizontal: false,
                                columnWidth: 24,
                                columnWidth: "40%",
                                endingShape: "rounded",
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        fill: {
                            type: "gradient",
                            colors: ["#dae5ff"], // Set the starting color (top color) here
                            gradient: {
                                shade: "light", // Gradient shading type
                                type: "vertical", // Gradient direction (vertical)
                                shadeIntensity: 0.5, // Intensity of the gradient shading
                                gradientToColors: ["#dae5ff"], // Bottom gradient color (with transparency)
                                inverseColors: false, // Do not invert colors
                                opacityFrom: 1, // Starting opacity
                                opacityTo: 1, // Ending opacity
                                stops: [0, 100],
                            },
                        },
                        grid: {
                            show: false,
                            borderColor: "#D1D5DB",
                            strokeDashArray: 4, // Use a number for dashed style
                            position: "back",
                            padding: {
                                top: -10,
                                right: -10,
                                bottom: -10,
                                left: -10
                            }
                        },
                        xaxis: {
                            type: "category",
                            categories: ["2hr", "4hr", "6hr", "8hr", "10hr", "12hr", "14hr"]
                        },
                        yaxis: {
                            show: false,
                        },
                    };

                    var chart = new ApexCharts(document.querySelector("#barChart"), options);
                    chart.render();
                    // ================================ Bar chart End ================================ 

                    // ================================ J Vector Map Start ================================ 
                    $("#world-map").vectorMap({
                        map: "world_mill_en",
                        backgroundColor: "transparent",
                        borderColor: "#fff",
                        borderOpacity: 0.25,
                        borderWidth: 0,
                        color: "#000000",
                        regionStyle: {
                            initial: {
                                fill: "#D1D5DB"
                            }
                        },
                        markerStyle: {
                            initial: {
                                r: 5,
                                "fill": "#fff",
                                "fill-opacity": 1,
                                "stroke": "#000",
                                "stroke-width": 1,
                                "stroke-opacity": 0.4
                            },
                        },
                        markers: [{
                                latLng: [35.8617, 104.1954],
                                name: "China : 250"
                            },

                            {
                                latLng: [25.2744, 133.7751],
                                name: "AustrCalia : 250"
                            },

                            {
                                latLng: [36.77, -119.41],
                                name: "USA : 82%"
                            },

                            {
                                latLng: [55.37, -3.41],
                                name: "UK   : 250"
                            },

                            {
                                latLng: [25.20, 55.27],
                                name: "UAE : 250"
                            }
                        ],

                        series: {
                            regions: [{
                                values: {
                                    "US": "#487FFF ",
                                    "SA": "#487FFF",
                                    "AU": "#487FFF",
                                    "CN": "#487FFF",
                                    "GB": "#487FFF",
                                },
                                attribute: "fill"
                            }]
                        },
                        hoverOpacity: null,
                        normalizeFunction: "linear",
                        zoomOnScroll: false,
                        scaleColors: ["#000000", "#000000"],
                        selectedColor: "#000000",
                        selectedRegions: [],
                        enableZoom: false,
                        hoverColor: "#fff",
                    });
                    // ================================ J Vector Map End ================================ 


                    // ================================ Users Overview Donut chart Start ================================ 
                    var options = {
                        series: [500, 500, 500],
                        colors: ["#FF9F29", "#487FFF", "#45B369"],
                        labels: ["Active", "New", "Total"],
                        legend: {
                            show: false
                        },
                        chart: {
                            type: "donut",
                            height: 270,
                            sparkline: {
                                enabled: true // Remove whitespace
                            },
                            margin: {
                                top: 0,
                                right: 0,
                                bottom: 0,
                                left: 0
                            },
                            padding: {
                                top: 0,
                                right: 0,
                                bottom: 0,
                                left: 0
                            }
                        },
                        stroke: {
                            width: 0,
                        },
                        dataLabels: {
                            enabled: false
                        },
                        responsive: [{
                            breakpoint: 480,
                            options: {
                                chart: {
                                    width: 200
                                },
                                legend: {
                                    position: "bottom"
                                }
                            }
                        }],
                    };

                    var chart = new ApexCharts(document.querySelector("#userOverviewDonutChart"), options);
                    chart.render();
                    // ================================ Users Overview Donut chart End ================================ 
                    </script>';
@endphp

@section('content')

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-6">
            <div class="card border-0">
                <div class="card-body p-5">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                        <div class="col-span-12 md:col-span-4">
                            <div class="trail-bg h-full text-center flex flex-col justify-between items-center p-4 rounded-lg bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('assets/images/home-nine/trail-bg.png') }}');">
                                <h6 class="text-white text-xl">Upgrade Your Plan</h6>                                                                                                
                                <div class="">
                                    <p class="text-white mb-2">Your free trial expired in 7 days</p>
                                    <a href="#" class="btn py-2 rounded-[50rem] w-full bg-gradient-to-r from-[#CBFFF9] to-[#FFEEB1] text-sm justify-center dark:text-neutral-900 hover:scale-[1.06]">Upgrade Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-8">
                            <div class="grid grid-cols-1 sm:grid-cols-12 gap-4">
                                <div class="col-span-12 sm:col-span-6">
                                    <div class="rounded-lg h-full text-center p-5 bg-purple-light">
                                        <span class="w-[44px] h-[44px] rounded-lg inline-flex justify-center items-center text-xl mb-3 bg-purple-200 dark:bg-purple-600/20 border border-purple-400 text-purple-600">
                                            <i class="ri-price-tag-3-fill"></i>
                                        </span>
                                        <span class="text-neutral-700 block">Total Sales</span>
                                        <h6 class="mb-0 mt-1">$170,500.09</h6>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6">
                                    <div class="rounded-lg h-full text-center p-5 bg-success-100 dark:bg-success-600/10">
                                        <span class="w-[44px] h-[44px] rounded-lg inline-flex justify-center items-center text-xl mb-3 bg-success-200 dark:bg-success-600/20 border border-success-400 text-success-600">
                                            <i class="ri-shopping-cart-2-fill"></i>
                                        </span>
                                        <span class="text-neutral-700 block">Total Orders</span>
                                        <h6 class="mb-0 mt-1">1,500</h6>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6">
                                    <div class="rounded-lg h-full text-center p-5 bg-info-focus">
                                        <span class="w-[44px] h-[44px] rounded-lg inline-flex justify-center items-center text-xl mb-3 bg-info-200 dark:bg-info-600/20 border border-info-400 text-info-600">
                                            <i class="ri-group-fill"></i>
                                        </span>
                                        <span class="text-neutral-700 block">Visitor</span>
                                        <h6 class="mb-0 mt-1">12,300</h6>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6">
                                    <div class="rounded-lg h-full text-center p-5 bg-danger-100 dark:bg-danger-600/10">
                                        <span class="w-[44px] h-[44px] rounded-lg inline-flex justify-center items-center text-xl mb-3 bg-danger-200 dark:bg-danger-600/20 border border-danger-400 text-danger-600">
                                            <i class="ri-refund-2-line"></i>
                                        </span>
                                        <span class="text-neutral-700 block">Refunded</span>
                                        <h6 class="mb-0 mt-1">2756</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-6">
            <div class="card h-full border-0">
                <div class="card-body p-6">
                    <div class="flex items-center flex-wrap gap-2 justify-between">
                        <h6 class="font-bold text-lg mb-0">Revenue Statistic</h6>
                        <select class="form-select form-select-sm w-auto bg-base border text-neutral-600 dark:text-white dark:bg-neutral-800">
                            <option>Yearly</option>
                            <option>Monthly</option>
                            <option>Weekly</option>
                            <option>Today</option>
                        </select>
                    </div>
                    <ul class="flex flex-wrap items-center justify-center my-3 gap-6">
                        <li class="flex flex-col gap-1">
                            <div class="flex items-center gap-2">
                                <span class="w-[8px] h-[8px] rounded-[50rem] bg-primary-600"></span>
                                <span class="text-neutral-600 text-sm font-semibold">Profit </span>
                            </div>
                            <div class="flex items-center gap-2">
                                <h6 class="mb-0">$26,201</h6>
                                <span class="text-success-600 flex items-center gap-1 text-sm font-bolder">
                                    10%
                                    <i class="ri-arrow-up-s-fill flex"></i>
                                </span>
                            </div>
                        </li>
                        <li class="flex flex-col gap-1">
                            <div class="flex items-center gap-2">
                                <span class="w-[8px] h-[8px] rounded-[50rem] bg-purple-600"></span>
                                <span class="text-neutral-600 text-sm font-semibold">Loss </span>
                            </div>
                            <div class="flex items-center gap-2">
                                <h6 class="mb-0">$18,120</h6>
                                <span class="text-danger-600 flex items-center gap-1 text-sm font-bolder">
                                    10%
                                    <i class="ri-arrow-down-s-fill flex"></i>
                                </span>
                            </div>
                        </li>
                    </ul>
                    <div id="revenueChart" class="apexcharts-tooltip-style-1"></div>
                </div>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-6 2xl:col-span-4">
            <div class="card h-full border-0">
                <div class="card-body p-6">
                    <div class="flex items-center flex-wrap gap-2 justify-between">
                        <h6 class="mb-2 font-bold text-lg">Support Tracker</h6>
                        <select class="form-select form-select-sm w-auto bg-base border text-neutral-600 dark:text-white dark:bg-neutral-800">
                            <option>Yearly</option>
                            <option>Monthly</option>
                            <option>Weekly</option>
                            <option>Today</option>
                        </select>
                    </div>
                    <div class="mt-8 flex flex-wrap gap-6 items-center justify-between">
                        <div class="flex flex-col gap-6">
                            <div class="flex items-center gap-4">
                                <div class="w-[40px] h-[40px] rounded-[50%] flex justify-center items-center bg-primary-100 dark:bg-primary-600/20 shrink-0">
                                    <img src="{{ asset('assets/images/home-nine/ticket1.png') }}" alt="" class="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="text-base mb-0 font-bold">172</h6>
                                    <span class="text-sm text-neutral-600 font-normal">New Tickets </span>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-[40px] h-[40px] rounded-[50%] flex justify-center items-center bg-warning-100 dark:bg-warning-600/20 shrink-0">
                                    <img src="{{ asset('assets/images/home-nine/ticket2.png') }}" alt="" class="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="text-base mb-0 font-bold">172</h6>
                                    <span class="text-sm text-neutral-600 font-normal">Open Tickets</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-[40px] h-[40px] rounded-[50%] flex justify-center items-center bg-purple-100 dark:bg-purple-600/20 shrink-0">
                                    <img src="{{ asset('assets/images/home-nine/ticket3.png') }}" alt="" class="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="text-base mb-0 font-bold">172</h6>
                                    <span class="text-sm text-neutral-600 font-normal">Response Time</span>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div id="userOverviewDonutChart" class="apexcharts-tooltip-z-none"></div>
                            <div class="text-center max-w-[135px] max-h-[135px] bg-warning-focus rounded-[50%] p-4 aspect-ratio-1 flex flex-col justify-center items-center absolute start-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 aspect-[1] rtl:translate-x-1/2">
                                <h6 class="font-bold">120</h6>
                                <span class="text-neutral-600">Total Tickets</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-span-12 xl:col-span-6 2xl:col-span-4">
            <div class="card h-full border-0">
                <div class="card-body p-6">
                    <div class="flex items-center flex-wrap gap-2 justify-between">
                        <h6 class="font-bold text-lg mb-0">Average Daily Sales</h6>
                        <select class="form-select form-select-sm w-auto bg-base border text-neutral-600 dark:text-white dark:bg-neutral-800">
                            <option>Yearly</option>
                            <option>Monthly</option>
                            <option>Weekly</option>
                            <option>Today</option>
                        </select>
                    </div>
                    <h6 class="text-center my-5">$27,500.00</h6>
                    <div id="barChart" class="barChart"></div>
                </div>
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-4">
            <div class="card h-full border-0">
                <div class="card-body p-6">
                    <div class="flex items-center flex-wrap gap-2 justify-between">
                        <h6 class="mb-2 font-bold text-lg">Transactions</h6>
                        <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 hover-text-primary flex items-center gap-1">
                            View All
                            <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                        </a>
                    </div>

                    <div class="mt-8">
                        <div class="flex items-center justify-between gap-4 mb-6">
                            <div class="flex items-center gap-4">
                                <div class="w-[40px] h-[40px] rounded-[50%] flex justify-center items-center bg-success-200 dark:bg-success-600/20 shrink-0">
                                    <img src="{{ asset('assets/images/home-nine/payment1.png') }}" alt="" class="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="text-base mb-0 font-normal">Wallet</h6>
                                    <span class="text-sm text-neutral-600 font-normal">Payment</span>
                                </div>
                            </div>
                            <span class="text-neutral-600 text-base font-medium">+$6200</span>
                        </div>
                        <div class="flex items-center justify-between gap-4 mb-6">
                            <div class="flex items-center gap-4">
                                <div class="w-[40px] h-[40px] rounded-[50%] flex justify-center items-center bg-info-200 dark:bg-info-600/20 shrink-0">
                                    <img src="{{ asset('assets/images/home-nine/payment2.png') }}" alt="" class="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="text-base mb-0 font-normal">PayPal</h6>
                                    <span class="text-sm text-neutral-600 font-normal">Payment</span>
                                </div>
                            </div>
                            <span class="text-neutral-600 text-base font-medium">+$6200</span>
                        </div>
                        <div class="flex items-center justify-between gap-4 mb-6">
                            <div class="flex items-center gap-4">
                                <div class="w-[40px] h-[40px] rounded-[50%] flex justify-center items-center bg-warning-200 dark:bg-warning-600/20 shrink-0">
                                    <img src="{{ asset('assets/images/home-nine/payment3.png') }}" alt="" class="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="text-base mb-0 font-normal">Credit Card </h6>
                                    <span class="text-sm text-neutral-600 font-normal">Bill Payment</span>
                                </div>
                            </div>
                            <span class="text-neutral-600 text-base font-medium">-$6200</span>
                        </div>
                        <div class="flex items-center justify-between gap-4 mb-0">
                            <div class="flex items-center gap-4">
                                <div class="w-[40px] h-[40px] rounded-[50%] flex justify-center items-center bg-purple-200 dark:bg-purple-600/20 shrink-0">
                                    <img src="{{ asset('assets/images/home-nine/payment4.png') }}" alt="" class="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="text-base mb-0 font-normal">Bank</h6>
                                    <span class="text-sm text-neutral-600 font-normal">Bill Payment</span>
                                </div>
                            </div>
                            <span class="text-neutral-600 text-base font-medium">+$6200</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-6">
            <div class="card h-full border-0">
                <div class="card-body">
                    <div class="flex items-center flex-wrap gap-2 justify-between mb-5">
                        <h6 class="font-bold text-lg mb-0">Sales by Countries</h6>
                        <select class="form-select form-select-sm w-auto bg-base border text-neutral-600 dark:text-white dark:bg-neutral-800">
                            <option>This Month</option>
                            <option>This Week</option>
                            <option>This Year</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                        <div class="col-span-12 lg:col-span-6">
                            <div id="world-map" class="border border-neutral-300 dark:border-neutral-300/20 rounded-lg bg-neutral-50 dark:bg-neutral-600/20 h-full"></div>
                        </div>

                        <div class="col-span-12 lg:col-span-6">
                            <div class="h-full border border-neutral-300 dark:border-neutral-300/20 p-4 pe-0 rounded-lg">
                                <div class="max-h-[266px] overflow-y-auto scroll-sm pe-1">
                                    <div class="flex items-center justify-between gap-4 mb-2 pb-2">
                                        <div class="flex items-center w-full">
                                            <img src="{{ asset('assets/images/flags/flag1.png') }}" alt="" class="w-[40px] h-[40px] rounded-[50%] shrink-0 me-3">
                                            <div class="flex-grow-1">
                                                <h6 class="text-sm mb-0">USA</h6>
                                                <span class="text-xs text-neutral-600 font-medium">1,240 Users</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 w-full">
                                            <div class="w-full max-w-66 ms-auto">
                                                <div class="progress progress-sm rounded-[50rem]" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary-600 rounded-[50rem]" style="width: 80%;"></div>
                                                </div>
                                            </div>
                                            <span class="text-neutral-600 font-xs font-semibold">80%</span>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between gap-4 mb-2 pb-2">
                                        <div class="flex items-center w-full">
                                            <img src="{{ asset('assets/images/flags/flag2.png') }}" alt="" class="w-[40px] h-[40px] rounded-[50%] shrink-0 me-3">
                                            <div class="flex-grow-1">
                                                <h6 class="text-sm mb-0">Japan</h6>
                                                <span class="text-xs text-neutral-600 font-medium">1,240 Users</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 w-full">
                                            <div class="w-full max-w-66 ms-auto">
                                                <div class="progress progress-sm rounded-[50rem]" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-orange rounded-[50rem]" style="width: 60%;"></div>
                                                </div>
                                            </div>
                                            <span class="text-neutral-600 font-xs font-semibold">60%</span>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between gap-4 mb-2 pb-2">
                                        <div class="flex items-center w-full">
                                            <img src="{{ asset('assets/images/flags/flag3.png') }}" alt="" class="w-[40px] h-[40px] rounded-[50%] shrink-0 me-3">
                                            <div class="flex-grow-1">
                                                <h6 class="text-sm mb-0">France</h6>
                                                <span class="text-xs text-neutral-600 font-medium">1,240 Users</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 w-full">
                                            <div class="w-full max-w-66 ms-auto">
                                                <div class="progress progress-sm rounded-[50rem]" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-yellow rounded-[50rem]" style="width: 49%;"></div>
                                                </div>
                                            </div>
                                            <span class="text-neutral-600 font-xs font-semibold">49%</span>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between gap-4 mb-2 pb-2">
                                        <div class="flex items-center w-full">
                                            <img src="{{ asset('assets/images/flags/flag4.png') }}" alt="" class="w-[40px] h-[40px] rounded-[50%] shrink-0 me-3">
                                            <div class="flex-grow-1">
                                                <h6 class="text-sm mb-0">Germany</h6>
                                                <span class="text-xs text-neutral-600 font-medium">1,240 Users</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 w-full">
                                            <div class="w-full max-w-66 ms-auto">
                                                <div class="progress progress-sm rounded-[50rem]" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-success-main rounded-[50rem]" style="width: 100%;"></div>
                                                </div>
                                            </div>
                                            <span class="text-neutral-600 font-xs font-semibold">100%</span>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between gap-4 mb-2 pb-2">
                                        <div class="flex items-center w-full">
                                            <img src="{{ asset('assets/images/flags/flag5.png') }}" alt="" class="w-[40px] h-[40px] rounded-[50%] shrink-0 me-3">
                                            <div class="flex-grow-1">
                                                <h6 class="text-sm mb-0">South Korea</h6>
                                                <span class="text-xs text-neutral-600 font-medium">1,240 Users</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 w-full">
                                            <div class="w-full max-w-66 ms-auto">
                                                <div class="progress progress-sm rounded-[50rem]" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-info-main rounded-[50rem]" style="width: 30%;"></div>
                                                </div>
                                            </div>
                                            <span class="text-neutral-600 font-xs font-semibold">30%</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between gap-4">
                                        <div class="flex items-center w-full">
                                            <img src="{{ asset('assets/images/flags/flag1.png') }}" alt="" class="w-[40px] h-[40px] rounded-[50%] shrink-0 me-3">
                                            <div class="flex-grow-1">
                                                <h6 class="text-sm mb-0">USA</h6>
                                                <span class="text-xs text-neutral-600 font-medium">1,240 Users</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2 w-full">
                                            <div class="w-full max-w-66 ms-auto">
                                                <div class="progress progress-sm rounded-[50rem]" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary-600 rounded-[50rem]" style="width: 80%;"></div>
                                                </div>
                                            </div>
                                            <span class="text-neutral-600 font-xs font-semibold">80%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-6">
            <div class="card h-full border-0">
                <div class="card-header border-bottom-0 pb-3 flex items-center flex-wrap gap-2 justify-between">
                    <h6 class="font-bold text-lg mb-0">Source Visitors</h6>
                    <select class="form-select form-select-sm w-auto bg-base border text-neutral-600 dark:text-white dark:bg-neutral-800">
                        <option>Last Month</option>
                        <option>Last Week</option>
                        <option>Last Year</option>
                    </select>
                </div>
                <div class="card-body">
                    <div class="relative h-full min-h-[320px]">
                        <div class="md:absolute start-0 top-0 mt-5">
                            <h6 class="mb-1">524,756</h6>
                            <span class="text-neutral-600">Total Platform Visitors</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-12 gap-4 min-h-[inherit]">
                            <div class="col-span-12 md:col-span-3 sm:col-span-6 flex flex-col justify-end">
                                <div class="flex flex-col items-center p-6 pt-4 rounded-t-xl bg-gradient-to-b from-[#ffba4540] to-[#f4743540]" style="min-height: 50%;">
                                    <span class="w-[40px] h-[40px] flex shrink-0 justify-center items-center bg-warning-600 rounded-[50%] mb-3">
                                        <img src="{{ asset('assets/images/home-nine/source-icon1.png') }}" alt="">
                                    </span>
                                    <span class="text-neutral-600">TikTok</span>
                                    <h6 class="mb-0">50%</h6>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-3 sm:col-span-6 flex flex-col justify-end">
                                <div class="flex flex-col items-center p-6 pt-4 rounded-t-xl bg-gradient-to-b from-[#fc788a40] to-[#98168b40]" style="min-height: 66%;">
                                    <span class="w-[40px] h-[40px] flex shrink-0 justify-center items-center bg-purple-600 rounded-[50%] mb-3">
                                        <img src="{{ asset('assets/images/home-nine/source-icon2.png') }}" alt="">
                                    </span>
                                    <span class="text-neutral-600">Instagram</span>
                                    <h6 class="mb-0">66%</h6>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-3 sm:col-span-6 flex flex-col justify-end">
                                <div class="flex flex-col items-center p-6 pt-4 rounded-t-xl bg-gradient-to-b from-[#19cfef40] to-[#0d6ab840]" style="min-height: 82%;">
                                    <span class="w-[40px] h-[40px] flex shrink-0 justify-center items-center bg-primary-600 rounded-[50%] mb-3">
                                        <img src="{{ asset('assets/images/home-nine/source-icon3.png') }}" alt="">
                                    </span>
                                    <span class="text-neutral-600">Facebook</span>
                                    <h6 class="mb-0">82%</h6>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-3 sm:col-span-6 flex flex-col justify-end">
                                <div class="flex flex-col items-center p-6 pt-4 rounded-t-xl bg-gradient-to-b from-[#86dd6640] to-[#028c4b40]" style="min-height: 96%;">
                                    <span class="w-[40px] h-[40px] flex shrink-0 justify-center items-center bg-success-600 rounded-[50%] mb-3">
                                        <img src="{{ asset('assets/images/home-nine/source-icon4.png') }}" alt="">
                                    </span>
                                    <span class="text-neutral-600">Website</span>
                                    <h6 class="mb-0">96%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-4">
            <div class="card h-full border-0">
                <div class="card-body p-6">
                    <div class="flex align-items-start flex-col gap-2">
                        <h6 class="mb-2 font-bold text-lg">Monthly Campaign State</h6>
                        <span class="text-neutral-600">7.2k Social visitors</span>
                    </div>

                    <div class="flex flex-col gap-[22px] mt-8">
                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center gap-4">
                                <div class="w-[40px] h-[40px] rounded-[50%] flex justify-center items-center bg-purple-100 dark:bg-purple-600/20 shrink-0">
                                    <img src="{{ asset('assets/images/home-nine/socials1.png') }}" alt="" class="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="text-base mb-0 font-semibold">Email</h6>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-neutral-600 text-base font-medium">6,200</span>
                                <span class="text-success-600 text-base font-medium">0.3%</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center gap-4">
                                <div class="w-[40px] h-[40px] rounded-[50%] flex justify-center items-center bg-warning-100 dark:bg-warning-600/20 shrink-0">
                                    <img src="{{ asset('assets/images/home-nine/socials2.png') }}" alt="" class="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="text-base mb-0 font-semibold">Clicked</h6>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-neutral-600 text-base font-medium">Clicked</span>
                                <span class="text-danger-600 text-base font-medium">1.3%</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center gap-4">
                                <div class="w-[40px] h-[40px] rounded-[50%] flex justify-center items-center bg-info-100 dark:bg-info-600/20 shrink-0">
                                    <img src="{{ asset('assets/images/home-nine/socials3.png') }}" alt="" class="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="text-base mb-0 font-semibold">Subscribe</h6>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-neutral-600 text-base font-medium">5,175</span>
                                <span class="text-success-600 text-base font-medium">0.3%</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center gap-4">
                                <div class="w-[40px] h-[40px] rounded-[50%] flex justify-center items-center bg-success-100 dark:bg-success-600/20 shrink-0">
                                    <img src="{{ asset('assets/images/home-nine/socials4.png') }}" alt="" class="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="text-base mb-0 font-semibold">Complaints </h6>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-neutral-600 text-base font-medium">3,780</span>
                                <span class="text-success-600 text-base font-medium">0.3%</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center gap-4">
                                <div class="w-[40px] h-[40px] rounded-[50%] flex justify-center items-center bg-danger-100 dark:bg-danger-600/20 shrink-0">
                                    <img src="{{ asset('assets/images/home-nine/socials5.png') }}" alt="" class="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="text-base mb-0 font-semibold">Unsubscribe</h6>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-neutral-600 text-base font-medium">4,120</span>
                                <span class="text-success-600 text-base font-medium">0.3%</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <div class="flex items-center gap-4">
                                <div class="w-[40px] h-[40px] rounded-[50%] flex justify-center items-center bg-info-100 dark:bg-info-600/20 shrink-0">
                                    <img src="{{ asset('assets/images/home-nine/socials3.png') }}" alt="" class="">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="text-base mb-0 font-semibold">Subscribe</h6>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-neutral-600 text-base font-medium">5,175</span>
                                <span class="text-success-600 text-base font-medium">0.3%</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-8">
            <div class="card h-full border-0">
                <div class="card-header border-bottom bg-base py-4 px-6 flex items-center justify-between">
                    <h6 class="text-lg font-semibold mb-0">Recent Activity</h6>
                    <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 hover-text-primary flex items-center gap-1">
                        View All
                        <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                    </a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive scroll-sm">
                        <table class="table bordered-table mb-0 rounded-0 border-0">
                            <thead>
                                <tr>
                                    <th scope="col" class="bg-transparent rounded-0 !py-5">Customer</th>
                                    <th scope="col" class="bg-transparent rounded-0 !py-5">ID</th>
                                    <th scope="col" class="bg-transparent rounded-0 !py-5">Retained</th>
                                    <th scope="col" class="bg-transparent rounded-0 !py-5">Amount</th>
                                    <th scope="col" class="bg-transparent rounded-0 !py-5">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/user-grid/user-grid-img1.png') }}" alt="" class="w-[40px] h-[40px] rounded-[50%] shrink-0 me-3 overflow-hidden">
                                            <div class="flex-grow-1">
                                                <h6 class="text-base mb-0">Kristin Watson</h6>
                                                <span class="text-sm text-neutral-600 font-medium">ulfaha@mail.ru</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>#63254</td>
                                    <td>5 min ago</td>
                                    <td>$12,408.12</td>
                                    <td> <span class="bg-success-focus text-success-main dark:text-success-main px-2.5 py-1 rounded-lg font-medium text-sm">Member</span> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/user-grid/user-grid-img2.png') }}" alt="" class="w-[40px] h-[40px] rounded-[50%] shrink-0 me-3 overflow-hidden">
                                            <div class="flex-grow-1">
                                                <h6 class="text-base mb-0">Theresa Webb</h6>
                                                <span class="text-sm text-neutral-600 font-medium">joie@gmail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>#63254</td>
                                    <td>12 min ago</td>
                                    <td>$12,408.12</td>
                                    <td> <span class="bg-purple-100 dark:bg-purple-600/20 text-purple-600 dark:text-purple-600 px-2.5 py-1 rounded-lg font-medium text-sm">New Customer</span> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/user-grid/user-grid-img3.png') }}" alt="" class="w-[40px] h-[40px] rounded-[50%] shrink-0 me-3 overflow-hidden">
                                            <div class="flex-grow-1">
                                                <h6 class="text-base mb-0">Brooklyn Simmons</h6>
                                                <span class="text-sm text-neutral-600 font-medium">warn@mail.ru</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>#63254</td>
                                    <td>15 min ago</td>
                                    <td>$12,408.12</td>
                                    <td> <span class="bg-warning-focus text-warning-main dark:text-warning-main px-2.5 py-1 rounded-lg font-medium text-sm">Signed Up </span> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/user-grid/user-grid-img4.png') }}" alt="" class="w-[40px] h-[40px] rounded-[50%] shrink-0 me-3 overflow-hidden">
                                            <div class="flex-grow-1">
                                                <h6 class="text-base mb-0">Robert Fox</h6>
                                                <span class="text-sm text-neutral-600 font-medium">fellora@mail.ru</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>#63254</td>
                                    <td>17 min ago</td>
                                    <td>$12,408.12</td>
                                    <td> <span class="bg-success-focus text-success-main dark:text-success-main px-2.5 py-1 rounded-lg font-medium text-sm">Member</span> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/user-grid/user-grid-img5.png') }}" alt="" class="w-[40px] h-[40px] rounded-[50%] shrink-0 me-3 overflow-hidden">
                                            <div class="flex-grow-1">
                                                <h6 class="text-base mb-0">Jane Cooper</h6>
                                                <span class="text-sm text-neutral-600 font-medium">zitka@mail.ru</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>#63254</td>
                                    <td>25 min ago</td>
                                    <td>$12,408.12</td>
                                    <td> <span class="bg-warning-focus text-warning-main dark:text-warning-main px-2.5 py-1 rounded-lg font-medium text-sm">Signed Up </span> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
