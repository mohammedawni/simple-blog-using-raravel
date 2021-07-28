@extends('_base')
@section('title')
    Home
@endsection

@section('content')
    <a href="{{ route('posts.create', []) }}" class="btn btn-primary mt-2">Add Post</a>
    <div class="row">
        @forelse ($posts as $post)
        <div class="card" style="width: 18rem;">
            <img src="{{asset('/storage/posts_images/'.$post->image)}}" class="card-img-top" alt="post-image">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">{{ Illuminate\Support\Str::limit($post->body,  150, $end='...') }}</p>
              <a href="{{ route('posts.show', [$post]) }}" class="btn btn-primary">Show post</a>
            </div>
          </div>
        @empty
        <div class="fs-1">
            There is no posts.
        </div>
        @endforelse
    </div>
@endsection