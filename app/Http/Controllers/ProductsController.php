<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products= DB::table('products')
        // ->select('*','products. as id')
        ->join('merchant','products.merchant_id' ,'=','merchant.id' )
        ->get();
        $data = [
            'products' => $products
        ];
        return view('merchant.products.products',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $merchant= DB::table('merchant')->get();
        $data = [
            'merchant'=>$merchant
        ];
        return view('merchant.products.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ], [
            'name.required' => ' name wajib diisi !!',
            'price.required' => 'price wajib diisi !!',
        ]);
        DB::table('products')->insert([
            'name' => $request->name,
            'merchant_id' => $request->merchant_id,
            'price' => $request->price,
        ]);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $merchant= DB::table('merchant')->get();
        $products= DB::table('products')->where('product_id',$id)->first();
        $data = [
            'merchant'=>$merchant,
            'products'=>$products
        ];
        return view('merchant.products.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ], [
            'name.required' => ' name wajib diisi !!',
            'price.required' => 'price wajib diisi !!',
        ]);
        DB::table('products')->where('product_id',$id)->update([
            'name' => $request->name,
            'merchant_id' => $request->merchant_id,
            'price' => $request->price,
        ]);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('products')->where('product_id',$id)->delete();
        return redirect()->route('products.index');
    }
}
