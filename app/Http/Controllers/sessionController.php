<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    public function index()
    {
        return view("sesi.index");
    }

    public function masuk(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal harus terdiri dari 6 karakter',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('home');
        } else {
            return redirect('home');
        }
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ], [
            'name.required' => 'Nama Wajib Diisi',
            'email.required' => 'Email Wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal harus terdiri dari 8 karakter'
        ]);

        $data =[
            'name' => $request->name,
            'email' => $request->email,
            'password'=>Hash::make($request->password)
        ];

        User::create($data);

        return redirect('/login')->with('success', 'Register Berhasil, silahkan login');
    }
}
