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
                        <form action="{{route('new.category')}}" method="post" id="catForm">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control mb-2" name="category_name" id="category"
                                           placeholder="Category Name" >
                                    <span id="errorMessage" class="text-danger"> </span>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-5" id="catBtn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">Category</h5>
                        </div>
                        <hr/>
                       <table class="table table-striped table-bordered table-hover">
                           <tr>
                               <th>sl</th>
                               <th>Category Name</th>
                               <th>Status</th>
                               <th>Action</th>
                           </tr>
                           @php $i=1 @endphp
                           @foreach($categories as $category)
                           <tr>
                               <td>{{$i++}}</td>
                               <td>{{$category->category_name}}</td>
                               <td>{{$category->status == 1 ?'published' : 'unpublished'}}</td>
                               <td><a href="" class="btn btn-primary btn-sm">Edit</a>
                                   <a href="" class="btn btn-danger btn-sm">Delete</a>
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
