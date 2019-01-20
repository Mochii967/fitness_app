@extends('layouts.app')

@section('content')
    @include('inc.carousel')
    <h1 class="display-3 text-center mt-4">Check out our tools to help you reach your goal</h1>
    <div class="row mt-3">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">BMI calculator</h3>
                    <div class="card-text">
                        Use our BMI calculator to figure out where you really stand.
                    </div>
                    <a href="/fitness_tools/bmi" class="btn btn-primary mt-1">Calculate your BMI</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Calorie calculator</h3>
                    <div class="card-text">
                        Use our calorie calculator to make sure that you are on track to your goals.
                    </div>
                    <a href="/fitness_tools/calorie" class="btn btn-primary mt-1">Calculate your calories</a>
                </div>
            </div>
        </div>
    </div>
    <h1 class="display-3 text-center mt-4">Check out some of our best articles</h1>
    <div class="row mt-3">
        @foreach($articles as $article)
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{$article->title}}</h3>
                        <div class="card-text">
                            {{$article->description}}
                        </div>
                        <a href="/articles/{{$article->id}}" class="btn btn-primary">Read the full article</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection