@extends('layouts.app')
@section('title', 'HiDev | User')

@section('content')
    <main class="container py-5">
        <div class="container text-center">
            <h1 class="mx-4">User Management</h1>
            <table class="table table-hover mt-5">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="align-middle">{{$user->name}}</td>
                            <td class="align-middle">{{$user->email}}</td>
                            <form action="{{url('/user/delete')}}" method="POST" class="" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="hidden" class="form-control" name="id" value="{{$user->id}}"/>
                                <td class="align-middle"><input type="submit" class="btn btn-primary" value="Delete"></td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection






