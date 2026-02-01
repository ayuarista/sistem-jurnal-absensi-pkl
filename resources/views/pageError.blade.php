@extends('layout.layout')

@php
    $title='404';
    $subTitle = '404';
@endphp

@section('content')

    <div class="card basic-data-table border-0 overflow-hidden">
        <div class="card-body py-10 lg:py-[60px] xl:py-[80px] px-8 text-center">
            <img src="{{ asset('assets/images/error-img.png') }}" alt="" class="mb-6 mx-auto">
            <h6 class="mb-4">Page not Found</h6>
            <p class="text-secondary-light">Sorry, the page you are looking for doesn't exist </p>
            <a href="{{ route('index') }}" class="btn btn-primary-600 rounded-lg px-5 py-[11px] mt-10">Back to Home</a>
        </div>
    </div>

@endsection