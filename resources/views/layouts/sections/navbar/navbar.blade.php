@php
    $containerNav = $containerNav ?? 'container-fluid';
    $navbarDetached = ($navbarDetached ?? '');

@endphp

    <!-- Navbar -->
@if(isset($navbarDetached) && $navbarDetached == 'navbar-detached' && auth()->check())
    <nav
        class="layout-navbar {{$containerNav}} navbar navbar-expand-xl {{$navbarDetached}} align-items-center bg-navbar-theme"
        id="layout-navbar">
        @endif

        @if(isset($navbarDetached) && $navbarDetached == '')
            <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="{{$containerNav}}">

                    @endif

                    <!--  Brand demo (display only for navbar-full and hide on below xl) -->
                    @if(isset($navbarFull))
                        <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
                            <a href="{{url('/')}}" class="app-brand-link gap-2">
                                <span class="app-brand-text demo menu-text fw-bolder">Company Name</span>
                            </a>
                        </div>
                    @endif

                    <!-- ! Not   required for layout-without-menu -->
                    @if(!isset($navbarHideToggle))
                        <div
                            class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0{{ isset($menuHorizontal) ? ' d-xl-none ' : '' }} {{ isset($contentNavbar) ?' d-xl-none ' : '' }}">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="bx bx-menu bx-sm"></i>
                            </a>
                        </div>
                    @endif

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- Language -->
                            <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                                <a class="nav-link dropdown-toggle hide-arrow show" href="javascript:void(0);"
                                   data-bs-toggle="dropdown" aria-expanded="true">
                                    <i class="bx bx-globe bx-sm"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="static">
                                    <li>
                                        <a class="dropdown-item active" href="#" data-language="en">
                                            <span class="align-middle">English (United States)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="#" data-language="ja">
                                            <span class="align-middle">Japanese (Japan)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item " href="#" data-language="th">
                                            <span class="align-middle">Thai (Thailand)</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Language -->

                            @if(auth()->user()->role ==='admin')
                                <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                       data-bs-toggle="modal" data-bs-target="#emailCompose" aria-expanded="false">
                                        <i class="bx bx-message bx-sm"></i>
                                    </a>
                                </li>
                            @endif
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                   data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                             class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                                             class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{auth()->user()->name}}</span>
                                                    <small
                                                        class="text-muted">{{  ucfirst(auth()->user()->role)}}</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            <i class='bx bx-cog me-2'></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('logout')}}">
                                            <i class='bx bx-power-off me-2'></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>

                    @if(isset($navbarDetached) && $navbarDetached == '')
                </div>
            </nav>
        @endif
        @if(isset($navbarDetached) && $navbarDetached == 'navbar-detached')
    </nav>
@endif
<!-- / Navbar -->
