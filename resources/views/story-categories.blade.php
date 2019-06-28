@extends('main')

@section('title','')

@section('content')

    <!-- start cover -->
    <section class="cover cover-tag has-image"  style="background-image: url(images/2017/05/tree-closeup.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="cover-content-wrap align-center">
                        <h1 class="tag-title">Tag: Travel</h1>
                        <div class="meta-info">
                            <span>Total 3 Posts</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end cover --><!-- start content area -->
    <div class="main-content-area">
        <div class="container post-listing">
            <div class="row is-flex">
                <div class="col-sm-6 col-md-4 col-xs-12">
                    <article class="post post-card">
                        <a href="{{url('/single-story')}}" class="permalink">
                            <div class="featured-image" style="background-image: url(images/2017/05/grand-canyon.jpg)"></div>
                        </a>
                        <div class="content-wrap">
                            <div class="entry-header align-center">
                                <span class="category"><a href="index.html">Travel</a></span>
                                <h2 class="title h4"><a href="../../my-memorable-story-of-trip-to-grand-canyon-national-park/index.html" rel="bookmark">My Memorable story of trip to grand canyon National Park</a></h2>
                            </div>
                            <div class="entry-footer clearfix">
                                <div class="author">
                                    <a href="../../author/surabhi/index.html" rel="author">
                                        <img class="avatar" src="../../content/images/2018/04/Surabhi-Gupta-1.jpg" alt="avatar">
                                        <span class="name">Surabhi Gupta</span>
                                    </a>
                                </div>
                                <div class="published-date">
                                    <time class="time" datetime="2017-05-14 15:05:00">May 14, 2017</time>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12">
                    <article class="post post-card">
                        <a href="../../a-perfect-road-map-for-travelling-asian-countries/index.html" class="permalink">
                            <div class="featured-image" style="background-image: url(images/2017/05/hill-road.jpg)"></div>
                        </a>
                        <div class="content-wrap">
                            <div class="entry-header align-center">
                                <span class="category"><a href="index.html">Travel</a></span>
                                <h2 class="title h4"><a href="../../a-perfect-road-map-for-travelling-asian-countries/index.html" rel="bookmark">A perfect road map for travelling asian countries</a></h2>
                            </div>
                            <div class="entry-footer clearfix">
                                <div class="author">
                                    <a href="../../author/apurba/index.html" rel="author">
                                        <img class="avatar" src="../../content/images/2018/04/Apurba-Talukdar.jpg" alt="avatar">
                                        <span class="name">Apurba Talukdar</span>
                                    </a>
                                </div>
                                <div class="published-date">
                                    <time class="time" datetime="2017-05-14 06:05:00">May 14, 2017</time>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4 col-xs-12">
                    <article class="post post-card">
                        <a href="../../trekking-in-himalayas-where-heaven-meets-earth/index.html" class="permalink">
                            <div class="featured-image" style="background-image: url(images/2017/05/georg-nietsch.jpg)"></div>
                        </a>
                        <div class="content-wrap">
                            <div class="entry-header align-center">
                                <span class="category"><a href="index.html">Travel</a></span>
                                <h2 class="title h4"><a href="../../trekking-in-himalayas-where-heaven-meets-earth/index.html" rel="bookmark">Trekking in Himalayas, where heaven meets earth</a></h2>
                            </div>
                            <div class="entry-footer clearfix">
                                <div class="author">
                                    <a href="../../author/apurba/index.html" rel="author">
                                        <img class="avatar" src="../../content/images/2018/04/Apurba-Talukdar.jpg" alt="avatar">
                                        <span class="name">Apurba Talukdar</span>
                                    </a>
                                </div>
                                <div class="published-date">
                                    <time class="time" datetime="2017-05-11 06:05:00">May 11, 2017</time>
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
    </div>
    <!-- end content area -->

@stop
