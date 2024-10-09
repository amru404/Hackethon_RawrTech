@extends('layouts.dashboard.app')

@section('content')


<div class="card-header d-flex align-items-center justify-content-between">
    <h5 class="mb-0">Edit Product</h5>
    <small class="text-muted float-end">Default label</small>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

</div>
<div class="card-body">
    <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="hidden" name="slug" value="-">

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name"> Nama product</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $product->nama) }}"
                    required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="deskripsi">Deskripsi</label>
            <div class="col-sm-10">
                <textarea id="deskripsi" name="deskripsi" cols="40" rows="3" class="form-control"
                    required="required">{{ old('deskripsi', $product->deskripsi) }}</textarea>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="fitur">Keunggulan Paket</label>
            <div class="col-sm-10">
                <input id="fitur" name="fitur" placeholder="1x lunch dll" type="text" class="form-control"
                    required="required" value="{{ old('fitur', $product->fitur) }}">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="latitude">Latitude</label>
            <div class="col-sm-10">
                <input id="latitude" name="latitude" type="text" class="form-control"
                    value="{{ old('latitude', $product->latitude) }}" required="required">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="longtitude">Longtitude</label>
            <div class="col-sm-10">
                <input id="longtitude" name="longtitude" type="text" class="form-control"
                    value="{{ old('longtitude', $product->longtitude) }}" required="required">
            </div>
        </div>


        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nomor_telepon">Nomor Telepon</label>
            <div class="col-sm-10">
                <input id="nomor_telepon" name="nomor_telepon" type="text"
                    value="{{ old('nomor_telepon', $product->nomor_telepon) }}" required="required"
                    class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="harga">Harga</label>
            <div class="col-sm-10">
                <input id="harga" name="harga" type="text" required="required"
                    value="{{ old('harga', $product->harga) }}" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-phone">Gambar Product</label>
            <div class="col-sm-10">
                <input type="file" class="form-control-file" id="image" name="image[]" multiple>
                @if($product->images)
                <div>
                    <h5>Gambar saat ini:</h5>
                    @foreach ($product->images as $image)
                    <img src="{{ asset('images/' . $image->image) }}" alt="Product Image"
                        style="width: 100px; margin-right: 5px;">
                    @endforeach
                </div>
                @endif
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
