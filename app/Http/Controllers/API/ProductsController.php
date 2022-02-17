<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->with('manufacturer', 'model')->paginate(1);


        return \response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }


    public function toggleTag(Product $product)
    {
        \request()->validate(['tag' => 'required']);


        return \response()->json($product->tags()->toggle([request('tag')]));
    }

    public function syncSpecifications(Request $request, Product $product)
    {
        $arguments = $request->validate([
            'genre' => ['required'],
            'power' => ['required'],
            'capacity' => ['required'],
            'color' => ['required'],
            'window_shield' => ['required'],
            'bag_support' => ['required'],
            'degree' => ['nullable'],
            'unit' => ['required'],
            'model' => ['required'],
            'manufactured_at' => ['required'],
            'shipped_at' => ['required'],
            'maintenance' => ['nullable'],
            'repair_location' => ['nullable'],
            'rom_specification' => ['nullable'],
            'op_included' => ['nullable'],
            'remark' => ['nullable'],
        ]);

        $data = \collect($arguments)->map(function ($value, $index) use ($product) {
            return $product->metadata()->updateOrCreate(['key' => $index], ['value' => $value]);
        });

        return \response()->json($data);
    }


    public function syncStorageAndPricing(Request $request, Product $product)
    {
        $arguments = $request->validate([
            'supplier' => ['required'],
            'in_stock' => ['required'],
            'purchased_at' => ['required'],
            'shipping_fee' => ['nullable'],
            'repair_cost' => ['nullable'],
            'storage_location' => ['required'],
            'purchase_price' => ['required'],
            'partition_amount' => ['required'],
        ]);

        $data = \collect($arguments)->map(function ($value, $index) use ($product) {
            return $product->metadata()->updateOrCreate(['key' => $index], ['value' => $value]);
        });

        return \response()->json($data);
    }
}
