<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order_items = DB::table('Order_Items')
        ->join('Products', 'Order_Items.product_id', '=', 'Products.product_id')
        ->join('Users', 'Order_Items.user_id', '=', 'Users.user_id')
        // ->select('*','order_items.order_id as order_id')
        ->get();

        $data = [
            'order_items' => $order_items
        ];
        return view('merchant.order_items.order_items',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $order_items = DB::table('order_items')->get();
        $user = DB:: table('users')->get();
        $product = DB:: table('products')->get();

        $data = [
            'order_items'=>$order_items,
            'user'=>$user,
            'product'=>$product,
        ];
        return view('merchant.order_items.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('order_items')->insert([
            'date' => $request->date,
            'quantity' => $request->quantity,
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
        ]);
        return redirect()->route('order_items.index');
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
        $order_items = DB::table('order_items')->where('order_id',$id)->first();
        $user = DB:: table('users')->get();
        $product = DB:: table('products')->get();

        $data = [
            'order_items'=>$order_items,
            'user'=>$user,
            'product'=>$product,
        ];
        return view('merchant.order_items.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('order_items')->where('order_id',$id)->update([
            'date' => $request->date,
            'quantity' => $request->quantity,
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
        ]);
        return redirect()->route('order_items.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('order_items')->where('order_id',$id)->delete();
        return redirect()->route('order_items.index');
    }
}
