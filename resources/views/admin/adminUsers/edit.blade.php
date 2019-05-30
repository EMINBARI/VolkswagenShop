@extends('layouts.app')

@section('content')
    <div class="container" style="height:50px; text-align:center; margin-top: 20px; margin-bottom: 30px;">
        <h1>Edit car model</h1>
    </div>
    <div class="container" style="width:550px;">
        
    {!! Form::open(['action'=>['AdminUsersController@update', $user->id], 'method' => 'POST']) !!}
        
        <div class="row " style="widrth:400px;">
            <div class="col-lg-8">Сделать пользователя администратором?</div>
            <div class="col-lg-4">

                {{Form::checkbox("item","value",true,
                [
                    "class" => "form-group",
                ])
                }}
            </div>

        </div>
         {{Form::hidden('_method','PUT')}}
        <div class="row " style="widrth:400px; margin-top:50px;">
            <div class="col-lg-8">
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            </div>
            
        </div>
        
        
    {!! Form::close() !!}
    </div>
@endsection