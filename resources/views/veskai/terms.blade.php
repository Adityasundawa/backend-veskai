@extends('veskai.template.main')
@section('content')
<section class="hero-section bg_img" data-background="./assets/images/banner/hero-bg.png">
        <div class="container">
            <div class="hero-content">
                <h1 class="title">Terms & Services</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        Terms & Services
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ========Hero Section Ends Here======== -->


    <!-- ========Privacy Section Starts Here======== -->
    <div class="privacy-section padding-bottom padding-top">
        <div class="container">
            <div class="row mb--50">
                <div class="col-lg-4 mb-50">
                    <aside>
                        <div class="widget widget-category">
                            <ul class="category-list">
                                <li class="category-item open">
                                    <a href="#" class="category-title">
                                        <span>preferences</span><span class="amount">4</span>
                                    </a>
                                    <ul class="category-content" style="display: block;">
                                        <li>
                                            <a href="#termsfeesandrenewal">Fees &amp; Renewals</a>
                                        </li>
                                        <li>
                                            <a href="#termsaccount">Account</a>
                                        </li>
                                        <li>
                                            <a href="#termspersonaldatainformation">Personal Data Information</a>
                                        </li>
                                        <li>
                                            <a href="#termsreferralfeeandrefund">Referral Fee &amp; Refund</a>
                                        </li>
                                        <li>
                                            <a href="#termssupportordevelop">Support or Develop</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- <li class="category-item active">
                                    <a href="#" class="category-title">
                                        <span>Disclaimer</span><span class="amount">52</span>
                                    </a>
                                    <ul class="category-content" style="display: none;">
                                        <li>
                                            <a href="#">Fees &amp; Renewals</a>
                                        </li>
                                        <li>
                                            <a href="#">Support or Develop</a>
                                        </li>
                                        <li>
                                            <a href="#">Availability</a>
                                        </li>
                                        <li>
                                            <a href="#">Referral Fee</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-title">
                                        <span>Representation</span><span class="amount">13</span>
                                    </a>
                                    <ul class="category-content" style="display: none;">
                                        <li>
                                            <a href="#">Fees &amp; Renewals</a>
                                        </li>
                                        <li>
                                            <a href="#">Support or Develop</a>
                                        </li>
                                        <li>
                                            <a href="#">Availability</a>
                                        </li>
                                        <li>
                                            <a href="#">Referral Fee</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-title">
                                        <span>Referral Fee</span><span class="amount">46</span>
                                    </a>
                                    <ul class="category-content" style="display: none;">
                                        <li>
                                            <a href="#">Fees &amp; Renewals</a>
                                        </li>
                                        <li>
                                            <a href="#">Support or Develop</a>
                                        </li>
                                        <li>
                                            <a href="#">Availability</a>
                                        </li>
                                        <li>
                                            <a href="#">Referral Fee</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-title">
                                        <span>Support or Develop</span><span class="amount">99</span>
                                    </a>
                                    <ul class="category-content" style="display: none;">
                                        <li>
                                            <a href="#">Fees &amp; Renewals</a>
                                        </li>
                                        <li>
                                            <a href="#">Support or Develop</a>
                                        </li>
                                        <li>
                                            <a href="#">Availability</a>
                                        </li>
                                        <li>
                                            <a href="#">Referral Fee</a>
                                        </li>
                                    </ul>
                                </li> -->
                            </ul>
                        </div>
                        <div class="widget widget-banner">
                            <h5 class="title">Have any question ?</h5>
                            <span>Email Us</span>
                            <a href="Mailto:admin@veskai.com">admin@veskai.com</a>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-8 mb-50">
                    <div class="privacy-wrapper">
                        <div class="item" id="termsfeesandrenewal">
                            <h5 class="title">Fees And Renewal</h5>
                            <p>Fees yang digunakan untuk Veskai merupakan kesepakatan bersama, disetujui oleh Veskai dan user Veskai, serta tidak dapan diganggu gugat</p>
                            <p>jika melakukan Renewal pada segala jenis produk Veskai, itu merupakan kesepakatan yang telah disetujui oleh user dan pihak Veskai</p>
                        </div>
                        <div class="item" id="termsaccount">
                            <h6 class="title">Account</h6>
                            <p>Semua hal tentang akun yang terdaftar pada Veskai sudah tersetujui oleh pihak user. Pihak Veskai tidak bertanggung jawab bila terjadi sesuatu pada akun kamu karena kesalahan pengguna, mulai dari korban phising, korban scam jual beli antar player, lupa email dan sejenisnya </p>
                        </div>
                        <div class="item" id="termspersonaldatainformation">
                            <h6 class="title">Personal Data Information</h6>
                            <p>Kami pihak Veskai tidak akan membocorkan Personal data information kepihak yang tidak bertanggung jawab, kecuali jika user yang bersangkutan menyalahi Terms & Service kami </p>
                        </div>
                        <div class="item" id="termsreferralfeeandrefund">
                            <h6 class="title">Referral Fee And Refund</h6>
                            <p>Refferal Fee yang ada pada Veskai sudah merupakan persetujuan kedua belah pihak Veskai maupun user, dan tidak dapat diubah</p>
                            <p>Untuk Refund tidak dapat diberlakukan dengan alasan apapun dikarenakan ini termasuk kesalahan user, jikalau merupakan kesalahan pihak Veskai maka akan diberlakukan Item Replacement </p>
                        </div>
                        <div class="item" id="termssupportordevelop">
                            <h6 class="title">Support Or Develop</h6>
                            <p>Support team dapat dilakukan mengirim ke-Email resmi kami yaitu admin@veskai.com, selain dari ini bukan tanggung jawab kami, user juga dilarang mengirim email secara spam, atau akan kami lakukan blok email secara permanent</p>
                            <p>Segala jenis Development environment, code base, version control, debugging, deployment, framework, API, Database, dan lain sebagainya merupakan tanggung jawab kami, dan hal - hal mengenai kami yang berada diluar dari Veskai Production bukan tanggung jawab kami</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========Privacy Section Ends Here======== -->

@endsection