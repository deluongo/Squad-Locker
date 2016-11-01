@extends('layouts.interface')


@section('title')
    '$gamertag's Locker'
@endsection

@section('block-header')
        My Team
@endsection


@section('main')
    <!-- Page Header -->
    <div class="content bg-gray-lighter">
        <div class="row items-push">
            <div class="col-sm-7">
                <h1 class="page-heading">
                    Straight Fundamental (STFU)
                    <small>
                        San Francisco
                    </small>
                </h1>
            </div>
            <div class="col-sm-5 text-right hidden-xs">
                <ol class="breadcrumb push-10-t">
                    <li>
                        Edit
                    </li>
                    <li><a class="link-effect" href="">
                        View Team
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
                    <li>
                        <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                    </li>
                    <li>
                        <button type="button" data-toggle="block-option" data-action="close"><i class="si si-close"></i></button>
                    </li>
                </ul>
                <h3 class="block-title">
                    My Team
                </h3>
            </div>
            <div class="block-content">

            </div>
            </div>
        </div>
        <!-- END My Block -->
    </div>
    <!-- END Page Content -->

@endsection
