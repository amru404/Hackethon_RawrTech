<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Ticket;
use App\Models\Order;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::all();

        return view('admin.transaksi.index',compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $order = Order::all();

        return view('admin.transaksi.add', compact('order'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'kode_transaksi'     => 'required|string',
            'order_id'    => 'required|string',
            'metode_pembayaran'    => 'required',
            'total_harga'    => 'required',
        ]);

        $order_id = $request->order_id;
        $order = Order::findOrFail($order_id);
        
        $order->update([
            'status_pembayaran' => $request->status_pembayaran,
        ]);
        
        // dd();
        Transaksi::create([
            'kode_transaksi'     => 'KT' . str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT),
            'order_id'     => $request->order_id,
            'metode_pembayaran'     => $order->metode_pembayaran,
            'total_harga'     => $order->total_harga,
        ]);

        return redirect()->route('admin.transaksi')->with(['success' => 'Data Berhasil Disimpan!']);  
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $order = Order::all();

        return view('admin.transaksi.edit', compact('transaksi','order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $previousOrderId = $transaksi->order_id; // Store the previous order ID
        $order = Order::findOrFail($previousOrderId);
    
        $order->update([
            'status_pembayaran' => 'belum_bayar',
        ]);
    
        $transaksi->update([
            'kode_transaksi' => $request->kode_transaksi,
            'order_id'      => $request->order_id,
            'metode_pembayaran'    => $order->metode_pembayaran,
            'total_harga'   => $order->total_harga, // Assuming you're updating order_id here
        ]);
    
        // Update the status of the new order
        $newOrder = Order::findOrFail($request->order_id);
        $newOrder->update([
            'status_pembayaran' => 'sudah_bayar',
        ]);
    
        return redirect()->route('admin.transaksi')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $order_id = $transaksi->order_id;
        $order = Order::findOrFail($order_id);

        $order->update([
            'status_pembayaran'    => 'belum_bayar',
        ]);
        $transaksi->delete();

        return redirect()->route('admin.transaksi')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
