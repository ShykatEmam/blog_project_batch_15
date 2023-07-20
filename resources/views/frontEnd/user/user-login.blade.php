@extends('frontEnd.master')
@section('title')
    Login user
@endsection

@section('content')
    <main id="main">
        <section id="contact" class="contact mb-5">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-12 text-center mb-5">
                        <h1 class="page-title">Log In</h1>
                        <h1 class="page-title">{{session('message')}}</h1>
                    </div>
                </div>

                <div class="form mt-5 mx-5">
                    <form action="{{route('user.login')}}" method="post" class="form-control php-email-form">
                        @csrf
                        <div class="form-group col-md-6 offset-md-3">
                            <input type="text" name="user_name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group col-md-6 offset-md-3">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="form-control btn btn-sm btn-primary">Sign in</button>
                    </form>
                </div>
                <!-- End Contact Form -->

            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection
