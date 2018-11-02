<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;
class UpdateCarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateCars()
    {
        //$this->assertTrue(true);
        $user = Cars::find(20);
        $user->year='2000';
        $this->assertTrue($user->save());
    }
}