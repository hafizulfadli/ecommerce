<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function index()
    {
        $city = DB::table('city')->get();
        $data = [
            'city' => $city
        ];
        return view('merchant.city.city', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('merchant.city.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
        ], [
            'name.required' => 'name wajib diisi !!',
            'longitude.required' => 'longitude wajib diisi !!',
            'latitude.required' => 'latitude wajib diisi !!',
        ]);
        DB::table('city')->insert([
            'name' => $request->name,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
        ]);
        return redirect()->route('city.index');
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
        $city = DB::table('city')->where('id',$id)->first();
        $data = [
            'city' => $city
        ];
        return view('merchant.city.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
        ], [
            'name.required' => 'name wajib diisi !!',
            'longitude.required' => 'longitude wajib diisi !!',
            'latitude.required' => 'latitude wajib diisi !!',
        ]);
        DB::table('city')->where('id',$id)->update([
            'name' => $request->name,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
        ]);
        return redirect()->route('city.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('city')->where('id', $id)->delete();
        return redirect()->route('city.index');
    }
}
