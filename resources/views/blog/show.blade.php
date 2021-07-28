@extends('_base')
@section('title')
    {{Str::limit($post->title, 30, '')}}
@endsection

@section('content')
    <div class="text fs-1 text-dark bg-info">
        <p>{{$post->title}}</p>
        <strong>By: {{$post->user->name}}</strong>
    </div>

    <div class="text fs-2 text-dark bg-success">
        {{$post->description}}
    </div>
    <div class="fs-3">
        {{$post->body}}
    </div>


@endsection