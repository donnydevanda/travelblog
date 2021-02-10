@extends('layouts.app')
@section('title', 'Travelblog')

@section('content')
<main class="container mt-5">
    <h1>All Story</h1>
    <div class="row">
        @foreach($articles as $article)
            <div class="col">
                <div class="card mt-3" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text" style="max-lines: 2">{{$article->description}}</p>
                        <p>Category: <a href="">{{$article->categories->name}}</a></p>
                        <a href="#" class="btn btn-primary">See Full Story</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>
@endsection
