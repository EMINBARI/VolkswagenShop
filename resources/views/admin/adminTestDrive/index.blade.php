@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row container-fluid justify-content-center align-items-center" style="margin-top:50px;">
            <div class="col-lg-12 col-sm-12">
                <h1 class="text-center">Admin Test Drives panel</h1>
            </div>
          
        </div>
    </div>
    <hr>

    @if (count($test_drives)>0)
        @foreach ($test_drives as $item)
            
           <div class="container" style="width:500px;">
                <div class="row">

                    <div class="col-lg-4 col-sm-12">
                        <div class="well text-left">
                            <p class="text-left">User Name : {{$item->name}}</p>
                            <p class="text-left">Car model : {{$item->model_name}}</p>
                            <p class="text-left">Car VIN : {{$item->vin}}</p>
                            <p class="text-left">Date and time : {{$item->test_drive_date}}</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-sm-12"><img class="img-fluid" src="{{$item->img}}" alt="{{$item->model_name}}"></div>
                    

                    <div class="col-lg-4 col-sm-12 row">
                        <div style="margin:2px;"></div>
                        <div class="col-lg-12 col-sm-12">
                            {!!Form::open(['action' => ['AdminTestDriveController@destroy', $item->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete',['class' => 'btn btn-danger', 'style'=>'width:100%;'])}}
                        
                            {!!Form::close()!!}
                        </div>
                        
                    </div>
                    
                </div>
                <hr>
           </div>
        
        @endforeach
        <div class="container">
            <div class="row projects justify-content-center align-items-center">
            <div class="col-lg-4">
               
            </div>
        </div>
        </div>
    @else
    <p>No users found</p>
    @endif
    
    
    <div style="height:25px"></div>
@endsection
