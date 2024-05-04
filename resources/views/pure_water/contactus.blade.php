@extends('pure_water.layouts.app')
@section('content')

<!--google_map-->
<div id="google_map" class="google_map">
    <div class="map_container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1859921357!2d107.46156758885498!3d-6.868303299999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68fb0078d1c575%3A0x83565b66277abf71!2sAmarta%20pure%20water!5e0!3m2!1sid!2sid!4v1710486426503!5m2!1sid!2sid" width="740" height="405"></iframe>
    </div>
</div>

<section class="ttm-row pt-0 res-991-pt-0 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ttm-bgcolor-skincolor ttm-textcolor-white mt_80 res-991-mt-15 res-991-pt-30 res-991-pb-30 pl-30 res-991-pl-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-before-content mb-10 mt-10 res-991-pt-0 res-991-pb-0 style3">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                        <i class="fa fa-book"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Contact</h5>
                                    </div>
                                    <div class="featured-desc">+62 811 887 7225 <br> info@amartapure.com </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-6">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-before-content mb-10 mt-10 res-991-pt-0 res-991-pb-0 style3">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                        <i class="themifyicon ti-location-pin"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-desc">Jl. Bujanggamanik Kav. No.60
                                        Ruko Pancawarna / Samping IKEA,Kota Baru Parahyangan – Kertajaya, Kec. Padalarang
                                        Kabupaten Bandung Barat, Jawa Barat 40553</div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-white z-index-2 spacing-5 box-shadow">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="pr-30 res-991-pr-0 res-991-mb-30">
                                <!-- section title -->
                                <div class="section-title clearfix">
                                    <div class="title-header">
                                        <h5>MESSAGE US</h5>
                                        <h2 class="title">Ada Pertanyaan Hubungi Kami?</h2>
                                    </div>
                                    <div class="heading-seperator"><span></span></div>
                                </div><!-- section title end -->
                                <p class="pt-5">Kami sangat bangga dengan segala hal yang kami lakukan, kendali penuh atas produk memungkinkan kami memastikan pelanggan menerima layanan terbaik.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form id="contact_form" class="contact_form wrap-form clearfix" method="post" novalidate="novalidate" action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            <span class="text-input"><input name="name" type="text" value="" placeholder="Your Name" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                            <span class="text-input"><input name="address" type="text" value="" placeholder="Your Email" required="required"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone Number" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label>
                                            <span class="text-input"><input name="phone" type="text" value="" placeholder="Subject" required="required"></span>
                                        </label>
                                    </div>
                                </div>
                                <label>
                                    <span class="text-input"><textarea name="message" rows="3" placeholder="Message" required="required"></textarea></span>
                                </label>
                                <button class="submit ttm-btn ttm-btn-size-lg ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark" type="submit">SEND A MESSAGE!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
@endsection