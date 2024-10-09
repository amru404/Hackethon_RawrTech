@extends('layouts.dashboard.app')

@section('content')

<div class="x_content">

<h3>Table Data Tiket</h3>

<a href="{{route('admin.ticket.add')}}" class="btn btn-primary mb-3">Add ticket</a>

<div class="table-responsive">
  <table class="table table-striped jambo_table bulk_action"  id="datatable">
    <thead>
      <tr class="headings">
      <th class="column-title">No </th>
        <th class="column-title">Nama Tiket </th>
        <th class="column-title">Stock </th>
        <th class="column-title">Tanggal </th>
        <th class="column-title no-link last"><span class="nobr">Action</span></th>
      </tr>
    </thead>

    
    <?php $number = 1; ?>

    <tbody>
      @foreach($ticket as $data)
      <tr class="even pointer">
        <td>{{ $number }}</td>
        <?php $number++; ?>
        <td class=" ">{{ $data->product->nama }}</td>
        <td class=" ">{{ $data->stock }}</td>
        <td class=" ">{{ $data->tanggal }}</td>
        <td class=" ">
              <a href="{{route('admin.ticket.edit', $data->id)}}" class="btn btn-sm btn-warning"><i class="fa-solid fa-sm fa-pen-to-square"></i></a>
              <a href="{{route('admin.ticket.destroy', $data->id)}}" class="btn btn-sm btn-danger"><i class="fa-solid fa-sm fa-trash"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
        
    
</div>

@endsection
