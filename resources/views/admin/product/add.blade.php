@extends('layouts.dashboard.app')

@section('content')
    <div class="x_content">

<form action="{{route('admin.product.store')}}" method="POST">
    @csrf
    <input type="hidden" name="slug" value="-">
  <div class="form-group row">
    <label class="col-4 col-form-label" for="nama">Nama Paket</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="ex. paket argowisata" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <textarea id="deskripsi" name="deskripsi" cols="40" rows="3" class="form-control" required="required"></textarea>
    </div>
  </div>
 
  <div class="form-group row">
    <label for="fitur" class="col-4 col-form-label">Keunggulan</label> 
    <div class="col-8">
      <input id="fitur" name="fitur" placeholder="1x lunch dll" type="text" class="form-control" required="required">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="latitude" class="col-4 col-form-label">Latitude</label> 
    <div class="col-8">
      <input id="latitude" name="latitude" placeholder="ex. -6.5742361925400985" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="longtitude" class="col-4 col-form-label">Longtitude</label> 
    <div class="col-8">
      <input id="longtitude" name="longtitude" placeholder="ex. 106.63178521287578" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="nomor_telepon" class="col-4 col-form-label">Nomor Telepon</label> 
    <div class="col-8">
      <input id="nomor_telepon" name="nomor_telepon" placeholder="ex. +628368299374" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="harga" class="col-4 col-form-label">Harga Tiket</label> 
    <div class="col-8">
      <input id="harga" name="harga" placeholder="ex.150000" type="text" class="form-control" required="required">
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
