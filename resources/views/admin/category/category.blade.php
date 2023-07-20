@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">Add Category</h5>
                        </div>
                        <hr/>
                        <form action="{{route('new.category')}}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="category_name" id="inputEnterYourName" placeholder="Category Name">
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
                               <th>Category Name</th>
                               <th>Status</th>
                               <th>Action</th>
                           </tr>
                           <?php
                           $i = 1;
                           ?>
                           @foreach($categories as $cat)
                           <tr>
                               <td>{{$i++}}</td>
                               <td>{{$cat->category_name}}</td>
                               <td class="{{$cat->status ==1 ? 'text-primary':'text-danger'}}">{{$cat->status ==1 ? 'published':'unpublished'}}</td>
                               <td class="d-flex">
                                   <a href="{{route('edit.category',['id'=>$cat->id])}}" class="btn btn-primary btn-sm">Edit</a>&nbsp;
                                       <form action="{{route('delete.category')}}" method="post">
                                           @csrf
                                           <input type="hidden" name="id" value="{{$cat->id}}">
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
