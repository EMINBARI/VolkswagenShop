@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row container-fluid justify-content-center align-items-center" style="margin-top:50px;">
            <div class="col-lg-10 col-sm-12">
                <h1>Admin car models panel</h1>
            </div>
          
            <div class="col-lg-2 col-sm-12">
                <a href="adminCarModels/create" style="width:100%" class="btn btn-primary">Add car</a>
            </div>
        </div>
    </div>
    <hr>

    @if (count($models)>0)
        @foreach ($models as $item)
           <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-sm-12">
                        <div class="well">
                            <p>{{$item->vin}}</p>
                            <p>{{$item->model_name}}</p>
                            <p>{{$item->model_type}}</p>
                            <p>{{$item->year}}</p>
                            <p>{{$item->transmission}}</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12">
                        <img class="img-fluid" src="{{$item->img}}" alt="{{$item->model_name}}">
                    </div>

                    <div class="col-lg-2 col-sm-12 row">
                        <div class="col-lg-12 col-sm-12">
                            <a href="" style="width:100%" class="btn btn-success">Edit</a>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <a href="" style="width:100%" class="btn btn-danger">Delete</a>
                        </div>
                        
                        
                    </div>
                
                </div>
           </div>
           <hr>
        @endforeach
        <div class="container">
            <div class="row projects justify-content-center align-items-center">
            <div class="col-lg-4">
                {{$models->links()}}
            </div>
        </div>
        </div>
    @else
    <p>No models found</p>
    @endif
    
    
    <div style="height:25px"></div>
@endsection
