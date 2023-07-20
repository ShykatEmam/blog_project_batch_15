@extends('frontEnd.master')
@section('title')
    Register user
@endsection

@section('content')
<main id="main">
    <section id="contact" class="contact mb-5">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">Register Here</h1>
                </div>
            </div>

            <div class="form mt-5 mx-5">
                <form action="{{route('user.register')}}" method="post" class="form-control php-email-form">
                    @csrf
                    <div class="form-group col-md-6 offset-md-3">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group col-md-6 offset-md-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group col-md-6 offset-md-3">
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone number" required>
                    </div>
                    <div class="form-group col-md-6 offset-md-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="form-control btn btn-sm btn-primary">Sign up</button>
                </form>
            </div>
            

        </div>
    </section>

</main>

@endsection
