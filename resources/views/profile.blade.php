@extends('layouts.app')
@section('title', 'Travelblog | Profile')

@section('content')
    <main class="container py-5">
        <div class="text-center">
            <h1 class="mt-5">Profile</h1>
            <img class="rounded-circle" src="https://ui-avatars.com/api/?size=180&name={{$users->name}}" alt="">
            <h2 class="mt-4">{{$users->name}}</h2>
            <h5 class="mt-2">{{$users->email}} - {{$users->phone}}</h5>
        </div>
        <div class="container mt-5">
            <form action="{{url('profile')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}

                <input type="hidden" class="form-control" name="id" value="{{$users->id}}"/>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$users->name}}"/>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$users->email}}"/>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$users->phone}}"/>
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <input type="submit" value="Update Profile" class="btn btn-primary mt-3">
            </form>
        </div>
    </main>
@endsection
