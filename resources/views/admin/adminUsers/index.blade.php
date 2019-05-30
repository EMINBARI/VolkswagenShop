@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row container-fluid justify-content-center align-items-center" style="margin-top:50px;">
            <div class="col-lg-12 col-sm-12">
                <h1 class="text-center">Admin users panel</h1>
            </div>
          
        </div>
    </div>
    <hr>

    @if (count($users)>0)
        @foreach ($users as $item)
           <div class="container" style="width:500px;">
                <div class="row">

                    <div class="col-lg-8 col-sm-12">
                        <div class="well text-left">
                            <p class="text-left">Name: {{$item->name}}</p>
                            <p class="text-left">Is admin: {{$item->is_admin}}</p>
                            <p class="text-left">Email: {{$item->email}}</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 row">
                        <div class="col-lg-12 col-sm-12">
                        <a href="/admin/adminUsers/{{$item->id}}/edit" style="width:100%" class="btn btn-success">Edit</a>
                        </div>
                        <div style="margin:2px;"></div>
                        <div class="col-lg-12 col-sm-12">
                            {!!Form::open(['action' => ['AdminUsersController@destroy', $item->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    
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
                {{$users->links()}}
            </div>
        </div>
        </div>
    @else
    <p>No users found</p>
    @endif
    
    
    <div style="height:25px"></div>
@endsection
