@extends('layouts.dashboard.app')

@section('content')
<div class="container">

    @if($message = Session::get('success'))
        <div class="alert alert-success"> 
            <strong>{{ $message }}</strong>
        </div>
            
            @if(Session::has('image'))
                @foreach (Session::get('image') as $imgs)
                    <img src="/images/{{ $imgs }}" alt="Uploaded Image">
                @endforeach
            @endif
    @endif

    <form action="{{ route('admin.image.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload Image</span>
            </div>
            <div class="custom-file">
                <input type="file" name="image[]" class="custom-file-input @error('image') is-invalid @enderror" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" multiple>
            </div>
            @error('image.*')
            <div class="alert alert-danger">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="product_id">Nama Produk</label>
            <select class="form-control" id="product_id" name="product_id">
                @foreach ($product as $p)
                <option value="{{$p->id}}">{{$p->nama}}</option>
                @endforeach

            </select>
        </div>


        <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
