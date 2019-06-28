@extends('main')

@section('content')

    <!-- start cover -->
    <section class="cover cover-home has-image"  style="background-image: url(images/2017/05/cover-image.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="cover-content-wrap align-center">
                        <h1 class="intro-title">Farming, stories and ideas.</h1>
                        <P class="intro-description">
                            Minimal and modern theme for Ghost. Use it for personal blog or multi-author blog / magazine.
                        </P>
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
                        <a href="{{url('/single-story')}}" class="permalink">
                            <div class="featured-image" style="background-image: url(images/2017/05/fishing-with-dog.jpg)"></div>
                        </a>
                        <div class="content-wrap">
                            <div class="entry-header align-center">
                                <span class="category"><a href="tag/lifestyle/index.html">Lifestyle</a></span>
                                <h2 class="title h4"><a href="i-like-fishing-because-it-is-always-the-great-way-of-relaxing/index.html" rel="bookmark">I like fishing because it is always the great way of relaxing</a></h2>
                            </div>
                            <div class="entry-footer clearfix">
                                <div class="author">
                                    <a href="author/biswajit/index.html" rel="author">
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
                <div class="col-sm-6 col-md-4 col-xs-12">
                    <article class="post post-card">
                        <a href="{{url('/single-story')}}" class="permalink">
                            <div class="featured-image" style="background-image: url(images/2017/05/grand-canyon.jpg)"></div>
                        </a>
                        <div class="content-wrap">
                            <div class="entry-header align-center">
                                <span class="category"><a href="tag/travel/index.html">Travel</a></span>
                                <h2 class="title h4"><a href="my-memorable-story-of-trip-to-grand-canyon-national-park/index.html" rel="bookmark">My Memorable story of trip to grand canyon National Park</a></h2>
                            </div>
                            <div class="entry-footer clearfix">
                                <div class="author">
                                    <a href="author/surabhi/index.html" rel="author">
                                        <img class="avatar" src="images/2018/04/Surabhi-Gupta-1.jpg" alt="avatar">
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
                        <a href="{{url('/single-story')}}" class="permalink">
                            <div class="featured-image" style="background-image: url(images/2017/05/starry-night.jpg)"></div>
                        </a>
                        <div class="content-wrap">
                            <div class="entry-header align-center">
                                <span class="category"><a href="tag/adventure/index.html">Adventure</a></span>
                                <h2 class="title h4"><a href="camping-in-an-abandoned-house-under-the-starry-night-at-hill-top/index.html" rel="bookmark">Camping in an abandoned house under the starry night at hill top</a></h2>
                            </div>
                            <div class="entry-footer clearfix">
                                <div class="author">
                                    <a href="author/biswajit/index.html" rel="author">
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
                <div class="col-sm-6 col-md-4 col-xs-12">
                    <article class="post post-card">
                        <a href="{{url('/single-story')}}" class="permalink">
                            <div class="featured-image" style="background-image: url(images/2017/05/camp-fire.jpg)"></div>
                        </a>
                        <div class="content-wrap">
                            <div class="entry-header align-center">
                                <span class="category"><a href="tag/lifestyle/index.html">Lifestyle</a></span>
                                <h2 class="title h4"><a href="some-amazing-similarities-between-people-around-the-world/index.html" rel="bookmark">Some amazing similarities between people around the world</a></h2>
                            </div>
                            <div class="entry-footer clearfix">
                                <div class="author">
                                    <a href="author/biswajit/index.html" rel="author">
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
                <div class="col-sm-6 col-md-4 col-xs-12">
                    <article class="post post-card">
                        <a href="{{url('/single-story')}}" class="permalink">
                            <div class="featured-image" style="background-image: url(images/2017/05/hill-road.jpg)"></div>
                        </a>
                        <div class="content-wrap">
                            <div class="entry-header align-center">
                                <span class="category"><a href="tag/travel/index.html">Travel</a></span>
                                <h2 class="title h4"><a href="a-perfect-road-map-for-travelling-asian-countries/index.html" rel="bookmark">A perfect road map for travelling asian countries</a></h2>
                            </div>
                            <div class="entry-footer clearfix">
                                <div class="author">
                                    <a href="author/apurba/index.html" rel="author">
                                        <img class="avatar" src="images/2018/04/Apurba-Talukdar.jpg" alt="avatar">
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
                        <a href="{{url('/single-story')}}" class="permalink">
                            <div class="featured-image" style="background-image: url(images/2017/05/girl-listening.jpg)"></div>
                        </a>
                        <div class="content-wrap">
                            <div class="entry-header align-center">
                                <span class="category"><a href="tag/music/index.html">Music</a></span>
                                <h2 class="title h4"><a href="mind-refreshing-song-by-rabindranath-tagore/index.html" rel="bookmark">Mind refreshing song by Rabindranath Tagore</a></h2>
                            </div>
                            <div class="entry-footer clearfix">
                                <div class="author">
                                    <a href="author/biswajit/index.html" rel="author">
                                        <img class="avatar" src="http://www.gravatar.com/avatar/021e64775176cc4c7018e5e867f17de2?s=250&amp;d=mm&amp;r=x" alt="avatar">
                                        <span class="name">Biswajit Saha</span>
                                    </a>
                                </div>
                                <div class="published-date">
                                    <time class="time" datetime="2017-05-14 06:05:00">May 14, 2017</time>
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
                        <span class="page-number">Page 1 of 2</span>
                        <a class="older-posts btn btn-default btn-sm" href="page/2/index.html"><span>Older  Articles</span> <i class="fa fa-long-arrow-right fa-fw"></i></a>
                    </div>
                </div>
            </div>
            <!-- end pagination -->	</div>
    </div>
    <!-- end content area -->

@stop
