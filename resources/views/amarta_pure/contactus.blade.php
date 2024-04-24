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
                        <h2 class="title">Contact Us</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index.html">Home</a>
                        </span>
                        <span>Contact Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->


<!--site-main start-->
<div class="site-main">


    <!-- conatct-section -->
    <section class="ttm-row conatct-section ttm-bgcolor-grey clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title -->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h2 class="title">Ada Pertanyaan Hubungi Kami?</h2>
                        </div>
                        <div class="title-desc">
                            <p>Kami sangat bangga dengan segala hal yang kami lakukan, kendali penuh atas produk memungkinkan kami memastikan pelanggan menerima layanan terbaik.</p>
                        </div>
                    </div><!-- section-title end -->
                </div>
            </div>
            <!-- row end -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="ttm-bgcolor-white p-40 padding_top35 border-rad_5 margin_top15">
                        <form id="request_qoute_form" class="request_qoute_form wrap-form clearfix" method="post" novalidate="novalidate" action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="text-input"><input name="name" type="text" value="" placeholder="Your Name*" required="required"></span>
                                </div>
                                <div class="col-md-6">
                                    <span class="text-input"><input name="address" type="text" value="" placeholder="Your Email*" required="required"></span>
                                </div>
                                <div class="col-md-6">
                                    <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone Number*" required="required"></span>
                                </div>
                                <div class="col-md-6">
                                    <span class="text-input"><input name="subject" type="text" value="" placeholder="Subject*" required="required"></span>
                                </div>
                                <div class="col-lg-12">
                                    <span class="text-input"><textarea name="message" rows="5" placeholder="Message" required="required"></textarea></span>
                                </div>
                                <div class="col-lg-12">
                                    <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor w-100 margin_top5" type="submit">Send now!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ttm-bgcolor-white p-30 border-rad_5 margin_top15">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-top-content margin_top0 margin_bottom25">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                            <div class="featured-content pt-2">
                                <div class="featured-title">
                                    <h3 class="margin_bottom0 fs-20">Let’s Email or Whatsapp</h3>
                                </div>
                                <div class="featured-desc">info@jagattirtaamarta.com<br><a href="https://wa.me/08118877225">+62 811 887 7225</a></div>
                            </div>
                        </div><!-- featured-icon-box end-->
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-top-content margin_bottom25">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="flaticon-address"></i>
                                </div>
                            </div>
                            <div class="featured-content pt-2">
                                <div class="featured-title">
                                    <h3 class="margin_bottom0 fs-20">We Reached Here</h3>
                                </div>
                                <div class="featured-desc">Jl. Bujanggamanik Kav. No.60
                                    Ruko Pancawarna / Samping IKEA,Kota Baru Parahyangan – Kertajaya, Kec. Padalarang
                                    Kabupaten Bandung Barat, Jawa Barat 40553</div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- conatct-section end -->


    <!--- conatact-section -->
    <section class="ttm-row conatact-section mb_20 clearfix">
        <div class="container">
            <!-- row -->
            <div class="row ttm-boxes-spacing-30px">
                <div class="col-lg-4 ttm-box-col-wrapper">
                    <div class="ttm_contact_widget_wrapper ttm-bgcolor-skincolor border-rad_5 ttm-textcolor-white">
                        <ul>
                            <li>
                                <h6>Address</h6><span>Jl. Bujanggamanik Kav. No.60
                                    Ruko Pancawarna / Samping IKEA,Kota Baru Parahyangan – Kertajaya, Kec. Padalarang
                                    Kabupaten Bandung Barat, Jawa Barat 40553</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 ttm-box-col-wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1859921357!2d107.46156758885498!3d-6.868303299999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68fb0078d1c575%3A0x83565b66277abf71!2sAmarta%20pure%20water!5e0!3m2!1sid!2sid!4v1710486426503!5m2!1sid!2sid" width="740" height="405"></iframe>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!-- conatact-section end -->


</div><!--site-main end-->

@endsection