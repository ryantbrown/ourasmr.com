@extends('layouts.page')
@section('content')

<section id="auth" class="section access-section page-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="section-title">Join Today, It's Free!</h3>
				<div class="section-title-border"></div>
			</div>
		</div>
		@include('sections.auth.partials.messages')
		<div class="row">
            <div class="form-container col-md-5 col-sm-12 col-xs-12">

                   <form action="{{ URL::route('postRegister') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group email">
                        <label class="sr-only" for="login-email">Email</label>
                        <input name="email" type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group password">
                        <label class="sr-only" for="login-password">Password</label>
                        <input name="password" type="password" class="form-control" placeholder="Password">
                        </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                    </div>

                    <p class="note">By signing up, you agree to our
                    <a class="blue-link" href="{{ URL::route('terms') }}">terms of services</a> and
                    <a class="blue-link" href="{{ URL::route('privacy') }}">privacy policy</a> .</p>
                     <p class="lead">Already have an account?
                     <a class="blue-link" href="{{ URL::route('login') }}">Log in here</a></p>
                </form>
            </div>
            <div class="social-btns col-md-5 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-sm-offset-0">
                <div class="divider"><span>Or</span></div>
                <ul class="list-unstyled social-login">
                    <li><a class="twitter-btn btn" href="{{ URL::route('social_login', ['twitter']) }}">
                    <i class="fa fa-twitter"></i>Sign up with Twitter</a></li>
                    <li><a class="facebook-btn btn" href="{{ URL::route('social_login', ['facebook']) }}">
                    <i class="fa fa-facebook"></i>Sign up with Facebook</a></li>
                    <li><a class="google-btn btn" href="{{ URL::route('social_login', ['google']) }}">
                    <i class="fa fa-google-plus"></i>Sign up with Google</a></li>
                </ul>
                <p class="note">Don't worry, we won't post anything without your permission.</p>
            </div>
        </div>
	</div>
</section>

@stop