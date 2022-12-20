<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.register');
    }

    public function store(Request $request){
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required', 'email',
            'password' => 'required',
        ]);

        $credentials['password'] = bcrypt($credentials['password']);

        user::create($credentials);

        return redirect('register')->with('success', 'Registrasi berhasil', 'Silahkan login');
    }
}
