@extends('layouts.dashboard.app')

@section('content')

<div class="x_content">

    <form action="{{ route('admin.order.update', $order->id)}}" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="kode_order" value="{{ $order->kode_order }}">
        <input type="hidden" name="total_harga" value="0">
        <input type="hidden" name="status_pembayaran" value="{{ $order->status_pembayaran }}">


        <div class="form-group">
            <label for="tanggal_ticket">Tanggal Ticket</label>
            <input type="date" name="tanggal_ticket" value="{{ $order->tanggal_ticket}}" class="form-control"
                id="tanggal_ticket" aria-describedby="emailHelp">
        </div>

        
            <div class="form-group">
                <label for="ticket_id">Nama Ticket </label>
                <select class="form-control" id="ticket_id" name="ticket_id">
                    <option value="{{ $order->ticket_id}}">{{$order->ticket->product->nama}} | <span style="float:right">stock :
                    {{$order->ticket->stock}}</option>
                    @foreach ($ticket as $t)

                    <option value="{{$t->id}}">{{$t->product->nama}} | <span style="float:right">stock :
                            {{$t->stock}}</span></option>
                    @endforeach

                </select>
            </div>

        <div class="form-group">
            <label for="user_id">Nama User </label>
            <select class="form-control" id="user_id" name="user_id">
                <option value="{{$order->user_id}}">{{$order->user->name}} </option>
                @foreach ($user as $u)
                <option value="{{$u->id}}">{{$u->name}}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label for="qty">Quantity</label>
            <input type="number" name="qty" class="form-control" value="{{ $order->qty }}" id="qty"
                aria-describedby="emailHelp">
        </div>


        <div class="form-group">
            <label for="metode_pembayaran">Metode Pembayaran</label>
            <select class="form-control" id="metode_pembayaran" name="metode_pembayaran">
                <option value='{{ $order->metode_pembayaran }}'>{{ $order->metode_pembayaran }}</option>
                <option value='transfer'>Transfer Bank</option>
                <option value='qris'>Qris</option>

            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

@endsection
