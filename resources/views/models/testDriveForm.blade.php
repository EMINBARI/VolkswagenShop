@extends('layouts.app')

@section('content')
    
<div class="container" style="height:700px">
    <div class="container" style="height: 20px;"></div>
    <div class="row projects justify-content-center align-items-center">
    <h1>DRA Form</h1>
    </div>
    <hr>
    <div class="container" style="height: 50px;"></div>

    @if ($authenticated == false)
        
        <div class="row projects justify-content-center align-items-center">
            <h1>Please, authenticate!</h1>
        </div>

        <div class="container" style="height: 50px;"></div>

        <div class="row projects justify-content-center align-items-center">
            
            <div class="col-lg-6 col-sm-6 ">
                <a class="btn btn-success" style="width:100%;" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
                            
            @if (Route::has('register'))
            <div class="col-lg-6 col-sm-6">
                <a class="btn btn-primary" style="width:100%" href="{{ route('register') }}">{{ __('Register') }}</a>
            </div>
                
                            
            @endif
        </div>

    @else

        <div class="container-fluid">
            {!! Form::open(['action'=>'TestDriveController@store', 'method' => 'POST']) !!}
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
        </div>

    @endif

</div>

@endsection