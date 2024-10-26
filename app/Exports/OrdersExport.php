<?php
namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrdersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::with(['ticket.product', 'user'])->get()->map(function ($order) {
            return [
                'Kode Order' => $order->kode_order,
                'Nama Ticket' => $order->ticket->product->nama ?? 'N/A', // Handle null cases
                'Nama Pemesan' => $order->user->name ?? 'N/A', // Handle null cases
                'Tanggal Tiket' => $order->tanggal_ticket,
                'Kuantitas' => $order->qty,
                'Total Harga' => $order->total_harga,
                'Metode Pembayaran' => $order->metode_pembayaran,
                'Status Pembayaran' => $order->status_pembayaran,
                'created_at' => $order->created_at,
            ];
        });
    }

    public function headings(): array
    {   
        return [
            'Kode Order',
            'Nama Ticket',
            'Nama Pemesan',
            'Tanggal Tiket',
            'Kuantitas',
            'Total Harga',
            'Metode Pembayaran',
            'Status Pembayaran',
            'created_at',
        ];
    }
}
