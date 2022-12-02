@extends('Layouts.main')

@section('container')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>
				<p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></p>
				
				<img src="https://source.unsplash.com/1200x400?{{$post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">

				<article class="my-3 fs-5">
					{!! $post->body !!}
				</article>

				

			<a href="/blog">Back to Posts</a>

		</div>
	</div>
</div>



@endsection