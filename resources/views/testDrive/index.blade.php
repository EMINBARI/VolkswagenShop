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
        
        <div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-sm-12"><h1>This car you choose to test, plase enter your password to confirm</h1> </div>
                <div class="col-lg-6 col-sm-12">
                    <img class="img-fluid" src="{{$car->img}}" alt="{{$car->model_name}}">
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-sm-12">
                    <p class="text">VIN : {{$car->vin}}</p>
                </div>
            </div>
            
        </div>
        
        {!! Form::open(['action'=> 'TestDriveController@store', 'method' => 'POST']) !!}
        
        <div class="row container-fluid justify-content-center align-items-center">
            <div class="form-group col-lg-8 col-sm-12">
                {{Form::label('title','Confirm your password, please')}}
                {{Form::password('password',['class' => 'form-control', "placeholder" => "Your Password",])}}
            </div>
            <div class="col-lg-8 col-sm-12">
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            </div>
        </div>

        
        {!! Form::close() !!}
        

    @endif

</div>

@endsection
