@extends('layouts.dashboard.app')

@section('content')
<div class="container">
    <h1>Detail Produk: {{ $product->nama }}</h1>

        <div class="card-body">
            <h5>Deskripsi</h5>
            <p>{{ $product->deskripsi }}</p>

            <h5>Fitur</h5>
            <p>{{ $product->fitur }}</p>

            <h5>Harga</h5>
            <p>Rp {{ number_format($product->harga, 0, ',', '.') }}</p>

            <h5>Gambar Produk</h5>
            <div class="row">
                @if($product->images->count() > 0)
                <div class="col-md-4 mb-3">
                @foreach($product->images as $image)
                    <div class="card mb-3" style="width: 18rem;">
                        <img src="{{ asset('/images/' . $image->image) }}" alt="Image of {{ $product->nama }}" class="card-img-top">
                    </div>
                 @endforeach
                </div>
                @else
                <p>Tidak ada gambar tersedia untuk produk ini.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
