@extends('_base')
@section('title')
    Create Post 
@endsection
{{-- 'title', 'description', 'body', 'image',  --}}

@section('content')
    <h1>Add post:</h1>
    {!! Form::open(['route' => 'posts.store', 'files' => true]) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', '', ['class' => 'form-control w-25']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::text('description', '', ['class' => 'form-control w-25 ']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Enter post content') !!}
            {!! Form::textarea('body', '', ['class' => 'form-control', 'rows'=>'3']) !!}
        </div>

        <div class="form-group my-3">
            {!! Form::label('image', 'Upload post image') !!}
            {!! Form::file('image') !!}
        </div>

    
        <button class="btn btn-success" type="submit">Add the Car!</button>
    
    {!! Form::close() !!}
@endsection