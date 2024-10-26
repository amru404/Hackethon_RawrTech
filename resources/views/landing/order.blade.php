@extends('layouts.landing.app')

@section('content')
<div class="furnitures_section layout_padding">
    <div class="container">
        <h1 class="our_text">Data Order</h1>
        <p class="ipsum_text">There are many variations of passages of Lorem Ipsum </p>
        <div class="furnitures_section2 layout_padding">
            <div class="card">
                <div class="card-body">
                    @foreach ($order as $o)
                    <div class="card p-4 mt-3">
                        <div class="row">
                            <div class="col-6">
                                <h3>Nama Ticket :{{$o->ticket->product->nama}}</h3>
                            </div>
                            <div class="col-6">
                                <h5>
                                    Status Pembayaran : {{$o->status_pembayaran}}
                                </h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <p><strong>Kode Order : </strong>{{$o->kode_order}}</p>
                                <p><strong>Atas Nama : </strong>{{$o->user->name}}</p>
                                <p><strong>Tanggal Ticket : </strong>{{$o->tanggal_ticket}}</p>

                            </div>
                            <div class="col-6">
                                <p><strong>Kuantitas :</strong> {{$o->qty}}</p>
                                <p><strong>Harga Satuan Ticket : </strong>Rp
                                    {{ number_format($o->ticket->product->harga, 0, ',', '.') }}</p>
                                <p><strong>Total Harga : </strong>Rp
                                    {{ number_format($o->total_harga, 0, ',', '.') }}</p>
                                <form action="{{ route('user.transaksi.store')}}" class="mt-3" method="POST">
                                    @csrf

                                    <input type="hidden" name="kode_transaksi" value="0">
                                    <input type="hidden" name="total_harga" value="0">
                                    <input type="hidden" name="status_pembayaran" value="sudah_bayar">
                                    <input type="hidden" name="order_id" value="{{$o->id}}">
                                    <input type="hidden" name="metode_pembayaran" value="-">

                                    @if ($o->status_pembayaran == "belum_bayar")
                                    <button type="submit" class="btn btn-primary" style="float:right;">Bayar</button>
                                </form>
                                @else
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#exampleModal" style="float:right;">
                                    Lihat QRCode
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">QR Code Tiket</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body mx-auto">
                                                <img src="{{asset('images/qr.png') }}" alt="">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                
                            </div>
                        </div>
                        <input type="hidden">
                    </div>
                    @endforeach




                </div>
            </div>
        </div>
    </div>
</div>

@endsection
