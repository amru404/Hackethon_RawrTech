@extends('layouts.dashboard.app')

@section('content')


<div class="card-header d-flex align-items-center justify-content-between">
    <h5 class="mb-0">Add Product</h5>
    <small class="text-muted float-end">Default label</small>
</div>
<div class="card-body">
    <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="slug" value="-">

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name"> Nama product</label>
            <div class="col-sm-10">
                <input id="nama" name="nama" type="text" required="required" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="deskripsi">Deskripsi</label>
            <div class="col-sm-10">
                <textarea id="deskripsi" name="deskripsi" cols="40" rows="3" class="form-control"
                    required="required"></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="fitur">Keunggulan Paket</label>
            <div class="col-sm-10">
                <input id="fitur" name="fitur" placeholder="1x lunch dll" type="text" class="form-control"
                    required="required">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="latitude">Latitude</label>
            <div class="col-sm-10">
                <input id="latitude" name="latitude" type="text" class="form-control" required="required">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="longtitude">Longtitude</label>
            <div class="col-sm-10">
                <input id="longtitude" name="longtitude" type="text" class="form-control" required="required">
            </div>
        </div>


        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nomor_telepon">Nomor Telepon</label>
            <div class="col-sm-10">
                <input id="nomor_telepon" name="nomor_telepon" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="harga">Harga</label>
            <div class="col-sm-10">
                <input id="harga" name="harga" type="text" required="required" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-phone">Gambar Product</label>
            <div class="col-sm-10">
                <input type="file" name="image[]" class="custom-file-input @error('image') is-invalid @enderror"
                    id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" multiple>
            </div>
            @error('image.*')
            <div class="alert alert-danger">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
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
