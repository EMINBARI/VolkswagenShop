@extends('layouts.app')

@section('content')
    
    
    @include('inc.carousel')

  @if (count($news)>0)

        {!!
            $title = 'title_en';
            $body = 'body_en';
            session_start();
            if (App::getLocale()=='en') {
                $title = 'title_en';
                $body = 'body_en';
            }
            else{
                $title = 'title_ru';
                $body = 'body_ru';
            }
        !!}


        <div class="projects-clean">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center">{{ trans('main.News') }}</h2>
                </div>
                    <div class="row projects justify-content-center align-items-center">
        @foreach ($news as $item)
            
                    
            <div class="col-sm-4 col-lg-6 item">
                <img class="img-fluid" src={{$item->img}} />
                <h3 class="name">{{$item->$title}}</h3>
                <p class="lead">{{$item->$body}}</p>
                <div style="margin-bottom:20px;"></div>
            </div>
            
                       
                    
                    
              
        @endforeach
                </div>
            </div>
        </div>
        
    @else
    <p>No models found</p>
    @endif

@endsection


