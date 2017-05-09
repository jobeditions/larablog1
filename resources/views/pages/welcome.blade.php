@extends('layout.app')
@section('pagetitle','Blog écrivain')


@section('body')

     @include('partials.slider')
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">

			
			@include('partials.frontpost')
			@include('partials.frontpost')
			@include('partials.frontpost')
			@include('partials.frontpost')

		</div>
	
		@endsection