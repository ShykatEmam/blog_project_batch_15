@extends('admin.master')
@section('content')

    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">Manage blog</h5>
                        </div>
                        <hr/>
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered">
                                <thead>
                                <tr class="bg-primary text-white">
                                    <th>Sl</th>
                                    <th>Category Name</th>
                                    <th>Author name</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <?php
                                $i=1;
                                ?>
                                @foreach($blogs as $blog)
                                    <tbody>
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{substr($blog->category_name,0,10)}}</td>
                                        <td>{{$blog->author_name}}</td>
                                        <td>{{substr($blog->title,0,10)}}</td>
                                        <td>{{substr($blog->slug,0,10)}}</td>
                                        <td>{{substr($blog->description,0,10)}}</td>
                                        <td>
                                            <img src="{{asset($blog->image)}}" class="img-fluid" width="100px" alt="">
                                        </td>
                                        <td>{{$blog->blog_type}}</td>
                                        <td>{{$blog->date}}</td>
                                        <td>{{$blog->status == 1? 'Published':'unpublished'}}</td>
                                        <td class="d-flex">
                                            {{--                                        <a href="{{route('edit.blog',['id'=>$blog->id])}}">Edit</a>--}}
                                            @if($blog->status ==1)
                                            <a href="{{route('status',['id'=>$blog->id])}}" class="btn btn-warning btn-sm">Unublished</a>
                                            @else
                                            <a href="{{route('status',['id'=>$blog->id])}}" class="btn btn-success btn-sm">Published</a>
                                            @endif
                                            &nbsp;
                                            <a href="{{route('edit.blog',['id'=>$blog->id])}}" class="btn btn-success btn-sm">Edit</a>

                                            &nbsp;

                                            <form action="{{route('blog.delete')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    </tbody>

                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
