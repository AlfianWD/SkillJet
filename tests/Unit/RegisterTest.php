<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\RegisterService;
use App\Models\User;

class RegisterTest extends TestCase
{
    /**
     * A basic test register.
     * 
     * @return void
     */
    public function test_register_service_creates_user()
    {
      $registerService = new RegisterService();

      $userData = [
        'email' => 'alfianw230@gmail.com',
        'password' => 'alfianwahyu20',
      ];

      $user = $registerService->register($userData);

      $this->assertInstanceOf(User::class, $user);
      $this->assertEquals($userData['email'], $user->email);
      $this->assertTrue($userData['password'], $user->password);
    }
}

