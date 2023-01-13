@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">Manage Blogs</h5>
                        </div>
                        <hr/>
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>sl</th>
                                    <th>Category Name</th>
                                    <th>Author Name</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                @php $i=1 @endphp
                                @foreach($blogs as $blog)
                                    <tbody>
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$blog->category_name}}</td>
                                        <td>{{$blog->author_name}}</td>
                                        <td>{{substr($blog->title,0,20)}}</td>
                                        <td>{{substr($blog->slug,0,20)}}</td>
                                        <td>{{substr($blog->description,0,15)}}</td>
                                        <td><img src="{{asset($blog->image)}}" alt="" class="img-fluid"></td>
                                        <td>{{$blog->date}}</td>
                                        <td>{{$blog->blog_type}}</td>
                                        <td>{{$blog->status == 1? 'Published' : 'Unpublished'}}</td>
                                        <td class="d-flex" ><a href="" class="btn btn-primary btn-sm m-1">Edit</a>
                                            <form action="{{route('blog.delete')}}" method="post" >
                                                @csrf
                                                <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm d-flex m-1">Delete</button>
                                            </form>
                                            @if($blog->status == 1)
                                            <a href="{{route('status',['id'=>$blog->id])}}" class="btn btn-warning btn-sm d-flex m-1">Unpublished</a>
                                            @else
                                            <a href="{{route('status',['id'=>$blog->id])}}" class="btn btn-success btn-sm d-flex m-1">Publish</a>
                                                @endif
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
