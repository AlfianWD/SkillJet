<?php

namespace App\Http\Controllers\Api;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{   
    public function store(Request $request)
    {

        try {
            $request->validate([
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8',
                'confirmPassword' => 'required|same:password',
            ]);

            $user = User::create([
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);

            $user->save();

            return response()->json(['message' => 'Data berhasil dikirim']);

        } catch (\Exception $e) {

            Log::error('Error in UserController@store: ' . $e->getMessage());

        }
    }
}