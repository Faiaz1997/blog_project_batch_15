@extends('frontEnd.master')
@section('title')
    Contact
@endsection
@section('content')
    <section id="contact" class="contact mb-5">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">Login</h1>
                    <h1 class="page-title">{{session('message')}}</h1>
                </div>
            </div>


            <div class="form mt-5 col-md-5 m-auto">
                <form action="{{route('user.login')}}" method="post" class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="text" name="user_name" class="form-control" id="user_name" placeholder="Your Phone or Email" required>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        </div>
                    </div>

                    <div class="text-center"><button type="submit">Login</button></div>
                </form>
            </div><!-- End Contact Form -->

        </div>
    </section>

@endsection
