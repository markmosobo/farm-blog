@extends('main')

@section('title','Video')

@section('content')

    <!-- start cover -->
    <section class="cover cover-tag has-image"  style="background-image: url(images/2017/05/topich.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="cover-content-wrap align-center">
                        <h1 class="tag-title">Tag: Video</h1>
                        <div class="meta-info">
                            <span>Total 1 Post</span>
                        </div>
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
                    @if($story->story_category=='Video')
                <div class="col-sm-6 col-md-4 col-xs-12">
                    <article class="post post-card">
                        <a href="#" class="permalink">
                            <div class="featured-image" style="background-image: url(images/2017/05/sun-set.jpg)"></div>
                        </a>
                        <div class="content-wrap">
                            <div class="entry-header align-center">
                                <span class="category"><a href="#">Video</a></span>
                                <h2 class="title h4"><a href="{{url('single-story/'.$story->id)}}" rel="bookmark">{{$story->story_title}}</a></h2>
                            </div>
                            <div class="entry-footer clearfix">
                                <div class="author">
                                    <a href="../../author/biswajit/index.html" rel="author">
                                        <img class="avatar" src="http://www.gravatar.com/avatar/021e64775176cc4c7018e5e867f17de2?s=250&amp;d=mm&amp;r=x" alt="avatar">
                                        <span class="name">Biswajit Saha</span>
                                    </a>
                                </div>
                                <div class="published-date">
                                    <time class="time" datetime="2017-05-12 13:05:00">May 12, 2017</time>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                    @endif
                @endforeach
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
