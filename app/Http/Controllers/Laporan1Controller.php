<?php

namespace App\Http\Controllers;

use App\Exports\laporan1Export;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class Laporan1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporan1 = DB::table('Order_Items')
        ->join('Products', 'Order_Items.product_id', '=', 'Products.product_id')
        ->join('Merchant', 'Products.merchant_id', '=', 'Merchant.id')
        ->join('City', 'Merchant.city_id', '=', 'City.id')
        ->select(
            DB::raw('YEAR(date) AS Tahun'),
            DB::raw('MONTH(date) AS Bulan'),
            'City.name AS Kota',
            'Products.name AS Product',
            DB::raw('SUM(Order_Items.quantity * Products.price) AS Total_Penjualan')
        )
        ->groupBy('Tahun', 'Bulan', 'Kota', 'Product')
        ->orderBy('Tahun')
        ->orderBy('Bulan')
        ->orderBy('Kota')
        ->orderByDesc('Total_Penjualan')
        ->get();


        return view('merchant.laporan1.laporan1', ['laporan1' => $laporan1]);

    }
    public function export_excel()
	{
		return Excel::download(new laporan1Export, 'laporan.xlsx');
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
