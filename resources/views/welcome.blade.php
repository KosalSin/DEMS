@extends('layout.main')

@section('content')

        <!-- Document Wrapper
	============================================= -->
<!-- <div id="wrapper" class="clearfix"> -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap nopadding">

        <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('images/1.jpg') center center no-repeat; background-size: cover;"></div>

        <div class="section nobg full-screen nopadding nomargin">
            <div class="container vertical-middle divcenter clearfix">

                <div class="row center">
                    <a href="{{url('/login')}}"><img src="images/logo-dark1.png" alt="Daily Expense Management System"></a>
                </div>

                <div class="panel panel-default divcenter noradius noborder" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
                    <div class="panel-body" style="padding: 40px;">
                        <form id="login-form" name="login-form" class="nobottommargin" action="{{ url('/login') }}" method="post">
                            {{ csrf_field() }}

                            <h3>Login to your Account</h3>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col_full">
                                    <label for="email">User Email:</label>
                                    <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control not-dark" />
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        			<strong>{{ $errors->first('email') }}</strong>
                                    			</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col_full">
                                    <label for="password">Password:</label>
                                    <input type="password" id="password" name="password" value="" class="form-control not-dark" />
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        			<strong>{{ $errors->first('password') }}</strong>
                                   				</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col_full nobottommargin">
                                <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                <a href="{{ url('/password/reset') }}" class="fright">Forgot Password?</a>
                            </div>
                        </form>

                        <div class="line line-sm"></div>

                        <div class="center">
                            <h4 style="margin-bottom: 15px;">or Login with:</h4>
                            <a href="#" class="button button-rounded si-facebook si-colored">Facebook</a>
                            <span class="hidden-xs">or</span>
                            <a href="#" class="button button-rounded si-twitter si-colored">Twitter</a>
                        </div>
                    </div>
                </div>

                <div class="row center dark"><small>Copyrights &copy; All Rights Reserved by Ksalict Inc.</small></div>

            </div>
        </div>

    </div>

</section><!-- #content end -->

<!-- </div>#wrapper end -->

@endsection


