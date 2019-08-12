<!DOCTYPE html>
<html lang="en">

<<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('app.name')}} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.minfed3.css?v=d4efd46282')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.minfed3.css?v=d4efd46282')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/hl-styles/atom-one-darkfed3.css?v=d4efd46282')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/screenfed3.css?v=d4efd46282')}}">
    <script>
        /*====================================================
          THEME SETTINGS & GLOBAL VARIABLES
        ====================================================*/
        //  1. Disqus comment settings
        var disqus_shortname = 'polar-ghost-theme'; // required: replace example with your forum shortname

        //  2. Fixed navbar
        var fixed_navbar = true;

        // 3. Content API key ( it required to search work)
        var api_key = 'c93d93f153346b4bf93d1d04f3';
    </script>
    <meta name="description" content="Thoughts, stories and ideas." />
    <link rel="shortcut icon" href="favicon.png" type="image/png" />
    <link rel="canonical" href="#" />
    <meta name="referrer" content="no-referrer-when-downgrade" />
    <link rel="next" href="#" />

    <meta property="og:site_name" content="Polar" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Polar" />
    <meta property="og:description" content="Thoughts, stories and ideas." />
    <meta property="og:url" content="http://polar.gbjsolution.com/" />
    <meta property="og:image" content="http://polar.gbjsolution.com/images/2017/05/cover-image.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Polar" />
    <meta name="twitter:description" content="Thoughts, stories and ideas." />
    <meta name="twitter:url" content="http://polar.gbjsolution.com/" />
    <meta name="twitter:image" content="http://polar.gbjsolution.com/images/2017/05/cover-image.jpg" />
    <meta property="og:image:width" content="1440" />
    <meta property="og:image:height" content="810" />

    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "publisher": {
        "@type": "Organization",
        "name": "Polar",
        "logo": "http://polar.gbjsolution.com/images/2017/05/polar-logo.png"
    },
    "url": "http://polar.gbjsolution.com/",
    "image": {
        "@type": "ImageObject",
        "url": "http://polar.gbjsolution.com/images/2017/05/cover-image.jpg",
        "width": 1440,
        "height": 810
    },
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "http://polar.gbjsolution.com/"
    },
    "description": "Thoughts, stories and ideas."
}
    </script>

    <meta name="generator" content="Ghost 2.12" />
    <link rel="alternate" type="application/rss+xml" title="Farm-app" href="#" />
    <style type="text/css">
        nav .media {
            margin-top: 0;
        }
    </style>
</head>
<body class="home-template">
<!-- start header -->
<header class="site-header" id="main-navbar">
    @include('partials.header')
</header>
<!-- end header -->
@yield('content')
<!-- start footer -->
<footer class="site-footer">
    @include('partials.footer')
</footer>
<!-- end footer -->
<span class="back-to-top pull-right" id="back-to-top"><i class="fa fa-angle-up"></i></span>
<!-- start share modal -->
<div class="modal" id="searchmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title align-center" id="myModalLabel">Search</h4>
            </div>
            <div class="modal-body">
                <form id="search-form">
                    <div class="input-group url-wrap">

                        <input type="text" id="search-input" class="form-control" spellcheck="false" placeholder="Type to Search ...">
                        <!-- <span class="input-group-addon" id=""><i class="fa fa-search"></i></span> -->
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
                <div id="search-results">
                    <ul class=""></ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end share modal -->
<script>if(typeof api_key != "undefined") {var searchApi = 'http://polar.gbjsolution.com/ghost/api/v2/content/posts/?key='+api_key+'&limit=all&fields=id,title,url,published_at&formats=plaintext';}</script>
<script src="../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/js/bootstrap.minfed3.js?v=d4efd46282"></script>
<script src="assets/js/pluginsfed3.js?v=d4efd46282"></script>
<script src="assets/js/mainfed3.js?v=d4efd46282"></script>

</body>

</html>
