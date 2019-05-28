@extends('layouts.app')

@section('content')

    <h3>Create post</h3>
    {!! Form::open(['action'=>'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Label Title')}}
            {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>

    
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body','',['id' =>'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body text'])}}
        </div>

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection