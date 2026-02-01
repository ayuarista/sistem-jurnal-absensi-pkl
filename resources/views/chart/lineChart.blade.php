@extends('layout.layout')
@php
    $title='Line Chart';
    $subTitle = 'Components / Line Chart';
    $script = ' <script src="' . asset('assets/js/lineChartPageChart.js') . '"></script>';
@endphp

@section('content')

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Default Line Chart</h6>
            </div>
            <div class="card-body p-6">
                <div id="defaultLineChart" class="apexcharts-tooltip-style-1"></div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Zoomable Chart</h6>
            </div>
            <div class="card-body p-6">
                <div id="zoomAbleLineChart"></div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Line Chart with Data Labels</h6>
            </div>
            <div class="card-body p-6">
                <div id="lineDataLabel"></div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Line Chart Animation</h6>
            </div>
            <div class="card-body p-6">
                <div id="doubleLineChart"></div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Stepline Charts</h6>
            </div>
            <div class="card-body p-6">
                <div id="stepLineChart"></div>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Gradient Charts</h6>
            </div>
            <div class="card-body p-6">
                <div id="gradientLineChart"></div>
            </div>
        </div>
    </div>

@endsection
