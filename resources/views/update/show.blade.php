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
        <div class="bg-image" style="background-image: url({{ $background_pic}})">
            <div class="block-content bg-primary-op @if(!$notification == null) bg-black-op @endif text-center overflow-hidden">
                <ul class="block-options">
                    <li>
                        <button type="button"><i class="si si-settings"></i></button>
                    </li>
                </ul>
                <div class="push-30-t push animated fadeInDown">
                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{ $profile_pic }}" alt="">
                </div>
                <div class="push-30 animated fadeInUp">
                    <h2 class="h4 font-w600 text-white push-5">{{ $name }}</h2>
                    <h3 class="h5 text-white-op"> {{ $position }} | {{ $archetype }}  | {{ $archetype2 }}</h3>
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
                    <form action="/player">
                        <button class="btn btn-sm bg-primary push-10-t" type="submit"><i class="si si-game-controller push-5-r"></i>  View MyPlayer</button>
                    </form>
                </div>
            </div>
        <!-- END Basic Info -->
    </div>

    @endif

    <!-- Main Content -->
    <form action="/update" method="post">
        {{ csrf_field() }}
        <div class="block">
            <ul class="nav nav-tabs nav-justified push-20" id="new-player-tabs" data-toggle="tabs">
                <li class="active">
                    <a href="#tab-account-settings"><i class="fa fa-fw fa-gear"></i> Account Settings</a>
                </li>
                <li>
                    <a href="#tab-integration-settings"><i class="fa fa-fw fa-lock"></i> 2K Integration</a>
                </li>
                <li>
                    <a href="#tab-player-profile"><i class="si si-social-dribbble"></i> Player Profile</a>
                </li>
                <li>
                    <a href="#tab-stats"><i class="si si-list"></i> Stats</a>
                </li>
            </ul>
            <div class="block-content tab-content">
                <!-- Account Settings Tab -->
                <div class="tab-pane fade in active" id="tab-account-settings">
                    <div class="row items-push push-15-t">
                        <div class="col-sm-6 col-sm-offset-3 form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-6 form-material">
                                    <label for="profile-email">Email Address</label>
                                    <input class="form-control valid input-lg" type="email" id="profile-email" name="email" placeholder="Enter your email.." value="{{ old('email', $email) }}" aria-required="true" aria-invalid="false">
                                    @if($errors->get('email'))
                                      <ul class="errors">
                                      @foreach($errors->get('email') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                                <div class="col-xs-6 form-material">
                                    <label>Password</label>
                                    <input class="form-control input-lg" type="text" id="password" name="password" placeholder="Update your password..">
                                    @if($errors->get('password'))
                                      <ul class="errors">
                                      @foreach($errors->get('password') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 form-material">
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
                    <div class="block-content text-center remove-padding">
                        <button class="btn btn-sm btn-default margin-30 disabled hidden"><i class="fa fa-arrow-left push-5-r"></i> Back </button>
                        <button class="btn btn-sm btn-success margin-30" id="select-integrations-tab-btn"> Advance <i class="fa fa-arrow-right push-5-l"></i></button>
                    </div>
                </div>
                <!-- END Account Settings Tab -->


                <!-- 2K Integration Tab -->
                <div class="tab-pane fade in" id="tab-integration-settings">
                    <div class="row items-push push-15-t">
                        <div class="col-sm-6 col-sm-offset-3 form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-6 form-material">
                                    <label for="profile-password">System</label>
                                    <select class="form-control input-lg" size="1" id="system" name="system" placeholder="PS4" value="{{old('system', $system) }}">
                                        <option value="ps4">PS4</option>
                                        <option value="xbox">XBOX</option>
                                    </select>
                                    @if($errors->get('system'))
                                      <ul class="errors">
                                      @foreach($errors->get('system') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                                <div class="col-xs-6 form-material">
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

                            </div>
                            <div class="form-group">
                                <div class="col-xs-6 form-material">
                                    <label for="system-username">System Username </label>
                                    <input class="form-control input-lg" type="text" id="system_username" name="system_username" placeholder="System Username.." value="{{old('system_username', $system_username) }}">
                                    @if($errors->get('profile_pic'))
                                      <ul class="errors">
                                      @foreach($errors->get('profile_pic') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                                <div class="col-xs-6 form-material">
                                    <label for="system-password">System Password </label>
                                    <input class="form-control input-lg" type="text" id="system_password" name="system_password" placeholder="System Password.." value="{{old('system_password', $system_password) }}">
                                    @if($errors->get('system_password'))
                                      <ul class="errors">
                                      @foreach($errors->get('system_password') as $error)
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
                    <div class="block-content text-center remove-padding">
                      <button class="btn btn-sm btn-default margin-30" id="back-account-settings-tab-btn"><i class="fa fa-arrow-left push-5-r"></i> Back </button>
                      <button class="btn btn-sm btn-success margin-30" id="select-player-profile-tab-btn"> Advance <i class="fa fa-arrow-right push-5-l"></i></button>
                  </div>
                </div>
                <!-- END 2K Integration Tab -->

                <!-- Player Profile Tab -->
                <div class="tab-pane fade" id="tab-player-profile">
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
                                        <option value="Sharp Shooter" @if(old('archetype', $archetype) == 'Sharp Shooter') selected @endif>Sharp Shooter</option>
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
                                    <label for="archetype2">Secondary Archetype</label>
                                    <select class="form-control" id="archetype2" name="archetype2" size="5" multiple="no">
                                        <option value="Playmaker" @if(old('archetype', $archetype) == 'Playmaker') selected @endif>Playmaker</option>
                                        <option value="Lockdown Defender" @if(old('archetype', $archetype) == 'Lockdown Defender') selected @endif>Lockdown Defender</option>
                                        <option value="Sharp Shooter" @if(old('archetype', $archetype) == 'Sharp Shooter') selected @endif>Sharp Shooter</option>
                                        <option value="Slasher" @if(old('archetype', $archetype) == 'Slasher') selected @endif>Slasher</option>
                                        <option value="Athletic Finisher" @if(old('archetype', $archetype) == 'Athletic Finisher') selected @endif>Athletic Finisher</option>
                                        <option value="Stretch Big" @if(old('archetype', $archetype) == 'Stretch Big') selected @endif>Stretch Big</option>
                                        <option value="Post Scorer" @if(old('archetype', $archetype) == 'Post Scorer') selected @endif>Post Scorer</option>
                                        <option value="Glass Cleaner" @if(old('archetype', $archetype) == 'Glass Cleaner') selected @endif>Glass Cleaner</option>
                                        <option value="Point Forward" @if(old('archetype', $archetype) == 'Point Forward') selected @endif>Point Forward</option>
                                        <option value="Shot Creator" @if(old('archetype', $archetype) == 'Shot Creator') selected @endif>Shot Creator</option>
                                    </select>
                                    @if($errors->get('archetype2'))
                                      <ul class="errors">
                                      @foreach($errors->get('archetype2') as $error)
                                        <li>{{ $error }}</li>
                                      @endforeach
                                      </ul>
                                    @endif
                                </div>
                                <div class="col-md-4 col-xs-6">
                                    <label for="overall">Overall</label>
                                    <select class="form-control" id="overall" name="overall" size="5" multiple="no">
                                      @for($i=60; $i<=100; $i++)
                                        <option value="{{$i}}" @if(old('overall', $overall) == $i) selected @endif>{{$i}}</option>
                                      @endfor
                                    </select>
                                    @if($errors->get('overall'))
                                      <ul class="errors">
                                      @foreach($errors->get('overall') as $error)
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
                    <div class="block-content text-center remove-padding">
                        <button class="btn btn-sm btn-default margin-30" id="back-integration-tab-btn"><i class="fa fa-arrow-left push-5-r"></i> Back </button>
                        <button class="btn btn-sm btn-success margin-30" id="select-stats-tab-btn"> Advance <i class="fa fa-arrow-right push-5-l"></i></button>
                    </div>
                </div>
                <!-- END Player Profile Tab -->


                <!-- Privacy Tab -->
                <div class="tab-pane fade" id="tab-stats">
                    <div class="row items-push push-15-t">
                        <div class="col-sm-6 col-sm-offset-3 form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-6 form-material">
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
                                <div class="col-xs-6 form-material">
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
                            </div>
                            <div class="form-group">
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
                    <div class="block-content text-center remove-padding">

                        <button class="btn btn-sm btn-default margin-30" id="back-player-profile-tab-btn"><i class="fa fa-arrow-left push-5-r"></i> Back </button>
                        <button class="btn btn-sm btn-primary margin-30" type="submit"><i class="fa fa-check push-5-r"></i> Update Player</button>
                    </div>
                </div>
                <!-- END Privacy Tab -->
            </div>
            <div class="block-content bg-gray-lighter text-center remove-padding">
                <button class="btn btn-sm btn-warning margin-30" type="reset"><i class="fa fa-refresh push-5-r"></i> Reset</button>
            </div>
        </div>

    </form>
    <!-- END Main Content -->
</div>
<!-- END Page Content -->

@endsection


@section('page-js')
<script>
    $('#select-player-profile-tab-btn').click(function(e){
        e.preventDefault();
        $('#new-player-tabs a[href="#tab-player-profile"]').tab('show');
    })
    $('#select-integrations-tab-btn').click(function(e){
        e.preventDefault();
        $('#new-player-tabs a[href="#tab-integration-settings"]').tab('show');
    })
    $('#select-stats-tab-btn').click(function(e){
        e.preventDefault();
        $('#new-player-tabs a[href="#tab-stats"]').tab('show');
    })
    $('#back-player-profile-tab-btn').click(function(e){
        e.preventDefault();
        $('#new-player-tabs a[href="#tab-player-profile"]').tab('show');
    })
    $('#back-integration-tab-btn').click(function(e){
        e.preventDefault();
        $('#new-player-tabs a[href="#tab-integration-settings"]').tab('show');
    })
    $('#back-account-settings-tab-btn').click(function(e){
        e.preventDefault();
        $('#new-player-tabs a[href="#tab-account-settings"]').tab('show');
    })

</script>
@endsection
