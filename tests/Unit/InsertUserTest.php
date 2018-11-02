<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class InsertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsert()
    {
        //$this->assertTrue(true);
        $user = new User();
        $user->id=51;
        $user->name='Vinay Karingula';
        $user->password = '123456';
        $user->email = 'vkk26@njit.edu';
        $this->assertTrue($user->save());
    }
}