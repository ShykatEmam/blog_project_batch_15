@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">Add Blog</h5>
                        </div>
                        <hr/>
                        <form action="{{route('add.blog')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Blog Category</label>
                                <div class="col-sm-9">
                                    <select name="category_id" id="" class="form-control">
                                        @foreach($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Author Name</label>
                                <div class="col-sm-9">
                                    <select name="author_id" id="" class="form-control">
                                        @foreach($authors as $author)
                                            <option value="{{$author->id}}">{{$author->author_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Blog Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="title" placeholder="Blog Title">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Slug</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="slug" value="" placeholder="Blog Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Blog Description</label>
                                <div class="col-sm-9">
                                    <textarea name="description" id="" cols="60" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Blog Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="image" >
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="date" placeholder="Blog Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Blog type</label>
                                <div class="col-sm-9">
                                    <select name="blog_type" id="" class="form-control">
                                        <option value="trending">Trending</option>
                                        <option value="popular">popular</option>
                                        <option value="latest">latest</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <input type="radio" name="status" value="1"> Published
                                    <input type="radio" name="status" value="2"> Unpublished
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
