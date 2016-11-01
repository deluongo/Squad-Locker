@extends('layouts.interface')


@section('title')
    '$gamertag's Locker'
@endsection

@section('block-header')
        Stream
@endsection


@section('main')
<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Locker Stream <small>Keep tabs on the 2K community</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Timeline</li>
                <li>2K Community</li>
                <li><a class="link-effect" href="">Team</a></li>
                <li>Player</li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Timelines Row -->
    <div class="row">
        <div class="col-lg-6">
            <!-- Icon Based -->
            <h2 class="content-heading">Icon Based</h2>
            <div class="block block-themed">
                <div class="block-header bg-primary">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                        </li>
                    </ul>
                    <h3 class="block-title">News</h3>
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

                        <!-- Photo Notification -->
                        <li>
                            <div class="list-timeline-time">4 hrs ago</div>
                            <i class="fa fa-picture-o list-timeline-icon bg-flat"></i>
                            <div class="list-timeline-content">
                                <p class="font-w600">+ 3 New Photos</p>
                                <p class="font-s13">Travel hacks and ideas!</p>
                                <!-- Gallery (.js-gallery class is initialized in App() -> uiHelperMagnific()) -->
                                <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                                <div class="row items-push js-gallery">
                                    <div class="col-sm-6 col-lg-4">
                                        <a class="img-link" href="assets/img/photos/photo2@2x.jpg">
                                            <img class="img-responsive" src="assets/img/photos/photo2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <a class="img-link" href="assets/img/photos/photo8@2x.jpg">
                                            <img class="img-responsive" src="assets/img/photos/photo8.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <a class="img-link" href="assets/img/photos/photo16@2x.jpg">
                                            <img class="img-responsive" src="assets/img/photos/photo16.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- END Photos Notification -->

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
                                <p class="font-w600">+ 3 Friend Requests</p>
                                <ul class="nav-users push-10-t push">
                                    <li>
                                        <a href="base_pages_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar7.jpg" alt="">
                                            <i class="fa fa-circle text-success"></i> Lisa Gordon
                                            <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="base_pages_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                                            <i class="fa fa-circle text-success"></i> Roger Hart
                                            <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="base_pages_profile.html">
                                            <img class="img-avatar" src="assets/img/avatars/avatar2.jpg" alt="">
                                            <i class="fa fa-circle text-success"></i> Rebecca Reid
                                            <div class="font-w400 text-muted"><small>Photographer</small></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- END Social Notification -->

                        <!-- Photo Notification -->
                        <li>
                            <div class="list-timeline-time">6 days ago</div>
                            <i class="fa fa-picture-o list-timeline-icon bg-flat"></i>
                            <div class="list-timeline-content">
                                <p class="font-w600">+ 2 New Photos</p>
                                <p class="font-s13">Went hiking and had a great time!</p>
                                <!-- Gallery (.js-gallery class is initialized in App() -> uiHelperMagnific()) -->
                                <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                                <div class="row items-push js-gallery">
                                    <div class="col-sm-6 col-lg-4">
                                        <a class="img-link" href="assets/img/photos/photo13@2x.jpg">
                                            <img class="img-responsive" src="assets/img/photos/photo13.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <a class="img-link" href="assets/img/photos/photo14@2x.jpg">
                                            <img class="img-responsive" src="assets/img/photos/photo14.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- END Photo Notification -->

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
                    </ul>
                </div>
            </div>
            <!-- END Icon Based -->

            <!-- Activity Timeline -->
            <h2 class="content-heading">Activity Timeline</h2>
            <div class="block">
                <div class="block-content">
                    <ul class="list list-activity push">
                        <li>
                            <i class="si si-wallet text-success"></i>
                            <div class="font-w600">New sale ($15)</div>
                            <div><a href="javascript:void(0)">Admin Template</a></div>
                            <div><small class="text-muted">3 min ago</small></div>
                        </li>
                        <li>
                            <i class="si si-pencil text-info"></i>
                            <div class="font-w600">You edited the file</div>
                            <div><a href="javascript:void(0)"><i class="fa fa-file-text-o"></i> Documentation.doc</a></div>
                            <div><small class="text-muted">15 min ago</small></div>
                        </li>
                        <li>
                            <i class="si si-plus text-success"></i>
                            <div class="font-w600">New user</div>
                            <div><a href="javascript:void(0)">StudioWeb - View Profile</a></div>
                            <div><small class="text-muted">2 hours ago</small></div>
                        </li>
                        <li>
                            <i class="si si-close text-danger"></i>
                            <div class="font-w600">Project deleted</div>
                            <div><a href="javascript:void(0)">Line Icon Set</a></div>
                            <div><small class="text-muted">4 hours ago</small></div>
                        </li>
                        <li>
                            <i class="si si-wrench text-warning"></i>
                            <div class="font-w600">Core v2.5 is available</div>
                            <div><a href="javascript:void(0)">Update now</a></div>
                            <div><small class="text-muted">6 hours ago</small></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Activity Timeline -->
        </div>
        <div class="col-lg-6">
            <!-- Block Based -->
            <h2 class="content-heading">Block Based</h2>
            <div class="block block-themed">
                <div class="block-header bg-amethyst">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Timeline</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- Facebook Notification -->
                    <div class="block block-transparent pull-r-l">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <span><em class="text-muted">3 hrs ago</em></span>
                                </li>
                                <li>
                                    <span><i class="fa fa-facebook text-primary"></i></span>
                                </li>
                            </ul>
                            <h3 class="block-title">+ 290 Page Likes</h3>
                        </div>
                        <div class="block-content">
                            <p class="font-s13">This is great, keep it up!</p>
                        </div>
                    </div>
                    <!-- END Facebook Notification -->

                    <!-- Photo Notification -->
                    <div class="block block-transparent pull-r-l">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <span><em class="text-muted">4 hrs ago</em></span>
                                </li>
                                <li>
                                    <span><i class="fa fa-picture-o text-danger"></i></span>
                                </li>
                            </ul>
                            <h3 class="block-title">+ 3 New Photos</h3>
                        </div>
                        <div class="block-content">
                            <p class="font-s13">Travel hacks and ideas!</p>
                            <!-- Gallery (.js-gallery class is initialized in App() -> uiHelperMagnific()) -->
                            <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                            <div class="row items-push js-gallery">
                                <div class="col-sm-6 col-lg-4">
                                    <a class="img-link" href="assets/img/photos/photo2@2x.jpg">
                                        <img class="img-responsive" src="assets/img/photos/photo2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <a class="img-link" href="assets/img/photos/photo8@2x.jpg">
                                        <img class="img-responsive" src="assets/img/photos/photo8.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <a class="img-link" href="assets/img/photos/photo16@2x.jpg">
                                        <img class="img-responsive" src="assets/img/photos/photo16.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Photo Notification -->

                    <!-- Twitter Notification -->
                    <div class="block block-transparent pull-r-l">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <span><em class="text-muted">12 hrs ago</em></span>
                                </li>
                                <li>
                                    <span><i class="fa fa-twitter text-info"></i></span>
                                </li>
                            </ul>
                            <h3 class="block-title">+ 1150 Followers</h3>
                        </div>
                        <div class="block-content">
                            <p class="font-s13">You’re getting more and more followers, keep it up!</p>
                        </div>
                    </div>
                    <!-- END Twitter Notification -->

                    <!-- System Notification -->
                    <div class="block block-transparent pull-r-l">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <span><em class="text-muted">1 day ago</em></span>
                                </li>
                                <li>
                                    <span><i class="fa fa-database text-warning"></i></span>
                                </li>
                            </ul>
                            <h3 class="block-title">Database backup completed!</h3>
                        </div>
                        <div class="block-content">
                            <p class="font-s13">Download the <a href="javascript:void(0)">latest backup</a>.</p>
                        </div>
                    </div>
                    <!-- END System Notification -->

                    <!-- Social Notification -->
                    <div class="block block-transparent pull-r-l">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <span><em class="text-muted">2 days ago</em></span>
                                </li>
                                <li>
                                    <span><i class="fa fa-user-plus text-success"></i></span>
                                </li>
                            </ul>
                            <h3 class="block-title">+ 3 Friend Requests</h3>
                        </div>
                        <div class="block-content">
                            <ul class="nav-users push">
                                <li>
                                    <a href="base_pages_profile.html">
                                        <img class="img-avatar" src="assets/img/avatars/avatar1.jpg" alt="">
                                        <i class="fa fa-circle text-success"></i> Ashley Welch
                                        <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="base_pages_profile.html">
                                        <img class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                                        <i class="fa fa-circle text-success"></i> Eric Lawson
                                        <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="base_pages_profile.html">
                                        <img class="img-avatar" src="assets/img/avatars/avatar1.jpg" alt="">
                                        <i class="fa fa-circle text-success"></i> Emma Cooper
                                        <div class="font-w400 text-muted"><small>Photographer</small></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Social Notification -->

                    <!-- Photo Notification -->
                    <div class="block block-transparent pull-r-l">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <span><em class="text-muted">6 days ago</em></span>
                                </li>
                                <li>
                                    <span><i class="fa fa-picture-o text-danger"></i></span>
                                </li>
                            </ul>
                            <h3 class="block-title">+ 3 New Photos</h3>
                        </div>
                        <div class="block-content">
                            <p class="font-s13">Went hiking and had a great time!</p>
                            <!-- Gallery (.js-gallery class is initialized in App() -> uiHelperMagnific()) -->
                            <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                            <div class="row items-push js-gallery">
                                <div class="col-sm-6 col-lg-4">
                                    <a class="img-link" href="assets/img/photos/photo13@2x.jpg">
                                        <img class="img-responsive" src="assets/img/photos/photo13.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <a class="img-link" href="assets/img/photos/photo14@2x.jpg">
                                        <img class="img-responsive" src="assets/img/photos/photo14.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Photo Notification -->

                    <!-- System Notification -->
                    <div class="block block-transparent pull-r-l">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <span><em class="text-muted">1 week ago</em></span>
                                </li>
                                <li>
                                    <span><i class="fa fa-cog text-primary-dark"></i></span>
                                </li>
                            </ul>
                            <h3 class="block-title">System updated to v2.02</h3>
                        </div>
                        <div class="block-content">
                            <p class="font-s13">Check the complete changelog at the <a href="javascript:void(0)">activity page</a>.</p>
                        </div>
                    </div>
                    <!-- END System Notification -->
                </div>
            </div>
            <!-- END Block Based -->
        </div>
    </div>
    <!-- END Timelines Row -->
</div>
<!-- END Page Content -->
@endsection

@section('apps')

        <!-- Apps Modal -->
        <!-- Opens from the button in the header -->
        <div class="modal fade" id="apps-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-sm modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <!-- Apps Block -->
                    <div class="block block-themed block-transparent">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">Apps</h3>
                        </div>
                        <div class="block-content">
                            <div class="row text-center">
                                <div class="col-xs-6">
                                    <a class="block block-rounded" href="base_pages_dashboard.html">
                                        <div class="block-content text-white bg-default">
                                            <i class="si si-speedometer fa-2x"></i>
                                            <div class="font-w600 push-15-t push-15">Backend</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="block block-rounded" href="frontend_home.html">
                                        <div class="block-content text-white bg-modern">
                                            <i class="si si-rocket fa-2x"></i>
                                            <div class="font-w600 push-15-t push-15">Frontend</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Apps Block -->
                </div>
            </div>
        </div>
        <!-- END Apps Modal -->
@endsection

@section('js')

@endsection
