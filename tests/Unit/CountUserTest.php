<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class CountUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCount()
    {
        //$this->assertTrue(true);
        $user = User::all();
        $count= $user->count();
        $this->assertEquals(50,$count);
    }
}