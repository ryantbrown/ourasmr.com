@extends('layouts.home')
@section('content')
	<!-- Hero -->
	@include('sections.home.partials.hero')
	<!-- Popular -->
	@include('sections.home.partials.popular')
	<!-- How it Works -->
	@include('sections.home.partials.how')
	<!-- Featured Artist -->
	@include('sections.home.partials.featured')
	<!-- Tweets -->
    {{--@include('sections.home.partials.tweets')--}}
@stop