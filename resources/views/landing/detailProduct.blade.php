@extends('layouts.landing.app')

@section('content')
<div class="furnitures_section layout_padding">
    <div class="container">

        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @if($product->images->count() > 0)
                        @foreach($product->images as $key => $image)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{ asset('/images/' . $image->image) }}" alt="Image of {{ $product->nama }}"
                                class="card-img-top">
                        </div>
                        @endforeach
                        @else
                        <p>Tidak ada gambar tersedia untuk produk ini.</p>
                        @endif
                    </div>

                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>

            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <h1>{{$product->nama}}</h1>
                <h2><strong>{{$product->harga}}</strong></h2>

                <ul>
                    <li class="mt-2"> <span><b>Deskripsi : </b></span><br> {{$product->deskripsi}}</li>
                    <li class="mt-4"><b>Keunggulan : </b></span><br>
                        {{$product->fitur}}</li>
                </ul>
                <p>{{$product->nomer_telepon}}</p>


                @auth
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Pesan sekarang
                </button>

                @else
                <a href="{{route('login')}}" type="button" class="btn btn-primary">
                    Pesan sekarang
                </a><br>
                <small>Login Terlebih dahulu</small>
                @endauth

                

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('user.order')}}" method="post">
                                    @csrf

                                    @auth
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                    @else
                                    <input type="hidden" name="user_id" value="0">
                                    @endauth
                                    
                                    <input type="hidden" name="kode_order" value="0">
                                    <input type="hidden" name="total_harga" value="0">
                                    <input type="hidden" name="status_pembayaran" value="belum_bayar">

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="tanggal_ticket">Tanggal
                                            Ticket</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="tanggal_ticket"
                                                name="tanggal_ticket" required>
                                        </div>
                                    </div>

                                    <!-- HTML untuk menyimpan product_id -->
                                    <input type="hidden" id="product_id" value="{{ $product->id }}">


                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="ticket_id">Nama Ticket</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="ticket_id" name="ticket_id" required>
                                                <option value="">Select a date first</option>
                                            </select>
                                        </div>
                                    </div>


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
                                            <select class="form-control" id="metode_pembayaran"
                                                name="metode_pembayaran">
                                                <option selected value='-'>.. Select ..</option>
                                                <option value='cash'>Cash</option>
                                                <option value='transfer'>Transfer Bank</option>
                                                <option value='qris'>Qris</option>

                                            </select>
                                        </div>
                                    </div>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>

                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('tanggal_ticket').addEventListener('change', function () {
        let date = this.value;
        let productId = document.getElementById('product_id').value;

        fetch(`/api/detailTickets?date=${date}&product_id=${productId}`)
            .then(response => response.json())
            .then(data => {
                let ticketSelect = document.getElementById('ticket_id');
                ticketSelect.innerHTML = '';

                if (data.length > 0) {
                    data.forEach(ticket => {
                        let option = document.createElement('option');
                        option.value = ticket.id;
                        option.text = `${ticket.product.nama} | Stock: ${ticket.stock}`;
                        ticketSelect.appendChild(option);
                    });
                } else {
                    let option = document.createElement('option');
                    option.text = 'Ticket tidak tersedia untuk tanggal tersebut';
                    ticketSelect.appendChild(option);
                }
            })
            .catch(error => {
                console.error('Error fetching tickets:', error);
                let ticketSelect = document.getElementById('ticket_id');
                let option = document.createElement('option');
                option.text = 'Error loading tickets';
                ticketSelect.appendChild(option);
            });
    });

</script>
@endsection
