<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Product;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticket = Ticket::all();
        return view('admin.ticket.index', compact('ticket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = Product::all();
        return view('admin.ticket.add',compact('product'));
        
    }

    public function getTicketsByDate(Request $request)
{
    $date = $request->query('date');

    $tickets = Ticket::where('tanggal', $date)->with('product')->get();

    return response()->json($tickets);
}


    public function store(Request $request)
    {
            $this->validate($request, [
                'product_id'     => 'required|string',
                'stock'    => 'required|string',
                'tanggal'    => 'required',
            ]);

            Ticket::create([
                'product_id'     => $request->product_id,
                'stock'     => $request->stock,
                'tanggal'     => $request->tanggal,
            ]);

        return redirect()->route('admin.ticket')->with(['success' => 'Data Berhasil Disimpan!']);  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ticket = Ticket::findOrFail($id);
        $product = Product::all();
        $productLatest = Product::where('id', $ticket->product_id)->first();
        return view('admin.ticket.edit', compact('ticket','product','productLatest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'product_id'     => 'required|string',
            'stock'    => 'required|string',
            'tanggal'    => 'required',
        ]);

        $ticket = Ticket::findOrFail($id);


        $ticket->update([
            'product_id'     => $request->product_id,
            'stock'     => $request->stock,
            'tanggal'     => $request->tanggal,
        ]);

        return redirect()->route('admin.ticket')->with(['success' => 'Data Berhasil Disimpan!']);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();
        
        return redirect()->route('admin.ticket')->with(['success' => 'Data Berhasil Dihapus!']);  
    }
}
