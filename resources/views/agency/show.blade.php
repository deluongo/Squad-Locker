@extends('layouts.interface')


@section('title')
    '$gamertag's Locker'
@endsection

@section('block-header')
        Free Agency
@endsection


@section('main')
    <!-- Page Header -->
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-7 clearfix">
                <div class="push-15-r pull-left">
                    <span>
                        <img class="img-avatar" src="{{asset('/img/avatars/prettyboyfredo.jpg')}}" alt="">
                    </span>
                </div>
                <h2 class="page heading push-5-t">CaptainAwesome650</h2>
                <h2 class="h5">Rivit City | PG | Playmaker</h2>
            </div>
            <div class="col-sm-5 text-right hidden-xs">
                <ol class="breadcrumb push-10-t">
                    <li>
                        Find Teams
                    </li>
                    <li><a class="link-effect" href="">
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
            <div class="block-header">
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
            <div class="block-content">
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">Dynamic Table <small>Full</small></h3>
                    </div>
                    <div class="block-content">

                                    <table class="table table-bordered table-striped table-condensed table-hover js-dataTable-full dataTable no-footer" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="hidden-sm hidden-xs" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 150px;">Name</th>
                                                <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Play Type: activate to sort column ascending" style="width: 150px;">Type</th>
                                                <th class="hidden-xs sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 150px;">Role</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Play Style: activate to sort column ascending" style="width: 150px;">Style</th>
                                                <th class="sorting" style="width: 92px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">Team</th>
                                                <th class="sorting" style="width: 92px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">Skill</th>
                                                <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 92px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">PER</th>
                                                <th class="hidden-sm hidden-xs sorting" style="width: 92px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">FG%</th>
                                                <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 92px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">APG</th>
                                                <th class="hidden-sm hidden-xs sorting" style="width: 92px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">APG/PPG</th>
                                                <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 92px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">PPG</th>
                                                <th class="hidden-md hidden-sm hidden-xs sorting" style="width: 92px;" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1"colspan="1" aria-label="Access: activate to sort column ascending">RPG</th>
                                                <th class="text-center sorting_disabled" style="width: 40px;" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td class="hidden-sm hidden-xs font-w600">PrettyBoiFredo</td>
                                                <td class="hidden-xs">Ball Dominant</td>
                                                <td class="hidden-xs">Facilitator</td>
                                                <td class="">Slasher</td>
                                                <td class="center">
                                                    <button class="btn btn-warning push-5-r push-10" type="button">B-</button>
                                                </td>
                                                <td class="center">
                                                    <button class="btn btn-success push-5-r push-10" type="button">A</button>
                                                </td>
                                                <td class="hidden-md hidden-sm hidden-xs sorting success">28.2</td>
                                                <td class="hidden-sm hidden-xs sorting success">62%</td>
                                                <td class="hidden-md hidden-sm hidden-xs sorting warning">2.2</td>
                                                <td class="hidden-sm hidden-xs sorting warning">1.2:1</td>
                                                <td class="hidden-md hidden-sm hidden-xs sorting success">6.2</td>
                                                <td class="hidden-md hidden-sm hidden-xs sorting danger">0.6</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="hidden-sm hidden-xs font-w600">PrettyBoiFredo</td>
                                                <td class="hidden-xs">Ball Dominant</td>
                                                <td class="hidden-xs">Facilitator</td>
                                                <td class="">Slasher</td>
                                                <td class="center">
                                                    <button class="btn btn-danger push-5-r push-10" type="button">F</button>
                                                </td>
                                                <td class="center">
                                                    <button class="btn btn-danger push-5-r push-10" type="button">C-</button>
                                                </td>
                                                <td class="hidden-md hidden-sm hidden-xs sorting danger">6.2</td>
                                                <td class="hidden-sm hidden-xs sorting danger">32%</td>
                                                <td class="hidden-md hidden-sm hidden-xs sorting danger">0.2</td>
                                                <td class="hidden-sm hidden-xs sorting danger">.2:1</td>
                                                <td class="hidden-md hidden-sm hidden-xs sorting success">8.2</td>
                                                <td class="hidden-md hidden-sm hidden-xs sorting danger">0.6</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="hidden-sm hidden-xs font-w600">PrettyBoiFredo</td>
                                                <td class="hidden-xs">Ball Dominant</td>
                                                <td class="hidden-xs">Facilitator</td>
                                                <td class="">Slasher</td>
                                                <td class="center">
                                                    <button class="btn btn-success push-5-r push-10" type="button">A+</button>
                                                </td>
                                                <td class="center">
                                                    <button class="btn btn-success push-5-r push-10" type="button">A</button>
                                                </td>
                                                <td class="hidden-md hidden-sm hidden-xs sorting success">29.5</td>
                                                <td class="hidden-sm hidden-xs sorting success">75%</td>
                                                <td class="hidden-md hidden-sm hidden-xs sorting warning">2.2</td>
                                                <td class="hidden-sm hidden-xs sorting success">3.2:1</td>
                                                <td class="hidden-md hidden-sm hidden-xs sorting success">6.2</td>
                                                <td class="hidden-md hidden-sm hidden-xs sorting success">3.6</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
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
