@extends('amarta_pure.layouts.app')
@section('content')

<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">about us</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index.html">Home</a>
                        </span>
                        <span>about us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->


<!--site-main start-->
<div class="site-main">

    <section class="ttm-row padding_bottom_zero-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-7">
                    <div class="padding_right80 res-991-padding_right0 res-991-margin_bottom50">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h3>ABOUT US</h3>
                                <h2 class="title">Amarta Pure Water</h2>
                            </div>
                            <div class="title-desc">
                                <p>Amarta pure water adalah air minum dengan TDS kurang dari 10 ppm dan pH yang netral untuk kebutuhan tubuh yang di ambil dari sumber mata air dan diolah dengan tekhnologi nano filterisasi.</p>
                                <p>Air murni adalah air yang telah mengalami proses filtrasi untuk memurnikan air tersebut serta menghilangkan berbagai kontaminan seperti padatan fisik, kandungan kimia yang berbahaya, dan mikrobiologis seperti virus dan bakteri.</p>
                                <p>Efek yang ditimbulkan setelah meminum Air Murni akan menghasilkan rasa yang berbeda-beda tergantung pada kondisi kesehatan tubuh yang mengkonsumsinya. Namun setelah rutin mengkonsumsi air murni secara berkala akan mendapatkan manfaat yang baik bagi tubuh salah satunya meringankan kerja ginjal karena air murni dapat menyerap kotoran-kotoran yang tertimbun di dalam ginjal dan akan dikeluarkan melalui urin.</p>
                            </div>
                        </div><!-- section title end -->
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-dark  margin_top15" href="/contact-us">contact us</a>
                        <div class="ttm-horizontal_sep width-100 margin_top40 margin_bottom30"></div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-8 mx-auto">
                    <div class="ttm_single_image-wrapper">
                        <img class="img-fluid auto_size" src="{{url('landing_page')}}/images/bg-image/services-1_new.jpg" alt="single-03" height="789" width="500">
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>


    <!-- about-section -->
    <section class="ttm-row about-section ttm-bgimage-yes bg-img6 ttm-bg ttm-bgcolor-darkgrey z-index_1 mt_100 clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title -->
                    <div class="section-title title-style-center_text padding_top100">
                        <div class="title-header">
                            <h3>WHAT WE DO!</h3>
                            <h2 class="title">Because nothing is purer than water</h2>
                        </div>
                        <div class="title-desc">
                            <p>Berikut arti rasa yang ditimbulkan bagi mereka yang baru meminum Air Minum Sehat TDS kurang dari 10 ppm</p>
                        </div>
                    </div><!-- section-title end -->
                </div>
            </div>
            <div class="row row-equal-height mb_15">
                <div class="col-xl col-md-4 col-sm-6">
                    <!--featured-icon-box-->
                    <div class="featured-icon-box icon-align-top-content style8">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="fa fa-snowflake"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Rasa netral, sensasi segar/sejuk</h3>
                            </div>
                            <p>Kondisi badan sehat</p>
                        </div>
                    </div><!-- featured-icon-box end-->
                </div>
                <div class="col-xl col-md-4 col-sm-6">
                    <!--featured-icon-box-->
                    <div class="featured-icon-box icon-align-top-content style8">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="fa fa-face-grin-beam-sweat"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Rasa agak manis</h3>
                            </div>
                            <p>Gula darah meninggi, gejala diabetes</p>
                        </div>
                    </div><!-- featured-icon-box end-->
                </div>
                <div class="col-xl col-md-4 col-sm-6">
                    <!--featured-icon-box-->
                    <div class="featured-icon-box icon-align-top-content style8">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="fa fa-face-tired"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Rasa agak pahit</h3>
                            </div>
                            <p>Kecapean, rematik, gelaja asam urat.</p>
                        </div>
                    </div><!-- featured-icon-box end-->
                </div>
                <div class="col-xl col-md-6 col-sm-6">
                    <!--featured-icon-box-->
                    <div class="featured-icon-box icon-align-top-content style8">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="fa fa-face-grin-tongue-squint"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Rasa agak gurih</h3>
                            </div>
                            <p>Gejala keropos tulang</p>
                        </div>
                    </div><!-- featured-icon-box end-->
                </div>
                <div class="col-lg col-md-6 col-sm-6">
                    <!--featured-icon-box-->
                    <div class="featured-icon-box icon-align-top-content style8">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="fa fa-face-meh"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Rasa agak anta/seperti air yang belum dimasak</h3>
                            </div>
                            <p>Masuk angin, sering keluar malam, gejala sakit pinggang</p>
                        </div>
                    </div><!-- featured-icon-box end-->
                </div>
            </div>
            <!-- row end -->
        </div>
    </section>
    <!-- about-section end -->


    <!--work-section-->
    <section class="ttm-row work-section ttm-bgcolor-grey clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title style2">
                        <div class="title-header">
                            <h3>WHY CHOOSE US ?</h3>
                            <h2 class="title">Amarta Pure Water</h2>
                        </div>
                        <div class="title-desc">
                            <p>Amarta pure water adalah air minum dengan TDS kurang dari 10 ppm dan pH yang netral untuk kebutuhan tubuh yang di ambil dari sumber mata air dan diolah dengan tekhnologi nano filterisasi.</p>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion padding_top15 res-991-padding_top0">
                        <!-- toggle -->
                        <div class="toggle ttm-toggle_style_classic ttm-toggle-title-bgcolor-white">
                            <div class="toggle-title box-shadow"><a href="#" class="active">Membantu Proses Terapi Kesehatan</a></div>
                            <div class="toggle-content show">
                                <p>Mengkonsumsi air demineral memiliki manfaat ganda karena tidak menambah kadar mineral anorganik yang sudah lama tertimbun dalam jaringan tubuh, dan membantu membersihkan mineral anorganik yang terdapat di dalam tubuh.</p>
                            </div>
                        </div><!-- toggle end -->
                        <!-- toggle -->
                        <div class="toggle ttm-toggle_style_classic ttm-toggle-title-bgcolor-white">
                            <div class="toggle-title box-shadow"><a href="#">Meringankan Kerja Ginjal</a></div>
                            <div class="toggle-content">
                                <p>Fungsi ginjal tidak hanya menyaring racun yang masuk ke dalam tubuh, melainkan sebagai produksi hormon, urin, dan mengendalikan cairan dalam tubuh.</p>
                            </div>
                        </div><!-- toggle end -->
                        <!-- toggle -->
                        <div class="toggle ttm-toggle_style_classic ttm-toggle-title-bgcolor-white">
                            <div class="toggle-title box-shadow"><a href="#">Membuang Racun (Detoksifikasi)</a></div>
                            <div class="toggle-content">
                                <p>Amarta Pure Water bertindak sebagai pelarut dalam tubuh yang melarutkan residu mineral anorganik yang tidak dapat diserap tubuh dan membuang senyawa kimia berbahaya yang telah memasuki tubuh. Amarta Pure Water tidak hanya bebas dari polutan, tapi juga membantu menghilangkan polutan tersebut dari sel-sel dalam tubuh.</p>
                            </div>
                        </div><!-- toggle end -->
                        <!-- toggle -->
                        <div class="toggle ttm-toggle_style_classic ttm-toggle-title-bgcolor-white">
                            <div class="toggle-title box-shadow"><a href="#">Menjaga Metabolisme Tubuh</a></div>
                            <div class="toggle-content">
                                <p>“Saya tahu bahwa air murni itu benar-benar tidak terkontaminasi. Saya berfikir jika saya meminumnya dalam jumlah yang banyak, maka saya dapat menyingkirkan tumpukan garam yang menyelimuti saraf-saraf sciatic terutama di daerah panggul. Saya mencoba meminumnya dan prediksi saya terbukti dengan sangat menakjubkan. Saya terus-menerus meminum air murni tersebut dan saya merasakan kesehatan menyeluruh yang hampir benar-benar sempurna.” - Dr. Alexander Graham Bell</p>
                            </div>
                        </div><!-- toggle end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--work-section end-->

</div><!--site-main end-->

@endsection