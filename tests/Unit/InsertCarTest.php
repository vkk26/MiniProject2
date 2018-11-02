<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;
class InsertCarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCars()
    {
        //$this->assertTrue(true);
        $user = new Cars();
        //$user->id=52;
        $user->make='toyota';
        $user->model = 'SUV';
        $user->year = '2018';
        $this->assertTrue($user->save());
    }
}