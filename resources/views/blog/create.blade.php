@extends('_base')
@section('title')
    Create Post 
@endsection

@section('content')
    <h1>Add post:</h1>
    {!! Form::model($post, ['route' => 'posts.store']) !!}

        <div class="form-group">
            {!! Form::label('make', 'Make') !!}
            {!! Form::text('make', '', ['class' => 'form-control col-3']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('model', 'Model') !!}
            {!! Form::text('model', '', ['class' => 'form-control']) !!}
        </div>
    
        <button class="btn btn-success" type="submit">Add the Car!</button>
    
    {!! Form::close() !!}
@endsection