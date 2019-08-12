<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <!-- start recent post widget -->
                <div class="widget">
                    <h4 class="widget-title h6">Recent Stories</h4>
                    <div class="content recent-post">
                        @foreach($recentstories as $story)
                        <div class="recent-single-post clearfix have-image">
                            <a href="{{url('single-story/'.$story->id)}}">
                                <div class="post-thumb pull-left" style="background-image: url(images/2017/05/fishing-with-dog.jpg);"></div>
                            </a>
                            <div class="post-info">
                                <h4 class="post-title"><a href="{{url('single-story/'.$story->id)}}">{{$story->story_title}}</a></h4>
                                <div class="date"><a href="#">
                                        {{date('M',strtotime($story->story_date))}}
                                        {{\Carbon\Carbon::parse($story->story_date)->day}},
                                        {{\Carbon\Carbon::parse($story->story_date)->year}}</a></div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <!-- end widget -->                </div>
            <div class="col-sm-4">
                <!-- start tag widget -->
                <div class="widget">
                    <h4 class="widget-title h6">Category Cloud</h4>
                    <div class="content tagcloud">
                        <a href="{{url('adventure-story-categories')}}">Adventure</a>
                        {{--<a href="#">Getting Started</a>--}}
                        <a href="{{url('lifestyle-story-categories')}}">Lifestyle</a>
                        <a href="{{url('music-story-categories')}}">Music</a>
                        <a href="{{url('nature-story-categories')}}">Nature</a>
                        <a href="{{url('travel-story-categories')}}">Travel</a>
                        <a href="{{url('travel-story-categories')}}">Video</a>
                    </div>
                </div>
                <!-- end tag widget -->
                {{--<div class="widget">--}}
                    {{--<h4 class="widget-title h6">Subscribe to Polar</h4>--}}
                    {{--<div class="content tagcloud">--}}
                        {{--<section class="gh-subscribe">--}}
                            {{--<p>Get the latest posts delivered right to your inbox.</p>--}}
                            {{--<form method="post" action="http://polar.gbjsolution.com/subscribe/" class="sign-up-form">--}}
                                {{--<input class="confirm" type="hidden" name="confirm"  /><input class="location" type="hidden" name="location"  /><input class="referrer" type="hidden" name="referrer"  />--}}

                                {{--<div class="form-group">--}}
                                    {{--<input class="form-control" type="email" name="email" placeholder="Enter your email..." />--}}
                                {{--</div>--}}
                                {{--<button class="btn btn-primary" type="submit"><span>Subscribe</span></button>--}}

                                {{--<script>--}}
                                    {{--(function(g,h,o,s,t){--}}
                                        {{--var buster = function(b,m) {--}}
                                            {{--h[o]('input.'+b).forEach(function (i) {--}}
                                                {{--i.value=i.value || m;--}}
                                            {{--});--}}
                                        {{--};--}}
                                        {{--buster('location', g.location.href);--}}
                                        {{--buster('referrer', h.referrer);--}}
                                    {{--})(window,document,'querySelectorAll','value');--}}
                                {{--</script>--}}

                            {{--</form>--}}


                        {{--</section>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <!-- end end widget -->                </div>
            <div class="col-sm-4">
                <!-- start tag widget -->
                <div class="widget">
                    <h4 class="widget-title h6">About {{config('app.name')}}</h4>
                    <div class="content about">
                        <p>
                            Farm app is hinged upon providing farming solutions by
                            appreciating the experience accorded to us by the farmers'
                            stories and working to share the vital informatin regarding
                            research into traditional drugs sourced from <strong>Mother Nature </strong>.
                        </p>
                        {{--<p>--}}
                            {{--All widgets in this footer are reorderable. An email subscription form widget is also available within the theme. Which you can use in place of this text widget.--}}
                        {{--</p>--}}
                    </div>
                </div>
                <!-- end tag widget -->                </div>
        </div>
    </div>
</div>
<div class="footer-bottom">
    <div class="container">
        <div class="footer-bottom-wrap clearfix">
            <div class="social-links-wrap">
                <ul class="social-links">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                    {{--<li><a href="rss/index.html"><i class="fa fa-rss"></i></a></li>--}}
                </ul>                </div>
            <div class="copyright-info">
                &copy; {{\Carbon\Carbon::now()->year}} <a href="{{url('/')}}">{{config('app.name')}}</a>. All right Reserved.
                </a>
            </div>
        </div>
    </div>
</div>
