<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();

        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        $this->validate($request, [
            'nama'     => 'required|string',
            'deskripsi'    => 'required|string',
            'fitur'    => 'required|string',
            'latitude'    => 'required|string',
            'longtitude'    => 'required|string',
            'nomor_telepon' => 'required|string',
            'harga'    => 'required|numeric',
            'slug'    => 'required|string',
        ]);

        Product::create([
            'nama'     => $request->nama,
            'deskripsi'     => $request->deskripsi,
            'fitur'     => $request->fitur,
            'latitude'     => $request->latitude,
            'longtitude'     => $request->longtitude,
            'nomor_telepon'     => $request->nomor_telepon,
            'harga'    => $request->harga,
            'slug'    => $request->nama,
        ]);

        return redirect()->route('admin.product')->with(['success' => 'Data Berhasil Disimpan!']);  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('admin.product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $product = Product::findOrFail($id);

    return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama'     => 'required|string',
            'deskripsi'    => 'required|string',
            'fitur'    => 'required|string',
            'latitude'    => 'required|string',
            'longtitude'    => 'required|string',
            'nomor_telepon' => 'required|string',
            'harga'    => 'required|numeric',
            'slug'    => 'required|string',
        ]);

        $product = Product::findOrFail($id);

        
            $product->update([
                'nama'     => $request->nama,
                'deskripsi'     => $request->deskripsi,
                'fitur'     => $request->fitur,
                'latitude'     => $request->latitude,
                'longtitude'     => $request->longtitude,
                'nomor_telepon'     => $request->nomor_telepon,
                'harga'    => $request->harga,
                'slug'    => $request->nama,
            ]);

            return redirect()->route('admin.product')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('admin.product')->with(['success' => 'Data Berhasil Dihapus!']);
    
    }
}
