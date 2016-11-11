@extends('layouts.structure_forms')


@section('title')
    'Registration'
@endsection

@section('content')
<!-- Page Content -->
<div class="content content-boxed">
    <!-- User Header -->
    <div class="block">
        <!-- Basic Info -->
        <div class="bg-image" style="background-image: url({{asset('/img/photos/pg2k.jpg')}})">
            <div class="block-content bg-primary-op text-center overflow-hidden">
                <ul class="block-options">
                    <li>
                        <button type="button"><i class="si si-settings"></i></button>
                    </li>
                </ul>
                <div class="push-30-t push animated fadeInDown">
                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{asset('/img/avatars/prettyboyfredo.jpg')}}" alt="">
                </div>
                <div class="push-30 animated fadeInUp">
                    <h2 class="h4 font-w600 text-white push-5">{{ $name }}</h2>
                    <h3 class="h5 text-white-op">{{ $affiliation }} | {{ $position }} | {{ $archetype }}</h3>
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

    <!-- Main Content -->
    <form action="pages_profile_edit.html" method="post" onsubmit="return false;">
        <div class="block">
            <ul class="nav nav-tabs nav-justified push-20" data-toggle="tabs">
                <li class="active">
                    <a href="#tab-profile-personal"><i class="fa fa-fw fa-lock"></i> Account Settings</a>
                </li>
                <li>
                    <a href="#tab-profile-password"><i class="si si-social-dribbble"></i> Player Profile</a>
                </li>
                <li>
                    <a href="#tab-profile-privacy"><i class="si si-list"></i> Stats</a>
                </li>
            </ul>
            <div class="block-content tab-content">
                <!-- Account Settings Tab -->
                <div class="tab-pane fade in active" id="tab-profile-personal">
                    <div class="row items-push">
                        <div class="col-sm-6 col-sm-offset-3 form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="profile-email">Email Address</label>
                                    <input class="form-control input-lg" type="email" id="profile-email" name="profile-email" placeholder="Enter your email.." value="admin@example.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="profile-firstname">Username</label>
                                    <input class="form-control input-lg" type="text" id="username" name="username" placeholder="Update your username.." value="deluongo">
                                </div>
                                <div class="col-xs-6">
                                    <label for="profile-lastname">Password</label>
                                    <input class="form-control input-lg" type="text" id="password" name="password" placeholder="Update your password..">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Account Settings Tab -->

                <!-- Player Profile Tab -->
                <div class="tab-pane fade" id="tab-profile-password">
                    <div class="row items-push">
                        <div class="col-sm-8 col-sm-offset-2 form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="profile-password">GamerTag</label>
                                    <input class="form-control input-lg" type="text" id="gamertag" name="gamertag" value="{{$name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="profile-password">Tagline</label>
                                    <input class="form-control input-lg" type="text" id="tagline" name="tagline" value="{{$tagline}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4">
                                    <label for="twitter">Twitter</label>
                                    <input class="form-control input-lg" type="text" id="twitter" name="twitter" value="{{$twitter}}">
                                </div>
                                <div class="col-xs-4">
                                    <label for="youtube">Youtube</label>
                                    <input class="form-control input-lg" type="text" id="youtube" name="youtube" value="{{$youtube}}">
                                </div>
                                <div class="col-xs-4">
                                    <label for="twitch">Twitch</label>
                                    <input class="form-control input-lg" type="text" id="twitch" name="twitch" value="{{$twitch}}">
                                </div>

                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-xs-4">
                                    <label for="position">Position</label>
                                    <select class="form-control" id="position" name="position" size="5" multiple="no">
                                        <option value="PG" @if($position == 'PG') selected @endif>Point Guard</option>
                                        <option value="SG" @if($position == 'SG') selected @endif>Shooting Guard</option>
                                        <option value="SF" @if($position == 'SF') selected @endif>Small Forward</option>
                                        <option value="PF" @if($position == 'PF') selected @endif>Power Forward</option>
                                        <option value="C" @if($position == 'C') selected @endif>Center</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <label for="archetype">Archetype</label>
                                    <select class="form-control" id="archetype" name="archetype" size="5" multiple="no">
                                        <option value="Playmaker" @if($archetype == 'Playmaker') selected @endif>Playmaker</option>
                                        <option value="Lockdown Defender" @if($archetype == 'Lockdown Defender') selected @endif>Lockdown Defender</option>
                                        <option value="Sharp Shooter" @if($archetype == 'Sharp Shooter') selected @endif>Sniper</option>
                                        <option value="Slasher" @if($archetype == 'Slasher') selected @endif>Slasher</option>
                                        <option value="Athletic Finisher" @if($archetype == 'Athletic Finisher') selected @endif>Athletic Finisher</option>
                                        <option value="Stretch Big" @if($archetype == 'Stretch Big') selected @endif>Stretch Big</option>
                                        <option value="Post Scorer" @if($archetype == 'Post Scorer') selected @endif>Post Scorer</option>
                                        <option value="Glass Cleaner" @if($archetype == 'Glass Cleaner') selected @endif>Glass Cleaner</option>
                                        <option value="Point Forward" @if($archetype == 'Point Forward') selected @endif>Point Forward</option>
                                        <option value="Shot Creator" @if($archetype == 'Shot Creator') selected @endif>Shot Creator</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <label for="affiliation">Affiliation</label>
                                    <select class="form-control" id="affiliation" name="affiliation" size="5" multiple="no">
                                        <option value="Rivit City" @if($affiliation == 'Rivit City') selected @endif>Rivit City</option>
                                        <option value="Sunset Beach" @if($affiliation == 'Sunset Beach') selected @endif>Sunset Beach</option>
                                        <option value="Old Town" @if($affiliation == 'Old Town') selected @endif>Old Town</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4">
                                    <label for="rep_status">Rep Status</label>
                                    <select class="form-control" id="rep_status" name="rep_status" size="5" multiple="no">
                                        <option value="Rookie" @if($rep_status == 'Rookie') selected @endif>Rookie</option>
                                        <option value="Pro" @if($rep_status == 'Pro') selected @endif>Pro</option>
                                        <option value="All-Star" @if($rep_status == 'All-Star') selected @endif>All-Star</option>
                                        <option value="Superstar" @if($rep_status == 'Superstar') selected @endif>Supertar</option>
                                        <option value="Legend" @if($rep_status == 'Legend') selected @endif>Legend</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <label for="status_level">Status Level</label>
                                    <select class="form-control" id="status_level" name="status_level" size="5" multiple="no">
                                        <option value="1" @if($status_level == 1) selected @endif>1</option>
                                        <option value="2" @if($status_level == 2) selected @endif>2</option>
                                        <option value="3" @if($status_level == 3) selected @endif>3</option>
                                        <option value="4" @if($status_level == 4) selected @endif>4</option>
                                        <option value="5" @if($status_level == 5) selected @endif>5</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <label for="rep_progress">Level Progress</label>
                                    <select class="form-control" id="rep_progress" name="rep_progress" size="5" multiple="no">
                                        <option value="0" @if($rep_progress == 0) selected @endif>0%</option>
                                        <option value="20" @if($rep_progress == 20) selected @endif>20%</option>
                                        <option value="40" @if($rep_progress == 40) selected @endif>40%</option>
                                        <option value="60" @if($rep_progress == 60) selected @endif>60%</option>
                                        <option value="80" @if($rep_progress == 80) selected @endif>80%</option>
                                    </select>
                                </div>
                            </div>
                            <label>Play Style</label>
                            <div class="form-group">
                                <div class="col-xs-4">
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Dribble-N-Dime') checked @endif><span></span> Dribble-N-Dime
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Run-The-Break') checked @endif><span></span> Run-The-Break
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Pass-To-Assist-King') checked @endif><span></span> Pass-To-Assist-King
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Assist-King') checked @endif><span></span> Assist-King
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Ball-Movement-Coach') checked @endif><span></span> Ball-Movement-Coach
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Screen-And-D') checked @endif><span></span> Screen-And-D
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Inside-Out-Big') checked @endif><span></span> Inside-Out-Big
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Defensive-Anchor') checked @endif><span></span> Defensive-Anchor
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Boards-N-Outlets') checked @endif><span></span> Boards-N-Outlets
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Putback-King') checked @endif><span></span> Putback-King
                                    </label>
                                </div>
                                <div class="col-xs-4">
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Shot-Creator') checked @endif><span></span> Shot-Creator
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Ankle-Breaking-Dimer') checked @endif><span></span> Ankle-Breaking-Driver
                                    </label>
                                    <label class="css-input css-radio css-radio-primary">
                                        <input type="radio" name="profile-gender-group" @if($style == 'Blow-By-Dunker') checked @endif><span></span> Blow-By-Dunker
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Isolation-Specialist') checked @endif><span></span> Isolation-Specialist
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Post-Move-Master') checked @endif><span></span> Post-Move-Master
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Fast-Break-Finisher') checked @endif><span></span> Fast-Break-Finisher
                                    </label>
                                </div>
                                <div class="col-xs-4">
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Pick-N-Roll-Big') checked @endif><span></span> Pick-N-Roll-Big
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Second-Chance-Only') checked @endif><span></span> Second-Chance-Only
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Backdoor-Posterizer') checked @endif><span></span> Backdoor-Posterizer
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Catch-N-Shoot') checked @endif><span></span> Catch-N-Shoot
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" @if($style == 'Slash-N-Shoot') checked @endif><span></span> Slash-N-Shoot
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Password Tab -->


                <!-- Privacy Tab -->
                <div class="tab-pane fade" id="tab-profile-privacy">
                    <div class="row items-push">
                        <div class="col-sm-6 col-sm-offset-3 form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-4">
                                    <label for="per">PER</label>
                                    <input class="form-control input-lg" type="text" id="per" name="per" placeholder="Update your player efficiency rating.." value="{{$per}}">
                                </div>
                                <div class="col-xs-4">
                                    <label for="fg">FG%</label>
                                    <input class="form-control input-lg" type="text" id="fg" name="fg" placeholder="Update your gield goal percentage.." value="{{$fg}}">
                                </div>
                                <div class="col-xs-4">
                                    <label for="apg">APG</label>
                                    <input class="form-control input-lg" type="text" id="apg" name="apg" placeholder="Update your assists per game.." value="{{$apg}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4">
                                    <label for="apg_ppg">APG/PPG</label>
                                    <input class="form-control input-lg" type="text" id="apg_ppg" name="apg_ppg" placeholder="Update your apg/ppg rating.." value="{{$apg_ppg}}">
                                </div>
                                <div class="col-xs-4">
                                    <label for="ppg">PPG</label>
                                    <input class="form-control input-lg" type="text" id="ppg" name="ppg" placeholder="Update your points per game..." value="{{$ppg}}">
                                </div>
                                <div class="col-xs-4">
                                    <label for="rpg">RPG</label>
                                    <input class="form-control input-lg" type="text" id="rpg" name="rpg" placeholder="Update your rebounds per game" value="{{$rpg}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Privacy Tab -->
            </div>
            <div class="block-content  bg-gray-lighter text-center">
                <button class="btn btn-sm btn-primary margin-10" type="submit"><i class="fa fa-check push-5-r"></i> Save Changes</button>
                <button class="btn btn-sm btn-warning margin-10" type="reset"><i class="fa fa-refresh push-5-r"></i> Reset</button>
            </div>
        </div>
    </form>
    <!-- END Main Content -->
</div>
<!-- END Page Content -->

@endsection
