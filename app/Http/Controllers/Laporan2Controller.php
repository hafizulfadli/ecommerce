<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Laporan2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

            $laporan2 = DB::table('order_items')
            ->selectRaw('YEAR(date) AS tahun, MONTH(date) AS bulan, users.full_name AS user, SUM(order_items.quantity * products.price) AS total_belanja')
            ->join('products', 'order_items.product_id', '=', 'products.product_id')
            ->join('users', 'order_items.user_id', '=', 'users.user_id')
            ->groupBy('tahun', 'bulan', 'user')
            ->orderBy('tahun')
            ->orderBy('bulan')
            ->orderByDesc('total_belanja')
            ->get();


            return view('merchant.laporan2.laporan2', ['laporan2' => $laporan2]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
