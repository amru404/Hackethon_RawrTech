@extends('layouts.dashboard.app')

@section('content')

<div class="x_content">

    <h3>Data Contact {{$contact->nama}}</h3>
   
        <h5>Nama : {{$contact->nama}}</h5>
        <h5>Email : {{$contact->email}}</h5>
        <h5>Phone Number : {{$contact->no_hp}}</h5>
        <h5>Pesan : {{$contact->pesan}}</h5>
    

</div>

@endsection
