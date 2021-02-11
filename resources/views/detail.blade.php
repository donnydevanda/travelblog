@extends('layouts.app')
@section('title', 'Travelblog | Detail')

@section('content')
    <main class="container py-5">
        <h1>{{$article->title}}</h1>
        <img class="mt-4 mb-3" src="{{asset('storage/'.$article->image)}}" alt="" style="width: 500px; height: 300px">
        <p>Category: {{$article->categories->name}}</p>
        <p class="h5">{{$article->description}}</p>
        <button class="btn btn-secondary">BACK</button>
    </main>
@endsection
