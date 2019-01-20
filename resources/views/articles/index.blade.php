@extends('layouts.app')

@section('content')
        @foreach($articles as $article)
            <div class="card mb-3">
                <h2 class="card-header"><a href="/articles/{{$article->id}}">{{$article->title}}</a></h2>
                <div class="card-body">
                    <h4>{{$article->description}}</h4>
                    <small>This article was written by {{$article->author}} on {{$article->created_at}}</small>
                </div>
            </div>
        @endforeach
@endsection