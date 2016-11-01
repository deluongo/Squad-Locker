@extends('layouts.interface')


@section('title')
    '$gamertag's Locker'
@endsection

@section('block-header')
        My Player
@endsection

@section('main')

    <!-- Page Header -->
    <div class="content bg-image" style="background-image: url({{asset('/img/photos/pg2k.jpg')}})">
        <div class="push-100-t push-15 clearfix">
            <div class="push-15-r pull-left animated fadeIn">
                <div class="js-pie-chart pie-chart" data-percent="80" data-line-width="3" data-size="100" data-bar-color="#abe37d" data-track-color="#eeeeee" data-scale-color="#dddddd">
                    <span>
                        <img class="img-avatar" src="{{asset('/img/avatars/prettyboyfredo.jpg')}}" alt="">
                    </span>
                </div>
            </div>
            <h1 class="h2 text-white push-10-t animated zoomIn">CaptainAwesome650</h1>
            <h2 class="h4 text-white-op animated zoomIn">Rivit City | PG | Playmaker</h2>
            <p class="font-w300 text-muted text-white-op animated zoomIn"><em>"Bro...play defense..." *THROWS MOUTHPIRECE*</em></p>
        </div>
    </div>
    <!-- END Page Header -->

    <!-- Page Content -->
    <div class="content content-boxed">
        <div class="row">
            <div class="col-sm-4 col-sm-4 push-15 clearfix">
                <div class="bg-image" style="background-image: url({{asset('/img/favicons/slasher.jpg')}})">
                    <div class="bg-black-op">
                        <div class="block block-themed block-transparent play-style-height">
                            <div class="block-header" id="bg-block-header">
                                <ul class="block-options">
                                    <li>
                                        <button type="button"><i class="si si-settings"></i></button>
                                    </li>
                                </ul>
                                <h3 class="block-title">Off-Ball</h3>
                            </div>
                            <div class="block-content block-content-full text-center" id="bg-block-content">
                                <a class="h1 font-w300 text-white" href="javascript:void(0)">Slasher</a>
                                <div class="row">
                                    <span class="h4 text-muted text-white pull-left">All-Star 4</span>
                                </div>


                                <div class="row pull-b">
                                    <div class="progress progress-mini pull-b">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                                    </div>
                                </div>
                            </div>



                            <div class="block-content block-content-full text-center" id="bg-block-content">
                                <div class="clearfix push-5">
                                    <div class="social-buttons">
                                        <a href="#" class="social-button youtube">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                        <a href="#" class="social-button twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#" class="social-button twitch">
                                            <i class="fa fa-twitch"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-xs-12 clearfix">
                <div class="content-grid">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="block block-themed">
                                    <div class="block-header bg-success sm-padding">
                                        <h3 class="block-title">Teammate</h3>
                                    </div>
                                    <div class="block-content sm-padding">
                                        <span class="label label-warning clear label-margin label-shrink">7 votes</span>
                                        <h1 class="text-success center grade-margin">A+</h1>
                                    </div>
                                    <div class="js-rating center rating-shrink" data-precision="true" data-score="4.5">
                                        <input name="score" type="hidden" value="3.006696428571429">
                                    </div>
                                </div>
                                <div class="block block-themed">
                                    <div class="block-header bg-warning clearfix">
                                        <h3 class="block-title">Ability</h3>
                                    </div>
                                    <div class="block-content">
                                        <span class="label label-danger clear label-margin label-shrink">2 votes</span>
                                        <h1 class="text-warning center grade-margin">B-</h1>
                                    </div>
                                    <div class="js-rating center rating-shrink" data-precision="true" data-score="3" style="cursor: pointer;">
                                        <input name="score" type="hidden" value="3.006696428571429">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="block block-themed">
                                    <div class="block-header bg-success sm-padding">
                                        <h3 class="block-title">Efficiency</h3>
                                    </div>
                                    <div class="block-content sm-padding">
                                        <span class="label label-success clear label-margin label-shrink">+3</span>
                                        <div class="row">
                                            <div class="h3 text-success center  extra-pad-vert font-w700 text-success" data-toggle="countTo" data-to="28.2">28.2 <span class="h6">PER</span></div>
                                        </div>

                                    </div>
                                    <div class="row text-center font-s13">
                                        <div class="col-xs-6">
                                            <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                <i class="fa fa-thumbs-up push-5-l"></i>
                                                <span class="hidden-xs">Real!</span>
                                            </a>
                                        </div>
                                        <div class="col-xs-6">
                                            <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                <i class="fa fa-thumbs-down push-5-l"></i>
                                                <span class="hidden-xs">Fake</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block block-themed">
                                    <div class="block-header bg-success clearfix">
                                        <h3 class="block-title">Shooting</h3>
                                    </div>
                                    <div class="block-content">
                                        <span class="label label-danger clear label-margin label-shrink">-4</span>
                                        <h3 class="text-success center  extra-pad-vert">.625<span class="h6"> %</span></h3>
                                    </div>
                                    <div class="row text-center font-s13">
                                        <div class="col-xs-6">
                                            <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                <i class="fa fa-thumbs-up push-5-l"></i>
                                                <span class="hidden-xs">Real!</span>
                                            </a>
                                        </div>
                                        <div class="col-xs-6">
                                            <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                <i class="fa fa-thumbs-down push-5-l"></i>
                                                <span class="hidden-xs">Fake</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="block block-themed">
                                    <div class="block-header bg-warning sm-padding">
                                        <h3 class="block-title">Assists</h3>
                                    </div>
                                    <div class="block-content sm-padding">
                                        <span class="label label-warning clear label-margin label-shrink">
                                            <i class="fa fa-refresh fa-spin"></i>
                                        </span>
                                        <h3 class="text-warning center extra-pad-vert">2.4 <span class="h6">APG</span></h3>
                                    </div>
                                    <div class="row text-center font-s13">
                                        <div class="col-xs-6">
                                            <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                <i class="fa fa-thumbs-up push-5-l"></i>
                                                <span class="hidden-xs">Real!</span>
                                            </a>
                                        </div>
                                        <div class="col-xs-6">
                                            <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                <i class="fa fa-thumbs-down push-5-l"></i>
                                                <span class="hidden-xs">Fake</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block block-themed">
                                    <div class="block-header bg-danger clearfix">
                                        <h3 class="block-title">APG/PPG</h3>
                                    </div>
                                    <div class="block-content">
                                        <span class="label label-warning clear label-margin label-shrink">
                                            <i class="fa fa-refresh fa-spin"></i>
                                        </span>
                                        <h3 class="text-danger center extra-pad-vert">1:2</h3>
                                    </div>
                                    <div class="row text-center font-s13">
                                        <div class="col-xs-6">
                                            <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                <i class="fa fa-thumbs-up push-5-l"></i>
                                                <span class="hidden-xs">Real!</span>
                                            </a>
                                        </div>
                                        <div class="col-xs-6">
                                            <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                <i class="fa fa-thumbs-down push-5-l"></i>
                                                <span class="hidden-xs">Fake</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="block block-themed">
                                    <div class="block-header bg-success sm-padding">
                                        <h3 class="block-title">Points</h3>
                                    </div>
                                    <div class="block-content sm-padding">
                                        <span class="label label-success clear label-margin label-shrink">+1</span>
                                        <h3 class="text-success center extra-pad-vert">7.5 <span class="h6">PPG</span></h3>
                                    </div>
                                    <div class="row text-center font-s13">
                                        <div class="col-xs-6">
                                            <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                <i class="fa fa-thumbs-up push-5-l"></i>
                                                <span class="hidden-xs">Real!</span>
                                            </a>
                                        </div>
                                        <div class="col-xs-6">
                                            <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                <i class="fa fa-thumbs-down push-5-l"></i>
                                                <span class="hidden-xs">Fake</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block block-themed widget-height">
                                    <div class="block-header bg-success clearfix">
                                        <h3 class="block-title">Rebounds</h3>
                                    </div>
                                    <div class="block-content">
                                        <span class="label label-success clear label-margin label-shrink">+1</span>
                                        <h3 class="text-success center  extra-pad-vert">3.1 <span class="h6">RPG</span></h3>
                                    </div>
                                    <div class="row text-center font-s13">
                                        <div class="col-xs-6">
                                            <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                <i class="fa fa-thumbs-up push-5-l"></i>
                                                <span class="hidden-xs">Real!</span>
                                            </a>
                                        </div>
                                        <div class="col-xs-6">
                                            <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                <i class="fa fa-thumbs-down push-5-l"></i>
                                                <span class="hidden-xs">Fake</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-7 col-lg-8">
                <!-- Timeline -->
                <div class="block">
                    <div class="block-header bg-gray-lighter">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                            </li>
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title"><i class="fa fa-newspaper-o"></i> Updates</h3>
                    </div>
                    <div class="block-content">
                        <ul class="list list-timeline pull-t">
                            <!-- Facebook Notification -->
                            <li>
                                <div class="list-timeline-time">3 hrs ago</div>
                                <i class="fa fa-facebook list-timeline-icon bg-default"></i>
                                <div class="list-timeline-content">
                                    <p class="font-w600">+ 290 Page Likes</p>
                                    <p class="font-s13">This is great, keep it up!</p>
                                </div>
                            </li>
                            <!-- END Facebook Notification -->

                            <!-- Generic Notification -->
                            <li>
                                <div class="list-timeline-time">4 hrs ago</div>
                                <i class="fa fa-briefcase list-timeline-icon bg-modern"></i>
                                <div class="list-timeline-content">
                                    <p class="font-w600">3 New Products were added!</p>
                                    <div class="push-10-t">
                                        <a class="item item-rounded push-10-r bg-info" data-toggle="tooltip" title="MyPanel" href="javascript:void(0)">
                                            <i class="si si-rocket text-white-op"></i>
                                        </a>
                                        <a class="item item-rounded push-10-r bg-amethyst" data-toggle="tooltip" title="Project Time" href="javascript:void(0)">
                                            <i class="si si-calendar text-white-op"></i>
                                        </a>
                                        <a class="item item-rounded push-10-r bg-city" data-toggle="tooltip" title="iDashboard" href="javascript:void(0)">
                                            <i class="si si-speedometer text-white-op"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- END Generic Notification -->

                            <!-- Twitter Notification -->
                            <li>
                                <div class="list-timeline-time">12 hrs ago</div>
                                <i class="fa fa-twitter list-timeline-icon bg-info"></i>
                                <div class="list-timeline-content">
                                    <p class="font-w600">+ 1150 Followers</p>
                                    <p class="font-s13">You’re getting more and more followers, keep it up!</p>
                                </div>
                            </li>
                            <!-- END Twitter Notification -->

                            <!-- System Notification -->
                            <li>
                                <div class="list-timeline-time">1 day ago</div>
                                <i class="fa fa-database list-timeline-icon bg-smooth"></i>
                                <div class="list-timeline-content">
                                    <p class="font-w600">Database backup completed!</p>
                                    <p class="font-s13">Download the <a href="javascript:void(0)">latest backup</a>.</p>
                                </div>
                            </li>
                            <!-- END System Notification -->

                            <!-- Social Notification -->
                            <li>
                                <div class="list-timeline-time">2 days ago</div>
                                <i class="fa fa-user-plus list-timeline-icon bg-success"></i>
                                <div class="list-timeline-content">
                                    <p class="font-w600">+ 5 Friend Requests</p>
                                    <ul class="nav-users push-10-t push">
                                        <li>
                                            <a href="base_pages_profile.html">
                                                <img class="img-avatar" src="{{asset('/img/avatars/avatar4.jpg')}}" alt="">
                                                <i class="fa fa-circle text-success"></i> Amanda Powell
                                                <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="base_pages_profile.html">
                                                <img class="img-avatar" src="{{asset('/img/avatars/avatar11.jpg')}}" alt="">
                                                <i class="fa fa-circle text-success"></i> Eric Lawson
                                                <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="base_pages_profile.html">
                                                <img class="img-avatar" src="{{asset('/img/avatars/avatar1.jpg')}}" alt="">
                                                <i class="fa fa-circle text-warning"></i> Emma Cooper
                                                <div class="font-w400 text-muted"><small>Photographer</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="base_pages_profile.html">
                                                <img class="img-avatar" src="{{asset('/img/avatars/avatar15.jpg')}}" alt="">
                                                <i class="fa fa-circle text-warning"></i> Eugene Burke
                                                <div class="font-w400 text-muted"><small>Copywriter</small></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="base_pages_profile.html">
                                                <img class="img-avatar" src="{{asset('/img/avatars/avatar15.jpg')}}" alt="">
                                                <i class="fa fa-circle text-danger"></i> Ethan Howard
                                                <div class="font-w400 text-muted"><small>UI Designer</small></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- END Social Notification -->

                            <!-- System Notification -->
                            <li>
                                <div class="list-timeline-time">1 week ago</div>
                                <i class="fa fa-cog list-timeline-icon bg-primary-dark"></i>
                                <div class="list-timeline-content">
                                    <p class="font-w600">System updated to v2.02</p>
                                    <p class="font-s13">Check the complete changelog at the <a href="javascript:void(0)">activity page</a>.</p>
                                </div>
                            </li>
                            <!-- END System Notification -->

                            <!-- Generic Notification -->
                            <li>
                                <div class="list-timeline-time">2 weeks ago</div>
                                <i class="fa fa-briefcase list-timeline-icon bg-modern"></i>
                                <div class="list-timeline-content">
                                    <p class="font-w600">1 New Product was added!</p>
                                    <div class="push-10-t">
                                        <a class="item item-rounded push-10-r bg-modern" data-toggle="tooltip" title="eSettings" href="javascript:void(0)">
                                            <i class="si si-settings text-white-op"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- END Generic Notification -->

                            <!-- System Notification -->
                            <li>
                                <div class="list-timeline-time">2 months ago</div>
                                <i class="fa fa-cog list-timeline-icon bg-primary-dark"></i>
                                <div class="list-timeline-content">
                                    <p class="font-w600">System updated to v2.01</p>
                                    <p class="font-s13">Check the complete changelog at the <a href="javascript:void(0)">activity page</a>.</p>
                                </div>
                            </li>
                            <!-- END System Notification -->
                        </ul>
                    </div>
                </div>
                <!-- END Timeline -->
            </div>
            <div class="col-sm-5 col-lg-4">
                <!-- Products -->
                <div class="block">
                    <div class="block-header bg-gray-lighter">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title"><i class="si si-badge"></i> Badges</h3>
                    </div>
                    <div class="block-content">
                        <ul class="list list-simple list-li-clearfix">
                            <li>
                                <a class="item item-rounded pull-left push-10-r bg-info" href="javascript:void(0)">
                                    <i class="si si-rocket text-white-op"></i>
                                </a>
                                <h5 class="push-10-t">MyPanel</h5>
                                <div class="font-s13">Responsive App Template</div>
                            </li>
                            <li>
                                <a class="item item-rounded pull-left push-10-r bg-amethyst" href="javascript:void(0)">
                                    <i class="si si-calendar text-white-op"></i>
                                </a>
                                <h5 class="push-10-t">Project Time</h5>
                                <div class="font-s13">Web application</div>
                            </li>
                            <li>
                                <a class="item item-rounded pull-left push-10-r bg-danger" href="javascript:void(0)">
                                    <i class="si si-speedometer text-white-op"></i>
                                </a>
                                <h5 class="push-10-t">iDashboard</h5>
                                <div class="font-s13">Bootstrap Admin Template</div>
                            </li>
                        </ul>
                        <div class="text-center push">
                            <small><a href="javascript:void(0)">View More..</a></small>
                        </div>
                    </div>
                </div>
                <!-- END Products -->

                <!-- Ratings -->
                <div class="block">
                    <div class="block-header bg-gray-lighter">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title"><i class="fa fa-fw fa-pencil"></i> Scouting Report</h3>
                    </div>
                    <div class="block-content">
                        <ul class="list list-simple">
                            <li>
                                <div class="push-5 clearfix">
                                    <div class="text-warning pull-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <a class="font-w600" href="base_pages_profile.html">Ethan Howard</a>
                                    <span class="text-muted">(5/5)</span>
                                </div>
                                <div class="font-s13">Flawless design execution! I'm really impressed with the product, it really helped me build my app so fast! Thank you!</div>
                            </li>
                            <li>
                                <div class="push-5 clearfix">
                                    <div class="text-warning pull-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <a class="font-w600" href="base_pages_profile.html">Megan Dean</a>
                                    <span class="text-muted">(5/5)</span>
                                </div>
                                <div class="font-s13">Great value for money and awesome support! Would buy again and again! Thanks!</div>
                            </li>
                            <li>
                                <div class="push-5 clearfix">
                                    <div class="text-warning pull-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <a class="font-w600" href="base_pages_profile.html">Scott Ruiz</a>
                                    <span class="text-muted">(5/5)</span>
                                </div>
                                <div class="font-s13">Working great in all my devices, quality and quantity in a great package! Thank you!</div>
                            </li>
                        </ul>
                        <div class="text-center push">
                            <small><a href="javascript:void(0)">Read More..</a></small>
                        </div>
                    </div>
                </div>
                <!-- END Ratings -->

                <!-- Followers -->
                <div class="block">
                    <div class="block-header bg-gray-lighter">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title"><i class="fa fa-fw fa-share-alt"></i> Teammates</h3>
                    </div>
                    <div class="block-content">
                        <ul class="nav-users push">
                            <li>
                                <a href="base_pages_profile.html">
                                    <img class="img-avatar" src="{{asset('/img/avatars/avatar15.jpg')}}" alt="">
                                    <i class="fa fa-circle text-success"></i> Dennis Ross
                                    <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                </a>
                            </li>
                            <li>
                                <a href="base_pages_profile.html">
                                    <img class="img-avatar" src="{{asset('/img/avatars/avatar3.jpg')}}" alt="">
                                    <i class="fa fa-circle text-success"></i> Laura Bell
                                    <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                </a>
                            </li>
                            <li>
                                <a href="base_pages_profile.html">
                                    <img class="img-avatar" src="{{asset('/img/avatars/avatar1.jpg')}}" alt="">
                                    <i class="fa fa-circle text-warning"></i> Tiffany Kim
                                    <div class="font-w400 text-muted"><small>Photographer</small></div>
                                </a>
                            </li>
                        </ul>
                        <div class="text-center push">
                            <small><a href="javascript:void(0)">Load More..</a></small>
                        </div>
                    </div>
                </div>
                <!-- END Followers -->
            </div>
        </div>
    <!-- END Page Content -->

