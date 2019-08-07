@extends('main')

@section('title',$story->story_title)

@section('content')

    <!-- start content area -->
    <div class="main-content-area single-post">
        <article>
            <div class="post-head" style="background-image:url(images/2017/05/grand-canyon.jpg);">
                <div class="container align-center">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
							<span class="category">
								<a href="#">{{$story->story_category}}</a>
							</span>
                            <h1 class="title">{{$story->story_title}}</h1>

                            <div class="post-meta">
                                <a class="author" href="{{url('single-author-archive/'.$author->id)}}" rel="author">
                                    <span class="name">{{$author->author_name}}</span>
                                </a>
                                <time class="time" datetime="2017-05-14 15:05:00" itemprop="datePublished">
                                    {{date('M',strtotime($story->story_date))}}
                                    {{\Carbon\Carbon::parse($story->story_date)->day}},
                                    {{date('Y',strtotime($story->story_date))}}
                                </time>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <div class="post-content">
                            <p>
                                {{$story->story_content}}
                            </p>
                            <h3 id="vestibulumatpretiumaugue">Vestibulum at pretium augue</h3>
                            <ul>
                                <li>Donec varius volutpat aliquam. Proin maximus nulla vitae risus convallis venenatis.</li>
                                <li>Nam quis nibh ut erat posuere fringilla eu id nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                            </ul>
                            <p>Praesent viverra varius nisi euismod aliquam. Etiam interdum rhoncus quam, eget auctor sem maximus a. Praesent rhoncus pulvinar tincidunt. Vestibulum eu velit eget turpis tincidunt pharetra non quis nulla.</p>
                            <blockquote>
                                <p>It's not at all naturally human to see something like the Grand Canyon as beautiful.</p>
                            </blockquote>
                            <p>Phasellus dignissim rutrum viverra. Curabitur sodales quam non viverra consequat. Proin commodo turpis tellus, ut posuere libero ultrices at. Vestibulum nec orci malesuada, convallis ante a, mattis augue. In nibh mi, accumsan at dolor nec, consequat pretium ante.</p>
                            <p><img src="images/2017/05/camp-fire.jpg" alt=""></p>

                        </div>
                        <div class="share-wrap clearfix align-center">
                            <div class="share-text h5">Share this article</div>
                            <ul class="share-links">
                                <!-- facebook -->
                                <li>
                                    <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=http://polar.gbjsolution.com/my-memorable-story-of-trip-to-grand-canyon-national-park/" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" title="Share on Facebook"><i class="fa fa-facebook"></i>Facebook</a>
                                </li>
                                <!-- twitter -->
                                <li>
                                    <a class="twitter" href="https://twitter.com/share?text=My%20Memorable%20story%20of%20trip%20to%20grand%20canyon%20National%20Park&amp;url=http://polar.gbjsolution.com/my-memorable-story-of-trip-to-grand-canyon-national-park/" onclick="window.open(this.href, 'twitter-share', 'width=580,height=296');return false;" title="Share on Twitter"><i class="fa fa-twitter"></i>Twitter</a>
                                </li>
                                <!-- google plus -->
                                <li>
                                    <a class="google-plus" href="https://plus.google.com/share?url=http://polar.gbjsolution.com/my-memorable-story-of-trip-to-grand-canyon-national-park/" onclick="window.open(this.href, 'google-plus-share', 'width=580,height=296');return false;" title="Share on Google+"><i class="fa fa-google-plus"></i>Google+</a>
                                </li>
                                <!-- linkedin -->
                                <li>
                                    <a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://polar.gbjsolution.com/my-memorable-story-of-trip-to-grand-canyon-national-park/&amp;title=My%20Memorable%20story%20of%20trip%20to%20grand%20canyon%20National%20Park" onclick="window.open(this.href, 'linkedin-share', 'width=580,height=296');return false;" title="Share on Linkedin"><i class="fa fa-linkedin"></i>Linkedin</a>
                                </li>
                                <!-- pinterest -->
                                <li>
                                    <a class="pinterest" href="http://pinterest.com/pin/create/button/?url=http://polar.gbjsolution.com/my-memorable-story-of-trip-to-grand-canyon-national-park/&amp;description=My%20Memorable%20story%20of%20trip%20to%20grand%20canyon%20National%20Park" onclick="window.open(this.href, 'linkedin-share', 'width=580,height=296');return false;" title="Share on Pinterest"><i class="fa fa-pinterest"></i>Pinterest</a>
                                </li>
                            </ul>
                        </div>						<div class="about-author-wrap">
                            <!-- start about the author -->
                            <div class="about-author clearfix">
                                <a href="{{url('single-author-archive/'.$author->id)}}" title="Surabhi Gupta"><img src="images/2018/04/Surabhi-Gupta-1.jpg" alt="Author image" class="avatar pull-left"></a>
                                <div class="details">
                                    <h4 class="author h4">About <a href='{{url('single-author-archive/'.$author->id)}}'>{{$author->author_name}}</a></h4>
                                    <div class="bio">
                                        {{$author->author_description}}
                                    </div>
                                    <ul class="meta-info">
                                        <li><a href="https://twitter.com/gbjsolution" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/gbjsolution" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li class="website"><a href="http://gbjsolution.com/" target="_blank"><i class="fa fa-globe"></i></a></li>
                                        <li class="location"><i class="fa fa-map-marker"></i>{{$author->author_location}}</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end about the author -->						</div>
                        <div class="subscribe-box-wrap">
                            <div class="subscribe">
                                <h3 class="subscribe-title align-center">Subscribe to {{config('app.name')}}</h3>
                                <p class="align-center">Get the latest posts delivered right to your inbox.</p>
                                <form method="post" action="http://polar.gbjsolution.com/subscribe/" class="sign-up-form">
                                    <input class="confirm" type="hidden" name="confirm"  /><input class="location" type="hidden" name="location"  /><input class="referrer" type="hidden" name="referrer"  />

                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" placeholder="Enter your email..." />
                                    </div>
                                    <button class="btn btn-primary" type="submit"><span>Subscribe</span></button>

                                    <script>
                                        (function(g,h,o,s,t){
                                            var buster = function(b,m) {
                                                h[o]('input.'+b).forEach(function (i) {
                                                    i.value=i.value || m;
                                                });
                                            };
                                            buster('location', g.location.href);
                                            buster('referrer', h.referrer);
                                        })(window,document,'querySelectorAll','value');
                                    </script>

                                </form>


                                <div class="subscribe-rss align-center">or subscribe via <a href='../rss/index.html'>RSS FEED</a></div>
                            </div>
                        </div>
                        <div class="prev-next-wrap has-next has-prev">
                            <div class="row is-flex">
                                <div class="col-sm-6 col-xs-12">
                                    <article class="post post-card">
                                        <div class="prev-next-link align-center">
                                            <a class="" href="../camping-in-an-abandoned-house-under-the-starry-night-at-hill-top/index.html">Previous Post</a>
                                        </div>
                                        <a href="../camping-in-an-abandoned-house-under-the-starry-night-at-hill-top/index.html" class="permalink">
                                            <div class="featured-image" style="background-image: url(images/2017/05/starry-night.jpg)"></div>
                                        </a>
                                        <div class="content-wrap">
                                            <div class="entry-header align-center">
                                                <span class="category"><a href="../tag/adventure/index.html">Adventure</a></span>
                                                <h3 class="title h4"><a href="../camping-in-an-abandoned-house-under-the-starry-night-at-hill-top/index.html" rel="bookmark">Camping in an abandoned house under the starry night at hill top</a></h3>
                                            </div>
                                            <div class="entry-footer clearfix">
                                                <div class="author">
                                                    <a href="../author/biswajit/index.html" rel="author">
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
                                <div class="col-sm-6 col-xs-12">
                                    <article class="post post-card">
                                        <div class="prev-next-link align-center">
                                            <a class="" href="../i-like-fishing-because-it-is-always-the-great-way-of-relaxing/index.html">Next Post</a>
                                        </div>
                                        <a href="../i-like-fishing-because-it-is-always-the-great-way-of-relaxing/index.html" class="permalink">
                                            <div class="featured-image" style="background-image: url(images/2017/05/fishing-with-dog.jpg)"></div>
                                        </a>
                                        <div class="content-wrap">
                                            <div class="entry-header align-center">
                                                <span class="category"><a href="../tag/lifestyle/index.html">Lifestyle</a></span>
                                                <h3 class="title h4"><a href="../i-like-fishing-because-it-is-always-the-great-way-of-relaxing/index.html" rel="bookmark">I like fishing because it is always the great way of relaxing</a></h3>
                                            </div>
                                            <div class="entry-footer clearfix">
                                                <div class="author">
                                                    <a href="../author/biswajit/index.html" rel="author">
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
                        </div>						<div class="comment-wrap">
                            <!-- start disqus comment -->
                            <div class="comment-container">
                                <div id="disqus_thread"></div>
                                <script type="text/javascript">
                                    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                                    var disqus_shortname = disqus_shortname; // required: replace example with your forum shortname

                                    /* * * DON'T EDIT BELOW THIS LINE * * */
                                    (function() {
                                        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                                    })();
                                </script>
                                <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            </div>
                            <!-- end disqus comment -->
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <!-- end content area -->

@stop
