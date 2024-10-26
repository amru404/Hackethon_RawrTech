@extends('layouts.landing.app')

@section('content')
<div class="furnitures_section layout_padding">
    <div class="container">
        <div class="row">
            @foreach ($product as $p)
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                <div class="card"
                    style="width: 100%; margin-bottom:20px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius:10px;">
                    @if($p->images->count() > 0)
                    <img src="/images/{{ $p->images->first()->image }}" alt="Product Image"
                        style="width: 100%; border-top-left-radius: 10px; border-top-right-radius: 10px; max-height:350px; min-height:250px">
                    @endif
                    <div class="card-body">
                        <h3 class="fw-bold">{{ $p->nama }}</h3>
                        <h5 class="fw-bold">{{ $p->harga }}</h5>
                        <p class="card-text">{{ Str::limit($p->deskripsi, 120, '...') }}</p>
                        <a href="{{route('detailWisata', $p->id)}}" class="btn btn-primary">Beli Ticket</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
