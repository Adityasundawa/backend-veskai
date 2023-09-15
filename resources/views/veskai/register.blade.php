@extends('veskai.template.main')
@section('content')


<!-- =======Account Section Starts Here======== -->
    <section class="account-section padding-bottom padding-top bg-overlay" style="background-image: url('https://i.pinimg.com/originals/d0/e0/e2/d0e0e259bf0aba4da742bedff1d4b8a5.gif');">
        <div class="container">
            <div class="account-wrapper">
                <div class="account-area">
                    <h2 class="title">Register Veskai</h2>

                    <form class="account-form">
                        <div class="account-form-group">
                            <input type="text" placeholder="Username" name="name" required>
                        </div>
                        <div class="account-form-group">
                            <input type="text" placeholder="Email" name="email" required>
                        </div>
                        <div class="account-form-group">
                            <input type="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="account-form-group">
                            <input type="password" placeholder="Confirm Password" name="password" required>
                        </div>
                        <div class="account-check-group">
                            <input type="checkbox" name="terms" id="agree" required>
                            <label for="agree">I agree to the <a href="{{url("/terms")}}">Terms & Service</a></label>
                        </div>
                        <div class="account-form-group">
                            <button class="custom-button" type="submit">create account</button>
                        </div>
                        <div class="account-check-group mb-0">
                            Already have an account?<a href="{{url("/login")}}">Log in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- =======Account Section Ends Here======== -->


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function () {
            var galleryThumbs = new Swiper('.slider-thumbs', {
                slidesPerView: 3,
                loop: false,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                spaceBetween: 15,
            });
            var galleryTop = new Swiper('.review-slider', {
                slidesPerView: 1,
                loop: false,
                thumbs: {
                    swiper: galleryThumbs,
                },
            });
            galleryTop.controller.control = galleryThumbs;
            galleryThumbs.controller.control = galleryTop;
        })
    </script>


@endsection
