@extends('layouts.landing.app')

@section('content')
    <div class="furnitures_section layout_padding">
        <div class="container">
            <h1 class="our_text">Data Transaksi</h1>
            <div class="furnitures_section2 layout_padding">
                <div class="card">
                    <div class="card-body">
                        @foreach ($transaksi as $t)
                        <div class="card p-4 mt-3">
                            <h3>Nama Ticket :{{$t->order->ticket->product->nama}}</h3>
                            <p>Kode Order : {{$t->order->kode_order}}</p>
                            <p>Atas Nama : {{$t->order->user->name}}</p>
                            <p>Tanggal Ticket : {{$t->order->tanggal_ticket}}</p>
                            <p>Kuantitas : {{$t->order->qty}}</p>
                            <p>Rp {{ number_format($t->order->ticket->product->harga, 0, ',', '.') }}</p>
                            <p>Rp {{ number_format($t->order->total_harga, 0, ',', '.') }}</p>
                            <p>Kuantitas : {{$t->order->status_pembayaran}}</p>

                        </div>                              
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
