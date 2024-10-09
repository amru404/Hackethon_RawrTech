@extends('layouts.dashboard.app')

@section('content')

<div class="x_content">

    <h3>Table Data Order</h3>

    <a href="{{route('admin.order.add')}}" class="btn btn-primary mb-3">Add Order</a>
    
    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action" id="datatable">
            <thead>
                <tr class="headings">
                    <th class="column-title">No </th>
                    <th class="column-title">Kode Order </th>
                    <th class="column-title">Atas Nama </th>
                    <th class="column-title">Total Harga </th>
                    <th class="column-title">Status Pembayaran</th>
                    <th class="column-title">Tanggal Ticket</th>
                    <th class="column-title no-link last"><span class="nobr">Action</span></th>
                </tr>
            </thead>


            <?php $number = 1; ?>

            <tbody>
                @foreach($order as $o)
                <tr class="even pointer">
                    <td>{{ $number }}</td>
                    <?php $number++; ?>
                    <td class=" ">{{ $o->kode_order }}</td>
                    <td class=" ">{{ $o->user->name }}</td>
                    <td class=" ">Rp {{ number_format($o->total_harga, 0, ',', '.') }}</td>
                    <td class=" ">{{ $o->status_pembayaran }}</td>
                    <td class=" ">{{ $o->tanggal_ticket }}</td>
                    <td class=" ">
                        <a href="{{route('admin.order.show', $o->id)}}" class="btn btn-sm btn-success"><i class="fa-solid fa-sm fa-eye"></i></a>
                        <a href="{{route('admin.order.edit', $o->id)}}" class="btn btn-sm btn-warning"><i class="fa-solid fa-sm fa-pen-to-square"></i></a>
                        <a href="{{route('admin.order.destroy', $o->id)}}" class="btn btn-sm btn-danger"><i class="fa-solid fa-sm fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>

@endsection
