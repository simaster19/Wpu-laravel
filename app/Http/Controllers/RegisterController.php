<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register/index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        // Bisa Menggunakan array atau pip
        $validateData =  $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        //$request->session()->flash('success', 'registration Successfull, Please Login!');

        return redirect('/login')->with('success', 'Registration Successfull, Please Login!');
    }
}
