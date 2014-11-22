@extends('layouts.page')
@section('content')
<section id="contact" class="section access-section page-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="section-title">Need to Get in Touch?</h3>
				<div class="section-title-border"></div>
			</div>
		</div>
		<div class="row">
			<div class="form-container col-md-5 col-sm-12 col-xs-12">
				<p><strong>Integer suscipit</strong> gravida felis quis ornare.
				Pellentesque consectetur dui eu nulla vestibulum,
				ac euismod diam auctor.</p>
				@include('sections.contact.partials.info')
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-sm-offset-0">
				<div class="divider"><span>Or</span></div>
				@include('sections.contact.partials.form')
			</div>
		</div>
	</div>
</section>
@stop