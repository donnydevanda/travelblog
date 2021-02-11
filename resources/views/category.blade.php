@extends('layouts.app')
@section('title', 'Travelblog | Category')

@section('content')
    <main class="container py-5">
        <h1 class="text-center">{{$title->categories->name}}</h1>
        <div class="row">
            @foreach($articles as $article)
                <div class="col-4">
                    <div class="card mt-4" style="width: 21rem;">
                        <a href="{{route('detail', $article->id)}}"><img src="{{asset('storage/'.$article->image)}}" class="card-img-top" alt="..." style="width: 100%; height: 200px;"></a>
                        <div class="card-body">
                            <a href="{{route('detail', $article->id)}}"><h5 class="card-title"><b>{{$article->title}}</b></h5></a>
{{--                            <p class="card-text" style="max-lines: 2">{{$article->description}}</p>--}}
                            <p>Category: <a href="{{route('category', $article->categories->id)}}">{{$article->categories->name}}</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container mt-4 mx-auto">
            {{$articles->links()}}
        </div>
    </main>
@endsection
