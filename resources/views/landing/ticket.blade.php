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
            <h1 class="our_text">Order Ticket</h1>
            <div class="furnitures_section2 layout_padding">
                <div class="card">
                    <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="tanggal_ticket">Tanggal Ticket</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="tanggal_ticket" name="tanggal_ticket"
                                        required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="ticket_id">Nama Ticket</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="ticket_id" name="ticket_id" required>
                                        <option value="">Select a date first</option>
                                    </select>
                                </div>
                            </div>

                            <!-- <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="user_id">Nama User</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="user_id" name="user_id">
                                        @foreach ($user as $u)
                                        <option value="{{$u->id}}">{{$u->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> -->


                            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="qty">Quantitas</label>
                                <div class="col-sm-10">
                                    <input type="number" name="qty" class="form-control" id="qty"
                                        aria-describedby="emailHelp">
                                    @if ($errors->has('qty'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('qty') }}
                                    </div>
                                    @endif
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="qty">Metode Pembayaran</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="metode_pembayaran" name="metode_pembayaran">
                                        <option selected value='-'>.. Select ..</option>
                                        <option value='cash'>Cash</option>
                                        <option value='transfer'>Transfer Bank</option>
                                        <option value='qris'>Qris</option>

                                    </select>
                                </div>
                            </div>



                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
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

        <script>
            document.getElementById('tanggal_ticket').addEventListener('change', function () {
                let date = this.value;


                fetch(`/api/tickets?date=${date}`)
                    .then(response => response.json()) // Ubah respon menjadi JSON
                    .then(data => {
                        let ticketSelect = document.getElementById('ticket_id');
                        ticketSelect.innerHTML = '';

                        if (data.length > 0) {
                            // Loop melalui tiket yang didapatkan dari API
                            data.forEach(ticket => {
                                let option = document.createElement('option');
                                option.value = ticket.id; // Set value dengan id tiket
                                option.text =
                                    `${ticket.product.nama} | Stock: ${ticket.stock}`; // Tampilkan nama produk dan stok
                                ticketSelect.appendChild(option); // Tambahkan opsi ke dropdown
                            });
                        } else {
                            // Jika tidak ada tiket untuk tanggal yang dipilih
                            let option = document.createElement('option');
                            option.text =
                                'Ticket tidak tersedia untuk tanggal tersebut'; // Pesan jika tiket tidak tersedia
                            ticketSelect.appendChild(option);
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching tickets:', error);
                        let ticketSelect = document.getElementById('ticket_id');
                        let option = document.createElement('option');
                        option.text = 'Error loading tickets'; // Pesan error jika terjadi kesalahan
                        ticketSelect.appendChild(option);
                    });
            });

        </script>

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
