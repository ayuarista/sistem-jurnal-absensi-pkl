@extends('layout.layout')
@php
    $title='Star Ratings';
    $subTitle = 'Components / Star Ratings';
@endphp

@section('content')

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Default Star Ratings</h6>
            </div>
            <div class="card-body p-6">
                <ul class="flex flex-wrap items-center gap-3">
                    <li class="text-warning-600 text-[32px] line-height-1"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                    <li class="text-warning-600 text-[32px] line-height-1"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                    <li class="text-warning-600 text-[32px] line-height-1"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                    <li class="text-warning-600 text-[32px] line-height-1"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                    <li class="text-warning-600 text-[32px] line-height-1"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                </ul>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Half Star</h6>
            </div>
            <div class="card-body p-6">
                <ul class="flex flex-wrap items-center gap-3">
                    <li class="text-warning-600 text-[32px] line-height-1"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                    <li class="text-warning-600 text-[32px] line-height-1"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                    <li class="text-warning-600 text-[32px] line-height-1"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                    <li class="text-warning-600 text-[32px] line-height-1"><iconify-icon icon="mdi:star-outline"></iconify-icon></li>
                    <li class="text-warning-600 text-[32px] line-height-1"><iconify-icon icon="mdi:star-outline"></iconify-icon></li>
                </ul>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Multi Color</h6>
            </div>
            <div class="card-body p-6">
                <ul class="flex flex-wrap items-center gap-3">
                    <li class="text-[32px] line-height-1 text-primary-600"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                    <li class="text-[32px] line-height-1 dark:text-purple-400"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                    <li class="text-[32px] line-height-1 text-success-600"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                    <li class="text-[32px] line-height-1 text-info-600"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                    <li class="text-[32px] line-height-1 text-danger-600"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                </ul>
            </div>
        </div>
        <div class="card h-full p-0 border-0 overflow-hidden">
            <div class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6">
                <h6 class="text-lg font-semibold mb-0">Rating</h6>
            </div>
            <div class="card-body p-6">
                <ul class="flex flex-wrap items-center gap-3">
                    <li class="text-warning-600 text-[32px] line-height-1"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                    <li class="text-warning-600 text-[32px] line-height-1"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                    <li class="text-neutral-400 text-[32px] line-height-1"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                    <li class="text-neutral-400 text-[32px] line-height-1"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                    <li class="text-neutral-400 text-[32px] line-height-1"><iconify-icon icon="material-symbols:star"></iconify-icon></li>
                </ul>
            </div>
        </div>
    </div>

@endsection
