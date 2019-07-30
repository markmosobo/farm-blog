@extends('main')

@section('title','')

@section('content')

    <!-- start cover -->
    <section class="cover cover-author has-image"  style="background-image: url(images/2018/08/under-water.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="cover-content-wrap align-center">
                        <div class="avatar-wrap">
                            <img src="http://www.gravatar.com/avatar/021e64775176cc4c7018e5e867f17de2?s=250&amp;d=mm&amp;r=x" alt="Author image" class="avatar">
                        </div>
                        <h1 class="author-name h3">{{$author->author_name}}</h1>
                        <div class="meta-info">
                            <span class="post-count">Total 6 Posts</span>

                        </div>
                        <p class="description">{{$author->author_description}}</p>
                        <ul class="author-social">
                            <li><a href="https://twitter.com/gbjsolution"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/gbjsolution"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://gbjsolution.com/" target="_blank"><i class="fa fa-globe"></i></a></li>
                            <li class="location"><i class="fa fa-map-marker"></i>{{$author->author_location}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end cover -->
    <!-- start content area -->
    <div class="main-content-area">
        <div class="container post-listing">
            <div class="row is-flex">
                <div class="col-sm-6 col-md-4 col-xs-12">
                    <article class="post post-card">
                        <a href="../../camping-in-an-abandoned-house-under-the-starry-night-at-hill-top/index.html" class="permalink">
                            <div class="featured-image" style="background-image: url(images/2017/05/starry-night.jpg)"></div>
                        </a>
                        <div class="content-wrap">
                            <div class="entry-header align-center">
                                <span class="category"><a href="../../tag/adventure/index.html">Adventure</a></span>
                                <h2 class="title h4"><a href="../../camping-in-an-abandoned-house-under-the-starry-night-at-hill-top/index.html" rel="bookmark">Camping in an abandoned house under the starry night at hill top</a></h2>
                            </div>
                            <div class="entry-footer clearfix">
                                <div class="author">
                                    <a href="index.html" rel="author">
                                        <img class="avatar" src="http://www.gravatar.com/avatar/021e64775176cc4c7018e5e867f17de2?s=250&amp;d=mm&amp;r=x" alt="avatar">
                                        <span class="name">Biswajit Saha</span>
                                    </a>
                                </div>
                                <div class="published-date">
                                    <time class="time" datetime="2017-05-14 15:05:00">May 14, 2017</time>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <!-- start pagination -->
            <div class="row">
                <div class="col-md-12">
                    <div class="pagination-wrap align-center clearfix" role="navigation">
                        <span class="page-number">Page 1 of 1</span>
                    </div>
                </div>
            </div>
            <!-- end pagination -->	</div>

@stop
