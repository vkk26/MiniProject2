<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;
class CountCarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountCars()
    {
        //$this->assertTrue(true);
        $user = Cars::all();
        $count= $user->count();
        $this->assertEquals(50,$count);
    }
}