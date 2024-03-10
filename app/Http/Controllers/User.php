<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{   
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        return response()->json(['message' => 'Data berhasil disimpan', 'user' => $user]);
    }
}