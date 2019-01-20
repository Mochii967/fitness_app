@extends('layouts.app')

@section('content')
    <h1 class="display-2">Bmi Calculator</h1>
    <p class="display-4">
        This tool will tell you your measured BMI. 
        You need to enter your weight in kilograms and your height in meters
    </p>
    {!! Form::open(['action' => 'PagesController@calculatebmi', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('weight', 'Weight')}}
            {{Form::text('weight', '', ['class' => 'form-control', 'placeholder' => 'Weight'])}}
        </div>
        <div class="form-group">
            {{Form::label('height', 'Height')}}
            {{Form::text('height', '', ['class' => 'form-control', 'placeholder' => 'height'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection