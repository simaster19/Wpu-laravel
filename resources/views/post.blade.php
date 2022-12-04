@extends('Layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>
                <p>By <a href="/posts?author={{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> <a
                        href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-dark">
                        {{ $post->category->name }}</a></p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mb-3"
                    alt="{{ $post->category->name }}" class="img-fluid">

                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>



                <a href="/blog" class="mt-5">Back to Posts</a>

            </div>
        </div>
    </div>
@endsection
