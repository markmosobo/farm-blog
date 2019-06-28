@extends('main')

@section('title','Author Archive')

@section('content')

    <!-- start content area -->
    <div class="main-content-area single-post archive-page">
        <article>
            <div class="post-head" style="background-image:url(https://images.unsplash.com/photo-1487611459768-bd414656ea10?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjExNzczfQ&amp;s=cc8072c77540f66915f661e17d4b078f);">
                <div class="container align-center">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <h1 class="title page-title">Author Archive</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <div class="post-content">

                        </div>
                    </div>
                </div>
            </div>
        </article>
        <div class="user-list-wrap">
            <div class="container">
                <div class="row is-flex">
                    <div class="col-sm-6 col-md-6 col-xs-12">
                        <div class="about-author clearfix">
                            <a href="{{url('/single-author-archive')}}" title="Surabhi Gupta"><img src="images/2018/04/Surabhi-Gupta-1.jpg" alt="Author image" class="avatar pull-left"></a>
                            <div class="details">
                                <h4 class="author h4"><a href="{{url('/single-author-archive')}}">Surabhi Gupta</a></h4>
                                <div class="bio">
                                    Developer at GBJ solution. I love to travel, make new friends. I prefer tea over coffee.
                                </div>
                                <ul class="meta-info">
                                    <li><a href="https://twitter.com/gbjsolution" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/gbjsolution" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li class="website"><a href="http://gbjsolution.com/" target="_blank"><i class="fa fa-globe"></i></a></li>
                                    <li class="location"><i class="fa fa-map-marker"></i>India</li>
                                    <li class="post-count"><i class="fa fa-pencil"></i>3 Posts</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end content area -->

@stop
