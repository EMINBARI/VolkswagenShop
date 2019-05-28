@extends('layouts.app')

@section('content')
    <h3>Posts</h3>
    @if (count($posts)>0)
        @foreach ($posts as $item)
            <div class="well">
                <h3><a href="/posts/{{$item->id}}">{{$item->title}}</a></h3>
                <h3>{!!$item->body!!}</h3>
                <small>Written on {{$item->created_at}}</small>
            </div>

        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection