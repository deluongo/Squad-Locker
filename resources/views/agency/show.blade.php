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
                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dataTables_length" id="DataTables_Table_1_length">
                                        <label>
                                            <select name="DataTables_Table_1_length" aria-controls="DataTables_Table_1" class="form-control">
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div id="DataTables_Table_1_filter" class="dataTables_filter">
                                        <label>Search:
                                            <input type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_1">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
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
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite">Showing <strong>1</strong>-<strong>10</strong> of <strong>40</strong></div></div>
                                    <div class="col-sm-6">
                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button previous disabled" aria-controls="DataTables_Table_1" tabindex="0" id="DataTables_Table_1_previous"><a href="#"><i class="fa fa-angle-left"></i></a>
                                                </li><li class="paginate_button active" aria-controls="DataTables_Table_1" tabindex="0"><a href="#">1</a>
                                                </li><li class="paginate_button " aria-controls="DataTables_Table_1" tabindex="0"><a href="#">2</a></li>
                                                <li class="paginate_button " aria-controls="DataTables_Table_1" tabindex="0"><a href="#">3</a></li>
                                                <li class="paginate_button " aria-controls="DataTables_Table_1" tabindex="0"><a href="#">4</a></li>
                                                <li class="paginate_button next" aria-controls="DataTables_Table_1" tabindex="0" id="DataTables_Table_1_next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- END My Block -->
    </div>
    <!-- END Page Content -->
@endsection

@section('page-js')
    <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->


    <script src="{{URL::asset('/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{URL::asset('/js/pages/base_tables_datatables.js') }}"></script>
@endsection
