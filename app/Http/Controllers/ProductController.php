<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ImageProduct;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::with('images')->get();

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
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,jpg,png,svg|max:5120',
        ]);

        $product = Product::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'fitur' => $request->fitur,
            'latitude' => $request->latitude,
            'longtitude' => $request->longtitude,
            'nomor_telepon' => $request->nomor_telepon,
            'harga' => $request->harga,
            'slug' => $request->nama,
        ]);
        
        $productId = $product->id;
        
        foreach ($request->file('image') as $value) {
            $imageName = time() . '_' . $value->getClientOriginalName();
            $value->move(public_path('images'), $imageName);
        
            ImageProduct::create([
                'image' => $imageName,
                'product_id' => $productId,
            ]);
        }

        return redirect()->route('admin.product')->with(['success' => 'Data Berhasil Disimpan!']);  
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::with('images')->findOrFail($id);

        return view('admin.product.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $product = Product::with('images')->findOrFail($id);

    return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'fitur' => 'required|string',
            'latitude' => 'required|string',
            'longtitude' => 'required|string',
            'nomor_telepon' => 'required|string',
            'harga' => 'required|numeric',
            'slug' => 'required|string',
            'image' => 'nullable',
            'image.*' => 'image|mimes:jpeg,jpg,png,svg|max:5120',
        ]);

        // Temukan produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Update produk
        $product->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'fitur' => $request->fitur,
            'latitude' => $request->latitude,
            'longtitude' => $request->longtitude,
            'nomor_telepon' => $request->nomor_telepon,
            'harga' => $request->harga,
            'slug' => $request->slug,
        ]);

        if ($request->hasFile('image')) {
            $oldImages = $product->images;
            foreach ($oldImages as $oldImage) {
                \Storage::delete('images/' . $oldImage->image);
                $oldImage->delete();
            }

            foreach ($request->file('image') as $value) {
                $imageName = time() . '_' . $value->getClientOriginalName();
                $value->move(public_path('images'), $imageName);

                ImageProduct::create([
                    'image' => $imageName,
                    'product_id' => $product->id,
                ]);
            }
        }

        return redirect()->route('admin.product')->with('success', 'Produk berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::with('images')->findOrFail($id);
    
        foreach ($product->images as $image) {
            if (file_exists(public_path('images/' . $image->image))) {
                unlink(public_path('images/' . $image->image));
            }
            $image->delete();
        }
        $product->delete();
    
        return redirect()->route('admin.product')->with('success', 'Produk berhasil dihapus.');
    }
    
}
