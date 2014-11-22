@extends('layouts.page')
@section('content')

<section id="auth" class="section access-section page-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="section-title">Log In to Your Account</h3>
				<div class="section-title-border"></div>
			</div>
		</div>

        @include('sections.auth.partials.messages')

		<div class="row">
            <div class="form-container col-md-5 col-sm-12 col-xs-12">
                <form class="login-form" action="{{ URL::route('postLogin') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group email">
                        <label class="sr-only" for="login-email">Email</label>
                        <input name="email" type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group password">
                        <label class="sr-only" for="login-password">Password</label>
                        <input name="password" type="password" class="form-control" placeholder="Password">
                        <p class="forgot-password"><a href="{{ URL::route('recover') }}">Forgot password?</a></p>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">Log in</button>
                    </div>
                    <div class="form-group checkbox">
                    <input type="checkbox" name="remember" /> <label>Remember Me?</label>
                    </div>

                     <p class="lead">Don't have an account yet? <br />
                     <a class="blue-link" href="{{ URL::route('register') }}">Create your account now</a></p>
                </form>
            </div>
            <div class="social-btns col-md-5 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-sm-offset-0">
                <div class="divider"><span>Or</span></div>
                <ul class="list-unstyled social-login">
                    <li><a class="twitter-btn btn" href="{{ URL::route('social_login', ['twitter']) }}">
                    <i class="fa fa-twitter"></i>Log in with Twitter</a></li>
                    <li><a class="facebook-btn btn" href="{{ URL::route('social_login', ['facebook']) }}">
                    <i class="fa fa-facebook"></i>Log in with Facebook</a></li>
                    <li><a class="google-btn btn" href="{{ URL::route('social_login', ['google']) }}">
                    <i class="fa fa-google-plus"></i>Log in with Google</a></li>
                </ul>
            </div>
        </div>
	</div>
</section>

@stop