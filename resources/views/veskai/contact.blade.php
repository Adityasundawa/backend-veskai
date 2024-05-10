@extends('veskai.template.main')
@section('content')

<script src="{{ asset('js/script.js') }}"></script>

 <!-- ========Hero Section Starts Here======== -->
 <section class="hero-section bg_img" id="slideshow" data-background="https://cdn.discordapp.com/attachments/1029591487995985941/1143463648585588886/1175865.jpg">
    <div class="container">
        <div class="hero-content">
            <h1 class="title">Contact Us</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    contact
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ========Hero Section Ends Here======== -->

 <!-- ========Contact Section Starts Here======== -->
    <section class="contact-section padding-bottom padding-top">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="contact-content-area pl-xl-4">
                        <div class="section-header left-style">
                            <h2 class="title">get in touch</h2>
                            <p>kirim email kepada kami jika ada keperluan, kritik, saran, dan atau keluh kesah mengenai <b>Veskai Production</b>.</p>
                        </div>
                        <form class="contact-form" id="contact_form_submit" action="{{route('submit.contact')}}" method="POST">
                            @csrf
                            <div class="comment-form-group w-100">
                                <input type="text" placeholder="Name" id="name" name="name">
                            </div>
                            <div class="comment-form-group w-100">
                                <input type="text" placeholder="Email" id="email" name="email">
                            </div>
                            <div class="comment-form-group w-100">
                                <textarea name="message" placeholder="Message" id="message"></textarea>
                            </div>
                            <div class="comment-form-group w-100 mb-0">
                                <button type="submit" class="custom-button">Send Now</button>
                            </div>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========Contact Section Ends Here======== -->

@endsection
