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
    <div class="content bg-gray-lighter">
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
                <ol class="rev-breadcrumb push-10-t">
                    <li><a class="larger" href="/free-agency/teams">
                        Find Teams
                    </a></li>
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
            <div class="row items-push push-15-t">
                <div class="col-lg-8 col-lg-offset-2 col-sm-6 col-sm-offset-3 form-horizontal">
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            <a href="/free-agency/teams"><button class="btn btn-lg btn-default" type="button"><i class="si si-game-controller push-5-r"></i>Find Teams</button></a>
                        </div>
                        <div class="btn-group">
                            <a href="/free-agency"><button class="btn btn-lg btn-default" href="/free-agency" type="button"><i class="si si-social-dribbble push-5-r"></i>Find Players</button></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- END Page Content -->
@endsection

@section('page-js')


@endsection
