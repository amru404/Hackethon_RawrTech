@extends('layouts.dashboard.app')

@section('content')

<div class="x_content">

    <form action="{{ route('admin.transaksi.update', $transaksi->id)}}" method="POST">
        @csrf
        @method('put')

        <input type="hidden" name="kode_transaksi" value="0">
        <input type="hidden" name="total_harga" value="0" >
        <input type="hidden" name="status_pembayaran" value="sudah_bayar" >
        <input type="hidden" name="metode_pembayaran" value="-" >


        <div class="form-group">
            <label for="order_id">Nama Order </label>
            <select class="form-control" id="order_id" name="order_id">
            <option value="{{$transaksi->order->id}}">{{$transaksi->order->kode_order}} | {{$transaksi->order->user->name}} | {{$transaksi->order->ticket->product->nama}} | qty : {{$transaksi->order->qty}} | {{$transaksi->order->total_harga}}</option>
                @foreach ($order as $o)
                <option value="{{$o->id}}">{{$o->kode_order}} | {{$o->user->name}} | {{$o->ticket->product->nama}} | qty : {{$o->qty}} | {{$o->total_harga}}</option>
                @endforeach

            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

@endsection
