@extends('main')

@section('title','Stories')

@section('content')

    <!--start content area -->
    <div class="main-content-area single-post archive-page">
        <article>
            <div class="post-head" style="background-image:url(https://images.unsplash.com/photo-1522395840258-4bbb8e60cdb1?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjExNzczfQ&amp;s=dd6f2559ce9c3c49d4bb94a7895b1186);"
            >
                <div class="container align-center">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <h1 class="title page-title">Stories</h1>
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
        <div class="tag-list-wrap">
            <div class="container">
                <div class="row is-flex">
                    @foreach($stories as $story)
                        @if($story->story_category=='Travel')
                    <div class="col-sm-6 col-md-4 col-xs-12">
                        <article class="post post-card">
                            <a href="{{url('/story-categories')}}" class="permalink">
                                <div class="featured-image" style="background-image: url(images/2017/05/tree-closeup.jpg)"></div>
                            </a>
                            <div class="content-wrap">
                                <div class="entry-header align-center">
                                    <span class="category"><a href="../tag/travel/index.html" rel="bookmark">3 Posts</a></span>
                                    <h2 class="title h4"><a href="../tag/travel/index.html" rel="bookmark">Travel</a></h2>
                                </div>
                            </div>
                        </article>
                    </div>
                        @elseif($story->story_category=='Lifestyle')
                    <div class="col-sm-6 col-md-4 col-xs-12">
                        <article class="post post-card">
                            <a href="../tag/lifestyle/index.html" class="permalink">
                                <div class="featured-image" style="background-image: url(images/2017/05/girl.jpg)"></div>
                            </a>
                            <div class="content-wrap">
                                <div class="entry-header align-center">
                                    <span class="category"><a href="../tag/lifestyle/index.html" rel="bookmark">3 Posts</a></span>
                                    <h2 class="title h4"><a href="../tag/lifestyle/index.html" rel="bookmark">Lifestyle</a></h2>
                                </div>
                            </div>
                        </article>
                    </div>
                        @elseif($story->story_category=='Music')
                    <div class="col-sm-6 col-md-4 col-xs-12">
                        <article class="post post-card">
                            <a href="../tag/music/index.html" class="permalink">
                                <div class="featured-image" style="background-image: url(images/2017/05/girl-playing-violine.jpg)"></div>
                            </a>
                            <div class="content-wrap">
                                <div class="entry-header align-center">
                                    <span class="category"><a href="../tag/music/index.html" rel="bookmark">2 Posts</a></span>
                                    <h2 class="title h4"><a href="../tag/music/index.html" rel="bookmark">Music</a></h2>
                                </div>
                            </div>
                        </article>
                    </div>
                        @elseif($story->story_category=='Nature')
                    <div class="col-sm-6 col-md-4 col-xs-12">
                                <article class="post post-card">
                                    <a href="../tag/nature/index.html" class="permalink">
                                        <div class="featured-image" style="background-image: url(images/2017/05/red-stone.jpg)"></div>
                                    </a>
                                    <div class="content-wrap">
                                        <div class="entry-header align-center">
                                            <span class="category"><a href="../tag/nature/index.html" rel="bookmark">1 Post</a></span>
                                            <h2 class="title h4"><a href="../tag/nature/index.html" rel="bookmark">Nature</a></h2>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @elseif($story->story_category=='Video')
                    <div class="col-sm-6 col-md-4 col-xs-12">
                        <article class="post post-card">
                            <a href="../tag/video/index.html" class="permalink">
                                <div class="featured-image" style="background-image: url(images/2017/05/topich.jpg)"></div>
                            </a>
                            <div class="content-wrap">
                                <div class="entry-header align-center">
                                    <span class="category"><a href="../tag/video/index.html" rel="bookmark">1 Post</a></span>
                                    <h2 class="title h4"><a href="../tag/video/index.html" rel="bookmark">Video</a></h2>
                                </div>
                            </div>
                        </article>
                    </div>
                        @elseif($story->story_category=='Adventure')
                    <div class="col-sm-6 col-md-4 col-xs-12">
                        <article class="post post-card">
                            <a href="../tag/adventure/index.html" class="permalink">
                                <div class="featured-image" style="background-image: url(images/2017/05/yannick-pulver.jpg)"></div>
                            </a>
                            <div class="content-wrap">
                                <div class="entry-header align-center">
                                    <span class="category"><a href="../tag/adventure/index.html" rel="bookmark">1 Post</a></span>
                                    <h2 class="title h4"><a href="../tag/adventure/index.html" rel="bookmark">Adventure</a></h2>
                                </div>
                            </div>
                        </article>
                    </div>
                        @else
                    <div class="col-sm-6 col-md-4 col-xs-12">
                                <article class="post post-card">
                                    <a href="../tag/getting-started/index.html" class="permalink">
                                        <div class="featured-image" style="background-image: url(images/2018/08/lake.jpg)"></div>
                                    </a>
                                    <div class="content-wrap">
                                        <div class="entry-header align-center">
                                            <span class="category"><a href="../tag/getting-started/index.html" rel="bookmark">1 Post</a></span>
                                            <h2 class="title h4"><a href="../tag/getting-started/index.html" rel="bookmark">Getting Started</a></h2>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@stop
