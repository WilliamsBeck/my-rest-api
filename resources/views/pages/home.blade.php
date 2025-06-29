@extends('layouts.app-public')
@section('title', 'Home')
@section('content')
    <div class="site-wrapper-reveal">
        <div class="hero-box-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Hero Slider Area Start -->
                        <div class="hero-area" id="product-preview">
                        </div>
                        <!-- Hero Slider Area End -->
                    </div>
                </div>
            </div>
        </div>

        <div class="about-us-area section-space--ptb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-us-content_6 text-center">
                            <h2>Wilbake's Bakery</h2>
                            <p>
                                <h7>
                                    At Wilbake Bakery, we believe that great bread brings people together. Our passion lies in crafting delicious, artisanal baked goods made from the finest ingredients and traditional recipes—with a modern twist. From warm, crusty loaves and soft pastries to custom cakes and seasonal treats, every item is baked fresh daily with love and care.Step into our cozy shop or browse our online selection to discover your next favorite indulgence. Whether you’re looking for a sweet gift, a special celebration cake, or your daily bread, Wilbake is here to serve joy—one bite at a time.&#10084;
                                </h7>
                            </p>
                            <p class="mt-5">✨ Baked with love. Shared with joy,
                                <span class="text-color-primary"> Welcome to Wilbake !</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Banner Video Area Start -->
    <div class="banner-video-area overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-video-box">
                        <img src="https://img.youtube.com/vi/uYAlFoMHfcc/maxresdefault.jpg" alt="">
                        <div class="video-icon">
                            
                            <a href="https://youtu.be/uYAlFoMHfcc?si=6nh6YlOW8nYEcLE5" class="popup-youtube" >
                                <i class="linear-ic-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Video Area End -->

    <!-- Our Brand Area Start -->
    <div class="our-brand-area section-space--pb_90">
        <div class="container">
            <div class="brand-slider-active">
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/images/brand/partnerb1.jpg" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/images/brand/partnerb2.jpg" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/images/brand/partnerb3.jpg" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/images/brand/partnerb4.jpg" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/images/brand/partnerb5.jpg" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/images/brand/partnerb6.jpg" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/images/brand/partnerb7.jpg" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/images/brand/partnerb8.jpg" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Brand Area End -->

    <!-- Our Member Area Start -->
    <div class="our-member-area section-space--pb_120">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="member-box">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-4">
                                <div class="section-title small-mb_40 tablet-mb_40">
                                    <h4 class="section-title">Join Our Community !</h4>
                                    <p>Become one of the member and get discount 50% off</p>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-8">
                                <div class="member-wrap">
                                    <form action="#" class="member-two">
                                        <input class="input-box" type="text" placeholder="Your Whatsapp">
                                        <button class="submit-btn"><i class="icon-arrow-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <!-- Our Member Area End -->

</div>
@endsection
@section('addition_css')
@endsection
@section('addition_script')
    <script src="{{ asset('pages/js/home.js') }}"></script>
@endsection





