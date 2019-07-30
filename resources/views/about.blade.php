    @extends('main')

@section('title','About')

@section('content')

    <!-- start content area -->
    <div class="main-content-area single-post">
        <article>
            <div class="post-head" style="background-image:url(images/2017/05/lake.jpg);">
                <div class="container align-center">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10">
                            <h1 class="title page-title">About</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <div class="post-content">
                            @foreach($abouts as $about)
                            <h2 id="polarminimalandmodernthemeforghost">{{$about->sub_title}}</h2>
                            <p>{{$about->body}}</p>
                            <p>Farm app is hinged upon providing farming solutions by appreciating the experience
                                accorded to us by the farmers' stories and working to share the vital informatin regarding
                                research into traditional drugs sourced from Mother Nature.</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <!-- end content area -->

@stop
