<div class="container">
    <div class="row">
        <div class="navbar-header">
            <!-- start logo -->
            <a class="logo image-logo" href="#"><img src="images/2017/05/polar-logo.png" alt="{{config('app.name')}}"></a>
            <!-- end logo -->
        </div>
        <nav class="main-menu hidden-sm hidden-xs" id="main-menu">
            <ul>
                <li class="home current-menu-item"><a href="{{url('/')}}">Home</a></li>
                {{--<li class="style-guide"><a href="style-guide/index.html">Style Guide</a></li>--}}
                <li class="author-archive"><a href="{{url('/stories')}}">Stories</a></li>
                <li class="about"><a href="{{url('/about')}}">About</a></li>
                <li class="tag-archive"><a href="{{url('/author-archive')}}">Author Archive</a></li>
                <li class="contact"><a href="{{url('/contact')}}">Contact</a></li>
                {{--<li class="error-page"><a href="error-page/index.html">Error Page</a></li>--}}
            </ul>
        </nav>
        <div class="nav-right pull-right align-right">
            <span class="search-toggle" id="search-button" data-toggle="modal" data-target="#searchmodal"><i class="fa fa-search align-center"></i></span>
            <span class="mobile-menu-toggle hidden-md hidden-lg" id="nav-toggle-button"><i class="fa fa-bars align-center"></i></span>
        </div>
        <nav class="mobile-menu visible-sm visible-xs" id="mobile-menu"></nav>
        <div class="backdrop hidden-md hidden-lg" id="backdrop">
            <span class="menu-close align-center"><i class="fa fa-arrow-left"></i></span>
        </div>
    </div>
</div>
