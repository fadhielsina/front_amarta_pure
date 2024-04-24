@extends('amarta_pure.layouts.app')
@section('content')

<!-- Banner -->
<div class="banner_slider_wrapper">
    <div class="banner_slider banner_slider_2">
        <div class="slide">
            <div class="slide_img" style="background-image: url(landing_page/images/slides/bg_pure_home.jpg);"></div>
            <div class="slide__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slide__content--headings">
                                <div>
                                    <h3 data-animation="fadeInDown">
                                        Amarta Pure Water
                                    </h3>
                                    <br>
                                    <p style="color: white;">Air minum keluarga sehat dengan TDS kurang dari 10 ppm dan pH yang netral untuk konsumsi kebutuhan pokok dengan tingkat pH netral yang terjamin kemurniannya dan terbebas dari zat-zat non essensial yang berbahaya bagi kesehatan tubuh.</p>
                                </div>
                                <div class="margin_top40 res-767-margin_top30 margin_bottom60 res-991-margin_bottom0" data-animation="fadeInUp" data-delay="1.4">
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="contact-us">contact us!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="slide_img" style="background-image: url(landing_page/images/slides/slider-event.jpeg);"></div>
            <div class="slide__content">
                <div class="container">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner end-->


<!--site-main start-->
<div class="site-main">

    <!--service-section-->
    <section class="ttm-row service-section ttm-bgcolor-grey clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h2 class="title">APA ITU AMARTA PURE WATER?</h2>
                        </div>
                        <div>
                            <p>Amarta Pure Water merupakan Gerai Air Minum Isi Ulang yang berdiri sejak 2022 di bawah PT. Jagat Tirta Amarta. Amarta Pure Water merupakan Gerai Air Minum Isi Ulang PERTAMA di Indonesia yang menggunakan Sistem Demineralisasi yang merupakan air murni dengan TDS 0-10 ppm dan pH Netral terbebas dari kontaminasi secara fisika, kimia, dan mikrobiologis. Amarta Pure Water sangat mengedepankan kualitas air yang dikonsumsi oleh masyarakat dengan harga yang sangat terjangkau.</p>
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-dark" href="contact-us.html">contact us</a>
                        </div>
                    </div><!-- section-title end -->
                </div>
            </div>
        </div>
    </section>
    <!--service-section end -->

    <section class="ttm-row about-section bg-layer-equal-height clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- col-img-img-three -->
                    <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-three ttm-left-span z-index-2">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                        </div>
                    </div><!-- col-img-bg-img-three end-->
                    <img class="img-fluid ttm-equal-height-image" src="{{ url('landing_page') }}/images/bg-image/water_pure.jpg" alt="bg-image">
                </div>
                <div class="col-lg-2">
                    <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-skincolor spacing-4 z-index-2 h-auto">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <div class="row">
                                <div class="col-lg-12 col-md-3 col-sm-6 col-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content style4 icon-flip-hover">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-md">
                                                <i class="fa fa-notes-medical"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Terapi Kesehatan</h3>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-12 col-md-3 col-sm-6 col-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content style4 icon-flip-hover">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-md">
                                                <i class="fa fa-skull-crossbones"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Membuang Racun</h3>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-12 col-md-3 col-sm-6 col-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content style4 icon-flip-hover">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-md">
                                                <i class="fa fa-heart-pulse"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Meringankan Kerja Ginjal</h3>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-12 col-md-3 col-sm-6 col-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-top-content style4 icon-flip-hover">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-md">
                                                <i class="fa fa-child"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Menjaga Metabolisme Tubuh</h3>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="d-flex flex-column justify-content-center h-100 res-991-padding_top40">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h3>Solusi Sehat Anda</h3>
                                <h2 class="title">Amarta Pure Water</h2>
                            </div>
                            <div class="title-desc">
                                <p>Amarta pure water adalah air minum dengan TDS kurang dari 10 ppm dan pH yang netral untuk kebutuhan tubuh yang di ambil dari sumber mata air dan diolah dengan tekhnologi nano filterisasi.</p>
                                <p>Air murni sering digunakan untuk minum dan memasak karena memiliki beberapa manfaat untuk tubuh. Air murni juga sering digunakan di laboratorium dan studi ilmiah untuk pengujian analisis karena air murni merupakan air yang terbebas dari kontaminan.</p>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>

    <!--padding_zero-section-->
    <section class="ttm-row padding_zero-section bg-img3 bg-layer-equal-height clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="padding_top90 padding_bottom30 res-991-padding_top60">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h3>WHY CHOOSE US ?</h3>
                                        <h2 class="title">We Make You Healthy With Water</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Banyak orang berpikir bahwa air murni hanyalah air biasa dalam bentuk yang paling alami. Tetapi ada lebih dari itu. Air murni sebenarnya berasal dari sumber air yang mengalami proses untuk menghilangkan semua kotoran yang ada. Jadi, meskipun air alami mungkin terdengar lebih baik, manfaat kesehatan yang berasal dari air murni sebenarnya lebih besar daripada manfaat alami.</p>
                                    </div>
                                </div><!-- section title end -->
                                <div class="row ttm-vertical_sep padding_right40">
                                    <div class="col-sm-12">
                                        <div class="margin_top20 margin_bottom20">
                                            <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor fs-15">
                                                <li><i class="ti ti-arrow-circle-right"></i><span class="ttm-list-li-content">Membantu Proses Terapi Kesehatan</span></li>
                                                <li><i class="ti ti-arrow-circle-right"></i><span class="ttm-list-li-content">Meringankan Kerja Ginjal</span></li>
                                                <li><i class="ti ti-arrow-circle-right"></i><span class="ttm-list-li-content">Membuang Racun (Detoksifikasi)</span></li>
                                                <li><i class="ti ti-arrow-circle-right"></i><span class="ttm-list-li-content">Menjaga Metabolisme Tubuh</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <!-- col-img-img-four -->
                            <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-four z-index-2 mr_100 margin_left30">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content"></div>
                            </div><!-- col-img-bg-img-four end-->
                            <img class="img-fluid ttm-equal-height-image w-100" src="{{ url('landing_page') }}/images/bg-image/services-2.jpg" alt="bg-image">
                        </div>
                        <div class="col-lg-1 col-md-12">
                            <!-- col-img-img-five -->
                            <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-five ttm-right-span mt_60 ml_70">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content"></div>
                            </div><!-- col-img-bg-img-five end-->
                        </div>
                    </div><!-- row end -->
                </div>
            </div>
        </div>
    </section>
    <!--padding_zero-section end-->

    <!--padding_bottom_zero-section -->
    <section class="ttm-row padding_bottom_zero-section bg-img5 margin_bottom100 res-991-margin_bottom0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ml-auto">
                    <!-- col-img-bg-img-two -->
                    <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-two ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-skincolor p-30 mb_100 res-991-margin_bottom70 border-rad_6">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                            <div class="ttm-col-wrapper-bg-layer-inner"></div>
                        </div>
                        <div class="layer-content">
                            <div class="slick_slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":false, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 1}},{"breakpoint":840,"settings":{"slidesToShow": 1}}]}'>
                                <!-- testimonials -->
                                <div class="testimonials ttm-testimonial-box-view-style1">
                                    <div class="testimonial-content">
                                        <blockquote class="testimonial-text">Gerai air minum isi ulang dengan sistem demineralisasi yang menjangkau masyarakat dengan mudah mendapatkan air minum murni yang terbebas dari kontaminasi secara kimia, fisika, dan mikrobiologis.</blockquote>
                                        <div class="testimonial-bottom">
                                            <div class="testimonial-avatar">
                                                <div class="testimonial-img">
                                                    <img id="logo-img" height="70" width="100" class="img-fluid auto_size" src="{{url('landing_page')}}/images/team-member/ceo_amarta.png" alt="logo-img">
                                                </div>
                                            </div>
                                            <div class="testimonial-caption">
                                                <h3>Erfan Ramadhan, S.T.</h3>
                                                <label>Co - Founder</label>
                                                <div class="star-ratings">
                                                    <ul class="rating">
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                        <li class="active"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- testimonials end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--padding_bottom_zero-section end -->

</div><!--site-main end-->

@endsection