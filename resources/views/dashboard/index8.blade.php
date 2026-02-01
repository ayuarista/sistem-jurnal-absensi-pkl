@extends('layout.layout')
@php
    $title='Dashboard';
    $subTitle = 'Medical';
    $script = '<script>
                    // ===================== Average Enrollment Rate Start =============================== 
                    function createChartTwo(chartId, color1, color2) {
                        var options = {
                            series: [{
                                name: "series1",
                                data: [48, 35, 55, 32, 48, 30, 55, 50, 57]
                            }, {
                                name: "series2",
                                data: [12, 20, 15, 26, 22, 60, 40, 48, 25]
                            }],
                            legend: {
                                show: false
                            },
                            chart: {
                                type: "area",
                                width: "100%",
                                height: 270,
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
                            markers: {
                                colors: [color1, color2], // Use two colors for the markers
                                strokeWidth: 3,
                                size: 0,
                                hover: {
                                    size: 10
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

                    createChartTwo("enrollmentChart", "#487FFF", "#FF9F29");
                    // ===================== Average Enrollment Rate End =============================== 


                    // ================================ User Activities Donut chart End ================================ 
                    var options = {
                        series: [30, 25],
                        colors: ["#FF9F29", "#45B369"],
                        labels: ["Female", "Male"],
                        legend: {
                            show: false
                        },
                        chart: {
                            type: "donut",
                            height: 260,
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

                    var chart = new ApexCharts(document.querySelector("#statisticsDonutChart"), options);
                    chart.render();
                    // ================================ User Activities Donut chart End ================================ 


                    // ================================ Client Payment Status chart End ================================ 
                    var options = {
                        series: [{
                            name: "Net Profit",
                            data: [44, 100, 40, 56, 30, 58, 50]
                        }, {
                            name: "Free Cash",
                            data: [60, 120, 60, 90, 50, 95, 90]
                        }],
                        colors: ["#45B369", "#FF9F29"],
                        labels: ["Active", "New", "Total"],

                        legend: {
                            show: false
                        },
                        chart: {
                            type: "bar",
                            height: 260,
                            toolbar: {
                                show: false
                            },
                        },
                        grid: {
                            show: true,
                            borderColor: "#D1D5DB",
                            strokeDashArray: 4, // Use a number for dashed style
                            position: "back",
                        },
                        plotOptions: {
                            bar: {
                                borderRadius: 4,
                                columnWidth: 8,
                            },
                        },
                        dataLabels: {
                            enabled: false
                        },
                        states: {
                            hover: {
                                filter: {
                                    type: "none"
                                }
                            }
                        },
                        stroke: {
                            show: true,
                            width: 0,
                            colors: ["transparent"]
                        },
                        xaxis: {
                            categories: ["Mon", "Tues", "Wed", "Thurs", "Fri", "Sat", "Sun"],
                        },
                        fill: {
                            opacity: 1,
                            width: 18,
                        },
                    };

                    var chart = new ApexCharts(document.querySelector("#paymentStatusChart"), options);
                    chart.render();
                    // ================================ Client Payment Status chart End ================================ 

                    // ================================= Multiple Radial Bar Chart Start =============================
                    var options = {
                        series: [80, 40, 10],
                        chart: {
                            height: 300,
                            type: "radialBar",
                        },
                        colors: ["#3D7FF9", "#ff9f29", "#16a34a"],
                        stroke: {
                            lineCap: "round",
                        },
                        plotOptions: {
                            radialBar: {
                                hollow: {
                                    size: "10%", // Adjust this value to control the bar width
                                },
                                dataLabels: {
                                    name: {
                                        fontSize: "16px",
                                    },
                                    value: {
                                        fontSize: "16px",
                                    },
                                    // total: {
                                    //     show: true,
                                    //     formatter: function (w) {
                                    //         return "82%"
                                    //     }
                                    // }
                                },
                                track: {
                                    margin: 20, // Space between the bars
                                }
                            }
                        },
                        labels: ["Cardiology", "Psychiatry", "Pediatrics"],
                    };

                    var chart = new ApexCharts(document.querySelector("#radialMultipleBar"), options);
                    chart.render();
                    // ================================= Multiple Radial Bar Chart End =============================
                    </script>';
@endphp

@section('content')

        <div class="grid grid-cols-1 3xl:grid-cols-12 gap-6">
            <div class="col-span-12 3xl:col-span-9">
                <div class="grid grid-cols-1 sm:grid-cols-12 gap-6">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                        <div class="card border-0 p-4 shadow-[0_0.25rem_1.875rem_rgba(46,45,116,0.05)] rounded-lg h-full bg-gradient-to-l from-cyan-600/10 to-bg-white">
                            <div class="card-body p-0">
                                <div class="flex flex-wrap items-center justify-between gap-1 mb-2">
                                    <div class="flex items-center gap-2">
                                        <span class="w-12 h-12 bg-cyan-600/25 text-cyan-600 dark:text-cyan-600 flex-shrink-0 flex justify-center items-center rounded-full h6 mb-0">
                                            <i class="ri-group-fill"></i>
                                        </span>
                                        <div>
                                            <h6 class="font-semibold mb-0.5">650</h6>
                                            <span class="font-medium text-gray-600 text-sm">Doctors</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm mb-0 text-gray-600"><span class="text-cyan-600 dark:text-cyan-600">4</span> Doctors joined this week</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                        <div class="card border-0 p-4 shadow-[0_0.25rem_1.875rem_rgba(46,45,116,0.05)] rounded-lg h-full bg-gradient-to-l from-lilac-600/10 to-bg-white">
                            <div class="card-body p-0">
                                <div class="flex flex-wrap items-center justify-between gap-1 mb-2">
                                    <div class="flex items-center gap-2">
                                        <span class="w-12 h-12 bg-lilac-600/25 text-lilac-600 dark:text-lilac-600 flex-shrink-0 flex justify-center items-center rounded-full h6 mb-0">
                                            <i class="ri-award-fill"></i>
                                        </span>
                                        <div>
                                            <h6 class="font-semibold mb-0.5">570</h6>
                                            <span class="font-medium text-gray-600 text-sm">Staffs</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm mb-0 text-gray-600"><span class="text-lilac-600 dark:text-lilac-600">8</span> Staffs on vacation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                        <div class="card border-0 p-4 shadow-[0_0.25rem_1.875rem_rgba(46,45,116,0.05)] rounded-lg h-full bg-gradient-to-l from-primary-600/10 to-bg-white">
                            <div class="card-body p-0">
                                <div class="flex flex-wrap items-center justify-between gap-1 mb-2">
                                    <div class="flex items-center gap-2">
                                        <span class="w-12 h-12 bg-primary-600/25 text-primary-600 dark:text-primary-600 flex-shrink-0 flex justify-center items-center rounded-full h6 mb-0">
                                            <i class="ri-group-fill"></i>
                                        </span>
                                        <div>
                                            <h6 class="font-semibold mb-0.5">15,750</h6>
                                            <span class="font-medium text-gray-600 text-sm">Patients</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm mb-0 text-gray-600"><span class="text-primary-600 dark:text-primary-600">170</span> New patients admitted</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-4 2xl:col-span-3">
                        <div class="card border-0 p-4 shadow-[0_0.25rem_1.875rem_rgba(46,45,116,0.05)] rounded-lg h-full bg-gradient-to-l from-success-600/10 to-bg-white">
                            <div class="card-body p-0">
                                <div class="flex flex-wrap items-center justify-between gap-1 mb-2">
                                    <div class="flex items-center gap-2">
                                        <span class="w-12 h-12 bg-success-600/25 text-success-600 dark:text-success-600 flex-shrink-0 flex justify-center items-center rounded-full h6 mb-0">
                                            <i class="ri-wallet-3-fill"></i>
                                        </span>
                                        <div>
                                            <h6 class="font-semibold mb-0.5">$42,400</h6>
                                            <span class="font-medium text-gray-600 text-sm">Pharmacies </span>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-sm mb-0 text-gray-600"><span class="text-success-600 dark:text-success-600">60,000 </span> Medicine on reserve</p>
                            </div>
                        </div>
                    </div>

                    <!-- Earning Statistic -->
                    <div class="col-span-12 2xl:col-span-12">
                        <div class="card border-0 h-full">
                            <div class="card-header">
                                <div class="flex items-center gap-2 justify-between">
                                    <h6 class="mb-0 font-bold text-lg">Earning Statistic</h6>
                                    <select class="form-select form-select-sm w-auto bg-base border border-neutral-600/25 text-gray-600 dark:text-white dark:bg-gray-800 !pe-7">
                                        <option>This Month</option>
                                        <option>This Week</option>
                                        <option>This Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body p-1.5">
                                <ul class="flex flex-wrap items-center justify-center my-3 gap-3">
                                    <li class="flex items-center gap-2">
                                        <span class="w-3 h-2 rounded-[50rem] bg-primary-600"></span>
                                        <span class="text-gray-600 text-sm font-semibold">
                                            New Patient:
                                            <span class="text-gray-900 font-bold">50</span>
                                        </span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="w-3 h-2 rounded-[50rem] bg-warning-600"></span>
                                        <span class="text-gray-600 text-sm font-semibold">
                                            Old Patient:
                                            <span class="text-gray-900 font-bold"> 500</span>
                                        </span>
                                    </li>
                                </ul>
                                <div id="enrollmentChart" class="apexcharts-tooltip-style-1 apexcharts-yaxis"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Earning Statistic -->
                    <!-- Patient Visited by Department -->
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card border-0 h-full">
                            <div class="card-header">
                                <div class="flex items-center gap-2 justify-between">
                                    <h6 class="mb-0 font-bold text-lg">Patient Visited by Department</h6>
                                </div>
                            </div>
                            <div class="card-body p-1.5 flex items-center gap-4">
                                <div id="radialMultipleBar"></div>
                                <ul class="flex flex-col gap-3">
                                    <li>
                                        <span class="text-lg">Cardiology: <span class="text-primary-600 dark:text-primary-600 font-semibold">80%</span> </span>
                                    </li>
                                    <li>
                                        <span class="text-lg">Psychiatry: <span class="text-warning-600 dark:text-warning-600 font-semibold">40%</span> </span>
                                    </li>
                                    <li>
                                        <span class="text-lg">Pediatrics: <span class="text-success-600 dark:text-success-600 font-semibold">10%</span> </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Patient Visited by Department -->
                    <!-- Patient Visit By Gender -->
                    <div class="col-span-12 lg:col-span-6">
                        <div class="card border-0 h-full">
                            <div class="card-header">
                                <div class="flex items-center gap-2 justify-between">
                                    <h6 class="mb-0 font-bold text-lg">Patient Visit By Gender</h6>
                                    <select class="form-select form-select-sm w-auto bg-base border border-neutral-600/25 text-gray-600 dark:text-white dark:bg-gray-800 !pe-7">
                                        <option>This Month</option>
                                        <option>This Week</option>
                                        <option>This Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body p-1.5">
                                <ul class="flex flex-wrap items-center justify-center my-3 gap-3">
                                    <li class="flex items-center gap-2">
                                        <span class="w-3 h-2 rounded-[50rem] bg-warning-600"></span>
                                        <span class="text-gray-600 text-sm font-semibold">
                                            Male:
                                            <span class="text-gray-900 font-bold">200</span>
                                        </span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="w-3 h-2 rounded-[50rem] bg-success-600"></span>
                                        <span class="text-gray-600 text-sm font-semibold">
                                            Female:
                                            <span class="text-gray-900 font-bold"> 450</span>
                                        </span>
                                    </li>
                                </ul>
                                <div id="paymentStatusChart" class="margin-16-minus y-value-left"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Patient Visit By Gender -->
                    <!-- Top performance Start -->
                    <div class="col-span-12 2xl:col-span-4">
                        <div class="card border-0">
                            <div class="card-header border-bottom">
                                <div class="flex items-center gap-2 justify-between">
                                    <h6 class="mb-0 font-bold text-lg">Doctors List</h6>
                                    <a href="javascript:void(0)" class="flex-shrink-0 text-primary-600 dark:text-primary-600 hover-text-primary flex items-center gap-1">
                                        View All
                                        <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-col gap-6">
                                    <div class="flex items-center justify-between gap-3">
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/home-eight/doctor-img1.png') }}" alt="" class="w-10 h-10 rounded-full flex-shrink-0 me-3 overflow-hidden">
                                            <div class="flex-grow-1">
                                                <h6 class="text-base mb-0">Dr. Davis</h6>
                                                <span class="text-sm text-gray-600 font-medium">Cardiology</span>
                                            </div>
                                        </div>
                                        <span class="bg-success-focus text-success-main dark:text-success-main px-2.5 py-1 rounded-lg font-medium text-sm">Available</span>
                                    </div>
                                    <div class="flex items-center justify-between gap-3">
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/home-eight/doctor-img2.png') }}" alt="" class="w-10 h-10 rounded-full flex-shrink-0 me-3 overflow-hidden">
                                            <div class="flex-grow-1">
                                                <h6 class="text-base mb-0">Dr. Riead</h6>
                                                <span class="text-sm text-gray-600 font-medium">Orthopedics</span>
                                            </div>
                                        </div>
                                        <span class="bg-success-focus text-success-main dark:text-success-main px-2.5 py-1 rounded-lg font-medium text-sm">Available</span>
                                    </div>
                                    <div class="flex items-center justify-between gap-3">
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/home-eight/doctor-img3.png') }}" alt="" class="w-10 h-10 rounded-full flex-shrink-0 me-3 overflow-hidden">
                                            <div class="flex-grow-1">
                                                <h6 class="text-base mb-0">Albert Flores</h6>
                                                <span class="text-sm text-gray-600 font-medium">Ophthalmology</span>
                                            </div>
                                        </div>
                                        <span class="bg-danger-focus text-danger-main dark:text-danger-main px-2.5 py-1 rounded-lg font-medium text-sm">Not Available</span>
                                    </div>
                                    <div class="flex items-center justify-between gap-3">
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/home-eight/doctor-img4.png') }}" alt="" class="w-10 h-10 rounded-full flex-shrink-0 me-3 overflow-hidden">
                                            <div class="flex-grow-1">
                                                <h6 class="text-base mb-0">Dr. Smith</h6>
                                                <span class="text-sm text-gray-600 font-medium">Cardiology</span>
                                            </div>
                                        </div>
                                        <span class="bg-success-focus text-success-main dark:text-success-main px-2.5 py-1 rounded-lg font-medium text-sm">Available</span>
                                    </div>
                                    <div class="flex items-center justify-between gap-3">
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/home-eight/doctor-img6.png') }}" alt="" class="w-10 h-10 rounded-full flex-shrink-0 me-3 overflow-hidden">
                                            <div class="flex-grow-1">
                                                <h6 class="text-base mb-0">Dr. Johnson</h6>
                                                <span class="text-sm text-gray-600 font-medium">Cardiology</span>
                                            </div>
                                        </div>
                                        <span class="bg-danger-focus text-danger-main dark:text-danger-main px-2.5 py-1 rounded-lg font-medium text-sm">Not Available</span>
                                    </div>
                                    <div class="flex items-center justify-between gap-3">
                                        <div class="flex items-center">
                                            <img src="{{ asset('assets/images/home-eight/doctor-img5.png') }}" alt="" class="w-10 h-10 rounded-full flex-shrink-0 me-3 overflow-hidden">
                                            <div class="flex-grow-1">
                                                <h6 class="text-base mb-0">Dr. Martinez</h6>
                                                <span class="text-sm text-gray-600 font-medium">Cardiology</span>
                                            </div>
                                        </div>
                                        <span class="bg-success-focus text-success-main dark:text-success-main px-2.5 py-1 rounded-lg font-medium text-sm">Available</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Top performance End -->

                    <div class="col-span-12 2xl:col-span-8">
                        <div class="card border-0 h-full">
                            <div class="card-header border-bottom bg-base py-4 px-6 flex items-center justify-between">
                                <h6 class="text-lg font-semibold mb-0">Latest Appointments</h6>
                                <a href="javascript:void(0)" class="flex-shrink-0 text-primary-600 dark:text-primary-600 hover-text-primary flex items-center gap-1">
                                    View All
                                    <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                                </a>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive scroll-sm">
                                    <table class="table bordered-table mb-0 rounded-0 border-0">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="bg-transparent rounded-0">Name</th>
                                                <th scope="col" class="bg-transparent rounded-0">ID</th>
                                                <th scope="col" class="bg-transparent rounded-0">Date</th>
                                                <th scope="col" class="bg-transparent rounded-0">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>General Checkup</td>
                                                <td>#63254</td>
                                                <td>27 Mar 2025</td>
                                                <td><span class="bg-success-focus text-success-main dark:text-success-main px-2.5 py-1 rounded-lg font-medium text-sm">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td>Blood test results</td>
                                                <td>3.053 ETH</td>
                                                <td>2h 5m 40s</td>
                                                <td><span class="bg-danger-focus text-danger-main dark:text-danger-main px-2.5 py-1 rounded-lg font-medium text-sm">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td>Heart Checkup</td>
                                                <td>3.053 ETH</td>
                                                <td>2h 5m 40s</td>
                                                <td><span class="bg-success-focus text-success-main dark:text-success-main px-2.5 py-1 rounded-lg font-medium text-sm">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td>Vaccination</td>
                                                <td>3.053 ETH</td>
                                                <td>2h 5m 40s</td>
                                                <td><span class="bg-danger-focus text-danger-main dark:text-danger-main px-2.5 py-1 rounded-lg font-medium text-sm">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td>Dental Cleanup</td>
                                                <td>3.053 ETH</td>
                                                <td>2h 5m 40s</td>
                                                <td><span class="bg-success-focus text-success-main dark:text-success-main px-2.5 py-1 rounded-lg font-medium text-sm">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td>Follow up Appointment</td>
                                                <td>3.053 ETH</td>
                                                <td>2h 5m 40s</td>
                                                <td><span class="bg-danger-focus text-danger-main dark:text-danger-main px-2.5 py-1 rounded-lg font-medium text-sm">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td>General Checkup</td>
                                                <td>#63254</td>
                                                <td>27 Mar 2025</td>
                                                <td><span class="bg-success-focus text-success-main dark:text-success-main px-2.5 py-1 rounded-lg font-medium text-sm">Completed</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Latest Performance End -->
                </div>
            </div>

            <div class="col-span-12 3xl:col-span-3">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                    <div class="col-span-12 2xl:col-span-6 md:col-span-6 3xl:col-span-12">
                        <div class="card border-0 h-full rounded-lg">
                            <div class="card-header border-bottom flex items-center flex-wrap gap-2 justify-between">
                                <h6 class="mb-0 font-bold text-lg">Total Income</h6>
                                <div class="">
                                    <select class="form-select form-select-sm w-auto bg-base border border-neutral-600/25 text-gray-600 dark:text-white dark:bg-gray-800 !pe-7">
                                        <option>This Month</option>
                                        <option>This Week</option>
                                        <option>This Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body p-1.5">
                                <div class="relative">
                                    <div id="statisticsDonutChart" class="mt-9 flex-grow-1 apexcharts-tooltip-z-none title-style circle-none"></div>
                                    <div class="text-center absolute top-1/2 start-1/2 -translate-y-1/2 -translate-x-1/2">
                                        <span class="text-gray-600">Income</span>
                                        <h6 class="">$28,500</h6>
                                    </div>
                                </div>

                                <ul class="grid grid-cols-2 gap-6 mt-3">
                                    <li class="flex flex-col items-center">
                                        <div class="flex items-center gap-2">
                                            <span class="w-3 h-2 rounded-[50rem] bg-warning-600"></span>
                                            <span class="text-gray-600 text-sm font-normal">Net Income</span>
                                        </div>
                                        <h6 class="text-gray-900 font-bold mb-0">$50,000</h6>
                                    </li>
                                    <li class="flex flex-col items-center">
                                        <div class="flex items-center gap-2">
                                            <span class="w-3 h-2 rounded-[50rem] bg-success-600"></span>
                                            <span class="text-gray-600 text-sm font-normal">Commission </span>
                                        </div>
                                        <h6 class="text-gray-900 font-bold mb-0">$20,000</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 2xl:col-span-6 md:col-span-6 3xl:col-span-12">
                        <div class="card border-0">
                            <div class="card-header">
                                <div class="flex items-center gap-2 justify-between">
                                    <h6 class="mb-0 font-bold text-lg">Available Treatments</h6>
                                    <a href="javascript:void(0)" class="flex-shrink-0 text-primary-600 dark:text-primary-600 hover-text-primary flex items-center gap-1">
                                        View All
                                        <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="flex items-center justify-between gap-3 mb-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full flex-shrink-0 bg-info-600/10 flex justify-center items-center">
                                            <img src="{{ asset('assets/images/home-eight/treatment-icon1.png') }}" alt="" class="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="text-base mb-0 font-normal">Psychiatry</h6>
                                            <span class="text-sm text-gray-600 font-normal">57 Doctors</span>
                                        </div>
                                    </div>
                                    <span class="text-gray-600">08:45 AM</span>
                                </div>
                                <div class="flex items-center justify-between gap-3 mb-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full flex-shrink-0 bg-success-600/10 flex justify-center items-center">
                                            <img src="{{ asset('assets/images/home-eight/treatment-icon2.png') }}" alt="" class="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="text-base mb-0 font-normal">Orthopedic</h6>
                                            <span class="text-sm text-gray-600 font-normal">85 Doctors</span>
                                        </div>
                                    </div>
                                    <span class="text-gray-600">08:45 AM</span>
                                </div>
                                <div class="flex items-center justify-between gap-3 mb-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full flex-shrink-0 bg-lilac-600/10 flex justify-center items-center">
                                            <img src="{{ asset('assets/images/home-eight/treatment-icon3.png') }}" alt="" class="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="text-base mb-0 font-normal">Cardiology</h6>
                                            <span class="text-sm text-gray-600 font-normal">60 Doctors</span>
                                        </div>
                                    </div>
                                    <span class="text-gray-600">08:45 AM</span>
                                </div>
                                <div class="flex items-center justify-between gap-3 mb-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full flex-shrink-0 bg-warning-600/10 flex justify-center items-center">
                                            <img src="{{ asset('assets/images/home-eight/treatment-icon4.png') }}" alt="" class="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="text-base mb-0 font-normal">Pediatrics</h6>
                                            <span class="text-sm text-gray-600 font-normal">120 Doctors</span>
                                        </div>
                                    </div>
                                    <span class="text-gray-600">08:45 AM</span>
                                </div>
                                <div class="flex items-center justify-between gap-3 mb-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full flex-shrink-0 bg-danger-600/10 flex justify-center items-center">
                                            <img src="{{ asset('assets/images/home-eight/treatment-icon5.png') }}" alt="" class="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="text-base mb-0 font-normal">Neurology</h6>
                                            <span class="text-sm text-gray-600 font-normal">25 Doctors</span>
                                        </div>
                                    </div>
                                    <span class="text-gray-600">08:45 AM</span>
                                </div>
                                <div class="flex items-center justify-between gap-3 mb-0">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-full flex-shrink-0 bg-primary-600/10 flex justify-center items-center">
                                            <img src="{{ asset('assets/images/home-eight/treatment-icon6.png') }}" alt="" class="">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="text-base mb-0 font-normal">Gastroenterology</h6>
                                            <span class="text-sm text-gray-600 font-normal">95 Doctors</span>
                                        </div>
                                    </div>
                                    <span class="text-gray-600">08:45 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 2xl:col-span-6 md:col-span-6 3xl:col-span-12">
                        <div class="card border-0">
                            <div class="card-header">
                                <div class="flex items-center gap-2 justify-between">
                                    <h6 class="mb-0 font-bold text-lg line-clamp-1">Health Reports Document</h6>
                                    <a href="javascript:void(0)" class="flex-shrink-0 text-primary-600 dark:text-primary-600 hover-text-primary flex items-center gap-1">
                                        View All
                                        <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="flex flex-col gap-4">
                                    <div class="flex items-center justify-between gap-3">
                                        <div class="flex items-center gap-3">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('assets/images/home-eight/icon-pdf.png') }}" alt="" class="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="text-base mb-0 font-normal">Checkup Result.pdf</h6>
                                                <span class="text-xs text-gray-600 font-normal">2.5mb</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <button type="button" class="w-8 h-8 d-inline-flex justify-center items-center bg-danger-600/10 hover:bg-danger-600 hover:text-white duration-300 active:scale-75 text-danger-600 bg-hover-danger-600 text-hover-white text-base rounded-full">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </button>
                                            <button type="button" class="w-8 h-8 d-inline-flex justify-center items-center bg-success-600/10 hover:bg-success-600 active:scale-75 hover:text-white duration-300 text-success-600 bg-hover-success-600 text-hover-white text-base rounded-full">
                                                <i class="ri-download-2-fill"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between gap-3">
                                        <div class="flex items-center gap-3">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('assets/images/home-eight/icon-text.png') }}" alt="" class="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="text-base mb-0 font-normal">Checkup Result.doc</h6>
                                                <span class="text-xs text-gray-600 font-normal">2mb</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <button type="button" class="w-8 h-8 d-inline-flex justify-center items-center bg-danger-600/10 hover:bg-danger-600 hover:text-white duration-300 active:scale-75 text-danger-600 bg-hover-danger-600 text-hover-white text-base rounded-full">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </button>
                                            <button type="button" class="w-8 h-8 d-inline-flex justify-center items-center bg-success-600/10 hover:bg-success-600 active:scale-75 hover:text-white duration-300 text-success-600 bg-hover-success-600 text-hover-white text-base rounded-full">
                                                <i class="ri-download-2-fill"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between gap-3">
                                        <div class="flex items-center gap-3">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('assets/images/home-eight/icon-pdf.png') }}" alt="" class="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="text-base mb-0 font-normal">Prescription.pdf</h6>
                                                <span class="text-xs text-gray-600 font-normal">3mb</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <button type="button" class="w-8 h-8 d-inline-flex justify-center items-center bg-danger-600/10 hover:bg-danger-600 hover:text-white duration-300 active:scale-75 text-danger-600 bg-hover-danger-600 text-hover-white text-base rounded-full">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </button>
                                            <button type="button" class="w-8 h-8 d-inline-flex justify-center items-center bg-success-600/10 hover:bg-success-600 active:scale-75 hover:text-white duration-300 text-success-600 bg-hover-success-600 text-hover-white text-base rounded-full">
                                                <i class="ri-download-2-fill"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between gap-3">
                                        <div class="flex items-center gap-3">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('assets/images/home-eight/icon-text.png') }}" alt="" class="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="text-base mb-0 font-normal">Xray Result.doc</h6>
                                                <span class="text-xs text-gray-600 font-normal">3mb</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <button type="button" class="w-8 h-8 d-inline-flex justify-center items-center bg-danger-600/10 hover:bg-danger-600 hover:text-white duration-300 active:scale-75 text-danger-600 bg-hover-danger-600 text-hover-white text-base rounded-full">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </button>
                                            <button type="button" class="w-8 h-8 d-inline-flex justify-center items-center bg-success-600/10 hover:bg-success-600 active:scale-75 hover:text-white duration-300 text-success-600 bg-hover-success-600 text-hover-white text-base rounded-full">
                                                <i class="ri-download-2-fill"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between gap-3">
                                        <div class="flex items-center gap-3">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('assets/images/home-eight/icon-pdf.png') }}" alt="" class="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="text-base mb-0 font-normal">Glucose Level Report.pdf</h6>
                                                <span class="text-xs text-gray-600 font-normal">3mb</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <button type="button" class="w-8 h-8 d-inline-flex justify-center items-center bg-danger-600/10 hover:bg-danger-600 hover:text-white duration-300 active:scale-75 text-danger-600 bg-hover-danger-600 text-hover-white text-base rounded-full">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </button>
                                            <button type="button" class="w-8 h-8 d-inline-flex justify-center items-center bg-success-600/10 hover:bg-success-600 active:scale-75 hover:text-white duration-300 text-success-600 bg-hover-success-600 text-hover-white text-base rounded-full">
                                                <i class="ri-download-2-fill"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between gap-3">
                                        <div class="flex items-center gap-3">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('assets/images/home-eight/icon-text.png') }}" alt="" class="">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="text-base mb-0 font-normal">Checkup Result.doc</h6>
                                                <span class="text-xs text-gray-600 font-normal">2mb</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <button type="button" class="w-8 h-8 d-inline-flex justify-center items-center bg-danger-600/10 hover:bg-danger-600 hover:text-white duration-300 active:scale-75 text-danger-600 bg-hover-danger-600 text-hover-white text-base rounded-full">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </button>
                                            <button type="button" class="w-8 h-8 d-inline-flex justify-center items-center bg-success-600/10 hover:bg-success-600 active:scale-75 hover:text-white duration-300 text-success-600 bg-hover-success-600 text-hover-white text-base rounded-full">
                                                <i class="ri-download-2-fill"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
