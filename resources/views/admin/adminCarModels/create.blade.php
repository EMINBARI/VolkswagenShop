@extends('layouts.app')

@section('content')
    <div class="container" style="height:50px; text-align:center; margin-top: 20px; margin-bottom: 30px;">
        <h1>Add model</h1>
    </div>
    <div class="container" style="width:550px;">
        
    {!! Form::open(['action'=>'AdminCarModelsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            <p>VIN: </p>
            {{Form::text('vin','',['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>

        <div class="form-group">
            <p>Model: </p>
            {{Form::text('model','',['class' => 'form-control', 'placeholder' => 'some text'])}}        </div>
        
        <div class="form-group">
            <p>Body type: </p>
            {{Form::text('type','',['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>

        <div class="form-group">
            <p>Year: </p>
            {{Form::text('year','',['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>

        <div class="form-group">
            <p>Transmission: </p>
            {{Form::text('transmission','',['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>

        <div class="form-group">
            <p>Engine: </p>
            <small>(X.X TSI/TDI XXXHP)</small>
            {{Form::text('engine','',['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>

        <div class="form-group">
            <p>Color: </p>
            {{Form::text('color','',['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>
        <div class="form-group">
            <p>Equipment: </p>
            {{Form::text('equipment','',['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>
        <div class="form-group">
            <p>Price: </p>
            {{Form::text('price','',['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>
        <div class="form-group">
            <p>Image: </p>
            <small>(Enter pass or URL)</small>
            {{Form::text('image','',['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>





        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection