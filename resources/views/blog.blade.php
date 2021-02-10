@extends('layouts.app')
@section('title', 'HiDev | Status')

@section('content')
    <main class="status px-5">
        <div class="container text-center mt-5">
            <h1 class="mx-3">Blog Management</h1>
            <table class="table table-hover mt-5">
                <thead>
                    <tr>
                        @if($role == 'User')
                            <th scope="col">Title</th>
                            <th scope="col">Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
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
                </tbody>
            </table>
        </div>
    </main>
@endsection






