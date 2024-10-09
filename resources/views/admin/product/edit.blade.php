@extends('layouts.dashboard.app')

@section('content')
<div class="x_content">

    <form action="{{route('admin.product.update', $product ->id)}}" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="slug" value="{{ $product->slug }}">

        <div class="form-group row">
            <label class="col-4 col-form-label" for="nama">Nama Paket</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" required="required" class="form-control"
                    value="{{ $product->nama }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
            <div class="col-8">
                <textarea id="deskripsi" name="deskripsi" cols="40" rows="3" class="form-control"
                    required="required">{{ $product->deskripsi }}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="fitur" class="col-4 col-form-label">Keunggulan</label>
            <div class="col-8">
                <input id="fitur" name="fitur" type="text" class="form-control" required="required"
                    value="{{ $product->fitur }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="latitude" class="col-4 col-form-label">Latitude</label>
            <div class="col-8">
                <input id="latitude" name="latitude" type="text" class="form-control" required="required"
                    value="{{ $product->latitude }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="longtitude" class="col-4 col-form-label">Longtitude</label>
            <div class="col-8">
                <input id="longtitude" name="longtitude" type="text" class="form-control" required="required"
                    value="{{ $product->longtitude }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="nomor_telepon" class="col-4 col-form-label">Nomor Telepon</label>
            <div class="col-8">
                <input id="nomor_telepon" name="nomor_telepon" type="text" required="required" class="form-control"
                    value="{{ $product->nomor_telepon }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-4 col-form-label">Harga Tiket</label>
            <div class="col-8">
                <input id="harga" name="harga" type="text" class="form-control" required="required"
                    value="{{ $product->harga }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</div>

@endsection
