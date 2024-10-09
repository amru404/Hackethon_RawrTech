@extends('layouts.dashboard.app')

@section('content')

<div class="card-header d-flex align-items-center justify-content-between">
    <h5 class="mb-0">Edit Ticket</h5>
    <small class="text-muted float-end">Default label</small>
</div>
<div class="card-body">
    <form action="{{ route('admin.ticket.update', $ticket->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Product</label>
            <div class="col-sm-10">
            <select class="form-select" id="product_id" name="product_id" aria-label="Default select example">
                <option selected value="{{$productLatest->id}}">{{$productLatest->nama}}</option>
                @foreach ($product as $p)
                <option value="{{$p->id}}">{{$p->nama}}</option>
                @endforeach
            </select>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Stock</label>
            <div class="col-sm-10">
                <input type="number" name="stock" value="{{ $ticket->stock }}" class="form-control" id="stock"
            aria-describedby="emailHelp">
            </div>
        </div>
    
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-phone">Tanggal Ticket</label>
            <div class="col-sm-10">
                <input type="date" name="tanggal" class="form-control" value="{{ $ticket->tanggal }}" id="tanggal">
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


@endsection
