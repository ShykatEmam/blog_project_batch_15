@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">Add Author</h5>
                        </div>
                        <hr/>
                        <form action="{{route('new.author')}}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Author Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="author_name" id="inputEnterYourName" placeholder="Author Name">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-5">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">Manage Category</h5>
                        </div>
                        <hr/>
                        <table class="table table-bordered">
                            <tr class="bg-primary text-white text-center">
                                <th>Sl</th>
                                <th>Author Name</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            $i = 1;
                            ?>
                            @foreach($authors as $author)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$author->author_name}}</td>
                                    <td class="d-flex">
                                        <a href="{{route('edit.author',['id'=>$author->id])}}" class="btn btn-primary btn-sm">Edit</a>&nbsp;
                                        <form action="{{route('delete.author')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$author->id}}">
                                            <input type="submit" value="Delete" class="btn-danger btn-sm btn">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
