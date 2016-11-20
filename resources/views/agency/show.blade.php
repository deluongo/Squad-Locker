@extends('layouts.interface')

@section('css')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{URL::asset('/js/plugins/datatables/jquery.dataTables.min.css') }}">
@endsection

@section('title')
    '$gamertag's Locker'
@endsection

@section('block-header')
        Free Agency
@endsection


@section('main')
    <!-- Page Header -->
    <div class="background-white-op">


    <div class="content bg-primary-darker">
        <div class="row items-push">
            <div class="col-sm-7 clearfix">
                <div class="push-15-r pull-left">
                    <span>
                        <img class="img-avatar" src="{{asset('/img/avatars/prettyboyfredo.jpg')}}" alt="">
                    </span>
                </div>
                <h2 class="page heading push-5-t">{{$name}}</h2>
                <h2 class="h5">{{$affiliation}} | {{$position}} | {{$archetype}}</h2>
            </div>
            <div class="col-sm-5 text-right hidden-xs">
                <ol class="breadcrumb push-10-t">
                    <li><a class="link-effect larger" href="/free-agency/teams">
                        Find Teams
                    </a></li>
                    <i class="fa fa-angle-left push-5-r push-5-l"></i>
                    <li><a class="larger" href="/free-agency">
                         Find Players
                    </a></li>
                </ol>
            </div>
        </div>
    </div>
        </div>
    <!-- END Page Header -->

    <!-- Page Content -->
    <div class="content">
        <!-- My Block -->
        <div class="block">
            <div class="block-header bg-gray-lighter">
                <ul class="block-options">
                    <li>
                        <button type="button"><i class="si si-settings"></i></button>
                    </li>
                    <li>
                        <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                    </li>
                    <li>
                        <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
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
            <!-- Main Content -->
            <form action="/free-agency" method="post">
                {{ csrf_field() }}
                <div class="block">
                    <div class="block-content">
                        <div class="row items-push">
                            <div class="form-group">
                                <div class="form-horizontal push-20-l push-20-r">
                                    <div class="col-xs-4 col-sm-2 col-lg-1">
                                        <label for="search_position">Position</label>
                                        <select class="form-control" id="search_position" name="search_position" size="5" multiple="no">
                                            <option value="PG" @if($search_position == 'PG') selected @endif>PG</option>
                                            <option value="SG" @if($search_position == 'SG') selected @endif>SG</option>
                                            <option value="SF" @if($search_position == 'SF') selected @endif>SF</option>
                                            <option value="PF" @if($search_position == 'PF') selected @endif>PF</option>
                                            <option value="C" @if($search_position == 'C') selected @endif>C</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-lg-2">
                                        <label for="search_affiliation">Affiliation</label>
                                        <select class="form-control" id="search_affiliation" name="search_affiliation" size="5" multiple="no">
                                            <option value="Pro-Am Team" @if($search_affiliation == 'Pro-Am Team') selected @endif>Pro-Am Team</option>
                                            <option value="Rivit City" @if($search_affiliation == 'Rivit City') selected @endif>Rivit City</option>
                                            <option value="Sunset Beach" @if($search_affiliation == 'Sunset Beach') selected @endif>Sunset Beach</option>
                                            <option value="Old Town" @if($search_affiliation == 'Old Town') selected @endif>Old Town</option>
                                            <option value="Cross Park Squad" @if($search_affiliation == 'Cross Park Squad') selected @endif>Cross Park Squad</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-lg-2">
                                        <label for="search_rep_status">Park Rep</label>
                                        <select class="form-control" id="search_rep_status" name="search_rep_status" size="5" multiple="no">
                                            <option value="Rookie" @if($search_rep_status == 'Rookie') selected @endif>Rookie</option>
                                            <option value="Pro" @if($search_rep_status == 'Pro') selected @endif>Pro</option>
                                            <option value="All-Star" @if($search_rep_status == 'All-Star') selected @endif>All-Star</option>
                                            <option value="Superstar" @if($search_rep_status == 'Superstar') selected @endif>Supertar</option>
                                            <option value="Legend" @if($search_rep_status == 'Legend') selected @endif>Legend</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-4 col-sm-2 col-lg-1">
                                        <label for="search_rep_level">Level</label>
                                        <select class="form-control" id="search_rep_level" name="search_rep_level" size="5" multiple="no">
                                            <option value="1" @if($search_rep_level == 1) selected @endif>1</option>
                                            <option value="2" @if($search_rep_level == 2) selected @endif>2</option>
                                            <option value="3" @if($search_rep_level == 3) selected @endif>3</option>
                                            <option value="4" @if($search_rep_level == 4) selected @endif>4</option>
                                            <option value="5" @if($search_rep_level == 5) selected @endif>5</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-lg-2">
                                        <label for="search_archetype">Archetype</label>
                                        <select class="form-control" id="search_archetype" name="search_archetype" size="5" multiple="no">
                                            <option value="Playmaker" @if($search_archetype == 'Playmaker') selected @endif>Playmaker</option>
                                            <option value="Lockdown Defender" @if($search_archetype == 'Lockdown Defender') selected @endif>Lockdown Defender</option>
                                            <option value="Sharp Shooter" @if($search_archetype == 'Sharp Shooter') selected @endif>Sniper</option>
                                            <option value="Slasher" @if($search_archetype == 'Slasher') selected @endif>Slasher</option>
                                            <option value="Athletic Finisher" @if($search_archetype == 'Athletic Finisher') selected @endif>Athletic Finisher</option>
                                            <option value="Stretch Big" @if($search_archetype == 'Stretch Big') selected @endif>Stretch Big</option>
                                            <option value="Post Scorer" @if($search_archetype == 'Post Scorer') selected @endif>Post Scorer</option>
                                            <option value="Glass Cleaner" @if($search_archetype == 'Glass Cleaner') selected @endif>Glass Cleaner</option>
                                            <option value="Point Forward" @if($search_archetype == 'Point Forward') selected @endif>Point Forward</option>
                                            <option value="Shot Creator" @if($search_archetype == 'Shot Creator') selected @endif>Shot Creator</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-lg-2">
                                        <label for="search_type">Type | Role</label>
                                        <select class="form-control" id="search_type" name="search_type" size="5" multiple="no">
                                            <option value="Ball-Dominant | Facilitator" @if($search_type == 'Ball-Dominant Facilitator') selected @endif>Ball-Dominant | Facilitator</option>
                                            <option value="Ball-Dominant | Scorer" @if($search_type == 'Ball-Dominant Scorer') selected @endif>Ball-Dominant | Scorer</option>
                                            <option value="Off-Ball | Facilitator" @if($search_type == 'Off-Ball Facilitator') selected @endif>Off-Ball | Facilitator</option>
                                            <option value="Off-Ball | Finisher" @if($search_type == 'Off-Ball Finisher') selected @endif>Off-Ball | Finisher</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 col-lg-2">
                                        <label for="search_style">Style</label>
                                        <select class="form-control" id="search_style" name="search_style" size="5" multiple="no">
                                            <option value="Dribble-N-Dime" @if($search_style == 'Dribble-N-Dime') selected @endif>Dribble-N-Dime</option>
                                            <option value="Run-The-Break" @if($search_style == 'Run-The-Break') selected @endif>Run-The-Break</option>
                                            <option value="Pass-To-Assist-King" @if($search_style == 'Pass-To-Assist-King') selected @endif>Pass-To-Assist-King</option>
                                            <option value="Assist-King" @if($search_style == 'Assist-King') selected @endif>Assist-King</option>
                                            <option value="Ball-Movement-Coach" @if($search_style == 'Ball-Movement-Coach') selected @endif>Ball-Movement-Coach</option>
                                            <option value="Screen-And-D" @if($search_style == 'Screen-And-D') selected @endif>Screen-And-D</option>
                                            <option value="Inside-Out-Big" @if($search_style == 'Inside-Out-Big') selected @endif>Inside-Out-Big</option>
                                            <option value="Defensive-Anchor" @if($search_style == 'Defensive-Anchor') selected @endif>Defensive-Anchor</option>
                                            <option value="Boards-N-Outlets" @if($search_style == 'Boards-N-Outlets') selected @endif>Boards-N-Outlets</option>
                                            <option value="Putback-King" @if($search_style == 'Putback-King') selected @endif>Putback-King</option>
                                            <option value="Shot-Creator" @if($search_style == 'Shot-Creator') selected @endif>Shot-Creator</option>

                                            <option value="Ankle-Breaking-Dimer" @if($search_style == 'Ankle-Breaking-Dimer') selected @endif>Ankle-Breaking-Dimer</option>
                                            <option value="Blow-By-Dunker" @if($search_style == 'Blow-By-Dunker') selected @endif>Blow-By-Dunker</option>
                                            <option value="Isolation-Specialist" @if($search_style == 'Isolation-Specialist') selected @endif>Isolation-Specialist</option>
                                            <option value="Post-Move-Master" @if($search_style == 'Post-Move-Master') selected @endif>Post-Move-Master</option>
                                            <option value="Fast-Break-Finisher" @if($search_style == 'Fast-Break-Finisher') selected @endif>Fast-Break-Finisher</option>
                                            <option value="Pick-N-Roll-Big" @if($search_style == 'Pick-N-Roll-Big') selected @endif>Pick-N-Roll-Big</option>
                                            <option value="Second-Chance-Only" @if($search_style == 'Second-Chance-Only') selected @endif>Second-Chance-Only</option>
                                            <option value="Backdoor-Posterizer" @if($search_style == 'Backdoor-Posterizer') selected @endif>Backdoor-Posterizer</option>
                                            <option value="Catch-N-Shoot" @if($search_style == 'Catch-N-Shoot') selected @endif>Catch-N-Shoot</option>
                                            <option value="Slash-N-Shoot" @if($search_style == 'Slash-N-Shoot') selected @endif>Slash-N-Shoot</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="push-20-t text-center margin-10">
                        <button class="btn btn-sm btn-primary push-15" type="submit"><i class="fa fa-check push-5-r"></i> Save Changes</button>
                        <button class="btn btn-sm btn-warning push-15" type="reset"><i class="fa fa-refresh push-5-r"></i> Reset</button>
                    </div>
                </div>
            </form>
        </div>
                        <!-- END Password Tab -->

        <div class="block">
            <div class="block-header">

            </div>
            <div class="block-content">
                <table class="table table-bordered table-striped table-condensed table-hover js-dataTable-full dataTable no-footer table-header-bg" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                    <thead>
                        <tr role="row">
                            <th class="hidden-sm hidden-xs" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 150px;">Name</th>
                            <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Play Type: activate to sort column ascending" style="width: 250px;">Type</th>
                            <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 150px;">Role</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Play Style: activate to sort column ascending" style="width: 350px;">Style</th>
                            <th class="sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Team Grade: activate to sort column ascending">Team</th>
                            <th class="sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Skille Grade: activate to sort column ascending">Skill</th>
                            <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">PER</th>
                            <th class="hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">FG%</th>
                            <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">APG</th>
                            <th class="hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">A/P</th>
                            <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">PPG</th>
                            <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">RPG</th>
                            <th class="text-center sorting_disabled" style="width: 40px;" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($players as $player)
                            <tr role="row" @if ($player->id & 1) class="odd" @else class="even" @endif>
                                <td class="hidden-sm hidden-xs font-w600">{{ $player->name }}</td>
                                <td class="hidden-xs">{{ $player->type }}</td>
                                <td class="hidden-xs">{{ $player->role }}</td>
                                <td class="">{{ $player->style }}</td>
                                <td class="center">
                                    <h3 class="text-{{$player->team_grade_color}} table-font">{{ $player->team_grade }}</h3>
                                </td>

                                <td class="center">
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
                                        <button class="btn btn-xs btn-success push-5-t" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-plus"></i></button>
                                        <button class="btn btn-xs btn-default push-5-t" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>


    <!-- END Page Content -->
@endsection

@section('page-js')
    <script>
            /*
         *  Document   : base_tables_datatables.js
         *  Author     : pixelcave
         *  Description: Custom JS code used in Tables Datatables Page
         */

        var BaseTableDatatables = function() {
            // Init full DataTable, for more examples you can check out https://www.datatables.net/
            var initDataTableFull = function() {
                jQuery('.js-dataTable-full').dataTable({
                    columnDefs: [ { orderable: false, targets: [ 4 ] } ],
                    pageLength: 10,
                    lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]]
                });
            };

            // Init full extra DataTable, for more examples you can check out https://www.datatables.net/
            var initDataTableFullPagination = function() {
                jQuery('.js-dataTable-full-pagination').dataTable({
                    pagingType: "full_numbers",
                    columnDefs: [ { orderable: false, targets: [ 4 ] } ],
                    pageLength: 10,
                    lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]]
                });
            };

            // Init simple DataTable, for more examples you can check out https://www.datatables.net/
            var initDataTableSimple = function() {
                jQuery('.js-dataTable-simple').dataTable({
                    columnDefs: [ { orderable: false, targets: [ 4 ] } ],
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
    <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
    <script src="{{URL::asset('/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>

    <!-- END Apps Modal -->


@endsection
