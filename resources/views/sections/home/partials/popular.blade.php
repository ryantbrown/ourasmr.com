<section id="popular" class="section section-solid">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="section-title">Popular Videos</h3>
				<div class="section-title-border"></div>
			</div>
		</div>
	</div>
	<div class="GITheWall">
		<ul id="portfolio-container" class="text-center">
			@foreach($videos as $video)
			<li class="portfolio-item"
			 data-contenttype="ajax" data-href="{{ URL::route('videoQuickView', [$video['id']]) }}">
				<figure>
					<div class="portfolio-img">
						<div class="overlay">
							<span class="title">{{ $video['title'] }}</span>
							<span class="category">{{ $video['author'] }}</span>
						</div>
						<img src="{{ $video['image'] }}" alt="" class="img-responsive">
					</div>
				</figure>
			</li>
			@endforeach
		</ul>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<a href="{{ URL::route('browse') }}" class="btn btn-theme-inverse mt40 portfolio-more">
					<i class="fa fa-eye"></i> &nbsp;Browse Videos
				</a>
				&nbsp;&nbsp;&nbsp;
				<a href="{{ URL::route('search') }}" class="btn btn-theme-inverse mt40 portfolio-more">
					<i class="fa fa-search"></i> &nbsp;Search Videos
				</a>
				&nbsp;&nbsp;&nbsp;
				<a href="{{ URL::route('artists') }}" class="btn btn-theme-inverse mt40 portfolio-more">
					<i class="fa fa-user"></i> &nbsp;Browse Artists
				</a>
			</div>
		</div>
	</div>
</section>