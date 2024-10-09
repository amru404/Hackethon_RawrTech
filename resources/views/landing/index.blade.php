<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Vintage Fur</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset_landing/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset_landing/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('asset_landing/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('asset_landing/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('asset_landing/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{asset('asset_landing/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{asset('asset_landing/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <div class="container">
            @include('landing.navbar')
        </div>
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div id="costum_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h1 class="furniture_text text-white">Desa Wisata Leuwimalang</h1>
                            <p class="there_text text-white">sebuah desa wisata di kecamatan Cisarua, Bogor, Jawa Barat,
                                Indonesia</p>
                            <div class="contact_bt_main">
                                <div class="contact_bt"><a
                                        href="https://wa.me/+6281210363323?text=halo%20kak%20saya%20tertarik%20dengan%20desa%20wisata%20leuwimalang">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- services section start -->
    <div class="services_section layout_padding">
        <div class="container">
            <h1 class="services_taital">our services</h1>
            <p class="many_taital">There are many variations of passages of Lorem Ipsum </p>
            <div class="services_section2 layout_padding">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="icon_1"><img src="{{ asset('asset_landing/images/icon-1.png') }}"></div>
                        <h2 class="furnitures_text">Welcome Drink</h2>
                        <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the
                        </p>
                        <div class="read_bt_main">
                            <div class="read_bt"><a href="#">Read More</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="icon_1"><img src="{{ asset('asset_landing/images/icon-2.png') }}"></div>
                        <h2 class="furnitures_text">Free Tour Leader</h2>
                        <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the
                        </p>
                        <div class="read_bt_main">
                            <div class="read_bt"><a href="#">Read More</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="icon_1"><img src="{{ asset('asset_landing/images/icon-3.png') }}"></div>
                        <h2 class="furnitures_text">Free Marchandise</h2>
                        <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the
                        </p>
                        <div class="read_bt_main">
                            <div class="read_bt"><a href="#">Read More</a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="icon_1"><img src="{{ asset('asset_landing/images/icon-4.png') }}"></div>
                        <h2 class="furnitures_text">Free Lunch</h2>
                        <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the
                        </p>
                        <div class="read_bt_main">
                            <div class="read_bt"><a href="#">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services section end -->
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="about_text">About Us</h1>
                    <p class="lorem_text">
                        Desa Leuwimalang terletak di Kecamatan Cisarua, Kabupaten Bogor, Jawa
                        Barat. Nama desa lewimalang berasal dari kali ciliwung yg melintang dan memotong jalan antara
                        dua desa yg jadi perbatasan desa lewimalang dan cilember Lewi artinya kaliMalang menghalangi

                    </p>
                    <div class="read_bt1"><a href="#">Read More</a></div>
                </div>
                <div class="col-md-6">
                    <div class="image_1">
                        <div class="card bg-dark" style="border-radius:20px">
                            <img src="{{asset('asset_landing/images/galery1.jpeg')}}"
                                style="border-radius:20px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- furnitures section start -->
    <div class="furnitures_section layout_padding">
        <div class="container">
            <h1 class="our_text">Product</h1>
            <p class="ipsum_text">Desa Leuwimalang juga mempunya product loh selain ticket wisata</p>
            <div class="furnitures_section2 layout_padding">
                <div class="row">
                    <div class="col-md-6">
                        <div class="container_main">
                            <img src="{{ asset('asset_landing/images/img-2.png') }}" alt="Avatar" class="image">
                            <div class="overlay">
                                <a href="#" class="icon" title="User Profile">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <h3 class="temper_text">E-Craf</h3>
                        <p class="dololr_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi </p>
                    </div>
                    <div class="col-md-6">
                        <div class="container_main">
                            <img src="{{ asset('asset_landing/images/img-3.png') }}" alt="Avatar" class="image">
                            <div class="overlay">
                                <a href="#" class="icon" title="User Profile">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <h3 class="temper_text">UMKM</h3>
                        <p class="dololr_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- furnitures section end -->
    <!-- who section start -->
    <div class="who_section layout_padding">
        <div class="container">
            <h1 class="who_taital">Ticket Wisata</h1>
            <h4 class="designer_text">DESIGNERS & INNOVATORS</h4>

            <div class="row">
            @foreach ($product as $p)
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card" style="width: 100%; margin-bottom:20px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius:10px;">
                        @if($p->images->count() > 0)
                            <img src="/images/{{ $p->images->first()->image }}" alt="Product Image" style="width: 100%; border-top-left-radius: 10px; border-top-right-radius: 10px; max-height:350px; min-height:250px">
                        @endif
                        <div class="card-body">
                            <h3 class="fw-bold">{{ $p->nama }}</h3>
                            <h5 class="fw-bold">{{ $p->harga }}</h5>
                            <p class="card-text">{{ $p->deskripsi }}</p>
                            <a href="{{route('user.ticket')}}" class="btn btn-primary">Beli Ticket</a>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>

        </div>
        <div class="get_bt_main">
            <div class="get_bt"><a href="#">Get A Quote</a></div>
        </div>
    </div>
    <!-- who section end -->
    <!-- projects section start -->
    <div class="projects_section layout_padding">
        <div class="container">
            <h1 class="our_text">Galerry</h1>
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="projects_section2">
                            <div class="container_main2">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="{{ asset('asset_landing/images/galery1.jpeg') }}" alt="Avatar"
                                                class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="{{ asset('asset_landing/images/galery2.jpeg') }}" alt="Avatar"
                                                class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="{{ asset('asset_landing/images/galery3.jpeg') }}" alt="Avatar"
                                                class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="projects_section2">
                            <div class="container_main1">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="{{ asset('asset_landing/images/galery4.jpeg') }}" alt="Avatar"
                                                class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="{{ asset('asset_landing/images/galery5.jpeg') }}" alt="Avatar"
                                                class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="container_main1">
                                            <img src="{{ asset('asset_landing/images/galery6.jpeg') }}" alt="Avatar"
                                                class="image" style="width:100%">
                                            <h1 class="modern_text">Modern home designe</h1>
                                            <div class="middle">
                                                <div class="text">VIEW MORE</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- projects section end -->
    <!-- client section start -->
    <div class="clients_section layout_padding">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h1 class="client_text">what is says our clients</h1>
                        <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        <div class="clients_section2 layout_padding">
                            <div class="client_1">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="image_7"><img src="{{ asset('asset_landing/images/img-7.png') }}">
                                        </div>
                                        <div class="quote_icon"><img
                                                src="{{ asset('asset_landing/images/quote-icon.png') }}"></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <h1 class="loksans_text">loksans</h1>
                                        <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit
                                            in voluptate velit</p>
                                    </div>
                                </div>
                            </div>
                            <div class="client_2">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="image_7"><img src="{{ asset('asset_landing/images/img-8.png') }}">
                                        </div>
                                        <div class="quote_icon"><img
                                                src="{{ asset('asset_landing/images/quote-icon.png') }}"></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <h1 class="loksans_text">loksans</h1>
                                        <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit
                                            in voluptate velit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <h1 class="client_text">what is says our clients</h1>
                        <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        <div class="clients_section2 layout_padding">
                            <div class="client_1">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="image_7"><img src="{{ asset('asset_landing/images/img-7.png') }}">
                                        </div>
                                        <div class="quote_icon"><img
                                                src="{{ asset('asset_landing/images/quote-icon.png') }}"></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <h1 class="loksans_text">loksans</h1>
                                        <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit
                                            in voluptate velit</p>
                                    </div>
                                </div>
                            </div>
                            <div class="client_2">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="image_7"><img src="{{ asset('asset_landing/images/img-8.png') }}">
                                        </div>
                                        <div class="quote_icon"><img
                                                src="{{ asset('asset_landing/images/quote-icon.png') }}"></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <h1 class="loksans_text">loksans</h1>
                                        <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit
                                            in voluptate velit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <h1 class="client_text">what is says our clients</h1>
                        <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        <div class="clients_section2 layout_padding">
                            <div class="client_1">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="image_7"><img src="{{ asset('asset_landing/images/img-7.png') }}">
                                        </div>
                                        <div class="quote_icon"><img
                                                src="{{ asset('asset_landing/images/quote-icon.png') }}"></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <h1 class="loksans_text">loksans</h1>
                                        <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit
                                            in voluptate velit</p>
                                    </div>
                                </div>
                            </div>
                            <div class="client_2">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="image_7"><img src="{{ asset('asset_landing/images/img-8.png') }}">
                                        </div>
                                        <div class="quote_icon"><img
                                                src="{{ asset('asset_landing/images/quote-icon.png') }}"></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <h1 class="loksans_text">loksans</h1>
                                        <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit
                                            in voluptate velit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <h1 class="client_text">what is says our clients</h1>
                        <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        <div class="clients_section2 layout_padding">
                            <div class="client_1">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="image_7"><img src="{{ asset('asset_landing/images/img-7.png') }}">
                                        </div>
                                        <div class="quote_icon"><img
                                                src="{{ asset('asset_landing/images/quote-icon.png') }}"></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <h1 class="loksans_text">loksans</h1>
                                        <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit
                                            in voluptate velit</p>
                                    </div>
                                </div>
                            </div>
                            <div class="client_2">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="image_7"><img src="{{ asset('asset_landing/images/img-8.png') }}">
                                        </div>
                                        <div class="quote_icon"><img
                                                src="{{ asset('asset_landing/images/quote-icon.png') }}"></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <h1 class="loksans_text">loksans</h1>
                                        <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit
                                            in voluptate velit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="contact_text">CONTACT US</h1>
                    <div class="mail_sectin">
                        <input type="text" class="email-bt" placeholder="Name" name="Name">
                        <input type="text" class="email-bt" placeholder="Email" name="Name">
                        <input type="text" class="email-bt" placeholder="Phone Number" name="Name">
                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment"
                            name="Massage"></textarea>
                        <div class="send_bt"><a href="#">SEND</a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_main">
                        <div class="map-responsive">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50704.2567529708!2d106.87284906232607!3d-6.66666019860824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69b7d2cc8f1c8b%3A0xb67e1047e0ad0363!2sLeuwimalang%2C%20Kec.%20Cisarua%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1728474110692!5m2!1sid!2sid"
                                width="600" height="500" frameborder="0" style="border:0; width: 100%;"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <h1 class="customer_text">INFORMATION</h1>
                    <p class="footer_lorem_text">There are many variat
                        ions of passages of L
                        orem Ipsum available
                        , but the majority h
                        ave suffered altera
                        tion in some form, by
                    </p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h1 class="customer_text">LET US HELP YOU</h1>
                    <p class="footer_lorem_text">There are many variat
                        ions of passages of L
                        orem Ipsum available
                        , but the majority h
                        ave suffered altera
                        tion in some form, by
                    </p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h1 class="customer_text">UseFul Links</h1>
                    <p class="footer_lorem_text1">About Us<br>
                        Careers<br>
                        Sell on shopee<br>
                        Press & News<br>
                        Competitions<br>
                        Terms & Conditions
                    </p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h1 class="customer_text">OUR Design</h1>
                    <p class="footer_lorem_text">There are many variat
                        ions of passages of L
                        orem Ipsum available
                        , but the majority h
                        ave suffered altera
                        tion in some form, by
                    </p>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter your email" aria-label="Enter your email"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><a href="#">Subscribe</a></span>
                </div>
            </div>
        </div>
    </div>
    <!--  footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://html.design">Free html
                    Templates</a> Distribution By <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
        <!-- copyright section end -->
        <!-- Javascript files-->
        <script src="{{asset('asset_landing/js/jquery.min.js') }}"></script>
        <script src="{{asset('asset_landing/js/popper.min.js') }}"></script>
        <script src="{{asset('asset_landing/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{asset('asset_landing/js/jquery-3.0.0.min.js') }}"></script>
        <script src="{{asset('asset_landing/js/plugin.js') }}"></script>
        <!-- sidebar -->
        <script src="{{asset('asset_landing/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{asset('asset_landing/js/custom.js') }}"></script>
        <!-- javascript -->
        <script src="{{asset('asset_landing/js/owl.carousel.js') }}"></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js') }}"></script>
</body>

</html>
