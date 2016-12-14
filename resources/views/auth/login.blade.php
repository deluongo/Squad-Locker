@extends('layouts.structure')

@section('css')

@endsection

@section('content')
<!-- Login Content -->
<div class="bg-white pulldown">
    <div class="content content-boxed overflow-hidden">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <div class="push-30-t push-50 animated fadeIn">
                    <!-- Login Title -->
                    <div class="text-center">
                        <i class="fa fa-2x fa-circle-o-notch text-primary"></i>
                        <p class="text-muted push-15-t">A perfect match for your project</p>
                    </div>
                    <!-- END Login Title -->

                    <!-- Login Form -->
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary floating">
                                    <label for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-xs-12">
                                <div class="form-material form-material-primary floating">
                                    <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <label for="login-password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <div class="checkbox">
                                    <label class="css-input switch switch-sm switch-primary">
                                        <input type="checkbox" id="login-remember-me" name="login-remember-me"><span></span> Remember Me?
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="font-s13 text-right push-5-t">
                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group push-30-t">
                            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                <button class="btn btn-sm btn-block btn-primary" type="submit">Log in</button>
                            </div>
                        </div>

                    </form>
                    <!-- END Login Form -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Login Content -->

<!-- Login Footer -->
<div class="pulldown push-30-t text-center animated fadeInUp">
    <small class="text-muted"><span class="js-year-copy"></span> &copy; OneUI 3.0</small>
</div>
<!-- END Login Footer -->



@section('js')

<!-- Page JS Plugins -->
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/base_pages_login.js"></script>
@endsection
