@extends('layouts.dashboard.app')

@section('content')

<div class="x_content">

    <h3>Table Data Order {{$order->kode_order}}</h3>
    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action" id="datatable">
            <thead>
                <tr class="headings">
                    <th class="column-title">No </th>
                    <th class="column-title">Kode Order </th>
                    <th class="column-title">Nama Ticket </th>
                    <th class="column-title">Atas Nama </th>
                    <th class="column-title">Qty </th>
                    <th class="column-title">Total Harga </th>
                    <th class="column-title">Tanggal Ticket</th>
                    <th class="column-title">Metode Pembayaran</th>
                    <th class="column-title">Status Pembayaran</th>
                </tr>
            </thead>


            <?php $number = 1; ?>

            <tbody>
                <tr class="even pointer">
                    <td>{{ $number }}</td>
                    <?php $number++; ?>
                    <td class=" ">{{ $order->kode_order }}</td>
                    <td class=" ">{{ $order->ticket->product->nama }}</td>
                    <td class=" ">{{ $order->user->name }}</td>
                    <td class=" ">{{ $order->qty }}</td>
                    <td class=" ">{{ $order->total_harga }}</td>
                    <td class=" ">{{ $order->tanggal_ticket }}</td>
                    <td class=" ">{{ $order->metode_pembayaran }}</td>
                    <td class=" ">{{ $order->status_pembayaran }}</td>                   
                </tr>
            </tbody>
        </table>
    </div>


</div>

@endsection
