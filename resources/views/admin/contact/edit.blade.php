@extends('layouts.dashboard.app')

@section('content')

<div class="x_content">

    <form action="{{ route('admin.contact.update', $contact->id)}}" method="POST">
        @csrf
        @method('put')

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name"> Nama Pengirim</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $contact->nama) }}"
                    required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name"> email Pengirim</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $contact->email) }}"
                    required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name"> Nomer HP Pengirim</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp', $contact->no_hp) }}"
                    required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="pesan">pesan</label>
            <div class="col-sm-10">
                <textarea id="pesan" name="pesan" cols="40" rows="3" class="form-control"
                    required="required">{{ old('pesan', $contact->pesan) }}</textarea>
            </div>
        </div>

        
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>

</div>

@endsection
