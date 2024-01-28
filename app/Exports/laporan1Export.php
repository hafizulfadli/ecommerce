<?php

namespace App\Exports;

use App\Models\laporan1;
use App\Models\Order_items;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class laporan1Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         return DB::table('Order_Items')
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
    }
}
