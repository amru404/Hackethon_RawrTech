<?php

namespace App\Http\Controllers;

use App\Models\ImageProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ImageProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();

        return view('image.add',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function imageUpload(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,jpg,png,svg|max:5120',
            'product_id' => 'required|integer', // Validasi untuk product_id
        ]);
    
        $imageNames = []; // Array untuk menyimpan nama gambar
    
        foreach ($request->file('image') as $value) {
            $imageName = time() . '_' . $value->getClientOriginalName();
            $value->move(public_path('images'), $imageName);
    
            // Simpan nama gambar ke array untuk keperluan session (opsional)
            $imageNames[] = $imageName; 
    
            // Simpan ke database
            ImageProduct::create([
                'image' => $imageName,
                'product_id' => $request->product_id,
            ]);
        }
    }


    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(ImageProduct $imageProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImageProduct $imageProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ImageProduct $imageProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImageProduct $imageProduct)
    {
        //
    }
}
