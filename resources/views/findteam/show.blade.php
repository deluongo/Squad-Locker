@extends('layouts.interface')

@section('css')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{URL::asset('/js/plugins/datatables/jquery.dataTables.min.css') }}">
@endsection

@section('title')
    Find Teams
@endsection


@section('main')
    <!-- Page Header -->
    <div class="content bg-charcoal">
        <div class="row items-push">
            <div class="col-sm-7 clearfix">
                <div class="push-15-r pull-left">
                    <span>
                        <img class="img-avatar" src="{{asset('/img/avatars/prettyboyfredo.jpg')}}" alt="">
                    </span>
                </div>
                <h2 class="page heading push-5-t text-white">{{$name}}</h2>
                <h2 class="h5 text-white-op">{{$affiliation}} | {{$position}} | {{$archetype}}</h2>
            </div>
            <div class="col-sm-5 text-right hidden-xs">
                <ol class="breadcrumb push-10-t">
                    <li><a class="larger text-white-op" href="/free-agency/teams">
                        Find Teams
                    </a></li>
                    <i class="fa fa-angle-right push-5-r push-5-l"></i>
                    <li><a class="link-effect larger" href="/free-agency">
                        Find Players
                    </a></li>
                </ol>
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

            <!-- Filter Forms -->
            <form action="/free-agency/teams" method="post">
                {{ csrf_field() }}
                <div class="block h5">
                    <div class="block-content">
                        <div class="row items-push">
                            <div class="form-group">
                                <div class="form-horizontal push-20-l push-20-r">
                                    <div class="col-xs-6 col-sm-4 col-lg-2">
                                        <label for="search_movement">Movement</label>
                                        <select class="form-control" id="search_movement" name="search_movement[]" size="5" multiple="true">
                                            <option value="Ball-Movement" @if(in_array('Ball-Movement', $search_movement)) selected @endif>Ball-Movement</option>
                                            <option value="Isolation" @if(in_array('Isolation', $search_movement)) selected @endif>Isolation</option>
                                            <option value="7 Seconds" @if(in_array('7 Seconds', $search_movement)) selected @endif>7 Seconds</option>
                                            <option value="Run & Gun" @if(in_array('Run & Gun', $search_movement)) selected @endif>Run & Gun</option>
                                            <option value="Player Movement" @if(in_array('Player Movement', $search_movement)) selected @endif>Player Movement</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-lg-2">
                                        <label for="search_affiliation_type">Affiliation | Type</label>
                                        <select class="form-control" id="search_affiliation_type" name="search_affiliation_type[]" size="5" multiple="true">
                                            <option value="Pro-Am Team" @if(in_array('Pro-Am Team', $search_affiliation_type)) selected @endif>Pro-Am Team</option>
                                            <option value="Rivit City" @if(in_array('Rivit City', $search_affiliation_type)) selected @endif>Rivit City</option>
                                            <option value="Sunset Beach" @if(in_array('Sunset Beach', $search_affiliation_type)) selected @endif>Sunset Beach</option>
                                            <option value="Old Town" @if(in_array('Old Town', $search_affiliation_type)) selected @endif>Old Town</option>
                                            <option value="Cross Park Squad" @if(in_array('Cross Park Squad', $search_affiliation_type)) selected @endif>Cross Park Squad</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-lg-2">
                                        <label for="search_tempo">Tempo</label>
                                        <select class="form-control" id="search_tempo" name="search_tempo[]" size="5" multiple="true">
                                            <option value="Fast" @if(in_array('Fast', $search_tempo)) selected @endif>Fast</option>
                                            <option value="Uptempo" @if(in_array('Uptempo', $search_tempo)) selected @endif>Uptempo</option>
                                            <option value="Deliberate" @if(in_array('Deliberate', $search_tempo)) selected @endif>Deliberate</option>
                                            <option value="Patient" @if(in_array('Patient', $search_tempo)) selected @endif>Patient</option>
                                            <option value="Slow" @if(in_array('Slow', $search_tempo)) selected @endif>Slow</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-lg-2">
                                        <label for="search_offense">Offense</label>
                                        <select class="form-control" id="search_offense" name="search_offense[]" size="5" multiple="true">
                                            <option value="Motion" @if(in_array('Motion', $search_offense)) selected @endif>Motion</option>
                                            <option value="Triangle" @if(in_array('Triangle', $search_offense)) selected @endif>Triangle</option>
                                            <option value="Free Lance" @if(in_array('Free Lance', $search_offense)) selected @endif>Free Lance</option>
                                            <option value="Inside Out" @if(in_array('Inside Out', $search_offense)) selected @endif>Inside Out</option>
                                            <option value="7 Seconds" @if(in_array('7 Seconds', $search_offense)) selected @endif>7 Seconds</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-lg-2">
                                        <label for="search_defense">Defense</label>
                                        <select class="form-control" id="search_defense" name="search_defense[]" size="5" multiple="true">
                                            <option value="Team-D" @if(in_array('Team-D', $search_defense)) selected @endif>Team-D</option>
                                            <option value="Man" @if(in_array('Man', $search_defense)) selected @endif>Man</option>
                                            <option value="No-Help" @if(in_array("No-Help", $search_defense)) selected @endif>No-Help</option>
                                            <option value="Zone" @if(in_array("Zone", $search_defense)) selected @endif>Zone</option>
                                            <option value="Cross-Match" @if(in_array("Cross-Match", $search_defense)) selected @endif>Cross-Match</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-lg-2">
                                        <label for="search_members">Team Members</label>
                                        <select class="form-control" id="search_members" name="search_members[]" size="5" multiple="true">
                                            <option value=1 @if(in_array(1, $search_members)) selected @endif>1</option>
                                            <option value=2 @if(in_array(2, $search_members)) selected @endif>2</option>
                                            <option value=3 @if(in_array(3, $search_members)) selected @endif>3</option>
                                            <option value=4 @if(in_array(4, $search_members)) selected @endif>4</option>
                                            <option value=5 @if(in_array(5, $search_members)) selected @endif>5</option>
                                            <option value=6 @if(in_array(6, $search_members)) selected @endif>6</option>
                                            <option value=7 @if(in_array(7, $search_members)) selected @endif>7</option>
                                            <option value=8 @if(in_array(8, $search_members)) selected @endif>8+</option>
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

        <div class="block">
            <div class="block-header">

            </div>
            <div class="block-content">
                <div class="block">
                    <div class="block-content">
                        <table class="table table-bordered table-striped table-condensed table-hover js-dataTable-full dataTable no-footer table-header-bg" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                            <thead>
                                <tr role="row">
                                    <th class="hidden-sm hidden-xs" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 100px;">Name</th>
                                    <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Play Type: activate to sort column ascending" style="width: 50px;">Feel</th>
                                    <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 100px;">Tempo</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Play Style: activate to sort column ascending" style="width: 100px;">Off</th>
                                    <th class="hidden-md sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Play Style: activate to sort column ascending" style="width: 50px;">Def</th>
                                    <th class="sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Team Grade: activate to sort column ascending">Team</th>
                                    <th class="sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Skill Grade: activate to sort column ascending">Skill</th>
                                    <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">PER</th>
                                    <th class="hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">FG%</th>
                                    <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">APG</th>
                                    <th class="hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">A/P</th>
                                    <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">PPG</th>
                                    <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 40px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">RPG</th>
                                    <th class="text-center sorting_disabled" style="width: 40px;" rowspan="1" colspan="1" aria-label="Actions">Act</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teams as $team)
                                    @if(in_array($team->type, $search_type) AND in_array($team->movement, $search_movement) AND in_array($team->tempo, $search_tempo)
                                        AND in_array($team->offense, $search_offense) AND in_array($team->affiliation, $search_affiliation_type) AND in_array($team->defense, $search_defense)
                                        AND in_array($team->num_players, $search_members))
                                        <tr role="row" @if ($team->id & 1) class="odd" @else class="even" @endif>
                                            <td class="hidden-sm hidden-xs font-w600">{{ $team->name }}</td>
                                            <td class="hidden-xs">{{ $team->movement }}</td>
                                            <td class="hidden-xs">{{ $team->tempo}}</td>
                                            <td class="">{{ $team->offense }}</td>
                                            <td class="hidden-md">{{ $team->defense }}</td>
                                            <td class="center">
                                                <h3 class="text-{{$team->team_grade_color}} table-font">{{ $team->team_grade }}</h3>
                                            </td>

                                            <td class="center">
                                                <h3 class="text-{{$team->skill_grade_color}} table-font">{{ $team->skill_grade }}</h3>
                                            </td>
                                            <td class="hidden-md hidden-sm hidden-xs sorting {{$team->per_color}} table-num">{{ $team->per }}</td>
                                            <td class="hidden-sm hidden-xs sorting {{$team->fg_color}} table-num">{{ $team->fg }}%</td>
                                            <td class="hidden-md hidden-sm hidden-xs sorting {{$team->apg_color}} table-num">{{ $team->apg}}</td>
                                            <td class="hidden-sm hidden-xs sorting {{$team->apg_ppg_color}} table-num">{{ $team->apg_ppg }}</td>
                                            <td class="hidden-md hidden-sm hidden-xs sorting {{$team->ppg_color}} table-num">{{ $team->ppg }}</td>
                                            <td class="hidden-md hidden-sm hidden-xs sorting {{$team->rpg_color}} table-num">{{ $team->rpg }}</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-success push-5-t" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-plus"></i></button>
                                                    <a class="btn btn-xs btn-default push-5-t" href="/free-agency" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></a>
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
        </div>
    </div>


    <!-- END Page Content -->
@endsection

@section('page-js')
    <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
    <script src="{{URL::asset('/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>

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
                    columnDefs: [ { orderable: true, targets: [ 9 ] } ],
                    pageLength: 10,
                    lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]]
                });
            };

            // Init full extra DataTable, for more examples you can check out https://www.datatables.net/
            var initDataTableFullPagination = function() {
                jQuery('.js-dataTable-full-pagination').dataTable({
                    pagingType: "full_numbers",
                    columnDefs: [ { orderable: true, targets: [ 9 ] } ],
                    pageLength: 10,
                    lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]]
                });
            };

            // Init simple DataTable, for more examples you can check out https://www.datatables.net/
            var initDataTableSimple = function() {
                jQuery('.js-dataTable-simple').dataTable({
                    columnDefs: [ { orderable: true, targets: [ 9 ] } ],
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
@endsection
