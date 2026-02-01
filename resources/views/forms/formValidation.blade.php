@extends('layout.layout')
@php
    $title='Form Validation';
    $subTitle = 'Form Validation';
    $script = '<script>
                        (() => {
                            "use strict"

                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            const forms = document.querySelectorAll(".needs-validation")

                            // Loop over them and prevent submission
                            Array.from(forms).forEach(form => {
                                form.addEventListener("submit", event => {
                                    if (!form.checkValidity()) {
                                        event.preventDefault()
                                        event.stopPropagation()
                                    }

                                    form.classList.add("was-validated")
                                }, false)
                            })
                        })()
            </script>';
@endphp

@section('content')

    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">
            <div class="card border-0">
                <div class="card-header">
                    <h5 class="text-lg font-semibold mb-0">Input Custom Styles</h5>
                </div>
                <div class="card-body">
                    <form class="grid grid-cols-12 gap-4">
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Input with Placeholder</label>
                            <input type="text" name="#0" class="form-control" value="info@gmail.com" required>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Medium Size File Input </label>
                            <input class="border border-neutral-200 dark:border-neutral-600 w-full rounded-lg" type="file" name="#0">
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Input with Icon</label>
                            <input type="email" name="#0" class="form-control" placeholder="Enter Email" required>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Input with Payment </label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 border rounded-e-0 border-e-0 rounded-s-md border-neutral-200 dark:border-neutral-600">
                                    <img src="{{ asset('assets/images/card/payment-icon.png') }}" alt="image">
                                </span>
                                <input type="text" class="form-control grow rounded-ss-none rounded-es-none" placeholder="Card Number">
                            </div>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Input with Phone </label>
                            <div class="flex">
                                <select class="form-select flex-grow-0 rounded-se-none rounded-ee-none border-e-0 w-auto">
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                    <option>US</option>
                                </select>
                                <input type="text" name="#0" class="form-control grow rounded-ss-none rounded-es-none" placeholder="+1 (555) 000-0000">
                            </div>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Input</label>
                            <div class="flex">
                                <input type="text" class="form-control grow rounded-se-none rounded-ee-none" placeholder="www.random.com">
                                <button type="button" class="inline-flex items-center px-3 border rounded-s-0 border-s-0 rounded-e-md border-neutral-200 dark:border-neutral-600"><iconify-icon icon="lucide:copy"></iconify-icon>Copy</button>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <button class="btn btn-primary-600" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-span-12">
            <div class="card border-0">
                <div class="card-header">
                    <h5 class="text-lg font-semibold mb-0">Input Status</h5>
                </div>
                <div class="card-body">
                    <form class="grid grid-cols-12 gap-4">
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">First Name</label>
                            <div class="icon-field has-validation">
                                <span class="icon">
                                    <iconify-icon icon="f7:person"></iconify-icon>
                                </span>
                                <input type="text" name="#0" class="form-control" placeholder="Enter First Name" required>
                            </div>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Last Name</label>
                            <div class="icon-field has-validation">
                                <span class="icon">
                                    <iconify-icon icon="f7:person"></iconify-icon>
                                </span>
                                <input type="text" name="#0" class="form-control" placeholder="Enter Last Name" required>
                            </div>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Email</label>
                            <div class="icon-field has-validation">
                                <span class="icon">
                                    <iconify-icon icon="mage:email"></iconify-icon>
                                </span>
                                <input type="email" name="#0" class="form-control" placeholder="Enter Email" required>
                            </div>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Phone</label>
                            <div class="icon-field has-validation">
                                <span class="icon">
                                    <iconify-icon icon="solar:phone-calling-linear"></iconify-icon>
                                </span>
                                <input type="text" name="#0" class="form-control" placeholder="+1 (555) 000-0000" required>
                            </div>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Password</label>
                            <div class="icon-field has-validation">
                                <span class="icon">
                                    <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                                </span>
                                <input type="password" name="#0" class="form-control" placeholder="*******" required>
                            </div>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <label class="form-label">Confirm Password</label>
                            <div class="icon-field has-validation">
                                <span class="icon">
                                    <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                                </span>
                                <input type="password" name="#0" class="form-control" placeholder="*******" required>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <button class="btn btn-primary-600" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
