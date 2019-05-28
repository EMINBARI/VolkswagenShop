@extends('layouts.app')

@section('content')
    <div class="projects-clean">
        <div class="container" style="width:100%">

            <div class="row projects justify-content-center align-items-center" style="height:30px"></div>
            <div class="row projects justify-content-center align-items-center">
              <h2 class="text-center">Hatchback</h2>
            </div>

            
                
            @if(count($models)>0)
                <div class="row projects justify-content-center align-items-center">

                    @foreach ($models as $item)
                        @if ($item->model_name == 'golf')
                            <div class="col-sm-12 col-lg-6 item">
                                <img class="img-fluid" src="{{$item->img}}" />
                                <h3 class="name">Volkswagen {{$item->model_name}}</h3>

                                <div class=" row container-fluid justify-content-center align-items-center">
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->price}}$</p></div>
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->engine}}</p></div>
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->transmission}}</p></div>                          
                                </div>
                                <div class=" row container-fluid justify-content-center align-items-center">
                                <div class="col-lg-5 col-sm-12"><a href="/models/models/{{$item->id}}" class="btn btn-dark" style="width:100%">More</a></div>                            
                                </div>

                            </div>
                        @endif
                        
                    @endforeach
                </div>

                <hr>

                <div class="row projects justify-content-center align-items-center">
                    <h2 class="text-center">Sedan</h2>
                </div>


                <div class="row projects justify-content-center align-items-center">

                    @foreach ($models as $item)
                        @if ($item->model_name == 'jetta')
                            <div class="col-sm-12 col-lg-6 item">
                                <img class="img-fluid" src="{{$item->img}}" />
                                <h3 class="name">Volkswagen {{$item->model_name}}</h3>

                                <div class=" row container-fluid justify-content-center align-items-center">
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->price}}$</p></div>
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->engine}}</p></div>
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->transmission}}</p></div>                          
                                </div>
                                <div class=" row container-fluid justify-content-center align-items-center">
                                    <div class="col-lg-5 col-sm-12"><a href="/" class="btn btn-dark" style="width:100%">More</a></div>                            
                                </div>

                            </div>
                        @endif
                        
                    @endforeach
                </div>

                <hr>

                <div class="row projects justify-content-center align-items-center">

                    @foreach ($models as $item)
                        @if ($item->model_name == 'polo')
                           <div class="col-sm-12 col-lg-6 item">
                                <img class="img-fluid" src="{{$item->img}}" />
                                <h3 class="name">Volkswagen {{$item->model_name}}</h3>

                                <div class=" row container-fluid justify-content-center align-items-center">
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->price}}$</p></div>
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->engine}}</p></div>
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->transmission}}</p></div>                          
                                </div>
                                <div class=" row container-fluid justify-content-center align-items-center">
                                    <div class="col-lg-5 col-sm-12"><a href="/" class="btn btn-dark" style="width:100%">More</a></div>                            
                                </div>

                            </div>
                        @endif
                        
                    @endforeach
                </div>

                <hr>

                <div class="row projects justify-content-center align-items-center">

                    @foreach ($models as $item)
                        @if ($item->model_name == 'passat')
                            <div class="col-sm-12 col-lg-6 item">
                                <img class="img-fluid" src="{{$item->img}}" />
                                <h3 class="name">Volkswagen {{$item->model_name}}</h3>

                                <div class=" row container-fluid justify-content-center align-items-center">
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->price}}$</p></div>
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->engine}}</p></div>
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->transmission}}</p></div>                          
                                </div>
                                <div class=" row container-fluid justify-content-center align-items-center">
                                    <div class="col-lg-5 col-sm-12"><a href="/" class="btn btn-dark" style="width:100%">More</a></div>                            
                                </div>

                            </div>
                        @endif
                        
                    @endforeach

                    
                </div>

                <hr>

                <div class="row projects justify-content-center align-items-center">
                    <h2 class="text-center">SUV</h2>
                </div>
               
                
                <div class="row projects justify-content-center align-items-center">

                    @foreach ($models as $item)
                        @if ($item->model_name == 'touareg')
                           <div class="col-sm-12 col-lg-6 item">
                                <img class="img-fluid" src="{{$item->img}}" />
                                <h3 class="name">Volkswagen {{$item->model_name}}</h3>

                                <div class=" row container-fluid justify-content-center align-items-center">
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->price}}$</p></div>
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->engine}}</p></div>
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->transmission}}</p></div>                          
                                </div>
                                <div class=" row container-fluid justify-content-center align-items-center">
                                    <div class="col-lg-5 col-sm-12"><a href="/" class="btn btn-dark" style="width:100%">More</a></div>                            
                                </div>

                            </div>
                        @endif
                        
                    @endforeach
                </div>

                <hr>
            

                <div class="row projects justify-content-center align-items-center">

                    @foreach ($models as $item)
                        @if ($item->model_name == 'tiguan')
                            <div class="col-sm-12 col-lg-6 item">
                                <img class="img-fluid" src="{{$item->img}}" />
                                <h3 class="name">Volkswagen {{$item->model_name}}</h3>

                                <div class=" row container-fluid justify-content-center align-items-center">
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->price}}$</p></div>
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->engine}}</p></div>
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->transmission}}</p></div>                          
                                </div>
                                <div class=" row container-fluid justify-content-center align-items-center">
                                    <div class="col-lg-5 col-sm-12"><a href="/" class="btn btn-dark" style="width:100%">More</a></div>                            
                                </div>

                            </div>
                        @endif
                        
                    @endforeach
                </div>

                <hr>

                <div class="row projects justify-content-center align-items-center">

                    @foreach ($models as $item)
                        @if ($item->model_name == 'teramont')
                           <div class="col-sm-12 col-lg-6 item">
                                <img class="img-fluid" src="{{$item->img}}" />
                                <h3 class="name">Volkswagen {{$item->model_name}}</h3>

                                <div class=" row container-fluid justify-content-center align-items-center">
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->price}}$</p></div>
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->engine}}</p></div>
                                    <div class="col-lg-4 col-sm-12"><p class="description">{{$item->transmission}}</p></div>                          
                                </div>
                                <div class=" row container-fluid justify-content-center align-items-center">
                                    <div class="col-lg-5 col-sm-12"><a href="/" class="btn btn-dark" style="width:100%">More</a></div>                            
                                </div>

                            </div>
                        @endif
                        
                    @endforeach
                </div>



            @else
                <p>No Volkswagen Golf models found</p>
            @endif

            
            
        </div>
    </div>

@endsection