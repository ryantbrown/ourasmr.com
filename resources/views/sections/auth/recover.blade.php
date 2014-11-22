@extends('layouts.page')
@section('content')

<section id="auth" class="section access-section page-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			    @if($reset)
				<h3 class="section-title">Reset your Password</h3>
				@else
				<h3 class="section-title">Recover your Account</h3>
				@endif
				<div class="section-title-border"></div>
			</div>
		</div>
		<div class="row">
            <div class="form-container col-md-5 col-sm-12 col-xs-12">
                    @if(!$reset)
                        <form class="recover-form" action="{{ URL::route('postRecover') }}" method="POST">
                        @include('sections.auth.partials.recover-find')
                    @else
                        <form class="recover-form" action="{{ URL::route('postReset') }}" method="POST">
                        @include('sections.auth.partials.recover-reset')
                    @endif
                    <p class="lead">Remember your password? <a class="blue-link" href="{{ URL::route('login') }}">Login Here</a><br>
                     Don't have an account yet? <a class="blue-link" href="{{ URL::route('register') }}">Sign Up</a></p>
                </form>
            </div>
            <div class="social-btns col-md-5 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-sm-offset-0">
                <div class="divider"><span>Or</span></div>
                <p class="recover-memo">
                <strong>Still having problems?</strong><br><br>
                If you are having problems accessing your account and need assistance then please contact us via email, we will do our best to help.
                </p>
                <p class="recover-memo">
                    <a class="blue-link" href="{{ URL::route('contact') }}">Visit the Contact Page</a>
                </p>
                       </div>
        </div>
	</div>
</section>

@stop