@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1>{{ $post->title }}</h1>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather='arrow-left'></span> Back to all my
                    post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather='edit'></span>
                    Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline"
                    onclick="return confirm('Are You Sure?')">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger"><span data-feather='x-circle'></span> Delete</button>
                </form>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">

                        <img class="mt-3" src="{{ asset('storage/' . $post->image) }}" class="card-img-top mb-3"
                            alt="{{ $post->category->name }}" class="img-fluid">
                    </div>
                @else
                    <img class="mt-3" src="https://source.unsplash.com/700x400?{{ $post->category->name }}"
                        class="card-img-top mb-3" alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>


            </div>
        </div>
    </div>
@endsection;
