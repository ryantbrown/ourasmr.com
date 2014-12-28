<section class="main" id="home">
	<div class="page">
		<div class="wrapper">
			<div class="container">
				<h1 class="heading"><span class="rotate">Discover., Customize., Share., Enjoy.</span> ASMR</h1>
				<p class="sub-heading"><span>Create your own personal ASMR experience.</span></p>
				@if(Auth::guest())
					<a class="btn btn-primary" href="{{ URL::route('register') }}">Start Today</a>
					&nbsp;&nbsp;&nbsp;
					<a class="btn btn-default" href="{{ URL::route('learn') }}">Learn More</a>
				@else
					<a class="btn btn-primary" href="{{ URL::route('dashboard') }}">My Library</a>
					&nbsp;&nbsp;&nbsp;
					<a class="btn btn-default" href="{{ URL::route('browse') }}">Discover Now</a>
				@endif
			</div>
		</div>
	</div>
</section>