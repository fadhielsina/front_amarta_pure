@extends('pure_water.layouts.app')
@section('content')
<section class="df-blog__area section-spacing p-relative fix">

    <div class="ttm-row clearfix">
        <div class="container">
            <!-- row -->
            <div class="row mt_15">
                @foreach ($data as $item)
                <div class="col-lg-4 col-md-6">
                    <!-- featured-imagebox-post -->
                    <div class="featured-imagebox featured-imagebox-post style1">
                        <div class="ttm-post-thumbnail featured-thumbnail">
                            <img class="img-fluid" src="{{url('https://amartawater.com/storage')}}/{{$item->image}}" alt="image">
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="post-top ttm-post-link">
                                <div class="post-meta">
                                    <span class="ttm-meta-line cat-link"><i class="fa fa-calendar"></i><time class="entry-date published" datetime="2020-03-11T10:29:24+00:00">{{$item->date}}</time></span>
                                </div>
                            </div>
                            <div class="post-title featured-title">
                                <h5><a href="blog-single-simple.html" tabindex="0">{{$item->title}}</a></h5>
                            </div>
                            <div class="featured-desc">{{$item->description}}</div>
                        </div>
                    </div><!-- featured-imagebox-post end-->
                </div>
                @endforeach
            </div><!-- row end -->
        </div>
    </div>
</section>
@endsection