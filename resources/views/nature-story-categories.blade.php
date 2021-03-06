@extends('main');

@section('title','Nature')

@section('content')

    <!-- start cover -->
    <section class="cover cover-tag has-image"  style="background-image: url(images/2017/05/red-stone.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="cover-content-wrap align-center">
                        <h1 class="tag-title">Tag: Nature</h1>
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
                <div class="col-sm-6 col-md-4 col-xs-12">
                    @foreach($stories as $story)
                        @if($story->story_category=='Nature')
                    <article class="post post-card">
                        <a href="{{url('single-story/'.$story->id)}}" class="permalink">
                            <div class="featured-image" style="background-image: url(images/2017/05/deer.jpg)"></div>
                        </a>
                        <div class="content-wrap">
                            <div class="entry-header align-center">
                                <span class="category"><a href="#">Nature</a></span>
                                <h2 class="title h4"><a href="{{url('single-story/'.$story->id)}}" rel="bookmark">{{$story->story_title}}</a></h2>
                            </div>
                            <div class="entry-footer clearfix">
                                <div class="author">
                                    <a href="{{url('single-author-archive/'.$story->story_author_id)}}" rel="author">
                                        <img class="avatar" src="images/2018/04/Apurba-Talukdar.jpg" alt="avatar">
                                        <span class="name">{{$story->story_author_id}}</span>
                                    </a>
                                </div>
                                <div class="published-date">
                                    <time class="time" datetime="2017-05-13 08:05:00">
                                        {{date('M',strtotime($story->story_date))}}
                                        {{\Carbon\Carbon::parse($story->story_date)->day}},
                                        {{\Carbon\Carbon::parse($story->story_date)->year}}</time>
                                </div>
                            </div>
                        </div>
                    </article>
                        @endif
                    @endforeach
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
