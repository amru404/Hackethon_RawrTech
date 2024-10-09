@extends('layouts.dashboard.app')

@section('content')

<div class="x_content">

    <h3>Table Data Transaksi</h3>

    <a href="{{route('admin.transaksi.add')}}" class="btn btn-primary">Add Transaksi    </a>

    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action" id="datatable">
            <thead>
                <tr class="headings">
                    <th class="column-title">No </th>
                    <th class="column-title">Kode Transaksi </th>
                    <th class="column-title">Kode Order </th>
                    <th class="column-title">Atas Nama</th>
                    <th class="column-title">Metode Pembayaran</th>
                    <th class="column-title">Total Harga </th>
                    <th class="column-title no-link last"><span class="nobr">Action</span></th>
                </tr>
            </thead>


            <?php $number = 1; ?>

            <tbody>
                @foreach($transaksi as $t)
                <tr class="even pointer">
                    <td>{{ $number }}</td>
                    <?php $number++; ?>
                    <td class=" ">{{ $t->kode_transaksi }}</td>
                    <td class=" ">{{ $t->order->kode_order }}</td>
                    <td class=" ">{{ $t->order->user->name }}</td>
                    <td class=" ">{{ $t->metode_pembayaran }}</td>
                    <td class=" ">{{ $t->total_harga }}</td>
                    <td class=" ">
                        <a href="{{route('admin.transaksi.edit', $t->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{route('admin.transaksi.destroy', $t->id)}}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>

@endsection
