@extends('layouts.forms_interface')

@section('title')
    {{-- Yield the title if it exists, otherwise default to 'Squad Locker' --}}
    @yield('title','Squad Locker')
@endsection


@section('content')
<!-- Page Content -->
<div class="content content-boxed">
    <!-- User Header -->
    <div class="block">
        <!-- Basic Info -->
        <div class="bg-image" style="background-image: url({{asset('/img/photos/pg2k.jpg')}})">
            <div class="block-content bg-primary-op @if(!$notification == null) bg-black-op @endif text-center overflow-hidden">
                <ul class="block-options">
                    <li>
                       <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                           <i data-brackets-id='632' class="si si-logout pull-right"></i>
                       </a>
                    </li>
                </ul>
                <div class="push-30-t push animated fadeInDown">
                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{asset('/img/avatars/prettyboyfredo.jpg')}}" alt="">
                </div>
                <div class="push-30 animated fadeInUp">
                    <h2 class="h4 font-w600 text-white push-5">{{ $name }}</h2>
                    <h3 class="h5 text-white-op">{{ $affiliation }}  {{ $position }}  {{ $archetype }}</h3>
                </div>
            </div>
        </div>
        <!-- END Basic Info -->
    </div>
    <!-- END User Header -->

    @if(!$notification == null)
    <div class="block">
        <!-- Basic Info -->
            <div class="block-content @if(count($errors) > 0) bg-danger @elseif($new_player == 'no') bg-success @elseif($new_player=='added') bg-success @else bg-primary @endif text-center overflow-hidden">
                <div class="push-10 animated fadeInUp">
                    <h1 class="h3 font-w600 text-white push-5">@if(count($errors) > 0) Error @elseif($new_player == 'no') Success @elseif($new_player == 'added') Player Created @else Register @endif</h2>
                    <h2 class="h5 text-white-op">@if(count($errors) > 0) The form you entered has errors. All fields are required. Each field with an error how an error message below. @else {{ $notification }} @endif</h3>
                    <form action="/player">
                       @if(count($errors) > 0)

                       @elseif( $new_player == 'no')
                           <button class="btn btn-sm bg-primary push-10-t" type="submit"><i class="si si-game-controller push-5-r"></i>  View MyPlayer</button>
                       @elseif( $new_player == 'added') Player Created
                           <button class="btn btn-sm bg-primary push-10-t" type="submit"><i class="si si-game-controller push-5-r"></i>  Enter SquadLocker</button>
                       @else

                       @endif
                    </form>
                </div>
            </div>
        <!-- END Basic Info -->
    </div>

    @endif

    <!-- Main Content -->
    <form action="/newplayer" method="post">
        {{ csrf_field() }}
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
                    <div class="row items-push push-15-t">
                        <div class="col-sm-6 col-sm-offset-3 form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-4 form-material">
                                    <label for="profile-password">GamerTag</label>
                                    <input class="form-control input-lg" type="text" id="name" name="name" value="{{$name}}">
                                    @if($errors->get('name'))
                                      <ul class="errors">
                                      @foreach($errors->get('name') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                                <div class="col-xs-8 form-material">
                                    <label for="profile-password">Tagline</label>
                                    <input class="form-control input-lg" type="text" id="tagline" name="tagline" placeholder="Enter your tagline.." value="{{old('tagline', $tagline) }}">
                                    @if($errors->get('tagline'))
                                      <ul class="errors">
                                      @foreach($errors->get('tagline') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6 form-material">
                                    <label for="profile-password">Profile Picture </label>
                                    <input class="form-control input-lg" type="text" id="profile_pic" name="profile_pic" placeholder="Profile Picture URL.." value="{{old('profile_pic', $profile_pic) }}">
                                    @if($errors->get('profile_pic'))
                                      <ul class="errors">
                                      @foreach($errors->get('profile_pic') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                                <div class="col-xs-6 form-material">
                                    <label for="profile-password">Background Image </label>
                                    <input class="form-control input-lg" type="text" id="background_pic" name="background_pic" placeholder="Background Image URL.." value="{{old('background_pic', $background_pic) }}">
                                    @if($errors->get('background_pic'))
                                      <ul class="errors">
                                      @foreach($errors->get('background_pic') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4 form-material">
                                    <label for="twitter">Twitter</label>
                                    <input class="form-control input-lg" type="text" id="twitter" name="twitter" value="{{old('twitter', $twitter) }}">
                                    @if($errors->get('twitter'))
                                      <ul class="errors">
                                      @foreach($errors->get('twitter') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                                <div class="col-xs-4 form-material">
                                    <label for="youtube">Youtube</label>
                                    <input class="form-control input-lg" type="text" id="youtube" name="youtube" value="{{old('youtube', $youtube) }}">
                                    @if($errors->get('youtube'))
                                      <ul class="errors">
                                      @foreach($errors->get('youtube') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                                <div class="col-xs-4 form-material">
                                    <label for="twitch">Twitch</label>
                                    <input class="form-control input-lg" type="text" id="twitch" name="twitch" value="{{old('twitch', $twitch) }}">
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
                    </div>
                    <div class="text-center text-black-op push-20">
                       <span>Note: Please enter truthful data, all accounts found to have fraudulent data will be banned.</span>
                    </div>
                </div>
                <!-- END Account Settings Tab -->



                <!-- Player Profile Tab -->
                <div class="tab-pane fade" id="tab-profile-password">
                    <div class="row items-push">
                        <div class="col-sm-10 col-sm-offset-1 form-horizontal">
                            <div class="form-group">
                                <div class="col-md-4 col-xs-6">
                                    <label for="position">Position</label>
                                    <select class="form-control" id="position" name="position" size="5" multiple="no">
                                        <option value="PG"  @if(old('position', $position) == 'PG') selected @endif>Point Guard</option>
                                        <option value="SG" @if(old('position', $position) == 'SG') selected @endif>Shooting Guard</option>
                                        <option value="SF" @if(old('position', $position) == 'SF') selected @endif>Small Forward</option>
                                        <option value="PF" @if(old('position', $position) == 'PF') selected @endif>Power Forward</option>
                                        <option value="C" @if(old('position', $position) == 'C') selected @endif>Center</option>
                                    </select>
                                    @if($errors->get('position'))
                                      <ul class="errors">
                                      @foreach($errors->get('position') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                                <div class="col-md-4 col-xs-6">
                                    <label for="archetype">Archetype</label>
                                    <select class="form-control" id="archetype" name="archetype" size="5" multiple="no">
                                        <option value="Playmaker" @if(old('archetype', $archetype) == 'Playmaker') selected @endif>Playmaker</option>
                                        <option value="Lockdown Defender" @if(old('archetype', $archetype) == 'Lockdown Defender') selected @endif>Lockdown Defender</option>
                                        <option value="Sharp Shooter" @if(old('archetype', $archetype) == 'Sharp Shooter') selected @endif>Sniper</option>
                                        <option value="Slasher" @if(old('archetype', $archetype) == 'Slasher') selected @endif>Slasher</option>
                                        <option value="Athletic Finisher" @if(old('archetype', $archetype) == 'Athletic Finisher') selected @endif>Athletic Finisher</option>
                                        <option value="Stretch Big" @if(old('archetype', $archetype) == 'Stretch Big') selected @endif>Stretch Big</option>
                                        <option value="Post Scorer" @if(old('archetype', $archetype) == 'Post Scorer') selected @endif>Post Scorer</option>
                                        <option value="Glass Cleaner" @if(old('archetype', $archetype) == 'Glass Cleaner') selected @endif>Glass Cleaner</option>
                                        <option value="Point Forward" @if(old('archetype', $archetype) == 'Point Forward') selected @endif>Point Forward</option>
                                        <option value="Shot Creator" @if(old('archetype', $archetype) == 'Shot Creator') selected @endif>Shot Creator</option>
                                    </select>
                                    @if($errors->get('archetype'))
                                      <ul class="errors">
                                      @foreach($errors->get('archetype') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                                <div class="col-md-4 col-xs-6">
                                    <label for="affiliation">Affiliation</label>
                                    <select class="form-control" id="affiliation" name="affiliation" size="5" multiple="no">
                                        <option value="Rivit City" @if(old('affiliation', $affiliation) == 'Rivit City') selected @endif>Rivit City</option>
                                        <option value="Sunset Beach" @if(old('affiliation', $affiliation) == 'Sunset Beach') selected @endif>Sunset Beach</option>
                                        <option value="Old Town" @if(old('affiliation', $affiliation) == 'Old Town') selected @endif>Old Town</option>
                                    </select>
                                    @if($errors->get('affiliation'))
                                      <ul class="errors">
                                      @foreach($errors->get('affiliation') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                                <div class="col-md-4 col-xs-6">
                                    <label for="rep_status">Rep Status</label>
                                    <select class="form-control" id="rep_status" name="rep_status" size="5" multiple="no">
                                        <option value="Rookie" @if(old('rep_status', $rep_status) == 'Rookie') selected @endif>Rookie</option>
                                        <option value="Pro" @if($rep_status == 'Pro') selected @endif>Pro</option>
                                        <option value="All-Star" @if(old('rep_status', $rep_status) == 'All-Star') selected @endif>All-Star</option>
                                        <option value="Superstar" @if(old('rep_status', $rep_status) == 'Superstar') selected @endif>Supertar</option>
                                        <option value="Legend" @if(old('rep_status', $rep_status) == 'Legend') selected @endif>Legend</option>
                                    </select>
                                    @if($errors->get('rep_status'))
                                      <ul class="errors">
                                      @foreach($errors->get('rep_status') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                                <div class="col-md-4 col-xs-6">
                                    <label for="status_level">Status Level</label>
                                    <select class="form-control" id="status_level" name="status_level" size="5" multiple="no">
                                        <option value="1" @if(old('status_level', $status_level) == 1) selected @endif>1</option>
                                        <option value="2" @if(old('status_level', $status_level) == 2) selected @endif>2</option>
                                        <option value="3" @if(old('status_level', $status_level) == 3) selected @endif>3</option>
                                        <option value="4" @if(old('status_level', $status_level) == 4) selected @endif>4</option>
                                        <option value="5" @if(old('status_level', $status_level) == 5) selected @endif>5</option>
                                    </select>
                                    @if($errors->get('status_level'))
                                      <ul class="errors">
                                      @foreach($errors->get('status_level') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                                <div class="col-md-4 col-xs-6">
                                    <label for="rep_progress">Level Progress</label>
                                    <select class="form-control" id="rep_progress" name="rep_progress" size="5" multiple="no">
                                        <option value="0" @if(old('rep_progress', $rep_progress) == 0) selected @endif>0%</option>
                                        <option value="20" @if(old('rep_progress', $rep_progress) == 20) selected @endif>20%</option>
                                        <option value="40" @if(old('rep_progress', $rep_progress) == 40) selected @endif>40%</option>
                                        <option value="60" @if(old('rep_progress', $rep_progress) == 60) selected @endif>60%</option>
                                        <option value="80" @if(old('rep_progress', $rep_progress) == 80) selected @endif>80%</option>
                                    </select>
                                    @if($errors->get('status_level'))
                                      <ul class="errors">
                                      @foreach($errors->get('status_level') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                            </div>
                            <label>Play Style</label>
                            <div class="form-group">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Dribble-N-Dime' @if(old('style', $style) == 'Dribble-N-Dime') checked @endif><span></span> Dribble-N-Dime
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Run-The-Break' @if(old('style', $style) == 'Run-The-Break') checked @endif><span></span> Run-The-Break
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Pass-To-Assist-King' @if(old('style', $style) == 'Pass-To-Assist-King') checked @endif><span></span> Pass-To-Assist-King
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Assist-King' @if(old('style', $style) == 'Assist-King') checked @endif><span></span> Assist-King
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Ball-Movement-Coach' @if(old('style', $style) == 'Ball-Movement-Coach') checked @endif><span></span> Ball-Movement-Coach
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Screen-And-D' @if(old('style', $style) == 'Screen-And-D') checked @endif><span></span> Screen-And-D
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Inside-Out-Big' @if(old('style', $style) == 'Inside-Out-Big') checked @endif><span></span> Inside-Out-Big
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Defensive-Anchor' @if(old('style', $style) == 'Defensive-Anchor') checked @endif><span></span> Defensive-Anchor
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Boards-N-Outlets' @if(old('style', $style) == 'Boards-N-Outlets') checked @endif><span></span> Boards-N-Outlets
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Putback-King' @if(old('style', $style) == 'Putback-King') checked @endif><span></span> Putback-King
                                    </label>
                                    <br />
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Shot-Creator' @if(old('style', $style) == 'Shot-Creator') checked @endif><span></span> Shot-Creator
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Ankle-Breaking-Driver' @if(old('style', $style) == 'Ankle-Breaking-Dimer') checked @endif><span></span> Ankle-Breaking-Driver
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary">
                                        <input type="radio" name="style" value='Blow-By-Dunker' @if(old('style', $style) == 'Blow-By-Dunker') checked @endif><span></span> Blow-By-Dunker
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Isolation-Specialist' @if(old('style', $style) == 'Isolation-Specialist') checked @endif><span></span> Isolation-Specialist
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Post-Move-Master' @if(old('style', $style) == 'Post-Move-Master') checked @endif><span></span> Post-Move-Master
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Fast-Break-Finisher' @if(old('style', $style) == 'Fast-Break-Finisher') checked @endif><span></span> Fast-Break-Finisher
                                    </label>
                                    <br />
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Pick-N-Roll-Big' @if(old('style', $style) == 'Pick-N-Roll-Big') checked @endif><span></span> Pick-N-Roll-Big
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Second-Chance-Only' @if(old('style', $style) == 'Second-Chance-Only') checked @endif><span></span> Second-Chance-Only
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Backdoor-Posterizer' @if(old('style', $style) == 'Backdoor-Posterizer') checked @endif><span></span> Backdoor-Posterizer
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Catch-N-Shoot' @if(old('style', $style) == 'Catch-N-Shoot') checked @endif><span></span> Catch-N-Shoot
                                    </label>
                                    <br />
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" value='Slash-N-Shoot' @if(old('style', $style) == 'Slash-N-Shoot') checked @endif><span></span> Slash-N-Shoot
                                    </label>
                                    <br />
                                </div>
                            </div>
                            @if($errors->get('style'))
                             <ul class="errors">
                             @foreach($errors->get('style') as $error)
                               <li>{{ $error }}</li>
                             @endforeach
                             </ul>
                            @endif
                        </div>
                    </div>
                    <div class="text-center text-black-op push-20">
                       <span>Note: Please enter truthful data, all accounts found to have fraudulent data will be banned.</span>
                    </div>
                </div>
                <!-- END Player Profile Tab -->


                <!-- Privacy Tab -->
                <div class="tab-pane fade" id="tab-profile-privacy">
                    <div class="row items-push push-15-t">
                        <div class="col-sm-6 col-sm-offset-3 form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-4 form-material">
                                    <label for="per">PER</label>
                                    <input class="form-control input-lg" type="text" id="per" name="per" placeholder="Update your player efficiency rating.." value="{{old('per', $per)}}">
                                    @if($errors->get('per'))
                                     <ul class="errors">
                                     @foreach($errors->get('per') as $error)
                                       <li>{{ $error }}</li>
                                     @endforeach
                                     </ul>
                                    @endif
                                </div>
                                <div class="col-xs-4 form-material">
                                    <label for="fg">FG%</label>
                                    <input class="form-control input-lg" type="text" id="fg" name="fg" placeholder="Update your gield goal percentage.." value="{{old('fg', $fg)}}">
                                    @if($errors->get('fg'))
                                      <ul class="errors">
                                      @foreach($errors->get('fg') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                                <div class="col-xs-4 form-material">
                                    <label for="apg">APG</label>
                                    <input class="form-control input-lg" type="text" id="apg" name="apg" placeholder="Update your assists per game.." value="{{old('apg', $apg)}}">
                                    @if($errors->get('apg'))
                                      <ul class="errors">
                                      @foreach($errors->get('apg') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4 form-material">
                                    <label for="apg_ppg">APG/PPG</label>
                                    <input class="form-control input-lg" type="text" id="apg_ppg" name="apg_ppg" placeholder="Update your apg/ppg rating.." value="{{old('apg_ppg', $apg_ppg)}}">
                                    @if($errors->get('apg_ppg'))
                                     <ul class="errors">
                                     @foreach($errors->get('apg_ppg') as $error)
                                       <li>{{ $error }}</li>
                                     @endforeach
                                     </ul>
                                    @endif
                               </div>
                                <div class="col-xs-4 form-material">
                                    <label for="ppg">PPG</label>
                                    <input class="form-control input-lg" type="text" id="ppg" name="ppg" placeholder="Update your points per game..." value="{{old('ppg', $ppg)}}">
                                    @if($errors->get('ppg'))
                                     <ul class="errors">
                                     @foreach($errors->get('ppg') as $error)
                                       <li>{{ $error }}</li>
                                     @endforeach
                                     </ul>
                                    @endif
                                </div>
                                <div class="col-xs-4 form-material">
                                    <label for="rpg">RPG</label>
                                    <input class="form-control input-lg" type="text" id="rpg" name="rpg" placeholder="Update your rebounds per game" value="{{old('rpg', $rpg)}}">
                                    @if($errors->get('rpg'))
                                     <ul class="errors">
                                     @foreach($errors->get('rpg') as $error)
                                       <li>{{ $error }}</li>
                                     @endforeach
                                     </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center text-black-op push-20">
                        <span>Note: Please enter truthful data, all accounts found to have fraudulent data will be banned.</span>
                    </div>

                </div>
                <!-- END Privacy Tab -->
            </div>
            <div class="block-content bg-gray-lighter text-center remove-padding">
                <button class="btn btn-sm btn-primary margin-30" type="submit"><i class="fa fa-check push-5-r"></i> Save Changes</button>
                <button class="btn btn-sm btn-warning margin-30" type="reset"><i class="fa fa-refresh push-5-r"></i> Reset</button>
            </div>
        </div>

    </form>
    <!-- END Main Content -->

</div>
<!-- END Page Content -->

@endsection
