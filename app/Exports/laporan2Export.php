<?php

namespace App\Exports;

use App\Models\laporan2;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class laporan2Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('order_items')
        ->selectRaw('YEAR(date) AS tahun, MONTH(date) AS bulan, users.full_name AS user, SUM(order_items.quantity * products.price) AS total_belanja')
        ->join('products', 'order_items.product_id', '=', 'products.product_id')
        ->join('users', 'order_items.user_id', '=', 'users.user_id')
        ->groupBy('tahun', 'bulan', 'user')
        ->orderBy('tahun')
        ->orderBy('bulan')
        ->orderByDesc('total_belanja')
        ->get();

    }
}
