<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::table('users')->get();
        $data = [
            'users' => $users
        ];
        return view('merchant.users.users', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('merchant.users.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'date_of_birth' => 'required',
            'full_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ], [
            'date_of_birth.required' => 'date of birth wajib diisi !!',
            'full_name.required' => 'full name wajib diisi !!',
            'address.required' => 'address wajib diisi !!',
            'phone.required' => 'phone wajib diisi !!',
            'email.required' => 'email wajib diisi !!',
        ]);
        DB::table('users')->insert([
            'date_of_birth' => $request->date_of_birth,
            'full_name' => $request->full_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'active' => $request->active,
        ]);
        return redirect()->route('users.index');
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
        $users = DB::table('users')->where('user_id',$id)->first();
        $data = [
            'users' => $users
        ];
        return view('merchant.users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'date_of_birth' => 'required',
            'full_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ], [
            'date_of_birth.required' => 'date of birth wajib diisi !!',
            'full_name.required' => 'full name wajib diisi !!',
            'address.required' => 'address wajib diisi !!',
            'phone.required' => 'phone wajib diisi !!',
            'email.required' => 'email wajib diisi !!',
        ]);
        DB::table('users')->where('user_id',$id)->update([
            'date_of_birth' => $request->date_of_birth,
            'full_name' => $request->full_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'active' => $request->active,
        ]);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('users')->where('user_id', $id)->delete();
        return redirect()->route('users.index');
    }
}
