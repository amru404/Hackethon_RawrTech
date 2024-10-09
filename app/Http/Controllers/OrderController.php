<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Ticket;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::all();
        return view('admin.order.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ticket = Ticket::all();
        $user = User::all();

        return view('admin.order.add',compact('ticket','user'));
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

        return redirect()->route('admin.order')->with(['success' => 'Data Berhasil Disimpan!']);  
    }

    public function storeTest(Request $request)
        {
            $this->validate($request, [
                'kode_order'        => 'required|string',
                'ticket_id'         => 'required',
                'user_id'           => 'required',
                'qty'               => 'required|numeric',
                'tanggal_ticket'    => 'required|date',
                'metode_pembayaran' => 'required|string',
                'status_pembayaran' => 'required|string',
            ]);

            $ticket = Ticket::where('id', $request->ticket_id)->firstOrFail();
            $product = Product::where('id', $ticket->product_id)->firstOrFail();
            $stock_ticket = $ticket->stock;
            $harga = $product->harga;
            $qty = $request->qty;

            if ($qty > $stock_ticket) {
                return redirect()->back()->with('error', 'Not enough stock available for this ticket.');
            }

            $total_harga = $harga * $qty;
            $kurang_stock = $stock_ticket - $qty;

            $ticket->update([
                'stock' => $kurang_stock,
            ]);

            Order::create([
                'kode_order'        => 'OT' . str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT),
                'ticket_id'         => $request->ticket_id,
                'user_id'           => $request->user_id,
                'qty'               => $qty,
                'total_harga'       => $total_harga,
                'tanggal_ticket'    => $request->tanggal_ticket,
                'metode_pembayaran' => $request->metode_pembayaran,
                'status_pembayaran' => $request->status_pembayaran,
            ]);

            return redirect()->route('admin.ticket')->with(['success' => 'Order has been successfully created!']);
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $order = Order::findOrFail($id);

        return view('admin.order.detail', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::findOrFail($id);
        $ticket = Ticket::where('id', $order->ticket_id)->get();
        $user = User::all();

        return view('admin.order.edit', compact('order','ticket','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'kode_order'         => 'required|string',
            'ticket_id'          => 'required',
            'user_id'            => 'required',
            'qty'                => 'required|numeric',
            'total_harga'        => 'required|numeric',
            'tanggal_ticket'     => 'required|date',
            'metode_pembayaran'  => 'required|string',
            'status_pembayaran'  => 'required|string',
        ]);

        $order = Order::find($id);
        if (!$order) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        $ticket = Ticket::find($order->ticket_id);
        $product = Product::find($ticket->product_id);

        $harga = $product->harga;
        $qty = $request->qty;
        $total_harga = $harga * $qty;

        $oldQty = $order->qty;
        $newQty = $request->qty;
        $selisih_qty = $newQty - $oldQty;

        if ($selisih_qty > 0) {
            $ticket->stock -= $selisih_qty;
        } else {
            $ticket->stock += abs($selisih_qty);
        }

        $ticket->update([
            'stock' => $ticket->stock 
        ]);

        $order->update([
            'kode_order'         => $request->kode_order,
            'ticket_id'          => $request->ticket_id,
            'user_id'            => $request->user_id,
            'qty'                => $newQty,
            'total_harga'        => $total_harga,
            'tanggal_ticket'     => $request->tanggal_ticket,
            'metode_pembayaran'  => $request->metode_pembayaran,
            'status_pembayaran'  => $request->status_pembayaran,
        ]);

        return redirect()->route('admin.order')->with(['success' => 'Data Berhasil Dihapus!']);
    
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        $ticket_id = $order->ticket_id;
        $ticket = Ticket::findOrFail($ticket_id);
        $qty = $order->qty;
        $stock = $order->ticket->stock;
        $stock_update = $stock + $qty;
        // dd($stock);

        $ticket->update([
            'stock'    => $stock_update,
        ]);
        $order->delete();

        return redirect()->route('admin.order')->with(['success' => 'Data Berhasil Dihapus!']);
    
    }
}
