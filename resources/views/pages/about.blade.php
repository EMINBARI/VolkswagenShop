@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top:20px; margin-bottom:50px;">
    <h1 class="text-center text-uppercase">{{trans('main.AboutUsTitle')}}</h1>
        <p class="font-italic" >
            {{trans('main.AboutUsInf')}}
        </p>
    </div>
    
    <div class="map-clean">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">{{trans('main.Location')}}</h2>
            <h3 class="font-italic text-center">{{trans('main.Adress')}}</h3>
        </div>
    </div>
    <iframe allowfullscreen frameborder="0" width="100%" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1767.4332861186485!2d7.100925647220396!3d50.98357960869941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe093dfd213a96e45!2sVolkswagen+Bergisch+Gladbach+Richard+Stein+GmbH+%26+Co.+KG!5e0!3m2!1sru!2s!4v1558944927481!5m2!1sru!2s" width="600" height="450" frameborder="0" style="border:0"></iframe></div>
    <div class="countainer-fluid bg-dark h=100">

    </div>
@endsection