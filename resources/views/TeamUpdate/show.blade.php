@extends('layouts.forms_interface')


@section('title')
    Update {{$name}}
@endsection

@section('main')
<!-- Page Content -->
<div class="content content-boxed">
    <!-- User Header -->
    <div class="block">
        <!-- Basic Info -->
        <div class="bg-image" style="background-image: url({{asset('/img/photos/pg2k.jpg')}})">
            <div class="block-content @if(!$notification == null) bg-black-op @else bg-city-op @endif text-center overflow-hidden">
                <ul class="block-options">
                    <li>
                        <button type="button"><i class="si si-settings"></i></button>
                    </li>
                </ul>
                <div class="push-30-t push animated fadeInDown">
                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{asset('/img/avatars/prettyboyfredo.jpg')}}" alt="">
                </div>
                <div class="push-30 animated fadeInUp">
                    <h2 class="h4 font-w600 text-white push-5">@if($new_team == 'no' ) {{ $name }} ({{ $abbreviation }}) @endif</h2>
                    <h3 class="h5 text-white-op">@if($new_team == 'no' ) {{ $affiliation }} | {{ $type }} @endif</h3>
                </div>
            </div>
        </div>
        <!-- END Basic Info -->

        <!-- Stats -->
        <div class="block-content text-center">
            <div class="row items-push text-uppercase">
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">Teammate Grade</div>
                    <a class="h2 font-w300 text-success animated flipInX" href="javascript:void(0)">{{$team_grade}}</a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">Ability Grade</div>
                    <a class="h2 font-w300 text-warning animated flipInX" href="javascript:void(0)">{{$skill_grade}}</a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">Followers</div>
                    <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">2600</a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">24 Ratings</div>
                    <div class="text-warning push-10-t animated flipInX">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Stats -->
    </div>
    <!-- END User Header -->

    <!-- Notification Block -->
    @if(!$notification == null)
    <div class="block">
        <!-- Basic Info -->
            <div class="block-content bg-success text-center overflow-hidden">
                <div class="push-10 animated fadeInUp">
                    <h1 class="h3 font-w600 text-white push-5">Success</h2>
                    <h2 class="h5 text-white-op">{{ $notification }}</h3>
                    <form action="/myteam/{{$name}}">
                        <button class="btn btn-sm bg-primary push-10-t" type="submit"><i class="si si-game-controller push-5-r"></i>  View Myteam</button>
                    </form>
                </div>
            </div>
        <!-- END Basic Info -->
    </div>

    @endif

    <!-- Main Content -->
    <form action="/teamupdate/{{$name}}" method="post">
        {{ csrf_field() }}
        <div class="block">
            <ul class="nav nav-tabs nav-justified push-20" data-toggle="tabs">
                <li class="active">
                    <a href="#tab-profile-personal"><i class="fa fa-fw fa-lock"></i> Details</a>
                </li>
                <li>
                    <a href="#tab-profile-password"><i class="si si-social-dribbble"></i> Team Profile</a>
                </li>
                <li>
                    <a href="#tab-profile-players"><i class="si si-social-dribbble"></i> Players</a>
                </li>
            </ul>
            <div class="block-content tab-content">
                <!-- Account Settings Tab -->
                <div class="tab-pane fade in active" id="tab-profile-personal">
                    <div class="row items-push">
                        <div class="col-sm-6 col-sm-offset-3 form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <div class= "form-material ">
                                        <label for="name">Team Name</label>
                                        <input class="form-control input-lg" type="text" id="name" name="name" placeholder="Enter your Team Name.." value="{{ $name }}">
                                        @if($errors->get('name'))
                                          <ul class="errors">
                                          @foreach($errors->get('name') as $error)
                                            <li>{{ $error }}</li>
                                          @endforeach
                                          </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class= "form-material ">
                                        <label for="gamertag">GamerTag</label>
                                        <input class="form-control input-lg" type="text" id="gamertag" name="gamertag" value="{{$gamertag}}">
                                        @if($errors->get('gamertag'))
                                          <ul class="errors">
                                          @foreach($errors->get('gamertag') as $error)
                                            <li>{{ $error }}</li>
                                          @endforeach
                                          </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4">
                                    <div class= "form-material ">
                                        <label for="abbreviation">Abbreviation</label>
                                        <input class="form-control input-lg" type="text" id="abbreviation" name="abbreviation" placeholder="Update your teams Abbreviation.." value="{{ $abbreviation }}">
                                        @if($errors->get('abbreviation'))
                                          <ul class="errors">
                                          @foreach($errors->get('abbreviation') as $error)
                                            <li>{{ $error }}</li>
                                          @endforeach
                                          </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class= "form-material ">
                                        <label for="wins">Wins</label>
                                        <input class="form-control input-lg" type="text" id="wins" name="wins" placeholder="Update your wins.." value="{{ $wins }}">
                                        @if($errors->get('wins'))
                                          <ul class="errors">
                                          @foreach($errors->get('wins') as $error)
                                            <li>{{ $error }}</li>
                                          @endforeach
                                          </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class= "form-material ">
                                        <label for="losses">Losses</label>
                                        <input class="form-control input-lg" type="text" id="looses" name="losses" placeholder="Update your losses.." value="{{ $losses }}">
                                        @if($errors->get('losses'))
                                          <ul class="errors">
                                          @foreach($errors->get('losses') as $error)
                                            <li>{{ $error }}</li>
                                          @endforeach
                                          </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class= "form-material ">
                                        <label for="profile-password">Tagline</label>
                                        <input class="form-control input-lg" type="text" id="tagline" name="tagline" value="{{$tagline}}">
                                        @if($errors->get('tagline'))
                                          <ul class="errors">
                                          @foreach($errors->get('tagline') as $error)
                                            <li>{{ $error }}</li>
                                          @endforeach
                                          </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4">
                                    <div class= "form-material ">
                                        <label for="twitter">Twitter</label>
                                        <input class="form-control input-lg" type="text" id="twitter" name="twitter" value="{{$twitter}}">
                                        @if($errors->get('twitter'))
                                          <ul class="errors">
                                          @foreach($errors->get('twitter') as $error)
                                            <li>{{ $error }}</li>
                                          @endforeach
                                          </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class= "form-material ">
                                        <label for="youtube">Youtube</label>
                                        <input class="form-control input-lg" type="text" id="youtube" name="youtube" value="{{$youtube}}">
                                        @if($errors->get('youtube'))
                                          <ul class="errors">
                                          @foreach($errors->get('youtube') as $error)
                                            <li>{{ $error }}</li>
                                          @endforeach
                                          </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class= "form-material ">
                                        <label for="twitch">Twitch</label>
                                        <input class="form-control input-lg" type="text" id="twitch" name="twitch" value="{{$twitch}}">
                                        @if($errors->get('twitch'))
                                          <ul class="errors">
                                          @foreach($errors->get('twitch') as $error)
                                            <li>{{ $error }}</li>
                                          @endforeach
                                          </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6 push-20-t">
                                    <label>Type</label><br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input class="radio" type="radio" id="type" name="type" value='MyPark Squad' @if($type == 'MyPark Squad') checked @endif><span></span> MyPark Squad
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input class="radio" type="radio" id="type" name="type" value='ProAm Team' @if($type == 'ProAm Team') checked @endif><span></span> Pro-Am Team
                                    </label>
                                </div>
                                <div class="col-xs-6 push-20-t">
                                    <label>Affiliation</label><br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input class="radio" type="radio" id="affiliation" name="affiliation" value='Rivit City' @if($affiliation == 'Rivit City') checked @endif><span></span> Rivit City
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input class="radio" type="radio" id="affiliation" name="affiliation" value='Sunset Beach' @if($affiliation == 'Sunset Beach') checked @endif><span></span> Sunset Beach
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input class="radio" type="radio" id="affiliation" name="affiliation" value='Old Town' @if($affiliation == 'Old Town') checked @endif><span></span> Old Town
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Account Settings Tab -->


                <!-- Player Profile Tab -->
                <div class="tab-pane fade" id="tab-profile-password">
                    <div class="row items-push">
                        <div class="col-sm-10 col-sm-offset-1 form-horizontal">
                            <div class="form-group">
                                <div class="col-md-3 col-xs-6">
                                    <label for="movement">Movement</label>
                                    <select class="form-control" id="movement" name="movement" size="5" multiple="no">
                                        <option value="Ball-Movement" @if($movement == 'Ball-Movement') selected @endif>Ball-Movement</option>
                                        <option value="Isolation" @if($movement == 'Isolation') selected @endif>Isolation</option>
                                        <option value="Quick Shots" @if($movement == '7 Seconds') selected @endif>7 Seconds</option>
                                        <option value="Fast Break" @if($movement == 'Run & Gun') selected @endif>Run & Gun</option>
                                        <option value="Player Movement" @if($movement == 'Player Movement') selected @endif>Player Movement</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <label for="tempo">Tempo</label>
                                    <select class="form-control" id="tempo" name="tempo" size="5" multiple="no">
                                        <option value="Fast" @if($tempo == 'Fast') selected @endif>Fast</option>
                                        <option value="Uptempo" @if($tempo == 'Uptempo') selected @endif>Uptempo</option>
                                        <option value="Deliberate" @if($tempo == 'Deliberate') selected @endif>Deliberate</option>
                                        <option value="Patient" @if($tempo == 'Patient') selected @endif>Patient</option>
                                        <option value="Slow" @if($tempo == 'Slow') selected @endif>Slow</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <label for="offense">Offense</label>
                                    <select class="form-control" id="offense" name="offense" size="5" multiple="no">
                                        <option value="Motion" @if($offense == 'Motion') selected @endif>Motion</option>
                                        <option value="Triangle" @if($offense == 'Triangle') selected @endif>Triangle</option>
                                        <option value="Free Lance" @if($offense == 'Free Lance') selected @endif>Free Lance</option>
                                        <option value="Inside Out" @if($offense == 'Inside Out') selected @endif>Inside Out</option>
                                        <option value="7 Seconds" @if($offense == '7 Seconds') selected @endif>7 Seconds</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <label for="defense">Defense</label>
                                    <select class="form-control" id="defense" name="defense" size="5" multiple="no">
                                        <option value="Team-D" @if($defense == 'Team-D') selected @endif>Team-D</option>
                                        <option value="Man" @if($defense == 'Man') selected @endif>Man</option>
                                        <option value="No-Help" @if($defense == 'No-Help') selected @endif>No-Help</option>
                                        <option value="Zone" @if($defense == 'Zone') selected @endif>Zone</option>
                                        <option value="Cross-Match" @if($defense == 'Cross-Match') selected @endif>Cross-Match</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Password Tab -->

                <!-- team Profile Tab -->
                <div class="tab-pane fade" id="tab-profile-players">
                    <div class="row items-push">
                        <div class="col-sm-6 col-sm-offset-3 form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class= "form-material">
                                        <label for="position">Team Members</label>
                                        <input class="form-control input-lg" type="text" id="player1" name="player1" placeholder="This field autofills with Team Owners gamertag" value="{{$gamertag}}" disabled>
                                        <input class="form-control input-lg" type="text" id="player2" name="player2" placeholder="Enter player 2's gamertag" value="{{$player2}}">
                                        <input class="form-control input-lg" type="text" id="player3" name="player3" placeholder="Enter player 3's gamertag" value="{{$player3}}">
                                        <input class="form-control input-lg" type="text" id="player4" name="player4" placeholder="Enter player 4's gamertag" value="{{$player4}}">
                                        <input class="form-control input-lg" type="text" id="player5" name="player5" placeholder="Enter player 5's gamertag" value="{{$player5}}">
                                        <input class="form-control input-lg" type="text" id="player6" name="player6" placeholder="Enter player 6's gamertag" value="{{$player6}}">
                                        <input class="form-control input-lg" type="text" id="player7" name="player7" placeholder="Enter player 7's gamertag" value="{{$player7}}">
                                        <input class="form-control input-lg" type="text" id="player8" name="player8" placeholder="Enter player 8's gamertag" value="{{$player8}}">
                                        <input class="form-control input-lg" type="text" id="player9" name="player9" placeholder="Enter player 9's gamertag" value="{{$player9}}">
                                        <input class="form-control input-lg" type="text" id="player10" name="player10" placeholder="Enter player 10's gamertag" value="{{$player10}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Privacy Tab -->
            </div>
            <div class="block-content bg-gray-lighter text-center margin-10">
                <button class="btn btn-sm btn-primary margin-10" type="submit"><i class="fa fa-check push-5-r"></i> Save Changes</button>
                <button class="btn btn-sm btn-warning margin-10" type="reset"><i class="fa fa-refresh push-5-r"></i> Reset</button>
                @if($new_team == 'no')
                <button class="btn btn-sm btn-danger margin-10" type="submit" name="delete" id="delete" value="yes"><i class="fa fa-refresh push-5-r"></i> Delete</button>
                @endif
            </div>
        </div>
    </form>
    <!-- END Main Content -->
</div>
<!-- END Page Content -->

@endsection
