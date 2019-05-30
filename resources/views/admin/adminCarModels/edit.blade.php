@extends('layouts.app')

@section('content')
    <div class="container" style="height:50px; text-align:center; margin-top: 20px; margin-bottom: 30px;">
        <h1>Edit car model</h1>
    </div>
    <div class="container" style="width:550px;">
        
    {!! Form::open(['action'=>['AdminCarModelsController@update', $car->id], 'method' => 'POST']) !!}
        <div class="form-group">
            <p>VIN: </p>
            {{Form::text('vin',$car->vin,['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>

        <div class="form-group">
            <p>Model: </p>
            {{Form::text('model',$car->model_name,['class' => 'form-control', 'placeholder' => 'some text'])}}        </div>
        
        <div class="form-group">
            <p>Body type: </p>
            {{Form::text('type',$car->model_type,['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>

        <div class="form-group">
            <p>Year: </p>
            {{Form::text('year',$car->year,['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>

        <div class="form-group">
            <p>Transmission: </p>
            {{Form::text('transmission',$car->transmission,['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>

        <div class="form-group">
            <p>Engine: </p>
            <small>(X.X TSI/TDI XXXHP)</small>
            {{Form::text('engine',$car->engine,['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>

        <div class="form-group">
            <p>Color: </p>
            {{Form::text('color',$car->color,['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>
        <div class="form-group">
            <p>Equipment: </p>
            {{Form::text('equipment',$car->equipment,['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>
        <div class="form-group">
            <p>Price: </p>
            {{Form::text('price',$car->price,['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>
        <div class="form-group">
            <p>Image: </p>
            <small>(Enter pass or URL)</small>
            {{Form::text('image',$car->img,['class' => 'form-control', 'placeholder' => 'some text'])}}
        </div>



        {{Form::hidden('_method','PUT')}}

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection