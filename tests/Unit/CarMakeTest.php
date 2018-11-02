<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;
class CarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMakeCars()
    {
        $car = Cars::inRandomOrder()->first();
        $this->assertContains($car->Make, ["Ford","Honda","Toyota"]);
    }
}