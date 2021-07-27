@extends('_base')
@section('title')
    {{Str::limit($post->title, 30, '')}}
@endsection

@section('content')
    <div class="text fs-1 text-dark bg-info">
        {{$post->title}}
    </div>
    <div class="fs-3">
        {{$post->body}}
    </div>

@endsection