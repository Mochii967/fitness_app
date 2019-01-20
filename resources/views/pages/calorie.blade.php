@extends('layouts.app')

@section('content')
    <h1 class="display-2">Calorie Calculator</h1>
    <p class="display-4">
        This tools will give you an estimate as to how many calories you should be eating on your average day. 
        For the weight section you need to enter your weight in kilograms and your height in centimeters.
    </p>
    {!! Form::open(['action' => 'PagesController@calculatecalorie', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('weight', 'Weight')}}
            {{Form::text('weight', '', ['class' => 'form-control', 'placeholder' => 'Weight'])}}
        </div>
        <div class="form-group">
            {{Form::label('height', 'Height')}}
            {{Form::text('height', '', ['class' => 'form-control', 'placeholder' => 'height'])}}
        </div>
        <div class="form-group">
            {{Form::label('sex', 'Sex')}}
            {{Form::select('sex', ['Male' => 'Male', 'Female' => 'Female'], null, ['placeholder' => 'Sex'])}}
        </div>
        <div class="form-group">
            {{Form::label('age', 'Age')}}
            {{Form::number('age', '')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection