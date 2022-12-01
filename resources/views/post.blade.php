@extends('Layouts.main')

@section('container')

	<article>
		<h1>{{ $post->title }}</h1>
		
		<p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>

		<p>{{ $post->body }}</p>
	</article>

	<a href="/blog">Back to Posts</a>


@endsection