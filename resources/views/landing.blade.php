@extends('layouts.structure')

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
            'header-navbar-transparent'  Enables a transparent header (if also fixed, it will get a solid dark background color on scrolling)
        -->
        <!-- Page Container -->
        <div id="page-container">
            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero Content -->
                <div class="bg-image" style="background-image: url({{asset('/img/branding/banners/Banner3.png')}})">
                    <div class="bg-primary-dark-op">
                        <section class="content content-full content-boxed">
                            <!-- Section Content -->
                            <div class="text-center push-30-t visibility-hidden" data-toggle="appear" data-class="animated fadeIn">
                                <a class="fa-2x text-white" href="/player">
                                    <img class="" src="{{ asset('/img/branding/extras/SquadLocker_Text Logo_No_Keyhole Flipped.png') }}" alt="">
                                </a>
                            </div>
                            <div class="push-100-t push-50 text-center">
                                <h1 class="h2 font-w700 text-white push-20 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">We Connect Complementary Playstyles</h1>
                                <h2 class="h4 text-white-op visibility-hidden" data-toggle="appear" data-timeout="750" data-class="animated fadeIn"><em>We're built and tailered for competative NBA 2K Gamers</em></h2>
                                <div class="push-50-t push-20 text-center">
                                    <a class="btn btn-rounded btn-noborder btn-lg btn-success push-10-r push-5 visibility-hidden" data-toggle="appear" data-class="animated fadeInLeft" href="/register">
                                        <i class="fa fa-shopping-cart push-10-r"></i>Sign-Up
                                    </a>
                                    <a class="btn btn-rounded btn-noborder btn-lg btn-primary push-5 visibility-hidden" data-toggle="appear" data-class="animated fadeInRight" href="/login">Log In</a>
                                </div>
                            </div>
                            <!-- END Section Content -->
                        </section>
                    </div>
                </div>
                <!-- END Hero Content -->

                <!-- Content -->
                <div class="bg-white">
                    <section class="content content-boxed">
                        <!-- Section Content -->
                        <h2 class="push-50-t push-50 text-center">We Connect Complementary Playstyles</h2>
                        <p>
                            Built this platform to seed a small, devoted community for serious 2K gamers that love the game of basketball.  “SquadLocker helps Team Owners source elite talent and willing role players, while Free Agents can identify MyPark Squads and PRO-AM Teams with complementary play-styles.”

                            This community has the power to separate the great players from the shoot-first-dont-pass-grinders, as well as improve the overall style of online, competitive 2K gameplay. What it truly becomes is up to you! Early adopters give applications their heart and soul. I can’t wait to see what you guys bring to life.

                        </p>
                        <!-- END Section Content -->
                    </section>
                </div>
                <!-- END Content -->

                <!-- Content 2 -->
                <!-- END Hero Content
                <div class="bg-gray-lighter">
                    <section class="content content-boxed">
                        <h2 class="push-50-t push-50 text-center">Content #2.</h2>
                    </section>
                </div>

                <!-- END Content 2 -->

                <!-- Content 3 -->
                <!-- END Hero Content
                <div class="bg-white">
                    <section class="content content-boxed">
                    </section>
                </div>
                <!-- END Content 3 -->

                <!-- Content 4 -->
                <!-- END Hero Content
                <div class="bg-gray-lighter">
                    <section class="content content-boxed">
                        <h2 class="push-50-t push-50 text-center">Content #4.</h2>
                    </section>
                </div>
                -->
                <!-- END Content 4 -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
@endsection

@section('js')
    <!-- Page JS Code -->
    <script src="{{ asset('/js/plugins/jquery-vide/jquery.vide.min.js"></script>
    <script>
        jQuery(function () {
            // Init page helpers (Appear plugin)
            App.initHelpers('appear');
        });
    </script>
@endsection
