<?php

namespace App\Services;

use App\Models\User;

class RegisterService
{
    public function register(array $userData) {
        $newUser = User::create([
            'email' => $userData['email'],
            'password' => $userData['password'],
        ]);

        return $newUser;

    }
}