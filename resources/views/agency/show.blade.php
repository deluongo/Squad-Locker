@extends('layouts.interface')

@section('css')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{URL::asset('/js/plugins/datatables/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
@endsection

@section('title')
    Find Players
@endsection


@section('main')
    <!-- Page Header -->
    <div class="background-white-op">
        <div class="content bg-black">
            <div class="row items-push">
                <div class="col-sm-7 clearfix">
                    <div class="push-15-r pull-left">
                        <span>
                            <img class="img-avatar" src="{{asset('/img/avatars/prettyboyfredo.jpg')}}" alt="">
                        </span>
                    </div>
                    <h2 class="page heading push-5-t text-white">{{$name}}</h2>
                    <h2 class="h5 text-white-op">{{$position}} | {{$archetype}} | {{$archetype2}} </h2>
                </div>
                <div class="col-sm-5 text-right hidden-xs">
                    <ul class="breadcrumb push-10-t">
                        <li>
                            <a class="link-effect larger" href="/free-agency/teams">Find Teams</a>
                            <i class="fa fa-angle-left push-5-r push-5-l"></i>
                            <a class="larger text-white-op" href="/free-agency">Find Players</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Header -->

    <!-- Page Content -->
    <div class="content">
        <!-- My Block -->
        <div class="block">
            <div class="block-header bg-gray-light">
                <ul class="block-options">
                    <li>
                        <button ><i class="si si-settings"></i></button>
                    </li>
                    <li>
                        <button  data-toggle="block-option" data-action="fullscreen_toggle"></button>
                    </li>
                    <li>
                        <button  data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                    </li>
                </ul>
            </div>
            <div class="row items-push">
                <div class=" col-sm-12 form-horizontal">
                    <div class="btn-group btn-group-justified">
                        <a class="btn-group text-gray" href='/free-agency/teams'>
                            <div class="img-container fx-img-rotate-l picture-button">
                                <img class="img-responsive" src="{{asset('/img/photos/teamjordan.jpg')}}" alt="">
                                <div class="img-options picture-button ">
                                    <div class="img-options-content picture-button">
                                        <i class="si si-social-dribbble push-5-r fa-lg"></i>
                                        <span class="h4">Find Teams</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="btn-group text-gray" href='/free-agency'>
                            <div class="btn-group text-gray">
                                <div class="img-container fx-img-rotate-r picture-button">
                                    <img class="img-responsive" src="{{asset('/img/photos/player-agency.jpg')}}" alt="">
                                    <div class="img-options picture-button ">
                                        <div class="img-options-content picture-button">
                                            <i class="si si-game-controller push-5-r fa-lg"></i>
                                            <span class="h4">Find Players</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Filter Form Content -->
            <form action="/free-agency" method="post">
                {{ csrf_field() }}
                <div class="block h5">
                    <div class="block-content">
                        <div class="row items-push">
                            <div class="form-group">
                                <div class="form-horizontal push-20-l push-20-r">
                                    <div class="col-xs-4 col-sm-3 col-lg-4">
                                        <label for="search_archetype">Archetype</label>
                                        <select class="form-control" id="search_archetype" name="search_archetype[]" size="5" multiple>
                                            <option value="Playmaker" @if(in_array('Playmaker', $search_archetype))  selected @endif>Playmaker</option>
                                            <option value="Lockdown Defender" @if(in_array('Lockdown Defender', $search_archetype)) selected @endif>Lockdown Defender</option>
                                            <option value="Sharp Shooter" @if(in_array('Sharp Shooter', $search_archetype)) selected @endif>Sharp Shooter</option>
                                            <option value="Slasher" @if(in_array('Slasher', $search_archetype)) selected @endif>Slasher</option>
                                            <option value="Athletic Finisher" @if(in_array('Athletic Finisher', $search_archetype)) selected @endif>Athletic Finisher</option>
                                            <option value="Stretch Big" @if(in_array('Stretch Big', $search_archetype)) selected @endif>Stretch Big</option>
                                            <option value="Post Scorer" @if(in_array('Post Scorer', $search_archetype)) selected @endif>Post Scorer</option>
                                            <option value="Glass Cleaner" @if(in_array('Glass Cleaner', $search_archetype)) selected @endif>Glass Cleaner</option>
                                            <option value="Point Forward" @if(in_array('Point Forward', $search_archetype)) selected @endif>Point Forward</option>
                                            <option value="Shot Creator" @if(in_array('Shot Creator', $search_archetype)) selected @endif>Shot Creator</option>
                                        </select>
                                    </div>


                                    <div class="col-xs-3 col-lg-4">

                                        <label for="search_overall">Player's Overall Range:</label>


                                        Note that the slider handle that caused the value change is focused.

                                        <input id="search_overall" name="search_overall" value="" data-slider-min="60" data-slider-max="99" data-slider-step="1" data-slider-value="[{{intval($search_overall_min)}},{{intval($search_overall_max)}}]"/>


                                        <input id="search_overall_min" name="search_overall_min" class="hidden" value="{{intval($search_overall_min)}}" />
                                        <input id="search_overall_max" name="search_overall_max" class="hidden"  value="{{intval($search_overall_max)}}" />

                                    </div>
                                    <div class="col-xs-4 col-sm-3 col-lg-4">
                                        <label for="search_archetype2">Archetype 2</label>
                                        <select class="form-control" id="search_archetype2" name="search_archetype2[]" size="5" multiple>
                                            <option value="Playmaker" @if(in_array('Playmaker', $search_archetype2))  selected @endif>Playmaker</option>
                                            <option value="Lockdown Defender" @if(in_array('Lockdown Defender', $search_archetype2)) selected @endif>Lockdown Defender</option>
                                            <option value="Sharp Shooter" @if(in_array('Sharp Shooter', $search_archetype2)) selected @endif>Sharp Shooter</option>
                                            <option value="Slasher" @if(in_array('Slasher', $search_archetype2)) selected @endif>Slasher</option>
                                            <option value="Athletic Finisher" @if(in_array('Athletic Finisher', $search_archetype2)) selected @endif>Athletic Finisher</option>
                                            <option value="Stretch Big" @if(in_array('Stretch Big', $search_archetype2)) selected @endif>Stretch Big</option>
                                            <option value="Post Scorer" @if(in_array('Post Scorer', $search_archetype2)) selected @endif>Post Scorer</option>
                                            <option value="Glass Cleaner" @if(in_array('Glass Cleaner', $search_archetype2)) selected @endif>Glass Cleaner</option>
                                            <option value="Point Forward" @if(in_array('Point Forward', $search_archetype2)) selected @endif>Point Forward</option>
                                            <option value="Shot Creator" @if(in_array('Shot Creator', $search_archetype2)) selected @endif>Shot Creator</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-4 col-sm-2 col-lg-1">
                                        <label for="search_position">Position</label>
                                        <select class="form-control" id="search_position" name="search_position[]" size="5" multiple>
                                            <option value="PG" @if(in_array('PG', $search_position)) selected @endif>PG</option>
                                            <option value="SG" @if(in_array('SG', $search_position)) selected @endif>SG</option>
                                            <option value="SF" @if(in_array('SF', $search_position)) selected @endif>SF</option>
                                            <option value="PF" @if(in_array('PF', $search_position)) selected @endif>PF</option>
                                            <option value="C" @if(in_array('C', $search_position)) selected @endif>C</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-lg-2">
                                        <label for="search_type">Type | Role</label>
                                        <select class="form-control" id="search_type" name="search_type[]" size="5" multiple>
                                            <option value="On-Ball | Facilitator" @if(in_array('On-Ball | Facilitator', $search_type_role)) selected @endif>On-Ball | Facilitator</option>
                                            <option value="On-Ball | Scorer" @if(in_array('On-Ball | Scorer', $search_type_role)) selected @endif>On-Ball | Scorer</option>
                                            <option value="Off-Ball | Facilitator" @if(in_array('Off-Ball | Facilitator', $search_type_role)) selected @endif>Off-Ball | Facilitator</option>
                                            <option value="Off-Ball | Finisher" @if(in_array('Off-Ball | Finisher', $search_type_role)) selected @endif>Off-Ball | Finisher</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-lg-3">
                                        <label for="search_style">Style</label>
                                        <select class="form-control" id="search_style" name="search_style[]" size="5" multiple>
                                            <option value="Dribble-N-Dime" @if(in_array('Drible-N-Dime', $search_style)) selected @endif>Dribble-N-Dime</option>
                                            <option value="Run-The-Break"  @if(in_array('Run-The-Break', $search_style)) selected @endif>Run-The-Break</option>
                                            <option value="Pass-To-Assist-King" @if(in_array('Pass-To-Assist-King', $search_style)) selected @endif>Pass-To-Assist-King</option>
                                            <option value="Assist-King" @if(in_array('Assist-King', $search_style)) selected @endif>Assist-King</option>
                                            <option value="Ball-Movement-Coach" @if(in_array('Ball-Movement-Coach', $search_style)) selected @endif>Ball-Movement-Coach</option>
                                            <option value="Screen-And-D" @if(in_array('Screen-And-D', $search_style)) selected @endif>Screen-And-D</option>
                                            <option value="Inside-Out-Big" @if(in_array('Inside-Out-Big', $search_style)) selected @endif>Inside-Out-Big</option>
                                            <option value="Defensive-Anchor" @if(in_array('Defensive-Anchor', $search_style)) selected @endif>Defensive-Anchor</option>
                                            <option value="Boards-N-Outlets" @if(in_array('Boards-N-Outlets', $search_style)) selected @endif>Boards-N-Outlets</option>
                                            <option value="Putback-King" @if(in_array('Putback-King', $search_style)) selected @endif>Putback-King</option>
                                            <option value="Shot-Creator" @if(in_array('Shot-Creator', $search_style)) selected @endif>Shot-Creator</option>

                                            <option value="Ankle-Breaking-Driver" @if(in_array('Ankle-Breaking-Driver', $search_style)) selected @endif>Ankle-Breaking-Driver</option>
                                            <option value="Blow-By-Dunker" @if(in_array('Blow-By-Dunker', $search_style)) selected @endif>Blow-By-Dunker</option>
                                            <option value="Isolation-Specialist" @if(in_array('Isolation-Specialist', $search_style)) selected @endif>Isolation-Specialist</option>
                                            <option value="Post-Move-Master" @if(in_array('Post-Move-Master', $search_style)) selected @endif>Post-Move-Master</option>
                                            <option value="Fast-Break-Finisher" @if(in_array('Fast-Break-Finisher', $search_style)) selected @endif>Fast-Break-Finisher</option>
                                            <option value="Pick-N-Roll-Big" @if(in_array('Pick-N-Roll-Big', $search_style)) selected @endif>Pick-N-Roll-Big</option>
                                            <option value="Second-Chance-Only" @if(in_array('Second-Chance-Only', $search_style)) selected @endif>Second-Chance-Only</option>
                                            <option value="Backdoor-Posterizer" @if(in_array('Backdoor-Posterizer', $search_style)) selected @endif>Backdoor-Posterizer</option>
                                            <option value="Catch-N-Shoot" @if(in_array('Catch-N-Shoot', $search_style)) selected @endif>Catch-N-Shoot</option>
                                            <option value="Slash-N-Shoot" @if(in_array('Slash-N-Shoot', $search_style)) selected @endif>Slash-N-Shoot</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="push-20-t text-center margin-10">
                        <button class="btn btn-sm btn-primary push-15" name="submit_type" value="filter" type="submit"><i class="fa fa-check push-5-r"></i> Save Changes</button>
                        <button class="btn btn-sm btn-warning push-15" type="reset"><i class="fa fa-refresh push-5-r"></i> Reset</button>
                    </div>
                </div>
            </form>
            <div class="block" id="data-table-div">
                <div class="block-header">

                </div>
                <div class="block-content">
                   <table class="table table-bordered table-striped table-condensed table-hover js-dataTable-full dataTable no-footer table-header-bg" id="DataTables_Table_1" role="grid"> <!--aria-describedby="DataTables_Table_1_info"-->
                       <thead>
                           <tr role="row">
                               <th class="hidden-sm hidden-xs" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 150px;">Name</th>
                               <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Play Type: activate to sort column ascending" style="width: 250px;">Type</th>
                               <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 150px;">Role</th>
                               <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Play Style: activate to sort column ascending" style="width: 350px;">Style</th>
                               <th class="sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Team Grade: activate to sort column ascending">Team</th>
                               <th class="sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Skill Grade: activate to sort column ascending">Skill</th>
                               <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">PER</th>
                               <th class="hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">FG%</th>
                               <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">APG</th>
                               <th class="hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">A/P</th>
                               <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">PPG</th>
                               <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">RPG</th>
                               <th class="text-center sorting_disabled" style="width: 40px;" rowspan="1" colspan="1" aria-label="Actions">Act</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($players as $player)
                               @if(in_array($player->type, $search_type) AND in_array($player->role, $search_role) AND in_array($player->style, $search_style)
                                   AND in_array($player->position, $search_position) AND ($player->overall > intval($search_overall_min)) AND ($player->overall < intval($search_overall_max))
                                   AND in_array($player->archetype, $search_archetype) AND in_array($player->archetype2, $search_archetype2))
                                   <tr role="row" @if ($player->id & 1) class="odd" @else class="even" @endif>
                                       <td class="hidden-sm hidden-xs font-w600"><a href="/player/{{ $player->name}}">{{ $player->name }}</a></td>
                                       <td class="hidden-xs">{{ $player->type }}</td>
                                       <td class="hidden-xs">{{ $player->role }}</td>
                                       <td class="">{{ $player->style }}</td>
                                       <td class="center sorting">
                                           <h3 class="text-{{$player->team_grade_color}} table-font">{{ $player->team_grade }}</h3>
                                       </td>
                                       <td class="center sorting">
                                           <h3 class="text-{{$player->skill_grade_color}} table-font">{{ $player->skill_grade }}</h3>
                                       </td>
                                       <td class="hidden-md hidden-sm hidden-xs sorting {{$player->per_color}} table-num">{{ $player->per }}</td>
                                       <td class="hidden-sm hidden-xs sorting {{$player->fg_color}} table-num">{{ $player->fg }}%</td>
                                       <td class="hidden-md hidden-sm hidden-xs sorting {{$player->apg_color}} table-num">{{ $player->apg}}</td>
                                       <td class="hidden-sm hidden-xs sorting {{$player->apg_ppg_color}} table-num">{{ $player->apg_ppg }}</td>
                                       <td class="hidden-md hidden-sm hidden-xs sorting {{$player->ppg_color}} table-num">{{ $player->ppg }}</td>
                                       <td class="hidden-md hidden-sm hidden-xs sorting {{$player->rpg_color}} table-num">{{ $player->rpg }}</td>
                                       <td class="text-center">
                                           <div class="btn-group">



                                               @if($player->name == Auth::user()->name)
                                               <button class="btn btn-xs btn-info push-5-t"  name="submit_type" value="{{$player->id}}" type="submit" disabled><i class="fa fa-user"></i></button>

                                               @elseif(sizeof($send_invite_from_one_of_these_teams) == 0)
                                               <button class="btn btn-xs btn-success push-5-t"  name="submit_type" value="{{$player->id}}" type="submit" disabled><i class="fa fa-plus"></i></button>

                                               @elseif(sizeof($send_invite_from_one_of_these_teams) == 1)
                                               <button class="btn btn-xs btn-success push-5-t"  name="submit_type" value="{{$player->id}}|{{$send_invite_from_one_of_these_teams[0]->id}}" type="submit"><i class="fa fa-plus"></i></button>

                                               @else
                                               <div class="btn-group pull-right push-50-t push-5-r">

                                                   <button class="btn btn-xs btn-success push-5-t dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus"></i></button>


                                                   <ul class="dropdown-menu dropdown-menu-right nav-users push">
                                                       <li class="dropdown-header">From</li>
                                                       @foreach($send_invite_from_one_of_these_teams as $team)
                                                               <li>
                                                                   <a tabindex="-1" name="submit_type" value="{{$player->id}}|{{$send_invite_from_one_of_these_teams[0]->id}}" type="submit">
                                                                       <div class="font-18px font-w400">{{ $team->name }} <span class="text-{{$team->progress_bar_color}}"> ({{ $team->wins }} - {{ $team->losses }}) </span> </div>
                                                                       <div class="font-w400 text-muted h5"> <span class="text-{{$team->team_grade_color}}"> {{ $team->team_grade }} </span> | <span class="text-{{$team->skill_grade_color}}"> {{  $team->skill_grade }}</span> | <span class="text-{{$team->per_color}}"> {{ $team->per }} <small><small><small>PER</small></small></small></span>  | <span class="text-{{$team->ppg_color}}"> {{ $team->ppg }} <small><small><small>PPG</small></small></small></span>  | <span class="text-{{$team->apg_color}}"> {{ $team->apg }} <small><small><small>APG</small></small></small></span></div>
                                                                   </a>
                                                               </li>
                                                       @endforeach
                                                   </ul>
                                               </div>
                                               @endif
                                            </div>
                                       </td>
                                   </tr>
                               @endif
                           @endforeach
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
        <!-- END Filtr Form -->

    </div>
    <!-- END Page Content -->
@endsection

@section('page-js')

    <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
    <script src="{{URL::asset('/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>

    <script>



        /*
         *  Description: Ajax Form Submit Handler
         */
        $(document).ready(function(){
           console.log("here");



           // Without JQuery
           var slider = new Slider('#search_overall', {});

           slider.on("slide", function(slideEvt) {
                console.log(slider.getValue() );
                var overall_vals = slider.getValue();
                $("#search_overall_min").val(overall_vals[0]);
                $("#search_overall_max").val(overall_vals[1]);
           });





            $('#data-table-div').change(function(){
                  console.log("here");
                  var id = $(this).val();
                  $.ajax({
                      url:"/agency/store",
                      method: "POST",
                      data: $(this).serialize(),
                      success: function(data){
                          $('#data-table-div').html(data.html);
                      }
                  });
              });

          });







        /*
         *  Document   : base_tables_datatables.js
         *  Author     : pixelcave
         *  Description: Custom JS code used in Tables Datatables Page
         */

        var BaseTableDatatables = function() {
            // Init full DataTable, for more examples you can check out https://www.datatables.net/
            var initDataTableFull = function() {
                jQuery('.js-dataTable-full').dataTable({
                    columnDefs: [ { orderable: false, targets: [ 12 ] } ],
                    pageLength: 10,
                    lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]]
                });
            };

            // Init full extra DataTable, for more examples you can check out https://www.datatables.net/
            var initDataTableFullPagination = function() {
                jQuery('.js-dataTable-full-pagination').dataTable({
                    pagingType: "full_numbers",
                    columnDefs: [ { orderable: false, targets: [ 12 ] } ],
                    pageLength: 10,
                    lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]]
                });
            };

            // Init simple DataTable, for more examples you can check out https://www.datatables.net/
            var initDataTableSimple = function() {
                jQuery('.js-dataTable-simple').dataTable({
                    columnDefs: [ { orderable: false, targets: [ 12 ] } ],
                    pageLength: 10,
                    lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
                    searching: false,
                    oLanguage: {
                        sLengthMenu: ""
                    },
                    dom:
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-6'i><'col-sm-6'p>>"
                });
            };

            // DataTables Bootstrap integration
            var bsDataTables = function() {
                var $DataTable = jQuery.fn.dataTable;

                // Set the defaults for DataTables init
                jQuery.extend( true, $DataTable.defaults, {
                    dom:
                        "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-6'i><'col-sm-6'p>>",
                    renderer: 'bootstrap',
                    oLanguage: {
                        sLengthMenu: "_MENU_",
                        sInfo: "Showing <strong>_START_</strong>-<strong>_END_</strong> of <strong>_TOTAL_</strong>",
                        oPaginate: {
                            sPrevious: '<i class="fa fa-angle-left"></i>',
                            sNext: '<i class="fa fa-angle-right"></i>'
                        }
                    }
                });

                // Default class modification
                jQuery.extend($DataTable.ext.classes, {
                    sWrapper: "dataTables_wrapper form-inline dt-bootstrap",
                    sFilterInput: "form-control",
                    sLengthSelect: "form-control"
                });

                // Bootstrap paging button renderer
                $DataTable.ext.renderer.pageButton.bootstrap = function (settings, host, idx, buttons, page, pages) {
                    var api     = new $DataTable.Api(settings);
                    var classes = settings.oClasses;
                    var lang    = settings.oLanguage.oPaginate;
                    var btnDisplay, btnClass;

                    var attach = function (container, buttons) {
                        var i, ien, node, button;
                        var clickHandler = function (e) {
                            e.preventDefault();
                            if (!jQuery(e.currentTarget).hasClass('disabled')) {
                                api.page(e.data.action).draw(false);
                            }
                        };

                        for (i = 0, ien = buttons.length; i < ien; i++) {
                            button = buttons[i];

                            if (jQuery.isArray(button)) {
                                attach(container, button);
                            }
                            else {
                                btnDisplay = '';
                                btnClass = '';

                                switch (button) {
                                    case 'ellipsis':
                                        btnDisplay = '&hellip;';
                                        btnClass = 'disabled';
                                        break;

                                    case 'first':
                                        btnDisplay = lang.sFirst;
                                        btnClass = button + (page > 0 ? '' : ' disabled');
                                        break;

                                    case 'previous':
                                        btnDisplay = lang.sPrevious;
                                        btnClass = button + (page > 0 ? '' : ' disabled');
                                        break;

                                    case 'next':
                                        btnDisplay = lang.sNext;
                                        btnClass = button + (page < pages - 1 ? '' : ' disabled');
                                        break;

                                    case 'last':
                                        btnDisplay = lang.sLast;
                                        btnClass = button + (page < pages - 1 ? '' : ' disabled');
                                        break;

                                    default:
                                        btnDisplay = button + 1;
                                        btnClass = page === button ?
                                                'active' : '';
                                        break;
                                }

                                if (btnDisplay) {
                                    node = jQuery('<li>', {
                                        'class': classes.sPageButton + ' ' + btnClass,
                                        'aria-controls': settings.sTableId,
                                        'tabindex': settings.iTabIndex,
                                        'id': idx === 0 && typeof button === 'string' ?
                                                settings.sTableId + '_' + button :
                                                null
                                    })
                                    .append(jQuery('<a>', {
                                            'href': '#'
                                        })
                                        .html(btnDisplay)
                                    )
                                    .appendTo(container);

                                    settings.oApi._fnBindAction(
                                        node, {action: button}, clickHandler
                                    );
                                }
                            }
                        }
                    };

                    attach(
                        jQuery(host).empty().html('<ul class="pagination"/>').children('ul'),
                        buttons
                    );
                };

                // TableTools Bootstrap compatibility - Required TableTools 2.1+
                if ($DataTable.TableTools) {
                    // Set the classes that TableTools uses to something suitable for Bootstrap
                    jQuery.extend(true, $DataTable.TableTools.classes, {
                        "container": "DTTT btn-group",
                        "buttons": {
                            "normal": "btn btn-default",
                            "disabled": "disabled"
                        },
                        "collection": {
                            "container": "DTTT_dropdown dropdown-menu",
                            "buttons": {
                                "normal": "",
                                "disabled": "disabled"
                            }
                        },
                        "print": {
                            "info": "DTTT_print_info"
                        },
                        "select": {
                            "row": "active"
                        }
                    });

                    // Have the collection use a bootstrap compatible drop down
                    jQuery.extend(true, $DataTable.TableTools.DEFAULTS.oTags, {
                        "collection": {
                            "container": "ul",
                            "button": "li",
                            "liner": "a"
                        }
                    });
                }
            };

            return {
                init: function() {
                    // Init Datatables
                    bsDataTables();
                    initDataTableSimple();
                    initDataTableFull();
                    initDataTableFullPagination();
                }
            };
        }();

        // Initialize when page loads
        jQuery(function(){ BaseTableDatatables.init(); });


    </script>



    <!-- END Apps Modal -->


@endsection
