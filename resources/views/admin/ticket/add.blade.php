@extends('layouts.dashboard.app')

@section('content')

<div class="x_content">

    <form action="{{ route('admin.ticket.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="product_id">Nama Produk</label>
            <select class="form-control" id="product_id" name="product_id">
                @foreach ($product as $p)
                <option value="{{$p->id}}">{{$p->nama}}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" class="form-control" id="stock" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal Ticket</label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

@endsection
