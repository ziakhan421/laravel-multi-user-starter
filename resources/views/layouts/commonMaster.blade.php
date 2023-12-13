<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      class="light-style layout-compact layout-navbar-fixed layout-menu-100vh layout-menu-fixed"
      data-template="vertical-menu-theme-default-light" dir="ltr"
      data-theme="theme-default"
      data-assets-path="{{url('/')}}/assets/"
      data-base-url="{{url('/')}}"
      data-framework="laravel">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>@yield('title')</title>
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>

    <!-- Include Styles -->
    @include('layouts/sections/styles')

    <!-- Include Scripts for customizer, helper, analytics, config -->
    @include('layouts/sections/scriptsIncludes')
</head>

<body>

<div id="global-toast-container" class="p-3"></div>

<!-- Layout Content -->
@yield('layoutContent')
<!--/ Layout Content -->

<!-- Include Scripts -->
@include('layouts/sections/scripts')

<script>
    function showToast(message, type = 'success') {
        const toastContainer = document.getElementById('global-toast-container');
        let icon = 'bx-check';
        let title = 'Success';
        let bgClass = 'bg-success';
        if (type !== 'success') {
            icon = 'bx-error';
            title = 'Error';
            bgClass = 'bg-danger';
        }
        // Create a new toast element
        const toast = document.createElement('div');
        toast.className = `bs-toast ${bgClass} toast toast-ex animate__animated my-2 fade`;
        toast.setAttribute('role', 'alert');
        toast.setAttribute('aria-live', 'assertive');
        toast.setAttribute('aria-atomic', 'true');
        toast.setAttribute('data-bs-delay', '2000');

        // Add toast content
        toast.innerHTML = `
            <div class="toast-header">
                <i class="bx ${icon} me-2"></i>
                <div class="me-auto fw-medium">${title}</div>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                ${message}
            </div>
        `;

        // Append the toast to the container
        toastContainer.appendChild(toast);
        const bsToast = new bootstrap.Toast(toast);
        bsToast.show();
    }
</script>
</body>

</html>
