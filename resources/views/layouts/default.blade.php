<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('storage/app/public/' . $settings->favicon) }}" type="image/png" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $settings->site_name }} | @yield('title')</title>

    <!-- Bootstrap css-->
    <link id="style" href="{{ asset('themes/qudash/assets/plugins/bootstrap/css/bootstrap.min.css') }} "
        rel="stylesheet" />

    <!-- Icons css-->
    <link href="{{ asset('themes/qudash/assets/web-fonts/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('themes/qudash/assets/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/qudash/assets/web-fonts/fontawesome-pro/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/qudash/assets/web-fonts/plugin.css') }}" rel="stylesheet" />
    <script src="{{ asset('themes/qudash/assets/libs/sweetalert/sweetalert.min.js') }} "></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('themes/qudash/assets/libs/sweetalert2/dist/sweetalert2.min.css') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="{{ asset('themes/qudash/assets/libs/flatpickr/dist/flatpickr.min.css') }}">
    <!-- Style css-->
    <link href="{{ asset('themes/qudash/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/qudash/assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/qudash/assets/css/plugins.css') }}" rel="stylesheet">
    @livewireStyles
    @section('styles')
    @show
</head>

<body class="main-body leftmenu ltr light-theme dark-menu">
    <script>
        {!! $settings->tawk_to !!}
    </script>
    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('themes/qudash/assets/img/loader.svg') }} " class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->

    <!-- Page -->
    <div class="page">
        <!-- Main Header-->
        <div class="sticky main-header side-header">
            <div class="main-container container-fluid">
                <div class="main-header-left">
                    <a class="main-header-menu-icon" href="javascript:;" id="mainSidebarToggle">
                        <svg class="header-menu-icon" xmlns="http://www.w3.org/2000/svg"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path
                                d="M2.5,10.5h11c0.276123,0,0.5-0.223877,0.5-0.5s-0.223877-0.5-0.5-0.5h-11C2.223877,9.5,2,9.723877,2,10S2.223877,10.5,2.5,10.5z M2.5,6.5h19C21.776123,6.5,22,6.276123,22,6s-0.223877-0.5-0.5-0.5h-19C2.223877,5.5,2,5.723877,2,6S2.223877,6.5,2.5,6.5z M21.8446045,9.3519897C21.609314,9.0689697,21.189209,9.0303345,20.90625,9.265625l-2.6660156,2.2226562c-0.0315552,0.0261841-0.0606079,0.0552368-0.086792,0.086792c-0.2346802,0.2826538-0.1958008,0.7019653,0.086792,0.9366455L20.90625,14.734375c0.1194458,0.1005249,0.2706299,0.1555176,0.4267578,0.1552734c0.1973267-0.0002441,0.3843994-0.0878906,0.5109253-0.2393188c0.236145-0.2826538,0.1984863-0.7032471-0.0841675-0.9393921L19.7080078,12l2.0517578-1.7109375C22.0414429,10.0534668,22.0794067,9.6343384,21.8446045,9.3519897z M2.5,14.5h11c0.276123,0,0.5-0.223877,0.5-0.5s-0.223877-0.5-0.5-0.5h-11C2.223877,13.5,2,13.723877,2,14S2.223877,14.5,2.5,14.5z M21.5,17.5h-19C2.223877,17.5,2,17.723877,2,18s0.223877,0.5,0.5,0.5h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,17.5,21.5,17.5z" />
                        </svg>
                    </a>
                    <div class="hor-logo">
                        <a class="main-logo" href="{{ route('dashboard') }}">
                            <img src="{{ asset('storage/app/public/' . $settings->logo) }}"
                                class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ asset('storage/app/public/' . $settings->logo) }}"
                                class="header-brand-img desktop-logo-dark" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="main-header-center">
                    <div class="responsive-logo">
                        <a href="{{ route('dashboard') }}">
                            <img src="{{ asset('storage/app/public/' . $settings->favicon) }}" class="mobile-logo"
                                alt="logo">
                        </a>
                        <a href="{{ route('dashboard') }}">
                            <img src="{{ asset('storage/app/public/' . $settings->favicon) }}" class="mobile-logo-dark"
                                alt="logo">
                        </a>
                    </div>
                </div>
                <div class="main-header-right">
                    <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                        <svg class="header-icons navbar-toggler-icon" xmlns="http://www.w3.org/2000/svg"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path
                                d="M12,7c1.1040039-0.0014038,1.9985962-0.8959961,2-2c0-1.1045532-0.8954468-2-2-2s-2,0.8954468-2,2S10.8954468,7,12,7z M12,4c0.552124,0.0003662,0.9996338,0.447876,1,1c0,0.5523071-0.4476929,1-1,1s-1-0.4476929-1-1S11.4476929,4,12,4z M12,10c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2c1.1040039-0.0014038,1.9985962-0.8959961,2-2C14,10.8954468,13.1045532,10,12,10z M12,13c-0.5523071,0-1-0.4476929-1-1s0.4476929-1,1-1c0.552124,0.0003662,0.9996338,0.447876,1,1C13,12.5523071,12.5523071,13,12,13z M12,17c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2c1.1040039-0.0014038,1.9985962-0.8959961,2-2C14,17.8954468,13.1045532,17,12,17z M12,20c-0.5523071,0-1-0.4476929-1-1s0.4476929-1,1-1c0.552124,0.0003662,0.9996338,0.447876,1,1C13,19.5523071,12.5523071,20,12,20z" />
                        </svg>
                    </button>
                    <div class="navbar navbar-expand-lg navbar-collapse responsive-navbar">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                            <div class="d-flex order-lg-2 ms-auto">
                                @if ($settings->enable_kyc == 'yes')
                                    <div class="dropdown d-flex main-profile-menu">
                                        <a href="" class="d-flex">
                                            <span>
                                                <i class="header-icon text-primary" data-feather="unlock"></i>
                                            </span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <div class="header-navheading">
                                                <h6 class="main-notification-title">KYC Status</h6>
                                            </div>
                                            @if (Auth::user()->account_verify == 'Verified')
                                                <a class="dropdown-item border-top text-success" href="#">
                                                    <i data-feather="user-check" class="text-success"> </i>
                                                    <strong>Verified</strong>
                                                </a>
                                            @elseif (Auth::user()->account_verify == 'Under review')
                                                Your Submission is under review
                                            @else
                                                <a class="dropdown-item border-top text-danger" href="#">
                                                    <i data-feather="user-x" class="text-danger"> </i>
                                                    <strong>Not Verified</strong>
                                                </a>
                                                <a href="{{ route('account.verify') }}"
                                                    class="btn btn-primary btn-sm">Verify
                                                    Account </a>
                                            @endif
                                        </div>
                                    </div>
                                @endif

                                <!--search-->
                                <div class="dropdown d-flex main-header-theme">
                                    <a class="nav-link icon layout-setting">
                                        <span class="dark-layout">
                                            <svg class="header-icons" xmlns="http://www.w3.org/2000/svg"
                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                <path
                                                    d="M5.6356812,17.6572876l-0.7069702,0.7069702c-0.09375,0.09375-0.1463623,0.2208862-0.1464233,0.3534546c0,0.276123,0.2238159,0.5,0.499939,0.500061c0.1326294,0.0001221,0.2598267-0.0526123,0.3534546-0.1464844l0.7070312-0.7070312c0.1904907-0.194397,0.1904907-0.5054932,0-0.6998901C6.1494141,17.4671631,5.8328857,17.4639893,5.6356812,17.6572876z M12,4h0.0006104C12.2765503,3.9998169,12.5001831,3.776001,12.5,3.5v-1C12.5,2.223877,12.276123,2,12,2s-0.5,0.223877-0.5,0.5v1.0006104C11.5001831,3.7765503,11.723999,4.0001831,12,4z M5.6357422,6.3427734c0.0936279,0.0939331,0.2208862,0.1466675,0.3535156,0.1464844v0.000061c0.1325073-0.000061,0.2596436-0.0527344,0.3533936-0.1464233c0.1953125-0.1952515,0.1953125-0.5118408,0.000061-0.7071533L5.6357422,4.928772c-0.194397-0.1904907-0.5054321-0.1904907-0.6998291,0C4.7387085,5.1220093,4.7354736,5.4385376,4.9287109,5.6357422L5.6357422,6.3427734z M3.5,11.5h-1C2.223877,11.5,2,11.723877,2,12s0.223877,0.5,0.5,0.5h1C3.776123,12.5,4,12.276123,4,12S3.776123,11.5,3.5,11.5z M12,20c-0.276123,0-0.5,0.223877-0.5,0.5v1.0005493C11.5001831,21.7765503,11.723999,22.0001831,12,22h0.0006104c0.2759399-0.0001831,0.4995728-0.223999,0.4993896-0.5v-1C12.5,20.223877,12.276123,20,12,20z M12,6c-3.3137207,0-6,2.6862793-6,6s2.6862793,6,6,6c3.3121948-0.0036011,5.9963989-2.6878052,6-6C18,8.6862793,15.3137207,6,12,6z M12,17c-2.7614136,0-5-2.2385864-5-5s2.2385864-5,5-5c2.7600708,0.0032349,4.9967651,2.2399292,5,5C17,14.7614136,14.7614136,17,12,17z M21.5,11.5h-1c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h1c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,11.5,21.5,11.5z M18.3642578,4.9287109l-0.7070312,0.7070312c-0.09375,0.09375-0.1463623,0.2208862-0.1464233,0.3534546c0,0.276123,0.2238159,0.5,0.499939,0.500061c0.1326294,0.0001221,0.2598267-0.0526123,0.3535156-0.1465454l0.7069702-0.7069702c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1971436,0.1900635-0.5137329-0.0071411-0.7069702C18.8740234,4.7283325,18.5574951,4.7315674,18.3642578,4.9287109z M18.3642578,17.6572876c-0.194397-0.1905518-0.5055542-0.1905518-0.6999512,0c-0.1971436,0.1932983-0.2003174,0.5098267-0.007019,0.7069702l0.7069702,0.7070312c0.0936279,0.0939331,0.2208252,0.1466675,0.3534546,0.1464844c0.1325684,0,0.2597046-0.0526733,0.3534546-0.1463623c0.1953125-0.1952515,0.1953125-0.5118408,0.0001221-0.7071533L18.3642578,17.6572876z" />
                                            </svg>
                                        </span>
                                        <span class="light-layout">
                                            <svg class="header-icons" xmlns="http://www.w3.org/2000/svg"
                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                <path
                                                    d="M22.0482178,13.2746582c-0.1265259-0.2453003-0.4279175-0.3416138-0.6732178-0.2150879C20.1774902,13.6793823,18.8483887,14.0019531,17.5,14c-0.8480835-0.0005493-1.6913452-0.1279297-2.50177-0.3779297c-4.4887085-1.3847046-7.0050049-6.1460571-5.6203003-10.6347656c0.0320435-0.1033325,0.0296021-0.2142944-0.0068359-0.3161621C9.2781372,2.411377,8.9921875,2.2761841,8.7324219,2.3691406C4.6903076,3.800293,1.9915771,7.626709,2,11.9146729C2.0109863,17.4956055,6.5440674,22.0109863,12.125,22c4.9342651,0.0131226,9.1534424-3.5461426,9.9716797-8.4121094C22.1149292,13.4810181,22.0979614,13.3710327,22.0482178,13.2746582z M16.0877075,20.0958252c-4.5321045,2.1853027-9.9776611,0.2828979-12.1630249-4.2492065S3.6417236,5.8689575,8.1738281,3.6835938C8.0586548,4.2776489,8.0004272,4.8814087,8,5.4865723C7.9962769,10.7369385,12.2495728,14.9962769,17.5,15c1.1619263,0.0023193,2.3140869-0.2119751,3.3974609-0.6318359C20.1879272,16.8778076,18.4368896,18.9630127,16.0877075,20.0958252z" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                                <!-- Theme-Layout -->
                                <div class="dropdown d-flex main-profile-menu">
                                    <a class="d-flex" href="javascript:;">
                                        <span class="main-img-user">
                                            <i data-feather="user" class="header-icons"></i>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="header-navheading">
                                            <h6 class="main-notification-title">{{ Auth::user()->name }}</h6>

                                        </div>
                                        <a class="dropdown-item border-top" href="{{ route('profile') }}">
                                            <i class="fe fe-user"></i> My Profile
                                        </a>

                                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                            <i class="fe fe-power"></i> Sign Out
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div><!-- profile -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Header-->

        <!-- Sidemenu -->
        <div class="sticky">
            <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
                <div class="main-sidebar-header main-container-1 active">
                    <div class="sidemenu-logo">
                        <a class="main-logo" href="{{ route('dashboard') }}">
                            <img src="{{ asset('storage/app/public/' . $settings->logo) }}"
                                class="header-brand-img desktop-logo-dark" alt="logo">
                            <img src="{{ asset('storage/app/public/' . $settings->logo) }}"
                                class="header-brand-img icon-logo-dark" alt="logo">
                            <img src="{{ asset('storage/app/public/' . $settings->logo) }}"
                                class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ asset('storage/app/public/' . $settings->logo) }}"
                                class="header-brand-img icon-logo" alt="logo">
                        </a>
                    </div>
                    <div class="main-sidebar-body main-body-1">
                        <div class="slide-left disabled" id="slide-left">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#c9bebe" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg>
                        </div>
                        <ul class="menu-nav nav">
                            <li class="nav-item">
                                <a class="nav-link with-sub " href="{{ route('dashboard') }}">
                                    <div class="sidemenu-icon menu-icon">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                    </div>
                                    <span class="sidemenu-label">Dashboards</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub {{ request()->routeIs('dashboard') ? 'bg-transparent' : '' }}"
                                    href="{{ route('deposits') }}">
                                    <div class="sidemenu-icon menu-icon"><i class="fa fa-download"
                                            aria-hidden="true"></i>
                                    </div>
                                    <span class="sidemenu-label">Deposits</span>

                                </a>

                            </li>
                            @if ($mod['investment'] || $mod['cryptoswap'])
                                <li class="nav-item">
                                    <a class="nav-link with-sub {{ request()->routeIs('dashboard') ? 'bg-transparent' : '' }}"
                                        href="{{ route('withdrawalsdeposits') }}">
                                        <div class="sidemenu-icon menu-icon"><i class="fa fa-upload"
                                                aria-hidden="true"></i>
                                        </div>
                                        <span class="sidemenu-label">Withdraw</span>

                                    </a>
                                </li>
                            @endif
                            @if ($mod['investment'])
                                <li class="nav-item">
                                    <a class="nav-link with-sub {{ request()->routeIs('dashboard') ? 'bg-transparent' : '' }}"
                                        href="{{ route('tradinghistory') }}">
                                        <div class="sidemenu-icon menu-icon"><i class="fa fa-history"
                                                aria-hidden="true"></i>
                                        </div>
                                        <span class="sidemenu-label">Profit History</span>

                                    </a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link with-sub {{ request()->routeIs('dashboard') ? 'bg-transparent' : '' }}"
                                    href="{{ route('accounthistory') }}">
                                    <div class="sidemenu-icon menu-icon"><i class="fa fa-money"
                                            aria-hidden="true"></i>
                                    </div>
                                    <span class="sidemenu-label">Transaction</span>

                                </a>
                            </li>
                            @if ($mod['cryptoswap'])
                                <li class="nav-item">
                                    <a class="nav-link with-sub {{ request()->routeIs('dashboard') ? 'bg-transparent' : '' }}"
                                        href="{{ route('assetbalance') }}">
                                        <div class="sidemenu-icon menu-icon"><i class="fe fe-layers"></i>
                                        </div>
                                        <span class="sidemenu-label">Swap Crypto</span>

                                    </a>
                                </li>
                            @endif
                            @if ($moresettings->use_transfer)
                                <li class="nav-item">
                                    <a class="nav-link with-sub {{ request()->routeIs('dashboard') ? 'bg-transparent' : '' }}"
                                        href="{{ route('transferview') }}">
                                        <div class="sidemenu-icon menu-icon"><i class="mdi mdi-swap-horizontal"></i>
                                        </div>
                                        <span class="sidemenu-label">Transfer Funds</span>

                                    </a>
                                </li>
                            @endif
                            @if ($mod['subscription'])
                                <li class="nav-item">
                                    <a class="nav-link with-sub {{ request()->routeIs('dashboard') ? 'bg-transparent' : '' }}"
                                        href="{{ route('subtrade') }}">
                                        <div class="sidemenu-icon menu-icon"><i class="fe fe-file-text"></i>
                                        </div>
                                        <span class="sidemenu-label">Manage Account</span>

                                    </a>

                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link with-sub {{ request()->routeIs('dashboard') ? 'bg-transparent' : '' }}"
                                    href="{{ route('profile') }}">
                                    <div class="sidemenu-icon menu-icon"><i class="fa fa-address-card"
                                            aria-hidden="true"></i>
                                    </div>
                                    <span class="sidemenu-label">Profile</span>

                                </a>

                            </li>
                            @if ($mod['investment'])
                                <li class="nav-item">
                                    <a class="nav-link with-sub {{ request()->routeIs('dashboard') ? 'bg-transparent' : '' }}"
                                        href="{{ route('mplans') }}">
                                        <div class="sidemenu-icon menu-icon"><i class="fe fe-bar-chart"></i>
                                        </div>
                                        <span class="sidemenu-label">Trading Plans</span>

                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link with-sub {{ request()->routeIs('dashboard') ? 'bg-transparent' : '' }}"
                                        href="{{ route('myplans', 'All') }}">
                                        <div class="sidemenu-icon menu-icon"><i class="fa fa-leaf"
                                                aria-hidden="true"></i>
                                        </div>
                                        <span class="sidemenu-label">My Plans</span>
                                    </a>
                                </li>
                            @endif
                            @if ($mod['membership'])
                                <li class="nav-item">
                                    <a href="{{ route('user.courses') }}"
                                        class="nav-link with-sub {{ request()->routeIs('dashboard') ? 'bg-transparent' : '' }}">
                                        <div class="sidemenu-icon menu-icon">
                                            <i class="fas fa-graduation-cap"></i>
                                        </div>
                                        <span class="sidemenu-label">Education</span>
                                    </a>
                                </li>
                            @endif
                            @if ($mod['signal'])
                                <li class="nav-item">
                                    <a href="{{ route('tsignals') }}"
                                        class="nav-link with-sub {{ request()->routeIs('dashboard') ? 'bg-transparent' : '' }}">
                                        <div class="sidemenu-icon menu-icon">
                                            <i class="fa fa-signal"></i>
                                        </div>
                                        <span class="sidemenu-label">Trade Signals</span>
                                    </a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link with-sub {{ request()->routeIs('dashboard') ? 'bg-transparent' : '' }}"
                                    href="{{ route('referuser') }}">
                                    <div class="sidemenu-icon menu-icon"><i class="fa fa-retweet"
                                            aria-hidden="true"></i>
                                    </div>
                                    <span class="sidemenu-label">Referrals</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub {{ request()->routeIs('dashboard') ? 'bg-transparent' : '' }}"
                                    href="{{ route('support') }}">
                                    <div class="sidemenu-icon menu-icon"><i class="fa fa-question-circle"
                                            aria-hidden="true"></i>
                                    </div>
                                    <span class="sidemenu-label">Support</span>
                                </a>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#c9bebe" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sidemenu -->

        <!-- Main Content-->
        <div class="pt-0 main-content side-content">
            <div class="main-container container-fluid">
                <div class="inner-body">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- End Main Content-->

        <!-- Main Footer-->
        <div class="text-center main-footer">
            <div class="container">
                <div class="row row-sm">
                    <div class="col-md-12">
                        <span>Copyright © {{ date('Y') }} <a
                                href="javascript:void(0);">{{ $settings->site_name }}</a>
                            All rights reserved.</span>
                    </div>
                </div>
            </div>
        </div>
        <!--End Footer-->
    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>
    @livewireScripts
    @section('scripts')
        <!-- Jquery js-->
        <script src="{{ asset('themes/qudash/assets/plugins/jquery/jquery.min.js') }}"></script>

        <!-- Bootstrap js-->
        <script src="{{ asset('themes/qudash/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('themes/qudash/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- Select2 js-->
        <script src="{{ asset('themes/qudash/assets/plugins/select2/js/select2.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <!-- Bootstrap Notify -->
        <script src="{{ asset('themes/qudash/assets/libs/bootstrap-notify/bootstrap-notify.min.js') }} "></script>
        <!-- Internal Data Table js -->
        <script src="{{ asset('themes/qudash/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('themes/qudash/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
        <script src="{{ asset('themes/qudash/assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('themes/qudash/assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('themes/qudash/assets/plugins/datatable/js/jszip.min.js') }}"></script>
        <script src="{{ asset('themes/qudash/assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('themes/qudash/assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('themes/qudash/assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('themes/qudash/assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('themes/qudash/assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('themes/qudash/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('themes/qudash/assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('themes/qudash/assets/js/table-data.js') }}"></script>

        <!-- Perfect-scrollbar js -->
        <script src="{{ asset('themes/qudash/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('themes/qudash/assets/plugins/perfect-scrollbar/pscroll1.js') }}"></script>

        <!-- Apex charts js -->
        <script src="{{ asset('themes/qudash/assets/plugins/apexcharts/apexcharts.js') }}"></script>

        <!-- Sidemenu js -->
        <script src="{{ asset('themes/qudash/assets/plugins/sidemenu/sidemenu.js') }}"></script>

        <!-- Sidebar js -->
        <script src="{{ asset('themes/qudash/assets/plugins/sidebar/sidebar.js') }}"></script>

        <!-- Sticky js -->
        <script src="{{ asset('themes/qudash/assets/js/sticky.js') }}"></script>

        <!-- Internal Dashboard js-->
        <script src="{{ asset('themes/qudash/assets/js/index.js') }}"></script>

        <!-- CHART-CIRCLE JS-->
        <script src="{{ asset('themes/qudash/assets/js/circle-progress.min.js') }}"></script>

        <!-- Color Theme js -->
        <script src="{{ asset('themes/qudash/assets/js/themeColors.js') }}"></script>

        <!-- swither styles js -->
        <script src="{{ asset('themes/qudash/assets/js/swither-styles.js') }}"></script>
        <script src="{{ asset('themes/qudash/assets/libs/sweetalert/sweetalert.min.js') }} "></script>
        <!-- Custom js -->
        <script src="{{ asset('themes/qudash/assets/js/custom.js') }}"></script>
        <script src="{{ asset('themes/qudash/assets/js/scriptfile.js') }}"></script>
        <script>
            feather.replace()
        </script>
    @show
</body>

</html>
