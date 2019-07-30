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
                @foreach($stories as $story)
                <div class="col-sm-6 col-md-4 col-xs-12">
                    <article class="post post-card">
                        <a href="{{url('/single-story/'.$story->id)}}" class="permalink">
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
                @endforeach
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
