@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">Edit Category</h5>
                        </div>
                        <hr/>
                        <form action="{{route('update.category')}}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="hidden" name="id" value="{{$category->id}}">
                                    <input type="text" class="form-control" value="{{$category->category_name}}" name="category_name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category Status</label>
                                <div class="col-sm-9">
                                    @if($category->status == 1)
                                        <?php
                                        $selected = 1;
                                        ?>
                                    @else
                                        <?php
                                        $selected = 2;
                                        ?>
                                    @endif
                                    <input type="radio" value="1" name="status" {{$selected == 1?'checked':''}}> Published
                                    <input type="radio"  value="2" name="status"{{$selected != 1?'checked':''}}> Unpublished
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-5">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
