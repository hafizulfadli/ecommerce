<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $master_status = DB::table('master_status')->get();
        $data = [
            'master_status' => $master_status
        ];
        return view('merchant.master_status.master_status', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('merchant.master_status.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'name wajib diisi !!',
            'description.required' => 'description wajib diisi !!',
        ]);
        DB::table('master_status')->insert([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->route('master_status.index');
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
        $master_status = DB::table('master_status')->where('id',$id)->first();
        $data = [
            'master_status' => $master_status
        ];
        return view('merchant.master_status.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'name wajib diisi !!',
            'description.required' => 'description wajib diisi !!',
        ]);
        DB::table('master_status')->where('id',$id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->route('master_status.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('master_status')->where('id', $id)->delete();
        return redirect()->route('master_status.index');
    }
}
