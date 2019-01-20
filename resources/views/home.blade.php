@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (auth()->user()->calorie > 0)
                        <p>Your daily calories should be {{auth()->user()->calorie}}</p>
                    @endif
                    @if (auth()->user()->bmi > 0)
                        <p>Your BMI is {{auth()->user()->bmi}}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">Your articles</div>
        <div class="card-body">
            @foreach ($articles as $article)
                <div class="card mb-2">
                    <h2 class="card-header">{{ $article->title }}</h2>
                    <div class="card-body">
                        <h4>{{ $article->body }}</h4>
                        <a class="btn btn-primary" href="/articles/{{ $article->id }}/edit">Edit/Delete</a>
                        <small>{{ $article->created_at }}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <a href="/articles/create" class="btn btn-primary mt-3">Create new article</a>
</div>
@endsection
