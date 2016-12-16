@extends('layouts.interface')


@section('title')
    Team {{$name}}
@endsection

@section('block-header')
        My Team
@endsection

@section('main')

    <!-- Page Header -->
    <div class="content bg-image" style="background-image: url({{asset($team_bg_pic)}})">
        <div class="push-100-t push-15 clearfix">
            <div class="push-15-r pull-left animated zoomInRight">
                <div class="js-pie-chart pie-chart" data-percent="{{$progress_bar}}" data-line-width="3" data-size="100" data-bar-color="{{$progress_chart_color}}" data-track-color="#eeeeee" data-scale-color="#dddddd">
                    <span>
                        <img class="img-avatar" src="{{asset($team_profile_pic)}}" alt="">
                    </span>
                </div>
            </div>
            <h1 class="h2 text-white push-10-t animated zoomIn">{{ $name }} <span class="h4 text-white animated zoomIn">({{$abbreviation}})</span></h1>
            <h2 class="h4 text-white-op animated zoomIn">{{ $type }}  @if($type == "MyPark Squad") | {{$affiliation}} @endif</h2>
            <p class="font-w300 text-muted text-white-op animated zoomIn"><em>"{{ $tagline }}"</em></p>
        </div>
    </div>
    <!-- END Page Header -->

    <!-- Page Content -->
    <div class="content content-boxed">
        <div class="row">
            <div class="col-sm-4 col-sm-4 push-15 clearfix">
                <div class="block">
                    <div class="block-header bg-gray-lighter">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                            </li>
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-plus"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title"><i class="fa fa-newspaper-o"></i> Play Style</h3>
                    </div>
                    <div class="block-content">
                        <div class="bg-image play-style-height play-style-margin" style="background-image: url({{asset('/img/favicons/slasher.jpg')}})">
                            <div class="bg-black-op play-style-height">
                                <div class="block block-themed block-transparent play-style-margin">
                                    <div class="block-header" id="bg-block-header">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button"><i class="si si-settings"></i></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">{{$movement}}</h3>
                                    </div>
                                    <div class="block-content block-content-full text-center" id="bg-block-content-two">
                                        <a class="h1 font-w300 text-white" href="javascript:void(0)">{{$tempo}}</a><br />
                                        <a class="h5 font-w300 text-white" href="javascript:void(0)">{{$offense}} | {{ $defense }}</a>
                                        <div class="row push-20-t push-5">
                                            <span class="h4 text-muted text-white pull-left">{{$wins}} <span class= "h6 font-w300 text-white">wins</span></span>
                                            <span class="h4 text-muted text-white pull-right">{{$losses}} <span class= "h6 font-w300 text-white">losses</span></span>
                                        </div>
                                        <div class="row pull-b">
                                            <div class="progress progress-mini pull-b">
                                                <div class="progress-bar progress-bar-{{$progress_bar_color}}" role="progressbar" aria-valuenow="{{$progress_bar}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$progress_bar}}%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix push-10 social-margin">
                                        <div class="social-buttons remove-margin-r remove-margin-l pull-b">
                                            <a href="{{$youtube}}" target="_blank" class="social-button youtube">
                                                <i class="fa fa-youtube-play"></i>
                                            </a>
                                            <a href="{{$twitter}}" target="_blank" class="social-button twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="{{$twitch}}" target="_blank" class="social-button twitch">
                                                <i class="fa fa-twitch"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-xs-12 clearfix">
                <div class="block">
                    <div class="block-header bg-gray-lighter">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                            </li>
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-plus"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title"><i class="fa fa-newspaper-o"></i> Stats</h3>
                    </div>
                    <div class="block-content">
                        <div class="content-grid remove-margin-b">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="block block-themed margin-stats-b">
                                            <div class="block-header bg-{{$team_grade_color}} sm-padding">
                                                <h3 class="block-title">Teammate</h3>
                                            </div>
                                            <div class="block-content sm-padding">
                                                <span class="label label-warning clear label-margin label-shrink">7 votes</span>
                                                <h1 class="text-{{$team_grade_color}} center grade-margin">{{ $team_grade }}</h1>
                                            </div>
                                            <div class="js-rating center" data-precision="true" data-score="4.5">
                                                <input name="score" type="hidden" value="3.006696428571429">
                                            </div>
                                        </div>
                                        <div class="block block-themed remove-margin-b">
                                            <div class="block-header bg-{{$skill_grade_color}} clearfix">
                                                <h3 class="block-title">Ability</h3>
                                            </div>
                                            <div class="block-content">
                                                <span class="label label-danger clear label-margin label-shrink">2 votes</span>
                                                <h1 class="text-{{$skill_grade_color}} center grade-margin">{{ $skill_grade }}</h1>
                                            </div>
                                            <div class="js-rating center" data-precision="true" data-score="3" style="cursor: pointer;">
                                                <input name="score" type="hidden" value="3.006696428571429">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="block block-themed remove-margin-b">
                                            <div class="block-header bg-{{$per_color}} sm-padding">
                                                <h3 class="block-title">Efficiency</h3>
                                            </div>
                                            <div class="block-content sm-padding">
                                                <span class="label label-success clear label-margin label-shrink">+<span data-toggle="countTo" data-to="3">3</span></span>
                                                <div class="row">
                                                    <h3 class="text-{{$per_color}} center extra-pad-vert">{{ $per }}<span class="h6"> PER</span></h3>
                                                </div>
                                            </div>
                                            <div class="row text-center font-s13">
                                                <div class="col-xs-6 truth-btn">
                                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                        <i class="fa fa-thumbs-up push-5-l remove-margin-l remove-margin-r"></i>
                                                        <span class="hidden-xs">Real!</span>
                                                    </a>
                                                </div>
                                                <div class="col-xs-6 truth-btn">
                                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                        <i class="fa fa-thumbs-down push-5-l"></i>
                                                        <span class="hidden-xs">Fake</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block block-themed remove-margin-b">
                                            <div class="block-header bg-{{$fg_color}} clearfix">
                                                <h3 class="block-title">Shooting</h3>
                                            </div>
                                            <div class="block-content">
                                                <span class="label label-danger clear label-margin label-shrink">-4</span>
                                                <h3 class="text-{{$fg_color}} center  extra-pad-vert">{{ $fg }}<span class="h6"> %</span></h3>
                                            </div>
                                            <div class="row text-center font-s13">
                                                <div class="col-xs-6 truth-btn">
                                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                        <i class="fa fa-thumbs-up push-5-l remove-margin-l remove-margin-r"></i>
                                                        <span class="hidden-xs">Real!</span>
                                                    </a>
                                                </div>
                                                <div class="col-xs-6 truth-btn">
                                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                        <i class="fa fa-thumbs-down push-5-l"></i>
                                                        <span class="hidden-xs">Fake</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="block block-themed remove-margin-b">
                                            <div class="block-header bg-{{$apg_color}} sm-padding">
                                                <h3 class="block-title">Assists</h3>
                                            </div>
                                            <div class="block-content sm-padding">
                                                <span class="label label-warning clear label-margin label-shrink">
                                                    <i class="fa fa-refresh fa-spin"></i>
                                                </span>
                                                <h3 class="text-{{$apg_color}} center extra-pad-vert">{{ $apg }} <span class="h6">APG</span></h3>
                                            </div>
                                            <div class="row text-center font-s13">
                                                <div class="col-xs-6 truth-btn">
                                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                        <i class="fa fa-thumbs-up push-5-l remove-margin-l remove-margin-r"></i>
                                                        <span class="hidden-xs">Real!</span>
                                                    </a>
                                                </div>
                                                <div class="col-xs-6 truth-btn">
                                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                        <i class="fa fa-thumbs-down push-5-l"></i>
                                                        <span class="hidden-xs">Fake</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block block-themed remove-margin-b">
                                            <div class="block-header bg-{{$apg_ppg_color}} clearfix">
                                                <h3 class="block-title">APG/PPG</h3>
                                            </div>
                                            <div class="block-content">
                                                <span class="label label-warning clear label-margin label-shrink">
                                                    <i class="fa fa-refresh fa-spin"></i>
                                                </span>
                                                <h3 class="text-{{$apg_ppg_color}} center extra-pad-vert">{{ $apg_ppg }}</h3>
                                            </div>
                                            <div class="row text-center font-s13">
                                                <div class="col-xs-6 truth-btn">
                                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                        <i class="fa fa-thumbs-up push-5-l remove-margin-l remove-margin-r"></i>
                                                        <span class="hidden-xs">Real!</span>
                                                    </a>
                                                </div>
                                                <div class="col-xs-6 truth-btn">
                                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                        <i class="fa fa-thumbs-down push-5-l"></i>
                                                        <span class="hidden-xs">Fake</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="block block-themed remove-margin-b">
                                            <div class="block-header bg-{{$ppg_color}} sm-padding">
                                                <h3 class="block-title">Points</h3>
                                            </div>
                                            <div class="block-content sm-padding">
                                                <span class="label label-success clear label-margin label-shrink">+1</span>
                                                <h3 class="text-{{$ppg_color}} center extra-pad-vert">{{ $ppg }} <span class="h6">PPG</span></h3>
                                            </div>
                                            <div class="row text-center font-s13">
                                                <div class="col-xs-6 truth-btn">
                                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                        <i class="fa fa-thumbs-up push-5-l remove-margin-l remove-margin-r"></i>
                                                        <span class="hidden-xs">Real!</span>
                                                    </a>
                                                </div>
                                                <div class="col-xs-6 truth-btn">
                                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                        <i class="fa fa-thumbs-down push-5-l"></i>
                                                        <span class="hidden-xs">Fake</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block block-themed widget-height remove-margin-b">
                                            <div class="block-header bg-{{$rpg_color}} clearfix">
                                                <h3 class="block-title">Rebounds</h3>
                                            </div>
                                            <div class="block-content">
                                                <span class="label label-success clear label-margin label-shrink">+1</span>
                                                <h3 class="text-{{$rpg_color}} center  extra-pad-vert">{{ $rpg }} <span class="h6">RPG</span></h3>
                                            </div>
                                            <div class="row text-center font-s13">
                                                <div class="col-xs-6 truth-btn">
                                                    <a class="font-w600 text-gray-dark" href="javascript:void(0)">
                                                        <i class="fa fa-thumbs-up push-5-l remove-margin-l remove-margin-r"></i>
                                                        <span class="hidden-xs">Real!</span>
                                                    </a>
                                                </div>
                                                <div class="col-xs-6 truth-btn">
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
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-plus"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title"><i class="fa fa-fw fa-pencil"></i> Scouting Report</h3>
                    </div>
                    <div class="block-content">
                        <div id="disqus_thread"></div>
                            <script>

                            /**
                            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                            /*
                            var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            */
                            (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = '//p4test.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                            })();
                            </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    </div>
                </div>
                <!-- END Timeline -->
            </div>
            <div class="col-sm-5 col-lg-4">

                <!-- Teammates -->
                <div class="block">
                    <div class="block-header bg-gray-lighter">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="" data-action-mode="demo"><i class="si si-plus"></i></button>
                            </li>
                        </ul>
                        <h3 class="block-title"><i class="fa fa-fw fa-share-alt"></i> Roster</h3>
                    </div>
                    <div class="block-content">
                        <h5>Owner</h5>
                        <ul class="nav-users push">
                            <li>
                                <a href="/player/{{$owner->name}}">
                                    <img class="img-avatar" src="{{$owner->player_profile_pic}}" alt="Profile Picture">
                                    <i class="fa fa-circle text-{{$owner->profile_pic_color}}"></i> <div class="font-18px font-w400">{{ $owner->name }}</div>
                                    <div class="font-w400 text-muted h5"><span class="text-{{$owner->team_grade_color}}"> {{ $owner->team_grade }} </span> | <span class="text-{{$owner->skill_grade_color}}"> {{  $owner->skill_grade }}</span> | <span class="text-{{$owner->per_color}}"> {{ $owner->per }} <small><small><small>PER</small></small></small></span>  | <span class="text-{{$owner->ppg_color}}"> {{ $owner->ppg }} <small><small><small>PPG</small></small></small></span>  | <span class="text-{{$owner->apg_color}}"> {{ $owner->apg }} <small><small><small>APG</small></small></small></span></div>
                                </a>
                            </li>
                        </ul>
                        <h5>Players</h5>
                        <ul class="nav-users push">
                            @foreach($team_members as $player)
                                <li>
                                    <a href="/player/{{$player->name}}">
                                        <img class="img-avatar" src="{{$player->player_profile_pic}}" alt="Profile Picture">
                                        <i class="fa fa-circle text-{{$player->profile_pic_color}}"></i> <div class="font-18px font-w400">{{ $player->name }}</div>
                                        <div class="font-w400 text-muted h5"> <span class="text-{{$player->team_grade_color}}"> {{ $player->team_grade }} </span> | <span class="text-{{$player->skill_grade_color}}"> {{  $player->skill_grade }}</span> | <span class="text-{{$player->per_color}}"> {{ $player->per }} <small><small><small>PER</small></small></small></span>  | <span class="text-{{$player->ppg_color}}"> {{ $player->ppg }} <small><small><small>PPG</small></small></small></span>  | <span class="text-{{$player->apg_color}}"> {{ $player->apg }} <small><small><small>APG</small></small></small></span></div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- END Teammates -->
              </div>

              <div class="col-sm-7 col-lg-8">
                <!-- Ratings -->
                <div class="block">
                    <div class="block-header bg-gray-lighter">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="" data-action-mode="demo"><i class="si si-plus"></i></button>
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
              </div>

              <div class="col-sm-5 col-lg-4">
                <!-- Badges -->
                <div class="block">
                    <div class="block-header bg-gray-lighter">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-plus"></i></button>
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
             </div>
        </div>
    <!-- END Page Content -->


@endsection

@section('page-js')


        <!-- Page JS Plugins -->
        <script src="{{URL::asset('/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{URL::asset('/js/plugins/easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
        <script src="{{URL::asset('/js/plugins/chartjs/Chart.min.js')}}"></script>
        <script src="{{URL::asset('/js/plugins/flot/jquery.flot.min.js')}}"></script>
        <script src="{{URL::asset('/js/plugins/flot/jquery.flot.pie.min.js')}}"></script>
        <script src="{{URL::asset('/js/plugins/flot/jquery.flot.stack.min.js')}}"></script>
        <script src="{{URL::asset('/js/plugins/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{URL::asset('/js/plugins/jquery-raty/jquery.raty.min.js')}}"></script>
        <script src="{{URL::asset('/js/pages/base_comp_rating.js') }}"></script>

        <script>
            jQuery(function () {
                // Init page helpers (Easy Pie Chart plugin)
                App.initHelpers('easy-pie-chart');
                // Init page helpers (Appear + CountTo plugins)
                App.initHelpers(['appear', 'appear-countTo']);
            });
        </script>

@endsection
