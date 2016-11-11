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
        <div class="bg-image" style="background-image: url('assets/img/photos/photo3@2x.jpg');">
            <div class="block-content bg-primary-op text-center overflow-hidden">
                <div class="push-30-t push animated fadeInDown">
                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="assets/img/avatars/avatar10.jpg" alt="">
                </div>
                <div class="push-30 animated fadeInUp">
                    <h2 class="h4 font-w600 text-white push-5">Bruce Edwards</h2>
                    <h3 class="h5 text-white-op">Web Designer</h3>
                </div>
            </div>
        </div>
        <!-- END Basic Info -->

        <!-- Stats -->
        <div class="block-content text-center">
            <div class="row items-push text-uppercase">
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">Sales</div>
                    <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">22000</a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">Products</div>
                    <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">16</a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">Followers</div>
                    <a class="h2 font-w300 text-primary animated flipInX" href="javascript:void(0)">2600</a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="font-w700 text-gray-darker animated fadeIn">3603 Ratings</div>
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
                                    <input class="form-control input-lg" type="text" id="gamertag" name="gamertag">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="profile-password">Tagline</label>
                                    <input class="form-control input-lg" type="text" id="tagline" name="tagline">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4">
                                    <label for="twitter">Twitter</label>
                                    <input class="form-control input-lg" type="text" id="twitter" name="twitter">
                                </div>
                                <div class="col-xs-4">
                                    <label for="youtube">Youtube</label>
                                    <input class="form-control input-lg" type="text" id="youtube" name="youtube">
                                </div>
                                <div class="col-xs-4">
                                    <label for="twitch">Twitch</label>
                                    <input class="form-control input-lg" type="text" id="twitch" name="twitch">
                                </div>

                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-xs-4">
                                    <label for="position">Position</label>
                                    <select class="form-control" id="position" name="position" size="5" multiple="no">
                                        <option value="PG" selected>Point Guard</option>
                                        <option value="SG">Shooting Guard</option>
                                        <option value="SF">Small Forward</option>
                                        <option value="PF">Power Forward</option>
                                        <option value="C">Center</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <label for="archetype">Archetype</label>
                                    <select class="form-control" id="archetype" name="archetype" size="5" multiple="no">
                                        <option value="Playmaker" selected>Playmaker</option>
                                        <option value="Lockdown Defender">Lockdown Defender</option>
                                        <option value="Sniper">Sniper</option>
                                        <option value="Slasher">Slasher</option>
                                        <option value="Athletic Finisher">Athletic Finisher</option>
                                        <option value="Stretch Big">Stretch Big</option>
                                        <option value="Post Scorer">Post Scorer</option>
                                        <option value="Glass Cleaner">Glass Cleaner</option>
                                        <option value="Point Forward">Point Forward</option>
                                        <option value="Shot Creator">Shot Creator</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <label for="affiliation">Affiliation</label>
                                    <select class="form-control" id="affiliation" name="affiliation" size="5" multiple="no">
                                        <option value="Rivit City" selected>Rivit City</option>
                                        <option value="Sunset Beach">Sunset Beach</option>
                                        <option value="Old Town">Old Town</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4">
                                    <label for="rep_status">Rep Status</label>
                                    <select class="form-control" id="rep_status" name="rep_status" size="5" multiple="no">
                                        <option value="Rookie" selected>Rookie</option>
                                        <option value="Pro">Pro</option>
                                        <option value="All-Star">All-Star</option>
                                        <option value="Superstar">Supertar</option>
                                        <option value="Legend">Legend</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <label for="status_level">Status Level</label>
                                    <select class="form-control" id="status_level" name="status_level" size="5" multiple="no">
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-xs-4">
                                    <label for="level_progress">Level Progress</label>
                                    <select class="form-control" id="level_progress" name="level_progress" size="5" multiple="no">
                                        <option value="0" selected>0%</option>
                                        <option value="20">20%</option>
                                        <option value="40">40%</option>
                                        <option value="60">60%</option>
                                        <option value="80">80%</option>
                                    </select>
                                </div>
                            </div>
                            <label>Play Style</label>
                            <div class="form-group">
                                <div class="col-xs-4">
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style" checked><span></span> Dribble-N-Dime
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Run-The-Break
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Pass-To-Assist-King
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Assist-King
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Ball-Movement-Coach
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Screen-And-D
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Inside-Out-Big
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Defensive Anchor
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Boards-N-Outlets
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Putback-King
                                    </label>
                                </div>
                                <div class="col-xs-4">
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Shot-Creator
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Ankle-Breaking-Driver
                                    </label>
                                    <label class="css-input css-radio css-radio-primary">
                                        <input type="radio" name="profile-gender-group"><span></span> Blow-By-Dunker
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Isolation-Specialist
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Post-Move-Master
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Fast-Break-Finisher
                                    </label>
                                </div>
                                <div class="col-xs-4">
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Pick-N-Roll-Big
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Second-Chance-Only
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Backdoor-Posterizer
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Catch-N-Shoot
                                    </label>
                                    <label class="css-input css-radio css-radio-primary push-10-r">
                                        <input type="radio" name="style"><span></span> Slash-N-Shoot
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
                                    <input class="form-control input-lg" type="text" id="username" name="username" placeholder="Update your username.." value="deluongo">
                                </div>
                                <div class="col-xs-4">
                                    <label for="profile-lastname">FG%</label>
                                    <input class="form-control input-lg" type="text" id="password" name="password" placeholder="Update your password..">
                                </div>
                                <div class="col-xs-4">
                                    <label for="profile-lastname">Password</label>
                                    <input class="form-control input-lg" type="text" id="password" name="password" placeholder="Update your password..">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Privacy Tab -->
            </div>
            <div class="block-content block-content-full bg-gray-lighter text-center">
                <button class="btn btn-sm btn-primary margin-10" type="submit"><i class="fa fa-check push-5-r"></i> Save Changes</button>
                <button class="btn btn-sm btn-warning margin-10" type="reset"><i class="fa fa-refresh push-5-r"></i> Reset</button>
            </div>
        </div>
    </form>
    <!-- END Main Content -->
</div>
<!-- END Page Content -->

@endsection
