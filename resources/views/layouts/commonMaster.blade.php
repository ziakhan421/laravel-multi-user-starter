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
<!-- Layout Content -->
@yield('layoutContent')
<!--/ Layout Content -->

<!-- Include Scripts -->
@include('layouts/sections/scripts')

</body>

</html>
