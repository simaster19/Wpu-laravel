


@extends('Layouts.main')

@section('container')

	@foreach ($posts as $post)
	<article class="mb-5">
		<h2>
			<a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }} </a> 
			<p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></p>
		</h2>
		<p>{{ $post->excerpt }}</p>

		<a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
	</article>
		
	
	@endforeach
	
@endsection

