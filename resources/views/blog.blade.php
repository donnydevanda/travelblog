@extends('layouts.app')
@section('title', 'HiDev | Blog')

@section('content')
    <main class="container py-5">
        <div class="container text-center">
            <h1 class="mx-4">Blog Management</h1>
            @if($role == 'User')
                <a class="h5" href="{{url('/blog/add')}}">Create New Post</a>
            @endif
            <table class="table table-hover mt-5">
                <thead>
                    <tr>
                        @if($role == 'User')
                            <th scope="col">Title</th>
                            <th scope="col">Action</th>
                        @endif
                        @if($role == 'Admin')
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @if($role == 'User')
                        @foreach($articles as $article)
                            <tr>
                                <td class="align-middle">{{$article->title}}</td>
                                <form action="{{url('/blog/delete')}}" method="POST" class="" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" class="form-control" name="id" value="{{$article->id}}"/>
                                    <td class="align-middle"><input type="submit" class="btn btn-primary" value="Delete"></td>
                                </form>
                            </tr>
                        @endforeach
                    @endif
                    @if($role == 'Admin')
                        @foreach($articles as $article)
                            <tr>
                                <td class="align-middle">{{$article->title}}</td>
                                <td class="align-middle">{{$article->categories->name}}</td>
                                <form action="{{url('/blog/delete')}}" method="POST" class="" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" class="form-control" name="id" value="{{$article->id}}"/>
                                    <td class="align-middle"><input type="submit" class="btn btn-primary" value="Delete"></td>
                                </form>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </main>
@endsection






