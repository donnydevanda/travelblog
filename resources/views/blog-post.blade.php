@extends('layouts.app')
@section('title', 'HiDev | New Post')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Article</div>

                    <div class="card-body">
                        <form action="{{url('blog/add')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"/>
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="categories_id">Category</label>
                                <div>
                                    <input type="radio" name="categories_id" value="1" checked> Mountain
                                    <input type="radio" name="categories_id" value="2"> Beach
                                    <input type="radio" name="categories_id" value="3"> City

                                    @error('categories_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" name="image">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3" ></textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <input type="submit" value="Post Article" class="btn btn-primary mt-3 @error('image') is-invalid @enderror">

                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






