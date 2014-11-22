<section id="popular" class="section section-solid">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="section-title">Trending Videos</h3>
						<div class="section-title-border"></div>
					</div>
				</div>
				<div class="row wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0s">
					<div class="col-sm-12 text-center">
						<ul id="filter" class="list-inline filter-tags">
							<li><a href="#" class="btn btn-sm btn-theme-inverse active" data-group="all">All</a></li>
							<li><a href="#" class="btn btn-sm btn-theme-inverse" data-group="branding">Branding</a></li>
							<li><a href="#" class="btn btn-sm btn-theme-inverse" data-group="web">Web</a></li>
							<li><a href="#" class="btn btn-sm btn-theme-inverse" data-group="app">App</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="GITheWall">
				<ul id="portfolio-container" class="text-center wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0s">
					<li class="portfolio-item" data-groups='["all", "branding"]'
					 data-contenttype="ajax" data-href="{{ URL::route('video', ['someid']) }}">
						<figure>
							<div class="portfolio-img">

								<div class="overlay">
									<span class="title">Suspendisse potenti Suspendisse potenti Suspendisse potenti</span>
                                    <span class="category">Author Name | 654K Views</span>
									<div class="actions btn-toolbar">
									<div class="btn-group">
										<a href="#" class="btn btn-default btn-sm"><i class="fa fa-user"></i></a>
										<a href="#" class="btn btn-default btn-sm"><i class="fa fa-user"></i></a>
										<a href="#" class="btn btn-default btn-sm"><i class="fa fa-user"></i></a>
										</div>
									</div>
								</div>

								<img src="{{ ASSETS }}img/portfolio/1.jpg" alt="" class="img-responsive">
							</div>
						</figure>
					</li>
				</ul>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<a href="#" class="btn btn-theme-inverse mt40 wow fadeInDown" data-wow-duration="0.7s" data-wow-delay="0.5s" id="portfolio-more">More</a>
					</div>
				</div>
			</div>
		</section>