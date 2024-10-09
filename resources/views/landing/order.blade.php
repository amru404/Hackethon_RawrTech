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
    </div>
    <!-- header section end -->
    <!-- furnitures section start -->
    <div class="furnitures_section layout_padding">
        <div class="container">
            <h1 class="our_text">Data Order</h1>
            <p class="ipsum_text">There are many variations of passages of Lorem Ipsum </p>
            <div class="furnitures_section2 layout_padding">
                <div class="card">
                    <div class="card-body">
                        @foreach ($order as $o)
                        <div class="card p-4 mt-3">
                            <h3>Nama Ticket :{{$o->ticket->product->nama}}</h3>
                            <p>Kode Order : {{$o->kode_order}}</p>
                            <p>Atas Nama : {{$o->user->name}}</p>
                            <p>Tanggal Ticket : {{$o->tanggal_ticket}}</p>
                            <p>Kuantitas : {{$o->qty}}</p>
                            <p>Rp {{ number_format($o->ticket->product->harga, 0, ',', '.') }}</p>
                            <p>Rp {{ number_format($o->total_harga, 0, ',', '.') }}</p>
                        </div>                           
                        @endforeach
                        <form action="{{ route('user.transaksi.store')}}" class="mt-3"method="POST">
                        @csrf

                        <input type="hidden" name="kode_transaksi" value="0">
                        <input type="hidden" name="total_harga" value="0" >
                        <input type="hidden" name="status_pembayaran" value="sudah_bayar" >
                        <input type="hidden" name="metode_pembayaran" value="-" >


                        <div class="form-group">
                            <label for="order_id">Nama Order </label>
                            <select class="form-control" id="order_id" name="order_id">
                                @foreach ($order as $o)
                                <option value="{{$o->id}}">{{$o->kode_order}} | {{$o->user->name}} | {{$o->ticket->product->nama}} | qty : {{$o->qty}} | {{$o->total_harga}}</option>
                                @endforeach

                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mt-4">Bayar</button>
                    </form>

                           
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- furnitures section end -->
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
