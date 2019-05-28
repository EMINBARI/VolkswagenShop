@extends('layouts.app')

@section('content')
    <div class="projects-clean">
        <div class="container-fluid" >

            <div class="row projects justify-content-center align-items-center" style="height:30px"></div>
            <div class="row projects justify-content-center align-items-center">
            <h2 class="text-center">Volkswagen {{$car->model_name}}</h2>
            </div>

            <div class="row projects justify-content-center align-items-center">
                <div class=" row col-lg-4 col-sm-12 justify-content-center">
                    <div class="col-lg-12 col-sm-12">
                        <p>Engine : {{$car->engine}}</p> <hr>
                        <p>Transmission : {{$car->transmission}}</p> <hr>
                        <p>Year : {{$car->year}}</p> <hr>
                        <p>Equipment : {{$car->equipment}}</p> <hr>
                        <p>Color : {{$car->color}}</p> <hr>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <p>Price: {{$car->price}}$</p>
                        <hr>
                    </div>
                    
                    <div class="col-lg-12 col-sm-12 justify-content-center align-items-center">
                        <a href="/" class="btn btn-primary" style="width:100%">GO DRA TEST</a>
                    </div>
                </div>
            <div class="col-lg-8 col-sm-12"><img class="img-fluid" src="{{$car->img}}" alt="{{$car->model_name}}"></div>
                
            </div>

            
      
            
            
        </div>
    </div>

@endsection