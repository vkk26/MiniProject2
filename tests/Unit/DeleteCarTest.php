<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;
class DeleteCarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteCars()
    {
        $user = Cars::find(10);
        $user->delete();
        $users = Cars::all();
        $this->assertDatabaseMissing('cars', ['id' => '10']);
    }
}