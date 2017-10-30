@extends('page.post-header')

@section('meta')

	@if ($post->title_seo)
    	<title>{{ $post->title_seo }}</title>
    @else
    	<title>{{ $post->name }}</title>
	@endif

		<meta name="description" content="{{ $post->description_seo }}">
		<meta name="key" content="{{ $post->key_seo }}">
		<meta name="keywords" content="{{ $post->key_seo }}">

@endsection