@extends('layouts.interface')


@section('title')
    {{ Auth::user()->name }}'s Locker
@endsection

@section('block-header')
        My Player
@endsection

@section('main')

    <!-- Page Header -->
    <div class="content bg-image" style="background-image: url({{$player_bg_pic}})">
        <div class="push-100-t push-15 clearfix">
            <a href="/player/{{Auth::user()->name}}">
                <div class="btn-group pull-right">
                    <div class="btn btn-primary btn-lg push-50-t push-5-r pull-right" type="button"><i class="fa fa-plus"></i> View Profile</div>
                </div>
            </a>
            <div class="push-15-r pull-left animated zoomInRight">
                <div class="js-pie-chart pie-chart" data-percent="{{$overall_talent_score}}" data-line-width="3" data-size="100" data-bar-color="{{$progress_chart_color}}" data-track-color="#eeeeee" data-scale-color="#dddddd">
                    <span>
                        <img class="img-avatar" src="{{asset($player_profile_pic)}}" alt="">
                    </span>
                </div>
            </div>
            <h1 class="h2 text-white push-10-t animated zoomIn">{{ $name }}</h1>
            <h2 class="h4 text-white-op animated zoomIn">{{ $position }} | {{ $archetype }} | {{ $archetype2}}  </h2>
            <p class="font-w300 text-muted text-white-op animated zoomIn"><em>{{ $tagline }}</em></p>
        </div>
    </div>
    <!-- END Page Header -->

    <!-- Page Content -->
    <div class="content content-boxed">



        <div class="row">

            <!-- Roster Moves -->
            <div class="col-xs-12">
               <div class="block">
                  <!-- Header -->
                 <div class="block-header bg-gray-lighter">
                     <ul class="block-options">
                         <li>
                             <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                         </li>
                         <li>
                             <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-plus"></i></button>
                         </li>
                     </ul>
                     <h3 class="block-title"> <span class="badge @if(sizeof($teams_that_send_you_a_squad_invite)>0 || sizeof($teams_that_send_you_a_squad_invite)>0) badge-danger @endif "><i class="fa fa-fw fa-exclamation-triangle"></i></span>  Scouting Report </h3>
                 </div>
                 <!-- Tab Nav -->
                  <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs">
                     <li class="@if(sizeof($teams_that_send_you_a_squad_invite)>0) active @endif">
                        <a href="#myplayer-tabs-incoming-player-invites"><i class="fa fa-home"></i> Squad Invites @if(sizeof($teams_that_send_you_a_squad_invite)>0)<span id="invite-request" class="label h6 label-info pull-right push-25-r">{{sizeof($teams_that_send_you_a_squad_invite)}} New</span>@endif</a>
                     </li>
                     <li class="@if(sizeof($teams_that_send_you_a_squad_invite)==0 && sizeof($players_that_requested_to_join_your_team)>0) active @endif">
                        <a href="#myplayer-tabs-incoming-player-requests"><i class="fa fa-pencil"></i> Player Requests</a>
                     </li>
                     <li class="@if(sizeof($teams_that_send_you_a_squad_invite)==0 && sizeof($players_that_requested_to_join_your_team)==0) active @endif">
                        <a href="#myplayer-tabs-scouting-report-central"><i class="fa fa-cog"></i> Scouting Report</a>
                     </li>
                  </ul>
                   <!-- 3 Tabs -->
                  <div class="block-content tab-content remove-margin remove-padding">
                     <!-- Invite Manager Tab -->
                     <div class="tab-pane @if(sizeof($teams_that_send_you_a_squad_invite)>0) active @endif bg-hover-color" id="myplayer-tabs-incoming-player-invites">
                        <div class="row push-0">
                           @foreach($teams_that_send_you_a_squad_invite as $team)
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                              <div class="block remove-margin margin-20-t">
                                 <div class="block-header">
                                    <h3 class="block-title center">{{$team->name}}</h3>
                                 </div>
                                 <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                    <div class="flipper">
                                        <div class="front">
                                           <div class="text-center bg-image fill-container parent" style="background-image: url({{$team->team_bg_pic}})">
                                              <div class="child remove-padding full-width">
                                                 <img class="img-avatar img-avatar96 img-avatar-thumb" src={{$team->team_profile_pic}} alt="">
                                                 <h2 class="h4 text-white-op">{{ $team->affiliation }} | {{ $team->offense }} | {{ $team->defense }} </h2>
                                              </div>
                                           </div>
                                        </div>
                                       <div class="back bg-hover-color">
                                          <!-- 1radar qwer -->
                                          <!-- <h1>{{var_dump(${'Chart'.$team->id})}}</h1> -->
                                          {{-- This hidden field holds the data so it's available for JS --}}
                                          <input type='hidden' name='chart_data' value='{{ json_encode(${'Chart'.$team->id}) }}'>
                                          <canvas id="myChart" class="center-chart padding-10-v push-20 push-10-t"></canvas>
                                       </div>

                                    </div>
                                 </div>
                                 <div class="text-center">
                                    <div class="row items-push">
                                       <!-- formy -->
                                       <form method='POST' id='acceptForm'>
                                          <input type="hidden" name="acceptInvite" id="acceptInvite" value='yes'>
                                          <input type="hidden" name="inviTeam" id="inviTeam" value='{{$team->id}}'>
                                          <div class="col-xs-6 remove-margin remove-padding-r" name="acceptSubmit" id="acceptSubmit" onClick="submitOnClick('myForm')">
                                             <a class="block block-link-hover2 text-center remove-margin" href="javascript:void(0)">
                                                <div class="padding-15-h padding-20-v">
                                                   <i class="si si-check fa-2x text-success"></i>
                                                </div>
                                             </a>
                                          </div>
                                       </form>

                                       <div class="col-xs-6 remove-margin remove-padding-l">
                                          <a class="block block-link-hover2 text-center remove-margin" href="javascript:void(0)">
                                             <div class="padding-15-h padding-20-v">
                                                <i class="si si-close fa-2x text-danger"></i>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div >
                                    <div id='testdiv'>
                                    </div>
                                 </div>

                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                     <!-- Requests Tracker -->
                     <div class="tab-pane @if(sizeof($teams_that_send_you_a_squad_invite)==0 && sizeof($players_that_requested_to_join_your_team)>0) active @endif" id="myplayer-tabs-incoming-player-requests">

                           <canvas id="myChart2" width="400" height="400"></canvas>

                     </div>
                     <!-- Scouting Report -->
                     <div class="tab-pane @if(sizeof($teams_that_send_you_a_squad_invite)==0 && sizeof($players_that_requested_to_join_your_team)==0) active @endif" id="myplayer-tabs-scouting-report-central">
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
                  </div>
               </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-12 col-lg-4">
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
                        <h3 class="block-title"><i class="fa fa-binoculars"></i> Play Style</h3>
                    </div>
                    <div class="block-content">
                        <div class="bg-image" style="background-image: url({{asset('/img/player_types/catch_n_shoot2.png')}})">
                            <div class="bg-black-op">
                                <div class="block block-themed block-transparent play-style-margin">
                                    <div class="block-header" id="bg-block-header">
                                        <ul class="block-options">
                                            <li>
                                                <a href="/update" class="button"><i class="si si-settings"></i></a>
                                            </li>
                                        </ul>
                                        <h3 class="block-title"> {{ $type }}</h3>
                                    </div>
                                    <div class="block-content block-content-full text-center" id="bg-block-content-two">
                                        <a class="h1 font-w300 text-white" href="javascript:void(0)">{{ $style }}</a><br />
                                        <a class="h5 font-w300 text-white" href="javascript:void(0)">{{ $role }}</a>
                                        <div class="row push-20-t push-5">
                                            <span class="h4 text-muted text-white pull-left">{{ $rep_level }}</span>
                                        </div>
                                        <div class="row pull-b">
                                            <div class="progress progress-mini pull-b">
                                                <div class="progress-bar progress-bar-{{$progress_bar_color}}" role="progressbar" aria-valuenow="{{ $rep_progress }}" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix push-10 social-margin">
                                        <div class="social-buttons remove-margin-r remove-margin-l pull-b">
                                            <a href="{{ $youtube }}" target="_blank" class="social-button youtube">
                                                <i class="fa fa-youtube-play"></i>
                                            </a>
                                            <a href="{{ $twitter }}" target="_blank" class="social-button twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="{{ $twitch }}" target="_blank" class="social-button twitch">
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
            <div class="col-xs-12 col-lg-8 clearfix">
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
                      <h3 class="block-title"><i class="fa fa-bar-chart"></i> Stats</h3>
                  </div>
                  <div class="block-content remove-margin-b">
                      <div class="content-grid">
                              <div class="row">
                                  <div class="col-xs-3">
                                      <div class="block block-themed margin-stats-b">
                                          <div class="block-header bg-{{$team_grade_color}} sm-padding">
                                              <h3 class="block-title">Teammate</h3>
                                          </div>
                                          <div class="block-content sm-padding">
                                              <span class="label label-warning clear label-margin label-shrink">7 votes</span>
                                              <h1 class="text-{{ $team_grade_color}} center grade-margin">{{ $team_grade }}</h1>
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
                                            <form action="/update" method="post">
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
                                            </form>
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

            <div class="row">
                <!-- Teammates -->
                <div class="col-xs-12 col-md-6">
                   <div class="block">
                      <div class="block-header bg-gray-lighter">
                         <ul class="block-options">
                            <li>
                               <button type="button" data-toggle="block-option" data-action="" data-action-mode="demo"><i class="si si-plus"></i></button>
                            </li>
                         </ul>
                         <h3 class="block-title"><i class="fa fa-fw fa-share-alt"></i> Teammates</h3>
                      </div>
                      <div class="block-content">
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
                </div>
                <!-- END Teammates -->

                <!-- Teams -->
                <div class="col-xs-12 col-md-6">
                    <div class="block">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="[]" data-action-mode="demo"><i class="si si-plus"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title"><i class="fa fa-fw fa-dribbble"></i> Teams</h3>
                        </div>
                        <div class="block-content">
                            <h5>Owned</h5>
                            <ul class="nav-users push">
                                @foreach($teams_owned as $team)
                                    <li>
                                        <a href="/team/{{$team->name}}">
                                            <img class="img-avatar" src="{{$team->team_profile_pic}}" alt="Profile Picture">
                                            <i class="fa fa-circle text-{{$team->progress_bar_color}}"></i> <div class="font-18px font-w400">{{ $team->name }} <span class="text-{{$team->progress_bar_color}}"> ({{ $team->wins }} - {{ $team->losses }}) </span></div>
                                            <div class="font-w400 text-muted h5"> <span class="text-{{$team->team_grade_color}}"> {{ $team->team_grade }} </span> | <span class="text-{{$team->skill_grade_color}}"> {{  $team->skill_grade }}</span> | <span class="text-{{$team->per_color}}"> {{ $team->per }} <small><small><small>PER</small></small></small></span>  | <span class="text-{{$team->ppg_color}}"> {{ $team->ppg }} <small><small><small>PPG</small></small></small></span>  | <span class="text-{{$team->apg_color}}"> {{ $team->apg }} <small><small><small>APG</small></small></small></span></div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <h5>Signed</h5>
                            <ul class="nav-users push">
                                @foreach($teams_on as $team)
                                    <li>
                                        <a href="/team/{{$team->name}}">
                                            <img class="img-avatar" src="{{$team->team_profile_pic}}" alt="Profile Picture">
                                            <i class="fa fa-circle text-{{$team->progress_bar_color}}"></i> <div class="font-18px font-w400">{{ $team->name }} <span class="text-{{$team->progress_bar_color}}"> ({{ $team->wins }} - {{ $team->losses }}) </span> </div>
                                            <div class="font-w400 text-muted h5"> <span class="text-{{$team->team_grade_color}}"> {{ $team->team_grade }} </span> | <span class="text-{{$team->skill_grade_color}}"> {{  $team->skill_grade }}</span> | <span class="text-{{$team->per_color}}"> {{ $team->per }} <small><small><small>PER</small></small></small></span>  | <span class="text-{{$team->ppg_color}}"> {{ $team->ppg }} <small><small><small>PPG</small></small></small></span>  | <span class="text-{{$team->apg_color}}"> {{ $team->apg }} <small><small><small>APG</small></small></small></span></div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- END Teamms -->
                </div>
            </div>

        </div>
<!-- END Page Content -->

@endsection

@section('page-js')


        <!-- Page JS Plugins -->
        <script src="{{URL::asset('/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{URL::asset('/js/plugins/easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.bundle.min.js"></script>
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

            Chart.defaults.global.legend.display = false;

            // Get the book data from the hidden form
            var chart_data = $('input[name=chart_data]').val();

            // Convert the JSON string to a Object
            //book = JSON.parse(book);

            // Demonstrate it works
            //alert('Book title: ' + book['title']);

            var radar_data = {
               labels: ["PER", "PPG", "APG", "FG%", "APG/PPG", "RPG", "REP"],
               datasets: [
                   {

                      backgroundColor: "rgba(253,180,93,0.8)",
                      borderColor: "rgba(253,180,93,1)",
                      pointBackgroundColor: "rgba(253,180,93,1)",
                      pointBorderColor: "#fff",
                      pointHoverBackgroundColor: "#fff",
                      pointHoverBorderColor: "rgba(253,180,93,1)",
                      data: JSON.parse(chart_data)
                   },

                ]
            };
            var ctx = document.getElementById("myChart");
            var Chart3 = new Chart(ctx, {
               type: "radar",
               data: radar_data,
               options: {
                  responsive: true
               },
               options: {
                       scale: {
                           reverse: false,
                           ticks: {
                                beginAtZero: true
                           }
                       }
               }
            });


            var ctx = document.getElementById("myChart2");
            var radar_data2 = {
                labels: ["PER", "PPG", "APG", "FG%", "APG/PPG", "RPG", "Rep"],
                datasets: [
                    {
                       label: "Player Stats",
                       backgroundColor: "rgba(253,180,93,0.8)",
                       borderColor: "rgba(253,180,93,1)",
                       pointBackgroundColor: "rgba(253,180,93,1)",
                       pointBorderColor: "#fff",
                       pointHoverBackgroundColor: "#fff",
                       pointHoverBorderColor: "rgba(253,180,93,1)",
                       data: [65, 59, 90, 81, 56, 55, 40]
                    },
                    {
                       label: "Skill Adjusted Stats",
                       backgroundColor: "rgba(237,140,125,0.8)",
                       borderColor: "rgba(237,140,125,1)",
                       pointBackgroundColor:  "rgba(237,140,125,1)",
                       pointBorderColor: "#fff",
                       pointHoverBackgroundColor: "#fff",
                       pointHoverBorderColor:  "rgba(237,140,125,1)",
                       data: [22, 49, 30, 24, 19, 65, 42]
                    },
                    {
                       label: "Teammate Adjusted Stats",
                       backgroundColor: "rgba(117,203,207,0.8)",
                       borderColor: "rgba(117,203,207,1)",
                       pointBackgroundColor:  "rgba(117,203,207,1)",
                       pointBorderColor: "#fff",
                       pointHoverBackgroundColor: "#fff",
                       pointHoverBorderColor:  "rgba(117,203,207,1)",
                       data: [99, 74, 22, 7, 4, 2, 92]
                    }

                ]
            };

             var myChart2 = new Chart(ctx, {
                type: "radar",
                data: radar_data2,
                options: {
                   responsive: true
                },
                options: {
                        scale: {
                            reverse: false,
                            ticks: {
                                 beginAtZero: true
                            }
                        }
                }
             });
        </script>

        <script src="/js/ajax/playerchart.js"></script>

@endsection
