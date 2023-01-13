@extends('frontEnd.master')
@section('title')
    Blog-details
@endsection
@section('content')

    <section class="single-post-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 post-content" data-aos="fade-up">

                    <!-- ======= Single Post Content ======= -->
                    <div class="single-post">
                        <div class="post-meta"><span class="date">{{$blogs->category_name}}</span> <span class="mx-1">&bullet;</span>
                            <span>{{$blogs->date}}</span></div>
                        <h1 class="mb-5">{{$blogs->title}}</h1>
                        <p><span
                                class="firstcharacter">{{substr($blogs->description,0,1)}}</span>{{substr($blogs->description,2,400)}}
                        </p>

                        <figure class="my-4">
                            <img src="{{asset($blogs->image)}}" alt="" class="img-fluid">
                            <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit?
                            </figcaption>
                        </figure>
                        <p>{{substr($blogs->description,401)}}</p>

                    </div><!-- End Single Post Content -->

                    <!-- ======= Comments ======= -->
                    <div class="comments">
                        <h5 class="comment-title py-4">{{count($comments)}} Comments</h5>
                        @foreach($comments as $comment)
                            <div class="comment d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm rounded-circle">
                                        <img class="avatar-img" src="{{asset('frontEndAsset')}}/assets/img/person-5.jpg"
                                             alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-2 ms-sm-3">
                                    <div class="comment-meta d-flex align-items-baseline">
                                        <h6 class="me-2">{{$comment->name}}</h6>
                                        <span
                                            class="text-muted">{{date(" M jS 'y g:i a",strtotime($comment->created_at))}}</span>
                                    </div>
                                    <div class="comment-body">
                                        {{$comment->comment}}
                                    </div>

                                    <div class="comment-replies bg-light p-3 mt-3 rounded">
                                        <h6 class="comment-replies-title mb-4 text-muted text-uppercase">2 replies</h6>

                                        <div class="reply d-flex mb-4">
                                            <div class="flex-shrink-0">
                                                <div class="avatar avatar-sm rounded-circle">
                                                    <img class="avatar-img"
                                                         src="{{asset('frontEndAsset')}}/assets/img/person-4.jpg" alt=""
                                                         class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2 ms-sm-3">
                                                <div class="reply-meta d-flex align-items-baseline">
                                                    <h6 class="mb-0 me-2">Brandon Smith</h6>
                                                    <span class="text-muted">2d</span>
                                                </div>
                                                <div class="reply-body">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reply d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar avatar-sm rounded-circle">
                                                    <img class="avatar-img"
                                                         src="{{asset('frontEndAsset')}}/assets/img/person-3.jpg" alt=""
                                                         class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2 ms-sm-3">
                                                <div class="reply-meta d-flex align-items-baseline">
                                                    <h6 class="mb-0 me-2">James Parsons</h6>
                                                    <span class="text-muted">1d</span>
                                                </div>
                                                <div class="reply-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio
                                                    dolore sed eos sapiente, praesentium.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- End Comments -->
                    <!-- ======= Comments Form ======= -->

                    @if(Session::get('userId'))
                        <div class="row justify-content-center mt-5">

                            <!-- ======= Error  ======= -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                        @endif
                        <!-- Error -->

                            <form action="{{route('new.comment')}}" method="post">
                                @csrf
                                <div class="col-lg-12">
                                    <h5 class="comment-title">Leave a Comment</h5>
                                    <input type="hidden" name="user_id" value="{{Session::get('userId')}}">
                                    <input type="hidden" name="blog_id" value="{{$blogs->id}}">
                                    <div class="col-12 mb-3">
                                        <label for="comment-message"></label>
                                        <textarea class="form-control" name="comment" id="comment-message"
                                                  placeholder=""
                                                  cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" class="btn btn-primary" value="Post comment">
                                    </div>
                                </div>
                            </form>
                        </div><!-- End Comments Form -->
                    @else
                        <h3 class="mt-5 text-bg-dark p-2 text-center">Please <a class="text-danger"
                                                                                href="{{route('user.login')}}">Login</a>
                            to comment.</h3>
                    @endif
                </div>
                <div class="col-md-3">
                    <!-- ======= Sidebar ======= -->
                    <div class="aside-block">

                        <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-popular" type="button" role="tab"
                                        aria-controls="pills-popular" aria-selected="true">Related Blogs
                                </button>
                            </li>

                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                            <!-- Popular -->
                            <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                                 aria-labelledby="pills-popular-tab">
                                @foreach($categoryWiseBlogs as $categoryWiseBlogs)
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span
                                                class="date">{{$categoryWiseBlogs->category_name}}</span> <span
                                                class="mx-1">&bullet;</span> <span>{{$categoryWiseBlogs->date}}</span>
                                        </div>
                                        <h2 class="mb-2"><a href="#">{{$categoryWiseBlogs->title}}</a></h2>
                                        <span class="author mb-3 d-block">{{$categoryWiseBlogs->author_name}}</span>
                                    </div>
                                @endforeach
                            </div> <!-- End Popular -->

                        </div>
                    </div>

                    <div class="aside-block">
                        <h3 class="aside-title">Video</h3>
                        <div class="video-post">
                            <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
                                <span class="bi-play-fill"></span>
                                <img src="{{asset('frontEndAsset')}}/assets/img/post-landscape-5.jpg" alt=""
                                     class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Video -->

                    <div class="aside-block">
                        <h3 class="aside-title">Categories</h3>
                        <ul class="aside-links list-unstyled">
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Business</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Culture</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Sport</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Food</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Politics</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Startups</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Travel</a></li>
                        </ul>
                    </div><!-- End Categories -->

                    <div class="aside-block">
                        <h3 class="aside-title">Tags</h3>
                        <ul class="aside-tags list-unstyled">
                            <li><a href="category.html">Business</a></li>
                            <li><a href="category.html">Culture</a></li>
                            <li><a href="category.html">Sport</a></li>
                            <li><a href="category.html">Food</a></li>
                            <li><a href="category.html">Politics</a></li>
                            <li><a href="category.html">Celebrity</a></li>
                            <li><a href="category.html">Startups</a></li>
                            <li><a href="category.html">Travel</a></li>
                        </ul>
                    </div><!-- End Tags -->

                </div>
            </div>
        </div>
    </section>
@endsection
