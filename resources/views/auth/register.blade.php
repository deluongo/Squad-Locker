@extends('layouts.structure')

@section('content')
<!-- Register Content -->
  <div class="bg-white pulldown">
      <div class="content content-boxed overflow-hidden">
          <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                  <div class="push-30-t push-20 animated fadeIn">
                      <!-- Register Title -->
                      <div class="text-center">
                          <img class="img-logo" src="{{ asset('/img/branding/extras/Locker_icon_Original.png') }}" alt="">
                          <h1 class="h3 push-10-t">Create Account</h1>
                      </div>
                      <!-- END Register Title -->

                      <!-- Register Form -->
                      <!-- jQuery Validation (.js-validation-register class is initialized in js/pages/base_pages_register.js) -->
                      <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                          {{ csrf_field() }}
                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <div class="col-xs-12">
                                  <div class="form-material form-material-info">
                                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Please enter your gamertag" required autofocus>
                                      <label for="name" class="control-label">Gamertag</label>
                                  </div>
                                  @if ($errors->has('name'))
                                      <span class="errors">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <div class="col-xs-12">
                                  <div class="form-material form-material-info">
                                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Please enter your e-mail address" required>
                                      <label for="email" class="control-label">E-Mail Address</label>
                                  </div>
                                  @if ($errors->has('email'))
                                      <span class="errors">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <div class="col-xs-12">
                                  <div class="form-material form-material-info">
                                      <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Please enter your e-mail password" required>
                                      <label for="password" class="control-label">Password</label>
                                  </div>
                                  @if ($errors->has('password'))
                                      <span class="errors">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-xs-12">
                                  <div class="form-material form-material-info">
                                      <input class="form-control" type="password" id="password-confirm" name="password_confirmation" placeholder="..and confirm it" required>
                                      <label for="register-password2">Confirm Password</label>
                                  </div>
                                  @if ($errors->has('password_confirmation'))
                                      <span class="errors">
                                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-xs-7 col-sm-8">
                                  <label class="css-input switch switch-sm switch-info">
                                      <input type="checkbox" id="register-terms" name="register-terms"><span></span> I agree with terms &amp; conditions
                                  </label>
                              </div>
                              <div class="col-xs-5 col-sm-4">
                                  <div class="font-s13 text-right push-5-t">
                                      <a href="#" data-toggle="modal" data-target="#modal-terms">View Terms</a>
                                  </div>
                              </div>
                          </div>
                          @if ($errors->has('register-terms'))
                              <span class="errors">
                                  <strong>{{ $errors->first('register-terms') }}</strong>
                              </span>
                          @endif
                          <div class="form-group @if ($errors->has('register-terms')) push-25-t @endif">
                              <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                  <button class="btn btn-sm btn-block btn-info" type="submit">Create Account</button>
                              </div>
                          </div>
                      </form>
                      <!-- END Register Form -->
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- END Register Content -->

  <!-- Register Footer -->
  <div class="pulldown push-30-t text-center animated fadeInUp">
      <small class="text-muted"><span class="js-year-copy"></span> &copy; SquadLocker Inc.</small>
  </div>
  <!-- END Register Footer -->

  <!-- Terms Modal -->
  <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-popout">
          <div class="modal-content">
              <div class="block block-themed block-transparent remove-margin-b">
                  <div class="block-header bg-primary-dark">
                      <ul class="block-options">
                          <li>
                              <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                          </li>
                      </ul>
                      <h3 class="block-title">Terms &amp; Conditions</h3>
                  </div>
                  <div class="block-content">
                      <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                      <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                      <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                      <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                      <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                  </div>
              </div>
              <div class="modal-footer">
                  <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                  <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> I agree</button>
              </div>
          </div>
      </div>
  </div>
  <!-- END Terms Modal -->
@endsection

@section('js')
<!-- Page JS Plugins -->
<script src="{{ asset('/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('/js/pages/base_pages_register.js') }}"></script>
@endsection
