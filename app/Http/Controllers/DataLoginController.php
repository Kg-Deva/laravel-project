<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DataLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function postlogin(Request $request) {
        // if(Auth::attempt($request->only('name','password'))) {
        //     return redirect('/dashboard')->with('success', 'Login Berhasil');
        // }
        // return redirect('/login')->with('error', 'Login Gagal');

        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
      
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/perpus');
            
        } else {
            return redirect('/login')->with('warning', 'Email atau password tidak ditemukan');
        }
       
        }
    

    /**
     * Store a newly created resource in storage.
     */
    public function logout() {
        Auth::logout();
        return redirect('/login');
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