@endsection

@section('page-js')

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->

        <script src="{{URL::asset('/js/core/jquery.min.js')}}"></script>
        <script src="{{URL::asset('/js/core/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('/js/core/jquery.slimscroll.min.js')}}"></script>
        <script src="{{URL::asset('/js/core/jquery.scrollLock.min.js')}}"></script>
        <script src="{{URL::asset('/js/core/jquery.appear.min.js')}}"></script>
        <script src="{{URL::asset('/js/core/jquery.countTo.min.js')}}"></script>
        <script src="{{URL::asset('/js/core/jquery.placeholder.min.js')}}"></script>
        <script src="{{URL::asset('/js/core/js.cookie.min.js')}}"></script>

        <!-- Page JS Plugins -->
        <script src="{{URL::asset('/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{URL::asset('/js/plugins/easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
        <script src="{{URL::asset('/js/plugins/chartjs/Chart.min.js')}}"></script>
        <script src="{{URL::asset('/js/plugins/flot/jquery.flot.min.js')}}"></script>
        <script src="{{URL::asset('/js/plugins/flot/jquery.flot.pie.min.js')}}"></script>
        <script src="{{URL::asset('/js/plugins/flot/jquery.flot.stack.min.js')}}"></script>
        <script src="{{URL::asset('/js/plugins/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{URL::asset('/js/plugins/jquery-raty/jquery.raty.min.js')}}"></script>

        <!-- Page JS Code -->
        <script src="{{ URL::asset('/js/pages/base_comp_charts.js') }}"></script>
        <script src="{{ URL::asset('/js/pages/base_comp_rating.js') }}"></script>
        <script src="{{ URL::asset('/js/pages/base_pages_ecom_dashboard.js') }}"></script>
        <script>
            jQuery(function () {
                // Init page helpers (Easy Pie Chart plugin)
                App.initHelpers('easy-pie-chart');
                // Init page helpers (Appear + CountTo plugins)
                App.initHelpers(['appear', 'appear-countTo']);
            });
        </script>

@endsection
