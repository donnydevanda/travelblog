@extends('layouts.app')
@section('title', 'Travelblog | Home')

@section('content')
    <main class="container py-5">
        @if($auth && ($role == 'User' || $role == 'Admin'))
            <h5 class="text-center">Hello {{$name}} !</h5>
        @endif
        <h1 class="text-center">All Post</h1>
        <form action="{{url('/')}}" class="form-inline mx-auto my-4">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search blog title from all category ..." aria-label="Search" style="width: 91%">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
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
