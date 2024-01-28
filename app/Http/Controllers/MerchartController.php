<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MerchartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merchant= DB::table('merchant')
        ->select('*','merchant.id as id')
        ->join('city','merchant.city_id' ,'=','city.id' )
        ->get();
        $data = [
            'merchant' => $merchant
        ];
        return view('merchant.merchart.merchart',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $city= DB::table('city')->get();
        $data = [
            'city'=>$city
        ];
        return view('merchant.merchart.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'merchant_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'expired_date' => 'required',
        ], [
            'merchant_name.required' => 'merchant name wajib diisi !!',
            'address.required' => 'address wajib diisi !!',
            'phone.required' => 'phone wajib diisi !!',
            'expired_date.required' => 'expired_date wajib diisi !!',
        ]);
        DB::table('merchant')->insert([
            'merchant_name' => $request->merchant_name,
            'city_id' => $request->city_id,
            'address' => $request->address,
            'phone' => $request->phone,
            'expired_date' => $request->expired_date,
        ]);
        return redirect()->route('merchant.index');
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
        $city= DB::table('city')->get();
        $merchant= DB::table('merchant')->where('id',$id)->first();
        $data = [
            'city'=>$city,
            'merchant'=>$merchant
        ];
        return view('merchant.merchart.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'merchant_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'expired_date' => 'required',
        ], [
            'merchant_name.required' => 'merchant name wajib diisi !!',
            'address.required' => 'address wajib diisi !!',
            'phone.required' => 'phone wajib diisi !!',
            'expired_date.required' => 'expired_date wajib diisi !!',
        ]);
        DB::table('merchant')->where('id',$id)->update([
            'merchant_name' => $request->merchant_name,
            'city_id' => $request->city_id,
            'address' => $request->address,
            'phone' => $request->phone,
            'expired_date' => $request->expired_date,
        ]);
        return redirect()->route('merchant.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('merchant')->where('id',$id)->delete();
        return redirect()->route('merchant.index');
    }
}
