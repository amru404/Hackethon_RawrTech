<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Ticket;
use App\Models\User;
use App\Models\Order;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    function home(){
        $product = Product::with('images')->get();

        return view('landing.index',compact('product'));
    }

    function checkTicket() {
        $ticket = Ticket::all();
        $user = User::all();

        return view('landing.ticket',compact('ticket','user'));
    }

    function dataTransaksi(){
        $transaksi = Transaksi::with('order')
        ->whereHas('order', function ($query) {
            $query->where('user_id', Auth::id());
        })
        ->get();

    // dd($transaksi);
    return view('landing.transaksi',compact('transaksi'));
    }

    function orderData(){
        $order = Order::where('user_id',Auth::id())->get();

        return view('landing.order',compact('order'));
    }

    function createTransaksi(Request $request){
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

        return redirect()->route('home')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_order'     => 'required|string',
            'ticket_id'    => 'required',
            'user_id'    => 'required',
            'qty'    => 'required|numeric',
            'total_harga'    => 'required|numeric',
            'tanggal_ticket'    => 'required|date',
            'metode_pembayaran'    => 'required|string',
            'status_pembayaran'    => 'required|string',
        ]);

        $ticket = Ticket::findOrFail($request->ticket_id);

        if ($request->qty > $ticket->stock) {
            return redirect()->back()->withErrors(['qty' => 'Jumlah tiket yang dipesan tidak boleh melebihi stok yang tersedia!']);
        }

        $ticket = Ticket::where('id', $request->ticket_id)->first();
        $product = Product::where('id', $ticket->product_id)->first();
        $stock_ticket = $ticket->stock;
        $harga = $product->harga;
        $qty = $request->qty;
        $total_harga = $harga * $qty;
        $kurang_stock = $stock_ticket - $qty;

        $ticket->update([
            'stock' => $kurang_stock,
        ]);
        

        Order::create([
            'kode_order' => 'OT' . str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT),
            'product_id'     => $request->product_id,
            'stock'     => $request->stock,
            'tanggal'     => $request->tanggal,
            'ticket_id'    => $request->ticket_id,
            'user_id'    => $request->user_id,
            'qty'    => $qty,
            'total_harga'    => $total_harga,
            'tanggal_ticket'    => $request->tanggal_ticket,
            'metode_pembayaran'    => $request->metode_pembayaran,
            'status_pembayaran'    => $request->status_pembayaran,
        ]);

        return redirect()->route('home')->with(['success' => 'Data Berhasil Disimpan!']);  
    }


    
    
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
