@extends('layouts.structure')

@section('title')
    {{-- Yield the title if it exists, otherwise default to 'Squad Locker' --}}
    @yield('title','Squad Locker')
@endsection

@section('content')


    <!-- Page Container -->
    <!--
        Available Classes:

        'enable-cookies'             Remembers active color theme between pages (when set through color theme list)

        'sidebar-l'                  Left Sidebar and right Side Overlay
        'sidebar-r'                  Right Sidebar and left Side Overlay
        'sidebar-mini'               Mini hoverable Sidebar (> 991px)
        'sidebar-o'                  Visible Sidebar by default (> 991px)
        'sidebar-o-xs'               Visible Sidebar by default (< 992px)

        'side-overlay-hover'         Hoverable Side Overlay (> 991px)
        'side-overlay-o'             Visible Side Overlay by default (> 991px)

        'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

        'header-navbar-fixed'        Enables fixed header
    -->
    <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">

        <!-- Side Overlay-->
        <aside id="side-overlay">
            <!-- Side Overlay Scroll Container -->
            <div id="side-overlay-scroll">
                <!-- Side Header -->
                <div class="side-header side-content">
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                        <i class="fa fa-times"></i>
                    </button>
                    <span>
                        <img class="img-avatar img-avatar32" src="{{ asset('/img/avatars/prettyboyfredo.jpg') }}" alt="">
                        <span class="font-w600 push-10-l">CaptainAwesom650</span>
                    </span>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="side-content remove-padding-t">
                    <!-- Side Overlay Tabs -->
                    <div class="block pull-r-l border-t">
                        <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs">
                            <li class="active">
                                <a href="#tabs-side-overlay-overview"><i class="fa fa-fw fa-coffee"></i> Chat</a>
                            </li>
                            <li>
                                <a href="#tabs-side-overlay-sales"><i class="fa fa-fw fa-line-chart"></i> Trash Talk</a>
                            </li>
                        </ul>
                        <div class="block-content tab-content">
                            <!-- Overview Tab -->
                            <div class="tab-pane fade fade-right in active" id="tabs-side-overlay-overview">
                                <!-- Activity -->
                                <div class="block pull-r-l">
                                    <div class="block-header bg-gray-lighter">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Recent Activity</h3>
                                    </div>
                                    <div class="block-content">
                                        <!-- Activity List -->
                                        <ul class="list list-activity">
                                            <li>

                                            </li>
                                            <li>

                                            </li>
                                            <li>

                                            </li>
                                        </ul>
                                        <!-- END Activity List -->
                                    </div>
                                </div>
                                <!-- END Activity -->

                                <!-- Online Friends -->
                                <div class="block pull-r-l">
                                    <div class="block-header bg-gray-lighter">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                            </li>
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Online Friends</h3>
                                    </div>
                                    <div class="block-content block-content-full">
                                        <!-- Users Navigation -->
                                        <ul class="nav-users remove-margin-b">
                                            <li>

                                            </li>
                                            <li>

                                            </li>
                                            <li>

                                            </li>
                                            <li>

                                            </li>
                                            <li>

                                            </li>
                                        </ul>
                                        <!-- END Users Navigation -->
                                    </div>
                                </div>
                                <!-- END Online Friends -->

                                <!-- Quick Settings -->
                                <div class="block pull-r-l">
                                    <div class="block-header bg-gray-lighter">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Quick Settings</h3>
                                    </div>
                                    <div class="block-content">
                                        <!-- Quick Settings Form -->
                                        <form class="form-bordered" action="base_pages_dashboard.html" method="post" onsubmit="return false;">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-8">
                                                        <div class="font-s13 font-w600">Online Status</div>
                                                        <div class="font-s13 font-w400 text-muted">Show your status to all</div>
                                                    </div>
                                                    <div class="col-xs-4 text-right">
                                                        <label class="css-input switch switch-sm switch-primary push-10-t">
                                                            <input type="checkbox"><span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-8">
                                                        <div class="font-s13 font-w600">Auto Updates</div>
                                                        <div class="font-s13 font-w400 text-muted">Keep up to date</div>
                                                    </div>
                                                    <div class="col-xs-4 text-right">
                                                        <label class="css-input switch switch-sm switch-primary push-10-t">
                                                            <input type="checkbox"><span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-8">
                                                        <div class="font-s13 font-w600">Notifications</div>
                                                        <div class="font-s13 font-w400 text-muted">Do you need them?</div>
                                                    </div>
                                                    <div class="col-xs-4 text-right">
                                                        <label class="css-input switch switch-sm switch-primary push-10-t">
                                                            <input type="checkbox" checked><span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-8">
                                                        <div class="font-s13 font-w600">API Access</div>
                                                        <div class="font-s13 font-w400 text-muted">Enable/Disable access</div>
                                                    </div>
                                                    <div class="col-xs-4 text-right">
                                                        <label class="css-input switch switch-sm switch-primary push-10-t">
                                                            <input type="checkbox" checked><span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END Quick Settings Form -->
                                    </div>
                                </div>
                                <!-- END Quick Settings -->
                            </div>
                            <!-- END Overview Tab -->

                            <!-- Sales Tab -->
                            <div class="tab-pane fade fade-left" id="tabs-side-overlay-sales">
                                <div class="block pull-r-l">
                                    <!-- Stats -->
                                    <div class="block-content pull-t">
                                        <div class="row items-push">
                                            <div class="col-xs-6">

                                            </div>
                                            <div class="col-xs-6">

                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Stats -->


                                    <!-- More -->
                                    <div class="text-center">
                                        <small><a href="javascript:void(0)">Load More..</a></small>
                                    </div>
                                    <!-- END More -->
                                </div>
                            </div>
                            <!-- END Sales Tab -->
                        </div>
                    </div>
                    <!-- END Side Overlay Tabs -->
                </div>
                <!-- END Side Content -->
            </div>
            <!-- END Side Overlay Scroll Container -->
        </aside>
        <!-- END Side Overlay -->

        <!-- Sidebar -->
        <nav id="sidebar">
            <!-- Sidebar Scroll Container -->
            <div id="sidebar-scroll">
                <!-- Sidebar Content -->
                <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="side-header side-content bg-white-op">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                            <i class="fa fa-times"></i>
                        </button>
                        <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                        <div class="btn-group pull-right">
                            <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                                <i class="si si-drop"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
                                <li>
                                    <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                        <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)">
                                        <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="theme" data-theme="assets/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)">
                                        <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="theme" data-theme="assets/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)">
                                        <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="theme" data-theme="assets/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)">
                                        <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)">
                                        <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a class="h5 text-white" href="index.html">
                            <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">ne</span>
                        </a>
                    </div>
                    <!-- END Side Header -->

                    <!-- Side Content -->
                    <!-- Side Content -->
                    <div class="side-content">
                        <ul class="nav-main">
                            <li class="nav-main-heading"><span class="sidebar-mini-hide">My Profile</span></li>
                            <li>
                                <a class="active" href="/player"><i class="si si-game-controller"></i><span class="sidebar-mini-hide">My Player</span></a>
                            </li>
                            <li>
                                <a class="active" href="/team"><i class="si si-social-dribbble"></i><span class="sidebar-mini-hide">My Team</span></a>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-hide">Connect</span></li>
                            <li>
                                <a class="active" href="/free-agency"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Free Agency</span></a>
                            </li>
                            <li>
                                <a href="/stream"><i class="si si-list"></i><span class="sidebar-mini-hide">Activity Stream</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Content -->

                </div>
                <!-- Sidebar Content -->
            </div>
            <!-- END Sidebar Scroll Container -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="header-navbar" class="content-mini content-mini-full">
            <!-- Header Navigation Right -->
            <ul class="nav-header pull-right">
                <li>
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-default" data-toggle="layout" data-action="side_overlay_toggle" type="button">
                        <i class="si si-earphones-alt"></i>
                    </button>
                </li>
            </ul>
            <!-- END Header Navigation Right -->

            <!-- Header Navigation Left -->
            <ul class="nav-header pull-left">
                <li class="hidden-md hidden-lg">
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                        <i class="fa fa-navicon"></i>
                    </button>
                </li>
                <li class="hidden-xs hidden-sm">
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                        <i class="fa fa-ellipsis-v"></i>
                    </button>
                </li>
                <li class="visible-xs">
                    <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                    <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </li>
                <li class="js-header-search header-search">
                    <form class="form-horizontal" action="start_backend.html" method="post">
                        <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
                            <input class="form-control" type="text" id="base-material-text" name="base-material-text" placeholder="Search..">
                            <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                        </div>
                    </form>
                </li>
            </ul>
            <!-- END Header Navigation Left -->
        </header>
        <!-- END Header -->







        <!-- Main Container -->
        <main id="main-container">
            {{-- Yield the main content --}}
            @yield('main')
        </main>
        <!-- END Main Container -->
        {{-- Yield the apps model --}}
        @yield('apps')

@endsection

@section('js')
    <!-- Page JS Plugins + Page JS Code -->
    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('page-js')
@endsection
