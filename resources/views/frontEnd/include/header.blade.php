<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{route('home')}}" class="logo d-flex align-items-center">
            <h1>ZenBlog</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{route('home')}}">Blog</a></li>
                <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
{{--                        <li><a href="{{route('search')}}">Search Result</a></li>--}}
                        @foreach($categories as $cat)
                            <li><a href="{{route('blog.category',['catId'=>$cat->id])}}">{{$cat->category_name}}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav>
        <!-- .navbar -->

        <div class="position-relative">
            @if(Session::get('userId'))
                <a href="{{route('user.logout')}}" class="mx-2 btn btn-success">Logout</a>
                <a href="#" class="mx-2 btn btn-success">{{Session::get('userName')}}</a>
            @else
                <a href="{{route('user.register')}}" class="mx-2 btn btn-primary">Sign up</a>
                <a href="{{route('user.login')}}" class="mx-2 btn btn-success">Sign In</a>
            @endif
{{--            <a href="#" class="mx-2"><span class="bi-facebook"></span></a>--}}
{{--            <a href="#" class="mx-2"><span class="bi-twitter"></span></a>--}}
{{--            <a href="#" class="mx-2"><span class="bi-instagram"></span></a>--}}

            <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
            <i class="bi bi-list mobile-nav-toggle"></i>

            <!-- ======= Search Form ======= -->
            <div class="search-form-wrap js-search-form-wrap">
                <form action="search-result.html" class="search-form">
                    <span class="icon bi-search"></span>
                    <input type="text" placeholder="Search" class="form-control">
                    <button class="btn js-search-close"><span class="bi-x"></span></button>
                </form>
            </div>
            <!-- End Search Form -->

        </div>

    </div>

</header>
<!-- End Header -->
