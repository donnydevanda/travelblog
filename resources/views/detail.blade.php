@extends('layouts.app')
@section('title', 'Travelblog | Detail')

@section('content')
    <main class="container py-5">
        <h1>{{$article->title}}</h1>
        <img class="mt-4 mb-3" src="{{asset('storage/'.$article->image)}}" alt="" style="width: 500px; height: 300px">
        <p>Category: {{$article->categories->name}}</p>
        <p class="h5">{{$article->description}}</p>
        <a class="h5" href="{{ URL::previous() }}">Back</a>
    </main>
@endsection
