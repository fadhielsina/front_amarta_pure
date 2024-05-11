@extends('pure_water.layouts.app')
@section('content')
<section class="df-blog__area section-spacing p-relative fix">
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="container">
        <div class="row justify-content-center section-title-spacing wow fadeInUp" data-wow-delay=".3s">
            <div class="col-xl-8">
                <div class="section__title-wrapper text-center">
                    <h2 class="section__title">Read Blog</h2>
                </div>
            </div>
            <div class="row g-5">
                @foreach ($data as $item)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="df-blog2__box bg-2">
                        <div class="df-blog2__thumb">
                            <a href=""><img src="{{url('https://amartawater.com/storage')}}/{{$item->image}}" style="height: 290px; width:390px;" alt="image not found"></a>
                        </div>
                        <div class="df-blog2__content">
                            <div class="df-blog2__meta">
                                <span class="blog-date">{{$item->date}}</span>
                            </div>
                            <h3 class="df-blog2__title"><a href="">{{$item->title}}</a></h3>
                            <hr>
                            <p>{{$item->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection