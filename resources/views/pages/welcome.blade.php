@extends('layout.app')
@section('pagetitle','Blog écrivain')


@section('body')

     @include('partials.slider')
	@include('posts.index')
	
		@endsection