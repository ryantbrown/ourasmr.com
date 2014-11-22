		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">Copyright &copy; <?=date('Y', time())?> OurASMR. All rights reserved.</div>
					<div class="col-sm-4 text-right">
						<div class="info-links">
							<a href="{{ URL::route('terms') }}">Terms</a>
							<a href="{{ URL::route('privacy') }}">Privacy</a>
							<a href="{{ URL::route('help') }}">Help</a>
							<a href="{{ URL::route('contact') }}">Contact</a>
						</div>
					</div>
					<div class="col-sm-4 text-right">
						<div class="social">
							<a href="#" class="btn btn-theme"><i class="fa fa-facebook"></i></a>
							<a href="#" class="btn btn-theme"><i class="fa fa-twitter"></i></a>
							<a href="#" class="btn btn-theme"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script src="{{ ASSETS }}js/all.js"></script>
	</body>
</html>