@extends('veskai.template.main')
@section('content')


    <!-- ========Hero Section Starts Here======== -->
    <section class="hero-section bg_img" id="slideshow" data-background="https://cdn.discordapp.com/attachments/1029591487995985941/1143463648585588886/1175865.jpg">
        <div class="container">
            <div class="hero-content">
                <h1 class="title">FAQ</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{url("/home")}}">Home</a>
                    </li>
                    <li>
                        faqs
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ========Hero Section Ends Here======== -->


    <!-- ========Faq Section Starts Here======== -->
    <!--<section class="faq-section padding-top">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Style 01</h2>
             </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-md-6">
                    <div class="faq-item-2">
                        <div class="faq-content">
                            <h6 class="title">pellentesque ipsum urna</h6>
                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida, et sit, blandit
                                pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in, sit euismod porta ante
                                nulla, tellus nulla metus at. Bibendum</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-item-2">
                        <div class="faq-content">
                            <h6 class="title"> pellentesque sociis turpis ?</h6>
                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida, et sit, blandit
                                pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in, sit euismod porta ante
                                nulla, tellus nulla metus at. Bibendum</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-item-2">
                        <div class="faq-content">
                            <h6 class="title">HOW TO DOWNLOAD THE GAME?</h6>
                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida, et sit, blandit
                                pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in, sit euismod porta ante
                                nulla, tellus nulla metus at. Bibendum</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-item-2">
                        <div class="faq-content">
                            <h6 class="title">commodo libero ultricies elit, ?</h6>
                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida, et sit, blandit
                                pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in, sit euismod porta ante
                                nulla, tellus nulla metus at. Bibendum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- ========Faq Section Ends Here======== -->


    <!-- ========Faq Section Starts Here======== -->
    <section class="faq-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header">
                <h3 class="title">Jawaban cepat untuk pertanyaan kamu!</h3>
            </div>
            <div class="theme-style">
                <ul class="nav nav-tabs faq-tab-menu justify-content-center">
                    <li>
                        <a data-toggle="tab" href="#veskai" class="active">Veskai</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#discordveskai">Discord Veskai</a>
                    </li>
                    <!--<li>
                        <a data-toggle="tab" href="#survania">Survania</a>
                    </li>-->
                </ul>
                <div class="tab-content mb--20">
                    <div class="tab-pane show active " id="veskai">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="faq-wrapper">
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title"> Apa itu Veskai</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Veskai adalah Komunitas Indonesia yang terbangun berawal dengan Discord Server dan terus berusaha memperluas jangkauannya dengan membuat berbagai hal</p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Membership Veskai</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Saat ini Veskai Production menggunakan system Membership sebagai penyokong dana utama kita, maka dari itu Membership baik di Game maupun Discord Server sangat berarti bagi kelangsungan Veskai. Support kami dengan join Membership sekarang!</p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Kenapa Veskai</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>karena Veskai mudah untuk segala jenis kalangan, kita juga mengutamakan pengembangan komunitas agar lebih dekat dengan satu sama lain</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="faq-wrapper">
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title"><del>game server veskai</del></h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Cara memainkan game server kami cukup mudah, kamu hanya perlu download game client original dari game tersebut, dan menambahkan IP/Domain dan Port kita ke bagian Multiplayer, dan langsung mainkan saja</p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">akun veskai</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>kamu diharuskan mendaftar pada Veskai jika ingin memainkan Game Server Veskai, akun Veskai dapat digunakan di semua branch Game Server Veskai, mulai dari Minecraft, SA-MP, dan lainnya </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Refund Veskai</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Refund Veskai tidak dapat dilakukan, tetapi jika seandainya terjadi sesuatu yang berasal dari kesalahan kami, maka kami akan melakukan replacement item</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane " id="discordveskai">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="faq-wrapper">
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Server Veskai</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Discord server Veskai adalah tempat utama kita untuk berdiskusi, tempat awal kita mulai berkembang, bergabunglah bersama kami</p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Membership</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Membership discord server Veskai adalah fitur Premium user yang bisa kalian dapatkan dengan membeli membership bulanan pada Trakteer atau Paypal yang tersedia pada Website kami</p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">fitur bot</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Kami memiliki banyak fitur Bot server yang bisa kamu gunakan di server discord kami, dan kami juga berusaha sebaik mungkin agar bot tertata rapi diserver kami</p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Report & Feedback</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>kamu dapat melakukan Report member pada server veskai dengan command /report yang menggunakan bot veskai bila kamu melihat user lain Break Rules</p>
                                            <p>untuk Feedback kamu dapat menggunakan command ?saran untuk memberikan saran, dan ?lapor untuk melaporkan bug yang ada pada veskai bot yang kami gunakan adalah Dyno bot</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="faq-wrapper">
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Role</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Role pada server Veskai, memiliki berbagai fungsi, kegiatan dan juga kegunaannya masing - masing. mulai dari moderation, premium user, bot, dan lain sebagainya</p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">verified</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Role Verified pada discord diberikan kepada user - user yang berjasa pada Veskai, mulai dari development veskai hingga pendanaan veskai</p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">investor</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Role Investor dapat dimiliki dengan membeli sejumlah membership yang sudah ditetapkan pada channel Membership Discord server Veskai</p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Very Important Person</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>VIP Role dapat kamu dapatkan dengan membeli membership bulanan pada server Veskai, role ini memiliki kelebihan yang dapat kamu lihat secara langsung pada server</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane " id="survania">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="faq-wrapper">
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Survania Minecraft</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Survania Minecraft Server adalah server yang kita kembangkan untuk dapat dimainkan secara online/multiplayer, dengan game mode survival atau vanilla yang ada pada server, server game ini adalah server game pertama yang dikembangkan dan di publish langsung oleh Veskai Production</p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Akun Survania</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Akun Survania terhubung dengan akun Website, kamu dapat melakukan daftar akun pada website dan memainkannya di Survania</p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Very Important Player</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>VIP adalah system in-game yang kami sediakan untuk player survania, kamu dapat membeli VIP melalui website, dengan membeli VIP kamu termasuk membantu kita dalam melakukan pengembangan server</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="faq-wrapper">
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Minecraft Client</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Kamu dapat bermain di Survania dengan segala jenis versi Minecraft, baik itu Bedrock, Java maupun PE. Pastikan kamu menggunakan versi terbaru dari Minecraft tersebut untuk bermain di server Survania</p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Commands</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Gunakan command /help pada in-game untuk melihat seluruh command yang tersedia untuk kamu di in-game</p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">forgot password</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Jika kamu lupa dengan password dari Survania, kamu bisa recovery account dengan melakukan "forgot password" pada website Veskai</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $(".nav-tabs a").click(function(){
                    $(this).tab('show');
                });
            });
        </script>
    </section>
    <!-- ========Faq Section Ends Here======== -->


    <!-- ========Faq Section Starts Here======== -->
    <!--<section class="faq-section padding-top">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Style 03</h2>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-md-6">
                    <div class="faq-item-3">
                        <h6 class="title">PELLENTESQUE IPSUM URNA</h6>
                        <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida, et sit, blandit pretium. Cras ad, morbi iaculis amecumsan nullam nulla in, sit euismod porta ante nulla, tellus nulla metus at. Bibendum phasellus tempus viverra</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-item-3">
                        <h6 class="title">HOW TO DOWNLOAD THE GAME?</h6>
                        <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida, et sit, blandit pretium. Cras ad, morbi iaculis amecumsan nullam nulla in, sit euismod porta ante nulla, tellus nulla metus at. Bibendum phasellus tempus viverra</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-item-3">
                        <h6 class="title">COMMODO LIBERO ULTRICIES ELIT, ?</h6>
                        <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida, et sit, blandit pretium. Cras ad, morbi iaculis amecumsan nullam nulla in, sit euismod porta ante nulla, tellus nulla metus at. Bibendum phasellus tempus viverra</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-item-3">
                        <h6 class="title">PELLENTESQUE IPSUM URNA</h6>
                        <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida, et sit, blandit pretium. Cras ad, morbi iaculis amecumsan nullam nulla in, sit euismod porta ante nulla, tellus nulla metus at. Bibendum phasellus tempus viverra</p>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- ========Faq Section Ends Here======== -->


    <!-- ========Faq Section Starts Here======== -->
    <!--<div class="faq-section padding-top padding-bottom pos-rel">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Style 04</h2>
            </div>
            <div class="row align-items-end">
                <div class="col-xl-7">
                    <div class="faq-style-four">
                        <div class="faq-item-4">
                            <div class="faq-number">
                                <div class="thumb"></div>
                            </div>
                            <div class="faq-content">
                                <h5 class="faq-title">Nibh vehicula ante adipiscing ?</h5>
                                <p>Mollis nam ante libero netElit massa ut egestas nisl lacus. Libero litora montes
                                    vulpuporta vel orci maioreltricies maecenas, placerat vehicula non. Ipsum
                                    suspendisse metus</p>
                            </div>
                        </div>
                        <div class="faq-item-4">
                            <div class="faq-number">
                                <div class="thumb"></div>
                            </div>
                            <div class="faq-content">
                                <h5 class="faq-title">Placerat nunc blandit felis ?</h5>
                                <p>Mollis nam ante libero netElit massa ut egestas nisl lacus. Libero litora montes
                                    vulpuporta vel orci maioreltricies maecenas, placerat vehicula non. Ipsum
                                    suspendisse metus</p>
                            </div>
                        </div>
                        <div class="faq-item-4">
                            <div class="faq-number">
                                <div class="thumb"></div>
                            </div>
                            <div class="faq-content">
                                <h5 class="faq-title">Agnissim nisl erat mauris aliqu ?</h5>
                                <p>Mollis nam ante libero netElit massa ut egestas nisl lacus. Libero litora montes
                                    vulpuporta vel orci maioreltricies maecenas, placerat vehicula non. Ipsum
                                    suspendisse metus</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 d-none d-xl-block">
                    <div class="faq-four-thumb">
                        <img src="assets/images/faqs/faq.png" alt="faqs">
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- ========Faq Section Ends Here======== -->

@endsection
